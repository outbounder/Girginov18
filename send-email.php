<?php
  $from_name = $_POST["name"];
  $from_email = $_POST["email"];
  $message = $_POST["message"];

  $headers = "Content-Type: text/html; charset=UTF-8";
  $subject = "Запитване от ".$from_name;

  $success = mail("pavelgdobrev@gmail.com", $subject, $message, $headers);

  if (!$success) {
    return header("Location: /?status=error#form");
    exit();
  }

  header("Location: /?status=success#form");
  exit();
?>