<?php
	$db = new mysqli("localhost","root","tlatms2033!","bbs"); 
    $db->set_charset("utf8");

    $bno = $_GET["idx"];

    $thumbup = "SELECT thumbup FROM bbs_table WHERE idx ='".$bno."';";
    $sql = mysqli_query($db, $thumbup);
    $board = $sql -> fetch_array();
    $board['thumbup'] = $board['thumbup'] + 1;

    $ud_thumbup = "UPDATE bbs_table SET thumbup='".$board["thumbup"]."' WHERE idx='".$bno."';";
    $sql_3 = mysqli_query($db, $ud_thumbup);
?>
<script type="text/javascript">alert("추천되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=bbs.html">