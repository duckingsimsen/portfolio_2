<?php
    $servername = "localhost";
    $username = "root";
    $password = "tlatms2033!";
    $dbname = "login";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn -> connect_error)
    {
        die("Connection failed: " . $conn -> connect_error);
    }

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    
    $sql_1 = "SELECT l_id FROM login_table WHERE l_id = '" .$id. "';";
    $sql_2 = "SELECT l_pw FROM login_table WHERE l_pw = '" .$pw. "';";
    $sql_3 = "SELECT l_id, l_pw FROM login_table WHERE l_id = '" .$id. "' AND l_pw = '" .$pw. "';";

    $result_1 = mysqli_query($conn, $sql_1);
    
    
    $check = 0;

    if(mysqli_affected_rows($conn) > 0)
    {
        $check = 1;
        $result_2 = mysqli_query($conn, $sql_2);
        if(mysqli_affected_rows($conn) > 0 && $check == 1)
        {
            $check = 2;
            $result_3 = mysqli_query($conn, $sql_3);
            if(mysqli_affected_rows($conn) > 0 && $check == 2)
            {
                echo '<script>alert("로그인성공")</script>';
            }
        }
        else
        {
            echo '<script>alert("비밀버호가 틀렸습니다")</script>';
        }
    }
    else
    {
        echo '<script>alert("학번이 틀렸습니다")</script>';
    }
    $conn->close();
?>