<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php include 'components/slider.php'; ?>

<div class="banner">
    <div class="container center-align">
        <a href="#0">
        <div class="banner-title amithen">
            Seu Bem-Estar é a Nossa Inspiração!
        </div>
        <div class="banner-subtitle">
            Agende Sua Sessão!
        </div>
        </a>
    </div>
</div>

<?php include 'components/about.php'; ?>

<?php include 'components/services.php'; ?>

<?php include 'components/workers.php'; ?>

<?php include 'components/blog.php'; ?>

<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

</body>

</html>