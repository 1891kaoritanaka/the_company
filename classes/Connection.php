<?php
    class Connection{
        private $servername = 'localhost';
        private $username = 'root';
        private $password = ''; //XAMPP(Windows)は空欄,(Mac)はroot
        private $database = 'the_company'; //ここだけデータベースごとに変更

        public $conn; //他からアクセスするのでpublic

        public function __construct(){ //自動的に実行されるのでreturn不要
            $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database); //PHPとSQL間の言語翻訳

            if($this->conn->connect_error){
                die('ERROR: '.$this->conn->connect_error); //die = stop code
            }
        }
    }
?>