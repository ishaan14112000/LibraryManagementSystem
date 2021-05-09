<?php
session_start();
if(!$_SESSION['student_side']){
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
include 'connection.php';
include 'header.php';

?>

            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3></h3>
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
                                    <h2>Issued Books</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <table class="table table-bordered">
                                    <th>
                                        Student Enrollment Number
                                    </th>
                                    <th>
                                        Book Name
                                    </th>
                                    <th>
                                        Issue Date
                                    </th>
                                    <?php
                                        $res=mysqli_query($link,"select * from issue_books where student_username='$_SESSION[student_side]'");
                                        while($row=mysqli_fetch_array($res)){
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo $row['student_registration'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['book_name'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['book_issue_date'];
                                                    echo "</td>";
                                                echo "</tr>";
                                        }
                                   ?>
                                </table>
                                    
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


   