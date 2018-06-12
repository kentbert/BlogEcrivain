<?php
  function getBillets() {
    try { $bdd = new PDO('mysql:host=localhost;dbname=blogecrivain;charset=utf8', 'root', ''); }
    catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }
    $billets = $bdd->query('SELECT post_id, post_title, post_date, DATE_FORMAT(post_date, "%d/%m/%Y") AS post_date FROM billets ORDER BY post_date DESC LIMIT 0, 5');
    return $billets;
  }
