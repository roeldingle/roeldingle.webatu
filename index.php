<?php
require_once("config.php");
class Index extends Config{

    function __construct(){
        /*variables*/
        $aData = array(
            "title" => "Roel Dingle",
            "skills" => parent::getSkillsdata(),
            "social" => parent::getSocialData(),
            "works" => parent::getWorksData()
        );

        include('views/v_home.php');
    }


}

$oIndex = new Index;