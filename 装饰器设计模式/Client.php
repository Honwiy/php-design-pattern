<?php

    function __autoLoad($class_name)
    {
        include $class_name.".php";
    }

    class Client
    {
        private $basicSite;
        
        public function __construct()
        {
            $this->basicSite = new BasicSite();
            $this->basicSite = $this->wrapCompoment($this->basicSite);

            $siteNow = $this->basicSite->getSite();
            $format = "<br/>&nbsp;&nbsp;<strong>Total = $";
            $price = $this->basicSite->getPrice();

            echo $siteNow . $format . $price . "</strong><p/>";
        }

        private function wrapComponent(IComponnet $component)
        {
            $component = new Maintenance($component);
            $component = new Video($component);
            $component = new Database($component);
            return $component;
        }
    }
    $worker = new Client();
?>