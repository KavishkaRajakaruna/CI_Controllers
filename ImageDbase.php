<?php 
   class ImageDbase extends CI_Model{
       function StoreImageInfo($UID,$ImgName,$ImgPath,$Category,$Level,$UploderId){
           $query= "insert into imageinfo (UserId,ImageName,ImagePath, Category, Level, Uploader) values ('$UID','$ImgName','$ImgPath','$Category','$Level','$UploderId' ) ";
           $this->db->query($query);
       }
   }
?>