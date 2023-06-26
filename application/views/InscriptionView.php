
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/Auth.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
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

    <div class="container">
        <div class="login-container">
        <button type="button" onclick="Close()" class="btn-close" aria-label="Close"></button>
            <h2>Inscription</h2>
            <form>

                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" placeholder="Entrez votre nom d'utilisateur">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                </div>
                <button type="submit" class="btn btn-primary" onclick="submitRegistrationForm(event)">S'inscrire</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
function submitRegistrationForm(event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre normalement

    // Récupération des valeurs des champs d'entrée
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();

    // Vérification des champs vides
    if (username === '' || email === '' || password === '') {
        alert('Veuillez remplir tous les champs du formulaire.');
        return;
    }

    // Création des données à envoyer en tant que requête POST
    var postData = {
        username: username,
        email: email,
        password: password
    };

    // Envoi de la requête POST à l'URL de la page de destination
    $.post("http://localhost:8082/ProjetFilRouge/index.php/LoginController/registerUser", postData, function(response) {
        // Traitement de la réponse de la requête
        console.log(response); // Vous pouvez afficher la réponse dans la console ou effectuer d'autres actions

        // Redirection vers la page de destination si nécessaire
        window.location.href = "http://localhost:8082/ProjetFilRouge/index.php/LoginController/successRegister";
    });
}

function Close(){
    window.location.href = "http://localhost:8082/ProjetFilRouge/index.php/"
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>
