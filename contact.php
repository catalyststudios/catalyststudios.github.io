<?php
$conn=mysqli_connect("localhost","root","","catalyststudios");

$name=$_POST['contact_name'];
$email = $_POST['contact_email'];
$message_content = $_POST['contact_message'];
$sql = "INSERT INTO contactus VALUES ('$name','$email','$message_content')"; 
if (mysqli_query($conn, $sql)) 
{
echo "Thanks for your time";
}
else 
{
echo "Error: " . $sql . " " . mysqli_error($conn);
}

$sql="SELECT name FROM contactus";
$result=mysqli_query($conn,$sql);
$profpic = "C:\wamp64\www\New folder\2097_pop\img/pop-bg2.jpeg";
echo"<h2>Other Users:</h2>";
while ($row=mysqli_fetch_assoc($result))
{
echo $row["name"];
echo"<br>";
}
mysqli_close($conn);
?>