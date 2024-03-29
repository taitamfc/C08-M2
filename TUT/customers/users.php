<?php
   session_start();
   include_once './classes/User.php';
   include_once './db.php';

   $sql = 'SELECT * FROM students';
   //thực hiện truy vấn
   $stmt  = $connect->query( $sql );

   //tùy chọn kiểu trả về
   $stmt->setFetchMode(PDO::FETCH_OBJ);

   //lấy tất cả kết quả
   $users   = $stmt->fetchAll();


   $alert   = ( isset( $_SESSION['alert'] ) && !empty($_SESSION['alert']) ) ? $_SESSION['alert'] : '';


   $userLogin = ( isset( $_SESSION['user'] ) ) ? $_SESSION['user'] : '';
   if( !$userLogin ){
      header("Location: login.php");
      die();
   }


?>

<?php include 'layouts/header.php'; ?>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h3 class="text-center">Users</h3>
               <?php if( $userLogin ):?>
                  <p class="text-center">Xin chào, <?= $userLogin->username;?></p>
               <?php endif;?>

               <?php if( $alert ):?>
                  <div class="alert alert-success" role="alert">
                    <?= $alert; ?>

                    <?php 
                     unset( $_SESSION['alert'] );
                    ?>
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
                     <?php 

                     if( count($users) > 0 ): ?>
                        <?php foreach ($users as $key => $user): ?>
                        <tr>
                           <th scope="row"><?= $user->id; ?></th>
                           <td><?= $user->name; ?></td>
                           <td><?= $user->class_name; ?></td>
                           <td>
                              <a href="user-edit.php?id=<?= $user->id; ?>" class="btn btn-info">Edit</a>
                              <a 
                                 href="user-delete.php?id=<?= $user->id; ?>" 
                                 class="btn btn-danger"
                                 onclick=" return confirm('Bạn có chắc chắn muốn xóa không ?') "
                                 >Delete</a>
                           </td>
                        </tr>      
                        <?php endforeach; ?>
                     <?php endif; ?>
                     
                  </tbody>
               </table>
            </div>
         </div>
      </div>
<?php include 'layouts/footer.php'; ?> 

