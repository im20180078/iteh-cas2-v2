<?php

class User{
    public $id;
    public $username;
    public $password;

    public function __construct($id=null, $username=null, $password=null){
        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
    }

    public static function loginUser($user, $baza){
        if($baza[0]['username'] == $user->username && $baza[0]['password'] == $user->password){
            return true;
        }


        return false;
    }





}
?>