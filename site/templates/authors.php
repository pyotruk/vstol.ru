<?php snippet('header') ?>

  <main role="main" class="authors">
    <?php foreach($page->author()->toStructure()  as $author ): ?>
      <div class="textarea">
        <div class="profile_pic">
          <figure>
            <img src="<?= $page->images()->find($author->profilepic())->resize(null, 600)->url() ?>" alt="<?= $author->name() ?>" />
          </figure>
        </div>
        <div class="profile_description">
          <h2><?= $author->name() ?></h2>
          <?= $author->text()->kirbytext() ?>
        </div>
      </div>
    <?php endforeach ?>
  </main>

<?php snippet('footer') ?>
