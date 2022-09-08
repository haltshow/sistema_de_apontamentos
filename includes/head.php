<?php
    require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 7 Consulting </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<style type = "text/css">

    
    body {
        color: white !important;
        background-color: rgb(45, 49, 49)!important;
    }

    .bg {
        background: linear-gradient(rgb(17, 32, 41),rgb(17 32 41 / 70%)), url(imagens/bg.jpg)!important;
        background-repeat: no-repeat!important;
        background-size: cover!important;
        background-position: center center!important;
        background-attachment: fixed!important;
    }

    .bg2 {
        background: linear-gradient(rgb(17, 32, 41),rgb(17 32 41 / 97%)), url(imagens/bg2.jpg)!important;
        background-repeat: no-repeat!important;
        background-size: cover!important;
        background-position: center center!important;
        background-attachment: fixed!important;
    }

    * {
        font-family: 'Open-Sans', sans-serif; 
    }

    table {
        font: normal 19px 'Open-Sans', sans-serif;
    }

    a:hover {
        text-decoration: none;
    }

    .form-control:focus {
        box-shadow: none;
        border: solid 1px black;
        background-color: #e2e2f0;
        font: normal 19px 'Open-Sans', sans-serif;
    }

    #botaoIndex {
        height: 75px;
        width: 50%;
        background-color: #175873;
        border: none;
        font: normal 20px 'Open-Sans', sans-serif;
    }

    #pesquisar {
        background-color: rgb(45, 49, 49);
        border: solid 1px white;
        border-top: none;
        border-left: none;
        border-right: none;
        color: white;
    }
    #pesquisar:focus {

        font: normal 19px 'Open-Sans', sans-serif;
    }

    #pesqRel {
        background-color: rgb(45, 49, 49);
        border: solid 1px white;
        border-top: none;
        border-left: none;
        border-right: none;
        color: white;
    }

    #pesqRel:focus {
        font: normal 19px 'Open-Sans', sans-serif;
    }
</style>
    

