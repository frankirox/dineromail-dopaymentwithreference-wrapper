<?php

require("../DineroMailGateway.php");

abstract class DineroMailObject
{
    protected $_gateway = null;


    public final function __construct()
    {
        $gateway = new DineroMailGateway(DINEROMAIL_NS_GATEWAY, DINEROMAIL_WDSL_GATEWAY);
        $this->_gateway = $gateway;
    }

    public function getGateway()
    {
        return $this->_gateway;
    }

    /**
     * Represents and object as SOAPVar
     *
     * @return SOAPVar the SOAPVar object containing all the required data
     */
    public abstract function asSoapObject();


}