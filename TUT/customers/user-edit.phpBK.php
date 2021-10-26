<?php
	session_start();
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
    $row    = $stmt->fetch();

   


       $errors     = [];
	   $show_alert = ( isset( $_REQUEST['show_alert'] ) ) ? $_REQUEST['show_alert'] : 0;
	   if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	      /*
	      Array
	      (
	          [username] => admin
	          [email] => admin@gmail.com
	          [password] => 123456
	      )
	      */
	      $username   = $_REQUEST['username'];
	      $email      = $_REQUEST['email'];
	      $password   = $_REQUEST['password'];

	      if( $username == '' ){
	         $errors['username'] = 'Username is required field !';
	      }

	      if( $email == '' ){
	         $errors['email'] = 'Email is required field !';
	      }

	      if( $password == '' ){
	         $errors['password'] = 'Password is required field !';
	      }

	      if( count($errors) == 0 ){
	         $objUser = new User();
	         $data = [
	         	'username' 	=> $username,
	         	'email' 	=> $email,
	         	'password' 	=> $password,
	         ];
	         $objUser->update( $id, $data );

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
	    [username] => Nguyễn Văn C
	    [email] => c@gmail.com
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
                  <label >Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" value="<?= $user->username; ?>">
                  <small class="form-text text-danger">
                     <?php 
                        if( isset( $errors['username'] ) ){
                           echo $errors['username'];
                        }
                     ?>
                  </small>
               </div>
               <div class="form-group">
                  <label >Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $user->email; ?>">
                  <small class="form-text text-danger">
                     <?php echo ( isset( $errors['email'] ) ) ? $errors['email'] : '';  ?>
                  </small>
               </div>
               <div class="form-group">
                  <label >Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password">
                  <small class="form-text text-danger">
                     <?= ( isset( $errors['password'] ) ) ? $errors['password'] : '';  ?>
                  </small>
               </div>
               <button type="submit" class="btn btn-primary">Update</button>
            </form>
         </div>
      </div>
   </div>
<?php include 'layouts/footer.php'; ?>   
    

