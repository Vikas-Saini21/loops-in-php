<!-- loops in php -->
 <!-- for loop  -->
<?php
$a=1;
for($a=1;$a<100;$a++){
echo $a."<br>";
}
?>

<!-- for loop with break statement -->
<?php
$a=1;
for($a=1;$a<100;$a++){
    if($a==6){
        break;
    }
    echo $a."<br>";
}
?>

<!-- for loop with continue statement -->
<?php
$a=1;
for($a=1;$a<100;$a++){
    if($a==6){
        continue;
    }
    echo $a."<br>";
}
?>

<!-- while loop -->
<?php
$a=1;
while($a<100){
    echo $a."<br>";
    $a++;
}
?>

<!-- do while loop -->
<?php
$i=1;
do{
    echo $i."<br>";
    $i++;
}
while($i<100);
?>
