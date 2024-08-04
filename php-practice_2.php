<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
      echo "tic-tac\n";
  } elseif ($i % 4 == 0) {
      echo "tic\n";
  } elseif ($i % 5 == 0) {
      echo "tac\n";
  } else {
      echo $i . "\n";
  }
}

// Q2 多次元連想配列
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

//問題1
foreach ($personalInfos as $person) {
  if ($person['name'] === 'Bさん') {
      echo $person['name'] . "の電話番号は" . $person['tel'] . "です。";
      break;
  }
}

//問題2
foreach ($personalInfos as $index => $person) {
  $number = $index + 1;
  echo "{$number}番目の{$person['name']}のメールアドレスは{$person['mail']}で、電話番号は{$person['tel']}です。\n";
}

//問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $person) {
    $personalInfos[$index]['age'] = $ageList[$index];
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

    public function showStudentInfo()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
    }
}

$student = new Student(120, '山田');

$student->showStudentInfo();

// Q4 オブジェクト-2
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

    public function showStudentInfo()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
    }
}

$student = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題1
$date = new DateTime();
$date->modify('-1 month');

echo $date->format('Y-m-d');

//問題2
$today = new DateTime();

$pastDate = new DateTime('1992-04-25');

$interval = $today->diff($pastDate);

$daysPassed =  $interval->days;

echo "あの日から{$daysPassed}日経過しました。";

?>