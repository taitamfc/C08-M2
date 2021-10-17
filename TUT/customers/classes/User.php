<?php
class User {
	private $id;
	public 	$username;
	public 	$email;
	public 	$password;

	//get all resources
  	public function getAll(){
	 	$json_users = file_get_contents('user.json');
		if( $json_users ){
	  		$users = json_decode($json_users);
		}else{
	  		$users = [];
		}

		return $users;
  	}

  	//store a resource
  	public function store(){

  		$objUser = new stdClass();
  		$objUser->id 		= time();
  		$objUser->username 	= $this->username;
  		$objUser->email 	= $this->email;
  		$objUser->password 	= $this->password;

  		$users 		= $this->getAll();
        $users[] 	= $objUser;

        $this->_save_to_file($users);

        return $objUser;

  	}

  	//find a resource
  	public function find( $id ){
  		$users   = $this->getAll();
  		$foundUser = '';
	    foreach( $users as $key => $user ){
	    	if( $user->id == $id ){
	    		$foundUser = $user;
	    		break;
	    	}
	    }
	    return $foundUser;
  	}

  	//update a resource
  	public function update( $id, $data ){
  		$users   = $this->getAll();
  		foreach( $users as $key => $user ){
  			if( $user->id == $id ){
  				$users[$key]->username 	= $data['username'];
  				$users[$key]->email 	= $data['email'];
  				$users[$key]->password 	= $data['password'];
  				break;
  			}
  		}
  		$this->_save_to_file($users);
  	}

  	//destroy a resource
  	public function destroy( $id ){
  		$users   = $this->getAll();
  		foreach( $users as $key => $user ){
  			if( $user->id == $id ){
  				unset($users[$key]);
  				break;
  			}
  		}

  		$users = array_values($users);
  		$this->_save_to_file($users);
  	}

  	private function _save_to_file($users){
  		//convert to json string
        $users = json_encode($users);
        file_put_contents( 'user.json', $users );
  	}
}