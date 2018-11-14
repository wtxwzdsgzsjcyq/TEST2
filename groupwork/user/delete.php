<?php
$res=mysqli_connect('localhost','root','972723fti1g1','yingling');
if(mysqli_connect_errno()){
  echo mysqli_connect_error();
}
mysqli_set_charset($res,'utf8');

var_dump($_GET['id']);
$id=$_GET['id'];
var_dump($id);
$SQL="delete from yingling where id='$id' ";
$m=mysqli_query($res,$SQL);
echo "<script>alert('删除成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";   
?>