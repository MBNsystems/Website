<?php
//phpinfo();
//echo "Hello world!";
$connection = mysqli_connect('mysql', 'root', 'root');

$connection->query('CREATE DATABASE `lemp-docker`');
