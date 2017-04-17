<?php
/*****************************************************
       "All Post Contact Form"'s LANGUAGE File
             - for usage of multilingual - 
 　　　　　　　 　　　　- 多言語利用 - 
            Created by RainbowLink Inc.
           
                ###    Modified by You!   ###
                ###    Modify this file!  ### 
       
#--------------- How to Modify this File ------------------------------- 
https://www.Rainbow-Link.com/rainbowlink_inc_s_catalogue.htm?&item_no=RLF16&medialink_id=gh  
-----------------------------------------------------------------------#
#--------------------- このファイルの編集方法------------------------------- 
https://jp.Rainbow-Link.com/rainbowlink_inc_s_catalogue.htm?&item_no=RLF16ja&medialink_id=gh  
-----------------------------------------------------------------------#
*****************************************************/
    if ( is_admin() ) {
        if (preg_match('/^ja/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            include 'rl-apcf-admin-ja.php';
        }else{
            include 'rl-apcf-admin.php';
        }
    }else{
        if (preg_match('/^ja/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            include 'rl-apcf-public-ja.php';
            
/************** Modify this1  Start ***********************************/    
        }elseif (preg_match('/^ANY-OTHER-LANGUAGE1/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            include 'rl-apcf-public-ANY-OTHER-LANGUAGE1.php';            
/************** Modify this1  End *************************************/
   
/************** Modify this2  Start ***********************************/    
        }elseif (preg_match('/^ANY-OTHER-LANGUAGE2/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            include 'rl-apcf-public-ANY-OTHER-LANGUAGE2.php';            
/************** Modify this2  End *************************************/
         
        }else{
            include 'rl-apcf-public.php';
        }
    }
?>
