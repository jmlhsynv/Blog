<?php

include 'config.php';

function check_session(){
    header_remove();
    session_start();
    if(!isset($_SESSION['login'])){
            header('location: login.php');
    }


}

function yoxla_session(){
    header_remove();
    session_start();
    if(!isset($_SESSION['login'])){
            header('location: ../login.php');
    }
    

}

function login(){
    if($_POST){

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "camal" && $password == "1234"){
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header('location:index.php');
    }else{
            echo '<p style="color:red; text-align: center;">Username or Password is incorrect</p>';
    }

    }
}

function logout(){
    session_start();
    session_destroy();
    header('location: login.php');
}

