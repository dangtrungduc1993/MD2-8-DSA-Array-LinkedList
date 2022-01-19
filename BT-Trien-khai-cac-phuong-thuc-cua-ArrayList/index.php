<?php
include_once "MyList.php";
$mylist = new MyList(6,[0,2,3,4,5]);
$mylist->insert(20,9) ;
print_r($mylist);
echo "<br>";
echo $mylist->insert(20,9);
echo "<br>";


$mylist->remote(20);
print_r($mylist);
echo "<br>";

echo $mylist->get(0);
echo "<br>";
echo $mylist->get(2);
echo "<br>";

print_r($mylist->addAll([8,8,8,8]));
//echo $mylist->indexOf(2);
echo "<br>";
echo $mylist->isEmpty();
echo "<br>";
$mylist->sort();
print_r($mylist);
echo "<br>";
echo $mylist->reset();
echo "<br>";
echo $mylist->size();









