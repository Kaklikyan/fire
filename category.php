<?php

    session_start();

    if(!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }

    require_once('shared/header.php');
    require_once('shared/nav.php');
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
                </form>
            </div>
            <div class="col-md-6">
                <form id="level-form">
                    <div class="form-group">
                        <label for="level">Create level</label>
                        <input type="text" class="form-control" id="level" name="level">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
    require_once('shared/footer.php');

