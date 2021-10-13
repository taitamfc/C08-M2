<?php
session_start();

if( isset( $_SESSION['user']['username'] ) ){
	echo 'Hello '.$_SESSION['user']['username'];
}
