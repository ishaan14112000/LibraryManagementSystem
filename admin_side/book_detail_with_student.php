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
                                    <h2>Books With Students</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <?php
                                        $i=0;
                                        $res=mysqli_query($link,"select * from add_books where available_quantity>=0");
                                        echo "<table class=table table-bordered>";
                                        echo "<tr>";
                                        while($row=mysqli_fetch_array($res)){
                                            $i++;
                                            echo "<td>";
                                            ?> <img src="../admin_side/?php echo $row['book_image']; ?>" height="100" width="100"><?php
                                            echo "<br>";
                                            echo "<b>".$row['book_name']."</b>";
                                            echo "<br>";
                                            echo "<b>"."Total Books Available:".$row['quantity']."</b>";
                                            echo "<br>";
                                            echo "<b> Available:".$row['available_quantity']."</b>";
                                            echo "<br>";
                                            ?><a href="all_students_of_this_book.php?book_name=<?php echo $row['book_name'];?>" style="color: red;">Student Record For This Book <?php
                                            echo "</td>";
                                            if($i==2){
                                                echo "</tr>";
                                                echo "<tr>";
                                                $i=0;
                                            }
                                        }
                                        echo "</tr>";
                                        echo "</table>"; 
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


   