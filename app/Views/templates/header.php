<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo helper('html') ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo link_tag("assets/css/mystyle.css")?>
    <title>My Homepage</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <div id="logo">
                <a href="<?php echo base_url('/home')?>"><img id="header-logo" src="<?php echo base_url('assets/images/logo.png')?>" alt="Logo du site"/></a>
            </div>

            <div id="mobile-menu-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navbar">
                <ul class="links">
                    <li><a href="#">A propos de moi</a></li>
                    <li><a href="#">Ma formation</a></li>
                    <li><a href="#">Mon expérience</a></li>
                    <li><a href="#">Mes projets</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    
    