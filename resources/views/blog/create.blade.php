
<!DOCTYPE html>
<html lang="zh" class="night-node">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="baidu-site-verification" content="MfC8ppEukL" />
        <meta baidu-gxt-verify-token="fa750b19bb54c9ad03503638f41923db">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="ocWhnRUAxIdg75kkzSvGtLEVOA6HPvRoMkb04j4f">

                    <title>新建文章 | Laravel China 社区 </title>
            <meta name="description" content="我们是高品质的 Laravel 开发者社区，致力于为 Laravel 开发者提供一个分享创造、结识伙伴、协同互助的论坛。" />
            <meta name="keywords" content="laravel,laravel论坛,laravel社区,laravel教程,laravel视频,laravel开源,laravel新手,laravel5" />
        
        <meta name="author" content="Summer" />

                    <link rel="shortcut icon" href="https://cdn.learnku.com//uploads/communities/WtC3cPLHzMbKRSZnagU9.png!/both/44x44"/>
        
        <!-- Styles -->
        <link href="https://cdn.learnku.com//build/css/df80a43d32032bc8fda1-vendors.css" rel="stylesheet">
        <link href="https://cdn.learnku.com//build/css/5c391c608e2a590ed52f-app.css" rel="stylesheet">

            </head>

    <body class=" articles-create-page">

    <!-- 为 Pjax 和模板加载优化，只能放这里 -->
    <script>
        window.Laravel = {"csrfToken":"ocWhnRUAxIdg75kkzSvGtLEVOA6HPvRoMkb04j4f"}
        window.Config = {
            'GA_Tracking_ID': 'UA-133323996-1',
            'user_id': 57796,
            'is_student' : 'yes',
            'search_user_id': 0,
            'cdn_domain': 'cdn.learnku.com',
            'domain': 'learnku.com',
            'request_interval': 600000, // 消息通知检测周期
            'notification_count': 0,
            'token': 'ocWhnRUAxIdg75kkzSvGtLEVOA6HPvRoMkb04j4f',
            'environment': 'production',
            'url': 'https://learnku.com',
            'tags_url': '',
            'scroll_to_top': true,
            'community': {
                'id': 1,
                'name': 'Laravel',
                'favicon': 'https://cdn.learnku.com//uploads/communities/WtC3cPLHzMbKRSZnagU9.png!/both/44x44'
            },
            'routes': {
                'notificationsCount' : 'https://learnku.com/notifications/count',
                'upload_image' : 'https://learnku.com/courses/upload_image',
                                    // 社区搜索
                    'api_search' : 'https://learnku.com/communities/laravel/api_search',
                                'collections_store' : 'https://learnku.com/collections',
                'collections_my' : 'https://learnku.com/collections/my/ajax',
                'annotations_store' : 'https://learnku.com/annotations',
                'annotations_destroy' : 'https://learnku.com/annotations/destroy',
                'annotations_update' : 'https://learnku.com/annotations/update',
                'annotation_setting' : 'https://learnku.com/users/settings/annotation_setting',
            },
            'cdnDomain': 'https://cdn.learnku.com/',
            'overlay': '',
            'following_users': [],
            'search_type': 'standard',
            'book_id': 0,
            'is_docs': "no",
            'article_id': 0,
            'topic_id': 0,
            'user_settings': {
                'visit_topic_patches_page': false,
                'annotation_disabled': 'no',
            },
            'can': {},
            'editor': {},
            'destroyeditor_id' : {
                            },

            'content': {}
        };

        var ShowCrxHint = 'no';

        function onWXWebView() {
            $('.wechat-login-link').attr("href", "https://learnku.com/auth/oauth?driver=wechat_client")
            $('.show-on-wechat-view').show();
        }
        if (typeof WeixinJSBridge == "object" && typeof WeixinJSBridge.invoke == "function") {
            onWXWebView();
        } else {
            if (document.addEventListener) {
                document.addEventListener("WeixinJSBridgeReady", onWXWebView, false);
            } else if (document.attachEvent) {
                document.attachEvent("WeixinJSBridgeReady", onWXWebView);
                document.attachEvent("onWeixinJSBridgeReady", onWXWebView);
            }
        }

    </script>

    <style>

        .ui.top.menu {
            border-top: 4px solid #00b5ad;
        }

        .ui.fluid.search .results {
            width: 550px;
        }

        @media  only screen and (max-width: 767px) {
            .ui.top.menu > .ui.container {
                height: 52px;
                flex-direction: initial;
            }
        }

        
/* 顶部导航栏 */
.ui.top.menu {
    border-top: 4px solid #f4645f;
}

/* 右边导航栏顶部样式 */
.ui.top-color.segment:not(.inverted) {
    border-top: 2px solid #f4645f;
}

/* 右边导航栏顶部样式 */
.ui.top-color.card:not(.inverted) {
    border-top: 2px solid #f4645f;
}

/* 主要按钮 */

.ui.primary.buttons .button, .ui.primary.button {
    background-color: #f4645f;
    border-color: #f4645f;
}
/* 主要按钮选中状态 */
.ui.primary.buttons .button:hover, .ui.primary.button:hover,.ui.primary.button:active, .ui.primary.buttons .button:active ,  .ui.primary.button:focus, .ui.primary.buttons .button:focus, .ui.primary.active.button, .ui.primary.button .active.button:active, .ui.primary.buttons .active.button, .ui.primary.buttons .active.button:active{
    background-color: #f4645f;
    border-color: #f4645f;
}

/* 外框按钮 */
.ui.basic.primary.buttons .button, .ui.basic.primary.button {
    color: #f4645f !important;
    box-shadow: 0px 0px 0px 1px #f4645f inset !important;
}

/* 外框按钮选中状态 */
.ui.basic.primary.buttons .button:hover, .ui.basic.primary.button:hover {
    color: #f4645f !important;
    box-shadow: 0px 0px 0px 1px #f4645f inset !important;
}
.ui.basic.primary.buttons .active.button, .ui.basic.primary.active.button {
    color: #f4645f !important;
    box-shadow: 0px 0px 0px 1px #f4645f inset !important;
}

.ui.basic.primary.buttons .button:active, .ui.basic.primary.button:active, .ui.basic.primary.buttons .active.button, .ui.basic.primary.active.button, .ui.basic.buttons .button:hover, .ui.basic.button:hover,.ui.basic.primary.buttons .button:focus, .ui.basic.primary.button:focus {
    box-shadow: 0px 0px 0px 1px #f4645f inset !important;
}

.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    background-color: #f4645f;
    border-color: #f4645f;
}
.pagination>li>a, .pagination>li>span {
    color: #f4645f;
}

        
        .footer {
            max-height: max-content;
        }

    </style>

        

        

        <div class="ui top menu sidebar stackable">
            <div class="item">
                                    <img class="ui image" style="width:26px;height:26px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/WtC3cPLHzMbKRSZnagU9.png!/both/44x44">
                    <span class="site-name ml-2">Laravel</span>
                            </div>



<form class="ui fluid category  item secondary" action="https://learnku.com/laravel/search" method="GET">
  <div class="ui icon input">
    <input class="prompt" name="q" type="text" placeholder="搜索" value="">
    <i class="search icon"></i>
  </div>
</form>


            <a href="https://learnku.com/laravel" class="item secondary">
                <i class="icon list"></i> 话题列表
            </a>

                            <a href="https://learnku.com/laravel/wikis" class="item secondary">
                    <i class="icon wikipedia"></i> 社区 Wiki
                </a>

                <a href="https://learnku.com/laravel/c/translations" class="item">
                    <i class="icon translate"></i> 优质外文
                </a>

                <a href="https://learnku.com/laravel/c/jobs" class="item">
                    <i class="icon suitcase"></i> 招聘求职
                </a>

                <a href="https://learnku.com/laravel/courses" class="item">
                    <i class="icon book"></i> Laravel 实战教程
                </a>

                <a href="https://learnku.com/laravel/docs" class="item">
                    <i class="icon text file outline"></i> 社区文档
                </a>
            
            
                <a class="item" href="https://learnku.com/notifications/unread" title="消息通知">
                    <i class="icon alarm outline"></i>
                    未读消息数

                    <div class="ui basic  left pointing label">
                        0
                    </div>
                </a>

                <a href="https://learnku.com/users/57796" class="item">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/avatars/57796_1582273588.jpeg!/both/100x100"> &nbsp;
                    lianleilei_php
                </a>
                    </div>

                            
        <div class="pusher in-editor-view">

            <div class="main container">

<nav class="ui main borderless menu top stackable topnav" id="topnav">
    <div class="ui container">

      <div class="ui inline scrolling community-nav dropdown mr-2" style="padding-left: 22px;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;">
        <div class="text site-logo" style="color:#888888;display: flex;">

                            <img class="ui image" style="width:26px;height:26px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/WtC3cPLHzMbKRSZnagU9.png!/both/44x44">
                <span class="site-name">Laravel</span>
                        <i class="dropdown icon ml-3"></i>
        </div>
        <div class="menu ml-4 communities" style="max-height: 520px;padding: 8px;">

            <div class="ui icon search input" style="width: 172px;float:left;">
              <i class="search icon"></i>
              <input type="text" placeholder="搜索社区">
            </div>

              <a class="item pr-3 mt-2" href="https://learnku.com">
                <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201901/24/1/OyBnfB2vlk.png!/both/44x44"> 首页
              </a>

              <a class="item pr-3 mt-2" href="https://learnku.com/communities">
                <i class="icon sitemap" style="margin-right: 12px;font-size: 16px!important;"></i> <span class="text">所有社区</span>

                                    <div class="ui red tiny left pointing label " style="position: relative;top: -1px;margin-left: 4px;">NEW</div>
                              </a>

              <div class="divider clearfix"></div>

                        
                                        <a class="item" href="https://learnku.com/laravel" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/WtC3cPLHzMbKRSZnagU9.png!/both/44x44"> Laravel
                      </a>
                                        <a class="item" href="https://learnku.com/go" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/sNljssWWQoW6J88O9G37.png!/both/44x44"> Go
                      </a>
                                        <a class="item" href="https://learnku.com/vuejs" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/hIZjRRdF8oVYZy69XJnT.png!/both/44x44"> Vue.js
                      </a>
                                        <a class="item" href="https://learnku.com/php" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/Y7fElYYwCFjTTXCdwPNW.png!/both/44x44"> PHP
                      </a>
                                        <a class="item" href="https://learnku.com/python" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/mTBLIP7o0gVGn3ZCphpN.png!/both/44x44"> Python
                      </a>
                                        <a class="item" href="https://learnku.com/mysql" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201908/18/1/yAH1hJ3pZF.png!/both/44x44"> MySQL
                      </a>
                                        <a class="item" href="https://learnku.com/ios" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/0MWz89TgPG0AaPbULcWT.png!/both/44x44"> iOS
                      </a>
                                        <a class="item" href="https://learnku.com/java" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/h3Xef7s3mLKYmqwBRIiA.png!/both/44x44"> Java
                      </a>
                                        <a class="item" href="https://learnku.com/weapp" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201908/12/1/NsscHkb1Mo.jpg!/both/44x44"> 微信小程序
                      </a>
                                        <a class="item" href="https://learnku.com/lifecoder" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/iAphQ2R2SYGDdQ6cd7aD.png!/both/44x44"> 终身编程者
                      </a>
                                        <a class="item" href="https://learnku.com/mac" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/wZYaiK95EtvSyN8yliRJ.jpeg!/both/44x44"> Mac User
                      </a>
                                        <a class="item" href="https://learnku.com/rust" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/Qj48vezkYfZM1ZM5Y75X.png!/both/44x44"> Rust
                      </a>
                                        <a class="item" href="https://learnku.com/elasticsearch" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201908/10/25425/QdtUV2rox6.png!/both/44x44"> Elasticsearch
                      </a>
                                        <a class="item" href="https://learnku.com/f2e" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/DGHjM6p2qdamHmFJZt9g.jpg!/both/44x44"> F2E 前端
                      </a>
                                        <a class="item" href="https://learnku.com/flutter" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/Jd5vOXUVrCpP4zT90EwX.jpg!/both/44x44"> Flutter
                      </a>
                                        <a class="item" href="https://learnku.com/lk" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/b1qLi8CKYnkipeMwdvPU.png!/both/44x44"> LK
                      </a>
                                        <a class="item" href="https://learnku.com/leetcode" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201909/24/16817/yJFox5fIbz.jpeg!/both/44x44"> LeetCode（力扣）
                      </a>
                                        <a class="item" href="https://learnku.com/techwriting" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/nq5yC7ux49YEbaDTQilo.png!/both/44x44"> 写作的艺术
                      </a>
                                        <a class="item" href="https://learnku.com/nodejs" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201908/09/1/DUgy6bxrAk.png!/both/44x44"> Node.js
                      </a>
                                        <a class="item" href="https://learnku.com/server" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/pwwWCCpPeKm8z3HEubmo.png!/both/44x44"> Server
                      </a>
                                        <a class="item" href="https://learnku.com/spring" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/6boEYZFYLzAxXXwzKgvo.png!/both/44x44"> Spring
                      </a>
                                        <a class="item" href="https://learnku.com/database" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/ceowUfx7bxLyyng5ykyu.png!/both/44x44"> Database
                      </a>
                                        <a class="item" href="https://learnku.com/devtools" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/0QFgKXFJBOmsQNf47XOY.png!/both/44x44"> DevTools
                      </a>
                                        <a class="item" href="https://learnku.com/pm" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201909/10/1/fWW5khCQc2.png!/both/44x44"> 产品经理
                      </a>
                                        <a class="item" href="https://learnku.com/buffalo" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/7EKG65w4CxOppJgBg5fU.png!/both/44x44"> Buffalo
                      </a>
                                        <a class="item" href="https://learnku.com/ai" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/wIJbVQ4zbj4KCWL9JFFt.png!/both/44x44"> AI
                      </a>
                                        <a class="item" href="https://learnku.com/tensorflow" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/nd6liA9wYbKq2qgjCNkK.png!/both/44x44"> TensorFlow
                      </a>
                                        <a class="item" href="https://learnku.com/rpi" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/vFzRGXNPaXAaF4blGlVr.jpg!/both/44x44"> Raspberry Pi
                      </a>
                                        <a class="item" href="https://learnku.com/security" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/qXmY3Rxq5P06BcPT89D2.png!/both/44x44"> Security
                      </a>
                                        <a class="item" href="https://learnku.com/cs" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/BTBwRdYCj8UFXIjMqEbG.jpg!/both/44x44"> Computer Science
                      </a>
                                        <a class="item" href="https://learnku.com/kotlin" style="padding-right: 2.2em!important;">
                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/Ryu26W0oD4PPEwffiXAd.png!/both/44x44"> Kotlin
                      </a>
                              

        </div>
    </div>

        <a class="item header right menu " style="display:none">
            <i class="icon align justify"></i>
        </a>

        <a href="https://learnku.com/laravel" class="item secondary">
    社区
</a>




                <a href="https://learnku.com/laravel/wikis" class="item secondary">
                    Wiki
                </a>
            <div class="ui simple item dropdown article stackable nav-user-item  secondary">
            教程  <i class="dropdown icon"></i>

            <div class="ui menu stackable">
                <a href="https://learnku.com/laravel/courses" class="item">
                    <i class="icon home"></i> Laravel 实战教程首页
                </a>

                                    <a class="item" href="https://learnku.com/courses/laravel-essential-training/8.x" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201810/26/1/MYg2QNQfss.png!/both/200x200" style="width:20px;height:20px;">
                        《L01 Laravel 教程 - Web 开发实战入门》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/laravel-intermediate-training/8.x" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201810/26/1/Eya5MlZCuH.png!/both/200x200" style="width:20px;height:20px;">
                        《L02 Laravel 教程 - Web 开发实战进阶》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/laravel-advance-training/8.x" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201810/26/1/LEJyMUoXVQ.png!/both/200x200" style="width:20px;height:20px;">
                        《L03 Laravel 教程 - 实战构架 API 服务器》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/laravel-weapp/2.0" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201810/26/1/YtwiopnTgn.png!/both/200x200" style="width:20px;height:20px;">
                        《L04 Laravel 教程 - 微信小程序从零到发布》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/laravel-shop/8.x" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201810/26/1/mj8qSkmZzw.png!/both/200x200" style="width:20px;height:20px;">
                        《L05 Laravel 教程 - 电商实战》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/ecommerce-advance/7.x" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201810/26/1/lto59p5rEM.png!/both/200x200" style="width:20px;height:20px;">
                        《L06 Laravel 教程 - 电商进阶》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/laravel-testing/8.x" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201902/15/1/vPC8DwzaJC.jpg!/both/200x200" style="width:20px;height:20px;">
                        《L07 Laravel 教程 - TDD 测试》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/laravel-package/2019" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201808/06/1/S5h9WvQSk4.png!/both/200x200" style="width:20px;height:20px;">
                        《LX1 Laravel / PHP 扩展包视频教程》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/creating-package" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201807/23/1/NCEii0F1bc.png!/both/200x200" style="width:20px;height:20px;">
                        《LX2 PHP 扩展包实战教程 - 从入门到发布》
                    </a>
                                    <a class="item" href="https://learnku.com/courses/laravel-performance/6.x" style="padding-right: 36px!important;">
                        <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201906/17/1/rIC2Vg4qYB.jpg!/both/200x200" style="width:20px;height:20px;">
                        《LX3 Laravel 性能优化入门》
                    </a>
                            </div>
        </div>
    
    <div class="ui simple item dropdown article stackable nav-user-item secondary">
        文档  <i class="dropdown icon"></i>

        <div class="ui menu stackable">
            <a href="https://learnku.com/laravel/docs" class="item">
                <i class="icon home"></i> 社区文档首页
            </a>

                            <a class="item" href="https://learnku.com/docs/laravel/8.x" style="padding-right: 36px!important;">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201802/28/1/Jk8mC7SGI5.jpg!/both/200x200" style="width:20px;height:20px;">
                    《Laravel 中文文档》
                </a>
                            <a class="item" href="https://learnku.com/docs/laravel-specification/7.x" style="padding-right: 36px!important;">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201803/08/1/mIpeaUvQ7Y.jpeg!/both/200x200" style="width:20px;height:20px;">
                    《 Laravel 项目开发规范》
                </a>
                            <a class="item" href="https://learnku.com/docs/laravel-development-environment/8.x" style="padding-right: 36px!important;">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201801/24/1/rgMAkwm5JX.jpeg!/both/200x200" style="width:20px;height:20px;">
                    《构建 Laravel 开发环境》
                </a>
                            <a class="item" href="https://learnku.com/docs/dcat-admin/2.x" style="padding-right: 36px!important;">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/202004/26/38389/bSmScqqa42.png!/both/200x200" style="width:20px;height:20px;">
                    《Dcat Admin 中文文档》
                </a>
                            <a class="item" href="https://learnku.com/docs/laravel-cheatsheet/8.x" style="padding-right: 36px!important;">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201905/07/1/zSmurVl96q.jpg!/both/200x200" style="width:20px;height:20px;">
                    《Laravel 速查表》
                </a>
                            <a class="item" href="https://learnku.com/docs/nova/1.0" style="padding-right: 36px!important;">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201808/24/1/bw0vrGlJAg.png!/both/200x200" style="width:20px;height:20px;">
                    《Laravel Nova 中文文档》
                </a>
                            <a class="item" href="https://learnku.com/docs/lumen/6.x" style="padding-right: 36px!important;">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201806/26/1/YiQbmFYoaK.png!/both/200x200" style="width:20px;height:20px;">
                    《Lumen 中文文档》
                </a>
                            <a class="item" href="https://learnku.com/docs/dingo-api/2.0.0" style="padding-right: 36px!important;">
                    <img class="ui avatar image" src="https://cdn.learnku.com/uploads/images/201803/13/1/DCYvMliGXu.jpg!/both/200x200" style="width:20px;height:20px;">
                    《Dingo API 中文文档》
                </a>
                    </div>
    </div>


<form class="ui fluid category search item secondary hide-on-991" action="https://learnku.com/laravel/search" method="GET">
  <div class="ui icon input">
    <input class="prompt" name="q" type="text" placeholder="搜索" value="">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</form>

<div class=" right menu stackable secondary">
            <div class="ui simple item dropdown article stackable nav-user-item  secondary">
            <i class="icon paint brush"></i>  <i class="dropdown icon"></i>

            <div class="ui menu stackable">
                <a href="https://learnku.com/articles/create" class="item no-pjax">
                    <i class="icon paint brush"></i> 新建博文
                </a>

                                    <a href="https://learnku.com/laravel/topics/create" class="item no-pjax">
                        <i class="icon comment"></i> 发起讨论
                    </a>

                    <a href="https://learnku.com/laravel/links/share" class="item no-pjax">
                        <i class="icon linkify"></i> 分享链接
                    </a>
                                            <a href="https://learnku.com/laravel/topics/questions/create" class="item no-pjax">
                            <i class="icon help circle"></i> 提个问题
                        </a>
                    
                    
                
                
            </div>
        </div>

        <a class="item no-pjax" href="https://learnku.com/notifications/unread" title="消息通知">
            <span class="ui basic circular label notification" id="notification-count">
                0
            </span>
        </a>

        
        <div class="ui simple item dropdown article stackable nav-user-item">
            <img class="ui avatar image" src="https://cdn.learnku.com/uploads/avatars/57796_1582273588.jpeg!/both/100x100"> &nbsp;

            lianleilei_php  <i class="dropdown icon"></i>

            <div class="ui menu stackable">

                <a href="https://learnku.com/users/57796/reputation_logs" class="item">
                    <i class="icon trophy"></i> 0
                                            声望
                                    </a>

                                    <a href="https://learnku.com/blog/lianleilei_php" class="item">
                        <i class="icon newspaper"></i> 我的博客
                    </a>
                
                <a href="https://learnku.com/users/57796/collections" class="item">
                    <i class="icon heart"></i> 我的收藏
                </a>

                
                

                
                <a href="https://learnku.com/users/57796" class="item">
                    <i class="icon user"></i>
                        个人中心
                </a>

                <a href="https://learnku.com/courses/my/coupons" class="item">
                    <i class="icon payment"></i>
                        卡券中心
                </a>

                
                
                <a href="https://learnku.com/users/settings/edit" class="item">
                    <i class="icon settings"></i>
                        编辑资料
                </a>

                <a  class="item no-pjax" href="javascript:void(0)" data-url="https://learnku.com/logout" data-method="POST" data-prompt="您确定要退出登录吗？" title="退出登录">
                    <i class="icon sign out"></i>
                    退出
                </a>

            </div>
      </div>
    </div>

    </div>

            <a class="ui button basic simple  shadow-none  tiny hide-on-mobile icon popover night-mode" title="切换视图模式" href="javascript:void(0);" data-url="https://learnku.com/users/settings/night_mode" data-method="post" style="cursor: pointer;padding-top: 13px;"><i class="icon sun mt-2 fs-large"></i></a>
    </nav>

                
                
                                                                                                                                            

                
                
                

<div class="ui centered grid container stackable" >
    <div class=" column">
      <div class="ui segment">

        <div class="ui right rail rm-link-color lh-3 ml-1 mt-3 pl-4">
  <p>
      <b>技巧:</b>
  </p>
    <p>
      <a class="" href="https://learnku.com/docs/writing-docs/editor-guide/3958" target="_blank">
        MD 语法
      </a>
  </p>
    <p>
      <a class="" href="https://learnku.com/docs/writing-docs/typesetting-specification/1775" target="_blank">
        排版规范
      </a>
  </p>
    <p>
      <a class="" href="https://learnku.com/docs/guide/how-do-i-insert-pictures-in-articles-or-comments/4472" target="_blank">
        上传图片
      </a>
  </p>
    <p>
      <a class="" href="https://learnku.com/docs/guide/how-to-remove-the-shadow-of-the-picture/4474" target="_blank">
        图片阴影
      </a>
  </p>
    <p>
      <a class="" href="https://learnku.com/docs/guide/how-to-set-the-image-size/4475" target="_blank">
        图片大小
      </a>
  </p>
    <p>
      <a class="" href="https://learnku.com/docs/writing-docs/clean-screenshots/1778" target="_blank">
        干净的截图
      </a>
  </p>
    <p>
      <a class="" href="https://learnku.com/docs/writing-docs/paraphrase-the-screen-when-it-is-screenshot/1776" target="_blank">
        截屏要释义
      </a>
  </p>

      <p>
      <a class="" href="https://learnku.com/docs/guide/blog-added-series-articles-function/7096" target="_blank">
        系列文章
      </a>
  </p>
  </div>
        <a class="ui right corner label compose-help" href="javascript:;">
            <i class="info icon"></i>
        </a>

        <div class="content extra-padding">

                            <div class="ui header text-center text gery" style="margin:10px 0 40px">
                                            <i class="icon paint brush"></i> 新建博文
                                    </div>
            
            
            
                            <form method="POST" action="https://learnku.com/articles" accept-charset="UTF-8" id="article-create-form" class="ui form">
            
                <input type="hidden" name="_token" value="ocWhnRUAxIdg75kkzSvGtLEVOA6HPvRoMkb04j4f">

                <input name="editor_unique_id" type="hidden" value="">
                <input name="category_id" type="hidden" value="8">
                <input name="body_html" type="hidden" value="">

                <div class="fields">
                                          <div class=" four wide field ">
                            <div class="ui fluid search selection dropdown">
                              <input type="hidden" name="community_id" value="1" required>
                              <i class="dropdown icon"></i>
                              <div class="default text">请选择社区</div>
                              <div class="menu">
                                <div class="item" data-value="0">
                                    未选择社区
                                </div>
                                                                    <div class="item" data-value="1">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/WtC3cPLHzMbKRSZnagU9.png">
                                        Laravel
                                    </div>
                                                                    <div class="item" data-value="6">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/sNljssWWQoW6J88O9G37.png">
                                        Go
                                    </div>
                                                                    <div class="item" data-value="5">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/hIZjRRdF8oVYZy69XJnT.png">
                                        Vue.js
                                    </div>
                                                                    <div class="item" data-value="8">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/Y7fElYYwCFjTTXCdwPNW.png">
                                        PHP
                                    </div>
                                                                    <div class="item" data-value="2">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/mTBLIP7o0gVGn3ZCphpN.png">
                                        Python
                                    </div>
                                                                    <div class="item" data-value="34">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201908/18/1/yAH1hJ3pZF.png">
                                        MySQL
                                    </div>
                                                                    <div class="item" data-value="7">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/0MWz89TgPG0AaPbULcWT.png">
                                        iOS
                                    </div>
                                                                    <div class="item" data-value="19">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/h3Xef7s3mLKYmqwBRIiA.png">
                                        Java
                                    </div>
                                                                    <div class="item" data-value="35">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201908/12/1/NsscHkb1Mo.jpg">
                                        微信小程序
                                    </div>
                                                                    <div class="item" data-value="12">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/iAphQ2R2SYGDdQ6cd7aD.png">
                                        终身编程者
                                    </div>
                                                                    <div class="item" data-value="11">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/wZYaiK95EtvSyN8yliRJ.jpeg">
                                        Mac User
                                    </div>
                                                                    <div class="item" data-value="9">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/Qj48vezkYfZM1ZM5Y75X.png">
                                        Rust
                                    </div>
                                                                    <div class="item" data-value="37">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201908/10/25425/QdtUV2rox6.png">
                                        Elasticsearch
                                    </div>
                                                                    <div class="item" data-value="13">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/DGHjM6p2qdamHmFJZt9g.jpg">
                                        F2E 前端
                                    </div>
                                                                    <div class="item" data-value="16">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/Jd5vOXUVrCpP4zT90EwX.jpg">
                                        Flutter
                                    </div>
                                                                    <div class="item" data-value="31">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/b1qLi8CKYnkipeMwdvPU.png">
                                        LK
                                    </div>
                                                                    <div class="item" data-value="46">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201909/24/16817/yJFox5fIbz.jpeg">
                                        LeetCode（力扣）
                                    </div>
                                                                    <div class="item" data-value="10">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/nq5yC7ux49YEbaDTQilo.png">
                                        写作的艺术
                                    </div>
                                                                    <div class="item" data-value="33">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201908/09/1/DUgy6bxrAk.png">
                                        Node.js
                                    </div>
                                                                    <div class="item" data-value="42">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/pwwWCCpPeKm8z3HEubmo.png">
                                        Server
                                    </div>
                                                                    <div class="item" data-value="18">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/6boEYZFYLzAxXXwzKgvo.png">
                                        Spring
                                    </div>
                                                                    <div class="item" data-value="49">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/ceowUfx7bxLyyng5ykyu.png">
                                        Database
                                    </div>
                                                                    <div class="item" data-value="50">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/0QFgKXFJBOmsQNf47XOY.png">
                                        DevTools
                                    </div>
                                                                    <div class="item" data-value="45">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com/uploads/images/201909/10/1/fWW5khCQc2.png">
                                        产品经理
                                    </div>
                                                                    <div class="item" data-value="22">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/7EKG65w4CxOppJgBg5fU.png">
                                        Buffalo
                                    </div>
                                                                    <div class="item" data-value="48">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/wIJbVQ4zbj4KCWL9JFFt.png">
                                        AI
                                    </div>
                                                                    <div class="item" data-value="30">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/nd6liA9wYbKq2qgjCNkK.png">
                                        TensorFlow
                                    </div>
                                                                    <div class="item" data-value="47">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/vFzRGXNPaXAaF4blGlVr.jpg">
                                        Raspberry Pi
                                    </div>
                                                                    <div class="item" data-value="53">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/qXmY3Rxq5P06BcPT89D2.png">
                                        Security
                                    </div>
                                                                    <div class="item" data-value="52">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/BTBwRdYCj8UFXIjMqEbG.jpg">
                                        Computer Science
                                    </div>
                                                                    <div class="item" data-value="29">
                                        <img class="ui image" style="width:20px;height:20px;margin-top:-2px;" src="https://cdn.learnku.com//uploads/communities/Ryu26W0oD4PPEwffiXAd.png">
                                        Kotlin
                                    </div>
                                                              </div>
                            </div>
                    </div>

                      <div class="twelve wide field">
                        <input class="form-control" type="text" name="title" id="title-field" value=""  placeholder="标题" required />
                    </div>
                </div>


                <div class="field editor">
                                        <div id="editormd">
                        <textarea rows="15" id="body-field" name="body" placeholder="请使用 Markdown 编写" required></textarea>
                    </div>
                </div>

                
                                    <div class="ui styled fluid accordion">
                        <div class="title">
                        <i class="dropdown icon"></i>
                            高级设置
                        </div>
                        <div class="content">

                          <div class="field">
                                <label>选择标签（Tab 键可创建新标签）</label>
                                <div class="ui search multiple selection tags dropdown " >
                                  <input type="hidden" name="tags_string" value="" >
                                  <i class="dropdown icon"></i>
                                  <input type="text" class="search">
                                  <div class="default text">请选择标签（选填）</div>
                                </div>
                            </div>

                          <div class="field">
                            <label>系列文章（<a href="https://learnku.com/docs/guide/blog-added-series-articles-function/7096" target="_blank">详见此链接</a>） <i class="info icon ui popover" title="我们使用文章 ID 为作为系列文章的标识符，同一文章系列请选择同一篇文章"></i></label>
                            <div class="ui search selection articles dropdown" >
                              <input type="hidden" name="series_id" value="" >
                              <i class="dropdown icon"></i>
                              <input type="text" class="search">
                                                                                              <div class="default text" >请选择文章</div>
                                                          </div>
                          </div>

                          <div class="field ">
                            <label>编号（系列文章选中时才有效，选填）<i class="info icon ui popover" title="使用此选项来控制系列里的文章排序"></i></label>
                            <input type="text" name="position" id="position-field" value="" placeholder="使用此选项来控制系列里的文章排序" maxlength="4"/>
                          </div>

                        </div>
                    </div>
                
                <div contenteditable="true" id="pastebin"></div>

                <div class="ui message">
                    <button type="submit" class="ui button primary publish-btn loading-on-clicked" id="">
                        <i class="icon send"></i>
                                                    发布文章
                                            </button>


                                            &nbsp;&nbsp;or&nbsp;&nbsp;
                        <button class="ui button" type="submit" name="subject" value="draft">
                            <i class="icon save"></i> 保存草稿
                        </button>
                    
                    <a class="pull-right" href="https://learnku.com/docs/writing-docs/editor-guide/3958" target="_blank" style="color: #777;font-size: .9em;text-decoration: underline;margin-top: 8px;">
                        <i class="icon wpforms"></i> 编辑器使用指南
                    </a>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>

            </div>

            <div class="ui inverted vertical footer segment">
                <div class="ui center aligned container">

                
                    <div class="ui stackable inverted divided grid">
                        <div class="four wide column">
                            <h4 class="ui inverted header">
                                <img src="https://cdn.learnku.com/uploads/images/201908/22/1/oVrAoOQ4Vc.png!/fw/40" alt="" style="width: 32px;border-radius: 6px;position: relative;top: -5px;">
                                关于 LearnKu
                            </h4>
                            <div class="ui inverted  text-center">
                                <div class="lh-3">LearnKu 是终身编程者的修道场</div>
                                <div class="lh-3">摒弃世俗浮躁，追求技术精湛</div>
                            </div>

                            <div class="ui inverted  text-center mt-3 rm-link-color tdu">
                                <i class="icon birthday"></i> <a href="https://learnku.com/articles/28735" >LearnKu 诞生的故事</a>
                            </div>
                        </div>
                        <div class="four wide column">
                            <h4 class="ui inverted header">资源推荐</h4>
                            <div class="ui inverted link list">
                                <li class="mb-1">
                                    <a class="item" href="https://learnku.com/docs/guide">
                                        《社区使用指南》
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a class="item" href="https://learnku.com/docs/writing-docs">
                                        《文档撰写指南》
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a class="item" href="https://learnku.com/docs/guide/protocol/4992">
                                        《LearnKu 社区规范》
                                    </a>
                                </li>
                            </div>
                        </div>
                        <div class="four wide column">
                            <h4 class="ui inverted header">赞助商</h4>
                            <div class="ui inverted link list">
                                                                                                            <a href="https://passport.ucloud.cn/?invitation_code=rami45zj5kpm&amp;ytag=reZ5E7" rel="nofollow noopener noreferrer" class="item" target="_blank" style="line-height: 28px;">
                                            <img src="https://cdn.learnku.com/uploads/banners/bQawWl3vT5dc2lYx5JZ7.png!large" title="本站服务器由 UCloud 赞助" class="ui popover" style="height: 20px;margin-bottom: -4px;margin-right: 3px;display: inline-block;">
                                        </a>
                                                                            <a href="https://www.upyun.com/" rel="nofollow noopener noreferrer" class="item" target="_blank" style="line-height: 28px;">
                                            <img src="https://cdn.learnku.com/uploads/banners/XPtLlZmIN1cQbLuDFEON.png!large" title="社区 CDN 赞助商" class="ui popover" style="height: 20px;margin-bottom: -4px;margin-right: 3px;display: inline-block;">
                                        </a>
                                                                            <a href="http://www.sendcloud.net/" rel="nofollow noopener noreferrer" class="item" target="_blank" style="line-height: 28px;">
                                            <img src="https://cdn.learnku.com/uploads/banners/JpTCK6OKYBIrBIWdtob8.png!large" title="订阅邮件赞助商：SendCloud" class="ui popover" style="height: 20px;margin-bottom: -4px;margin-right: 3px;display: inline-block;">
                                        </a>
                                                                                                </div>
                        </div>
                        <div class="four wide column">
                            <h4 class="ui inverted header">其他信息</h4>
                            <div class="ui inverted link list">

                                <li>
                                    <a class="item" href="https://learnku.com/contact?code=outsource">
                                        <i class="icon thumbs up"></i> 软件外包
                                    </a>
                                </li>
                                <li>
                                    <a class="item" href="https://learnku.com/docs/guide/administrator/4485" >
                                        <i class="icon heartbeat"></i> 成为版主
                                    </a>
                                </li>
                                <li>
                                    <a class="item" href="https://learnku.com/quizzes" >
                                        <i class="icon wpforms"></i> 所有测验
                                    </a>
                                </li>
                                <li>
                                    <a class="item" href="https://learnku.com/contact">
                                        <i class="icon wechat" aria-hidden="true" ></i> 联系站长（反馈建议）
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>

                    <div class="ui inverted section divider"></div>
                    <div style="color: rgb(137, 137, 140);font-size:0.9em;"  class="rm-link-color">
                        <p>
                            <a href="http://beian.miit.gov.cn/" target="_blank">粤ICP备18099781号-6</a>
                            <span class="mx-2">|</span>
                            <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030502004330" target="_blank"><img src="https://cdn.learnku.com/uploads/images/201908/21/1/L4ckM2CVb6.png!/fw/20" width="20" style="position: relative;top: 4px;"> 粤公网安备 44030502004330号</a>
                            <span class="mx-2">|</span>
                            <a href="https://learnku.com/lk">违法和不良信息举报</a>
                        </p>
                        <p style=" margin-top:-8px;margin-bottom: -0px;" class="ui inverted signature">
                              由 <a href="https://learnku.com/contact" target="_blank" style="color: inherit;">Summer</a> 设计和编码 <span style="color: #e27575;font-size: 14px;">❤</span>
                        </p>
                    </div>
                </div>
            </div>
            

            
        </div>

        <div class="ui modal login small" style="width:400px;margin: 0em 0em 0em -200px;">
          <i class="close icon"></i>
          <div class="header">
            <h4 class="modal-title ">
                <img class="ui image display-inline-block mr-2" style="width:32px;height:32px;" src="https://cdn.learnku.com/uploads/images/201901/24/1/OyBnfB2vlk.png"> <span style="position: relative;top: 4px;">请登录</span>
            </h4>
          </div>
          <div class="content">



<form class="ui form login" role="form" method="POST" action="https://learnku.com/auth/login" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="ocWhnRUAxIdg75kkzSvGtLEVOA6HPvRoMkb04j4f">
    <input type="hidden" name="remember" value="yes">

    <input type="hidden" name="return_back" value="no">

  <div class="field">
    <div class="ui left icon input">
        <i class="user icon"></i>
        <input type="text" name="username" placeholder="邮 箱 or 手 机 or 用户名" value="" required>
      </div>
  </div>
  <div class="field">
    <div class="ui left icon input">
        <i class="lock icon"></i>
        <input type="password" name="password" placeholder="密 码" value="" required>
      </div>
  </div>
  <button class="ui primary right labeled icon button" type="submit">
    <i class="right arrow icon"></i>
    提交
  </button>

    <div class="pull-right mt-2 rm-link-color">
        <a class="btn btn-link " href="https://learnku.com/auth/forget" target="_blank">
            忘记密码?
        </a>
        <span class="text-mute">or</span>
        <a class="btn btn-link " href="https://learnku.com/auth/register" target="_blank">
            注册
        </a>
    </div>

    <div class="clearfix"></div>


  <div class="ui horizontal divider fs-tiny text-mute">
    第三方账号登录
  </div>



      <a class="ui button fluid mt-2 green wechat-login-link" href="https://learnku.com/auth/oauth?driver=wechat"><i class="icon wechat " ></i> 微信登录</a>

      <a class="ui button fluid mt-2 basic" id="login-required-submit" href="https://learnku.com/auth/oauth?driver=github"><i class="icon github alternate"></i> GitHub 登录</a>

</form>
          </div>
        </div>


<div class="ui modal small report">
    <div class="header modal-title">内容举报</div>
    <form class="ui form error" method="POST" action="https://learnku.com/reports" accept-charset="UTF-8">
         <input type="hidden" name="_token" value="ocWhnRUAxIdg75kkzSvGtLEVOA6HPvRoMkb04j4f">
        <input name="reportable_id" type="hidden" value="">
        <input name="reportable_type" type="hidden" value="">
        <div class="content" style="padding: 20px;">
            <div class="ui message warning show">
                <i class="icon info"></i> 匿名举报，为防止滥用，仅管理员可见举报者。
            </div>
              <p>我要举报该<span class='modal-typename'></span>，理由是：</p>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="spam" required>
                            <label><strong>垃圾广告</strong>：恶意灌水、广告、推广等内容</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="meaningless" required>
                            <label><strong>无意义内容</strong>：测试、灌水、文不对题、消极内容、文章品质太差等</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="violation" required>
                            <label><strong>违规内容</strong>：色情、暴利、血腥、敏感信息等</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="unfriendly" required>
                            <label><strong>不友善内容</strong>：人身攻击、挑衅辱骂、恶意行为</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="vpn" required>
                            <label><strong>科学上网</strong>：翻墙、VPN、Shadowsocks，政策风险，会被关站！</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="qa" required>
                            <label><strong>不懂提问</strong>：提问太随意，需要再做一遍《提问的智慧》测验</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="markdown" required>
                            <label><strong>排版混乱</strong>：没有合理使用 Markdown 编写文章，未使用代码高亮</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="copywriting" required>
                            <label><strong>内容结构混乱</strong>：逻辑不清晰，内容混乱，难以阅读</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="title" required>
                            <label><strong>标题随意</strong>：标题党、标题不释义</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="category" required>
                            <label><strong>错误分类</strong>：文章分类选择错误，提问内容未选「问答」分类</label>
                        </div>
                    </div>
                                    <div class="field">
                        <div class="ui radio checkbox">
                            <input  type="radio" name="report_type" value="other" required>
                            <label><strong>其他理由</strong>：请补充说明</label>
                        </div>
                    </div>
                              <div class="field">
                  <textarea placeholder="请提供详尽的说明" name="reason" rows="3"></textarea>
              </div>
        </div>
        <div class="actions field" style="padding: 1px 12px 25px;">
            <button class="ui primary button" type="submit">举报</button>
            <div class="ui cancel button">取消</div>
        </div>
    </form>
</div>



    </body>

        <script type="text/javascript">
        Config.routes.api_search = 'https://learnku.com/wikis/api_search';
    </script>

    <!-- Scripts -->
    <script src="https://cdn.learnku.com//build/js/cd80645e2068fcda11b9-vendors.js"></script>
    <script src="https://cdn.learnku.com//build/js/0adffeece6501caac56a-app.js"></script>

    
    <script type="text/javascript">
        // 本地保存内容唯一值
        Config.editor.unique_id = "articles-create_article_content_";
        Config.tags_url = 'https://learnku.com/articles/tags/search?q={query}';
    </script>

    <link rel="stylesheet" href="https://cdn.learnku.com/assets/editor/css/editormd.css">

<script src="https://cdn.learnku.com//build/js/a329c8982f52bb1a85d2-editor.vendors.js"></script>

<script src="https://cdn.learnku.com//build/js/2d062301c13682cbbd85-editor.js"></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('.tags.ui.dropdown')
          .dropdown({
            allowAdditions: true,
            apiSettings: {
                url: Config.tags_url,
                data: {
                  '_token': Config.token
                },
            }
        });

    });

</script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#publish-hint').click(function(event) {
                event.preventDefault();
                swal({
                    title: "",
                    text: "确定要将发布草稿？",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "取消",
                    confirmButtonText: "发布"
                }).then(function () {
                    $('<input />').attr('type', 'hidden')
                          .attr('name', "subject")
                          .attr('value', "publish")
                          .appendTo('#article-edit-form');
                          $("#article-edit-form").submit();
                }).catch(swal.noop);
            });

            $('.articles.ui.dropdown.search.selection')
              .dropdown({
                allowAdditions: false,
                saveRemoteData: false,
                apiSettings: {
                    url: 'https://learnku.com/my/articles/search?q={query}',
                    data: {
                      '_token': Config.token
                    },
                    cache: false,
                }
            });
        });
    </script>


</html>