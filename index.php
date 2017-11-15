<?php
/**
 * 一款配色简单但不失美观和功能的Typecho主题。
 * 
 * @package WBNT-Typecho 
 * @author Weic (YoMi Studio)
 * @version 1.0
 * @link http://weic96.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <div class="col-md-8 index-left">
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
					<time class="fa fa-clock-o" datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('Y年m月d日'); ?></time>&nbsp;
					<a href="" class="fa fa-folder">&nbsp;<?php $this->category(','); ?></a>&nbsp;
					<a class="fa fa-comments-o">&nbsp;<?php $this->commentsNum(_t(' 暂无评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?></a>
				</div>
			</footer>
		</article>
    <?php endwhile; ?>
    <article class="paging">
		<?php $this->pageNav('上一页', '下一页'); ?>
	</article>
	</div>
	<div class="col-md-4 index-right">
		<?php $this->need('sidebar.php'); ?>
	</div>

<?php $this->need('footer.php'); ?>
