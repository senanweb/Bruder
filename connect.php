<?php
    $dsn ='mysql:host=localhost;dbname=bruder'; //data source
    $user = 'root'; //users
    $pass = ''; //password
    try
    {
          $con = new PDO ($dsn, $user, $pass);
          echo 'connection is done';
    }
    catch (PDOException $e)
    {
        echo 'FFailed ' . $e->getMessage();
    }

