<?php

namespace tris\wpnonce;

if ( ! class_exists( 'wpnonce' ) ) 
{
	class wpnonce
	{
		/**
		 * @param string|int :: $action param value to add context to the nonce.
		 * @return string ::  The nonce token.
		*/
		public static function wpCreateNonce($action = -1)
		{
		    return wp_create_nonce($action);  // calling default function for wp create nonce
		}//end of function

		/**
		 * @param string     :: $nonce  :: nonce that was used in the form to verify
		 * @param string|int :: $action :: should give context to same when nonce was created.
		 * @return false|int :: false if the nonce is not matched, 1 :: if the nonce is matched and valid and generation time between 0-12 Hrs, 2 if the nonce is valid and generation time between 12-24 Hrs.
		 */
		public static function wpVerifyNonce($nonce, $action = -1)
		{
		    return wp_verify_nonce($nonce, $action);  // calling default function for wp nonce verify
		}//end of function

		/**
		 * @param int|string :: $action  Optional. Action name. Default -1.
		 * @param string     :: $name    Optional. Nonce name. Default '_wpnonce_'.
		 * @param bool       :: $referer Optional. If true, referer field set for validation.
		 * @param bool       :: $echo    Optional. If true, display .
		 * @return string 	 :: html markup for nonce field .
		*/
		public static function wpNonceField($action = -1, $name = "_wpnonce_", $referer = true , $echo = true)
		{
		    return wp_nonce_field($action, $name, $referer, $echo); // calling default function for wp nonce field
		}//end of function

		/**
		 * @param string     :: $url URL to add nonce action.
		 * @param int|string :: $action    Optional. Nonce action name. Default -1.
		 * @param string     :: $name      Optional. Nonce name. Default '_wpnonce'.
		 * @return string    :: escaped URL with nonce added.
		*/
		public static function wpNonceUrl($url, $action = -1, $name = '_wpnonce_')
	    {
	        return wp_nonce_url($url, $action, $name); // calling default function for wp nonce url
	    }//end of function

	    /**
	     * @description  :: Are you sure message on any action 
	     * @param string :: $action the nonce action.
	     */
	    public static function wpNonceAYS($action )
	    {
	        wp_nonce_ays($action ); // calling default function for wp nonce ays
	    }//end of funciton

	    /**
	     * @param int|string :: $action  :: action nonce.
	     * @param string     :: $queryargs Optional. Key to check for nonce in `$_REQUEST||$_GET`, By Default '_wpnonce'.
	     * @return false|int :: false if the nonce is not matched, 1 :: if the nonce is matched and valid and generation time between 0-12 Hrs, 2 if the nonce is valid and generation time between 12-24 Hrs.
	     */
	    public static function check_admin_referer($action = -1, $queryargs = '_wpnonce')
	    {
	        return check_admin_referer($action, $query_arg);
	    }//end of function


	    /**
	     * @param int|string  ::  $action :: action nonce.
	     * @param false|string:: $queryargs :: optional :: key to check for the nonce in `$_REQUEST||$_GET` . If false,
	     *                                 values will be evaluated for '_ajax_nonce', and '_wpnonce_'
	     *                                (in that order). Default false.
	     * @param bool        :: $die  :: optional. die if not verified, default true
	     * @return false|int  :: false if the nonce is not matched, 1 :: if the nonce is matched and valid and generation time between 0-12 Hrs, 2 if the nonce is valid and generation time between 12-24 Hrs.
	    */
	    public static function checkAjaxReferer($action = -1, $queryargs = false, $die = true)
	    {
	        return check_ajax_referer($action, $query_arg, $die); // calling default function for ajax calling
	    }//end of function

	}//end of class

}//if end