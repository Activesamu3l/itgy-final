<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
  $name = htmlentities($_POST['name']);
  $email = htmlentities($_POST['email']);
  $subject = htmlentities($_POST['subject']);
  $message = htmlentities($_POST['message']);

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'immanuels045@gmail.com';
  $mail->Password = 'pdygfvdkaqjzzetj';
  $mail->Port = 465;
  $mail->SMTPSecure = 'ssl';
  $mail->isHTML(true);
  $mail->setFrom($email, $name);
  $mail->addAddress('immanuels045@gmail.com');
  $mail->Subject = ("$email ($subject)");
  $mail->Body = $message;
  $mail->send();

  echo
  "
  
  <script>
  alert('Sent Successfully');
  document.location.href = '/contact_us.php'
  </script>
  ";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/contact_us.css">
</head>
<body>
    <div class="overlap">
        <div class="frame">
            <div class="logo">Solar ZONE</div>
            <div class="navbar">
                <div class="text-wrapper-2"><a href="/html/index.html" style="text-decoration: none; color: #000000;">Home</a></div>
                <div class="text-wrapper-2"><a href="/html/about.html" style="text-decoration: none; color: #000000;">About Us</a></div>
                <div class="text-wrapper-2"><a href="/html/benefits.html" style="text-decoration: none; color: #000000;">Benefits</a></div>
                <div class="text-wrapper-2"><a href="/html/why_solar.html" style="text-decoration: none; color: #000000;">Why Solar?</a></div>
                <div class="text-wrapper-2"><a href="/html/directory.html" style="text-decoration: none; color: #000000;">Directory</a></div>
                <div class="text-wrapper-2"><a href="/html/resources.html" style="text-decoration: none; color: #000000;">Resources</a></div>
                <div class="text-wrapper-2"><a href="/html/our_team.html" style="text-decoration: none; color: #000000;">Our Team</a></div>
                <div class="text-wrapper-2"><a href="/html/testimonials.html" style="text-decoration: none; color: #000000">Testimonials</a></div>
                <div class="text-wrapper-3"><a href="/contact_us.php" style="text-decoration: none; color: #000000;">Contact Us</a></div>
            </div>
            <button type="button" class="div-wrapper"><div class="text-wrapper-4">Get started</div></button>
        </div>
        <div class="contactcontainer">
            <section class="contact">
                <div class="contacttext">
                    <h1 class="contacttext">Contact us Today</h1>
                    <h3 class="contacttext2">Do you have specific things to tell us? Contact us below</h3>
                </div>
            </section>
        </div>
        

        <section class="form-container ">
            <div>
                <img src="/images/img contact.png" alt="Contact Image">
            </div>
            
            <div class="">
               
                <form  method='post' class="contact-form">
                    <input type="text" placeholder="Name" class="name" name='name'>
                    <input type="text" placeholder="Email address" class="email" name='email'>
                    <input type="text" placeholder="Subject" class="subject" name='subject'>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="message" ></textarea>
                    <button type="submit" name='send' class="submit-button">Submit</button>
                </form>
            </div>
        </section>
        
        <div class="frame-4">
            <img class="line" src="/images/Line 1.jpg" />
            <div class="text-wrapper-7">Solar Zone</div>
        </div>

    </div>

    
</body>
</html>