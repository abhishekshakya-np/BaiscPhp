<?php
include("db.php");

// Check if user is logged in
if(!isset($_SESSION["IS_LOGIN"])){
    header("location:Login.php");
    die();
}

// Define variables for pagination
$results_per_page = 10; // Number of records to display per page
$current_page = 1; // Default current page number
if(isset($_GET['page']) && is_numeric($_GET['page'])) {
    $current_page = intval($_GET['page']);
}
$start_index = ($current_page - 1) * $results_per_page; // Calculate the starting index for records

// Fetch records from the database with pagination
$res = mysqli_query($con, "SELECT * FROM student LIMIT $start_index, $results_per_page");

?>

<a href="add.php">Add Record</a>
<br>
<a href="logout.php">Logout</a>
<br>

<form method="GET" action="search.php">
    <input type="text" name="search" placeholder="Enter your search query">
    <button type="submit">Search</button>
</form>

<table border="1">
    <tr>
        <td>S.No</td>
        <td>Name</td>
        <td>City</td>
        <td></td>
    </tr>
    <?php
    $i = ($current_page - 1) * $results_per_page + 1;
    while ($row = mysqli_fetch_array($res)) { ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php
        $i++;
    } ?>
</table>

<?php
// Pagination links
$sql_total = "SELECT COUNT(*) AS total FROM student";
$result_total = mysqli_query($con, $sql_total);
$row_total = mysqli_fetch_assoc($result_total);
$total_pages = ceil($row_total['total'] / $results_per_page);

echo "<br>";
echo "Page: ";
for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $current_page) {
        echo "<b>$i</b> ";
    } else {
        echo "<a href='?page=$i'>$i</a> ";
    }
}
?>
