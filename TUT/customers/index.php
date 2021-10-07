<?php
	include_once './classes/lib/Test.php';
	include_once './classes/TodoItem.php';
	include_once './functions/task.php';
	$tasks 	= getTasks();

	//loạn não => ra ngoài 10p
	Hinh_tron => hinh_tron

	
	class HinhTron {

	}
?>
<?php include_once 'layouts/header.php';?>

<ul id="myUL">
 	<?php foreach ($tasks as $key => $task): ?>
 		<li><?php echo $task->task_name; ?></li>
 	<?php endforeach; ?>
</ul>

<?php include_once 'layouts/footer.php';?>

