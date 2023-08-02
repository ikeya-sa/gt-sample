<?php
echo '課題1:';
function double($num) {
  $num *= 2;

return $num;
}

//引数を5とした場合
echo double(5);

echo ' 課題2:';
function add($a, $b){
  $a += $b;

return $a;
}

//引数を5と10とした場合
echo add(5,10);

echo ' 課題3:';
function multi_array($arr){
  $multi_total = 1;
  
  for ($i = 0; $i < count($arr); $i++){
    $multi_total *= $arr[$i];
  }

return $multi_total;
}

//引数をarray(1, 3, 5 ,7, 9)とした場合
echo multi_array(array(1, 3, 5 ,7, 9));

echo ' 課題4:';
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($max_number < $a) {
      $max_number = $a;
    }
  }

  return $max_number;
}

//引数をarray(5, 3, 9, 7, 1)とした場合
echo max_array(array(5, 3, 9, 7, 1));

echo "\n";
echo '課題5-1:';
//strip_tags
$str = "<h1>課題5の</h1>"."<p>1つ目の関数</p>";
echo strip_tags($str) ;

echo "\n";
echo '課題5-2:';
//array_push
$arr = array("元の要素1","元の要素2", "元の要素3");
array_push($arr,"追加要素1", "追加要素2", "追加要素3");

foreach($arr as $element){
  echo $element;
}

echo "\n";
echo '課題5-3:';
//array_merge
$arr1 = array(1 ,2 ,3);
$arr2 = array(4,5);
$arr3 = array(6);
$arr4 = array_merge($arr1 ,$arr2 ,$arr3);

foreach($arr4 as $element){
  echo $element;
}

echo "\n";
echo '課題5-4:';
//time, mktime
$timestamp = time();
$seconds = mktime(0, 0, 0, 7, 25, 2023);
$seconds = ($timestamp - $seconds);
$days = floor($seconds / 86400);
$hours = floor(($seconds / 3600) % 24);
$minutes = floor(($seconds / 60) % 60);
$seconds = $seconds % 60;

echo '今は'.date('Y年m月d日 H時i分s秒', $timestamp);
echo "\n";
echo "受講開始から{$days}日{$hours}時間{$minutes}分{$seconds}秒経過";

echo "\n";
echo '課題5-5:';
//date
$today = date('Y/m/d');
echo "今日は$today";
?>