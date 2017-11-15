<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
	<div class="col-md-8 index-left">
                        <article class="post-main">
                              <header>
                                    <h2>
                                          <p href="" class="post-main-title"><?php $this->title() ?></p>
                                    </h2>
                                    <div class="post-main-info">
                                          <a href="" class="fa fa-user">Weic</a>&nbsp;
                                          <time class="fa fa-clock-o" datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('Y/m/d'); ?></time>
                                    </div>
                              </header>
                              <section>
                                   <?php $this->content(); ?>
                              </section>
                              <footer>
                              </footer>
                        </article>  
                        </div>
                        <div class="col-md-4 index-right">
        <?php $this->need('sidebar.php'); ?>
    </div>
<?php $this->need('footer.php'); ?>
