<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 07-Jan-18
 * Time: 12:41 PM
 */

namespace App\classes;


class Database
{
    public function dbconnection(){
        $hostName="localhost";
        $userName="root";
        $password="";
        $dbName="blog";
        $link = mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }
}