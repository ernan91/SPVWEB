<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/Auth.css">

    <style>
        body {
    background-color: #333333;
}

.login-container {
    max-width: 400px;
    margin: 0 auto;
    margin-top: 150px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;
}

#background-video {
height: 100vh;
width: 100vw;
object-fit: cover;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
z-index: -1;
}



h1 {
font-size: 6rem;
margin-top: 30vh;
}

h2 { font-size: 3rem; }

#btnVideo{
font-size: 1.5rem;
background: 0;
border: 0;
margin-left: 50%;
transform: translateX(-50%);
}
        </style>
</head>
<body>
<!-- video -->
<video id="background-video" autoplay loop muted>

<source src="http://localhost:8082/ProjetFilRouge/application/assets/videos/Login.mp4" type="video/mp4">

</video>
<!-- video -->
    <div class="container">
        <div class="login-container">
            
            <h2>Connexion</h2>
            <form>
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" placeholder="Entrez votre nom d'utilisateur">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                </div>
                <button type="submit" class="btn btn-primary" onclick="submitLoginForm(event)">Se connecter</button>
            </form>
            <p class="mt-3">Vous n'avez pas de compte ? <a href="<?php echo base_url('index.php/LoginController/Inscription')?>">Inscrivez-vous ici</a></p>
            <p class="mt-3 text-danger"> <?php if(isset($false)){echo $false ;}; ?> </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script >

function submitLoginForm(event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre normalement

    // Récupération des valeurs des champs d'entrée
    var username = $("#username").val();
    var password = $("#password").val();

    // Création de l'URL de la page de destination avec les valeurs des champs d'entrée en tant que paramètres d'URL
    var url = "http://localhost:8082/ProjetFilRouge/index.php/LoginController/login";
    url += "?username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password);

    // Redirection vers la page de destination
    window.location.href = url;
}

    </script>
    
</body>
</html>
