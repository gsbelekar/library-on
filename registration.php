<?php
       include "connection.php";  
       include "navbar.php";

?>



<!DOCTYPE html>
<html>
<head>
  <title>
    Registration
  </title>

<link rel="stylesheet" type="text/css" href="style.css">
<link charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style type="text/css">
  
  section
  {
    margin-top: -20px;
  }

</style>
</head>

<!--
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
-->
<body>

<body>


<section>
   <div class="reg_img">
    <br><br>
    <div class="box2">
      <h1 style="text-align: center;font-size: 30px;">
        Library Management System</h1>
      <h1 style="text-align: center;font-size: 25px;">User Registration Form</h1> <br>
     
      <form name="Registration" action="" method="post">
      
        <div class="login">
           <input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
           <input class="form-control" type="text" name="last" placeholder="LastName" required=""><br>
           <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
           <input class="form-control" type="digit" name="contact" placeholder="Contact" required=""><br>
           <input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
           <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
           <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px;">   
         </div> 
      
   </form>
 </div>
</div>
</section>

    <?php
       
       if(isset($_POST['submit']))
       {
        
             $count=0;
             $sql="SELECT username FROM `student`";
             $res=mysqli_query($db,$sql);

             while($row=mysqli_fetch_assoc($res))
             {
              if($row['username']==$_POST['username'])
              {
                   $count=$count+1;
              }
            }
             if($count==0)
             {  

               mysqli_query($db,"INSERT INTO `student` VALUES ('$_POST[first]', '$_POST[last]', '$_POST[roll]', '$_POST[contact]', '$_POST[username]', '$_POST[password]');");
        
    ?>

                   <script type="text/javascript">
           
                   alert("Registration Successful");
  
                 </script>
        <?php
        
        }     

       else
       {

            ?> 
          <script type="text/javascript">
           
                   alert("The username already exist.");
  
                 </script>
    <?php
       }  
  }

    ?>

</body>
</html>