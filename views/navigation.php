<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URL; ?>/index.php">Home</a>
        </li>
        <li>
            <a href="<?php echo URL; ?>/views/articlesIndex.php">Articles</a>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URL; ?>/views/logout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URL; ?>/views/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
