<?php snippet('header') ?>

<?php snippet('banner') ?>

<!--Article-->
<div id="content">
	<?php if(param('tag')) {

	  $articles = $pages->find('blog')
	                    ->children()
	                    ->visible()
	                    ->filterBy('tags', param('tag'), ',')
	                    ->flip()
	                    ->paginate(10);

	} else {

	  $articles = $pages->find('blog')
	                    ->children()
	                    ->visible()
	                    ->flip()
	                    ->paginate(10);

	} ?>
	<div class="article articles empty" style="width: 0; padding: 0; margin: 0; float: left;"></div>
	<?php foreach($articles as $article): ?>
	<div class="article articles">
		<div class="content-wrapper">
			<h1 class="article-title"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
			<span class="article-date"><?php echo html($article->published()) ?></span>
			<div class="article-body">
				<?php echo kirbytext($article->text()) ?>
				<p class="discuss">Discuss this with me on <a href="<?php echo 'http://www.twitter.com/share?text='.urlencode('@grandebruno Re: your article "' . $article->title() . '", (your thoughts here)').'&url='.urlencode('') ?>" class="nav twitter" target="_blank">Twitter</a></p>
			</div>
		</div>
		<!-- <div class="readmore"><span>Read more</span></div> -->
	</div>
	<?php endforeach ?>

	<?php if($articles->pagination()->hasPrevPage() || $articles->pagination()->hasNextPage()){ ?>
		<div class="pagination">
			<div class="pagination-wrapper">
				<?php if($articles->pagination()->hasPrevPage()){ ?>
					<span class="next"><a href="<?= $articles->pagination()->prevPageURL() ?>"><span class="title">Newer Posts</span></a></span>
				<?php } else { ?>
					<span class="next none"></span>
				<?php } ?>

				<?php if($articles->pagination()->hasNextPage()){ ?>
					<span class="prev"><a href="<?= $articles->pagination()->nextPageURL() ?>"><span class="title">Older Posts</span></a></span>
				<?php } else { ?>
					<span class="prev none"></span>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
</div>


<?php snippet('footer') ?>