<?php
$config = parse_ini_file('config.ini', true);
$programa = $_GET["programa"];
$version = $config['programas'][$programa];
echo "$version"
?>