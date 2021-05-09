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
mysqli_query($link,"update messages set read1='y' where destination_username='$_SESSION[student_side]'");
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
                                    <h2>Message From Librarian</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Message From (Librarian Username)</th>
                                            <th>Title</th>
                                            <th>Message</th>
                                        </tr>

                                        <?php
                                            $res=mysqli_query($link,"select * from messages where destination_username='$_SESSION[student_side]' order by id desc");
                                            while($row=mysqli_fetch_array($res)){
                                                echo "<tr>";
                                                echo "<td>"; echo $row['source_username']; echo "</td>";
                                                echo "<td>"; echo $row['title']; echo "</td>";
                                                echo "<td>"; echo $row['msg']; echo "</td>";
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


   