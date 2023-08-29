<head>
     <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="css/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link href="css/style.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="css/qr.js"></script>
</head>
<div class="container">
    <div class="main_query">
        <div class="row">
            <div class="col-md-2 bg-primary text-white pt-3 ps-5">
                <h2><i class="fa fa-user-md pe-3"></i></i>Doctor</h2><hr>
                <p><i class="fa fa-home pe-3"></i>Deshboard</p><br>
                <p><i class="fa fa-bar-chart pe-3"></i>Activity</p><br>
                <p><i class="fa fa-refresh pe-3"></i>UpdateLog</p><br>
                <p><i class="fa fa-file-text-o pe-3"></i>Information</p><br>
                <p><i class="fa fa-file-text pe-3"></i>Reports</p><br>
                <p><i class="fa fa-calculator pe-3"></i>Calculator</p><br>
                <p><i class="fa fa-power-off pe-3"></i>Logout</p>
                
            </div>
            <div class="col-md-10 ps-5 pt-3">
                <div class="top">
                    <b><p>In Pstient Counselling</p></b>
                </div>
                <div class="second">
                    <p class="p-1 ps-5"><i class="fa fa-search"></i><span class="text-muted">Search</span></p>
                </div>
                
                <div class="apoint">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-user pe-3"></i>Name</th>
                                <th><i class="fa fa-envelope-o  pe-3"></i>Email</th>
                                <th><i class="fa fa-phone  pe-3"></i>Contact</th>
                                <th><i class="fa fa-calendar-minus-o  pe-3"></i>From</th>
                                <th><i class="fa fa-calendar-minus-o  pe-3"></i>To</th>
                                <th><i class="fa fa-sun-o  pe-3"></i>Day</th>
                                <th><i class="fa fa-clock-o  pe-3"></i>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $conn = mysqli_connect('localhost','root','','chhaya');
                                // Check connection
                                if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT * FROM booking";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td style=display:none>". $row["id"]. "</td>
                                        <td>". $row["u_name"]. "</td>
                                        <td>". $row["email"] . "</td>
                                        <td>". $row["contact"]. "</td>
                                        <td>". $row["Frome_date"]. "</td>
                                        <td>". $row["to_date"]. "</td>
                                        <td>". $row["total_day"]. "</td>
                                        <td>". $row["T_time"]. "</td>
                                        <td><a href=qrdel.php?id=$row[id]><img src=img/trash.jpg> Delete</a></td>

                                    </tr>";
                                }
                                echo "</table>";
                                } else { echo "Empty"; }
                                $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>