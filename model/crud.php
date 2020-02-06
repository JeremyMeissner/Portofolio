<?php
require_once "sql.php";

function AddImage($typeMedia, $nomMedia, $idPost){
  $sql = "INSERT INTO `media`(`typeMedia`, `nomMedia`, `idPost`)
  VALUES (:typeMedia, :nomMedia, :idPost)";

  $data=[
    ":typeMedia"=> $typeMedia,
    ":nomMedia"=> $nomMedia,
    ":idPost"=> $idPost
  ];
  Insert($sql, $data);
}

function AddPost($commentaire){
  $sql = "INSERT INTO `post`(`commentaire`)
  VALUES (:commentaire)";

  $data=[
    ":commentaire"=> $commentaire
  ];
  Insert($sql, $data);
}
