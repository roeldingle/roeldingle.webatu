<?php

class Index{

    function __construct(){
        /*variables*/
        $aData = array(
            "title" => "Roel Dingle",
            "skills" => array(
                "Html/Css",
                "JS/JQuery",
                "PHP/MySql",
                "Linux",
                "Wordpress",
                "Version Control"
            ),
            "social" => array(
                array(
                    "link" => "https://www.facebook.com/roel.dingle",
                    "image" => "images/web/fb.png"
                ),
                 array(
                    "link" => "https://twitter.com/w3bh3ro",
                    "image" => "images/web/twitter.png"
                ),
                 array(
                    "link" => "http://www.linkedin.com/pub/roel-dingle/52/a30/711",
                    "image" => "images/web/linkedin.png"
                ),
                 array(
                    "link" => "http://roeldingle.wordpress.com/",
                    "image" => "images/web/wordpress.png"
                ),
                array(
                    "link" => "https://github.com/roeldingle/roeldingle.webatu/",
                    "image" => "images/web/git2.png"
                )
            )
        );

        
        
        include('views/v_home.php');
    }
    
    function _echo($str){
        echo $str;
    }


}

$oIndex = new Index;