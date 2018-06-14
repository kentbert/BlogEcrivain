<?php
  class PostManager {
      public function getPosts() {
          $db = $this->dbConnect();
          $req = $db->query('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, "%d/%m/%Y à %Hh%imin%ss") AS post_date FROM billets ORDER BY post_date DESC LIMIT 0, 5');

          return $req;
      }

      public function getPost($postId) {
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, "%d/%m/%Y à %Hh%imin%ss") AS post_date FROM billets WHERE post_id = ?');
          $req->execute(array($postId));
          $post = $req->fetch();

          return $post;
      }

      private function dbConnect() {
          $db = new PDO('mysql:host=localhost;dbname=blogecrivain;charset=utf8', 'root', '');
          return $db;
      }
  }
