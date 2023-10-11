<?php
    include 'Connection.php';
    // inheritance - ４つある

    class User extends Connection{ //connectionのall取得？

        public function signUp($request){
            $firstname = $request['first_name']; //$request = $_POST['first_name']にするための引数？
            $lastname = $request['last_name'];
            $username = $request['username'];
            $password = $request['password'];

            $hashed_password = password_hash($password,PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (first_name,last_name,username,password)  VALUES('$firstname','$lastname','$username','$hashed_password')";

            if($this->conn->query($sql)){
                header('location: ../views/sign-in.php'); // ../ go outside page ?
                exit;
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        public function signIn($username,$password){
            $sql = "SELECT * FROM users WHERE username = '$username'";

            if($result = $this->conn->query($sql)){
                // make sure that there is no duplicate username
                if($result->num_rows == 1){
                    $user = $result->fetch_assoc();
                    if(password_verify($password,$user['password'])){
                    
                        session_start();

                        $_SESSION['id'] = $user['id'];
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['fullname'] = $user['first_name'] . " " . $user['last_name'];

                        header('location: ../views/dashboard.php');
                        exit;
                    }else{
                        die("ERROR: Password don't match ".$this->conn->error);
                    }
                }else{
                    die("ERROR: Username not found ".$this->conn->error);
                }
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        public function all_users(){
            $sql = "SELECT * FROM users";
     
            if($result = $this->conn->query($sql)){
                return $result;
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        public function Delete(){
            session_start();
            $id = $_SESSION['id'];
            $sql = "DELETE FROM users WHERE id = $id";

            if($this->conn->query($sql)){
                header("location: ../views/sign-in.php");
                exit;
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        public function getUser(){
            session_start();
            $id = $_SESSION['id'];

            $sql = "SELECT * FROM users WHERE id = $id";
     
            if($result = $this->conn->query($sql)){
                return $result->fetch_assoc();
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        public function edit($request){
            session_start();
            $id = $_SESSION['id'];
            $firstname = $request['first_name']; 
            $lastname = $request['last_name'];
            $username = $request['username'];
            
            $sql = "UPDATE users SET `first_name` = '$firstname' , `last_name` = '$lastname' , `username`= '$username' WHERE id = $id";
    
            if($this->conn->query($sql)){
                header('location: ../views/dashboard.php');
                exit;
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

    }
?>