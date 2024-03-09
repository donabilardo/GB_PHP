<?php

namespace Gb\App\Controllers;

class TestController
{
    private $str;



    public function actionTest()
    {
        $this->str = "TESTTTTTT";
        echo $this->str;
    }

}