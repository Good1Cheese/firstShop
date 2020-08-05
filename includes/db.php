<?php
require 'rb.php';
require 'functions.php';

R::setup('mysql:host=localhost;dbname=shop', 'root', '');

if(! R::testConnection() )
{
    echo 'Lost database connection';
}

session_start();


