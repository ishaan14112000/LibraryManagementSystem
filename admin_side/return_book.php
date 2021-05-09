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
                                    <h2>Return Book</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form name="form1" action="" method="post">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><select name="enr" class="form-control">  
                                                    <?php
                                                        $res=mysqli_query($link,"select student_registration from issue_books where book_return_date=' '");
                                                        while($row=mysqli_fetch_array($res)){
                                                            echo "<option>";
                                                            echo $row['student_registration'];
                                                            echo "</option>";
                                                        }
                                                    ?>
                                                    </select></td>
                                                <td>    
                                                    <input type="submit" name="submit1" value="search" class="form-control" style="background-color: blue ;color:white;">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>   

                                    <?php
                                        if(isset($_POST['submit1'])){
                                            $res1=mysqli_query($link,"select * from issue_books where student_registration='$_POST[enr]'");
                                            echo "<table class='table table-bordered'>";
                                            echo "<tr>";
                                            echo "<th>"; echo "Student Registration"; echo "</th>";
                                            echo "<th>"; echo "Student Name"; echo "</th>";
                                            echo "<th>"; echo "Student Semester"; echo "</th>";
                                            echo "<th>"; echo "Student Contact"; echo "</th>";
                                            echo "<th>"; echo "Student Email"; echo "</th>";
                                            echo "<th>"; echo "Book Name"; echo "</th>";
                                            echo "<th>"; echo "Book Issue Date"; echo "</th>";
                                            echo "<th>"; echo "Return Book"; echo "</th>";
                                            echo "</tr>";
                                            while($row1=mysqli_fetch_array($res1)){
                                                echo "<tr>";
                                                echo "<td>"; echo $row1['student_registration']; echo "</td>";
                                                echo "<td>"; echo $row1['student_name']; echo "</td>";
                                                echo "<td>"; echo $row1['student_sem']; echo "</td>";
                                                echo "<td>"; echo $row1['student_contact']; echo "</td>";
                                                echo "<td>"; echo $row1['student_email']; echo "</td>";
                                                echo "<td>"; echo $row1['book_name']; echo "</td>";
                                                echo "<td>"; echo $row1['book_issue_date']; echo "</td>";
                                                echo "<td>"; ?><a href="return.php?id=<?php echo $row1['id'];?>">Return Book</a><?php echo "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";    
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


   