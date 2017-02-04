<?php
session_start();
$link = mysql_connect("localhost","root","asd865100")or die ("conn fail");
mysql_select_db('Maplestore',$link) or die ("DB fail");
mysql_query("SET NAMES 'utf-8'");
mysql_query("SET CHARACTER_SET_CLIENT=utf-8");
mysql_query("SET CHARACTER_SET_RESULTS=utf8");
?>