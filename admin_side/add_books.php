<?php
session_start();
if(!isset($_SESSION['admin_side'])){
    ?>
    <script type="text/javascript">
        window.location="admin_login.php";
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
                                    <h2>Add Books</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Book Name" name="book_name" required=""></td>
                                            </tr>
                                            <tr>
                                                <td> Add Book Image
                                                <input type="file" name="f1" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Author Name" name="author_name" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Publication Name" name="publication_name" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Purchase Date" name="purchase_date" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Book Price" name="book_price" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Quantity" name="quantity" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Available Quantity" name="available_quantity" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" name="submit1" class="btn btn-default submit" value="Add Book Details" style="background-color:blue; color :white"></td>
                                            </tr>

                                        </table>
                                    </form>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if(isset($_POST['submit1'])){
    $tm=md5(time());
    $fnm=$_FILES['f1']['name'];
    $dst="../admin_side/books_image/".$tm.$fnm;
    $dst1="..admin_side/books_image/".$tm.$fnm;
    move_uploaded_file($_FILES['f1']['tmp_name'],$dst);
    mysqli_query($link,"insert into add_books values('','$_POST[book_name]','$dst1','$_POST[author_name]','$_POST[publication_name]','$_POST[purchase_date]','$_POST[book_price]','$_POST[quantity]','$_POST[available_quantity]','$_SESSION[admin_side]')")

?>
<script type="text/javascript">
    alert("Book Added Successfully");
</script>
<?php
}
?>    
<?php
include 'footer.php';
?>    


   