<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require'./includes/db.php';
session_start();
ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="./css/webd3201.css" />
		<!--
		Filename: <?php echo "$filename";?>.php this will be echo'ed using a PHP variable eventually
		-->
		
	</head>
	
	
	
	<body>
		<div id="container">
			<div id="header">
				<img src="images\logo.png" alt="Site Logo" href="index.php" style="display: inline;" />
				
			</div>
			<div id="sites">
				<ul style="display: inline;">
					<li><a href="index.php" style="display: inline;">Home</a></li>
					<li><a href="Lab2Q3.php" style="display: inline;">Lab 2 Question 3</a></li>
					
					<li><a href="Course.php"  style="display: inline;">Course</a></li>
					
					
					
				</ul>
			</div>
		</div>
		<div id="content-container">