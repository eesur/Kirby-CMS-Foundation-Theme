<?php snippet('header') ?>

<div class="row" id="main-content">
  <section class="eight columns" id="content-area">
<article>
    <h2><?= $page->title() ?></h2>
<h5 class="subheader"><?= $page->date('m-d-Y') ?></h5>
    <?= kirbytext($page->text()) ?>
</article>
<hr />
<!-- ADD A COMMENTING SYSTEM HERE -->
            
  </section>
  <aside class="four columns" id="sidebar">
    <?= snippet('sidebar') ?>
  </aside>
</div>

<?php snippet('footer') ?>