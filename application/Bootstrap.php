<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{
     public function _initConfig(Yaf_Dispatcher $dispatcher){
     }

     public function _initPlugin(Yaf_Dispatcher $dispatcher){
     }

     public function _initRouter(Yaf_Dispatcher $dispatcher){
         $router = Yaf_Dispatcher::getInstance()->getRouter();
         $route = new Yaf_Route_Simple("m","c","a");
         $router->addRoute("name",$route);
     }
}    
