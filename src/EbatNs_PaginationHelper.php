<?php

namespace InTradeSys\eBay\trading;


class EbatNs_PaginationHelper
{
    protected $_proxy;
    protected $_callname;
    protected $_request;
    protected $_responseElementToMerge;
    protected $_maxEntries;
    protected $_currentPage;
    protected $_receivedElements;
    protected $_accumulatedResponse;
    protected $_receivedMaxPages;
    protected $_bCountedByHandler;
    protected $_debug = 0;
    public function __construct($proxy, $callName, $request, $responseElementToMerge = '__COUNT_BY_HANDLER', $maxEntries = 200, $pageSize = 200, $initialPage = 1)
    {
        $this->_proxy = $proxy;
        $this->_callname = $callName;
        $this->_request = $request;

        if ($responseElementToMerge == '__COUNT_BY_HANDLER') {
            $this->_bCountedByHandler = true;
            $this->_responseElementToMerge = null;
        } else {
            $this->_responseElementToMerge = $responseElementToMerge;
            $this->_bCountedByHandler = false;
        }

        $this->_maxEntries = $maxEntries;

        $this->_currentPage = 0;
        $this->_receivedElements = 0;
        $this->_receivedMaxPages = - 1;

        $this->_accumulatedResponse = null;
        $this->_request->Pagination = new PaginationType();

        $this->_request->Pagination->EntriesPerPage = $pageSize;
        $this->_request->Pagination->PageNumber = ($initialPage - 1);
    }

    public function getNextPage()
    {
        $bFirst = false;
        if ($this->_currentPage == 0) {
            $bFirst = true;
        } else {
            if ($this->_maxEntries > 0) {
                if ($this->_bCountedByHandler) {
                    if ($this->_proxy->getPaginationCounter() >= $this->_maxEntries) {
                        return false;
                    }
                } else {
                    if (count($this->_accumulatedResponse) >=
                     $this->_maxEntries) {
                        return false;
                    }
                }
            }
        }

        $this->_request->Pagination->PageNumber ++;
        $res = call_user_func([$this->_proxy, $this->_callname], $this->_request);
        if ($bFirst) {
            $this->_accumulatedResponse = $res;
        }

        if ($res->Ack != AckCodeType::Success) {
            $this->_accumulatedResponse->Ack = $res->Ack;
            if (is_array($this->_accumulatedResponse->Errors)) {
                $this->_accumulatedResponse->Errors = array_merge($this->_accumulatedResponse->Errors, $res->Errors);
            } else {
                $this->_accumulatedResponse->Errors = $res->Errors;
            }
            return false;
        }

        if ($this->_bCountedByHandler) {
            $this->_receivedElements = $this->_proxy->getPaginationCounter();
        } else {
            if (is_array($res->{$this->_responseElementToMerge})) {
                $this->_receivedElements += count($res->{$this->_responseElementToMerge});
            }
        }

        $this->_receivedMaxPages = $res->PaginationResult->TotalNumberOfPages;
        $this->_currentPage = $res->PageNumber;

        if (! $bFirst && ! $this->_bCountedByHandler) {
            $this->_accumulatedResponse->{$this->_responseElementToMerge} = array_merge($this->_accumulatedResponse->{$this->_responseElementToMerge}, $res->{$this->_responseElementToMerge});
        }

        if ($this->_receivedMaxPages == 0 || ($this->_receivedMaxPages == $this->_currentPage)) {
            return false;
        }
        return true;
    }

    public function QueryAll()
    {
        while ($this->getNextPage());
        return $this->_accumulatedResponse;
    }
}
