<?php snippet('header') ?>

<?php snippet('banner') ?>

<!--About-->
<div id="content">
    <div class="article single-article about">
        <h1 class="article-title"><a href="<?php echo $page->url() ?>"><?php echo html($page->longtitle()) ?></a></h1>
        <div class="about-photos">
            <ul>
                <li>
                    <img src="/content/02-about/bruno1.jpg">
                </li>
                <li>
                    <img src="/content/02-about/bruno2.jpg">
                </li>
                <li>
                    <img src="/content/02-about/bruno3.jpg">
                </li>
            </ul>
        </div>
        <?php echo kirbytext($page->text()) ?>
    </div>
</div>

<?php snippet('footer') ?>