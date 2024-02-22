
// $r = $stmt->fetchAll(PDO::FETCH_CLASS);

// print_r($r);

// if($r) {
//     foreach ($r as $row) {
//         echo $row;
//     }
// } else {
//     echo "No records";
// }



//works as an extra query to SELECT COUNT(*)
// $count_query = "SELECT count(*) FROM institutions WHERE institutionName = ?";
// $result = $dbh->prepare($count_query);
// $result->execute($params);
// $number_of_rows = $result->fetchColumn();
// print_r($number_of_rows);



// $count_res = $dbh->query($count_query);
// $count = $count_res->fetchColumn();
// print "There are " . $count . " matching records.";


// if (count($stmt->fetchAll(PDO::FETCH_CLASS)) > 0) {
//     print_r($r);
// }


// print_r($r);


// if(count($r) > 0) { 

//     echo "greater than zero";

// }else{

    

//     echo "<h6>Data not found </h6>";

    
// }

// $type = gettype($r);
// echo $type;
// echo "<br>";

// print_r($r);

// echo "<br>";
// $count = count($r);
// echo $count;

// while ($count == 0) {
//     echo "Try matching every word with to the Institution Name";
// }

// if (!empty($r)) {
//     print_r($r);
// } else {
//     echo "Try matching every word with to the Institution Name";
// }

// if($count > 0) {
//     print_r($r);
// } else {
//     echo "Try matching every word with to the Institution Name";
// }




// $count_query = "SELECT count(*) FROM institutions WHERE institutionName LIKE '($input)%'";
// $count_res = $dbh->query($count_query);
// $count = $count_res->fetchColumn();
// print "There are " . $count . " matching records.";



// var_dump($stmt);

// $result = $stmt->fetchAll();

// $number_of_rows = $result->fetchColumn();



// if(count($results) > 0) {
//     echo "true";
// }

// foreach ($results as $row) {
//     echo $row;
// }



// $stmt = $dbh->prepare($query);


// $stmt = $dbh->prepare($query);

// $stmt->execute(['input'=>$input]);


// $results = $stmt->fetchAll();

// foreach($results as $result) {
//     echo $result;
// }





// echo "<a href = 'URLROOT . /urlPage/ . $x' > $x </a>";

<!-- $str = '<a href = <php echo URLROOT?>memestride</a>';
eval("?> $str <?php "); -->


echo "$x : $y";
                                   
// echo $x;
echo "<br>";
echo "<a href = '#'> . $x . </a>";
echo "<br>";

// echo "<a href = 'URLROOT'> . $x . </a>";


// echo "<a href=" URLROOT . $x> $y . "</a>";