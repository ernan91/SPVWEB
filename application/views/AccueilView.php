

<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.4/examples/album/ -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Jekyll v3.8.6" />
    <title>Bootstrap</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.4/examples/album/"
    />

    <!-- Bootstrap core CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png"
      sizes="180x180"
    />
    <link
      rel="icon"
      href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-32x32.png"
      sizes="32x32"
      type="image/png"
    />
    <link
      rel="icon"
      href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-16x16.png"
      sizes="16x16"
      type="image/png"
    />
    <link
      rel="manifest"
      href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json"
    />
    <link
      rel="mask-icon"
      href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg"
      color="#563d7c"
    />
    <link
      rel="icon"
      href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon.ico"
    />
    <meta
      name="msapplication-config"
      content="/docs/4.4/assets/img/favicons/browserconfig.xml"
    />
    <meta name="theme-color" content="#563d7c" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>

<?php
$message = $this->session->flashdata('message');

if ($message) {
    echo '<div id="flash-message" class="alert" style="display:none" ><p class="text-success">' . $message . '</p></div>';
}
?>


  <body cz-shortcut-listen="true">
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">
                Add some information about the album below, the author, or any
                other background context. Make it a few sentences long so folks
                can pick up some informative tidbits. Then, link them off to
                some social networking sites or contact information.
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li>
                  <a
                    href="https://getbootstrap.com/docs/4.4/examples/album/#"
                    class="text-white"
                    >Follow on Twitter</a
                  >
                </li>
                <li>
                  <a
                    href="http://localhost:8082/ProjetFilRouge/index.php/QuizzController/AddQuizView"
                    class="text-white"
                    >Ajouter un quizz</a
                  >
                </li>
                <li>
                  <a
                    href="http://localhost:8082/ProjetFilRouge/index.php/QuizzController/QuizzTest"
                    class="text-white"
                    >Ajouter un test</a
                  >
                </li>
                <li>
                  <a
                    href="https://getbootstrap.com/docs/4.4/examples/album/#"
                    class="text-white"
                    >Like on Facebook</a
                  >
                </li>
                <li>
                  <a
                    href="https://getbootstrap.com/docs/4.4/examples/album/#"
                    class="text-white"
                    >Email me</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a
            href="https://getbootstrap.com/docs/4.4/examples/album/#"
            class="navbar-brand d-flex align-items-center"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              aria-hidden="true"
              class="mr-2"
              viewBox="0 0 24 24"
              focusable="false"
            >
              <path
                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"
              ></path>
              <circle cx="12" cy="13" r="4"></circle>
            </svg>
            <strong>Album</strong>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarHeader"
            aria-controls="navbarHeader"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Album example</h1>
          <p class="lead text-muted">
            Something short and leading about the collection belowâits contents,
            the creator, etc. Make it short and sweet, but not too short so
            folks donât simply skip over it entirely.
          </p>
          <p>
            <a
              href="https://getbootstrap.com/docs/4.4/examples/album/#"
              class="btn btn-primary my-2"
              >Main call to action</a
            >
            <a
              href="https://getbootstrap.com/docs/4.4/examples/album/#"
              class="btn btn-secondary my-2"
              >Secondary action</a
            >
          </p>
        </div>
      </section>
<!-- DEBUT QUIZZS -->
      <div class="album py-5 bg-light">
        <div class="container" style="max-width:100%">
          <div class="row">

                <?php foreach($quizzs as $quizz ){?>
                  <div class="col-md-3">
              <div class="card mb-4 shadow-sm" id=" <?php echo $quizz['id']?>">
               <?php if (isset($quizz['img'])){?>
                  <img src="<?php echo base_url() . "application/assets/img/" . $quizz['img'] ?> "  style=" width:100%;
    max-height:300px;">
              <?php  } ?>

                  <title><?php echo $quizz['nom'] ?></title>
  
                <div class="card-body">
                  <p class="card-text">
                    <?php echo $quizz['description']?>
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <button
                      id=" <?php echo $quizz['id']?>"
                      onclick="loadQuizz(this.id)"
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                        
                      >
                         View 
                      </button>

                      <button
                        id=" <?php echo $quizz['id']?>"
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                        onclick="Edit(this.id)"
                      >
                        Edit
                      </button>
                    </div>
                    <button name="<?php echo $quizz['nom'] ?>" id="<?php echo $quizz['id']?>" onclick="SupprimerQuizz(this.id,this.name)" type="button" class="btn btn-sm  btn-outline-secondary btn-danger">Supprimer</button>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
           
    </main>
   
    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
    <script>
      function Edit(id){
        window.location.href = "http://localhost:8082/ProjetFilRouge/index.php/QuizzController/EditQuizz?id="+id
      }
      function loadQuizz(id){
        
        window.location.href = "http://localhost:8082/ProjetFilRouge/index.php/QuizzController/loadQuizz?id="+id
      }
      function SupprimerQuizz(id,name){
        conf=confirm("Supprimer "+name+" ?")
        if(conf){
        window.location.href = "http://localhost:8082/ProjetFilRouge/index.php/QuizzController/deleteQuizz?id="+id
        }
      }

              // Sélectionnez l'élément du message flash
        const flashMessage =  $('#flash-message');

        // Supprime la classe "hidden" pour afficher le message
        flashMessage.css("display", "block");

        // Masque le message après 3 secondes
        setTimeout(function() {
          flashMessage.fadeOut("slow")
          
        }, 3000);
      </script>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">

        </p>
        <p>
          EXPSI4E
        </p>
        <p>

        </p>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
  <div id="slickdeals" data-initialized="1"></div>
</html>
