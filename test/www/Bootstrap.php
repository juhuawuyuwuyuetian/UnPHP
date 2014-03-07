<?php

/**
 * 项目初始化引导类
 * 以“_init”开始命名的方法将被依次执行
 * @system UNPHP 
 * @version UNPHP 1.0
 * @author Xiao Tangren  <unphp@qq.com>
 * @data 2013-10-28
 */
class Bootstrap extends UnPHP_Bootstrap_Abstract
{

    /**
     * 定义“本地类”
     * @author Xiao Tangren  <unphp@qq.com>
     * @param Yaf_Dispatcher $dispatcher
     */
    public function _initRoute(UnPHP_Dispatcher $dispatcher)
    {
            $default_route = new UnPHP_Route_Simple("m",'c','a');
            $dispatcher->getRouter()->addRoute('default',$default_route);
    }
    
    public function _initLocalNames()
    {
            
    }

}