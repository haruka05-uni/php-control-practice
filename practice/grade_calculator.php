<?php
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];
?>

<h1>成績判定システム</h1>
<h2>【個別成績】</h2>
<?php
foreach($students as $student){
if ($student['score'] >= 90) {
    $grade = 'A';
} elseif ($student['score'] >= 80 && $student['score'] < 90) {
    $grade = 'B';
} elseif ($student['score'] >= 70 && $student['score'] < 80) {
    $grade = 'C';
} elseif ($student['score'] >= 60 && $student['score'] < 70) {
    $grade = 'D';
}else {
    $grade = 'F';
}
    echo    $student['name'].':'.$student['score'].'点 - 評価'.$grade.'<br>';
}
?>
<h2>【統計成績】</h2>
<?php
$pass_count = 0;
$fail_count = 0;
$total_score = 0;

foreach($students as $student){
    if ($student["score"] >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }

    $total_score += $student["score"];
}

$avgScore =$total_score / count($students);

echo    '合格者数:'.$pass_count.'人';
echo    '<br>';
echo    '不合格者数:'.$fail_count.'人';
echo    '<br>';
echo    '平均点:'.$avgScore.'点';
?>
