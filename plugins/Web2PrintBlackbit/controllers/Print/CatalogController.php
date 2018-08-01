<?php

class Web2printBlackbit_Print_CatalogController extends \Website\Controller\Action
{

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->enableLayout();
        $this->view->layout()->setLayout('print_catalog');
        \Windhager\Service\PortalConfig::setPortalConfig($this->document->getProperty('portalConfig'));

        $this->view->printDate = $this->document->getProperty('printDate');
    }

    public function gartenkatalogContainerAction(){
        $document = $this->getParam("document");
        $allChildren = $document->getChildren();
        $this->view->allChildren = $allChildren;
    }

    public function emptyPageAction(){

    }
    public function pageAction(){
    }

    public function indexAction() {

    }
}