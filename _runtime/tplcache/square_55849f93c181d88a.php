<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(($_title)  !=  ""): ?><?php echo ($_title); ?> - <?php echo ($site["site_name"]); ?><?php else: ?><?php echo ($site["site_name"]); ?> - <?php echo ($site["site_slogan"]); ?><?php endif; ?></title>
<meta content="<?php if(($_keywords)  !=  ""): ?><?php echo ($_keywords); ?><?php else: ?><?php echo ($site["site_header_keywords"]); ?><?php endif; ?>" name="keywords">
<meta content="<?php if(($_description)  !=  ""): ?><?php echo ($_description); ?><?php else: ?><?php echo ($site["site_header_description"]); ?><?php endif; ?>" name="description">
<?php echo Addons::hook('public_meta');?>
<link href="__THEME__/css/css.php?t=css&f=global.css,module.css,menu.css,form.css,jquery.atwho.css&v=<?php echo ($site["sys_version"]); ?>.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="__THEME__/js/uploadify/uploadify.css?v=<?php echo ($site["sys_version"]); ?>" type="text/css">

<?php if(!empty($appCssList)): ?>
<?php if(is_array($appCssList)): ?><?php $i = 0;?><?php $__LIST__ = $appCssList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$cl): ?><?php ++$i;?><?php $mod = ($i % 2 )?><link href="<?php echo APP_PUBLIC_URL;?>/<?php echo ($cl); ?>?v=<?php echo ($site["sys_version"]); ?>" rel="stylesheet" type="text/css"/><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php endif; ?>
<script>
/**
 * 全局变量
 */
var SITE_URL  = '<?php echo SITE_URL; ?>';
var UPLOAD_URL= '<?php echo UPLOAD_URL; ?>';
var THEME_URL = '__THEME__';
var APPNAME   = '<?php echo APP_NAME; ?>';
var MID		  = '<?php echo $mid; ?>';
var UID		  = '<?php echo $uid; ?>';
var initNums  =  '<?php echo $initNums; ?>';
var SYS_VERSION = '<?php echo $site["sys_version"]; ?>'
var UMEDITOR_HOME_URL = '<?php echo __THEME__."/js/um/"; ?>';
var _CP       = '<?php echo C("COOKIE_PREFIX");?>';
// Js语言变量
var LANG = new Array();
</script>
<?php if(!empty($langJsList)) { ?>
<?php if(is_array($langJsList)): ?><?php $i = 0;?><?php $__LIST__ = $langJsList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><script src="<?php echo ($vo); ?>?v=<?php echo ($site["sys_version"]); ?>"></script><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php } ?>

<script type="text/javascript" src="__THEME__/js/js.php?t=js&&f=jquery-1.7.1.min.js,jquery.form.js,common.js,core.js,module.js,module.common.js,jwidget_1.0.0.js,jquery.atwho.js,jquery.caret.js,ui.core.js,ui.draggable.js"></script>
<script src="__THEME__/js/plugins/core.comment.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/plugins/core.digg.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<?php if(!empty($appJsList)): ?>
<?php if(is_array($appJsList)): ?><?php $i = 0;?><?php $__LIST__ = $appJsList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$cl): ?><?php ++$i;?><?php $mod = ($i % 2 )?><script src="<?php echo APP_PUBLIC_URL;?>/<?php echo ($cl); ?>?v=<?php echo ($site["sys_version"]); ?>" type="text/javascript"></script><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php endif; ?>
<?php echo Addons::hook('public_head',array('uid'=>$uid));?>
</head>
<body>

<!--手机APP下载-->
<div id="app_download">
  <a class="app_download" href="javascript:;"></a>
</div>
<div id="body_page" name='body_page'>
<div id="body-bg">
<?php $act = strtolower(APP_NAME).'_'.strtolower(MODULE_NAME); $navClass[$act]='current';$aClass[$act]='app'; ?>
<?php $act = strtolower(APP_NAME); $navClass[$act]='current';$aClass[$act]='app'; ?>
<div id="header" name="header"> <?php echo constant(" 未登录时 *");?>
  <?php if( !isset($_SESSION["mid"])): ?><div class="header-wrap">
      <div class="head-bd"> 
        <!-- logo -->
        <div class="logo" style="background:url('<?php echo ($ts["site"]["logo"]); ?>') no-repeat;"><a href="<?php echo SITE_URL;?>"></a></div>
        <!-- logo -->
        <div class="nav">
          <ul>
            <?php if(is_array($site_top_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_top_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$st): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li id="sec-nav-<?php echo ($st["navi_id"]); ?>" <?php if(APP_NAME == $st['app_name'] || $_GET['page'] == $st['app_name']): ?> class="current" <?php endif; ?>>
              <a href="<?php echo ($st["url"]); ?>" target="<?php echo ($st["target"]); ?>"  <?php if(APP_NAME == $st['app_name'] || $_GET['page'] == $st['app_name']): ?> class="app" <?php endif; ?> ><?php echo ($st["navi_name"]); ?></a>
            </li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div><?php endif; ?>
  <?php echo constant(" 登录后 *");?>
  <?php if(isset($_SESSION["mid"])): ?><div class="header-wrap">
      <div class="head-bd"> 
        <!-- logo -->
        <div class="logo" style="background:url('<?php echo ($site["logo"]); ?>') no-repeat;"><a href="<?php echo SITE_URL;?>"></a></div>
        <!-- logo -->
        <div class="nav">
          <ul>
          <?php if(is_array($site_top_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_top_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$st): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li _nav="sec-nav-<?php echo ($st["navi_id"]); ?>" <?php if(APP_NAME == $st['app_name'] || $_GET['page'] == $st['app_name']): ?> class="current" <?php endif; ?>>
              <a href="<?php echo ($st["url"]); ?>" target="<?php echo ($st["target"]); ?>"  <?php if(APP_NAME == $st['app_name'] || $_GET['page'] == $st['app_name']): ?> class="app" <?php endif; ?> ><?php echo ($st["navi_name"]); ?></a>
            </li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
            <!-- <li class="<?php echo ($navClass["square"]); ?>"><a class="<?php echo ($aClass["square"]); ?>" href="<?php echo U('square/index/index');?>" >首页</a></li>
            <li class="<?php echo ($navClass["public_index"]); ?>"><a class="<?php echo ($aClass["public_index"]); ?>" href="<?php echo U('public/index/index');?>">朋友圈</a></li>
            <li class="<?php echo ($navClass["weiba"]); ?>"><a class="<?php echo ($aClass["weiba"]); ?>" href="<?php echo U('weiba/index/index');?>" >微吧</a></li>
            <li class="<?php echo ($navClass["people"]); ?>"><a href="<?php echo U('people/index/index');?>"  class="app">找伙伴</a></li>
            <li style="*z-index:100;" model-node="application">
              <a href="javascript:;" rel="application-btn" class="app">更多</a>
              <div model-node="drop_menu_list" class="dropmenu" style="width:370px;left:-26px;display:none;opacity:0;z-index:100;">
                  <i class="arrow-mes"></i>
                  <ul class="acc-list app-list clearfix">
                      <?php if(is_array($site_nav_apps)): ?><?php $i = 0;?><?php $__LIST__ = $site_nav_apps?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$li): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li style="height:auto;"><a href="<?php echo U($li['app_name']);?>"><img src="<?php echo empty($li['icon_url_large']) ? APPS_URL.'/'.$li['app_name'].'/Appinfo/icon_app_large.png':$li['icon_url_large']; ?>" width="50" height="50" /><?php echo (getshort($li["app_alias"],4)); ?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                      <!-<li style="height:auto;"><a href="<?php echo U('public/App/addapp');?>"><img src="__THEME__/image/more.png" width="50" height="50" />更多应用</a></li>
                  </ul>
              </div>
            </li>-->
          </ul>
        </div>
        <?php if(($user["is_init"])  ==  "0"): ?><div class="person">
            <ul>
              <li class="dorp-right"><a href="<?php echo U('public/Passport/logout');?>" class="app name">退出</a></li>
              <li model-node="person" class="dorp-right"><a href="javascript:void(0);" class="app name" style="cursor:default">欢迎，<?php echo ($user['uname']); ?></a></li>
            </ul>
          </div>
          <?php else: ?>
          <div class="person">
            <ul class="clearfix">
              <li model-node="search" class="dorp-right"> 
                  <a href="javascript:void(0);" class="app search-btn"><img src="__THEME__/image/ico-search.png" /></a>
                  <!--<div class="search" model-node="drop_menu_list">-->
                  <div class="search">
                  <div id="mod-search" model-node="drop_search">
                    <form name="search_feed" id="search_feed" method="get" action="<?php echo U('public/Search/index');?>">
                      <input name="app" value="public" type="hidden"/>
                      <input name="mod" value="Search" type="hidden"/>
                      <input type="hidden" name="t" value="2"/>
                      <input type="hidden" name="a" value="public"/>
                      <dl>
                        <dt class="clearfix">
                          <input id="search_input" class="s-txt left"  type="text" placeholder="搜人/分享/微吧/帖子" value="" event-node="searchKey" name='k'  autocomplete="off">
                        </dt>
                      </dl>
                    </form>
                  </div>
                </div>
                <script type="text/javascript">
                       // $('#search_input').keydown(function(e) {
                       //         if (e.keyCode == 8) {
                       //             var len = $(this).val().length;
                       //             if (len == 1) {
                       //                 $(this).focus();
                       //                 $(this).val('');
                       //                 return false;
                       //             }
                       //         } else {
                       //             var val = $(this).val();
                       //             if (val == '搜人/分享/微吧/知识/帖子') {
                       //                 $(this).val('');
                       //             }
                       //         }
                       //     });
                       //  var valSearchChange = function(e) {
                       //         var ev = e || window.event;
                       //         ev.keyCode == 8;
                       //         alert(ev);
                       //         var text = $('#search_input').val();
                       //         alert(text);
                       //         if (text == '') {
                       //             $('#search_input').val('');
                       //         }
                       //     };
                       //      浏览器的输入的兼容性
                       //     if($.browser.msie && parseInt($.browser.version) < 9) {
                       //         $('#search_input').bind("propertychange", function(e) {
                       //             valSearchChange(e);
                       //         });
                       //     } else {
                       //         $('#search_input').bind("input", function() {
                       //             valSearchChange(e);
                       //         });
                       //     }
                       //     var searchSubmit = function() {
                       //         var val = $('#search_input').val();
                       //         if (getLength(val)) {
                       //             $('#search_feed').submit();
                       //             return false;
                       //         }
                       //     };
                </script> 
              </li>
              <!-- <li model-node="person" class="dorp-right"> <a href="<?php echo ($user['space_url']); ?>" class="username"><?php echo (getshort($user['uname'],6)); ?></a> </li> -->
              <li model-node="account" class="dorp-right"><a href="javascript:void(0);" class="app" rel="account-btn"><img rel="account-btn" src="__THEME__/image/ico-set.png" /></a>
                <div model-node="drop_menu_list" class="dropmenu" style="opacity:0;display:none;width:100px"> <i class="arrow-mes"></i>
                  <dl class="acc-list">
                    <dd><a href="<?php echo U('public/Profile/index',array('uid'=>$mid));?>"><i class="ico-myhome"></i>我的主页</a></dd>
                    <dd><a href="<?php echo U('public/Account/index');?>"><i class="ico-mysetup"></i>个人设置</a></dd>
                    <!--<dd><a href="<?php echo U('public/Rank/index','type=2');?>"><i class="ico-mypoints"></i>排行榜</a></dd>
                    <?php if(CheckTaskSwitch()): ?>
                      <dd><a href="<?php echo U('public/Task/index');?>"><i class="ico-mytask"></i>任务中心</a></dd>
                      <dd><a href="<?php echo U('public/Medal/index');?>"><i class="ico-mymedal"></i>勋章馆</a></dd>
                    <?php endif; ?> 
                    <?php if(!isVerified($user['uid'])): ?>
                    <dd><a href="<?php echo U('public/Account/authenticate');?>"><i class="ico-certification"></i>申请认证</a></dd>
                    <?php endif; ?>
                    <?php if(isInvite() && CheckPermission('core_normal','invite_user')): ?>
                    <dd><a href="<?php echo U('public/Invite/invite');?>"><i class="ico-invite"></i><?php echo L('PUBLIC_INVITE_COLLEAGUE');?></a></dd>
                    <?php endif; ?>-->
                    
                    <!-- <dd><a href="<?php echo U('public/SmallTools/weiboShare');?>">小工具</a></dd> --> 
                    
                    <!-- 个人设置菜单钩子 --> 
                    <?php echo Addons::hook('header_account_dropmenu');?>
                    <?php if(CheckPermission('core_admin','admin_login')){ ?>
                    <dd><a href="<?php echo U('admin');?>"><i class="ico-systemmanage"></i><?php echo L('PUBLIC_SYSTEM_MANAGEMENT');?></a></dd>
                    <?php } ?>
                    <dd class="border"><a href="<?php echo U('public/Passport/logout');?>"><i class="ico-layout"></i><?php echo L('PUBLIC_LOGOUT');?>>></a></dd>
                    <dd></dd>
                  </dl>
                </div>
              </li>
              <li model-node="notice" class="dorp-right" style="border-right:none;"><a href="javascript:void(0);" class="app" rel="notice-btn"><img rel="notice-btn" src="__THEME__/image/ico-mes.png" /></a>
                <div  class="dropmenu" model-node="drop_menu_list" style="height:322px;">
                </div>
              </li>
              
            </ul>
          </div>
          <?php if(MODULE_NAME !='Register'): ?>
          <div id="message_container" class="layer-massage-box" style="display:none">
            <ul class="message_list_container" >
              <li rel="new_folower_count" style="display:none"><span></span>，<a href="<?php echo U('public/Index/follower',array('uid'=>$mid));?>"><?php echo L('PUBLIC_FOLLOWERS_REMIND');?></a></li>
              <li rel="unread_comment" style="display:none"><span></span>，<a href="<?php echo U('public/Comment/index',array('type'=>'receive'));?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
              <li rel="unread_message" style="display:none"><span></span>，<a href="<?php echo U('public/Message');?>" ><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
              <li rel="unread_atme" style="display:none"><span></span>，<a href="<?php echo U('public/Mention');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
              <li rel="unread_notify" style="display:none"><span></span>，<a href="<?php echo U('public/Message/notify');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
              <li rel="unread_group_atme" style="display:none"><span></span>，<a href="<?php echo U('group/SomeOne/index');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
              <li rel="unread_group_comment" style="display:none"><span></span>，<a href="<?php echo U('group/SomeOne/index');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
            </ul>
            <a href="javascript:void(0)" onclick="core.dropnotify.closeParentObj()" class="ico-close1"></a> </div>
          <?php endif; ?><?php endif; ?>
      </div>
    </div>
    <?php if(MODULE_NAME != 'Search'): ?>
      <div id="search"  class="mod-at-wrap search_footer" model-node='search_footer' style="display:none;z-index:-1">
        <div class="search-wrap">
          <div class="input">
            <form id="search_form" action="<?php echo U('public/Search/index');?>" method="GET">
              <div class="search-menu" model-node='search_menu' model-args='a=<?php echo ($curApp); ?>&t=<?php echo ($curType); ?>'> <a href="javascript:;" id='search_cur_menu'><?php echo (($curTypeName)?($curTypeName):"全站"); ?><i class="ico-more"></i></a> </div>
              <input name="app" value="public" type="hidden" />
              <input name="mod" value="Search" type="hidden" />
              <input name="a" value="<?php echo ($curApp); ?>" id='search_a' type="hidden"/>
              <input name="t" value="<?php echo ($curType); ?>" id='search_t' type="hidden"/>
              <input name="k" value="<?php echo (t($_GET['k'])); ?>" type="text" class="s-txt" onblur="this.className='s-txt'" onfocus="this.className='s-txt-focus'" autocomplete="off">
              <a class="btn-red left" href="javascript:void(0);" onclick="$('#search_form').submit();"><span class="ico-search"></span></a>
            </form>
          </div>
        </div>
      </div>
      <div class="mod-at-wrap" id="search_menu" ison='no' style="display:none" model-node="search_menu_ul">
        <div class="mod-at">
          <div class="mod-at-list">
            <ul class="at-user-list">
              <li onclick="core.search.doShowCurMenu(this)" a='public' t='' typename='<?php echo L('PUBLIC_ALL_WEBSITE');?>'><?php echo L('PUBLIC_ALL_WEBSITE');?></li>
              <?php if(is_array($menuList)): ?><?php $i = 0;?><?php $__LIST__ = $menuList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$m): ?><?php ++$i;?><?php $mod = ($i % 2 )?><?php if($m['app_name'] == $curApp && $m['type_id'] == $curType){
                  $curTypeName = $m['type'];
                  } ?>
                <li onclick="core.search.doShowCurMenu(this)" a='<?php echo ($m["app_name"]); ?>' t='<?php echo ($m["type_id"]); ?>' typename='<?php echo ($m["type"]); ?>'><?php echo ($m["type"]); ?></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#mod-product dd").hover(function() {
            $(this).addClass("hover");
        },function() {
            $(this).removeClass("hover");
        });
        core.plugInit('search');

        //二级导航
        var qcloud={};
        $("[_nav]").hover(function(){
          var _nav = $(this).attr('_nav');
          var _li = $("li[_nav="+_nav+"]");
          var _menu = $('#'+_nav);

          clearTimeout( qcloud[ _nav + '_timer' ] );

          //边框
          if(_li.hasClass("current") && _menu.has("ul").length) _li.find("a").css("border-bottom","none");

          //箭头
          if(_menu.has("ul").length){
            _li.find(".arrow-mes").remove();
            var l_width = _li.css("width");
            var i_width = "16px";
            var left = (parseInt(l_width)-parseInt(i_width))/2+"px";
            var arrow_mes = "<i class=\"arrow-mes\" style=\"top:51px;left:"+left+"\";display:none;opacity:0;></i>";
            _li.append(arrow_mes);}

          //调整位置
          var l_left = _li.offset().left;

          //显示
          qcloud[ _nav + '_timer' ] = setTimeout(function(){
            if(_menu.has("ul").length){
              _menu.find("ul").css("left",l_left+17);
              _menu.stop(true,true).fadeIn("fast");
              _li.find(".arrow-mes").fadeIn("fast");
            }
          }, 150);
        },function(){
          var _nav = $(this).attr('_nav');
          var _li = $("li[_nav="+_nav+"]");
          var _menu = $('#'+_nav);
          clearTimeout( qcloud[ _nav + '_timer' ] );

          
          //边框
          if(_li.hasClass("current") && _menu.has("ul").length) $("li[_nav="+_nav+"]").find("a").css("border-bottom","#0096e6 4px solid");
          

          //隐藏
          qcloud[ _nav + '_timer' ] = setTimeout(function(){
            _menu.stop(true,true).fadeOut("fast");
            _li.find(".arrow-mes").fadeOut("fast");
          }, 150);

        })


        // $(".nav ul li a").each(function(){
        //   //判断是否有二级导航
        //   if($(this).parent().has('ul.sec-nav-detail').length){
        //     $(this).mouseover(function(){
        //       //边框
        //       if($(this).parent().hasClass("current")) $(this).css("border-bottom","none");
        //       //箭头
        //       var l_width = $(this).parent().css("width");
        //       var i_width = $(this).parent().find('i').css("width");1
        //       var left = (parseInt(l_width)-parseInt(i_width))/2+"px";
        //       $(this).parent().find('i').css("left",left);
        //       $(this).parent().find('i').show();

        //       //二级导航
        //       $(".sec-nav").remove();
        //       var sec_nav = "<div class=\"sec-nav\" class=\"sec-nav\"></div>";
        //       $("body").append(sec_nav);
        //       _dd = $(this).parent().find("ul.sec-nav-detail").clone();

        //       //获取li位置
        //       var l_left = $(this).parent().offset().left; 

        //       $(_dd).css("marginLeft",l_left);
        //       $(".sec-nav").html(_dd);
        //       $(".sec-nav").show();
        //     });

        //     $(this).mouseout(function(event){

        //       $(".sec-nav").bind("mouseover",function(){
        //         status = true;
        //       });

        //       setTimeout(function(){
        //         if(status == false){
        //           $(".sec-nav").hide();
        //         }else{
        //           return false;
        //         }
        //       },100);
        //     });
        //   }
        // })



    });
    core.plugFunc('dropnotify',function(){
        setTimeout(function(){
            core.dropnotify.init('message_list_container','message_container');
        },320);   
    });
    </script><?php endif; ?>
</div>
<!--二级导航-->
<div class="navigation-down">
  <?php if(is_array($site_top_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_top_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$st): ?><?php ++$i;?><?php $mod = ($i % 2 )?><div class="nav-down-menu" id="sec-nav-<?php echo ($st["navi_id"]); ?>" _nav="sec-nav-<?php echo ($st["navi_id"]); ?>">
    <div class="navigation-down-inner">
    <?php if( $st["child"] != '' ): ?><ul>
      <?php if(is_array($st["child"])): ?><?php $i = 0;?><?php $__LIST__ = $st["child"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$stc): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li><a href="<?php echo ($stc["url"]); ?>" target="<?php echo ($stc["target"]); ?>"><?php echo (getshort($stc["navi_name"],6)); ?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      </ul><?php endif; ?>
    </div>
  </div><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
</div>
<?php //出现注册提示的页面
  $show_register_tips = array('public/Profile','public/Topic','weiba/Index','channel/Index','public/Index','people/Index');
  if(!$mid && in_array(APP_NAME.'/'.MODULE_NAME,$show_register_tips)){ ?>
<?php $registerConf = model('Xdata')->get('admin_Config:register'); ?>
<!--未登录前-->
<div class="login-no-bg">
  <div class="login-no-box clearfix">
    <div class="login-reg right">
      <?php if($registerConf['register_type'] == 'open'){ ?>
      <a href="<?php echo U('public/Register/index');?>" class="btn-reg">立即注册</a>
      <?php } ?>
      <span>已有帐号？<a href="javascript:ui.quicklogin()">立即登录</a></span> </div>
    <p class="left"><span>欢迎来到<?php echo ($site["site_name"]); ?></span>赶紧注册与朋友们分享快乐点滴吧！</p>
  </div>
</div>
<?php } ?>
<div id="page-wrap" class="clearfix">
  <div id="top-wrap" class="mb20"> 
    <div id="col5" class="left"><!--收藏知识-->
<?php echo Addons::hook('show_ad_space', array('place'=>'home_top'));?>
</div>
    <div id="col3" class="right">
	<div class="right-wrap" id="login-status">
	<!-- 个人信息 -->
	<?php if($mid==0){ ?>
    	<?php echo W('VisitorLogin');?>
    <?php } else { ?>
		<?php echo W('UserInformation', array('uid'=>$mid, 'tpl'=>'right', 'isReturn'=>$isReturn));?>
	<?php } ?>
    </div>
</div>
  </div>
  <div id="main-wrap">
    <div id="col8" class="st-index-main">
      <div class="st-bg clearfix"> 
        <!--推荐阅读-->
<?php if($channel){ ?>
<link rel="stylesheet" href="__APP__/channel.css" type="text/css" />
<script type="text/javascript" src="__APP__/channel.js"></script> 
<script type="text/javascript" src="__THEME__/js/module.channel.js"></script>
<div class="sq-top">
  <h1> 推荐阅读<span>频道</span> </h1>
  <a href="<?php echo U('channel/Index/index');?>" class="more">阅读更多</a>
</div>
<div class="channel-list mb10" id="channel-list">
    <?php if(is_array($channel)): ?><?php $i = 0;?><?php $__LIST__ = $channel?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dl  <?php if(is_integer(($key + 1) / 4)): ?>style="margin-right:0;"<?php endif; ?>>	
	    <div class="channel-item clearfix">
	      <div class="channel-tit"><?php if($vo['img']): ?><a href="<?php echo U('public/Profile/feed', array('feed_id'=>$vo['feed_id'],'uid'=>$vo['uid']));?>" class="img"><img src="<?php echo ($vo["img"]); ?>" width="236" height="177" /></a><?php endif; ?><p class="content" style="<?php echo ($vo['img']?'':'height:224px;'); ?>"><a href="<?php echo U('public/Profile/feed', array('feed_id'=>$vo['feed_id'],'uid'=>$vo['uid']));?>"><?php echo ($vo["content"]); ?></a></p></div>
	      <!--<div class="channel-info clearfix"><span class="f8 left"><?php echo (getshort($vo["categoryInfo"]["0"]["title"],14)); ?></span><span class="right f8"><span title="赞数"><i class="i-post-scan"></i><?php echo (($vo["digg_count"])?($vo["digg_count"]):0); ?></span><span title="评论"><i class="i-post-comment"></i><?php echo (($vo["comment_cout"])?($vo["comment_cout"]):0); ?></span></span></div>-->
	    </div>
	    </dl><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
</div>
<?php } ?>

        <!--热门帖子-->
<?php if($weiba_recommend){ ?>
<div class="sq-top">
  <h1>
  热门帖子<span>微吧</span>
  </h1>
  <a href="<?php echo U('weiba/Index/index');?>" class="more">阅读更多</a> </div>
<div class="weiba-list mb10">
  <!-- 精彩推荐 -->
  <div class="weiba-list-l">
    <div class="weiba-list-l-content">
      <div class="weiba-list-l-title">精彩推荐</div>
      <div class="weiba-list-l-ul">
        <!-- 第一个帖子图片 -->
        <div class="weiba-list-l-img">
          <a href="<?php echo U('weiba/Index/postDetail','post_id='.$weiba_hot[0]['post_id']);?>"><img src="<?php echo ($weiba_hot[0]['index_img']); ?>"/></a>
        </div>
        <div class="weiba-list-l-post">
          <ul>
          <?php if(is_array($weiba_hot)): ?><?php $i = 0;?><?php $__LIST__ = $weiba_hot?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li <?php if($key == 0): ?>style="border-bottom:none;padding-bottom:0px;"<?php elseif($key == 5): ?>border-bottom:none;<?php endif; ?>>
                <a href="<?php echo U('weiba/Index/postDetail','post_id='.$vo['post_id']);?>" title="<?php echo ($vo["title"]); ?>"><i class="ico-dot1"></i><?php echo (getshort($vo["title"],20)); ?></a>
                <?php if($key == 0): ?><p><?php echo (getshort($vo["content"],40)); ?></p><?php endif; ?>
            </li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- 推荐微吧 -->
  <div class="weiba-list-r">
    <ul class="sq-weibalist clearfix">
    <?php if(is_array($weiba_recommend)): ?><?php $i = 0;?><?php $__LIST__ = array_slice($weiba_recommend,0,4) ?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li <?php if(is_integer(($key + 1) /2)): ?>style="margin-right:0;"<?php endif; ?>>
        <div class="weiba-list-t">
          <div class="weiba-logo left"><a href="<?php echo U('weiba/Index/detail','weiba_id='.$vo['weiba_id']);?>"><img src="<?php echo ($vo["avatar_middle"]); ?>" /></a></div>
          <div class="weiba-right">
            <h2 class="weiba-tit"><a href="<?php echo U('weiba/Index/detail','weiba_id='.$vo['weiba_id']);?>"><?php echo (getshort($vo["weiba_name"],20)); ?></a></h2>
            <p class="weiba-data"><span>成员:<?php echo ($vo["follower_count"]); ?></span>&nbsp;&nbsp;<span>新帖:<?php echo ($vo["new_count"]); ?></span></p>
            <p class="weiba-prof"><?php echo (getshort($vo["intro"],27)); ?></p>
          </div>
        </div>
        <div class="weiba-list-b">
        <?php if($vo['post']){ ?>
          <dl>
  	        <?php if(is_array($vo["post"])): ?><?php $i = 0;?><?php $__LIST__ = $vo["post"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$v): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dd><i class="ico-dot"></i><a href="<?php echo U('weiba/Index/postDetail','post_id='.$v['post_id']);?>" title="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></dd><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
          </dl>
        <?php } ?>
        </div>
      </li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
    </ul>
  </div>
</div>
<?php } ?>

        <!--推荐认证用户-->
<?php if( !isset($_SESSION["mid"])): ?><style type="text/css">
    .profile-info-t dt .right{display: none;}
  </style><?php endif; ?>
<?php if($user_recommend){ ?>
<div class="sq-top mr-10">
  <h1> 推荐认证用户<span>找伙伴</span> </h1>
  <a href="<?php echo U('people/Index/index');?>" class="more">更多用户</a></div>
<div class="people-list">
  <div class="people-list-l">
    <!--认证用户-->
    <ul class="clearfix">
      <?php if(is_array($user_recommend)): ?><?php $i = 0;?><?php $__LIST__ = $user_recommend?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li 
        <?php if(is_integer(($key + 1) /2)): ?>
        style="margin-right:0;"
        <?php endif; ?>
        >
        <div class="people-list-l-left"><a href="<?php echo U('public/Profile/index', array('uid'=>$vo['uid']));?>" title="<?php echo ($vo["uname"]); ?>"><img  src="<?php echo ($vo["avatar_small"]); ?>" /></a></div>
        <div class="people-list-l-right">
          <dl>
            <dt class="clearfix"><a href="<?php echo ($vo["space_url"]); ?>" target="_blank" event-node="face_card" uid="<?php echo ($vo["uid"]); ?>"><?php echo ($vo["uname"]); ?></a><div class="right">
              <?php echo W('FollowBtn',array('fid'=>$vo['uid'],'uname'=>$vo['uname'],'follow_state'=>$vo['follow_state'],'refer'=>'', 'type'=>'related'));?></div></dt>
              <dd class="from"><?php echo (getshort($vo['intro'],40)); ?></dd>
          </dl>
        </div>
        </li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
    </ul>
  </div>
  <div class="people-list-r">
    <div class="people-list-r-head">
      <div class="people-list-r-head-avatar">
        <a href="<?php echo U('public/Profile/index', array('uid'=>$_user_recommend['uid']));?>"><img src="<?php echo ($_user_recommend["avatar_middle"]); ?>"/></a>
      </div>
      <div class="people-list-r-head-info">
        <dl>
          <dt><a href="<?php echo U('public/Profile/index', array('uid'=>$_user_recommend['uid']));?>" event-node="face_card" uid="<?php echo ($_user_recommend["uid"]); ?>"><?php echo ($_user_recommend["uname"]); ?></a></dt>
          <!-- 简介 -->
          <dd class="mt10 intro"><?php echo (getshort($_user_recommend["intro"],50)); ?></dd>
          <!-- 认证信息 -->
          <dd class="mt10 cert_info <?php echo ($_user_recommend['verified_info']['icon']); ?>">认证：<?php echo ($_user_recommend['verified_info']['info']); ?></dd>
        </dl>
      </div>
    </div>
    <div class="people-list-r-images">
      <!-- 分享配图 -->
      <?php if(is_array($_user_recommend_feedimages)): ?><?php $i = 0;?><?php $__LIST__ = $_user_recommend_feedimages?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><a href="<?php echo U('public/Profile/feed',array('feed_id'=>$vo['feed_id'],'uid'=>$vo['uid']));?>" title="<?php echo ($vo["title"]); ?>"><img src="<?php echo ($vo["src"]); ?>" <?php if($key == 3): ?>style="margin-right:0px;"<?php endif; ?>/></a><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
    </div>
    <div class="people-list-r-posts">
      <!-- 帖子 -->
      <ul>
      <?php if(is_array($_user_recommend_posts)): ?><?php $i = 0;?><?php $__LIST__ = $_user_recommend_posts?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li <?php if($key == 4): ?>style="border-bottom:none;"<?php endif; ?>>
          <a href="<?php echo U('weiba/Index/postDetail','post_id='.$vo['post_id']);?>" title="<?php echo ($vo["title"]); ?>"><i class="ico-dot1"></i><?php echo (getshort($vo["title"],20)); ?></a>
        </li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<?php } ?>

      </div>
    </div>
  </div>
</div>
<div class="footer-wrap">
  <div class="footer">
    <div class="login-footer">
      <div class="attend-official clearfix">
        <dl>
          <dt>
            <div class="mb15">关注我们</div>
            <a href="<?php echo ($GLOBALS["ts"]["site"]["sina_weibo_link"]); ?>" target="_blank" rel="nofollow me"><i class="ico-weibo"></i>加关注</a>
            <!--<a><i class="ico-weixin"></i>加关注</a>-->
          </dt>
          <dd><img src="<?php echo getAttachUrlByAttachId($GLOBALS['ts']['site']['site_qr_code']);?>"></dd>
        </dl>
      </div>
      <?php if(!empty($site_bottom_nav) && $site_bottom_child_nav){ ?>
      <div class="foot clearfix right">
        <?php if(is_array($site_bottom_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_bottom_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$nv): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dl>
            <dt><a href="<?php echo ($nv["url"]); ?>" target="<?php echo ($nv["target"]); ?>"><?php echo ($nv['navi_name']); ?></a></dt>
            <?php if(is_array($nv["child"])): ?><?php $i = 0;?><?php $__LIST__ = $nv["child"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$cv): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dd><a href="<?php echo ($cv["url"]); ?>" target="<?php echo ($cv["target"]); ?>"><?php echo ($cv['navi_name']); ?></a></dd><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
          </dl><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      </div>
      <?php } else if(!empty($site_bottom_nav)) { ?>
      <div class="foot foot1 right clearfix">
        <?php if(is_array($site_bottom_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_bottom_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$nv): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dl>
            <dt><a href="<?php echo ($nv["url"]); ?>" target="<?php echo ($nv["target"]); ?>"><?php echo ($nv['navi_name']); ?></a></dt>
          </dl><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      </div>
      <?php } ?>
      <div class="copy-right">
      <p><?php echo ($GLOBALS["ts"]["site"]["site_footer_des"]); ?></p>
      <p class="f8">Powered by <a href="http://www.thinksns.com">ThinkSNS</a>&nbsp;<?php echo ($GLOBALS["ts"]["site"]["site_footer"]); ?> </p>
      </div>
    </div>
  </div>
  <!--footer end--> 
  
</div>
<!--page end--> 
<?php echo Addons::hook('public_footer');?> 
<!-- 统计代码-->
<div id="site_analytics_code" style="display:none;"> <?php echo (base64_decode($site["site_analytics_code"])); ?> </div>
<?php if(($site["site_online_count"])  ==  "1"): ?><script src="<?php echo SITE_URL;?>/online_check.php?uid=<?php echo ($mid); ?>&uname=<?php echo ($user["uname"]); ?>&mod=<?php echo MODULE_NAME;?>&app=<?php echo APP_NAME;?>&act=<?php echo ACTION_NAME;?>&action=trace"></script><?php endif; ?>
<script>
  //底部置底
  var head_height = $("#body-bg").css("padding-top");
  var footer_height = $(".footer-wrap").height();
  var footer_margin_top = $(".footer-wrap").css("margin-top");
  var content_height = $("#page-wrap").height();

  var window_height = $(window).height();
  var min_height = Number(window_height)-parseInt(head_height)-Number(footer_height)-parseInt(footer_margin_top)-1;
  if(content_height < min_height){
    if($("#main-wrap").length > 0){
      $("#main-wrap").css("min-height",min_height);
    }else{
      $("#page-wrap").css("min-height",min_height);
    }
  }
</script>
</body>
</html>