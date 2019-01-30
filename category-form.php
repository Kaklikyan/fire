<?php
require_once('shared/nav.php');
require_once('shared/header.php');
    use models\Level;
    use models\Category;


    require 'models/Level.php';
    require 'models/Category.php';

    $model = new Level();
    $levels = $model->getLevels();

    $model = new Category();
    $categories = $model->getCategories();


?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form id="category-form">
                    <div class="form-group">
                        <label for="category">Create category</label>
                        <input type="text" class="form-control" id="category" name="category">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="spinner-border text-primary spinner-additional" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <ul class="categories-list list-group mt-3">
                        <?php foreach ($categories as $category) : ?>
                            <li class="list-group-item"><?=$category?></li>
                        <?php endforeach; ?>
                    </ul>
                </form>
            </div>
            <div class="col-md-6">
                <form id="level-form">
                    <div class="form-group">
                        <label for="level">Create level</label>
                        <input type="text" class="form-control" id="level" name="level">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="spinner-border text-primary spinner-additional" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <ul class="levels-list list-group mt-3">
                        <?php foreach ($levels as $level) : ?>
                            <li class="list-group-item"><?=$level?></li>
                        <?php endforeach; ?>
                    </ul>
                </form>
            </div>
        </div>
    </div>
<?php
    require_once('shared/footer.php');

