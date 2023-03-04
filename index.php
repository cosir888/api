<?php
date_default_timezone_set('Asia/Shanghai'); // 设置时区为北京时间

$timestamp = time(); // 获取当前时间戳
$date_time = date('Y-m-d H:i:s', $timestamp); // 格式化时间戳为日期时间字符串

$response = array(
    'timestamp' => $timestamp,
    'date_time' => $date_time,
    'timezone' => 'Asia/Shanghai'
);

header('Content-Type: application/json'); // 设置响应头为JSON格式
echo json_encode($response); // 输出JSON格式的响应数据
?>
