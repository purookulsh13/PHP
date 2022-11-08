<?php
    class test{
        public $num = 45;
        private $count = 40;

        public function helo(){
            echo "welcome";
            // echo $this->num;
            // $this->num=89;
            echo $this->count;
            //$this also known as Psuedo variable. It refering as object inside th class.
        }

        public function __construct()
        {
            $this->num="fail";
        }

        public function __destruct()
        {
            echo "Pass";
        }
    }

    $obj_1 = new test();
    $obj_2 = new test();
    $obj_1->helo();
    echo $obj_2->num;
    echo $obj_1->num;

// => associative array
// -> object refferncing
?>