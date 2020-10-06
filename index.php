<?php

   $conn=mysqli_connect("localhost","root","","form") or die("Connection to database failed");
   
  if(isset($_POST['submit'])) {

  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $message=$_POST['message'];

  $sql="INSERT into form (name,email,contact,message) values ('$name','$email','$contact','$message')";
  $result=mysqli_query($conn, $sql);

  if($result)
    echo "<script> alert('Your data is saved successfully \\n \\nName : $name\\nE-Mail : $email\\nContact : $contact\\nMessage: $message')</script>";
  else
    echo "We are facing some technical errors! <br> Sorry for the inconvenience";
}  

?>
<html>
<head>
    <title>Contact Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : ### ### ####</div>
        </div>
        <div class="screen-body-item">
          <form class="app-form" action="index.php" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="CONTACT NO" type="tel" name="contact" required>
            </div>
            <div class="app-form-group message">
              <textarea class="app-form-control" rows="3" placeholder="YOUR MESSAGE" type="text" name="message" required></textarea>
            </div>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="SEND" name="submit"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
</body>
</html>