<?php
$stmt=$condb->query('SELECT name,comment FROM post');
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt=null;
