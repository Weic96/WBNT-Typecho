<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="post-path">
    <ol class="breadcrumb">
        <li><a href="#" class="fa fa-home">&nbsp;首页</a></li>
        <li><a href="#"><?php $this->category(','); ?></a></li>
        <li class="active">正文</li>
    </ol>
</div>
    <div class="col-md-8 index-left">
                        <article class="post-main">
                              <header>
                                    <h2>
                                          <p href="" class="post-main-title"><?php $this->title() ?></p>
                                    </h2>
                                    <div class="post-main-info">
                                          <a href="" class="fa fa-user">Weic</a>&nbsp;
                                          <time class="fa fa-clock-o" datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('Y年m月d日'); ?></time>&nbsp;
                                          <a href="" class="fa fa-folder">&nbsp;Web</a>&nbsp;
                                          <a href="" class="fa fa-comments-o">&nbsp;3条评论</a>
                                    </div>
                              </header>
                              <section>
                                   <?php $this->content(); ?>
                              </section>
                              <footer>
                                    <div class="post-main-tags">
                                        <?php $this->tags('', true, '没有标签'); ?>
                                    </div>
                                    <div class="post-main-pay">
                                          <div class="post-pay-icon">
                                                <a href="javascript:;" class="post-pay-btn">赏</a>
                                          </div>
                                          <div class="post-pay-img">
                                                <p>如果此文章对您有所帮助的话，感谢赞助；</p>
                                                <div class="post-pay-img-alipay">
                                                      <img src="images/logo.png" alt="">
                                                      <p>支付宝</p>
                                                </div>
                                                <div class="post-pay-img-weixin">
                                                      <img src="images/logo.png" alt="">
                                                      <p>微信</p>
                                                </div>
                                                <div style="clear:both;"></div>
                                          </div>
                                    </div>
                                    <div class="post-main-copy">
                                    本文采用知识共享署名-非商业性使用-相同方式共享 <a href="https://creativecommons.org/licenses/by/4.0/">国际许可协议4.0</a> 进行许可；转载请注明 <a href="http://weic96.cn/">Weic's Blog</a> 。
                                    </div>
                                    <div class="post-main-share">
                                          
                                    </div>
                                    <div class="post-main-more">
                                          <ul>
                                                <li>上一篇: <?php $this->thePrev('&nbsp;%s','<span>&nbsp;木有了！</span>'); ?></li>
                                                <li>下一篇: <?php $this->theNext('&nbsp;%s','<span>&nbsp;还没造出来呢！</span>'); ?></li>
                                          </ul>
                                    </div>
                                    <div class="post-main-comments">
                                        <?php $this->need('comments.php'); ?> 
                                    </div>
                              </footer>
                        </article>  
                        </div>
                        <div class="col-md-4 index-right">
        <?php $this->need('sidebar.php'); ?>
    </div>
<?php $this->need('footer.php'); ?>
