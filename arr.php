<?php 
$input = array("a", "b", "c", "d", "e");
$output = array_slice($input, 5,2,true); 
print_r($output);


foreach($input as $i){
        var_dump($i);
}

$statistics = Array("date" => Array
                         (
                            16,
                            17,
                            19,
                        ),

                    "buy_amount" => Array
                        (
                            251.23,
                            2233.32,
                            10102.23,
                        ),

                    "order_num" => Array
                        (
                            5,
                            1,
                            3,
                        ),
                        );

 $firstday = strtotime(date('Y-m-01')) + 2*3600;
 // var_dump($firstday);

 $a = array(array());
 if (!empty($a[0])) {
    echo "string";
     # code...
 }

