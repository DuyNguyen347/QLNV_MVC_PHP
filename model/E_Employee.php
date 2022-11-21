<?php
    class Entity_Employee
    {
        public $idnv;
        public $hoten;
        public $idpb;
        public $diachi;
        
        public function __construct( $_id, $_name, $_idpb, $_diachi){
            $this->idnv = $_id;
            $this->hoten = $_name;
            $this->idpb = $_idpb;
            $this->diachi = $_diachi;
        }
    }
?>