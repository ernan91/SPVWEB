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
