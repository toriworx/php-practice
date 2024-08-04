<?php
// Q1 変数と文字列
$name = '鳥形';
echo '私の名前は'.$name.'です。';
?>

<?php
// Q2 四則演算
$num = 5*4;
echo "$num\n";
echo $num/2
?>

<?php
// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、'.date('Y年m月d日 H時i分s秒').'です。';
?>

<?php
// Q4 条件分岐-1 if文
$device = "mac";

if ($device == "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device == "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}
?>

<?php
// Q5 条件分岐-2 三項演算子
$age = 17;
$message = ($age <= 18)? '未成年です。':'成人です。';
echo $message;
?>

<?php
// Q6 配列
$kanto = array("東京都", "神奈川県", "栃木県", "千葉県", "群馬県","茨城県", "埼玉県");

$third = $kanto[2];
$fourth = $kanto[3];

echo "{$third}と{$fourth}は関東地方の都道府県です。";
?>

<?php
// Q7 連想配列-1
$kanto = array(
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
);

foreach ($kanto as $key => $value) {
  echo "$value\n";
}
?>

<?php
// Q8 連想配列-2
$kanto = array(
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
);

if (isset($kanto["埼玉県"])) {
  $kencho = $kanto["埼玉県"];
  echo "埼玉県の県庁所在地は、{$kencho}です。";
}
?>

<?php
// Q9 連想配列-3
$kanto = array(
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
);

$kanto_prefectures = array("東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県", "愛知県", "大阪府");

foreach ($kanto_prefectures as $prefecture) {
  if (array_key_exists($prefecture, $kanto)) {
      echo "{$prefecture}の県庁所在地は、{$kanto[$prefecture]}です。\n";
  } else {
      echo "{$prefecture}は関東地方ではありません。\n";
  }
}
?>

<?php
// Q10 関数-1
function hello($name) {
  return $name . "さん、こんにちは。";
}

echo hello("金谷") . "\n";
echo hello("安藤");
?>

<?php
// Q11 関数-2
function calcTaxInPrice($price){
  return $price . '円の商品の税込価格は' . ($price * 1.1) . '円です。';
}

$taxInPrice = calcTaxInPrice(1000);
echo $taxInPrice;
?>

<?php
// Q12 関数とif文
function distinguishNum($number){
  if($number % 2 ==1){
    return $number. 'は奇数です。';
  }else{
    return $number. 'は偶数です。';
  }
}

echo distinguishNum(11). "\n";
echo distinguishNum(24);
?>

<?php
// Q13 関数とswitch文
function evaluateGrade($score){
  switch($score){
    case 'A';
    case 'B';
        echo '合格です。';
        break;

    case 'C';
        echo '合格ですが追加課題があります。';
        break;

    case 'D';
        echo '不合格です。';
        break;
    
    default;
        echo '判定不明です。講師に問い合わせてください。';
        break;
  }
}

echo evaluateGrade('A'). "\n";
echo evaluateGrade('100');
?>