<?php
    class BasicSite extends IComponnet
    {
        public function __construct()
        {
            $this->site = "Basic Site";
        }

        public function getSite()
        {
            return $this->site;
        }

        public function getPrice()
        {
            return 1200;
        }
    }
?>