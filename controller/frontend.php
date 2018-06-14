<?php

  require('model/frontend.php');

  function listPosts() {
      $postManager = new PostManager(); // Création d'un objet
      $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

      require('view/frontend/home.php');
  }

  function post() {
      $postManager = new PostManager();

      $post = $postManager->getPost($_GET['post_id']);

      require('view/frontend/article.php');
  }
