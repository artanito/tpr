<?php

if (isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $res['status'] = false;
  $res['message'] = "";

  $to = 'artani799@gmail.com';
  $subject = "Contact from Message";
  $messageMl = '<p>Name : '.$name.'</p><br> <p>Email : '.$email.'</p><br> <p>Phone : '.$phone.'</p><br><p>Message : '.$message.'</p><br>';

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <web@thirdpillarrecruiting.com>' . "\r\n";

  $sendMail = mail($to, $subject, $messageMl, $headers);
  if ($sendMail) {
    $res['status'] = true;
    $res['message'] = "Mail Send Success";
  } else {
    $res['status'] = false;
    $res['message'] = "Problem to sending mail";
  }

  echo json_encode($res);
}
