<?php

/**
 * 应用调度分配
 * @system UNPHP 
 * @version UNPHP 1.0
 * @author Xiao Tangren  <unphp@qq.com>
 * @data 2014-03-05
 * */
class UnPHP_Dispatcher
{

        private static $_instance = null;
        private $_request = null;
        private $_router = null;
        private $_view = null;
        private $_plugins = array();
        private $_error_controller;
        private $_default_module;
        private $_default_controller;
        private $_default_action;
        private $_route = false;

        public function __construct()
        {
                ;
        }

        /**
         * 设置404等异常错误接管的控制器。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         * @param type $controller
         */
        public function setErrorController($controller)
        {
                $this->_error_controller = $controller;
        }

        /**
         * 获得404等异常错误接管的控制器。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         * @return type
         */
        public function getErrorController()
        {
                return $this->_error_controller;
        }

        /**
         * 设置请求处理类。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         * @param UnPHP_Request_Abstract $request
         */
        public function setRequest(UnPHP_Request_Abstract $request)
        {
                $this->_request = $request;
        }

        /**
         * 设置视图引擎。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         * @param UnPHP_View_Interface $view
         */
        public function setView(UnPHP_View_Interface $view)
        {
                $this->_view = $view;
        }

        /**
         * 获取视图引擎。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         * @param UnPHP_View_Interface $view
         */
        public function getView()
        {
                return $this->_view;
        }

        /**
         * 设置默认的“模块”。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         */
        public function setDefaultModule()
        {
                
        }

        /**
         * 设置默认的“控制器”。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         */
        public function setDefaultController()
        {
                
        }

        /**
         * 设置默认“方法”。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         */
        public function setDefaultAction()
        {
                
        }

        /**
         * 注册分发插件
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         */
        public function registerPlugin(UnPHP_Plugin_Abstract $plugin)
        {
                
        }

        /**
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         * @return type
         */
        public function getRequest()
        {
                return $this->_request;
        }

        /**
         * 获取“路由适配器”，用以“添加”新的路由协议，或执行“路由匹配”动作。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         * @return type
         */
        public function getRouter()
        {
                if (null === $this->_router)
                {
                        $this->_router = new UnPHP_Router();
                }
                return $this->_router;
        }

        public function route()
        {
                if (!$this->_route)
                {
                        $this->_route = true;
                        try
                        {
                                if (!$this->getRouter()->route($this->_request))
                                {
                                        throw new UnPHP_Exception_RouterFailed('Router matching failed!');
                                }
                        }
                        catch (UnPHP_Exception $exc)
                        {
                                $exc->getMsg($this->_config['app']['debug'], $this->_dispatcher->getErrorController());
                        }
                }
        }

        /**
         * 请求响应类。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         */
        public function returnResponse()
        {
                
        }

        /**
         * 实例化自生。
         * @author Xiao Tangren  <unphp@qq.com>
         * @data 2014-03-05
         * @return type
         */
        public static function getInstance()
        {
                if (null == self::$_instance)
                {

                        self::$_instance = new self();
                }
                return self::$_instance;
        }

}
