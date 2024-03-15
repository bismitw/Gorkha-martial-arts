<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gorkha Martial Arts</title>
    <style >
        @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,800&display=swap');
       
.hero {

    width: 50%;
    padding: 2rem;

}
.back-video{
    position: absolute;
    right: 0;
    bottom: 0;
            z-index: -1;

}
@media (min-aspect-ratio: 16/9)
{
    .back-video{
        width:100%;
        height: auto;
    }
}
@media (max-aspect-ratio: 16/9)
{
    .back-video{
        width:auto;
        height: 100%;
    }
}
.hero p {
  color: white;
  font-size: 15px;
  font-family: 'Bricolage Grotesque', sans-serif;
  margin-top: 1rem;
  margin-bottom: 2rem; /* Added margin to separate from the button */
}
.hero h1{
    color: cyan;
    font-family: 'Bricolage Grotesque', sans-serif;
    font-size: 4rem;
    margin-top: 6rem;


}

.hero .btnn {
  background: transparent;
  color: white;
  border: 1px solid palegreen;
  font-size: 17px;
  padding: 15px;
  margin-top: 1rem; /* Adjusted margin-top to lower the button */
  display: block; /* Ensure the button takes up full width */
  width: fit-content; /* Adjust the width of the button */
  margin-left: 0; /* Center the button horizontally */
  margin-right: auto; /* Center the button horizontally */
}
.btnn:hover {
            background: whitesmoke;
            transition: 0.4s;
        }




    </style>
</head>
    <body>
    	<?php require('header.php');   ?>
      <div class="hero">
       <video autoplay loop muted plays-inline class="back-video">
        <source src="Untitled.mp4" type="video/mp4">
       </video>
       <h1>welcome to gorkha  martial arts</h1>
      <p>
        
"Empower Your Journey Through Martial Arts Excellence"
      </p>
      <a href="login.php" class="btnn">Get Started</a>
      </div>
      <div class="content">
      
    </div>

      
    </body>
</html>