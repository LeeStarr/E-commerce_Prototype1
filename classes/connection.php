<?php

class DBM{
    //protected allows function to be used 
    protected function connect(){
        try {
            $username="root";
            $pwd="";
            $dbh=new PDO('mysql:host=localhost;dbname=katal_tech', $username,$pwd);
            return $dbh;
        } catch (PDOException $e) {
            print "PDOException Error!: ". $e->getMessage()."<br/";
            die();//kill connection
        }
    }
}