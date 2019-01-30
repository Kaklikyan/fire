<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"] === true){
        header("location: /");
        exit;
    }
?>


<nav class="navbar navbar-light bg-light justify-content-between navbar-custom-stl">
    <a class="navbar-brand">Navbar</a>
    <a class="nav-link" href="../logout">Logout</a>
</nav>
<div class="wrapper">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="<?= strpos($_SERVER['REQUEST_URI'], 'category-form') ? 'active' : '' ?>">
                <a href="/category-form">Create categories/levels</a>
            </li>
            <li class="<?= strpos($_SERVER['REQUEST_URI'], 'question-form') ? 'active' : '' ?>">
                <a href="/question-form">Create question</a>
            </li>
            <li class="<?= strpos($_SERVER['REQUEST_URI'], 'questions') ? 'active' : '' ?>">
                <a href="/questions">Questions</a>
            </li>
        </ul>
    </nav>
    <div id="content">