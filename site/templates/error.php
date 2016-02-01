<?php snippet('header') ?>

<?php snippet('banner') ?>

<div id="content">
    <div class="article single-article" id="current-article">
        <h1 class="article-title"><?php echo html($page->title()) ?></h1>
        <div class="article-body">
            <?php echo kirbytext($page->text()) ?>
        </div>
    </div>
</div>

<?php snippet('footer') ?>