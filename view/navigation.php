<?php
    require_once(__DIR__ . "/../model/config.php");
        if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
?>

<nav>
    <ul>
        <li> <a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
    </ul>
</nav>