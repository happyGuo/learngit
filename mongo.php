<?php
$mongo = new MongoClient('mongodb://192.168.0.230:27017');
$mon = $mongo->selectCollection('tpl_mongo', 'account_rank');
$col = $mon->find()->limit(5)->skip(0)->count(true);
var_dump($col);

