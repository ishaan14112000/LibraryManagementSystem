<?php
session_start();
if(!isset($_SESSION['admin_side'])){
    ?>
    <script type="text/javascript">
        window.location="admin_login.php";
    </script>    
    <?php
}
include 'header.php';
include 'connection.php';
?>

            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="row" style="min-height:500px">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>All Student Information</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <?php
                                    $res=mysqli_query($link,"select * from student_registration");
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>"; echo "firstname"; echo "</th>";
                                    echo "<th>"; echo "lastname"; echo "</th>";
                                    echo "<th>"; echo "Username"; echo "</th>";
                                    echo "<th>"; echo "email"; echo "</th>";
                                    echo "<th>"; echo "Contact"; echo "</th>";
                                    echo "<th>"; echo "Semester"; echo "</th>";
                                    echo "<th>"; echo "College Registration Number"; echo "</th>";
                                    echo "<th>"; echo "Status"; echo "</th>";
                                    echo "<th>"; echo "Approved"; echo "</th>";
                                    echo "<th>"; echo "Not Approved"; echo "</th>";
                                    echo "</tr>";
                                    while($row=mysqli_fetch_array($res)){
                                        echo "<tr>";
                                        echo "<td>"; echo $row['first_name']; echo "</td>";
                                        echo "<td>"; echo $row['last_name']; echo "</td>";
                                        echo "<td>"; echo $row['username']; echo "</td>";
                                        echo "<td>"; echo $row['email']; echo "</td>";
                                        echo "<td>"; echo $row['contact']; echo "</td>";
                                        echo "<td>"; echo $row['sem']; echo "</td>";
                                        echo "<td>"; echo $row['college_id']; echo "</td>";
                                        echo "<td>"; echo $row['status']; echo "</td>";
                                        echo "<td>";?> <a href="approve.php?id=<?php echo $row['id'];?>">Approve</a><?php echo "</td>";
                                        echo "<td>";?> <a href="notapprove.php?id=<?php echo $row['id'];?>">Not Approve</a><?php echo "</td>";
                                    echo "</tr>";    
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
<?php
include 'footer.php';
?>    


   