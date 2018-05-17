<h2>Send your feedback</h2>
<?php
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  From: <input type="text" name="from"><br>
  Subject: <input type="text" name="subject"><br>
  Message: <textarea rows="10" cols="40" name="message"></textarea><br>
  <input type="submit" name="submit" value="Αποστολή">
  </form>
  <?php 
} else {    
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("stavrosrchp@gmail.com",$subject,$message,"From: $from\n");
    echo 'Thank you for your feedback. Return to the <a href="Homepage.php">Homepage';
  }
}
?>