<?php
	echo '<pre>';
	print_r($_REQUEST);
	echo '</pre>';

	if( isset( $_REQUEST['id'] )  && !empty( $_REQUEST['id'] ) ){
		$id = $_REQUEST['id'];
	}else{
		//chuyển hướng
		header("Location: index.php");
	}
?>

<?php include_once 'layouts/header.php';?>

<div id="myDIV" class="header">
  <h2 style="margin:5px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<?php include_once 'layouts/footer.php';?>