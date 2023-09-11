<?php
if (isset($_POST['submit'])) { 
      $name = $_POST['name'];
      $email = $_POST['mail'];
      $ToEmail = 'artucastro17@gmail.com';
      $mailheader = "From: ".$_POST["mail"]."\r\n"; 
      $mailheader .= "Reply-To: ".$_POST["mail"]."\r\n"; 
      $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
      $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
      $MESSAGE_BODY .= "Email: ".$_POST["mail"]."<br>"; 
      $MESSAGE_BODY .= "Subject:".$_POST['subject']."<br />";  
      $MESSAGE_BODY .= "Comment: ".nl2br($_POST["message"])."<br>"; 
      if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader))
      {
      echo "<script>alert('Mail was sent !');</script>";
      echo "<script>document.location.href='index2.html'</script>";
      }
      else
      {
      echo "<script>alert('Mail was not sent. Please try again later');</script>";
      }
     }