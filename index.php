<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Online Bank Management System
	</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style type="text/css">
	
nav
  {
   float: right;
   word-spacing: 30px;
   padding: 20px;
  }

nav li
  {
    display: inline-block; 
    line-height: 80px;
  }

</style>

<body>
    <div class="wrapper">
	<header>
        <div class="logo">
        <img src="e.jpg">
        <h2 style="color: white;font-size: 18px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h2>
    </div>

     <?php
            if (isset($_SESSION['login_user']))    /* ---LOGIC FOR username on website by using session_start()   */
            {
      ?>  
                 <nav>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="books.php">BOOKS</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                        <li><a href="feedback.php">FEEDBACK</a></li>
                   </ul>
                </nav>
             <?php

            }
            
            else
            {
              ?>

                <nav>
                 <ul>
                     <li><a href="index.php">HOME</a></li>
                     <li><a href="books.php">BOOKS</a></li>
                     <li><a href="student_login.php">STUDENT-LOGIN</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                </ul>
              </nav>

              <?php
            }
            

            ?>


    <!---
        <nav>
        	<ul>
        		<li><a href="index.php">HOME</a></li>
        		<li><a href="books.php">BOOKS</a></li>
        		<li><a href="student_login.php">STUDENT-LOGIN</a></li>
        		<li><a href="feedback.php">FEEDBACK</a></li>
        	</ul>
        </nav>            	
   -->
     </header>

     <section>
     	
     	<div class="sec_img">
        	<br><br><br>
           <div class="box">
           	<br><br><br><br>
           	<h1 style="text-align: center;font-size: 35px;">Welcome To Library</h1><br>
           	<h1 style="text-align: center;font-size: 25px;">Opens at: 9:00 Am</h1><br>
           	<h1 style="text-align: center;font-size: 25px;">Closes at: 5:00 Pm</h1><br> 
           	
           </div>       
      </div>
     </section>

     
   </div> 
 
    <?php
            
            include "footer.php";

    ?>


</body>
</html>