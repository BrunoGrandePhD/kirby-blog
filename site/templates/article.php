<?php snippet('header') ?>

<?php snippet('banner') ?>

<!--Article-->
<div id="content">
	<div class="article single-article" id="current-article">
		<h1 class="article-title"><a href="<?php echo $page->url() ?>"><?php echo html($page->title()) ?></a></h1>
		<span class="article-date"><?php echo html($page->published()) ?></span>
		<div class="article-body">
			<?php echo kirbytext($page->text()) ?>
			<p class="discuss">Discuss this with me on <a href="<?php echo 'http://www.twitter.com/share?text='.urlencode('@grandebruno Re: your article "' . $page->title() . '", (your thoughts here)').'&url='.urlencode('') ?>" class="nav twitter" target="_blank">Twitter</a></p>
		</div>

		<!-- <p>
			Tags: <?php foreach(str::split($page->tags()) as $tag): ?>
			<a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo html($tag) ?></a>
			<?php endforeach ?>
		</p> -->
	</div>

	<?php if($page->hasPrev() || $page->hasNext()){ ?>
		<div class="pagination">
			<div class="pagination-wrapper">
				<?php if($page->hasPrev()){ ?>
					<span class="prev"><a href="<?php echo $page->prev()->url() ?>"><span class="title"><?php echo $page->prev()->title() ?></span></a></span>
				<?php } else { ?>
					<span class="prev none"></span>
				<?php } ?>

				<?php if($page->hasNext()){ ?>
					<span class="next"><a href="<?php echo $page->next()->url() ?>"><span class="title"><?php echo $page->next()->title() ?></span></a></span>
				<?php } else { ?>
					<span class="next none"></span>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
</div>

<?php snippet('footer') ?>