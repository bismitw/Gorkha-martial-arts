<?php session_start();
?>
<html>
    <head>
    <title>
        about us 
    </title>
    <style>
body {
  margin: 0;
  padding: 0;
  background-color: #004526;
  
}

.container {
  max-width: 960px;
  margin: 10vh auto;
  padding: 40px 0;
  text-align: center;
  
  color: white;
}

.container h2 {

    text-align:center;
  font-size: 2rem;
  margin-bottom: 40px;
}

.container p {
    text-align:center;
  font-size: 1.1rem;
  line-height: 1.6;
  margin-bottom: 20px;
}


    </style>
    </head>
    <body>
    <?php require('header.php');   ?>

    <div class="container">
      <h2>About Us</h2>
      <p>Welcome to Gorkha Martial Arts, where we are dedicated to empowering individuals through the art of martial arts. Our mission is to...</p>
      <p>Founded by Bismit Wagle, our gym offers a diverse range of martial arts classes, expert fitness training, and self-defense courses...</p>
      <p>At Gorkha Martial Arts, we believe that the journey of self-discovery begins on the training mat...</p>
      <p>Join us today and embark on a transformative journey towards physical and mental excellence.</p>
    </div>
  
    </body>
</html>