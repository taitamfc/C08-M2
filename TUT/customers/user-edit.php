<?php
	session_start();
	include_once './db.php';
	/*
	if( isset($_REQUEST['id']) ){
		if( !empty( $_REQUEST['id'] ) ){
			$id = $_REQUEST['id'];
		}
	}
	*/

	$id = ( isset($_REQUEST['id']) && !empty( $_REQUEST['id'] ) ) ? $_REQUEST['id'] : 0;
	if( !$id ){
		header("Location: users.php");
		die();
	}

	$sql = 'SELECT * FROM students WHERE id = '.$id;

    $stmt   = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $user    = $stmt->fetch();

   


       $errors     = [];
	   $show_alert = ( isset( $_REQUEST['show_alert'] ) ) ? $_REQUEST['show_alert'] : 0;
	   if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	      /*
	      Array
	      (
	          [name] => admin
	          [class_name] => admin@gmail.com
	          [password] => 123456
	      )
	      */
	      $name   = $_REQUEST['name'];
	      $class_name      = $_REQUEST['class_name'];
	      

	      if( $name == '' ){
	         $errors['name'] = 'Name is required field !';
	      }

	      if( $class_name == '' ){
	         $errors['class_name'] = 'Class Name is required field !';
	      }


	      if( count($errors) == 0 ){
	         
	         $sql = "UPDATE students SET 
	         	name = '".$name."',
	         	class_name = '".$class_name."'
	         	WHERE id = ".$id."
	         ";
	         $connect->query( $sql );
	         

	         $_SESSION['alert'] = 'Cập nhật thành công';

	         //redirect to login page
	         header("Location: users.php");

	      }
	   }

    /*
    $user
	stdClass Object
	(
	    [id] => 1634443260
	    [name] => Nguyễn Văn C
	    [class_name] => c@gmail.com
	    [password] => 123456
	)
    */

 //    echo '<pre>';
 //    print_r($user);
	// die();
?>
<?php include 'layouts/header.php'; ?>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h3 class="text-center">Update User ID #<?= $id; ?></h3>
            <?php if( $show_alert ):?>
            <div class="alert alert-success" role="alert">
              Đăng ký thành công, vui lòng nhấn vào <a href="login.php">đây</a>
              để tới trang đăng nhập
            </div>
            <?php endif;?>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <form action="" method="POST">
               <div class="form-group">
                  <label >Name</label>
                  <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $user->name; ?>">
                  <small class="form-text text-danger">
                     <?php 
                        if( isset( $errors['name'] ) ){
                           echo $errors['name'];
                        }
                     ?>
                  </small>
               </div>
               <div class="form-group">
                  <label >Class Name</label>
                  <input type="text" class="form-control" placeholder="Class Name" name="class_name" value="<?= $user->class_name; ?>">
                  <small class="form-text text-danger">
                     <?php echo ( isset( $errors['class_name'] ) ) ? $errors['class_name'] : '';  ?>
                  </small>
               </div>
               
               <button type="submit" class="btn btn-primary">Update</button>
            </form>
         </div>
      </div>
   </div>
<?php include 'layouts/footer.php'; ?>   
    

