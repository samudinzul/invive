
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<style>
.img:hover{
    color: #424242; 
  -webkit-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -ms-transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  transition: all .3s ease-in;
  opacity: 1;
  transform: scale(3);
  -ms-transform: scale(3); /* IE 9 */
  -webkit-transform: scale(3); /* Safari and Chrome */

}
    
</style>    
    
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1>View Records</h1>

<p>| <b>View Merch</b> |

<?php


// get the records from the database
if ($result = $db->query("SELECT * FROM merch WHERE username LIKE '{$_SESSION['user']['username']}' "))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='2' cellpadding='10'>";
echo "<br>";
// set table headers
echo "<tr><th>ID</th><th>Inventory</th><th>Price</th><th>Images</th><th>Action</th>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->title . "</td>";
echo "<td>" . $row->price . "</td>";

echo '<td><img src="'. $row->upload .'" height ="250" width ="150" class="img" alt=""> ';
echo "</td>";
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
//$db->close();

?>


</body>
</html>