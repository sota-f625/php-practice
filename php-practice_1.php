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

$prefecture = [
    "東京都" => "新宿区",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "群馬県" => "前橋市",
    "栃木県" => "宇都宮市",
    "茨城県" => "水戸市",
    "神奈川県" => "横浜市"
    ];
    
foreach ($prefecture as $capital ) {
    echo $capital . "\n";
}

// Q8 連想配列-2

$prefecture = [
    "東京都" => "新宿区",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "群馬県" => "前橋市",
    "栃木県" => "宇都宮市",
    "茨城県" => "水戸市",
    "神奈川県" => "横浜市"
];
    
foreach ($prefecture as $pref => $capital ) {
    if($pref ==="埼玉県") {
        echo $pref . "の県庁所在地は、" . $capital . "です。";
    }
}

// Q9 連想配列-3

$prefecture = [
    "東京都" => "新宿区",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "群馬県" => "前橋市",
    "栃木県" => "宇都宮市",
    "茨城県" => "水戸市",
    "神奈川県" => "横浜市"
];

$prefecture["愛知県"] = "名古屋市";
$prefecture["大阪府"] = "大阪市";
    
foreach ($prefecture as $pref => $capital ) {
    if($pref === "東京都" || 
       $pref === "埼玉県" || 
       $pref === "千葉県" || 
       $pref === "群馬県" || 
       $pref === "栃木県" || 
       $pref === "茨城県" || 
       $pref === "神奈川県" 
       ) {
        echo $pref . "の県庁所在地は、" . $capital . "です。" . "\n";
    } else {
        echo $pref . "は関東地方ではありません。" . "\n";
    }
} 

// Q10 関数-1

function hello($name) {
    echo $name . "さん、こんにちは。" . "\n";
}

hello("金谷");
hello("安藤");

// Q11 関数-2

function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";
    return $taxInPrice;
}

calcTaxInPrice(1000);

// Q12 関数とif文

function distinguishNum($num) {
    if($num % 2 === 0) {
        echo $num . "は偶数です。" . "\n";
    } else {
        echo $num . "は奇数です。" . "\n";
    }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($grades) {
    switch($grades) {
        case 'A':
        case 'B':
            return '合格です。' . "\n";

        case 'C':
            return '合格ですが追加課題があります。' . "\n";

        case 'D':
            return '不合格です。' . "\n";

        default:
            return '判定不明です。講師に問い合わせてください。' . "\n";
    }
}

echo evaluateGrade("B");
echo evaluateGrade("F");

?>