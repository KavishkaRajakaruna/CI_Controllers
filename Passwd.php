<?php
    class Passwd extends CI_Model{
        //Password hsj for the signUp
        function psswdHash($passwd){
            
            $string = random_bytes(10);
            $preusrpasswd = $string.$passwd;
            $hasdpasswd = password_hash($preusrpasswd, PASSWORD_BCRYPT);
            return array($string,$hasdpasswd);

        }

        //password check for the LogIn
        function HashLogin($csprng, $passwd , $hash){
           
            $preusrpasswd = $csprng.$passwd;
            $hashedpsswd = password_hash($preusrpasswd, PASSWORD_BCRYPT);
            
           
            if($hashedpsswd == $hash){
                return TRUE;
               
            }else{
                return FALSE;
                
            }

        }
    }
?>