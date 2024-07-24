 <?php

      //send mail for registration
    if($_SERVER['REQUEST_METHOD']=='POST'){

            $name=strtolower($_POST["uname"]);
            $mail=$_POST['gname'];
            $subject="Welcome to Our Community!!!";
            $message="Thank you for joining us!\n Your registration has been successfully completed.\n Thiagarajar college is proudly welcome you!";

            $mailheader="From: ". "Thiagarajar college" ."<". "college@gmail.com". ">\r\n";
            $recipient=$mail;

            mail($recipient, $subject, $message, $mailheader);

           echo "mail sent";

   
      }

  ?>          