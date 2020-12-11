<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <title>Gites</title>
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
          <form action="" class="form-control">
            <select name="categorie" id="" class="select-css">
              <option value="default">Type Hebergement</option>
              <option value="chambre">Chambre</option>
              <option value="appartment">Appartement</option>
              <option value="maison">Maison</option>
              <option value="villa">Villa</option>
            </select>
            <input type="number" class="inputs" name="pieces" min="1" max="6" placeholder="Pieces">
            <input type="number" class="inputs" name="bathrooms" min="1" max="4" placeholder="Salle de Bain">
            <div class="input-control">
              <input type="submit" onclick="this.showAlert()" class="input-button" value="Rechercher">
            </div>

          </form>
        </div>
      </section>


    </main>



  </div>

  <script type="text/javascript" src="js/functions.js"></script>
</body>

</html>