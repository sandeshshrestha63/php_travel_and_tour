<?php
session_start();
include 'settings.php';
include 'connect.php';
include 'helpers.php';
include 'loginfunctions.php';
include 'userfunctions.php';
include 'advertismentfunctions.php';
include 'categoryfunctions.php';
include 'packagefunctions.php';
include 'enquiryfunction.php';
include 'contactusfunction.php';
include 'dashboardfunctions.php';
$conn = new Connection(DBSERVER,DBUSER,DBPASS,DBNAME);
$conn = $conn->connectDB();

