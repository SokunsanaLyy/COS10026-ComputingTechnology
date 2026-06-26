<?php
global $host, $user, $pwd, $sql_db;
$descriptionContent = "Raven manage page for job advertising";
$keyword= "Raven, manage page";
$author="105345670";
$bodyClassName = "";
include 'header.inc';
include 'menu.inc';
?>
    <h1>EOI Management</h1>
    <h2>List All EOIs</h2>
    <form method="post">
        <input type="submit" name="listAll" value="List All EOIs">
    </form>

    <h2>List EOIs by Job Reference Number</h2>
    <form method="post">
        <input type="text" name="jobRefNum" placeholder="Enter Job Reference Number">
        <input type="submit" name="listByJobRef" value="Search">
    </form>

    <h2>List EOIs by Applicant Name</h2>
    <form method="post">
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="lastName" placeholder="Last Name">
        <input type="submit" name="listByName" value="Search">
    </form>

    <h2>Delete EOIs by Job Reference Number</h2>
    <form method="post">
        <input type="text" name="deleteJobRefNum" placeholder="Enter Job Reference Number">
        <input type="submit" name="deleteByJobRef" value="Delete">
    </form>

    <h2>Change Status of an EOI</h2>
    <form method="post">
        <input type="text" name="eoiNumber" placeholder="EOI Number">
        <select name="newStatus">
            <option value="New">New</option>
            <option value="Current">Current</option>
            <option value="Final">Final</option>
        </select>
        <input type="submit" name="changeStatus" value="Change Status">
    </form>

<?php
require_once 'settings.php';
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['listAll'])) {
    $sql = "SELECT * FROM eoi";
    $result = $conn->query($sql);
    displayResults($result);
}

if (isset($_POST['listByJobRef'])) {
    $jobRefNum = $conn->real_escape_string($_POST['jobRefNum']);
    $sql = "SELECT * FROM eoi WHERE JobReferenceNumber = '$jobRefNum'";
    $result = $conn->query($sql);
    displayResults($result);
}

if (isset($_POST['listByName'])) {
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $sql = "SELECT * FROM eoi WHERE FirstName LIKE '%$firstName%' AND LastName LIKE '%$lastName%'";
    $result = $conn->query($sql);
    displayResults($result);
}

if (isset($_POST['deleteByJobRef'])) {
    $deleteJobRefNum = $conn->real_escape_string($_POST['deleteJobRefNum']);
    $sql = "DELETE FROM eoi WHERE JobReferenceNumber = '$deleteJobRefNum'";
    if ($conn->query($sql) === TRUE) {
        echo "EOIs successfully deleted.";
    } else {
        echo "Error deleting records: " . $conn->error;
    }
}

if (isset($_POST['changeStatus'])) {
    $eoiNumber = $conn->real_escape_string($_POST['eoiNumber']);
    $newStatus = $conn->real_escape_string($_POST['newStatus']);
    $sql = "UPDATE eoi SET Status = '$newStatus' WHERE EOInumber = $eoiNumber";
    if ($conn->query($sql) === TRUE) {
        echo "EOI status updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

function displayResults($result) {
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>EOInumber</th><th>FirstName</th><th>LastName</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["EOInumber"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["Status"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
}

$conn->close();
?>
<?php include 'footer.inc';?>