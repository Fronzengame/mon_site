<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Accueil</title>

    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="CSS/style.scss">
</head>
<!----Contenue du site---->

<body>
    <!--header-->
    <header class="container-fluid header">
        <div class="container">
            <a href="CV_THEO.pdf" id="tete" class="logo"> Mon CV </a>
            <a class="logo ml-4" href="connection.php">Admin</a>
         	
            <div class="btn-group mt-3" style="float:right;">
              
    <button type="button" class="btn btn-primary" style=" background-color:#349BDB">Menu</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" style=" background-color:#349BDB" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(78px, 38px, 0px); width:2em; height:20.5em;">
      <a class="dropdown-item" href="propos.php">A propos</a>
      <a class="dropdown-item" href="portfolio.php">Portfolio</a>
      <a class="dropdown-item" href="skill.php">Compétence</a>
      <a class="dropdown-item" href="#contact">Contact</a>
      

      <div class="dropdown-divider"></div>
    </div>
  </div>
        </div>
    </header>
    <!--end header-->
    <a href="#tete" class="tete">
        <img src="Img/flechehaut.png"/>
    </a>
    <!--banière du site-->
    <section class="container-fluid padding0 banner">
        <div class="banner">
        <!--carousel -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Img/banniere.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Img/inforwall" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Img/inforwall1" alt="Third slide">
    </div>
  </div>
</div>
    <!-- end carousel -->
        </div>
        <div class="inner-banner">
            <h1>Bienvenue sur mon portfolio</h1>
            <button type="button" class="btn btn-custom">
                <nav>
                    <a href="#contact">Contactez-moi !
                    </a>
                </nav>
            </button>
        </div>

    </section>
    <!--end banniere-->
    

    

    <!--footer / contact-->
    <footer class="container-fluid footer">
        <div class="container">
            <h2 id="contact">Contactez-moi</h2>
            <hr class="separator">
            <div class="row">
                <div class="span6">
                    <?php
                    if (!isset($_POST["send"])) {
                        ?>
                        <form class="formcon" method="post" action="bdd2.php">
                            <div class="controls controls-row">
                                <input id="epediteur" name="epediteur" type="text" class="span3 prenom" placeholder="name">
                                <input id="mail" name="mail" type="email" class="span3" placeholder="email">
                            </div>
                            <div class="controls">
                              
                            <textarea id="message" name="message" class="span6 " value="message"
                                      rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="controls">
                                <input id="contact-submit" name="send" type="submit" class="btn btn-light"
                                       value="Envoyer">
                            </div>
                        </form>
                        <?php
                    }
                    else{
                        echo "<p class='formp'>Merci d'avoir répondu au formulaire.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <p class="copiryght">Copyright (c) 2018 Copyright Holder All Right Reserved</p>
    </footer>
    <!--end footer-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>