<div class="logo">
    <h1><a href="index.php?hal=home">Azzmnrwebdev</a></h1>
</div>

<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto <?php if ($hal == 'home') echo 'active'; ?>" href="index.php?hal=home">Home</a></li>
        <li><a class="nav-link scrollto <?php if ($hal == 'about') echo 'active'; ?>" href="index.php?hal=about">About</a></li>
        <li><a class="nav-link scrollto <?php if ($hal == 'study') echo 'active'; ?>" href="index.php?hal=study">Study</a></li>
        <li><a class="nav-link scrollto <?php if ($hal == 'task') echo 'active'; ?>" href="index.php?hal=task">Task</a></li>
        <li><a class="nav-link scrollto <?php if ($hal == 'portfolio') echo 'active'; ?>" href="index.php?hal=portfolio">Portfolio</a></li>
        <li><a class="nav-link scrollto <?php if ($hal == 'contact') echo 'active'; ?>" href="index.php?hal=contact">Contact</a></li>
    </ul>

    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>