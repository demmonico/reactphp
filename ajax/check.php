<?php
/**
 * Created by PhpStorm.
 * User: dep
 * Date: 21.06.17
 * Time: 20:54
 */

$item = ['userId' => 1, 'created' => '12/12/12', 'msg' => 'qweqwjeq ioeiqkjkfzkjhfsjkzjk'];
$msgId = 12;
$arr = [];
for ($i=1; $i<5; $i++) {
    $arr[$msgId++] = $item;
}
echo json_encode($arr);
