<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 07-Jan-18
 * Time: 9:19 AM
 */

namespace App\classes;


class Blog
{
    private function dbconnection(){
        $hostName='localhost';
        $userName='root';
        $password='';
        $dbName='blog';
        $link = mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }

    public function saveBlogInfo($data){
        $dataSend = "INSERT INTO blogs(blog_title,author_name,blog_description,status) VALUES ('$data[blog_title]','$data[author_name]','$data[blog_description]','$data[status]')";
        if(mysqli_query(Blog::dbconnection(),$dataSend)){
            $massage ="blog Info added successfully!!";
            return $massage;
        }else{
            die('Query Problem'.mysqli_error(Blog::dbconnection()));
        }
    }

    public function viewBlogInfo(){


        $dataReceive = "SELECT * FROM blogs";
        if(mysqli_query(Blog::dbconnection(),$dataReceive)){
            $result=mysqli_query(Blog::dbconnection(),$dataReceive);
            return $result;
        }else{
            die('Query Problem'.mysqli_error(Blog::dbconnection()));
        }
    }
}