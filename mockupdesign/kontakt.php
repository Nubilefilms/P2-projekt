<?php 
include_once'index-kopi.php';
?>
<html lang="da">
<head>
<title>Velkommen til Fade Zone</title>
<link rel="stylesheet" href="index-kopi.php" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<style>
</style> 
</head>
    
    <body>
        <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: 57.043899, lng: 9.918217};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RlFcWD-gkDCqG1V0WncwQso-J6tjLZ4&callback=initMap">
    </script>
    <section id="sektion_kontakt">
        <h2 id="sektion_h2">Vejen Til Aalborgs <br>Bedste Fade</h2>
        <hr id="sektion_hr">
        <p id="sektion_p">Boulevarden 44 K. tv 9000<br> Aalborg, Denmark
            <span style="opacity:0;">..</span>
        </p>
         <p id="sektion_p2">Svarer normalt indenfor<br> få minutter
            <span style="opacity:0;">..</span><a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2F362278224263353%2F%3Fmessaging_source%3Dsource%253Apages%253Amessage_shortlink">Send Besked</a>
        </p>
        <a href="https://wego.here.com/directions/mix/mylocation/e-eyJuYW1lIjoiRmFkZSBab25lIiwiYWRkcmVzcyI6IkJvdWxldmFyZGVuIDQ0IEsuIHR2LCBBYWxib3JnLCBEZW5tYXJrIiwibGF0aXR1ZGUiOjU3LjA0MzksImxvbmdpdHVkZSI6OS45MTgyMywicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjozNjIyNzgyMjQyNjMzNTN9?map=57.0439,9.91823,15,normal&fb_locale=da_DK">
            <img id="arrow" src="pictures/arrow.png">
        </a>
        <a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2F362278224263353%2F%3Fmessaging_source%3Dsource%253Apages%253Amessage_shortlink">
            <img id="fbmessenger" src="pictures/fbmess.png">
        </a>
    </section> 
    </body>



        
       
    
