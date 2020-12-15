<?php 

    // pour recup les données

    $firstname = $name = $email = $telephone = $message = "";
    $firstnameError = $nameError = $emailError = $telephoneError = $messageError = "";


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = verifyInput($_POST['firstname']);
        $name = verifyInput($_POST['name']);
        $email = verifyInput($_POST['email']);
        $telephone = verifyInput($_POST['telephone']);
        $message = verifyInput($_POST['message']);

        if(empty($firstname))
        {
            $firstnameError = "Je veux connaitre ton prénom !";
        }

        if(empty($name))
        {
            $nameError = "Et oui je veux tout savoir. Même ton nom ;)";
        }

        if(empty($emailError))
        {
            $emailError = "Et oui je veux tout savoir. Même ton nom ;)";
        }   
        
        
        if(empty($telephoneError))
        {
            $telephoneError = "Et oui je veux tout savoir. Même ton nom ;)";
        }   

        if(empty($messageError))
        {
            $messageError = "Qu'est-ce que tu veux me dire ?";
        }        
    
    }
    function verifyInput($var)
    {
        // enléve les espaces en trop

        $var = trim($var);
        // il vas enlever tous les slahes

        $var = stripslashes($var);

        $var = htmlspecialchars($var);

        // permet de nettoyer toutes les entrées

        return $var;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1"
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet"
type="text/css" >

<link href="contact.css" type="text/css" rel="stylesheet" >

<title>Contactez-nous</title>

</head>
<body>
    
    <div class="container">

        <div class="divider"></div>

        <div class="heading" >

            <h2>Contactez-Nous</h2>

        </div>

        <div class="row">

            <div class="col-lg-10 col-lg-offset-1 form-container">

                <!-- htmlspecialchars sécurise le form -->
                <form  id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">

                    <div class="row">

                        <!-- inscrire son prénom -->
                        <div class="col-md-6">

                            <label for="firstname">Prénom <span class="blue"> *</span> </label>

                            <input type="text" id="firstname"  name="firstname" class="form-control" placeholder="Votre prénom" >
                                                
                            <!-- affiche le message d'erreur -->

                            <p class="comments"><?= $firstnameError; ?></p>
                        </div>

                        <!-- rentrer son nom -->
                        <div class="col-md-6">

                            <label for="name">Nom <span class="blue"> *</span> </label>
 
                            <input type="text" id="name"  name="name" class="form-control" placeholder="Votre nom">

                            <p class="comments"><?= $nameError; ?></p>
                        </div>

                        <!-- rentrer son email -->
                        <div class="col-md-6">
                            <label for="email">Email <span class="blue"> *</span> </label>

                            <input type="email" id="email"  name="email" class="form-control" placeholder="Votre email">

                            <p class="comments"><?= $emailError; ?></p>
                        </div>

                        <!-- mettre son numéro -->
                        <div class="col-md-6">
                            <label for="telephone">Téléphone</label>

                            <!-- required -->
                            <input type="tel" id="telephone"  name="telephone" class="form-control" placeholder="Votre télephone">

                            <p class="comments"><?= $telephoneError; ?></p>
                        </div>

                        <!-- laisser un commentaire -->
                        <div class="col-md-12">
                            <label for="telephone">Message<span class="blue">*</span></label>

                            <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"></textarea> 

                            <p class="comments"><?= $messageError;?></p>
                        </div>

                        <!-- message d'alerte -->
                        <div class="col-md-12">
                            <p class="blue"><strong>* Ces information sont requises</strong></p>
                        </div>

                        <!-- faire le bouttons Envoyer -->
                        <div class="col-md-12">
                            <input type="submit" class="button1" value="Envoyer">
                        </div>

                            
                    </div>

                    <!-- Message de remerciement -->

                    <p class="thank-you">Votre message à bien étée envoyée. Merci de m'avoir contacter</p>

                </form>

            </div>
        </div>

    </div>

</body>
</html>