
<?php

$DB_NAME = "ratemyreceptionist";
$DB_PASS = "root";
$DB_HOST = "127.0.0.1";
$DB_USER = "root";
$DB_PORT = "8889";

$dsn = "mysql:host=" . $DB_HOST . ";port=" . $DB_PORT . ";dbname=" . $DB_NAME;
$options = array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

try {
    $dbh = new PDO($dsn, $DB_USER, $DB_PASS, $options);
} catch(PDOException $e) {
    $error = $e->getMessage();
    echo $error;
}


// $dbh = new PDO($dsn, $DB_USER, $DB_PASS);


// var_dump($dbh);
// // use the connection here
// $institutionReceptionists = 'Carol Grabner';

// $sql = 'SELECT * FROM institutions WHERE institutionReceptionists = :institutionReceptionists';

// $stmt = $dbh->prepare($sql);

// $stmt->execute(['institutionReceptionists' => $institutionReceptionists]);

// $institutions = $stmt->fetchAll();

// foreach($institutions as $institutionName) {
//     echo $institutionName['institutionName'] . '<br>';
// }






// $stmt = $pdo->query("SELECT * FROM institutions")->fetchAll();

// foreach ($stmt as $row) {
//     echo $row['name']."<br />\n";
// }

// $stmt = $dbh->query("SELECT * FROM institutions");

// while ($row = $stmt->fetch()) {
//     echo $row['name'] . "<br />\n";
// }



// $sql = "SELECT * FROM institutions WHERE "

// $stmt = $dbh




?>