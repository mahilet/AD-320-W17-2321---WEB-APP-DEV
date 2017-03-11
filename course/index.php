<html>
<body>

<div style="width: 50%;margin: 0 auto;">

    This is the student web site info of
    <B>
        <?php
        //echo basename(__DIR__) . "<br/><br/>";
        $path = split("/", dirname(__FILE__));
         echo $path[5]. "<br/><br/>";
         echo "Go to your site's <a href='http://$path[5].icoolshow.net'>front page </a><br/> ";
         echo "Go to ICoolShow.Net's <a href='http://icoolshow.net'>front page </a><br/> ";

        ?>
    </B>
    <br/>
    FTP username: <?php echo strtolower
    ($path[5]);?>@icoolshow.net <br/>
    FTP password: Prefix '$' and the upper case of your firstname's first letter and the lowcase of your 
last name's first letter  to Your student ID including dashes (xxx-xx-xxxx). For example, if Paul Wu's 
student id was "345-67-8899", the password would be "$Pw345-67-8899" <br/>
    FTP server: ftp.icoolshow.net <br/>
    FTP & explicit FTPS port: 21 <br/>
    If you cannot connect, try to use <i> Passive mode</i> <br/>
    MySQL host: localhost   <br/>
    MySQL database name: icoolsho_<?php echo $path[5];?> <br/>
    MySQL uid: icoolsho_<?php echo substr($path[5],0,min(strlen($path[5]),7));?> <br/>
    MySQL password: '$!xxx-xx-xxxx', where 'xxx-xx-xxxx' is your student id <br/>
    


</div>
</body>
</html>
