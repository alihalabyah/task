<?php
class Ms_Yogesh_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction() {
        $this->loadlayout();
        $this->renderlayout();
    }

    public function sayHelloAction() {

    }
}
