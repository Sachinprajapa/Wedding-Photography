<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>

  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
  }

  body{
    font-family:Arial, Helvetica, sans-serif;
    background:#181818;
  }

  /* ================= HEADER ================= */

  header{
    width:100%;
    position:sticky;
    top:0;
    z-index:1000;

    background:rgba(0,0,0,0.35);

    backdrop-filter:blur(15px);

    border-bottom:1px solid rgba(255,255,255,0.1);
  }

  /* ================= NAVBAR ================= */

  .navbar{

    max-width:1300px;

    margin:auto;

    padding:18px 25px;

    display:flex;

    justify-content:space-between;

    align-items:center;
  }

  /* ================= LOGO ================= */

  .logo{

    font-size:30px;

    font-weight:bold;

    color:#ffd700;

    letter-spacing:1px;

    cursor:pointer;

    transition:0.4s;
  }

  .logo:hover{
    transform:scale(1.05);
  }

  /* ================= LINKS ================= */

  .nav-links{

    display:flex;

    gap:30px;

    list-style:none;
  }

  .nav-links li a{

    text-decoration:none;

    color:white;

    font-size:17px;

    font-weight:500;

    position:relative;

    transition:0.4s;
  }

  /* HOVER LINE */

  .nav-links li a::after{

    content:"";

    position:absolute;

    width:0;

    height:2px;

    left:0;

    bottom:-6px;

    background:#ffd700;

    transition:0.4s;
  }

  .nav-links li a:hover::after{
    width:100%;
  }

  .nav-links li a:hover{
    color:#ffd700;
  }

  /* ================= MENU BUTTON ================= */

  .menu-btn{

    display:none;

    font-size:30px;

    color:white;

    cursor:pointer;
  }

  /* ================= RESPONSIVE ================= */

  @media(max-width:900px){

    .menu-btn{
      display:block;
    }

    .nav-links{

      position:fixed;

      top:80px;

      right:-100%;

      width:260px;

      height:100vh;

      background:rgba(0,0,0,0.95);

      backdrop-filter:blur(20px);

      flex-direction:column;

      align-items:center;

      padding-top:50px;

      transition:0.5s;
    }

    .nav-links.active{
      right:0;
    }

    .nav-links li{
      margin:20px 0;
    }

  }

</style>

<!-- ================= FONT AWESOME ================= -->

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<!-- ================= JAVASCRIPT ================= -->


    <header>

  <nav class="navbar">

    <!-- LOGO -->

    <div class="logo">
      Kirti Studio
    </div>

    <!-- MENU -->

    <ul class="nav-links" id="navLinks">

      <li><a href="./index.html">Home</a></li>

      <li><a href="./About.html">About</a></li>

      <li><a href="./Servcis.html">Services</a></li>

      <li><a href="./Packegs.html">Packages</a></li>

      <li><a href="./Gallary.html">Gallery</a></li>

      <li><a href="./Contact.html">Contact</a></li>

    </ul>

    <!-- HAMBURGER -->

    <div class="menu-btn" id="menuBtn">
      <i class="fa-solid fa-bars"></i>
    </div>

  </nav>

</header>
    <!-- ================= CONTACT SECTION ================= -->

<section class="contact-section">

  <!-- HEADING -->

  <div class="contact-heading">

    <h1>📞 Let’s Create Timeless Memories Together</h1>

    <p>
      “We’d love to hear about your special day.
      Have a wedding or event coming up?
      Let’s create beautiful memories together.”
    </p>

  </div>

  <!-- MAIN CONTAINER -->

  <div class="contact-container">

    <!-- ================= CONTACT FORM ================= -->

   <!-- ================= CONTACT FORM ================= -->

<div class="contact-form-box">

  <h2>📋 Book Your Shoot</h2>

  <!-- PHP CODE START -->

  <?php

    $conn = mysqli_connect("localhost","root","","kirti_studio");

    if(isset($_POST['submit'])){

      $full_name  = $_POST['full_name'];
      $email      = $_POST['email'];
      $phone      = $_POST['phone'];
      $event_date = $_POST['event_date'];
      $event_type = $_POST['event_type'];
      $message    = $_POST['message'];

      $sql = "INSERT INTO contact_form
      (full_name,email,phone,event_date,event_type,message)

      VALUES

      ('$full_name','$email','$phone',
      '$event_date','$event_type','$message')";

      $result = mysqli_query($conn,$sql);

      if($result){

        echo "
        <script>
          alert('Message Sent Successfully');
        </script>
        ";

      }else{

        echo "
        <script>
          alert('Something Went Wrong');
        </script>
        ";

      }

    }

  ?>

  <!-- FORM START -->

  <form method="POST">

    <div class="input-box">

      <input type="text"
      name="full_name"
      required>

      <label>Full Name</label>

    </div>

    <div class="input-box">

      <input type="email"
      name="email"
      required>

      <label>Email Address</label>

    </div>

    <div class="input-box">

      <input type="tel"
      name="phone"
      required>

      <label>Phone Number</label>

    </div>

    <div class="input-box">

      <input type="date"
      name="event_date"
      required>

      <label class="date-label">
        Event Date
      </label>

    </div>

    <div class="input-box">

      <select
      name="event_type"
      required>

        <option value="">
          Select Event Type
        </option>

        <option>Wedding</option>

        <option>Pre-Wedding</option>

        <option>Engagement</option>

        <option>Birthday</option>

        <option>Reception</option>

      </select>

    </div>

    <div class="input-box">

      <textarea
      name="message"
      required></textarea>

      <label>Message</label>

    </div>

    <button
    type="submit"
    name="submit"
    class="send-btn">

      Send Message

    </button>

  </form>

</div>

    <!-- ================= CONTACT INFO ================= -->

    <div class="contact-info">

      <h2>📍 Contact Information</h2>

      <div class="info-card">

        <p>📍 <strong>Studio Address</strong></p>

        <span>
          Swaroop Nagar, Kanpur,
          Uttar Pradesh, India
        </span>

      </div>

      <div class="info-card">

        <p>📞 <strong>Phone Number</strong></p>

        <span>+91 98765 43210</span>

      </div>

      <div class="info-card">

        <p>✉️ <strong>Email Address</strong></p>

        <span>hello@yourstudio.com</span>

      </div>

      <div class="info-card">

        <p>⏰ <strong>Working Hours</strong></p>

        <span>Monday – Sunday</span>
        <br>
        <span>10:00 AM – 8:00 PM</span>

      </div>

      <!-- SOCIAL LINKS -->

      <div class="social-links">

        <a href="#"><i class="fa-brands fa-instagram"></i></a>

        <a href="#"><i class="fa-brands fa-youtube"></i></a>

        <a href="#"><i class="fa-brands fa-facebook"></i></a>

        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>

      </div>

      <!-- QUICK BOOKING -->

      <div class="booking-line">

        <p>
          💬 Available for weddings, engagements,
          pre-weddings & destination shoots.
        </p>

      </div>

      <!-- QR CODE -->

      <div class="qr-contact">

        <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://wa.me/918318874953">

        <h3>Scan To Save Contact</h3>

      </div>

    </div>

  </div>

</section>

<!-- ================= GOOGLE MAP ================= -->

<section class="map-section">

 <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14235.388053092252!2d80.946166!3d26.846694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991bdb77df%3A0x63d6c4b6b6b6b6b6!2sLucknow!5e0!3m2!1sen!2sin!4v1710000000000!5m2!1sen!2sin"
      width="100%"
      height="100%"
      style="border:0;"
      allowfullscreen=""
      loading="lazy">
    </iframe>

</section>

<!-- ================= WHATSAPP FLOAT BUTTON ================= -->

<a href="https://wa.me/918318874953"
   class="whatsapp-btn"
   target="_blank">

   <i class="fa-brands fa-whatsapp"></i>

</a>

<!-- ================= FOOTER ================= -->

<footer class="footer">

  <div class="footer-container">

    <div class="footer-box">

      <h2>📍 Address</h2>

      <p>
        Swaroop Nagar, Kanpur,
        Uttar Pradesh, India
      </p>

    </div>

    <div class="footer-box">

      <h2>📞 Phone</h2>

      <p>+91 98765 43210</p>

    </div>

    <div class="footer-box">

      <h2>📸 Follow Us</h2>

      <div class="footer-social">

        <a href="#"><i class="fa-brands fa-instagram"></i></a>

        <a href="#"><i class="fa-brands fa-facebook"></i></a>

        <a href="#"><i class="fa-brands fa-youtube"></i></a>

      </div>

    </div>

    <div class="footer-box">

      <h2>⚡ Quick Links</h2>

      <p>Home</p>
      <p>Gallery</p>
      <p>Packages</p>
      <p>Contact</p>

    </div>

  </div>

  <div class="copyright">

    © 2026 Kirti Studio | All Rights Reserved

  </div>

</footer>

<!-- ================= FONT AWESOME ================= -->

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<!-- ================= CSS ================= -->

<style>

  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
  }

  body{
    background:#121212;
    color:white;
    overflow-x:hidden;
  }

  /* ================= CONTACT SECTION ================= */

  .contact-section{
    width:100%;
    padding:80px 20px;
  }

  .contact-heading{
    text-align:center;
    margin-bottom:60px;
  }

  .contact-heading h1{
    font-size:48px;
    color:#ffd700;
    margin-bottom:20px;
  }

  .contact-heading p{
    max-width:750px;
    margin:auto;
    color:#ddd;
    line-height:1.8;
    font-size:18px;
  }

  /* ================= CONTAINER ================= */

  .contact-container{

    max-width:1300px;

    margin:auto;

    display:flex;

    gap:40px;

    flex-wrap:wrap;
  }

  /* ================= FORM ================= */

  .contact-form-box{

    flex:1;

    min-width:320px;

    background:rgba(255,255,255,0.08);

    backdrop-filter:blur(15px);

    border-radius:30px;

    padding:40px;

    border:1px solid rgba(255,255,255,0.1);

    transition:0.5s;
  }

  .contact-form-box:hover{
    transform:translateY(-10px);
  }

  .contact-form-box h2{
    color:#ffd700;
    margin-bottom:35px;
    font-size:35px;
  }

  /* ================= INPUT ================= */

  .input-box{
    position:relative;
    margin-bottom:30px;
  }

  .input-box input,
  .input-box textarea,
  .input-box select{

    width:100%;

    padding:15px;

    background:rgba(255,255,255,0.05);

    border:none;

    outline:none;

    border-radius:15px;

    color:white;

    font-size:16px;

    border:1px solid rgba(255,255,255,0.1);
  }

  .input-box textarea{
    height:130px;
    resize:none;
  }

  .input-box label{

    position:absolute;

    left:15px;

    top:15px;

    color:#bbb;

    pointer-events:none;

    transition:0.4s;
  }

  .input-box input:focus ~ label,
  .input-box input:valid ~ label,
  .input-box textarea:focus ~ label,
  .input-box textarea:valid ~ label{

    top:-12px;

    left:12px;

    font-size:13px;

    color:#ffd700;

    background:#121212;

    padding:0 6px;
  }

  .date-label{
    top:-12px !important;
    font-size:13px !important;
    color:#ffd700 !important;
  }

  /* ================= BUTTON ================= */

  .send-btn{

    width:100%;

    padding:16px;

    border:none;

    border-radius:40px;

    background:#ffd700;

    color:black;

    font-size:18px;

    font-weight:bold;

    cursor:pointer;

    transition:0.4s;
  }

  .send-btn:hover{
    background:white;
    transform:translateY(-5px);
  }

  /* ================= INFO ================= */

  .contact-info{

    flex:1;

    min-width:320px;

    background:rgba(255,255,255,0.08);

    backdrop-filter:blur(15px);

    border-radius:30px;

    padding:40px;

    border:1px solid rgba(255,255,255,0.1);

    transition:0.5s;
  }

  .contact-info:hover{
    transform:translateY(-10px);
  }

  .contact-info h2{
    color:#ffd700;
    margin-bottom:35px;
    font-size:35px;
  }

  .info-card{
    margin-bottom:25px;
  }

  .info-card p{
    color:#ffd700;
    margin-bottom:8px;
    font-size:18px;
  }

  .info-card span{
    color:#ddd;
    line-height:1.7;
  }

  /* ================= SOCIAL ================= */

  .social-links{

    display:flex;

    gap:18px;

    margin:35px 0;
  }

  .social-links a{

    width:55px;

    height:55px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:50%;

    background:rgba(255,255,255,0.08);

    color:#ffd700;

    font-size:24px;

    text-decoration:none;

    transition:0.4s;
  }

  .social-links a:hover{
    transform:translateY(-8px) scale(1.08);
    background:#ffd700;
    color:black;
  }

  /* ================= BOOKING ================= */

  .booking-line{
    margin:30px 0;
    color:#eee;
    line-height:1.8;
  }

  /* ================= QR ================= */

  .qr-contact{
    text-align:center;
    margin-top:40px;
  }

  .qr-contact img{
    width:200px;
    border-radius:20px;
    margin-bottom:15px;
  }

  .qr-contact h3{
    color:#ffd700;
  }

  /* ================= MAP ================= */

  .map-section{
    width:100%;
    margin-top:50px;
  }

  iframe{
    filter:grayscale(100%);
  }

  /* ================= WHATSAPP ================= */

  .whatsapp-btn{

    position:fixed;

    bottom:25px;

    right:25px;

    width:65px;

    height:65px;

    border-radius:50%;

    background:#25D366;

    color:white;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:35px;

    text-decoration:none;

    box-shadow:0 10px 25px rgba(0,0,0,0.4);

    z-index:1000;

    transition:0.4s;
  }

  .whatsapp-btn:hover{
    transform:scale(1.1);
  }

  /* ================= FOOTER ================= */

  .footer{
    background:#0d0d0d;
    padding:70px 20px 30px;
  }

  .footer-container{

    max-width:1300px;

    margin:auto;

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));

    gap:40px;
  }

  .footer-box h2{
    color:#ffd700;
    margin-bottom:20px;
  }

  .footer-box p{
    color:#ddd;
    margin-bottom:12px;
  }

  .footer-social{
    display:flex;
    gap:15px;
  }

  .footer-social a{

    color:#ffd700;

    font-size:24px;

    transition:0.4s;
  }

  .footer-social a:hover{
    transform:translateY(-5px);
    color:white;
  }

  .copyright{

    text-align:center;

    margin-top:50px;

    color:#888;
  }

  /* ================= RESPONSIVE ================= */

  @media(max-width:768px){

    .contact-heading h1{
      font-size:34px;
    }

    .contact-heading p{
      font-size:16px;
    }

    .contact-form-box,
    .contact-info{
      padding:30px 20px;
    }

    .contact-form-box h2,
    .contact-info h2{
      font-size:28px;
    }

  }

</style>

<script>

  const menuBtn = document.getElementById("menuBtn");
  const navLinks = document.getElementById("navLinks");

  menuBtn.addEventListener("click", () => {

    navLinks.classList.toggle("active");

  });

</script>
</body>
</html>