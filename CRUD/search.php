<?php
include("db.php");

// Step 3: Handle form submission
if(isset($_GET['search'])) {
    $search = $_GET['search'];

    // Check if the search query is not empty
    if (!empty($search)) {
        // Step 4: Construct the SQL query
        $sql = "SELECT id, name, city FROM student WHERE name LIKE '%$search%' OR city LIKE '%$search%'";
        $res = mysqli_query($con, $sql);

        // Step 5: Check if any results were found
        if (mysqli_num_rows($res) == 0) {
            echo "No results found.";
        } else {
            // Step 6: Display the results in a table
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>City</th><th>Action</th></tr>";
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        // If search query is empty, display all records or provide appropriate feedback
        $sql = "SELECT id, name, city FROM student";
        $res = mysqli_query($con, $sql);

        if (mysqli_num_rows($res) == 0) {
            echo "No records found.";
        } else {
            // Display all records in a table
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>City</th></tr>";
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
}
?>
<a href="index.php">Go Back</a> | <a href="add.php">Add Record</a> | <a href="search.php">Search</a> | <a href="logout.php"></a>