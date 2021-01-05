<?php
//echo phpinfo();
try {
    $user='DBUser';
    $pass='DBPwd';
    $db_host='mysql.trainee-1';
    $db_name='trainee-db';
    $dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $user, $pass);
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
