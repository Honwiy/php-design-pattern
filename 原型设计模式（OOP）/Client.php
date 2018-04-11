<?php
    function __autoload($class_name)
    {
        include $class_name.".php";
    }

    class Client
    {
        private $market;
        private $manage;
        private $engineer;

        public function __construct()
        {
            $this->makeConProto();

            $Tess = clone $this->market;
            $this->setEmployee($Tess, "Tess Smith", 101, "ts101-1234","tess.png");
            $this->showEmployee($Tess);
        }
        public function makeConProto()
        {
            $this->market = new Marketing();
            $this->manage = new Management();
            $this->engineer = new Engineering();
        }
        public function showEmployee(IAcmePrototype $employeeNow)
        {
            $px = $employeeNow->getPic();
            echo "<img src=$px width='150' height='150'><br/>";
            echo $employeeNow->getName()."<br/>";
            echo $employeeNow->getDept().":".$employeeNow::UNIT."<br/>";
            echo $employeeNow->getID()."<p/>";
        }
        public function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px)
        {
            $employeeNow->setName($nm);
            $employeeNow->setDept($dp);
            $employeeNow->setID($id);
            $employeeNow->setPic("pix/$px");
        }
    }
    $worker = new Client();
?>