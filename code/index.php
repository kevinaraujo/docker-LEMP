<?php
$con = mysqli_connect("172.17.0.2","root","123","testes");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = 'SELECT * FROM usuarios';
$dados = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($dados)){
	$row = (object) $row;
	printf(
		"%s - %s - %s - %s",
		$row->id, $row->name, $row->created_at, $row->active
	);

	echo "<br>";
}

?>