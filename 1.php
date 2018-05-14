<html>
<head>
<title></title>
</head>
<body>
<h2> user details</h2>
<?php
$db=mysqli_connect('','','','') or die ('error connecting to mysql server.');
$q="select * from guestreg";
$res=mysqli_query($db, $q) or die ('error in data base');
row=mysqli_fetcharray($res)

