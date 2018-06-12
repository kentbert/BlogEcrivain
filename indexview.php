<?php $title = "Billet simple pour l'Alaska"; ?>

  <div class="container mx-auto p-4">
    <h2 class="text-center baskerville font-light text-xl py-4">Jean Forteroche</h2>
    <h1 class="text-center baskerville text-4xl py-4">Billet simple pour l'Alaska.</h1>
    <h3 class="text-center baskerville font-light italic py-4 ">Un roman épisodique en ligne.</p>
  </div>

  <div class="container mx-auto p-4">

    <?php while ($data = $req->fetch()) { ?>
      <h2 class="text-center baskerville text-4xl pt-8 py-4">
        <?php echo htmlspecialchars($data['title']); ?>
      </h2>

    <p class="text-center text-grey-darker italic border-b pb-4 mb-8">Ecrit le <?php echo ($data['content_date']); ?></p>

    <?php } $req->closeCursor();?>

  </div>

  <?php $content = ob_get_clean(); ?>

  <?php require('template.php'); ?>
