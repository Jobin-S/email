<?php
if (isset($_POST['name'])  && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'jobins9633@gmail.com';
    $subject = "New form";
    $body = '<html>
                <body>
                   <h2>Feedback- form.com</h2>
                   <hr>
                   <p>Name:<br>'.$name'</p>
                   <p>Email:<br>'.$email'</p>
                </body>
            </html>';
    //headers
    $headers  = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; chartset-utf-8";
    //send
    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<br>';
        echo 'Thanks for contacting me. I will be shortly with you';
    } else {
        echo 'error';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Form with PHP</title>
</head>
<body>
      <form action="" method="post">
        <input type="text" name="name" placeholder="Your Name"><br>
        <input type="email" name="email" placeholder="Your Email"><br>
        <button type="submit">Submit</button>
   </form>   
</body>
</html>
