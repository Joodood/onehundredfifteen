<?php

class Poppy {

    public function __construct() {
        $url = $this->getUrl();

    }

    function Sidebar() {

    }
    function SidebarHeader() {
        
    }
    function Content() {
        
    }

    public function getUrl() {

        $uri = $_SERVER['REQUEST_URI'];
        // echo $uri;
        // echo "<br>";

        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || 
        $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        // echo $protocol;
        // echo "<br>";

        // $host = $_SERVER['HTTP_HOST'];
        // echo $host;
        // echo "<br>";

        $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        // echo $url;
        return $url;

        // $query = $_SERVER['QUERY_STRING'];
        // echo  $query;

        // echo "<br>";

        // echo dirname(dirname(__FILE__));
   

    }

}


?>