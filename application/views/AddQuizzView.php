<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
  <body>
<h2>Ajoutez un quizz</h2>
<form method="post" action="<?php echo base_url('index.php/QuizzController/insertQuizz'); ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nom">Nom :</label>
    <input type="text" class="form-control" id="nom" name="nom" required>
  </div>
  <div class="form-group">
    <label for="description">Description :</label>
    <textarea class="form-control" id="description" name="description" required></textarea>
  </div>
  <div class="form-group">
    <label for="image">Image :</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</body>
</html>