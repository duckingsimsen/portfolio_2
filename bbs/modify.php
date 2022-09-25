<?php
    $db = new mysqli("localhost","root","tlatms2033!","bbs"); 
    $db->set_charset("utf8");

    $bno = $_GET["idx"];
    $name = $_POST["name"];
    $pw = password_hash($_POST["pw"], PASSWORD_DEFAULT);
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql_1 = "UPDATE  bbs_table SET name = '".$name."',pw='".$pw."',title='".$title."',content='".$content."' WHERE idx='".$bno."'";
    $sql_2 = mysqli_query($db, $sql_1);
?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=/read.html?idx=<?php echo $bno; ?>">