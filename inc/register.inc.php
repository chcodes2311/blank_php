<?php include_once 'php/register.php'; ?>
<h1>Register</h1>
<form action="php/register.php" method="post">
    Username:<br />
    <input type="text" name="username" value="" />
    <br /><br />
    Naam:<br />
    <input type="text" name="naam" value="" />
    <br /><br />
    E-Mail:<br />
    <input type="text" name="email" value="" />
    <br /><br />
    Password:<br />
    <input type="password" name="password" value="" />
    <br /><br />
    Rol: <br>
    <select name="rol">
        <option value=1>Admin</option>
        <option value=2>Telefoniste</option>
        <option value=3>Monteur</option>
    </select>
    <br /><br />
    <input type="submit" value="Register" />
</form>
