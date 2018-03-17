<?php
$file = 'log/3-14-2018_10-54_System.log';
$result = array();
clearstatcache(true, $file);

$data['time']    = filemtime($file);
$data['content'] = $_POST['time'] < $data['time']
    ? file_get_contents($file)
    : false;

echo json_encode($data);
?>