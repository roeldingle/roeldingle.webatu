<?php

class Index{

    function __construct(){
        /*variables*/
        $aData = array(
            "title" => "Roel Dingle"
        );
        
        include('views/v_home.php');
    }
    
    function _echo($str){
        echo $str;
    }


}

$oIndex = new Index;