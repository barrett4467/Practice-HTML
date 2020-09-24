<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Form</title>
</head>
<body>
  <header class="body"></header>
  <section class="body">
    <!-- bit of php so that the form actually sends an email -->
  <?php
    echo "$_POST"
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $from = "From: Demo";
    $to = "barrettcode@gmail.com";
    $subject = "You've got mail";

    $body = "From: $name\n Email: $email\n Message:\n $message";
    echo Thank you
    if($_POST["submit"]{
      if(mail($to, $subject, $body, $from)){
        console.log("Your message has been sent!")
      }
      else {
        console.log("Try again!")
      }
    })
  ?>
   
  <footer class="body"></footer>

  
</body>
</html>