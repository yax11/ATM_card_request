<?php
session_start();
if (isset($_SESSION["customer"])) {
  header("Location: ./../index.php");
}else{
  header("Location: ./logout.php");
  }

?>