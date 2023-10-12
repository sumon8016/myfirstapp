<?php
  include 'simple.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css?v=<?$version?>">
  

 
  <title>susanta</title>
</head>
<body>
    <nav class="navbar">
      <div class="logo">
        SUSANTA
      </div>
      <div class="containet">
        <a href="index.php">Home</a>
        <a href="About.php">Know Me</a>
        <a href="contact.php">Contact</a>
        <a href="service.php">Service</a>
        <a href="loginpage.php">Registration</a>
      </div>
    </nav>
   <div class="icons">
   <i class="fa-solid fa-code"></i>
    <span  class="textt"> </span>
   </div>
  
    
  <section class="auto_image">
    <div class="content">
      <h4>Hello its me  <span>Susanta Nayek</span></h4>
      <h3 class="and">And i am 
        <span class="text"></span>
      </h3>
      <a href="#"type="button"class="wellcome">WELLCOME TO SUSANTA</a>
      <div class="home-sci">
         <!-- <span class="textt"></span> -->
        <a href=""><i class="fa-solid fa-house"></i></a>
        <a href="https://wa.me/7980315977"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.facebook.com/susanta.nayek.566?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-twitter"></i></a>        
        <a href="tel:7080315977"><i class="fa-solid fa-user"></i></a>
        <a href="mailto:nayeksusanta410@gmail.com"><i class="fa-sharp fa-regular fa-envelope"></i></a>
    </div>
    <a href="Resumeofsusantanayek.jpg"download class="button"> Download CV<i class="fa-solid fa-download"></i></a>
    <a href="#" class="buttonn"> Download Photo</a>
    </div>
    <div class="homeimage">
      <img src="photom.jpg" alt="..">
    </div>
  </section>
<div class="footer">
    <div class="footer_content">
      Know Me
    </div>
    </div> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="index.js"></script>
<script>
  var typed = new Typed(".text",{
    strings:["Web Developer","software developer","Software Engineer","Server Controler"],
    typeSpeed:60,
    backSpeed:20,
    backDelay:1000,
    loop:true
  });
  var typed = new Typed(".textt",{
    strings:["wellcome susanta personal website",
  "You know me completely here"],
    typeSpeed:50,
    backSpeed:30,
    backDelay:1000,
    loop:true
  });
  

</script>
</body>
</html>
