<!--Banner-->
<div id="main-logo"  class="dna">
    <div id="banner-text">
        <span><span class="first-letter">B</span>RUNO <span class="first-letter">G</span>RANDE</span>
    </div>
    <span class="blog-description"><?php echo $site->description() ?></span>
    <ul id="navigation">
        <?php foreach($pages->visible() AS $p): ?><a href="<?php echo $p->url() ?>" class="nav"><li><?php echo html($p->title()) ?></li></a><?php endforeach ?><a href="<?php echo "http://www.twitter.com/" . html($site->twitter()) ?>" class="nav" target="_blank"><li class="twitter">Twitter</li></a>
    </ul>
</div>