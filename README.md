# To include the nonce class 

use tris\wpnonce\wpnonce;

# To call the static function 

1. wpnonce::wpNonceField() :: parameters are same as wp_nonce_field 
2. wpnonce::wpNonceUrl()   :: parameters are same as wp_nonce_url
3. wpnonce::wpCreateNonce()   :: parameters are same as wp_create_nonce
4. wpnonce::wpVerifyNonce()   :: parameters are same as wp_verify_nonce
5. wpnonce::wpNonceAYS()   :: parameters are same as wp_nonce_ays
6. wpnonce::checkAdminReferer()   :: parameters are same as check_admin_referer
7. wpnonce::checkAjaxReferer()   :: parameters are same as check_ajax_referer

# Codex references 

1. https://codex.wordpress.org/Function_Reference/wp_nonce_field
2. https://codex.wordpress.org/Function_Reference/wp_nonce_url
3. https://codex.wordpress.org/Function_Reference/wp_create_nonce
4. https://codex.wordpress.org/Function_Reference/wp_verify_nonce
5. https://codex.wordpress.org/Function_Reference/wp_nonce_ays
6. https://codex.wordpress.org/Function_Reference/check_admin_referer
7. https://codex.wordpress.org/Function_Reference/check_ajax_referer