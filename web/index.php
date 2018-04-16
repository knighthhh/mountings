<?php
//模式由生产模式变为开发模式
define("APP_DEBUG", False);


define("SITE_URL", "http://www.aptacam.com");
#define("SITE_URL", "http://127.0.0.1");

//定义前台界面CSS,image,js路径
define("HOME_CSS_URL", "/Public/Home/css");
define("HOME_IMAGES_URL", SITE_URL . "/Public/Home/images");
define("HOME_JS_URL", SITE_URL . "/Public/Home/js");
define("HOME_PUBLIC", SITE_URL . "/Home/Public");

//定义后台界面CSS,image,js路径
define("ADMIN_CSS_URL", SITE_URL . "/Public/Admin/css/");
define("ADMIN_IMAGES_URL", SITE_URL . "/Public/Admin/images/");
define("ADMIN_JS_URL", SITE_URL . "/Public/Admin/js/");

define("NCBI_URL", "https://www.ncbi.nlm.nih.gov/pubmed/");

//layui文件路径
#define("ADMIN_LAYUI_URL", SITE_URL . "/health/management/Application/Public/layui/");

require './ThinkPHP/ThinkPHP.php';
