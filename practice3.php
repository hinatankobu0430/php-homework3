<?php
//1
function times($double){
    $result = $double*2;
    return $result;
}
echo times(100);
//()の中に引数を入れることで数値を2倍にして返すことができる。//
?>

<?php
//2
function plus($a,$b){;
    return $a*$b;
}
echo plus(12000,2);
//()の中に引数を入れることで足した結果を返すことができる。//
?>

<?php
//3
$array = array(1,3,5,7,9);

function mul($arr){
    $result = 1;
    foreach($arr as $val){
        $result *= $val;
    } 
    return $result;
}
echo mul($array);
?>

<?php
//4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
 //どうしたらいいかわからない・・・・
        if($a > $max_number){
     $max_number = $a;
            
        }
    }
return $max_number;
}
echo max_array(array(1,3,2,5,6,8,12,41,)); 
?>

<?php
//5
//strip_tags...文字列からHTML及びPHPタグを取り除く
$text = '<p>この場合ｼﾝｸﾞﾙｸｵﾃｰｼｮﾝで囲まれている箇所が出力されるがstrip_tagsによってタグが取り除かれる<p>';
echo strip_tags($text);
echo "\n";
//追記：echo strip_tags($text,'<p>'); =>これを使うことによってタグも表示されるようになる。

//array_push...1つ以上の要素を配列の最後に追加する。
$array = array("dog","cat","mouse","bird");
array_push($array,"bear","rabbit");
print_r($array);
//print_r() は、 変数の値に関する情報を解り易い形式で表示します。

//array_marge...1つまたは複数の配列をマージする。
$array1 = array("animal" => "dog","cat","mouse");
$array2 = array("number" => "2","3","shape"=>1,4,6);
$result = array_merge($array1,$array2);
print_r($result);

//time...現在のUnixタイムスタンプを返す。
//mktime...日付をUnixタイムスタンプとして取得する。
$now = time();
echo "Now: ".date('Y-m-d')."\n";

date_default_timezone_set('UTC');//UTCは協定世界時
echo date("c",mktime(0,0,0,12,16,1995));


//date...ローカルの日付/時刻を書式化する。
date_default_timezone_set('Japan');
echo date("l");//曜日
echo "\n";
echo date('l jS \of F Y h:i:s A');
echo "\n";
echo "Apr 30th, 1994 is on a " . date("l", mktime(0, 0, 0, 4, 30, 1994));
echo "\n";
?>