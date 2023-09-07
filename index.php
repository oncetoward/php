<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style type="text/css">
    .row div{border:1px solid grey}
    .redbox{background-color:red;}
</style>
<?php
print('<h1>안녕하세요</h1>');
$a='h2';
print('<'.$a.'>안녕하세요</'.$a.'>');

for($i=0;$i<3;$i++){
    $a='h3';
    print('<'.$a.'>안녕하세요</'.$a.'>');
}

for($i=0;$i<3;$i++){
    $b='h6';
    print('<'.$a.'> '.$i.' 안녕하세요</'.$a.'>');
}

?>
    </head>
    <body>
        <div class="row">
<?php
for($i=3;$i<6;$i++){
    //$a = "abcd";
    //print('<h4>'.$a.'</h4>');
    $s='<div class="col-lg-4"><h1>.col-lg-4</h1></div>';
    print($s);
}
?>
</div>
<div class="row">
<?php
for($i=3;$i<6;$i++){
?>
    <div class="col-lg-4"><h1>col-lg-4</h1></div>
<?php
}
?>
</div>
<?php
function makeBcol($wkan=3){
    $total=12; //부트스트랩 전체 컬럼수
    $classNo=round($total/$wkan); //클래스 속성 안의 부트스트랩 컬럼 숫자, 내림
    //$classNo=floor($total/$wkan); //클래스 속성 안의 부트스트랩 컬럼 숫자, 내림
    //$classNo=ceil($total/$wkan); //클래스 속성 안의 부트스트랩 컬럼 숫자, 올림
    $cnt=$total/$classNo;
    print('<div class="row">'."\n");
    for($j=0;$j<$cnt;$j++){
        if($j % 2 == 1){
            $addClass='redbox';
        }else{
            $addClass='';
        }
        $s='<div class="col-lg-'.$classNo.' '.$addClass.'"><h1>...col-lg-'.$classNo.''.$j.'</h1></div>'."\n";
        print($s);
    } // 2nd for
    print('</div>'."\n");
}

//$wkan=3; //나누고 싶은 칸 수
for($wkan=2;$wkan<7;$wkan++){
    makeBcol($wkan);
} // 1st for
?>
<?php
$score = 75;
$score=floor($score);
switch($score){
    case 90:
        print('great');
        break;
    case 80:
        print('better');
        break;
    case 70:
        print('good');
        break;
    default:
        print('false');
}

?>

        <div class="row">
            <div class="col-lg-4"><h1>.col-md-4</h1></div>
            <div class="col-lg-4"><h1>.col-md-4</h1></div>
            <div class="col-lg-4"><h1>.col-md-4</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-3"><h1>.col-md-3</h1></div>
            <div class="col-lg-3"><h1>.col-md-3</h1></div>
            <div class="col-lg-3"><h1>.col-md-3</h1></div>
            <div class="col-lg-3"><h1>.col-md-3</h1></div>
        </div>
<?php
        function makeHr($title="개별처리"){
            print('<hr>');
            print('<h1>'.$title.'</h1>');
            print('<hr>');
            print("\n");
        }

        makeHr();
        makeBcol(2);
        makeBcol(3);
        makeBcol(4);
        makeBcol(3);
        makeHr('사다리만들기');
        makeBcol(12);
        $kn=1;
        function grid1($cNo=1, $addClass='redbox'){
            $other=12-$cNo;
            $s='<div class="row"></div>';
            $s.='<div class="col-lg-'.$cNo.'"><h2>.col-lg-'.$cNo.'</h2></div>'."\n";
            $s.='<div class="col-lg-'.$other.' '.$addClass.'"><h2>.col-lg-'.$cNo.'</h2></div>'."\n";
            $s.='</div>';
            print($s);
        }
        for($i=11;$i>0;$i--){
            grid1($i);
        }

        /* 단순배열 */
        $arr = array(1, 2, '국어', '수학');
        for($i=0;$i<count($arr);$i++){
            print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
        }

        foreach($arr as $a){
            print('<li>'.$a.'</li>');
        }

        /* 연관배열 */
        $arr = array(1=>'국어', 2=>'수학', 5=>'영어', 6=>'과학');
        for($i=0;$i<count($arr);$i++){
            print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
        }

        foreach($arr as $k=>$v){
            print('<li>'.$k.':'.$v.'</li>');
        }
?>

    </body>
</html>