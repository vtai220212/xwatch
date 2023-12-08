<?php

function insert_sanpham($iddm,$tensp, $img, $gia ){

  $conn = connectdb();

  $sql = "INSERT INTO sanpham (iddm, tensp, img, gia)
  VALUES ('$iddm', '$tensp', '$img', '$gia')";
  // use exec() because no results are returned
  $conn->exec($sql);

 }


// ---------------------------------------------------------------------------------------


function getonesp($id)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM sanpham WHERE id=".$id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}

// ---------------------------------------------------------------------------------------------------

function updsp($id, $tensp, $img, $gia, $iddm){
  $conn = connectdb();
  if($img==""){
    $sql = "UPDATE sanpham SET tensp ='".$tensp."', gia ='".$gia."', iddm ='".$iddm."' WHERE id=".$id;
    } else {
    $sql = "UPDATE sanpham SET tensp ='".$tensp."', gia ='".$gia."', iddm ='".$iddm."', img ='".$img."' WHERE id=".$id;
  }

  // Prepare statement
  $stmt = $conn->prepare($sql);
  // execute the query
  $stmt->execute();

}

// --------------------------------------------------------------------------------
function delsp($id)
{
  $conn = connectdb();

  $sql = "DELETE FROM sanpham WHERE id=" . $id;

  $conn->exec($sql);
}
// -------------------------------------------------------------------------------

function getall_sanpham($iddm=0, $kyw=""){

  $conn = connectdb();
  $sql="SELECT * FROM sanpham WHERE 1";
  if($iddm>0) $sql.=" AND iddm=".$iddm;
  if($kyw!="") $sql.=" AND tensp LIKE '%".$kyw."%'";
  $sql.=" order by ID desc ";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();

  return $kq;
}