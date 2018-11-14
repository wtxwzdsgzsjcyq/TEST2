<?php
$res=mysqli_connect('localhost','root','972723fti1g1','yingling');
if(mysqli_connect_errno()){
  echo mysqli_connect_error();
}
mysqli_set_charset($res,'utf8');

$SQL='insert into game(`id`,`title`,`content`,`press`) values 
(4,"【BUG修正】更新游戏应用版本公告(5/18 12:00北京时间登载)","images/top_banner-6.png","消除目前部分BUG的游戏应用版本更新已经预备完毕。 至5月18日(五) 16:00(北京时间)若还在使用旧版本游戏的话，启动应用时将弹出窗口通知尽快更新。 预测…")';
$m=mysqli_query($res,$SQL);
echo "<script>alert('OK！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";   
?>