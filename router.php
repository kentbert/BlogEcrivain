<?php

require('model.php');

function listPosts() {
    $posts = getPosts();
    require('home.php');
  };

function post() {
    $post = getPost($_GET['post_id']);
    require('article.php');
  };
