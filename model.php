<?php
  function getPosts() {
      $db = dbConnect();
      $req = $db->query('SELECT post_id, post_title, post_content, post_date, DATE_FORMAT(post_date, "%d/%m/%Y à %Hh%imin%ss\") AS post_date FROM billets ORDER BY post_date DESC LIMIT 0, 5');
      return $req;
  };

  function getPost($postId) {
      $db = dbConnect();
      $req = $db->prepare('SELECT post_id, post_title, post_content, post_date, DATE_FORMAT(post_date, "%d/%m/%Y à %Hh%imin%ss\") AS post_date FROM billets WHERE id = ?');
      $req->execute(array($postId));
      $post = $req->fetch();
      return $post;
  };

  function dbConnect() {
      try {
        $db = new PDO('mysql:host=localhost;dbname=blogecrivain;charset=utf8', 'root', '');
        return $db;
      }
      catch(Exception $e) {
          die('Erreur : '.$e->getMessage());
      }
  };
