
<link rel="stylesheet" href="index_style.css">

<?php
    require "db.php";
?>

<?php
    if(isset($_SESSION['logged_user'])) : 
?>
<p> Authorized </p>
<p>Hi, <?php echo $_SESSION['logged_user']->login ?> <p>

<a href="logout.php">Exit</a>

<?php else : ?>
    <h1>You are not authorized</h1>
    <div class = "main-menu">
    <input type="button" value="Registration" onClick='location.href="signup.php"'>
    <input type="button" value="Authorization" onClick='location.href="AuthorizationPhp.php"'>
    </div>
<?php endif; ?>