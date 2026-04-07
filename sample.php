<?php
$sample = "Hello!";
echo $sample;
?>

<?php
$age = 20;
$test ="テスト"
?>

<?php
$array = [1,2,3];
echo $array[0];
echo $array[2];
?>

<?php
$nizi = [
    ['松下',29,'男性'],
    ['高田',25,'男性'],
    ['岡田',25,'女性']
];

$ren = [
    'name'=>'田中',
    'age'=>24,
    'codelang'=>'HTML'
];
echo"私の名前は{$nizi[0][0]}です。年齢は{$nizi[0][1]}歳{$nizi[0][2]}です。"."\n";
echo $ren['name'];
?>

<?php
$i = 0;
echo $i;
echo $i++;
echo $i;
echo ++$i;
?>

<?php
for($i =0;$i<4;$i++){
    echo 3;
}
?>

<?php
for($i =0; $i<15; $i++){
    if($i % 2 ===0){
        continue;
    }
    if($i >13){
        break;
    }
    echo $i."\n";
}
?>