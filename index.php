<?php
  require('router.php');

  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
      if (isset($_GET['post_id']) && $_GET['post_id'] > 0) {
          post();
      }
      else {
          echo 'Erreur : aucun identifiant de billet envoyé';
      }
    }
  }

  else {
    listPosts();
  }
