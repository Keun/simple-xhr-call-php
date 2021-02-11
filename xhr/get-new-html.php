<?php    
require_once('../config/connect.php');

$activiteitID = $_GET['id'];

list($aantaltickets) = mysqli_fetch_array($conn->query("SELECT i_betaald FROM inschrijvingen WHERE i_nummer = '{$activiteitID}' LIMIT 1;"));

echo "er zijn al {$aantaltickets} mensen voor jou geweest";
// echo '<input type="number" name="" id="" min="1" max="'.$aantaltickets.'">';