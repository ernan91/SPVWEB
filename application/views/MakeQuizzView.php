<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Questions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h2>Formulaire de Questions</h2>
    
    <form id="<?php echo $id ?>" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/QuizzController/insertQuestionQuizzController'); ?>">
        <div class="form-group">
            <label for="nombre_questions">Nombre de questions :</label>
            <input type="number" class="form-control col-4" id="nombre_questions" name="nombre_questions" min="1" max="20" required>
            <input type="number" value="<?php echo $id ?>" id="idQuizz" name="idQuizz" hidden >
        </div>
        
        <div id="questions_container"></div>
        
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <script>
        document.getElementById('nombre_questions').addEventListener('input', function() {
            var nombreQuestions = parseInt(this.value);
            var container = document.getElementById('questions_container');
            container.innerHTML = '';

            for (var i = 0; i < nombreQuestions; i++) {
                var questionIndex = i + 1;
                var questionId = 'question_' + questionIndex;

                var questionGroup = document.createElement('div');
                questionGroup.classList.add('form-group');

                var separatorStr ="----------------------------------------" + " "+(i +1)
                var separator = document.createElement('h2');
                separator.textContent = separatorStr

                var questionLabel = document.createElement('label');
                questionLabel.setAttribute('for', questionId);
                questionLabel.textContent = 'Question ' + questionIndex + ':';

                var questionInput = document.createElement('input');
                questionInput.setAttribute('type', 'text');
                questionInput.classList.add('form-control', 'col-6');
                questionInput.setAttribute('id', questionId);
                questionInput.setAttribute('name', questionId);
                questionInput.required = true;

                questionGroup.appendChild(separator);
                questionGroup.appendChild(questionLabel);
                questionGroup.appendChild(questionInput);


                var imageIndex = i + 1
                imageId= 'image_'+ imageIndex
                console.log(imageId)
                var imageGroup = document.createElement('div');
                imageGroup.classList.add('form-group');

                var imageLabel = document.createElement('label');
                imageLabel.setAttribute('for', imageId);
                imageLabel.textContent = 'Image :';

                var imageInput = document.createElement('input');
                imageInput.setAttribute('type', 'file');
                imageInput.classList.add('form-control-file');
                imageInput.setAttribute('id', imageId);
                imageInput.setAttribute('name', imageId);
                imageInput.required = false;

                imageGroup.appendChild(imageLabel);
                imageGroup.appendChild(imageInput);

                questionGroup.appendChild(imageGroup);

                for (var j = 1; j <= 4; j++) {
                    var propositionId = 'proposition_' + questionIndex + '_' + j;

                    var propositionGroup = document.createElement('div');
                    propositionGroup.classList.add('form-group');

                    var propositionLabel = document.createElement('label');
                    propositionLabel.setAttribute('for', propositionId);
                    propositionLabel.textContent = 'Proposition ' + j + ':';

                    var propositionInput = document.createElement('input');
                    propositionInput.setAttribute('type', 'text');
                    propositionInput.classList.add('form-control', 'col-6');
                    propositionInput.setAttribute('id', propositionId);
                    propositionInput.setAttribute('name', propositionId);
                    propositionInput.required = true;

                    propositionGroup.appendChild(propositionLabel);
                    propositionGroup.appendChild(propositionInput);

                    questionGroup.appendChild(propositionGroup);
                }

                var reponseId = 'reponse_' + questionIndex;

                var reponseGroup = document.createElement('div');
                reponseGroup.classList.add('form-group');

                var reponseLabel = document.createElement('label');
                reponseLabel.setAttribute('for', reponseId);
                reponseLabel.textContent = 'Réponse :';

                var reponseInput = document.createElement('input');
                reponseInput.setAttribute('type', 'text');
                reponseInput.classList.add('form-control', 'col-6');
                reponseInput.setAttribute('id', reponseId);
                reponseInput.setAttribute('name', reponseId);
                reponseInput.required = true;

                reponseGroup.appendChild(reponseLabel);
                reponseGroup.appendChild(reponseInput);

                questionGroup.appendChild(reponseGroup);

                container.appendChild(questionGroup);
            }
        });
    </script>
</body>
</html>
