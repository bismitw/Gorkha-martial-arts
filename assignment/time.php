<?php session_start();
?>
<html>
    <head>
        <title>

        </title>
        <style>
          
body {
  margin: 0;
  padding: 0;
  background-color: #004526;
}

.container {
  max-width: 960px;
  margin: 0px auto;
  padding: 40px;
  text-align:center;
}

h1 {
  font-size: 2rem;
  margin: 50px;
  
}

table {
  background-color: white;
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #ddd;
  margin-bottom: 10px;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}



        </style>
        
    </head>
    <body>
    <?php require('header.php');   ?>
    <div class="container">
      <h1>Martial Arts Class Timetable</h1>
      <table class="timetable">
        <tr>
          <th>Time</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>
          <th>Sunday</th>
        </tr>
        <tr>
          <td>06:00–07:30</td>
          <td>Jiu-jitsu</td>
          <td>Karate</td>
          <td>Judo</td>
          <td>Jiu-jitsu</td>
          <td>Muay Thai</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>08:00–10:00</td>
          <td>Muay Thai</td>
          <td>Private tuition</td>
          <td>Private tuition</td>
          <td>Private tuition</td>
          <td>Jiu-jitsu</td>
          <td>Private tuition</td>
          <td>Private tuition</td>
        </tr>
        <tr>
          <td>10:30–12:00</td>
          <td>Private tuition</td>
          <td>Private tuition</td>
          <td>Private tuition</td>
          <td>Private tuition</td>
          <td>Private tuition</td>
          <td>Judo</td>
          <td>Karate</td>
        </tr>
        <tr>
          <td>13:00–14:30</td>
          <td>Open mat/ personal practice</td>
          <td>Open mat/ personal practice</td>
          <td>Open mat/ personal practice</td>
          <td>Open mat/ personal practice</td>
          <td>Open mat/ personal practice</td>
          <td>Karate</td>
          <td>Judo</td>
        </tr>
        <tr>
          <td>15:00–17:00</td>
          <td>Kids Jiu-jitsu</td>
          <td>Kids Judo</td>
          <td>Kids Karate</td>
          <td>Kids Jiu-jitsu</td>
          <td>Kids Judo</td>
          <td>Muay Thai</td>
          <td>Jiu-jitsu</td>
        </tr>
        <tr>
          <td>17:30–19:00</td>
          <td>Karate</td>
          <td>Muay Thai</td>
          <td>Judo</td>
          <td>Jiu-jitsu</td>
          <td>Muay Thai</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>19:00–21:00</td>
          <td>Jiu-jitsu</td>
          <td>Judo</td>
          <td>Jiu-jitsu</td>
          <td>Karate</td>
          <td>Private tuition</td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <h1>Instructor Details</h1>
      <table class="instructors">
        <tr>
          <th>Name & Job</th>
          <th>Details</th>
        </tr>
        <tr>
          <td>Thomas Cook (gym owner/head martial arts coach)</td>
          <td>Coaches in all martial arts<br>4th Dan Blackbelt judo<br>3rd Dan Blackbelt jiu-jitsu<br>1st Dan Blackbelt karate<br>Accredited Muay Thai coach</td>
        </tr>
        <tr>
          <td>Andrew Smith (assistant martial arts coach)</td>
          <td>5th Dan karate</td>
        </tr>
        <tr>
          <td>Powel Johnson (assistant martial arts coach)</td>
          <td>2nd Dan Blackbelt jiu-jitsu<br>1st Dan Blackbelt judo</td>
        </tr>
        <tr>
          <td>Harris William (assistant martial arts coach)</td>
          <td>Accredited Muay Thai coach<br>3rd Dan Blackbelt karate</td>
        </tr>
        <tr>
          <td>Joseph Anderson (fitness coach)</td>
          <td>BSc in Sports Science<br>Qualified in health and nutrition<br>Specialises in devising strength and conditioning programs for combat athletes</td>
        </tr>
        <tr>
          <td>Allen Murphy (fitness coach)</td>
          <td>BSc in Physiotherapy<br>MSc in Sports Science</td>
        </tr>
      </table>
    </div>
  

  
    </body>
</html>