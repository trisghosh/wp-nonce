<?php

namespace tris\wpnonce;

if ( ! class_exists( 'wpnonce' ) ) 
{
	class wpnonce
	{
		/**
		 * @param int|string :: $action  Optional. Action name. Default -1.
		 * @param string     :: $name    Optional. Nonce name. Default '_wpnonce_'.
		 * @param bool       :: $referer Optional. If true, referer field set for validation.
		 * @param bool       :: $echo    Optional. If true, display .
		 * @return string 	 :: HTML markup for Nonce field .
		*/
		public static function wpNonceField($action = -1, $name = "_wpnonce_", $referer = true , $echo = true)
		{
		    return wp_nonce_field($action, $name, $referer, $echo); // calling default function for wp nonce field
		}
		public static function wpNonceUrl($url, $action = -1, $name = '_wpnonce_')
	    {
	        return wp_nonce_url($url, $action, $name); // calling default function for wp nonce url
	    }//end of function


	}//end of class

}//if end