<?php
$conn = mysqli_connect("localhost", "root", "", "Medhya");

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}




function select($sql)
{

  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return $res;
  else
    return False;
}


function select1($sql)
{

  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
  {
    $r=mysqli_fetch_assoc($res);
    return $r;
  }
  else
    return False;
}

function insert()
{
  global $conn;
}

function getrows($sql)
{
  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return mysqli_num_rows($res);
  else
    return False;
}
?>