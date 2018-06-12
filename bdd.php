<?php
  function getBillets() {
    try { $bdd = new PDO('mysql:host=localhost;dbname=blogecrivain;charset=utf8', 'root', ''); }
    catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }
    $req = $bdd->query('SELECT id_post, title, content_date, DATE_FORMAT(content_date, "%d/%m/%Y") AS content_date FROM billets ORDER BY content_date DESC LIMIT 0, 5');
    return $req;
  }
