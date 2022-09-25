<?php
  $servername = "localhost";
  $username = "root";
  $password = "tlatms2033!";
  $dbname = "bbs";

  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM bbs_table";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
      echo "<br> id: ". $row["idx"]. " - Name: ". $row["title"]. " " . $row["name"] . "<br>";
    }
  }
  else
  {
    echo "0 results";
  }

  $conn->close();
?>