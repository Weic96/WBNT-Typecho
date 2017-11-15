<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
 <div class="col-md-8 index-left">
    <article class="archive-info">
        <?php $this->archiveTitle(array(
			'category'  =>  _t('分类 <span class="archive-page-keyword">%s</span> 下的文章'),
			'search'    =>  _t('包含关键字 <span class="archive-page-keyword">%s</span> 的文章'),
			'tag'       =>  _t('标签 <span class="archive-page-keyword">%s</span> 下的文章'),
			'author'    =>  _t('<span class="archive-page-keyword">%s</span> 发布的文章')
		), '', ''); ?>
    </article>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="index-post-block">
			<header>
				<h2>
				<a href="<?php $this->permalink() ?>" class="index-post-block-title"><?php $this->title() ?></a>
				</h2>
			</header>
			<section>
				<?php $this->excerpt(130, ' ...'); ?>
			</section>
			<footer>
				<div class="index-post-block-info">
					<a class="fa fa-user" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>&nbsp;
					<time class="fa fa-clock-o" datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('F j, Y'); ?></time>&nbsp;
					<a href="" class="fa fa-folder">&nbsp;<?php $this->category(','); ?></a>&nbsp;
					<a class="fa fa-comments-o">&nbsp;<?php $this->commentsNum(_t(' 暂无评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?></a>
				</div>
			</footer>
		</article>
    	<?php endwhile; ?>
        <?php else: ?>
		<article class="archive-info">
				<section>
					哎呀！没有搜到你要的内容！
				</section>
			</article>
        <?php endif; ?>
        <article class="paging">
		<?php $this->pageNav('上一页', '下一页'); ?>
	</article>
        </div>
        <div class="col-md-4 index-right">
		<?php $this->need('sidebar.php'); ?>
	</div>
	<?php $this->need('footer.php'); ?>