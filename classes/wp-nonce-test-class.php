<?php

namespace tris\wpnoncetest;
use tris\wpnonce\wpnonce;

if ( ! class_exists( 'wpnoncetest' ) ) 
{
	class wpnoncetest extends WP_UnitTestCase 
	{
		public function testVerifyNonce() 
		{
			$given_nonce = wpnonce::wpCreateNonce( 'mynonce' );
			$this->assertEquals( wpnonce::wpVerifyNonce( $given_nonce, 'mynonce' ), 1 );

			/**** FOR INVALID NONCE ******/
			$invalid =  wpnonce::wpVerifyNonce($given_nonce);
			$this->assertFalse( $invalid );
		}//end of function

		/***** TO TEST NONCE FIELDs *****/
		public function testNonceField() 
		{
			$noncefield = wpnonce::wpNonceField( 'mynonce', '_wptestnonce_', true, false );
			$dom = new DOMDocument();
			$dom->loadHTML( $noncefield );

			$inputElement = $dom->getElementsByTagName( 'input' )->item( 0 );
			if ( ! empty( $inputElement ) ) 
			{
				$given_nonce = $inputElement->getAttribute( 'value' );
				$this->assertEquals( wpnonce::wpVerifyNonce( $given_nonce, 'mynonce' ), 1 );
			} 
			else 
			{
				$this->assertTrue( false );
			}
		} //end of function
	}//end of class

}//if end