<?php
require_once "sql.php";

function AddImage($typeMedia, $nomMedia, $idPost){
  static $query = null;
  $sql = "INSERT INTO `media`(`typeMedia`, `nomMedia`, `idPost`)
  VALUES (:typeMedia, :nomMedia, :idPost)";

  $data=[
    ":typeMedia"=> $typeMedia,
    ":nomMedia"=> $nomMedia,
    ":idPost"=> $idPost
  ];
  $query = Connect()->prepare($sql);

  $result = $query->execute($data);

  return $result;
}


function AddPost($commentaire){
  static $query = null;
  $sql = "INSERT INTO `post`(`commentaire`)
  VALUES (:commentaire)";

  $data=[
    ":commentaire"=> $commentaire
  ];

  $query = Connect()->prepare($sql);

  $result = $query->execute($data);

  return Connect()->lastInsertId();
}


function SelectPost(){
  static $query = null;
  $sql = "INSERT INTO `media`(`typeMedia`, `nomMedia`, `idPost`)
  VALUES (:typeMedia, :nomMedia, :idPost)";

  $data=[
    ":typeMedia"=> $typeMedia,
    ":nomMedia"=> $nomMedia,
    ":idPost"=> $idPost
  ];
  $query = Connect()->prepare($sql);

  $result = $query->execute($data);

  return $result;
}
