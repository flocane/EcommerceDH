<?php
 require "functions.php";
 require "helpers.php";
 require 'Classes/Auth.php';
 require 'Classes/Cookie.php';
  require 'Classes/Database.php';
  require 'Classes/DBJSON.php';
  require 'Classes/MYSQL.php';
  require 'Classes/Querys.php';
  require 'Classes/HashPassword.php';
  require 'Classes/Session.php';
  require 'Classes/User.php';
  require 'Classes/UserFactory.php';
  require 'Classes/Validator.php';

  Session::start();

  $validator = new Validator();
  $factory = new UserFactory();
  $db = MYSQL::conexion();
  $query = new Querys($db);
  $auth = new Auth();
