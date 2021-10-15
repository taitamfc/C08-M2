<?php
   session_start();
   $json_users = file_get_contents('user.json');
   if( $json_users ){
      $users = json_decode($json_users);
   }else{
      $users = [];
   }

   $user = ( isset( $_SESSION['user'] ) ) ? $_SESSION['user'] : '';

   // echo '<pre>';
   // print_r($users);
   // echo '</pre>';
?>

<?php include 'layouts/header.php'; ?>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h3 class="text-center">Users</h3>
               <?php if( $user ):?>
               <div class="alert alert-success" role="alert">
                 Xin chào, <?= $user->username;?>
               </div>
               <?php endif;?>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($users as $key => $user): ?>
                     <tr>
                        <th scope="row"><?= $key + 1;?></th>
                        <td><?= $user->username; ?></td>
                        <td><?= $user->email; ?></td>
                        <td>
                           <a href="" class="btn btn-info">Edit</a>
                           <a href="" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>      
                     <?php endforeach; ?>
                     
                  </tbody>
               </table>
            </div>
         </div>
      </div>
<?php include 'layouts/footer.php'; ?>  
