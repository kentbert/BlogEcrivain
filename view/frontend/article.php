<?php $page_title = htmlspecialchars($post['post_title']); ?>

<?php ob_start(); ?>
  <div class="container mx-auto p-4">
    <h2 class="text-center baskerville font-light text-xl py-4">Jean Forteroche</h2>
    <h1 class="text-center baskerville text-4xl py-4">Billet simple pour l'Alaska.</h1>
    <h3 class="text-center baskerville font-light italic py-4 ">Un roman épisodique en ligne.</p>
  </div>

  <div class="container mx-auto p-4">

      <h2 class="text-center baskerville text-4xl pt-8 py-4">
        <?php echo htmlspecialchars($post['post_title']); ?>
      </h2>

    <p class="text-center text-grey-darker italic border-b pb-4 mb-8">Ecrit le <?php echo ($post['post_date']); ?></p>

    <p><?php echo ($post['post_content']); ?></p>

  </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
