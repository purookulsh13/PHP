<?php
    class test{
        public $num;
        public $count=45;

        public function __construct(int $num_one, int $num_two)
        {
            echo ($this->init(30)."Class");
            $this->count = $num_one;
        }

        public function init($val){
            echo "Welcome";
            $this->num = $val;
        }

        public function __destruct()
        {
            echo $this->num + $this->count;
        }
    }

    $obj_test = new test(40,30,40);
    echo $obj_test->num;
    $obj_test->__destruct();
    $obj_test->count = 20;
    $obj_test->__destruct();
    $obj_test_two = new test(10,20);
    $obj_test_two->__destruct();
    

    
?>