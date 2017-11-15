<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <br>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
        <br>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
            <div class="input-group comments-user">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="author" id="author" class="form-control" placeholder="称呼">
            </div>
            <div class="input-group comments-mail">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="mail" id="mail" class="form-control" placeholder="电子邮箱">
            </div> 
            <div class="input-group comments-site">
                <span class="input-group-addon"><i class="fa fa-link"></i></span>
                <input type="text" name="url" id="url" class="form-control" placeholder="网站">
            </div>
            <?php endif; ?>
            <div class="comments-text">
                <textarea class="form-control" rows="5" name="text" id="textarea" placeholder="不要手下留情，尽情吐槽吧！"></textarea><!-- 
                <a href="javascript:;" class="comments-neh fa fa-meh-o"></a>
                <div class="comments-neh-main">
                    <a class="leng" href="javascript:void(0)">
                        <img src="images/paopao/leng.png" alt="">
                    </a>
                </div> -->
            </div>
            <div class="comments-submit">
                <button id="from_submit" type="submit"><?php _e('发射'); ?></button>
            </div>
            
        </form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
<script>
    // 表单验证
      $("#author").blur(function(){
        if(this.value=="" || this.value.length < 6){
            this.value = ""
            this.placeholder = "请输入不少于3位数的昵称！"
        }
      })
      $("#mail").blur(function(){
        if(this.value=="" || (this.value!="" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value))){
            this.value = ""
            this.placeholder = "请输入正确的E-mail！"
        }
      })
      $("#textarea").blur(function(){
        if(this.value=="" || this.value.length < 6){
            this.value = ""
            this.placeholder = "请输入不少于3位数的内容！"
        }
      })
</script>
