<?php
// echo "hello";

// define('URLROOT', 'http://localhost:8888/onehundredfifteen')

include("config.php");

if(isset($_POST['input'])) {

    $input = $_POST['input'];
    // echo $input;

    
    // $query = "SELECT * FROM institutions WHERE institutionName LIKE input = :input";

    // $query = "SELECT * FROM institutions WHERE LIKE '($input)%'";

    $query = "SELECT * FROM institutions WHERE institutionName LIKE ?";
    

    // $params = array(%input%);
    $params = array($input);

    $stmt = $dbh->prepare($query);

    $stmt->execute($params);

    // $count = $stmt->rowCount();

    // print ($count);

    if($stmt->rowCount() > 0) {?>

        <table>
            <!-- <thead>
                <tr>
                    <th>Id</th>
                    <th>InstitutionName</th>
                    <th>institutionReceptionists</th>
                    <th>created_at</th>
                    <th>link_to_institution</th>
                    <th>state</th>
                </tr>
            </thead> -->

            <tbody>
                <?php 
                    while($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){
                        print_r($row);
                        echo "<br>";
                        // print_r($row[0]);
                        echo count($row);
                        echo "<br>";
                        // var_dump(get_object_vars($row));
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        // print_r(get_object_vars($row));
                        //if arraycount > 1 
                        if(count($row) > 1) {
                            // print_r($row);
                            foreach ($row as $key => $value) {
                                // echo " $key : $value";
                                echo "<br>";
                                foreach($value as $x => $y) {
                                   echo "$x : $y";
                                   
                                    // echo $x;
                                    echo "<br>";
                                    echo "<a href = '#'> . $x . </a>";
                                    echo "<br>";

                                    echo "<a href=" URLROOT . $x> $y "</a>";
                                }
                            }
                            echo "GREATER THAN 1";
                        }
                        // $id = $y;
                        $id = $row['id'];
                        
                        $institutionName = $row['institutionName'];
                        $institutionReceptionists = $row['institutionReceptionists'];

                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $institutionName; ?></td>
                            <td><?php echo $institutionReceptionists; ?></td>
                        </tr>
                            

                        <?php

                    }
                ?>
        </tbody>
    </table>

        <?php

    } else {

        echo "<h6>Data not found </h6>";
    }
    
}

?>