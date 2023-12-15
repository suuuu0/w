<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="nav.css">
  <style>
    body {
      font-family: 'Courier New', Courier, monospace;
    }
  </style>
</head>

<body>

  <?php
 
  

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

 
     require 'phpmailer/src/phpmailer.php';
      require 'phpmailer/src/SMTP.php';
      require 'phpmailer/src/Exception.php';

      $mail = new phpmailer\phpmailer\phpmailer(true);

      try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hop543091@gmail.com';
        $mail->Password = 'nufd xhpb gliu ehnr';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('sainivarinder384@gmail.com', 'varinder');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thanks for contacting us';
        $mail->Body = 'Hi ' . $name . ', thanks for contacting us. We will get back to you as soon as possible.<br>'
          . 'Email: ' . $email;

        $mail->send();
        echo 'Email sent successfully';
      } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    } else {
      echo "Error: " . $sql->error;
    }

    $sql->close();
  }

  $conn->close();
  ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="nav">
          <input type="checkbox" id="nav-check">
          <div class="nav-btn">
            <label for="nav-check">
              <span></span>
              <span></span>
              <span></span>
            </label>
          </div>
          <div class="nav-links">
            <ul>
              <li><a href="index.html" target="_blank">About</a></li>
              <li><a href="project.html" target="_blank">Project</a></li>
              <li><a href="contactus.php" target="_blank">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <header id="im">
    <div class="row justify-content-center" style="margin-top: 50px;">
      <div class="col-sm-4">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/002/227/847/small_2x/programmer-computer-expert-black-linear-icon-vector.jpg" class="rounded-circle " alt="Responsive image" style="width: 200px; height: 160px;">
      </div>
    </div>
  </header>

  <header id="h">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <h3 class="thin-heading mb-4">Message Us</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <textarea class="form-control" name="message" id="message" cols="30" rows="2" placeholder="Write your message"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <input type="submit"  class="btn btn-primary rounded-0 py-2 px-4" >
                  <span class="submitting"></span>
                </div>
              </div>
            </form>
            <div id="form-message-warning mt-4"></div>
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="row bg-light text-center text-lg-start" style="margin-top: 50px;">
    <div class="col ">
      <h5 class="text-uppercase"></h5>
      <ul class="list-unstyled mb-0">
        <li style="padding: 25px; display: inline;">
          <img src="https://th.bing.com/th/id/OIP.fb0LUcIKaVkBqExMCDUA9gHaFj?pid=ImgDet&rs=1" alt="" style="width: 50px;">
        </li>
        <li style="padding: 25px; display: inline;">
          <img src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Symbol.png" alt="" style="width: 70px;">
        </li>
        <li style="padding: 25px; display: inline;">
          <img src="https://www.citypng.com/public/uploads/preview/-41603683014llvc72nza3.png" alt="" style="width: 50px;">
        </li>
      </ul>
    </div>
  </div>

  <!--Grid row-->

  <!-- Grid container -->
  <div class="row">
    <!-- Copyright -->
    <div class="col">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">varinder.net</a>
      </div>
    </div>
    <!-- Copyright -->
  </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>

</body>

</html>
