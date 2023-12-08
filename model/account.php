<?php

// function themdm($tendm){
//   $conn = connectdb();
//   $sql = "INSERT INTO danhmuc (tendm) VALUES ('".$tendm."')";
//   // use exec() because no results are returned
//   $conn->exec($sql);
// }

// ---------------------------------------------------------------------------------------


// function getonedm($id)
// {
//   $conn = connectdb();
//   $stmt = $conn->prepare("SELECT * FROM danhmuc WHERE id=".$id);
//   $stmt->execute();
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   $kq = $stmt->fetchAll();
//   return $kq;
// }

// ---------------------------------------------------------------------------------------------------

// function updatedm($id, $tendm){
//   $conn = connectdb();
//   $sql = "UPDATE danhmuc SET tendm ='".$tendm."' WHERE id=".$id;
//   // Prepare statement
//   $stmt = $conn->prepare($sql);
//   // execute the query
//   $stmt->execute();

// }

// --------------------------------------------------------------------------------
// function deldm($id)
// {
//   $conn = connectdb();

//   $sql = "DELETE FROM danhmuc WHERE id=" . $id;

//   $conn->exec($sql);
// }
// -------------------------------------------------------------------------------

function checkAccount($username, $password)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM account where username='".$username."' and password='".$password."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  if(count($kq) > 0) return $kq[0] ['role'];
  else return 0;
}
function getAccount($username, $password)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM account where username='".$username."' and password='".$password."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}
