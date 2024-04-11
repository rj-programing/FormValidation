<html>
  <head>
    <title>Sign in</title>
    <style>

      *{
        
      }
      .form{
        height: auto;
        width: 20%;
        border-radius: 10px;
        margin-left: 40%;
        margin-top: 10%;
        background-color: white;
      }
      .log {
        text-align: center;
        font-size: 25px;
        padding-top: 20px;
        font-family: Arial Black;
      }

      .enter{
        margin-left: 20px;
        font-family: Arial Black;
      }
      
      .text input{
        margin-left: 20px;
        height: 30px;
        width: 260px;
        outline: none;
      }

      .ne{
        color: blue;
        font-family: sans-serif;
      }
      .new {
        font-family: sans-serif;
        margin-left: 20px;
      }
      .submit {
        color: white;
        background-color: blue;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        font-size: 15px;
        margin-bottom: 30px;
        margin-top: 20px;
        cursor: pointer;
        transition: 0.3s;
      }

      .submit:hover{
        background-color: skyblue;
        transition: 0.3s;
      }
  </style>
  </head>

  <body bgcolor="#dfdfdf">
    <div class="form">
      <p class="log">Sign Up</p>

      <div class="text">
        <form method="get">
          <p class="enter">Enter Username</p>
          <input type="text" name="uname">

          <p class="enter">Enter Password</p>
          <input type="password" name="psd">
          
          <p class="enter">Enter Confirm Password</p>
          <input type="password" name="psd1">

          <p class="new">Already have an account?&nbsp<span class="ne"><a href="signin.php">Sign In</a></span></p>

          <input type="submit" value="submit" name="sub" class="submit"> 
        </form>
      </div>
    </div>
  </body>
</html>

<?php

      include("conn.php");

      if(isset($_GET['sub']))
      {
        $nm = $_GET['uname'];
        $ps = $_GET['psd'];
        $cp = $_GET['psd1'];
        if($ps==$cp)
        {
          $sql = mysqli_query($con,"insert into std_info values('$nm', '$ps')");

          
        }
        else
        {
          echo "<b><center>Password not Matched</center></b>";
        }
        
      }
?>