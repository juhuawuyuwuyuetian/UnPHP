<?php
/**
 * 异常类
 * @system UNPHP 
 * @version UNPHP 1.0
 * @author Xiao Tangren  <unphp@qq.com>
 * @data 2014-03-05
 * */
class UnPHP_Exception extends Exception
{

        protected $message;
        protected $code;
        private $_previous;

        public function __construct($message, $code = 0, $previos = null)
        {
                $this->message = $message;
        }

        public function getMsg($debug,$err_controller)
        {
                if ($debug || $err_controller->getRequest()->getQuery('debug')>=1)
                {
                        $err_controller->debugAction($this->getCode(),$this->getMessage(),  $this->getFile(),  $this->getLine(),  $this->getTraceAsString());
                }
                else
                {
                        $err_controller->error404Action();
                }
        }

}

class UnPHP_Exception_StartupError extends UnPHP_Exception
{

        protected $code = 1001;

}

class UnPHP_Exception_RouterFailed extends UnPHP_Exception
{

        protected $code = 1002;

}

class UnPHP_Exception_DispatchFailed extends UnPHP_Exception
{

        protected $code = 1003;

}

class UnPHP_Exception_LoadFailed extends UnPHP_Exception
{

        protected $code = 1004;

}

class UnPHP_Exception_LoadFailed_Module extends UnPHP_Exception
{

        protected $code = 1005;

}

class UnPHP_Exception_LoadFailed_Controller extends UnPHP_Exception
{

        protected $code = 1006;

}

class UnPHP_Exception_LoadFailed_Action extends UnPHP_Exception
{

        protected $code = 1007;

}

class UnPHP_Exception_LoadFailed_View extends UnPHP_Exception
{

        protected $code = 1008;

}
