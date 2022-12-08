<?php
session_start();
if (isset($_SESSION['customer'])) {
  header("Location: ./dashboard/");
}else{
  header("Location: ./login.php");
}