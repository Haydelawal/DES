<?php

include 'connect.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>ADMIN - Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/feathericon.min.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<link rel="stylesheet" href="assets/css/style.css">
<script src="logout.js"></script>

</head>

<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">

<p class="logo"></pclass>Admin Dashboard</p>


</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fa fa-arrow-left"></i>
</a>


<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-arrow-left"></i>
</a>




</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>


<li class="menu-title">
</li>
<li class="active">
<a href="index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fa fa-file"></i> <span>Reports</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="create.php">Create Report</a></li>
<li><a href="view.php">View Report</a></li>
<li><a href="edit.php">Edit Report</a></li>
<li><a href="delete.php">Delete Report</a></li>
</ul>
</li>



<li>
<a href="search.php"><i class="fa fa-search"></i> <span>Search</span></a>
</li>
<li>
<a onclick="logout()"><i class="fa fa-close"></i> <span>Log Out</span></a>
</li>







</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Edit Report</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Edit Report</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 d-flex">

<div class="card card-table flex-fill">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>


<tr>
<th>Title</th>
<th>Start Time</th>
<th>End Time</th>
<th>Date</th>
<th>Status</th>
<th class="text-end">Update</th>
</tr>


</thead>
<tbody>

<?php
         $sql = "select * from `decisions` ORDER BY `date` DESC";
         $result = mysqli_query($con, $sql);
         if($result){


          while($row = mysqli_fetch_assoc($result)){

            $id =$row['id'];


            $title =$row['title'];
			$starttime = $row['starttime'];
            $endtime =$row['endtime'];

            $date =$row['date'];
           
            $status =$row['status'];

            echo '
<tr>
<td>'.$title.'</td>
<td>'.$starttime.'</td>
<td>'.$endtime.'</td>
<td>'.$date.'</td>
<td>'.$status.'</td>
<td class="text-end">
<div class="actions">
<a href="editaction.php?updateid='.$id.'" class="btn btn-sm bg-success-light me-2 title="Unblocked">
<i class="fe fe-check"></i>
</a>
</div>
</td>
</tr>';

}
}


?>





</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>