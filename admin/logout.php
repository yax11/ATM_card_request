<?php
session_start();
if (isset($_SESSION['admin'])){
    session_decode();
}