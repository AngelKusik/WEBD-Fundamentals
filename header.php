<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- CSS style sheet -->
	<link rel="stylesheet" type="text/css" href="./css/webd2201.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&amp;family=Montserrat&amp;family=Sacramento&amp;display=swap" rel="stylesheet"/>
  <!-- favicon to be shown in the browser tab -->
  <link rel="icon" href="images/favicon.ico"/>

	<!--
	Author: Angelica Kusik
	Filename: <?php echo $file . "\n"; ?>
	Date: <?php echo $date . "\n"; ?>
	Description: <?php echo $description . "\n" ?>

  Include as a require() the file that contains the functions that are being used across the website.
  Includes: <?php require ("./includes/functions.php"); ?>
  
	-->
	<title>WEBD2201 - <?php echo $title; ?></title>
</head>
<body>
<div id="container">
	<div id="header">
		<img src="./images/kusika_logo.png" alt="Website Logo" />
		<h1>
			<?php echo $banner; ?>
		</h1>
	</div>
	<div id="sites">
		<ul>
			<li><a href="http://opentech.durhamcollege.org/pufferd/webd2201/">WEBD2201</a></li>
			<li><a href="http://www.w3schools.com">W3Schools</a></li>
			<li><a href="http://validator.w3.org">XHTML Validator</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>
			<li><a href="http://php.net/manual/en/index.php">PHP Manual</a></li>
			<li><a href="http://www.durhamcollege.ca">Durham College</a></li>

		</ul>
	</div>
	<div id="content-container">
		<div id="navigation">
			<h3>
				Local Navigation Bar
			</h3>
			<ul>
				<li><a href="./index.php">WEBD2201 Home Page</a></li>
				<li><a href="./lab1.php">Lab 1: Basic XHTML pages</a></li>
				<li><a href="./lab2.php">Lab 2: Working with HTML Tables</a></li>
				<li><a href="./lab3.php">Lab 3: Formatting and Layout with Styles</a></li>
        <li><a href="./termtest1.php">WEBD2201 Term Test 1</a></li>
				<li><a href="./lab4.php">Lab 4: PHP Chapter Files from textbook</a></li>
        <li><a href="./lab5.php">Lab 5: Basic PHP Scripting</a></li>
        <li><a href="./lab6.php">Lab 6: Self-referring Forms with Data Validation</a></li>
        <li><a href="./termtest2.php">Term Test 2</a></li>
        <li><a href="./lab6.php">Lab 7: Database Intro</a></li>
        <li><a href="./lab9.php">Lab 9: Database/PHP User Login</a></li>
        <li><a href="./lab10.php">Lab 10: Database/PHP User Registration</a></li>
        <li><a href="./termtest3.php">Term Test 3</a></li>
			</ul>
		</div>
		<div id="content">
