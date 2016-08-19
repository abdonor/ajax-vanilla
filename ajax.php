<?php
/**
 * Created by PhpStorm.
 * User: abdonor
 * Date: 19/08/2016
 * Time: 13:13
 */
$data = $_POST['data'];
$return = "some error with dataId";
if ($data > 0) {
    $return = "The $data may be an user ID";
}

echo $return;