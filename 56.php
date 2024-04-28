<?php
$con = mysqli_connect("localhost", "root", "","mydb");
mysqli_query($con, "CREATE TABLE myplayers1(ID INT, First_Name VARCHAR(255),
Last_Name VARCHAR(255), Place_Of_Birth VARCHAR(255), Country VARCHAR(255))");
print("Table Created.....<br>");
mysqli_query($con, "INSERT INTO myplayers1 values(1, 'Sikhar', 'Dhawan', 'Delhi', 'India')");
mysqli_query($con, "INSERT INTO myplayers1 values(2, 'Jonathan', 'Trott', 'CapeTown',
'SouthAfrica')");
mysqli_query($con, "INSERT INTO myplayers1 values(3, 'Kumara', 'Sangakkara', 'Matale',
'Srilanka')");


print("Record Inserted......");
//Retrieving the contents of the table
$res = mysqli_query($con, "SELECT * FROM myplayers1");
//Fetching the fields
while($info = mysqli_fetch_field($res)){
//Current field
$currentfield = mysqli_field_tell($res);
print("Current Field: ".$currentfield."<br>");
print("Name: ".$info->name."<br>");
print("Type: ".$info->type."<br>");
}
//Closing the statement
mysqli_free_result($res);
//Closing the connection
mysqli_close($con);
?>