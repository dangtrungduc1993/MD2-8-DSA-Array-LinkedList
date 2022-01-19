<?php
include "ArrayList.php";

$listInteger = new ArrayList([6]);
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(0);
echo $listInteger->get(1);
