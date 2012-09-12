<?php

session_name( 'leDashboard' );
session_start();

class User {

	public static function login( $_username, $_password ) {
		// get JSON File, Encode, 
		$usersfile = file_get_contents( 'config/users.json' );
		$users = json_decode( $usersfile );
	}

	/**
	 *	Returns the valid Session or false if there is no Session found 
	 *
	 * @author Chris Jung <campino2k@gmail.com>
	 * @since 2012.09.11
	 */
	public static function get_user_session() {
		
		$SID = session_id();

		if ( !empty( $SID ) ) :

			$user_name = $_SESSION[ 'username' ];
			return $user_name;

		else :
			
			return false;

		endif;
		
	}
	
	public static function logout() {
	}
}
