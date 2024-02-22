<?php
define('URLROOT', 'http://localhost:8888/onehundredfifteen');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class = "homepagebackgroundPic">
            <div class="head-title">
                    <div class="left">
                        <h1>Rate My Receptionist</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Enter your school or business to get started</a>
                            </li>
                        </ul>
                    
                            <form class = "picForm" style = "display: block" action="#">
                                <div class="form-input">

                                    <input type="text" id = "live_search" placeholder="Search...">

                                    <!-- <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button> -->
                                </div>

                                <div id = "searchresult">

                                </div>

                            </form> 
                           
                            <li>
                                <a href="#" class="btn-download" style = "color: white;">
                                    <i class='bx bxs-cloud-download' ></i>
                                    <span class="text">I'd Like to look up a receptionist by name</span>
                                </a>
                            </li>
                    </div>
            </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type = "text/javascript">
    $(document).ready(function() {

        $("#live_search").keyup(function() {
    //when a user types any value or releases any key than that value will be stored in a variable called input
            var input = $(this).val();
            // alert(input);

//if input is not empty, then using ajax method, page redirect to livesearch.php with the data input 
            if(input != "") {
                $.ajax({
                    
                    url: "livesearchthree.php",
                    method: "POST",
                    data: {input:input},

//after success function, data will be shown in the div section with an id searchresult
                    success:function(data) {
                        $("#searchresult").html(data);
                    }
                });
                //if search reslt is empty, than the div will be hidden
            } else {
                $("#searchresult").css("display", "none");
            }
        });
    });
</script>

    
</body>
</html>