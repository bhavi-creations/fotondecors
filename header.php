<!-- header.php -->
<nav
    class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
    id="ftco-navbar">

    <div class="container">

        <a class="navbar-brand d-none d-md-block" href="index.php">
            <img
                class="img-fluid navbar_logo_img"
                src="images/Screenshot 2024-12-20 155515.png"
                alt="Icon" style="width: 50%;" />
        </a>


        <a class="navbar-brand d-md-none" href="index.php">
            <img
                class="img-fluid navbar_logo_img"
                src="images/md_logo.png"
                alt="Icon" />
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#ftco-nav"
            aria-controls="ftco-nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '' ?>">
                    <a href="products.php" class="nav-link">Products</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'active' : '' ?>">
                    <a href="blogs.php" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'dealers.php' ? 'active' : '' ?>">
                    <a href="dealers.php" class="nav-link"> Dealers </a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : '' ?>">
                    <a href="portfolio.php" class="nav-link">  Portfolio </a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>