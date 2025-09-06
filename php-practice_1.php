<?php
// Q1 変数と文字列

$name = "藤村";

echo "私の名前は「" . $name . "」です。";

// Q2 四則演算

$num  = 5 * 4;

echo $num."\n";

$num /= 2;

echo $num;

// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');

$today = date("Y年m月d日 H時i分s秒");

echo "現在時刻は、" . $today . "です。";

// Q4 条件分岐-1 if文

$device = "mac";

if($device === "windows" || $device === "mac") {
    echo "使用OSは、" . $device . "です。";
} else {
    echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子

$age = 198;

$message = ($age < 18) ? "未成年です。" : "成人です。";

echo $message;

// Q6 配列

$prefecture = [
    "東京都",
    "埼玉県",
    "千葉県",
    "群馬県",
    "栃木県",
    "茨城県",
    "神奈川県"
    ];
    
echo $prefecture[2] . "と" . $prefecture[3] . "は関東ちほうの都道府県です。";

// Q7 連想配列-1


// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>