<?
header("Content-Type: text/html; charset=UTF-8");

$db_conn=new mysqli("localhost","root","111111","login_example");

$id=$_GET["id"];

if(!empty($id)){
    $query="select *from member where id='{$id}'";
    $tmp=$db_conn->query($query);
    $flag=$tmp->num_rows;

    if($flag == 0){
        $msg="<font color='blue'>사용 가능한 아이디</font>";
    }else{
        $msg="<font color='red'>사용 불가능한 아이디</font>";
    }
}

?>



<form action="id_check.php" method="GET">
<input type="text" name="id"><input type="submit" value="조회">
</form>