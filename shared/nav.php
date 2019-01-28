<nav class="navbar navbar-light bg-light justify-content-between navbar-custom-stl">
    <a class="navbar-brand">Navbar</a>
    <a class="nav-link" href="../logout.php">Logout</a>
</nav>
<div class="wrapper">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="<?= strpos($_SERVER['REQUEST_URI'], 'category') ? 'active' : '' ?>">
                <a href="/category.php">Create categories/levels</a>
            </li>
            <li class="<?= strpos($_SERVER['REQUEST_URI'], 'question') ? 'active' : '' ?>">
                <a href="/question.php">Create question</a>
            </li>
        </ul>
    </nav>
    <div id="content">