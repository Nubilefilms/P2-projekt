<?php 
include_once'index-kopi.php';
?>
<html lang="da">
<head>
<title>Velkommen til Fade Zonnne</title>
<link rel="stylesheet" href="css.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<style>
</style> 
</head>
    
    <body>
<section id="section_book">
        <form action="" method="get" >
            <div  id="fieldset_bookning">
                <label for="name">Navn</label>
                <input type="text" name="username" id="name" required autofocus placeholder="Fornavn & Efternavn" pattern="[a-zA-Z] {3,}" title="please enter noget her">
                <br><br>
                <label for="email">Email</label>
                <input type="text" name="email" id="emaill" required placeholder="Email Adresse"pattern="[a-zA-Z] {3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="please enter noget her"> 
                <br><br>
                <label for="date">Dato</label>
                <input type="date" name="date" min="2019-03-01" >
                <br><br>
                <textarea name="cm" id="cm" cols="40" rows="2" placeholder="Tilføj Kommentar" ></textarea>
                <br>
                <input id="submit" type="submit" name="submit">
            </div>
        </form>
        </section>
        <section id="section_book2">
             <div class="containit">
        <h3><a href="index.php"><img id="left" src="pictures/Left-512.png"></a>2019 / 04 <a><img id="right" src="pictures/right.png"></a></h3>
        <br>
        <table class="table_tabel">
            <tr>
                <th>Søndag</th>
                <th>Mandag</th>
                <th>Tirsdag</th>
                <th>Onsdag</th>
                <th>Torsdag</th>
                <th>Fredag</th>
                <th>Lørdag</th>
            </tr>
            <tr>
                <td></td>
                <td><a href="index.php">1</a></td>
                <td><a href="index.php">2</a></td>
                <td><a href="index.php">3</a></td>
                <td><a href="index.php">4</a></td>
                <td><a href="index.php">5</a></td>
                <td><a href="index.php">6</a></td>
            </tr>
            <tr>
                <td><a href="index.php">7</a></td>
                <td><a href="index.php">8</a></td>
                <td><a href="index.php">9</a></td>
                <td><a href="index.php">10</a></td>
                <td><a href="index.php">11</a></td>
                <td><a href="index.php">12</a></td>
                <td><a href="index.php">13</a></td>
            </tr>
            <tr>
                <td><a href="index.php">14</a></td>
                <td><a href="index.php">15</a></td>
                <td><a href="index.php">16</a></td>
                <td><a href="index.php">17</a></td>
                <td><a href="index.php">18</a></td>
                <td><a href="index.php">19</a></td>
                <td><a href="index.php">20</a></td>
            </tr>
            <tr>
                <td><a href="index.php">21</a></td>
                <td><a href="index.php">22</a></td>
                <td><a href="index.php">23</a></td>
                <td><a href="index.php">24</a></td>
                <td><a href="index.php">25</a></td>
                <td><a href="index.php">26</a></td>
                <td><a href="index.php">27</a></td>
            </tr>
             <tr>
                <td><a href="index.php">28</a></td>
                <td><a href="index.php">29</a></td>
                <td><a href="index.php">30</a></td>
                <td><a href="index.php"></a></td>
                <td><a href="index.php"></a></td>
                <td><a href="index.php"></a></td>
                <td><a href="index.php"></a></td>
            </tr>
        </table>
    
    
    
    
    </div>
        </section>
    </body>