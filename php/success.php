<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        //因为表单使用post方式提交的，所以我们需要用POST方式去接收，PHP接收POST发送过来的数据使用$_POST[""];语句，get用法一样，把POST改成GET
        $name = $_POST["username"];
        $pwd = $_POST["pwd"];
        
        //fopen命令打开一个文件，fopen接收两个参数，第一个是要打开文件的路径；第二个是打开的方式，这里使用"a"写入方式打开，将文件指针指向文件末尾，如果文件不存在，则会尝试创建这个文件
        $fp = fopen("./data.txt", "a");
        
        //PHP中的变量声明并不是用var，而是$+变量名。接下来把用户名和密码拼接成字符串，PHP中的字符串拼接和JavaScript也有差异，PHP使用"."来做拼接符
        $str = "user:".$name."&password:".$pwd."\r\n";
        
        //用fwrite命令来写入文件，它接收两个参数，第一个是要打开的文件，也就是我们前面定义的$fp；第二个是要写入的内容，把之前拼接好的字符串放入
        fwrite($fp,$str);
        
        //需要关闭文件，使用fclose命令，传入需要关闭的文件。如果不关闭文件的话，这个文件就会一直被占用，别人就不能读写这个文件了，所以这一步千万不能忘记
        fclose($fp);
        echo "<h1>欢迎回来,".$name."！</h1>";
    ?>
</body>
</html>