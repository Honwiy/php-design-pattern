<?php
    abstract class IComponnet
    {
        protected $site;
        abstract public function getSite();
        abstract public function getPrice();
    }
?>