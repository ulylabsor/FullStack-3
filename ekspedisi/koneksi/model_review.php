<?php
function getReview()
{
   global $koneksi;
   $review = [];
   $sql = "SELECT * FROM tb_review inner join users on tb_review.id_userfk=users.id_user inner join profil on users.id_user=profil.id_userfk WHERE level='customer'";
   $query = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $review[] = $data;
   }
   return $review;
}
