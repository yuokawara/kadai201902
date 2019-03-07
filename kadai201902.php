<?php
$name = "大河原";
//ifで、もしも＄nameが同じなら、私はあなたの名前です。と出力されます。
if ($name == "大河原") {
  echo "私はあなたの名前です。";
//elseで、$"name"が別の場合だと、私はあなたの名前ではありません。と出力されます。
} else {
  echo "私はあなたの名前ではありません";
}
?>

<?php
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
//for ($i = 0; $i <= 10000; $i++)で0から10000までまで繰り返しでプラスしていきます。
//トータルで50005000を出力します。
echo $total;
 ?>

<?php
$fruits = array("apple", "orange", "grape", "banana", "mango");
//5つのフルーツの要素を入力。
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}
//foreachでfruitsとfruitは同じ定義と入力。\nは出力を見やすくするため。
 ?>

 <?php
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
  ?>
