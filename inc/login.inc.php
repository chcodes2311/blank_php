<?php include_once 'php/login.php'; ?>
<div class="main">
    <h1>Hakkers</h1>
    <form action="php/login.php" method="post">
        Username:
        <input type="text" name="username" value="<?php echo $submitted_username; ?>" />
        <br /><br />
        Password:
        <input type="password" name="password" value="" />
        <br /><br />
        <input type="submit" value="Login" />
    </form>
</div>