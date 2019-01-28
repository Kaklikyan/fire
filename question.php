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
            <div class="offset-md-3 col-md-6">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Create category</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
    require_once('shared/footer.php');