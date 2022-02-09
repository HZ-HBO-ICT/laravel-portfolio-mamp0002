<?php $page = $_SERVER["REQUEST_URI"]?>
<?php TRIM($page, '/') ?>

<nav>
    <ul>
        <?php if($page === '/') {
            echo '<li><a href="/" class="active">Home</a></li>';
        } else {
            echo '<li><a href="/">Home</a></li>';
        }
        ?>

        <?php if($page === '/profile') {
            echo '<li><a href="/profile" class="active">Profile</a></li>';
        } else {
            echo '<li><a href="/profile">Profile</a></li>';
        }
        ?>

        <?php if($page === '/dashboard') {
            echo '<li><a href="/dashboard" class="active">Dashboard</a></li>';
        } else {
            echo '<li><a href="/dashboard">Dashboard</a></li>';
        }
        ?>

        <?php if($page === '/blog') {
            echo '<li><a href="/blog" class="active">Blog</a></li>';
        } else {
            echo '<li><a href="/blog">Blog</a></li>';
        }
        ?>

        <?php if($page === '/faq') {
            echo '<li><a href="/faq" class="active">FAQ</a></li>';
        } else {
            echo '<li><a href="/faq">FAQ</a></li>';
        }
        ?>
    </ul>
</nav>
