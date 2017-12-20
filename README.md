# wp-nonce


# How to USE : 

# to include the nonce class 

use tris\wpnonce\wpnonce;

# to call the static function 
wpnonce::wpNonceField() :: parameters are same as wp_nonce_field 

wpnonce::wpNonceUrl()   :: parameters are same as wp_nonce_url

wpnonce::wpCreateNonce()   ::

wpnonce::wpVerifyNonce()   ::

wpnonce::wpNonceAYS()   ::

wpnonce::checkAdminReferer()   ::

wpnonce::checkAjaxReferer()   ::

# codex references 

1. https://codex.wordpress.org/Function_Reference/check_admin_referer
2. https://codex.wordpress.org/Function_Reference/check_ajax_referer
