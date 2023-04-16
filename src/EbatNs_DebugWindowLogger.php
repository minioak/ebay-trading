<?php

namespace InTradeSys\eBay\trading;


class EbatNs_DebugWindowLogger extends EbatNs_Logger
{
    protected $_out;

    public function __construct($proxy)
    {
        parent::__construct(true, 'stdout');
        $proxy->attachLogger($this);
        $proxy->setLoggingOptions(['LOG_TIMEPOINTS' => true, 'LOG_API_USAGE' => true]);
    }

    public function log($msg, $subject = null)
    {
        ob_start();
        parent::log($msg, $subject);
        $this->_out .= ob_get_clean();
    }

    public function getDebugContent()
    {
        return '<div style="position:absolute;top:5px;left:600px;width:300px;height:400px;margin:10px auto;border:1px solid #000;border-right:none;text-align:left;padding:3px 5px;overflow:auto;" id="debugWindow">'
        . $this->_out
        . '</div>';
    }
}
