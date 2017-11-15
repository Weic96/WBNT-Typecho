function Other(){

      // 返回顶部
      function backTop(){
            var GTop = $(document).scrollTop();
            if (GTop > 300){
                  $(".top").css("display","block");
            }else {
                  $(".top").css("display","none");
            }
            setTimeout( backTop);
      };
       backTop();
      $(".top").click(function(){
            $("html,body").animate({scrollTop:0},400);
      })

	// Pjax加载动画
      // var Sheight = $(window).height();
	// var Swidth = $(window).width();
      // var Jtop = $(".loader").offset().top;
      // var Jleft = $(".loader").offset().left;
      // $(".pjax_loading").css({
      //       "width" : Swidth,
      //       "height" : Sheight
      // })
      // var loaderTop = (Sheight - Jtop) ;
      // var loaderLeft = (Swidth - Jleft) ;
      // $(".loader").css({
      //       "top" : loaderTop,
      //       "left" : loaderLeft
      // })

      // 文章页打赏
      $(".post-pay-btn").click(function(){
            $(".post-pay-img").slideToggle("slow");
      })

      // 评论标签
      $(".comments-neh").click(function(){
            $(".comments-neh-main").slideToggle("slow");
      })

      // 侧边栏
      $(".sidr-hide").click(function(){
            $(".index-right").hide();
            $(".index-left").animate({width:"100%"},400,function(){
                  $(".sidr-show").css("display","block");
            });
      })
      $(".sidr-show").click(function(){
            $(".index-left").animate({width:"66.66666667%"},400,function(){
                  $(".index-right").show();
                  $(".sidr-show").css("display","none");
                  $(".sidr-hide").css("display","block");
            });
      })

      // 评论表情
      $(".leng").click(function(){
            // // alert("..")
            var neh = $(".leng");
            // var neh_o = $neh.attr("src");
            emj()
            // // alert(neh_o)
            // $(".form-control").html("<img src=neh_o />")
      })

      function emj(){
            $(".form-control").html("<img  />");
            neh.attr("alt","aa")
      }

	// 代码高亮
	hljs.initHighlightingOnLoad();

	// 多说
	var dus=$(".ds-thread");
	if ($('.ds-thread').length > 0) {
       if (typeof DUOSHUO !== 'undefined') DUOSHUO.EmbedThread('.ds-thread');
       else $.getScript("http://dl.weic96.cn/duoshuo_embed.js"); }

}
