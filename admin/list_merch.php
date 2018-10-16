
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<style>
    
table { word-wrap: break-word; }
</style>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1>View Records</h1>

<p>| <b>View Merch</b> |

<?php


// get the records from the database
if ($result = $db->query("SELECT * FROM merch ORDER BY id"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='1'>";
echo "<br>";
// set table headers
echo "<tr><th>ID</th><th>Username</th><th>Title</th><th>Action</th>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->username . "</td>";
echo "<td>" . $row->title . "</td>";


echo "<td><a href='delete_merch.php?id=" . $row->id . "'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $db->error;
}

// close database connection
$db->close();

?>


</body>
</html>