<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <!-- 搜索框 -->
                        <div class="index-right-main-search">
                              <from class="input-group" method="post" action="">
                                    <input type="text" name="s" class="form-control" placeholder="search">
                                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                              </from>
                        </div>
                        <!-- 简介 -->
                        <div class="index-right-main">
                              <div class="index-right-main-div index-icon">
                                    <a href=""><i class="fa fa-weibo"></i></a>
                                    <a href=""><i class="fa fa-github"></i></a>
                                    <a href=""><i class="fa fa-envelope"></i></a>
                                    <a href=""><i class="fa fa-rss"></i></a>
                              </div>
                        </div>
                        <!-- 最新文章 -->
                        <div class="index-right-main">
                              <h2 class="index-right-main-title">最新文章</h2>
                              <div class="index-right-main-div new-post">
                                    <ol class="rectangle-list">
                                        <?php $this->widget('Widget_Contents_Post_Recent')->parse('
                                          <li><a href="{permalink}">{title}</a></li>'); ?>
                                    </ol>
                              </div>
                        </div>
                        <!-- 最新评论 -->
                        <div class="index-right-main">
                              <h2 class="index-right-main-title">最新评论</h2>
                              <div class="index-right-main-div new-comment">
                                    <ul>
                                        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                                        <?php while($comments->next()): ?>
                                        <li>
                                            <a href="<?php $comments->permalink(); ?>">
                                            <?php $comments->author(false); ?>：
                                                <span class="new-comment-hover">
                                                    <?php $comments->excerpt(15, ''); ?>
                                                </span>  
                                            </a>
                                        </li>
                                        <?php endwhile; ?>
                                    </ul>
                              </div>
                        </div>
                        <!-- 文章分类 -->
                        <div class="index-right-main">
                              <h2 class="index-right-main-title">文章分类</h2>
                              <div class="index-right-main-div index-class">
                                    <ul>
                                        <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}"><span class="index-class-badge">{count}</span>{name}</a></li>'); ?>  
                                    </ul>
                              </div>
                        </div>
                        <!-- 标签云 -->
                        <div class="index-right-main">
                              <h2 class="index-right-main-title">标签云</h2>
                              <div class="index-right-main-div index-tags">
                                <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud','ignoreZeroCount=1&limit=30')->to($tags); ?>
                                <?php if($tags->have()): ?>
                                <?php while ($tags->next()): ?>
                                <a href="<?php $tags->permalink();?>" class="label bg-info" title="<?php $tags->name(); ?>" data-toggle="tooltip"><?php $tags->name(); ?></a> 
                                <?php endwhile; ?>
                                <?php endif; ?>
                              </div>
                        </div>
