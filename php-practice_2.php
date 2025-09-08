<?php
// Q1 tic-tac問題

function number() {
    for($x = 1; $x <= 100; $x++) {
        if($x % 4 === 0 && $x % 5 === 0) {
            echo "tic-tac" . "\n";
        } elseif($x % 4 === 0) {
            echo "tic" . "\n";
        } elseif($x % 5 === 0) {
            echo "tac" . "\n";
        } else {
            echo $x . "\n";
        }
    }

}

number();

// Q2 多次元連想配列

// 問題1
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。" ;

// 問題2
foreach ($personalInfos as $x => $y) {
    echo ($x + 1) . "番目の" . $y['name'] . "のメールアドレスは" . $y['mail'] . "で、電話番号は" . $y['tel'] . "です。" . "\n";
}

// 問題3

$ageList = [25, 30, 18];

foreach($personalInfos as $i => $j) {
    $personalInfos[$i]["age"] = $ageList[$i];
}

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
    
    public function info() {
        echo "学籍番号" . $this->studentId . "の生徒は" . $this->studentName . "です。";
    }
}

$yamada = new Student(120, "山田");
$yamada->info();


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>