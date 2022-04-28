<?php

function printDate()
{
  $data = date("d-m-Y");
  echo($data);
}

function printTime()
{
  $czas = date("G:i");
  echo($czas);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-2">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 ALIGN="center">under construction </h1>
  <H2 ALIGN="center">
  Dzisiaj jest <?PHP printDate() ?>
  <BR>
  Godzina <?PHP printTime() ?>
  </H2>
  
</body>
