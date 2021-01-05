<?php
//echo phpinfo();
try {
    $user=getenv("MYSQL_USER");//'DBUser';
    $pass=getenv("MYSQL_PASSWORD");//'DBPwd';
    $db_host=getenv("DB_HOST");//'mysql.trainee-1';
    $db_name=getenv("MYSQL_DATABASE");//'trainee-db';
    //Read data from the DB
    $dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $user, $pass);
    foreach($dbh->query('SELECT * from users') as $row) {
        //Display each row
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
