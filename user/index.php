<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurement</title>
    <?php
    include 'links.php';
    ?>
</head>
<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <section id="photo">
        <div class="container-fluid">
            <img src="images/procurement.png" alt="" class="img-fluid px-5 pt-5 mt-5">
        </div>
    </section>
    <section id="contact">
      <div class="container-fluid mt-4">
        <h1>Contact Us</h1>
        <div class="row row-cols-md-2 row-cols-sm-1 g-2">
          <div class="col-12">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.4570798222667!2d19.843386014570672!3d41.342417806746205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135030fdf80c5831%3A0xf1c48c000dd8e503!2sCanadian%20Institute%20of%20Technology%20(%22Instituti%20Kanadez%20i%20Teknologjis%C3%AB%22)!5e0!3m2!1sen!2s!4v1673808465081!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <form class="col-12" onsubmit="sendEmail(); reset(); return false;" id="message-form">
            <h1>Get in touch</h1>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" placeholder="Please enter your name" required>
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
              <label for="floatingInput">Email address</label>
            </div>
            <div class="mb-3">
              <textarea class="form-control" id="message" rows="4" placeholder="How can we help you?"></textarea>
            </div>
            <div class="submit-button d-grid">
              <button class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <a class="to-top" href="#photo">
      <i class="fas fa-chevron-up"></i>
    </a>                                                 
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>