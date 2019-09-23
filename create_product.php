<?php
//set page headers
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';
// get database connection
$database = new Database();
$db = $database->getConnection();
// pass connection to object
$product = new Product($db);
$category = new Category($db);
$page_title = "Create Product";
include_once "layout_header.php";
// content will be here
echo "<div class='right-button-margin'>";
echo "<a href='index.php' class='btn btn-dedault pull-right'>Read Products</a>";
echo "</div>";
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'></textarea></td>
        </tr>
 
        <tr>
            <td>Category</td>
            <td>
            <!-- categories from database will be here -->
            </td>
        </tr>
 
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
 
    </table>
</form>
<?php
// footer
include_once "layout_footer.php";
?>