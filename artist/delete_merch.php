<?php 
	include('../functions.php');


// confirm that the 'id' variable has been set
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// get the 'id' variable from the URL
$id = $_GET['id'];

// delete record from database
if ($stmt = $db->prepare("DELETE FROM merch WHERE id = ? LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
if ($result = $db->query("SELECT * FROM merch WHERE id = ? LIMIT 1 ")){
    
while ($row = $result->fetch_object())
{
unlink(strval($row->storage));
    
}
    
}
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$db->close();

// redirect user after delete is successful
header("Location: home.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: home.php");
}

?>