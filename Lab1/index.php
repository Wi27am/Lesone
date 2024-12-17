<?php echo"welcom";?>
<?php 
sage = 18;
 //if ($age >= 18){
    echo "انت بالغ";
} elseif ($age <18 && $age >= 13){
echo "انت مراهق";   
}else {
    echo "انت طفل";
}
?>
<?php
$day =3;
//switch($day){
    case 1:
        echo "اليوم هو السبت";
        break;
        case 2:
            echo "اليوم هو الاحد";
            break;
            default:
            echo "يوم غير معروف";
}
?>
<?php
//for($i =0 ; $i <5; $i++){
    echo "العددهو: $i <br>";
    $i++;
}
?>
<?php
$i =0;
//do{
    echo "العدد هو: $i <br>";
    $i++;
} while ($i < 5);
?>
<?php
$i = 0;
//while ($i < 5){
    each "العدد هو: $i <br>";
    $i++;
}
?>
<?php
$a = 10;
$b = 3;
echo "الجمع". ($a + $b) ."<br>";
echo "الطرح". ($a - $b) ."<br>";
echo "الضرب". ($a * $b) ."<br>";
echo "القسمه". ($a / $b) ."<br>";
echo "باقي القسمه". ($a % $b) ."<br>";
?>
<?php
$a = 5;
$b = 10;
//if ($a > $b){
    echo "$a اكبر من $b";
} elseif ($a < $b){
echo "$a اصغر من $b";
} else {
    echo "$a يساوي $b";
}