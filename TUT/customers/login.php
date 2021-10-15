<?php
	session_start();
	$json_users = file_get_contents('user.json');
    if( $json_users ){
        $users = json_decode($json_users);
    }else{
        $users = [];
    }


    $errors     = [];
    $alert 		= '';
	if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
		/*
		Array
		(
		    [email] => admin
		    [password] => devcode20@
		)
		*/
		$email 		= $_REQUEST['email'];
		$password 	= $_REQUEST['password'];

		$can_do = false;
		foreach( $users as $user ){
			// echo $user->email .' - '.$email.'<br>';
			// echo $user->password .' - '.$password.'<br>';
			// echo '<hr>';
			if( $user->email == $email && $user->password == $password ){
				//xử lý đăng nhập
				$_SESSION['user'] = $user;
				$can_do = true;
				break;
			}
		}

		if( $can_do == false ){
			$alert = 'Login failed';
		}else{
			header("Location: users.php");
		}
	}
?>
<?php include 'layouts/header.php'; ?>
	<div class="container">
	 <div class="row">
	    <div class="col-lg-12">
	       <h3 class="text-center">Login</h3>
	       	<?php if( $alert ):?>
            <div class="alert alert-danger" role="alert">
              	<?= $alert; ?>
            </div>
            <?php endif;?>
	    </div>
	 </div>
	 <div class="row">
	    <div class="col-lg-12">
	       <form action="" method="POST" novalidate="true">
	          <div class="form-group">
	             <label >Email address</label>
	             <input type="email" class="form-control" placeholder="Enter email" name="email">
	             <small class="form-text text-danger"></small>
	          </div>
	          <div class="form-group">
	             <label >Password</label>
	             <input type="password" class="form-control" placeholder="Password" name="password">
	          </div>
	          <button type="submit" class="btn btn-primary">Login</button>
	       </form>
	    </div>
	 </div>
	</div>
<?php include 'layouts/footer.php'; ?>     