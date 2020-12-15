<?php
session_start();
if (isset($_POST)) {

  if (!empty($_POST['categorie']) && !empty($_POST['pieces']) && !empty($_POST['bathrooms'])
   && !empty($_POST['dateIn']) && !empty($_POST['date-out'])) {
    $_SESSION['id'] = 'userGuest';
    $_SESSION['data'] = $_POST;

    header('location: resultats.php');
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <title>Accueil</title>
</head>

<body>

  <div class="container">

    <div class="nav-container">
      <nav>
        <ul class="navigation_links">
          <li><a href="index.php" class="logo">G</a></li>

        </ul>
      </nav>
    </div>

    <main>

      <div class="hero">
        <h2>Comfort, Securité et Confiance</h2>
      </div>
      <section>
        <div class="form-container">
          <form action="" id="formReq" class="form-control" method="post">
            <select name="categorie" id="" class="select-css">
              <option value="default">Type Hebergement</option>
              <option value="Chambre">Chambre</option>
              <option value="Appartement">Appartement</option>
              <option value="Maison">Maison</option>
              <option value="Villa">Villa</option>
            </select>
            <input type="number" class="inputs" name="pieces" min="1" max="6" placeholder="Pieces">
            <input type="number" class="inputs" name="bathrooms" min="1" max="4" placeholder="Salle de Bain">
            <div class="input-dates">
             
              <div>
                <label for="datein" class="date-label">Date Initial</label>
                <input class="inputs" type="date" name="dateIn" id="">
              </div>
              <div>
                <label for="date-out" class="date-label">Fin Date</label>
                <input class="inputs" type="date" name="date-out" id="">
              </div>

            </div>

            <div class="input-control">
              <input type="submit" id="search" class="input-button" name="submit" value="Recherecher">
            </div>

          </form>
        </div>
      </section>


    </main>



  </div>

  <!-- <script type="text/javascript" src="js/scripts.js"></script> -->
</body>

</html>