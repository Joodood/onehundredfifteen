<?php

include("config.php");

if(isset($_POST['input'])) {

    $input = $_POST['input'];

    $query = "SELECT * FROM institutions WHERE institutionName LIKE ?";

    $params = array($input);

    $stmt = $dbh->prepare($query);

    $stmt->execute($params);

    if($stmt->rowCount() > 0) {?>

        <table>

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
                                    if($x == 'institutionName') {
                                        $instName = $y;
                                        
                                    ?>
                                    <h1>$instName</h1>
                                    <a href = "<?php echo URLROOT; ?>/Homepages/"><?php echo $y; ?></a>

                                    <?php
                                    }
                                }
                            }
                            echo "GREATER THAN 1";
                        }
                         
                       //where was
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