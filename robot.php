<?php  
error_reporting(0);  
$INFO=$_GET['info']; 
if(!$INFO)$INFO="Hello!";  
$apiKey="97a132cd38094db0ab2dd2b1fea5783e"; //你的appkey 
$uid="8d85e73962621c91"; 
$apiURL="http://www.tuling123.com/openapi/api?key=$apiKey&info=$INFO&userid=$uid";//appkey地址  
$cmd=file_get_contents($apiURL);  
//echo $cmd."<br>";//输出json格式的信息（本实例中不用）  
$tmp=json_decode($cmd,1);
if($tmp!="4")//将json解码 如果不出现错误（返回代码以4开头），则显示文本信息  
  {  
    $i=$tmp[code];
    if($i=="100000"){
      print_r($tmp[text]);
    }
    if($i=="200000"){
      print_r($tmp[text]."<a href='$tmp[url]'>点击查看</a>");
    }
    if($i=="302000"){
      print_r($tmp[text]);
    }
    if($i=="308000"){
      print_r($tmp[text]);
    }
  }
else  
  {  
    echo "Error!error code is:$tmp[code]!";  
  }   
?>  