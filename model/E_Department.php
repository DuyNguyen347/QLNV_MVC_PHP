<?php
    class Entity_Department
    {
        public $idpb;
        public $tenpb;
        public $mota;
        
        public function __construct( $_id, $_name, $_mota){
            $this->idpb = $_id;
            $this->tenpb = $_name;
            $this->mota = $_mota;
        }
    }
?>