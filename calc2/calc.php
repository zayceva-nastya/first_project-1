<?php
include("autoload.php");
$calc = new Calculator($_POST['a'], $_POST['b']);
echo $calc->{$_POST['op']}();
