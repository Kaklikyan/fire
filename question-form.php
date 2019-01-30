<?php

    use models\Level;
    use models\Category;

    require_once('shared/header.php');
    require_once('shared/nav.php');
    require 'models/Level.php';
    require 'models/Category.php';

    $model = new Level();
    $levels = $model->getLevels();

    $model = new Category();
    $categories = $model->getCategories();

    $levelRadio = $categoryRadio = true;
?>
    <div class="container mt-5">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form id="question-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" id="question" name="question">
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <input type="text" class="form-control" id="answer" name="answer">
                    </div>
                    <div class="form-group">Categories:
                        <?php foreach ($categories as $key => $category) : ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="<?=$key?>" value="<?=$category?>" <?= $categoryRadio ? 'checked' : '' ?>>
                                <label class="form-check-label" for="<?=$key?>">
                                    <?=$category?>
                                </label>
                            </div>
                        <?php $categoryRadio = false; endforeach; ?>
                    </div>
                    <div class="form-group">Levels:
                        <?php foreach ($levels as $key => $level) : ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="level" id="<?=$key?>" value="<?=$level?>" <?= $levelRadio ? 'checked' : '' ?>>
                                <label class="form-check-label" for="<?=$key?>">
                                    <?=$level?>
                                </label>
                            </div>
                    <?php $levelRadio = false; endforeach; ?>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="spinner-border text-primary spinner-additional" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    require_once('shared/footer.php');