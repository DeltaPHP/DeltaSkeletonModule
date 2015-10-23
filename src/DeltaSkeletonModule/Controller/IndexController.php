<?php
/**
 * User: Vasiliy Shvakin (orbisnull) zen4dev@gmail.com
 */

namespace DeltaSkeletonModule\Controller;


use DeltaCore\AbstractController;
use DeltaSkeletonModule\Model\DemoText;

class IndexController extends AbstractController
{
    protected $demoText;

    public function getDemoText()
    {
        if (is_null($this->demoText)) {
            $this->demoText = new DemoText();
        }

        return $this->demoText;
    }

    public function IndexAction($params)
    {
        $text = $this->getDemoText()->getData();
        $this->getView()->assign("text", $text);
        $this->getView()->assignArray(["params" => $params]);
    }


    public function gviewAction()
    {
        $text = $this->getDemoText()->getData();
        $this->getView()->assign("text", $text . " gView");
        $this->setViewTemplate("index");
    }

} 