<?php

    use models\Question;

    require_once('shared/header.php');
    require_once('shared/nav.php');
    require 'models/Question.php';

    $model = new Question();
    $questions = $model->getQuestions();

?>

    <div class="container mt-5">
        <table id="questions-table" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Level</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($questions as $question) : ?>
                    <tr>
                        <td><?=$question['name']?></td>
                        <td><?=$question['category']?></td>
                        <td><?=$question['level']?></td>
                        <td><?=$question['question']?></td>
                        <td><?=$question['answer']?></td>
                        <td><?=$question['description']?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php
    require_once('shared/footer.php');
