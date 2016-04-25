<?php
//快速排序

$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 1, 100);

print_r($output);

die();
$tatalNum = 0;
$dArr = [[12,14],[23,35]];
foreach ($dArr as $key => $value) {
    $tatalNum +=$value[0];
}
var_dump($tatalNum);die();
$allSale = [];
$hasDataSale = [33,44];
$diff = array_diff($allSale, $hasDataSale);
print_r($diff);die();
$users = '';
        $regAll = explode(',', $users);
        print_r($regAll);die();

$f = floatval(1.00001);
if ($f>0) {
    echo $f;
    die();
}
$quick = [5,3,6,7,11,34,21,14,19];

function querySearch($arr,$search){
   $middle = ($high-$low)/2;
}
function quick_sort($arr) {
    //先判断是否需要继续进行
    $length = count($arr);
    if($length <= 1) {
        return $arr;
    }
    $base_num = $arr[0];
    $left_array = $right_array = array();
    for($i=1; $i<$length; $i++) {
        if($base_num > $arr[$i]) {
            $left_array[] = $arr[$i];
        } else {
            $right_array[] = $arr[$i];
        }
    }
    return array_merge(quick_sort($left_array), array($base_num), quick_sort($right_array));
}


function selectSort($arr) {
 $len=count($arr);
    for($i=0; $i<$len-1; $i++) {
        $p = $i;
        for($j=$i+1; $j<$len; $j++) {
            if($arr[$p] > $arr[$j]) {
                $p = $j;
            }
        }
        if($p != $i) {
            $tmp = $arr[$p];
            $arr[$p] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }
    return $arr;
}
$sort = selectSort($quick);
print_r($sort);die();

$sa = [];
$bbb = ['aaa'=>2,'sss'=>'rrr'];
array_unshift($sa, $bbb);
print_r($sa);die();
empty($sa) && die('hhh');
$arrs = range(1, 1);
$xc = array_diff($arrs,[]);
print_r($xc);die();
echo count(array_unique([]));die();
class ClassName {}
 
echo Name\Space1\ClassName::class;

die();
trait SayWorld {
   public function sayHello($say) {
     echo 'Hello World!'.$say;
   }
 }
 
 class MyHelloWorld{
   use SayWorld;
 }
 
 $o = new MyHelloWorld();
 $o->sayHello('xiaopang');die(); // Hello World

$array = array('1' => 'one',
               '2' => 'two',
               '3' => 'three');

$arrayobject = new ArrayObject($array);
$iterator = $arrayobject->getIterator();

if($iterator->valid()){
    $iterator->seek(2);            // expected: two, output: two
    echo $iterator->current();    // two
}
die();
$userIds = '5#1,6#2,7#1,8#2,9#1';

$idsArr = explode(',',trim($userIds,','));
        foreach ($idsArr as $u) {
            $id = mb_substr($u,0,mb_strpos($u,'#',0,'UTF-8'),'UTF-8');
            $re = mb_substr($u,mb_strpos($u,'#',0,'UTF-8')+1,mb_strlen($u,'UTF-8'),'UTF-8');
            if ($re==1) {
                $unresArr[] = $id;
            }else{
                $resArr[] = $id;
            }
        }

var_dump($resArr);die();
function curlByUrl($url,$data=''){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch,CURLOPT_TIMEOUT,5);
        if (!empty($data)) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        //执行cURL获得返回结果
        $output = curl_exec($ch);
        // 关闭cURL资源，并且释放系统资源
        curl_close($ch);
        return $output;
    }

    $data=["shop_id"=>122,"price"=>array('1'=>'33','22'=>'2234'),"remark"=>'remark_test'];
    $url = "www.mytest.com/test.php";
    print(http_build_query($data));
    $ss='';
    $ee = isset($ss);
    var_dump($ee);
    
        echo "<hr>";
        if (0) {
            echo "0";
        }else{
            echo "01";
        }
        echo  mktime(1, 2, 3, 4, 5, 2006);
        echo "<hr>";
        echo intval('888999 aa!@#$%^&*()_aa');
        echo "<hr>";
        $trans = array("hello" => "hi", "hi" => "hello");
        echo strtr("hi all, I said hello", $trans);
        echo "<hr>";
        echo str_replace('hi', 'hello', 'hi all, I said hello');
        $sql = "select * from user where id=999";
        $str = preg_match('/(?<=from)(.*)(?=where)/', $sql,$cc);
        var_dump($cc);

        echo "<hr>";
        $array = array(array(44,55,11,66),2,3,4);
        unset($array[1]);
        var_dump($array);
        echo "<hr>";
        echo bcadd(-0.5333, -5, 2);
        echo "<hr>";
        $a = ["a"=>1, "b"=>2];
        var_dump(isset($a['c']));
        echo "<hr>";
        function add($a,$b,$c){
            return $a+$b+$c;
        }
        $a=1;$b=2;$c=3;$d=4;
        echo add($a,$b,$a>$b?$d:$c);
        echo "<hr>";
        // echo isset($c)?$c:$b;
        $date = '2015-05-05';
        $begin = strtotime($date) + 2*3600;
        $end = strtotime(date('Y-m-d h:0:0',$begin). "+ 1 days");
        echo $begin;
        echo "<hr>";
        $mdate = date('Y-m-d',strtotime(date('Y-m-1',strtotime($date))."+ 1 months -1 days"));
        echo $mdate;


$date = '2015-12-05';
$firstday = date('Y-m-01', strtotime($date));
$lastday = strtotime(date('Y-m-d', strtotime("$firstday +1 month -1 day")));
echo $lastday;
echo "<hr>";
$firstday = strtotime(date('Y-m-01', strtotime($date))) + 2*3600;
$temp = date('Y-m-d H:0:0',$firstday);
$lastday = strtotime(date('Y-m-d H:0:0', strtotime("$temp +1 months")));
$monthLast = date('Y-m-d',strtotime(date('Y-m-d',$lastday)."-1 days"));
echo $monthLast;
$mdate = date('Y-m-d',strtotime(date('Y-m-1',strtotime($date))."+ 1 months -1 days"));
echo $mdate;
echo "<hr>";
$idsArr = [23];
$ids = implode(',',$idsArr);

var_dump($ids);
echo "<hr>";
$number = 56156145600.25555;

echo number_format($number, 2, '.', '');
echo "<br>";
echo strtotime(date('Y-m'));
echo strtotime('2016-02');
echo "<hr>";
echo date('w',1457171214);




    

