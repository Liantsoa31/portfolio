<?php 

    // Function verifyInput and email
    function verifyInput($input) {
        $input = htmlspecialchars($input);
        $input = stripslashes($input);
        $input = trim($input);

        return $input;
    }
    function verifyEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    $nom = $prenom = $email = $message = "";
    $emailTo = "liantsoanavalona31@gmail.com";
    $isSuccess = false;

    if(isset($_POST["submit"])) {
        $nom = verifyInput($_POST['nom']);
        $prenom = verifyInput($_POST['prenom']);
        $email = verifyInput($_POST['email']);
        $message = verifyInput($_POST['message']);
        $isSuccess = true;
        $messageText = "";

        if(!verifyEmail($email)) {
            $isSuccess = false;
            $email_error = "Votre email est invalide ...";
        } else {
            $messageText .= "Email: $email\n";
        }
        if(empty($message)) {
            $isSuccess = false;
            $message_error = "Vous avez oublié le plus important, le message ...";
        } else {
            $messageText .= "Message: $message\n";
        }
        if(strlen($message) <= 10) {
            $isSuccess = false;
            $message_error = "Désolé, votre message est trop court ...";
        }
        if(isset($nom) && isset($prenom)) {
            $messageText .= "Nom: $nom\n";
            $messageText .= "Prenom: $prenom\n";

            if($isSuccess) {
                $headers = "Form: $nom $prenom <$email>\r\nReply-To: $email";
                mail($emailTo, "Un message de votre site", $messageText, $headers);
                $success_comment = "Votre message a bien été envoyé !";
                $nom = $prenom = $email = $message = "";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/ressources/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/ressources/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <div class="container portfolio">
        <div class="heading">
            <h1>
                <i class="fa fa-briefcase"></i>
                Portfolio
            </h1>
            <div class="divider"></div>
        </div>
    
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><i class="fa fa-check-circle"></i></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>DigitAll</h3>
                            <h4>Intégrateur web</h4>
                            <p><i class="fa fa-calendar-day"></i> 2021</p>
                        </div>
                        <div class="timeline-body">
                            <p><span><i class="fa fa-chevron-right"></i></span> HTML, CSS, Javascript, PHP 7, Bootstrap 4, SCSS, FontAwesome 5</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Intégration du site</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Ajout de formulaire "Call to action"</p>
                            <div class="illustration">
                                <img src="./assets/img/capture-projet-skilleos/projet-digitall.JPG" alt="capture projet">
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-badge"><i class="fa fa-check-circle"></i></div>
                <div class="timeline-panel-container-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Parallax</h3>
                            <p><i class="fa fa-calendar-day"></i> 2021</p>
                        </div>
                        <div class="timeline-body">
                            <p><span><i class="fa fa-chevron-right"></i></span> HTML, CSS, Javascript</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Intégration du site</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Ajout effet de défilement Parallax</p>
                            <div class="illustration">
                                <img src="./assets/img/capture-projet-skilleos/projet-parallax.JPG" alt="capture projet">
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-badge"><i class="fa fa-check-circle"></i></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Projet Burger Code avec Mysql</h3>
                            <p><i class="fa fa-calendar-day"></i> Septembre 2021</p>
                        </div>
                        <div class="timeline-body">
                            <p><span><i class="fa fa-chevron-right"></i></span> HTML, CSS, Javascript, PHP, Mysql, Bootstrap 3</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Avec une plateforme e-learning "Skilleos"</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Ajout d'un système d'administrateur</p>
                            <div class="illustration">
                                <img src="./assets/img/capture-projet-skilleos/mysql-php-projet-skilleos.JPG" alt="capture projet">
                                <div class="block-hover left">
                                    <img src="./assets/img/capture-certificat/certificat-mysql.JPG" alt="Certificat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-badge"><i class="fa fa-check-circle"></i></div>
                <div class="timeline-panel-container-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Projet Snake Game avec Javascript</h3>
                            <p><i class="fa fa-calendar-day"></i> Septembre 2021</p>
                        </div>
                        <div class="timeline-body">
                            <p><span><i class="fa fa-chevron-right"></i></span> HTML, CSS, Javascript</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Avec une plateforme e-learning "Skilleos"</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Système d'un jeu basique centré sur javascript</p>
                            <div class="illustration">
                                <img src="./assets/img/capture-projet-skilleos/javascript-projet-skilleos.JPG" alt="capture projet">
                                <div class="block-hover right">
                                    <img src="./assets/img/capture-certificat/certificat-javascript.JPG" alt="Certificat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-badge"><i class="fa fa-check-circle"></i></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Projet CV responsive avec Bootstrap 3</h3>
                            <p><i class="fa fa-calendar-day"></i> Juin 2021</p>
                        </div>
                        <div class="timeline-body">
                            <p><span><i class="fa fa-chevron-right"></i></span> HTML, CSS, Bootstrap 3</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Avec une plateforme e-learning "Skilleos"</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Site responsive grâce à bootstrap</p>
                            <div class="illustration">
                                <img src="./assets/img/capture-projet-skilleos/bootstrap-projet-skilleos.JPG" alt="capture projet">
                                <div class="block-hover left">
                                    <img src="./assets/img/capture-certificat/certificat-htlm-css.JPG" alt="Certificat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="timeline-badge"><i class="fa fa-check-circle"></i></div>
                <div class="timeline-panel-container-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Projet formulaire de contact avec PHP</h3>
                            <p><i class="fa fa-calendar-day"></i> Mai 2021</p>
                        </div>
                        <div class="timeline-body">
                            <p><span><i class="fa fa-chevron-right"></i></span> HTML, CSS, Javascript, PHP, Bootstrap 3</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Avec une plateforme e-learning "Skilleos"</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Ajout de formulaire "Call to action"</p>
                            <div class="illustration">
                                <img src="./assets/img/capture-projet-skilleos/formulaire-php-projet-skilleos.JPG" alt="capture projet">
                                <div class="block-hover right">
                                    <img src="./assets/img/capture-certificat/certificat-php.JPG" alt="Certificat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-badge"><i class="fa fa-check-circle"></i></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Projet Travel Agency</h3>
                            <p><i class="fa fa-calendar-day"></i> Mai 2021</p>
                        </div>
                        <div class="timeline-body">
                            <p><span><i class="fa fa-chevron-right"></i></span> HTML, CSS</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Intégration site statique</p>
                            <p><span><i class="fa fa-chevron-right"></i></span> Avec une plateforme e-learning "Skilleos"</p>
                            <div class="illustration">
                                <img src="./assets/img/capture-projet-skilleos/html-css-projet-skilleos.JPG" alt="capture projet">
                                <div class="block-hover left">
                                    <img src="./assets/img/capture-certificat/certificat-htlm-css.JPG" alt="Certificat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="contact">
        <div class="heading">
            <h1>
                <i class="fa fa-envelope"></i>
                Contactez-moi !
            </h1>
            <div class="divider"></div>
        </div>
        <form class="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" role="form">
            <div class="container row">
                <div class="form-item col-md-4">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
                </div>
                <div class="form-item col-md-4">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom">
                </div>
                <div class="form-item col-md-4">
                    <label for="">Email <span class="info-needed">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Entrez votre email" required>
                    <p class="error-comment"><?php if(isset($email_error)) echo $email_error; ?></p>
                </div>
            </div>
            <div class="container row">
                <div class="form-item col-md-12">
                    <label for="message">Message <span class="info-needed">*</span></label>
                    <textarea name="message" id="message" cols="50" rows="3" placeholder="Votre message ..." required></textarea>
                    <p class="error-comment"><?php if(isset($message_error)) echo $message_error; ?></p>
                </div>
            </div>
            <div class="button">
                <input class="validate btn btn-success" name="submit" type="submit" value="Envoyer">
            </div>
            <?php if(isset($error_comment)) { ?>
                    <p class="error-comment"><?= $error_comment ?></p>
            <?php } elseif(isset($success_comment)) { ?>
                    <p class="success-comment"><?= $success_comment ?></p>
            <?php } ?>
        </form>
    </div>

    <div class="footer">
        <div class="container row">
            <div class="footer-info col-md-4">
                <span>&copy; </span>
                <p>2021 | Razafiarison Liantsoa Navalona</p>
            </div>
            <div class="footer-info col-md-2">
                <span><i class="fa fa-phone"></i></span>
                <p>+261 34 56 105 98</p>
            </div>
            <div class="footer-info col-md-3">
                <span><i class="fab fa-linkedin"></i></span>
                <p><a href="#">Liantsoa Navalona Razafiarison</a></p>
            </div>
            <div class="footer-info col-md-3">
                <span><i class="fa fa-envelope-square"></i></span>
                <p><a href="#">liantsoanavalona31@gmail.com</a></p>
            </div>
        </div>
    </div>

    <script src="./assets/ressources/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/ressources/popper.js/dist/popper.min.js" type="text/javascript"></script>
    <script src="./assets/ressources/bootstrap-4.6.0-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/ressources/fontawesome-free-5.15.3-web/js/all.min.js" type="text/javascript"></script>
</body>
</html>