<?php
if(isset($_POST['disp']))
{
    $s=$_POST['s'];
    $ch=$_POST['ch'];
    switch($ch)
    {
        case 'STRING LENGTH':
            $res= strlen($s);
            break;
        case 'WORD COUNT':
            $res= str_word_count($s);
            break;
        case 'STRING REVERSE':
            $res=strrev($s);
            break;
        case 'POSITION OF A CHARACTER':
            $res=strpos($s,"a");
            break;
        case 'STRING REPLACE':
            $res=str_replace($s,"hello","world");
            break;
        case 'STRING UPPERCASE':
            $res=strtoupper($s);
            break;
            
        case 'PASSWORD GENERATOR':
            
            $data="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
            $res= substr(str_shuffle($data),0,7);
            break; }
}
?>
<html>
<body bgcolor="cyan">
<form action="" method="post">
<table align="center" border="3" width="20%"><br><br>
<tr bgcolor="forestgreen"><td align="center" colspan="2">
<font color="white" face="arial black" size="5">STRING HANDLING</font></td></tr>
<tr><td><input type="button" value="Enter String"></td>
<td><input type="text" name="s"></td></tr>
<tr><td><input type="button" value="Select Your Choice"></td>
<td><center><select name="ch">
<option>STRING LENGTH</option>
<option>WORD COUNT</option>
<option>STRING REVERSE</option>
<option>POSITION OF A CHARACTER</option>
<option>STRING REPLACE</option>
<option>STRING UPPRCASE</option>
<option>PASSWORD GENERATOR</option>
</center></select></td></tr>
<tr><td><input type="submit" value=" RESULT " name="disp"></td>
<td><input type="text" value="<?php echo @$res; ?>" readonly="true"/>
</td></tr></table>
</body></html>

