<?php
 class IndexController extends Yaf_Controller_Abstract{
     public function indexAction(){
         $arr = array("name"=>"chenlei","son"=>"chenhaoxuan");
         $str = "chenlei";
         var_dump($this->getRequest()->getServer());
         $this->getView()->assign("foo","bar");
     }
}
