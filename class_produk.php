<?php 
    class Produk{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        } 

        public function getAllProduk(){
            $sql="SELECT * FROM produk";
            $rs = $this->dbh->query($sql);
            return $rs;        
        }

        public function getAllJenisProduk(){
            $sql="SELECT * FROM jenis_produk";
            $rs = $this->dbh->query($sql);
            return $rs;
        }
    }
?>