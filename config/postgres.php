<?php include 'db.env.php';

define('conn_string',"host=".DB_HOST." port=".DB_PORT." dbname=".DB_NAME." user=".DB_USER." password=".DB_PASS);
define('dbconn',pg_connect(conn_string));

echo dbconn;
