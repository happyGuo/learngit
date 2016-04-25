<?php
$ssss = '2016-01-02#mkaslflkajsfl';
$xxx = explode(',', $ssss);
var_dump($xxx);die();
$arr  = '1,22,34,11,14,17,16,19,60,44';
$a = explode(',', $arr);

 $a = array_map('intval',$a);
var_dump($a);die();
$len = count($arr);
for ($i=1; $i <$len ; $i++) { 
    for ($j=0; $j <$len-$i ; $j++) { 
        if ($arr[$j] > $arr[$j+1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}

var_export($arr);die();

$ss = '2016-12-15#gjhjjkkjllklklklklklk==';
$AA = mb_substr($ss, mb_strpos($ss, '#',0,'UTF-8'),NULL ,'UTF-8');

var_dump($AA);die();
$str = '综合 食堂 火锅 自助餐 川菜 烧烤/烤肉 聚餐宴请 北京菜 西餐 日本料理 韩国料理 烤鸭 粤菜 海鲜 家-菜 小吃快餐 香锅 江浙菜 面包甜点 烤鱼 特色菜 简餐快餐 蛋糕 日式自助 东南亚菜 湘菜 泰国菜 涮羊肉 咖啡茶馆 新疆菜 清真菜 鲁菜 东北菜 湖北菜 云贵菜 西北菜 台湾菜 山西菜 江西菜';
$arr = array();$newarr = array();
$arr = preg_split('/\s{1}/', $str);
foreach ($arr as $key => $value) {
    $newarr[$key+1] = $value;
}


var_export($newarr);
?>