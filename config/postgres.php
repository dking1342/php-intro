<?php include '/Users/davidking/Coding/Basics/php/php1/config/db.env.php';

define('conn_string',"host=".DB_HOST." port=".DB_PORT." dbname=".DB_NAME." user=".DB_USER." password=".DB_PASS);
define('dbconn',pg_connect(conn_string));

if (!dbconn) {
    echo "An error occurred.\n";
    exit;
} else {
  return dbconn;
}
