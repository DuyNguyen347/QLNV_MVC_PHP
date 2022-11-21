<?php
    class Connection{
        public function __construct(){}
        public function execute($query){
            $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
            //Lựa chọn cơ sở dữ liệu
            mysqli_select_db($link,"dulieu");
            $result = mysqli_query($link,$query);
            // mysqli_close($link);
            return $result;
        }
        public function execute_db($db,$query){
            $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
            //Lựa chọn cơ sở dữ liệu
            mysqli_select_db($link,$db);
            $result = mysqli_query($link,$query);
            mysqli_close($link);
            return $result;
        }
        
    };
?>