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
                                    <h2>Issue Book</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form name="form1" action="" method="post">
                                        <table>
                                            <tr>
                                                <td>
                                                    <select name="reg" class="form-control selectpicker">
                                                        <?php
                                                            $res=mysqli_query($link,"select college_id from student_registration");
                                                            while($row=mysqli_fetch_array($res)){
                                                                echo "<option>";
                                                                echo $row["college_id"];    
                                                                echo "</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="submit" name="submit1" value="search" class="form-control btn btn-default" style="margin-top: 5px; background-color:blue; color :white">
                                                </td>
                                            </tr>
                                        </table>
                                    

                                    <?php
                                        if(isset($_POST["submit1"])){
                                            $res5=mysqli_query($link,"select * from student_registration where college_id='$_POST[reg]'");
                                            while($row5=mysqli_fetch_array($res5)){
                                                $firstname=$row5['first_name'];
                                                $lastname=$row5['last_name'];
                                                $username=$row5['username'];
                                                $email=$row5['email'];
                                                $contact=$row5['contact'];
                                                $sem=$row5['sem'];
                                                $collegeid=$row5['college_id'];

                                            }
                                            ?>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder="Student Registration Number" name="college_id" value="<?php echo $collegeid; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder="Student Name" name="student_name" value="<?php echo $firstname.' '.$lastname; ?>" required></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder="Student Semester" name="sem" value="<?php echo $sem; ?>"required></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder="Student Contact" name="student_contact" value="<?php echo $contact; ?>" required></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder="Student Email" name="student_email"value="<?php echo $email; ?>" required></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select name="bookname" class="form-control selectpicker">
                                                            <?php
                                                                $res=mysqli_query($link,"select book_name from add_books");
                                                                while($row=mysqli_fetch_array($res)){
                                                                    echo "<option>";
                                                                    echo $row["book_name"];
                                                                    echo "</option>";
                                                                }
                                                            ?>
                                                            
                                                        </select>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder="Book Issue Date" name="book_issue_date"value="<?php echo date("d-m-Y"); ?>" required></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder="Student Username" name="student_username" value="<?php echo $username; ?>"required></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="submit" value="Issue Book" name="submit2" class="form-control btn btn-default" style="background-color:blue; color:white"></td>
                                                </tr>
                                            </table>    
                                            <?php
                                        }
                                    ?>
                                </form>
                                <?php
                                    if(isset($_POST['submit2'])){
                                        $res=mysqli_query($link,"select * from add_books where book_name='$_POST[bookname]' ");
                                        while($row=mysqli_fetch_array($res)){
                                            $qty=$row['available_quantity'];
                                        }
                                        if($qty==0){
                                            ?>
                                            <div class="alert alert-danger col-lg-6 col-lg-push-3">
                                                <strong>This Book Is Not Available In Stock</strong>
                                            </div>
                                            <?php
                                        }
                                        else{
                                            mysqli_query($link,"insert into issue_books values('','$_POST[college_id]','$_POST[student_name]','$_POST[sem]','$_POST[student_contact]','$_POST[student_email]','$_POST[bookname]','$_POST[book_issue_date]','','$_POST[student_username]')");
                                       mysqli_query($link,"update add_books set available_quantity=available_quantity-1 where book_name='$_POST[bookname]'");
                                       ?>
                                        <script type="text/javascript">
                                            alert('Book Issued Succesfully');
                                            windw.location.href=window.location.href;
                                        </script>

                                       <?php
                                    }
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


   