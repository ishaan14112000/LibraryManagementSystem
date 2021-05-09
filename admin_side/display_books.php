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
                                    <h2>Books Information and Book Search </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <form name="form1" action="" method="post">
                                <input type="text" name="t1" class="form-control" placeholder="Enter Book Name">
                                <input type="submit" name="submit1" value="Search Book" class="btn btn-default">
                                </form>

                                    <?php
                                    if(isset($_POST["submit1"])){
                                        echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>"; echo "Book Name ";echo "</th>";
                                    echo "<th>"; echo "Book Image ";echo "</th>";
                                    echo "<th>"; echo "Author Name ";echo "</th>";
                                    echo "<th>"; echo "Publication Name ";echo "</th>";
                                    echo "<th>"; echo "Purchase Date";echo "</th>";
                                    echo "<th>"; echo "Price ";echo "</th>";
                                    echo "<th>"; echo "Quantity ";echo "</th>";
                                    echo "<th>"; echo "Available Quantity ";echo "</th>";
                                    echo "<th>"; echo "Delete Book ";echo "</th>";
                                    echo "</tr>";
                                    $res=mysqli_query($link,"select* from add_books where book_name like('$_POST[t1]%')");
                                    while($row=mysqli_fetch_array($res)){
                                        echo "<tr>";
                                        echo "<table class='table table-bordered'>";
                                        echo "<td>"; echo $row["book_name"];echo "</td>";
                                        echo "<td>";?> <img src="<?php echo $row["book_image"]; ?>" height="100" width="100"><?php echo $row["book_image"];echo "</td>";
                                        echo "<td>"; echo $row["author_name"];echo "</td>";
                                        echo "<td>"; echo $row["publication_name"];echo "</td>";
                                        echo "<td>"; echo $row["purchase_date"];echo "</td>";
                                        echo "<td>"; echo $row["price"];echo "</td>";
                                        echo "<td>"; echo $row["quantity"];echo "</td>";
                                        echo "<td>"; echo $row["available_quantity"];echo "</td>";
                                        echo "<td>";?> <a href="delete_book.php?id=<?php echo $row['id']?>">Delete Book</a> <?php echo "</td>";    
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    }
                                    else{
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>"; echo "Book Name ";echo "</th>";
                                    echo "<th>"; echo "Book Image ";echo "</th>";
                                    echo "<th>"; echo "Author Name ";echo "</th>";
                                    echo "<th>"; echo "Publication Name ";echo "</th>";
                                    echo "<th>"; echo "Purchase Date";echo "</th>";
                                    echo "<th>"; echo "Price ";echo "</th>";
                                    echo "<th>"; echo "Quantity ";echo "</th>";
                                    echo "<th>"; echo "Available Quantity ";echo "</th>";
                                    echo "<th>"; echo "Delete Book ";echo "</th>";
                                    echo "</tr>";
                                    $res=mysqli_query($link,"select* from add_books");
                                    while($row=mysqli_fetch_array($res)){
                                        echo "<tr>";
                                        echo "<table class='table table-bordered'>";
                                        echo "<td>"; echo $row["book_name"];echo "</td>";
                                        echo "<td>";?> <img src="<?php echo $row["booki_image"]; ?>" height="100" width="100"><?php echo $row["book_image"];echo "</td>";
                                        echo "<td>"; echo $row["author_name"];echo "</td>";
                                        echo "<td>"; echo $row["publication_name"];echo "</td>";
                                        echo "<td>"; echo $row["purchase_date"];echo "</td>";
                                        echo "<td>"; echo $row["price"];echo "</td>";
                                        echo "<td>"; echo $row["quantity"];echo "</td>";
                                        echo "<td>"; echo $row["available_quantity"];echo "</td>"; 
                                        echo "<td>";?> <a href="delete_book.php?id=<?php echo $row['id']?>">Delete Book</a> <?php echo "</td>";   
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


   