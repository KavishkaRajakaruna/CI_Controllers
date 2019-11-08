<?php
    class Dbase extends CI_Model{
        function SaveDataToDB($id,$name,$psswd,$csprng,$auth){
            $query= "insert into users values('$id','$name','$psswd','$csprng','$auth')";
             $this->db->query($query);
        }

        function SearchRecord($id, $name){
            $this->load->helper('url');
            $query2="select *  from users where ID='$id' && Name = '$name'";
            //The records are coveretd in to array
           $row = $this->db->query($query2)->result_array();
            return $row;

        }

        function SearchLogin($id){
            $this->load->helper('url');
            $query = "select * from users where Id ='$id' ";
            $row = $this->db->query($query)->result_array();
            return $row;
            

        }

        function InfoInput($UID, $Email){
            $query = "insert into UserInfo values ('$UID','$Email')";
            $this->db->query($query);
        }
    }
?>