<?php
$res=mysqli_connect('localhost','root','972723fti1g1','yingling');
if(mysqli_connect_errno()){
  echo mysqli_connect_error();
}
mysqli_set_charset($res,'utf8');

$SQL='insert into yingling(`id`,`picture`,`yname`,`zhi`,`value1`,`value2`,`value3`,`value4`,`bao`) values 
(6,"images/195.jpg","阿比盖尔.威廉姆斯","Foreigner",2019,1870,13770,12100,"images/Buster.png")';
$m=mysqli_query($res,$SQL);
echo "<script>alert('OK！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";   
?>