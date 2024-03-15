<?php session_start();
?>
<html>
    <head>
        <title>

        </title>
        <style> 
.services{

    padding: 50px ;
   
}
.services-info{
    text-align: center;
    margin-top: 6rem;
}
.services-info h1{
    font-size: 50px;
    marin bottom: 20px;
    margin-left:-30%;
}
.services-info p{
    font-size: 25px;
    font-weight: bold;
}
.services-row{
    display: grid;
    grid-template-columns: repeat(3,200px);
    grid-auto-rows: mixmax(150px,auto);
    grid-gap: 3em;
    justify-content: center;
}
.services-box{
    box-shadow: 2px 3px 5px grey;
    background: whitesmoke;
    padding: 10px;
}
</style>
    </head>
    <body>
    <?php require('header.php');   ?>
    <section id="services">
        <div class="services-info">
            <h1>Our <span id="blue">Services</span></h1>
            <p>what we provide</p>
        </div>
        <div class="services-row">
            <div class="services-box">
                <h2>Martial Arts Classes</h2>
                <p>Gorkha Martial Arts offers a diverse range of martial arts classes, catering to all levels of experience. Whether you're a beginner or an advanced practitioner, you can choose from disciplines like Jiu-jitsu, Karate, Judo, and Muay Thai.</p>

            </div>
            <div class="services-box">
                <h2>Martial Arts Classes</h2>
                <p>Gorkha Martial Arts offers a diverse range of martial arts classes, catering to all levels of experience. Whether you're a beginner or an advanced practitioner, you can choose from disciplines like Jiu-jitsu, Karate, Judo, and Muay Thai.</p>
                
            </div>
            <div class="services-box">
                <h2>Martial Arts Classes</h2>
                <p>Gorkha Martial Arts offers a diverse range of martial arts classes, catering to all levels of experience. Whether you're a beginner or an advanced practitioner, you can choose from disciplines like Jiu-jitsu, Karate, Judo, and Muay Thai.</p>
                
            </div>
            <div class="services-box">
                <h2>Martial Arts Classes</h2>
                <p>Gorkha Martial Arts offers a diverse range of martial arts classes, catering to all levels of experience. Whether you're a beginner or an advanced practitioner, you can choose from disciplines like Jiu-jitsu, Karate, Judo, and Muay Thai.</p>
                
            </div>
            <div class="services-box">
                <h2>Martial Arts Classes</h2>
                <p>Gorkha Martial Arts offers a diverse range of martial arts classes, catering to all levels of experience. Whether you're a beginner or an advanced practitioner, you can choose from disciplines like Jiu-jitsu, Karate, Judo, and Muay Thai.</p>
                
            </div>
            <div class="services-box">
                <h2>Martial Arts Classes</h2>
                <p>Gorkha Martial Arts offers a diverse range of martial arts classes, catering to all levels of experience. Whether you're a beginner or an advanced practitioner, you can choose from disciplines like Jiu-jitsu, Karate, Judo, and Muay Thai.</p>
                
            </div>
            <div class="services-box">
                <h2>Martial Arts Classes</h2>
                <p>Gorkha Martial Arts offers a diverse range of martial arts classes, catering to all levels of experience. Whether you're a beginner or an advanced practitioner, you can choose from disciplines like Jiu-jitsu, Karate, Judo, and Muay Thai.</p>
                
            </div>

        </div>
        

    </section>
    </body>
</html>