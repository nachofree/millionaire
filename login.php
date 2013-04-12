<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST[doLogin]))
{
    //should authenticate here
    //but I am not putting it in!
    
    session_start();
    $_SESSION['user'] = $_POST['username'];
    header("Location: index.php");
}

include_once('header.php');
?>

<div id="login">
 <form id="frmLogin" action="<?=$_SERVER[PHP_SELF]?>" method="POST">
    <input type="text" id="username" name="username" value="username">
    <input type="password" id="password" name="password" value="password">
    <input type="submit" value="login" name="doLogin">
 </form>
</div>
<?php
include_once('footer.php');
?>
