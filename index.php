<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
require_once("libs/Smarty.class.php");

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('config/');
$smarty->setCacheDir('cache/');

$smarty->assign("title","Testpage");

$smarty->display("templates/head.tpl");
$smarty->display("templates/login.tpl");
$smarty->display("templates/footer.tpl");
?>
</html>