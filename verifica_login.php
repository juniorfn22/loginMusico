<?php 
session_start();
if (!$_SESSION['nome']){
    header('Location: index.php');
    exit();
}

function lerNaipe ($naipe){
    if ($naipe == 0){
        $naipe = "Maestro";
      } (naipe == 1){
        $naipe = "1º Clarinete"
      } (naipe == 2){
        $naipe = "2º Clarinete"
      } (naipe == 3){
        $naipe = "1º Trompete"
      } (naipe == 4){
        $naipe = "2º Trompete"
      } (naipe == 5){
        $naipe = "Flauta"
      } ;
}

/*
<option value="" class="op" id="op" disable selected>selecione o naipe</option>
<option value="0">Maestro</option>
<option value="1">1º Clarinete</option>
<option value="2">2º Clarinete</option>
<option value="3">1º Trompete</option>
<option value="4">2º Trompete</option>
<option value="5">Flauta</option>
<option value="6">Sax Alto</option>
<option value="7">Sax Tenor</option>
<option value="8">Trombone</option>
<option value="9">Tuba Bb</option>
<option value="10">Tuba Eb</option>
<option value="11">Violino</option>*/