<?php
echo 'hello php!';
echo "\n";
$a = 3;
$b = 7;
echo $a+$b;
echo "\n";
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month [7];
echo "\n";
$hello = "Hello,";
$name = "渡部　由貴";
$world = "'s World!";
echo $hello.$name.$world;
echo "\n";
$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;
echo "\n";
$calendar2018 = [
    "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月",];
  echo $calendar2018["December"];
  echo  "\n";
  $integer = 20;
  $string = "abc";
  echo $integer;
  echo  "\n";
  echo $string;
  echo  "\n";
  $new_integer = $integer + 10;
  echo $new_integer;
  echo  "\n";
  
  $red_fruit = "APPLE";
  $yellow_fruit = ' Banana';
  echo $red_fruit;
  echo $yellow_fruit;
  echo  "\n";
  
  $array2 = ["spring","summer","autumn","winter"];
  echo $array2[2];
  echo  "\n";
  
  $animals = [
      "cat" => "猫",
      "dog" => "犬",
      "bird" => "鳥"];
  echo $animals ["cat"];
  echo  "\n";
  
  $result = true;
  if ($result == true) {
      echo "成功しました。";
  } else {
      echo "失敗しました。";
  }
  echo  "\n";
  $height = 110;
  if ($height < 150) {
      echo "150cm 未満の方はご乗車できません。";
  } else {
      echo "ご乗車になれます。";
  }
  echo  "\n";
  
  $height = 160;
  if ($height < 150) {
      echo "150cm 未満の方はご乗車できません。";
  } else {
      echo "ご乗車になれます。";
  }
  echo  "\n";
  
  $day = 10;
  if ($day < 7) {
       echo "ご予約可能です。";
  } else {
      echo "ご予約不可です。10日以降に再度ご予約ください。";
  }
  echo  "\n";
  $day = 10;
  if ($day < 15) {
       echo "ご予約可能です。";
  } else {
      echo "ご予約不可です。10日以降に再度ご予約ください。";
  }
  echo  "\n";
  $height = 230;
      if ($height < 150) {
          echo "150cm 未満の方はご乗車できません。";
      } else {
          echo "200cm以上の方はご乗車できません。";

      }
   echo  "\n";
   
  $weekday = "木曜";
  switch($weekday) {
     case "月曜";
      echo "可燃ごみの日です。";
      break;
     case "水曜";
      echo "資源ごみの日です。";
      break;
     default;
      echo "回収はありません。";
      break;
  }
   echo  "\n";
   
   $weekday = "木曜";
   switch ($weekday) {
      case "月曜":
      case "木曜":
       echo "可燃ごみの日です。";
       break;
      case "水曜":
       echo "資源ごみの日です。";
       break;
      default:
       echo "回収はありません。";
       break;
   }
   echo "\n";
   
$weekday ="月曜";
 switch ($weekday) {
  case "土曜":
  case "日曜":
  case "祝日":
    echo "土日祝専用特別料金dayです。";
    break;
  case "水曜":
    echo "lady's dayです。";
    break;
  default:
    echo "早朝早割dayです。";
    break;
}
echo "\n";

$a = 3;
$b = 3;
$c = "3";
var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a === $c);
var_dump($a !== $c);

for($i = 0; $i < 10; $i++) {
    echo $i;
}
echo "\n";

$total = 0;
echo $total;
echo "\n";
for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple","orange","lemon",);
echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}
 echo "\n";

$animals =array("dog","cat","panda",);
foreach($animals as $animal){
    echo "要素は" . $animal;
     echo "\n";
} 

//この１行はコメントになる。記号は// /* :/　が使える。

//課題１
$name = "渡部　由貴";
if ($name = "渡部　由貴") {
    echo "私はあなたの名前です。";
} else {
    echo"あなたの名前ではありません。";
}
 echo "\n";
 
//課題２
$total = 0;
echo $total;
echo "\n";
for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";
 
//課題３
$fruits = array("オレンジ","桃","いちご","プラム","バナナ",);
foreach($fruits as $fruit) {
 echo"●" . $fruit;
 echo "\n";
}
 echo "\n";
 
//課題４
$start =1;
$end = 101;
for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
