<!DOCTYPE html>
<?php
#随机图片名称 取得值1-233之间的随机数
$img =  rand(1,21).'.jpg';
#拼凑,完整的图片地址
$URI = 'https://ftyyy.tk/wallpapers/'.$img;
# 301转向
header("HTTP/1.1 301 Moved Permanently");
header("Location: $URI");
exit();
?>