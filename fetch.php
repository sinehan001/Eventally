<?php
session_start();
//fetch.php
include('database_connection.php');

$column = array('SNO','Name', 'Year', 'College', 'Number');

$query = "SELECT * FROM {$_SESSION['event']}";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE SNO LIKE "%'.$_POST['search']['value'].'%"
 OR name LIKE "%'.$_POST['search']['value'].'%"
 OR ybs LIKE "%'.$_POST['search']['value'].'%"
 OR college LIKE "%'.$_POST['search']['value'].'%"
 OR num LIKE "%'.$_POST['search']['value'].'%"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY CustomerID DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['sno'];
 $sub_array[] = $row['name'];
 $sub_array[] = $row['ybs'];
 $sub_array[] = $row['college'];
 $sub_array[] = $row['num'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM {$_SESSION['event']}";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>