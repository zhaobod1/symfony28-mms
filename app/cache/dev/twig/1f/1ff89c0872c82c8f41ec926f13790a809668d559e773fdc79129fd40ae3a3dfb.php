<?php

/* user_base.html.twig */
class __TwigTemplate_f033d9fbffe92b1e3e87546684e89c0bfbb8a1595687d43d2f5fdc7187b22d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'htmltop' => array($this, 'block_htmltop'),
            'head' => array($this, 'block_head'),
            'h_pageLevelPlugins' => array($this, 'block_h_pageLevelPlugins'),
            'h_pageLevelStyles' => array($this, 'block_h_pageLevelStyles'),
            'h_themeGlobalStyles' => array($this, 'block_h_themeGlobalStyles'),
            'h_themeLayoutStyles' => array($this, 'block_h_themeLayoutStyles'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'sidebarMenu' => array($this, 'block_sidebarMenu'),
            'pageBar' => array($this, 'block_pageBar'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageContent' => array($this, 'block_pageContent'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'pageLevelPlugins' => array($this, 'block_pageLevelPlugins'),
            'pageLevelScripts' => array($this, 'block_pageLevelScripts'),
            'themeLayoutScript' => array($this, 'block_themeLayoutScript'),
            'huo15fix' => array($this, 'block_huo15fix'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3c92cef4b1ec10138c3a5c6834eaf0601d784c977ced9bba3f737cf210b9a5d = $this->env->getExtension("native_profiler");
        $__internal_b3c92cef4b1ec10138c3a5c6834eaf0601d784c977ced9bba3f737cf210b9a5d->enter($__internal_b3c92cef4b1ec10138c3a5c6834eaf0601d784c977ced9bba3f737cf210b9a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $this->displayBlock('htmltop', $context, $blocks);
        // line 17
        $this->displayBlock('head', $context, $blocks);
        // line 73
        echo "<!-- END HEAD -->
";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 926
        echo "</html>";
        
        $__internal_b3c92cef4b1ec10138c3a5c6834eaf0601d784c977ced9bba3f737cf210b9a5d->leave($__internal_b3c92cef4b1ec10138c3a5c6834eaf0601d784c977ced9bba3f737cf210b9a5d_prof);

    }

    // line 2
    public function block_htmltop($context, array $blocks = array())
    {
        $__internal_6840227ca566a149c23ea83ab83e02841d0892af96170b59ce766b4ad0e72a88 = $this->env->getExtension("native_profiler");
        $__internal_6840227ca566a149c23ea83ab83e02841d0892af96170b59ce766b4ad0e72a88->enter($__internal_6840227ca566a149c23ea83ab83e02841d0892af96170b59ce766b4ad0e72a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "htmltop"));

        // line 3
        echo "<!--火一五信息科技有限公司-->
<!--联系方式:15288986891-->
<!--QQ:3186355915-->
<!--web:http://host.huo15.com-->
<!--[if IE 8]>

<html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
";
        
        $__internal_6840227ca566a149c23ea83ab83e02841d0892af96170b59ce766b4ad0e72a88->leave($__internal_6840227ca566a149c23ea83ab83e02841d0892af96170b59ce766b4ad0e72a88_prof);

    }

    // line 17
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f6a9a9bf65575587848d099851c61071de149a49f1783b04c5a6bf1df3df01f = $this->env->getExtension("native_profiler");
        $__internal_3f6a9a9bf65575587848d099851c61071de149a49f1783b04c5a6bf1df3df01f->enter($__internal_3f6a9a9bf65575587848d099851c61071de149a49f1783b04c5a6bf1df3df01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 18
        echo "    <head>
        <meta charset=\"utf-8\"/>
        <title>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
        <meta content=\"\" name=\"description\"/>
        <meta content=\"\" name=\"author\"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("huo15/css/font1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
              type=\"text/css\"/>
        <link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo " rel=\"stylesheet\"
              type=\"text/css\"/>
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
              type=\"text/css\"/>
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
              type=\"text/css\"/>
        <!-- END GLOBAL MANDATORY STYLES -->


        <!-- BEGIN PAGE LEVEL PLUGINS -->
        ";
        // line 39
        $this->displayBlock('h_pageLevelPlugins', $context, $blocks);
        // line 48
        echo "        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        ";
        // line 51
        $this->displayBlock('h_pageLevelStyles', $context, $blocks);
        // line 53
        echo "        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        ";
        // line 55
        $this->displayBlock('h_themeGlobalStyles', $context, $blocks);
        // line 60
        echo "        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        ";
        // line 62
        $this->displayBlock('h_themeLayoutStyles', $context, $blocks);
        // line 69
        echo "        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    </head>
";
        
        $__internal_3f6a9a9bf65575587848d099851c61071de149a49f1783b04c5a6bf1df3df01f->leave($__internal_3f6a9a9bf65575587848d099851c61071de149a49f1783b04c5a6bf1df3df01f_prof);

    }

    // line 39
    public function block_h_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_0f0f4e01ce16e963d6db3bcf015f5f610e858753d349c7563e73d9ed198d5f9d = $this->env->getExtension("native_profiler");
        $__internal_0f0f4e01ce16e963d6db3bcf015f5f610e858753d349c7563e73d9ed198d5f9d->enter($__internal_0f0f4e01ce16e963d6db3bcf015f5f610e858753d349c7563e73d9ed198d5f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelPlugins"));

        // line 40
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\"
                  rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
                  type=\"text/css\"/>
            <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
                  type=\"text/css\"/>
        ";
        
        $__internal_0f0f4e01ce16e963d6db3bcf015f5f610e858753d349c7563e73d9ed198d5f9d->leave($__internal_0f0f4e01ce16e963d6db3bcf015f5f610e858753d349c7563e73d9ed198d5f9d_prof);

    }

    // line 51
    public function block_h_pageLevelStyles($context, array $blocks = array())
    {
        $__internal_ea3466d9e95db22a8951d454dbd3b26f17030e3a46fe58891821b140bf5c26b6 = $this->env->getExtension("native_profiler");
        $__internal_ea3466d9e95db22a8951d454dbd3b26f17030e3a46fe58891821b140bf5c26b6->enter($__internal_ea3466d9e95db22a8951d454dbd3b26f17030e3a46fe58891821b140bf5c26b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelStyles"));

        // line 52
        echo "        ";
        
        $__internal_ea3466d9e95db22a8951d454dbd3b26f17030e3a46fe58891821b140bf5c26b6->leave($__internal_ea3466d9e95db22a8951d454dbd3b26f17030e3a46fe58891821b140bf5c26b6_prof);

    }

    // line 55
    public function block_h_themeGlobalStyles($context, array $blocks = array())
    {
        $__internal_af214529f4303efb59b65ade2bf80296a77f1a6233ffd8901525b7a4c3af6e52 = $this->env->getExtension("native_profiler");
        $__internal_af214529f4303efb59b65ade2bf80296a77f1a6233ffd8901525b7a4c3af6e52->enter($__internal_af214529f4303efb59b65ade2bf80296a77f1a6233ffd8901525b7a4c3af6e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_themeGlobalStyles"));

        // line 56
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\"
                  type=\"text/css\"/>
            <link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        
        $__internal_af214529f4303efb59b65ade2bf80296a77f1a6233ffd8901525b7a4c3af6e52->leave($__internal_af214529f4303efb59b65ade2bf80296a77f1a6233ffd8901525b7a4c3af6e52_prof);

    }

    // line 62
    public function block_h_themeLayoutStyles($context, array $blocks = array())
    {
        $__internal_4b84dcd39628b111f9d2abaafefcd93ba2c464beaac189c633b07f2f5dfe454b = $this->env->getExtension("native_profiler");
        $__internal_4b84dcd39628b111f9d2abaafefcd93ba2c464beaac189c633b07f2f5dfe454b->enter($__internal_4b84dcd39628b111f9d2abaafefcd93ba2c464beaac189c633b07f2f5dfe454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_themeLayoutStyles"));

        // line 63
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
                  type=\"text/css\"
                  id=\"style_color\"/>
            <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        
        $__internal_4b84dcd39628b111f9d2abaafefcd93ba2c464beaac189c633b07f2f5dfe454b->leave($__internal_4b84dcd39628b111f9d2abaafefcd93ba2c464beaac189c633b07f2f5dfe454b_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_a80e80caa81bf98763f5e1a4e4f06a19d4ec8632b599124d67c78b89f50fec6e = $this->env->getExtension("native_profiler");
        $__internal_a80e80caa81bf98763f5e1a4e4f06a19d4ec8632b599124d67c78b89f50fec6e->enter($__internal_a80e80caa81bf98763f5e1a4e4f06a19d4ec8632b599124d67c78b89f50fec6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
<div class=\"page-wrapper\">
    <!-- BEGIN HEADER -->
    ";
        // line 78
        $this->displayBlock('header', $context, $blocks);
        // line 472
        echo "    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class=\"clearfix\"></div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class=\"page-container\">
        <!-- BEGIN SIDEBAR -->
        <div class=\"page-sidebar-wrapper\">
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
            <div class=\"page-sidebar navbar-collapse collapse\">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                ";
        // line 491
        $this->displayBlock('sidebarMenu', $context, $blocks);
        // line 580
        echo "                <!-- END SIDEBAR MENU -->
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <div class=\"page-content\">
                <!-- BEGIN PAGE HEADER-->

                <!-- BEGIN PAGE BAR -->
                ";
        // line 593
        $this->displayBlock('pageBar', $context, $blocks);
        // line 633
        echo "                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                ";
        // line 635
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 640
        echo "                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                ";
        // line 642
        $this->displayBlock('pageContent', $context, $blocks);
        // line 808
        echo "            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    ";
        // line 816
        $this->displayBlock('footer', $context, $blocks);
        // line 828
        echo "    <!-- END FOOTER -->
</div>


<!--[if lt IE 9]>
<script src=\"";
        // line 833
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 834
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->


";
        // line 838
        $this->displayBlock('bottom', $context, $blocks);
        // line 924
        echo "</body>
";
        
        $__internal_a80e80caa81bf98763f5e1a4e4f06a19d4ec8632b599124d67c78b89f50fec6e->leave($__internal_a80e80caa81bf98763f5e1a4e4f06a19d4ec8632b599124d67c78b89f50fec6e_prof);

    }

    // line 78
    public function block_header($context, array $blocks = array())
    {
        $__internal_576ffd7f65da5dc49620aeb8a65a8978c2ad0d11dbab60b099592cc8d722bed1 = $this->env->getExtension("native_profiler");
        $__internal_576ffd7f65da5dc49620aeb8a65a8978c2ad0d11dbab60b099592cc8d722bed1->enter($__internal_576ffd7f65da5dc49620aeb8a65a8978c2ad0d11dbab60b099592cc8d722bed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 79
        echo "        <div class=\"page-header navbar navbar-fixed-top\">
            <!-- BEGIN HEADER INNER -->
            <div class=\"page-header-inner \">
                <!-- BEGIN LOGO -->
                <div class=\"page-logo\">
                    <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("app_user_user_modprofile");
        echo "\">
                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\"/>
                    </a>
                    <div class=\"menu-toggler sidebar-toggler\">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\"
                   data-target=\".navbar-collapse\">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class=\"top-menu\">
                    <ul class=\"nav navbar-nav pull-right\">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"hide dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                               data-close-others=\"true\">
                                <i class=\"icon-bell\"></i>
                                <span class=\"badge badge-default\"> 7 </span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"external\">
                                    <h3>
                                        <span class=\"bold\">12 条</span> 通知</h3>
                                    <a href=\"page_user_profile_1.html\">查看全部</a>
                                </li>
                                <li>
                                    <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\"
                                        data-handle-color=\"#637283\">
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">just now</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-success\">
                                                            <i class=\"fa fa-plus\"></i>
                                                        </span> New user registered. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">3 mins</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Server #12 overloaded. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">10 mins</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-warning\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </span> Server #2 not responding. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">14 hrs</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-info\">
                                                            <i class=\"fa fa-bullhorn\"></i>
                                                        </span> Application error. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">2 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Database overloaded 68%. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">3 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> A user IP blocked. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">4 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-warning\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">5 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-info\">
                                                            <i class=\"fa fa-bullhorn\"></i>
                                                        </span> System Error. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">9 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Storage server failed. </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"hide dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                               data-close-others=\"true\">
                                <i class=\"icon-envelope-open\"></i>
                                <span class=\"badge badge-default\"> 4 </span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"external\">
                                    <h3>You have
                                        <span class=\"bold\">7 New</span> Messages</h3>
                                    <a href=\"app_inbox.html\">view all</a>
                                </li>
                                <li>
                                    <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\"
                                        data-handle-color=\"#637283\">
                                        <li>
                                            <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar2.jpg"), "html", null, true);
        echo "\"
                                                             class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Lisa Wong </span>
                                                        <span class=\"time\">Just Now </span>
                                                    </span>
                                                <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar3.jpg"), "html", null, true);
        echo "\"
                                                             class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Richard Doe </span>
                                                        <span class=\"time\">16 mins </span>
                                                    </span>
                                                <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar1.jpg"), "html", null, true);
        echo "\"
                                                             class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Bob Nilson </span>
                                                        <span class=\"time\">2 hrs </span>
                                                    </span>
                                                <span class=\"message\"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar2.jpg"), "html", null, true);
        echo "\"
                                                             class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Lisa Wong </span>
                                                        <span class=\"time\">40 mins </span>
                                                    </span>
                                                <span class=\"message\"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar3.jpg"), "html", null, true);
        echo "\"
                                                             class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Richard Doe </span>
                                                        <span class=\"time\">46 mins </span>
                                                    </span>
                                                <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"hide dropdown dropdown-extended dropdown-tasks\" id=\"header_task_bar\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                               data-close-others=\"true\">
                                <i class=\"icon-calendar\"></i>
                                <span class=\"badge badge-default\"> 3 </span>
                            </a>
                            <ul class=\"dropdown-menu extended tasks\">
                                <li class=\"external\">
                                    <h3>You have
                                        <span class=\"bold\">12 pending</span> tasks</h3>
                                    <a href=\"app_todo.html\">view all</a>
                                </li>
                                <li>
                                    <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\"
                                        data-handle-color=\"#637283\">
                                        <li>
                                            <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">New release v1.2 </span>
                                                        <span class=\"percent\">30%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 40%;\"
                                                              class=\"progress-bar progress-bar-success\"
                                                              aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">40% Complete</span>
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Application deployment</span>
                                                        <span class=\"percent\">65%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 65%;\"
                                                              class=\"progress-bar progress-bar-danger\"
                                                              aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">65% Complete</span>
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Mobile app release</span>
                                                        <span class=\"percent\">98%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 98%;\"
                                                              class=\"progress-bar progress-bar-success\"
                                                              aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">98% Complete</span>
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Database migration</span>
                                                        <span class=\"percent\">10%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 10%;\"
                                                              class=\"progress-bar progress-bar-warning\"
                                                              aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">10% Complete</span>
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Web server upgrade</span>
                                                        <span class=\"percent\">58%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 58%;\" class=\"progress-bar progress-bar-info\"
                                                              aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">58% Complete</span>
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Mobile development</span>
                                                        <span class=\"percent\">85%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 85%;\"
                                                              class=\"progress-bar progress-bar-success\"
                                                              aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">85% Complete</span>
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">New UI release</span>
                                                        <span class=\"percent\">38%</span>
                                                    </span>
                                                    <span class=\"progress progress-striped\">
                                                        <span style=\"width: 38%;\"
                                                              class=\"progress-bar progress-bar-important\"
                                                              aria-valuenow=\"18\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">38% Complete</span>
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"dropdown dropdown-user\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                               data-close-others=\"true\">
                                <img alt=\"\" class=\"img-circle\"
                                     src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar3_small.jpg"), "html", null, true);
        echo "\"/>
                                ";
        // line 419
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 420
            echo "                                    <span class=\"username username-hide-on-mobile\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " </span>
                                ";
        }
        // line 422
        echo "                                <i class=\"fa fa-angle-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-default\">
                                <li>
                                    <a href=\"";
        // line 426
        echo $this->env->getExtension('routing')->getPath("userIndex");
        echo "\">
                                        <i class=\"icon-user\"></i> 个人中心 </a>
                                </li>
                                <li class=\"hide\">
                                    <a href=\"app_calendar.html\">
                                        <i class=\"icon-calendar\"></i> My Calendar </a>
                                </li>
                                <li class=\"hide\">
                                    <a href=\"app_inbox.html\">
                                        <i class=\"icon-envelope-open\"></i> My Inbox
                                        <span class=\"badge badge-danger\"> 3 </span>
                                    </a>
                                </li>
                                <li class=\"hide\">
                                    <a href=\"app_todo.html\">
                                        <i class=\"icon-rocket\"></i> My Tasks
                                        <span class=\"badge badge-success\"> 7 </span>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"page_user_lock_1.html\">
                                        <i class=\"icon-lock\"></i> 锁屏 </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 451
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
        echo "\">
                                        <i class=\"icon-key\"></i> 退出 </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"hide dropdown dropdown-quick-sidebar-toggler\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\">
                                <i class=\"icon-logout\"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
    ";
        
        $__internal_576ffd7f65da5dc49620aeb8a65a8978c2ad0d11dbab60b099592cc8d722bed1->leave($__internal_576ffd7f65da5dc49620aeb8a65a8978c2ad0d11dbab60b099592cc8d722bed1_prof);

    }

    // line 491
    public function block_sidebarMenu($context, array $blocks = array())
    {
        $__internal_5e1858fa2d78f375eb96b3b4bc611f3723860ada0fc20b00c0db982450e41296 = $this->env->getExtension("native_profiler");
        $__internal_5e1858fa2d78f375eb96b3b4bc611f3723860ada0fc20b00c0db982450e41296->enter($__internal_5e1858fa2d78f375eb96b3b4bc611f3723860ada0fc20b00c0db982450e41296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarMenu"));

        // line 492
        echo "                    <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\"
                        data-slide-speed=\"200\" style=\"padding-top: 20px\">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <li class=\"sidebar-toggler-wrapper hide\">
                            <div class=\"sidebar-toggler\">
                                <span></span>
                            </div>
                        </li>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->
                        <li class=\"sidebar-search-wrapper\">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply \"sidebar-search-bordered\" class the below search form to have bordered search box -->
                            <!-- DOC: Apply \"sidebar-search-bordered sidebar-search-solid\" class the below search form to have bordered & solid search box -->
                            <form class=\"sidebar-search  \" action=\"page_general_search_3.html\" method=\"POST\">
                                <a href=\"javascript:;\" class=\"remove\">
                                    <i class=\"icon-close\"></i>
                                </a>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"搜索...\">
                                        <span class=\"input-group-btn\">
                                            <a href=\"javascript:;\" class=\"btn submit\">
                                                <i class=\"icon-magnifier\"></i>
                                            </a>
                                        </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class=\"nav-item start active open\">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-home\"></i>
                                <span class=\"title\">会员管理</span>
                                <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item start \">
                                    <a href=\"";
        // line 530
        echo $this->env->getExtension('routing')->getPath("app_user_user_ulist");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-bar-chart\"></i>
                                        <span class=\"title\">会员列表</span>

                                    </a>
                                </li>
                                <li class=\"nav-item start \">
                                    <a href=\"";
        // line 537
        echo $this->env->getExtension('routing')->getPath("departmentList");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-bulb\"></i>
                                        <span class=\"title\">部门列表</span>

                                    </a>
                                </li>
                                <li class=\"nav-item start \">
                                    <a href=\"";
        // line 544
        echo $this->env->getExtension('routing')->getPath("userIndex");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-graph\"></i>
                                        <span class=\"title\">个人中心</span>

                                    </a>
                                </li>
                                ";
        // line 550
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 551
            echo "                                <li class=\"nav-item start \">
                                    <a href=\"";
            // line 552
            echo $this->env->getExtension('routing')->getUrl("addNewMember");
            echo "\" class=\"nav-link \">
                                        <i class=\"icon-bell\"></i>
                                        <span class=\"title\">添加会员</span>

                                    </a>
                                </li>
                                ";
        }
        // line 559
        echo "                            </ul>
                        </li>
                        <li class=\"heading\">
                            <h3 class=\"uppercase\">事务管理</h3>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-diamond\"></i>
                                <span class=\"title\">模块管理</span>
                                <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item  \">
                                    <a href=\"";
        // line 572
        echo $this->env->getExtension('routing')->getPath("app_modules_modules_modlist");
        echo "\" class=\"nav-link \">
                                        <span class=\"title\">模块列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                ";
        
        $__internal_5e1858fa2d78f375eb96b3b4bc611f3723860ada0fc20b00c0db982450e41296->leave($__internal_5e1858fa2d78f375eb96b3b4bc611f3723860ada0fc20b00c0db982450e41296_prof);

    }

    // line 593
    public function block_pageBar($context, array $blocks = array())
    {
        $__internal_4e3f80d8f5b45926b4f81f73f930a43f0b16ed3d5a96ba40eed6223097e4d223 = $this->env->getExtension("native_profiler");
        $__internal_4e3f80d8f5b45926b4f81f73f930a43f0b16ed3d5a96ba40eed6223097e4d223->enter($__internal_4e3f80d8f5b45926b4f81f73f930a43f0b16ed3d5a96ba40eed6223097e4d223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageBar"));

        // line 594
        echo "                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>
                        <div class=\"page-toolbar\">
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\"
                                        data-toggle=\"dropdown\"> Actions
                                    <i class=\"fa fa-angle-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bell\"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-shield\"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-user\"></i> Something else here</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bag\"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                ";
        
        $__internal_4e3f80d8f5b45926b4f81f73f930a43f0b16ed3d5a96ba40eed6223097e4d223->leave($__internal_4e3f80d8f5b45926b4f81f73f930a43f0b16ed3d5a96ba40eed6223097e4d223_prof);

    }

    // line 635
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_9cefb73c0fe67403db266f7d2bc3c0930b3265d13e5c63f48c0022ca88edde23 = $this->env->getExtension("native_profiler");
        $__internal_9cefb73c0fe67403db266f7d2bc3c0930b3265d13e5c63f48c0022ca88edde23->enter($__internal_9cefb73c0fe67403db266f7d2bc3c0930b3265d13e5c63f48c0022ca88edde23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 636
        echo "                    <h1 class=\"page-title\"> User Profile
                        <small></small>
                    </h1>
                ";
        
        $__internal_9cefb73c0fe67403db266f7d2bc3c0930b3265d13e5c63f48c0022ca88edde23->leave($__internal_9cefb73c0fe67403db266f7d2bc3c0930b3265d13e5c63f48c0022ca88edde23_prof);

    }

    // line 642
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_194ff1d029a93a2aef1fdeedd3a0d2def4e5781fa65d15e94679aca7cc884713 = $this->env->getExtension("native_profiler");
        $__internal_194ff1d029a93a2aef1fdeedd3a0d2def4e5781fa65d15e94679aca7cc884713->enter($__internal_194ff1d029a93a2aef1fdeedd3a0d2def4e5781fa65d15e94679aca7cc884713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 643
        echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class=\"profile-sidebar\">
                                <!-- PORTLET MAIN -->
                                <div class=\"portlet light profile-sidebar-portlet\">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class=\"profile-userpic\">
                                        <img src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/media/profile/profile_user.jpg"), "html", null, true);
        echo "\"
                                             class=\"img-responsive\"
                                             alt=\"\">
                                    </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class=\"profile-usertitle\">
                                        <div class=\"profile-usertitle-name\"> 赵博</div>
                                        <div class=\"profile-usertitle-job\"> 管理员</div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class=\"profile-userbuttons\">
                                        <button type=\"button\" class=\"btn btn-circle green btn-sm\">添加数据</button>
                                        <button type=\"button\" class=\"btn btn-circle red btn-sm\">添加模块</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class=\"profile-usermenu\">
                                        <ul class=\"nav\">
                                            <li class=\"active\">
                                                <a href=\"/user/index\">
                                                    <i class=\"icon-home\"></i> 预览 </a>
                                            </li>
                                            <li class=\"\">
                                                <a href=\"/user/account\">
                                                    <i class=\"icon-settings\"></i> 账号设置 </a>
                                            </li>
                                            <li>
                                                <a href=\"/user/help\">
                                                    <i class=\"icon-info\"></i> 帮助 </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class=\"portlet light \">
                                    <!-- STAT -->
                                    <div class=\"row list-separated profile-stat\">
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 37</div>
                                            <div class=\"uppercase profile-stat-text\"> 录入数据</div>
                                        </div>
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 5</div>
                                            <div class=\"uppercase profile-stat-text\"> 回收站</div>
                                        </div>
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 3</div>
                                            <div class=\"uppercase profile-stat-text\"> 模块权限</div>
                                        </div>
                                    </div>
                                    <!-- END STAT -->
                                    <div>
                                        <h4 class=\"profile-desc-title\">关于 赵博</h4>
                                        <span class=\"profile-desc-text\"> PHP程序员,5年工作经验,现任职于青岛联网飞网络科技有限公司 </span>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-globe\"></i>
                                            <a href=\"http://host.huo15.com\">host.huo15.com</a>
                                        </div>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-twitter\"></i>
                                            <a href=\"http://www.twitter.com/zhaobo/\">@buddy</a>
                                        </div>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-facebook\"></i>
                                            <a href=\"http://www.facebook.com/zhaobo/\">@buddy</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->

                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class=\"profile-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <!-- BEGIN PORTLET -->
                                        <div class=\"portlet light\">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption caption-md\">
                                                    <i class=\"icon-bar-chart theme-font hide\"></i>
                                                    <span class=\"caption-subject font-blue-madison bold uppercase\">预览</span>
                                                    <span class=\"caption-helper\">root权限</span>
                                                </div>
                                                <div class=\"actions\">
                                                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm active\">
                                                            <input type=\"radio\" name=\"options\" class=\"toggle\"
                                                                   id=\"option1\">模块管理</label>
                                                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm\">
                                                            <input type=\"radio\" name=\"options\" class=\"toggle\"
                                                                   id=\"option2\">数据列表</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"table-responsive\">
                                                    <table class=\"table\">
                                                        <thead>
                                                        <tr>
                                                            <th>名称</th>
                                                            <th>内容</th>
                                                            <th>备注</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>编号</td>
                                                            <td>NO0001</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>用户名</td>
                                                            <td>赵博</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>年龄</td>
                                                            <td>28</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>性别</td>
                                                            <td>男</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>部门</td>
                                                            <td>董事会</td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>简介</td>
                                                            <td>PHP程序员,5年工作经验,现任职于青岛联网飞网络科技有限公司</td>
                                                            <td></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END PORTLET -->
                                    </div>
                                </div>

                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                ";
        
        $__internal_194ff1d029a93a2aef1fdeedd3a0d2def4e5781fa65d15e94679aca7cc884713->leave($__internal_194ff1d029a93a2aef1fdeedd3a0d2def4e5781fa65d15e94679aca7cc884713_prof);

    }

    // line 816
    public function block_footer($context, array $blocks = array())
    {
        $__internal_edee0e538519527a843edd9aa157ebae7354bc0661d3450928b5897f96501c8f = $this->env->getExtension("native_profiler");
        $__internal_edee0e538519527a843edd9aa157ebae7354bc0661d3450928b5897f96501c8f->enter($__internal_edee0e538519527a843edd9aa157ebae7354bc0661d3450928b5897f96501c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 817
        echo "        <div class=\"page-footer\">
            <div class=\"page-footer-inner\"> 2016 &copy; huo15 Theme By
                <a target=\"_blank\" href=\"http://host.huo15.com\">huo15 network</a> &nbsp;|&nbsp;
                <a href=\"http://host.huo15.com\"
                   title=\"huo15 network\" target=\"_blank\">huo15 info</a>
            </div>
            <div class=\"scroll-to-top\">
                <i class=\"icon-arrow-up\"></i>
            </div>
        </div>
    ";
        
        $__internal_edee0e538519527a843edd9aa157ebae7354bc0661d3450928b5897f96501c8f->leave($__internal_edee0e538519527a843edd9aa157ebae7354bc0661d3450928b5897f96501c8f_prof);

    }

    // line 838
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_eb4fadd49c410c9400a87db6b5e604c56d3d75b4ec32edd793c48a4bf5903b49 = $this->env->getExtension("native_profiler");
        $__internal_eb4fadd49c410c9400a87db6b5e604c56d3d75b4ec32edd793c48a4bf5903b49->enter($__internal_eb4fadd49c410c9400a87db6b5e604c56d3d75b4ec32edd793c48a4bf5903b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        // line 839
        echo "    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 840
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 842
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 843
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 846
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
";
        // line 850
        $this->displayBlock('pageLevelPlugins', $context, $blocks);
        // line 899
        echo "    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src=\"";
        // line 901
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
";
        // line 904
        $this->displayBlock('pageLevelScripts', $context, $blocks);
        // line 907
        echo "    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
";
        // line 909
        $this->displayBlock('themeLayoutScript', $context, $blocks);
        // line 913
        echo "    <!-- END THEME LAYOUT SCRIPTS -->
    <!-- BEGIN HUO15FIX -->
";
        // line 915
        $this->displayBlock('huo15fix', $context, $blocks);
        // line 922
        echo "    <!--END HUO15FIX-->
";
        
        $__internal_eb4fadd49c410c9400a87db6b5e604c56d3d75b4ec32edd793c48a4bf5903b49->leave($__internal_eb4fadd49c410c9400a87db6b5e604c56d3d75b4ec32edd793c48a4bf5903b49_prof);

    }

    // line 850
    public function block_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_e58b25848f5fe88bc1bedee89a2aaac93c44192e1348d0f51c54607c3c3cf5b0 = $this->env->getExtension("native_profiler");
        $__internal_e58b25848f5fe88bc1bedee89a2aaac93c44192e1348d0f51c54607c3c3cf5b0->enter($__internal_e58b25848f5fe88bc1bedee89a2aaac93c44192e1348d0f51c54607c3c3cf5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelPlugins"));

        // line 851
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 852
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 854
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 856
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 860
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 862
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 863
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/amcharts/radar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 864
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/light.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 866
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/patterns.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/chalk.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 870
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/ammap/ammap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 871
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/ammap/maps/js/worldLow.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/amcharts/amstockcharts/amstock.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 875
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 880
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 882
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 884
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 886
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 890
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 892
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 894
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
";
        
        $__internal_e58b25848f5fe88bc1bedee89a2aaac93c44192e1348d0f51c54607c3c3cf5b0->leave($__internal_e58b25848f5fe88bc1bedee89a2aaac93c44192e1348d0f51c54607c3c3cf5b0_prof);

    }

    // line 904
    public function block_pageLevelScripts($context, array $blocks = array())
    {
        $__internal_9420f1700e2b7fc1ee5cbffbe755f7dd07ceed46f04292d1c9b2c0d8a334d816 = $this->env->getExtension("native_profiler");
        $__internal_9420f1700e2b7fc1ee5cbffbe755f7dd07ceed46f04292d1c9b2c0d8a334d816->enter($__internal_9420f1700e2b7fc1ee5cbffbe755f7dd07ceed46f04292d1c9b2c0d8a334d816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelScripts"));

        // line 905
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_9420f1700e2b7fc1ee5cbffbe755f7dd07ceed46f04292d1c9b2c0d8a334d816->leave($__internal_9420f1700e2b7fc1ee5cbffbe755f7dd07ceed46f04292d1c9b2c0d8a334d816_prof);

    }

    // line 909
    public function block_themeLayoutScript($context, array $blocks = array())
    {
        $__internal_dd2a134c85b0fd5f30cdcf83058d7b34b346576655713dc0fdaf25ab40488b53 = $this->env->getExtension("native_profiler");
        $__internal_dd2a134c85b0fd5f30cdcf83058d7b34b346576655713dc0fdaf25ab40488b53->enter($__internal_dd2a134c85b0fd5f30cdcf83058d7b34b346576655713dc0fdaf25ab40488b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeLayoutScript"));

        // line 910
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 911
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_dd2a134c85b0fd5f30cdcf83058d7b34b346576655713dc0fdaf25ab40488b53->leave($__internal_dd2a134c85b0fd5f30cdcf83058d7b34b346576655713dc0fdaf25ab40488b53_prof);

    }

    // line 915
    public function block_huo15fix($context, array $blocks = array())
    {
        $__internal_1b25853ac3d86fb1a8cf5123fa6c21902ed40124f575b72e68b823d5485d8a92 = $this->env->getExtension("native_profiler");
        $__internal_1b25853ac3d86fb1a8cf5123fa6c21902ed40124f575b72e68b823d5485d8a92->enter($__internal_1b25853ac3d86fb1a8cf5123fa6c21902ed40124f575b72e68b823d5485d8a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "huo15fix"));

        // line 916
        echo "    <style>
        .page-content {
            background: #eef1f5;
        }
    </style>
";
        
        $__internal_1b25853ac3d86fb1a8cf5123fa6c21902ed40124f575b72e68b823d5485d8a92->leave($__internal_1b25853ac3d86fb1a8cf5123fa6c21902ed40124f575b72e68b823d5485d8a92_prof);

    }

    public function getTemplateName()
    {
        return "user_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1456 => 916,  1450 => 915,  1441 => 911,  1436 => 910,  1430 => 909,  1420 => 905,  1414 => 904,  1404 => 896,  1399 => 894,  1394 => 892,  1389 => 890,  1384 => 888,  1379 => 886,  1375 => 885,  1371 => 884,  1366 => 882,  1361 => 880,  1357 => 879,  1353 => 878,  1348 => 876,  1344 => 875,  1339 => 873,  1334 => 871,  1330 => 870,  1325 => 868,  1320 => 866,  1315 => 864,  1311 => 863,  1307 => 862,  1303 => 861,  1299 => 860,  1294 => 858,  1289 => 856,  1285 => 855,  1281 => 854,  1276 => 852,  1271 => 851,  1265 => 850,  1257 => 922,  1255 => 915,  1251 => 913,  1249 => 909,  1245 => 907,  1243 => 904,  1237 => 901,  1233 => 899,  1231 => 850,  1224 => 846,  1220 => 845,  1215 => 843,  1211 => 842,  1207 => 841,  1203 => 840,  1200 => 839,  1194 => 838,  1177 => 817,  1171 => 816,  1007 => 651,  997 => 643,  991 => 642,  981 => 636,  975 => 635,  930 => 594,  924 => 593,  909 => 572,  894 => 559,  884 => 552,  881 => 551,  879 => 550,  870 => 544,  860 => 537,  850 => 530,  810 => 492,  804 => 491,  776 => 451,  748 => 426,  742 => 422,  736 => 420,  734 => 419,  730 => 418,  581 => 272,  566 => 260,  551 => 248,  536 => 236,  521 => 224,  379 => 85,  375 => 84,  368 => 79,  362 => 78,  354 => 924,  352 => 838,  345 => 834,  341 => 833,  334 => 828,  332 => 816,  322 => 808,  320 => 642,  316 => 640,  314 => 635,  310 => 633,  308 => 593,  293 => 580,  291 => 491,  270 => 472,  268 => 78,  263 => 75,  257 => 74,  248 => 67,  242 => 64,  237 => 63,  231 => 62,  222 => 58,  216 => 56,  210 => 55,  203 => 52,  197 => 51,  187 => 45,  182 => 43,  178 => 42,  172 => 40,  166 => 39,  156 => 70,  153 => 69,  151 => 62,  147 => 60,  145 => 55,  141 => 53,  139 => 51,  134 => 48,  132 => 39,  123 => 33,  118 => 31,  113 => 29,  108 => 27,  104 => 26,  95 => 20,  91 => 18,  85 => 17,  65 => 3,  59 => 2,  52 => 926,  50 => 74,  47 => 73,  45 => 17,  43 => 2,  40 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* {% block htmltop %}*/
/* <!--火一五信息科技有限公司-->*/
/* <!--联系方式:15288986891-->*/
/* <!--QQ:3186355915-->*/
/* <!--web:http://host.huo15.com-->*/
/* <!--[if IE 8]>*/
/* */
/* <html lang="en" class="ie8 no-js"> <![endif]-->*/
/* <!--[if IE 9]>*/
/* <html lang="en" class="ie9 no-js"> <![endif]-->*/
/* <!--[if !IE]><!-->*/
/* <html lang="en">*/
/* <!--<![endif]-->*/
/* <!-- BEGIN HEAD -->*/
/* {% endblock %}*/
/* {% block head %}*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>{{ title }}</title>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1" name="viewport"/>*/
/*         <meta content="" name="description"/>*/
/*         <meta content="" name="author"/>*/
/*         <!-- BEGIN GLOBAL MANDATORY STYLES -->*/
/*         <link href="{{ asset('huo15/css/font1.css') }}" rel="stylesheet" type="text/css"/>*/
/*         <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"*/
/*               type="text/css"/>*/
/*         <link href={{ asset("assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }} rel="stylesheet"*/
/*               type="text/css"/>*/
/*         <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"*/
/*               type="text/css"/>*/
/*         <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet"*/
/*               type="text/css"/>*/
/*         <!-- END GLOBAL MANDATORY STYLES -->*/
/* */
/* */
/*         <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*         {% block h_pageLevelPlugins %}*/
/*             <link href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}"*/
/*                   rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet"*/
/*                   type="text/css"/>*/
/*             <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet"*/
/*                   type="text/css"/>*/
/*         {% endblock %}*/
/*         <!-- END PAGE LEVEL PLUGINS -->*/
/* */
/*         <!-- BEGIN PAGE LEVEL STYLES -->*/
/*         {% block h_pageLevelStyles %}*/
/*         {% endblock %}*/
/*         <!-- END PAGE LEVEL STYLES -->*/
/*         <!-- BEGIN THEME GLOBAL STYLES -->*/
/*         {% block h_themeGlobalStyles %}*/
/*             <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components"*/
/*                   type="text/css"/>*/
/*             <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*         {% endblock %}*/
/*         <!-- END THEME GLOBAL STYLES -->*/
/*         <!-- BEGIN THEME LAYOUT STYLES -->*/
/*         {% block h_themeLayoutStyles %}*/
/*             <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet"*/
/*                   type="text/css"*/
/*                   id="style_color"/>*/
/*             <link href="{{ asset('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*         {% endblock %}*/
/*         <!-- END THEME LAYOUT STYLES -->*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>*/
/*     </head>*/
/* {% endblock %}*/
/* <!-- END HEAD -->*/
/* {% block body %}*/
/* <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">*/
/* <div class="page-wrapper">*/
/*     <!-- BEGIN HEADER -->*/
/*     {% block header %}*/
/*         <div class="page-header navbar navbar-fixed-top">*/
/*             <!-- BEGIN HEADER INNER -->*/
/*             <div class="page-header-inner ">*/
/*                 <!-- BEGIN LOGO -->*/
/*                 <div class="page-logo">*/
/*                     <a href="{{path('app_user_user_modprofile') }}">*/
/*                         <img src="{{ asset('assets/layouts/layout/img/logo.png') }}" alt="logo" class="logo-default"/>*/
/*                     </a>*/
/*                     <div class="menu-toggler sidebar-toggler">*/
/*                         <span></span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- END LOGO -->*/
/*                 <!-- BEGIN RESPONSIVE MENU TOGGLER -->*/
/*                 <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"*/
/*                    data-target=".navbar-collapse">*/
/*                     <span></span>*/
/*                 </a>*/
/*                 <!-- END RESPONSIVE MENU TOGGLER -->*/
/*                 <!-- BEGIN TOP NAVIGATION MENU -->*/
/*                 <div class="top-menu">*/
/*                     <ul class="nav navbar-nav pull-right">*/
/*                         <!-- BEGIN NOTIFICATION DROPDOWN -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="hide dropdown dropdown-extended dropdown-notification" id="header_notification_bar">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"*/
/*                                data-close-others="true">*/
/*                                 <i class="icon-bell"></i>*/
/*                                 <span class="badge badge-default"> 7 </span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li class="external">*/
/*                                     <h3>*/
/*                                         <span class="bold">12 条</span> 通知</h3>*/
/*                                     <a href="page_user_profile_1.html">查看全部</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <ul class="dropdown-menu-list scroller" style="height: 250px;"*/
/*                                         data-handle-color="#637283">*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">just now</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-success">*/
/*                                                             <i class="fa fa-plus"></i>*/
/*                                                         </span> New user registered. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">3 mins</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-danger">*/
/*                                                             <i class="fa fa-bolt"></i>*/
/*                                                         </span> Server #12 overloaded. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">10 mins</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-warning">*/
/*                                                             <i class="fa fa-bell-o"></i>*/
/*                                                         </span> Server #2 not responding. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">14 hrs</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-info">*/
/*                                                             <i class="fa fa-bullhorn"></i>*/
/*                                                         </span> Application error. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">2 days</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-danger">*/
/*                                                             <i class="fa fa-bolt"></i>*/
/*                                                         </span> Database overloaded 68%. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">3 days</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-danger">*/
/*                                                             <i class="fa fa-bolt"></i>*/
/*                                                         </span> A user IP blocked. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">4 days</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-warning">*/
/*                                                             <i class="fa fa-bell-o"></i>*/
/*                                                         </span> Storage Server #4 not responding dfdfdfd. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">5 days</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-info">*/
/*                                                             <i class="fa fa-bullhorn"></i>*/
/*                                                         </span> System Error. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">9 days</span>*/
/*                                                     <span class="details">*/
/*                                                         <span class="label label-sm label-icon label-danger">*/
/*                                                             <i class="fa fa-bolt"></i>*/
/*                                                         </span> Storage server failed. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- END NOTIFICATION DROPDOWN -->*/
/*                         <!-- BEGIN INBOX DROPDOWN -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="hide dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"*/
/*                                data-close-others="true">*/
/*                                 <i class="icon-envelope-open"></i>*/
/*                                 <span class="badge badge-default"> 4 </span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li class="external">*/
/*                                     <h3>You have*/
/*                                         <span class="bold">7 New</span> Messages</h3>*/
/*                                     <a href="app_inbox.html">view all</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <ul class="dropdown-menu-list scroller" style="height: 275px;"*/
/*                                         data-handle-color="#637283">*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                     <span class="photo">*/
/*                                                         <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg') }}"*/
/*                                                              class="img-circle" alt=""> </span>*/
/*                                                     <span class="subject">*/
/*                                                         <span class="from"> Lisa Wong </span>*/
/*                                                         <span class="time">Just Now </span>*/
/*                                                     </span>*/
/*                                                 <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                     <span class="photo">*/
/*                                                         <img src="{{ asset('assets/layouts/layout3/img/avatar3.jpg') }}"*/
/*                                                              class="img-circle" alt=""> </span>*/
/*                                                     <span class="subject">*/
/*                                                         <span class="from"> Richard Doe </span>*/
/*                                                         <span class="time">16 mins </span>*/
/*                                                     </span>*/
/*                                                 <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                     <span class="photo">*/
/*                                                         <img src="{{ asset('assets/layouts/layout3/img/avatar1.jpg') }}"*/
/*                                                              class="img-circle" alt=""> </span>*/
/*                                                     <span class="subject">*/
/*                                                         <span class="from"> Bob Nilson </span>*/
/*                                                         <span class="time">2 hrs </span>*/
/*                                                     </span>*/
/*                                                 <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                     <span class="photo">*/
/*                                                         <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg') }}"*/
/*                                                              class="img-circle" alt=""> </span>*/
/*                                                     <span class="subject">*/
/*                                                         <span class="from"> Lisa Wong </span>*/
/*                                                         <span class="time">40 mins </span>*/
/*                                                     </span>*/
/*                                                 <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                     <span class="photo">*/
/*                                                         <img src="{{ asset('assets/layouts/layout3/img/avatar3.jpg') }}"*/
/*                                                              class="img-circle" alt=""> </span>*/
/*                                                     <span class="subject">*/
/*                                                         <span class="from"> Richard Doe </span>*/
/*                                                         <span class="time">46 mins </span>*/
/*                                                     </span>*/
/*                                                 <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- END INBOX DROPDOWN -->*/
/*                         <!-- BEGIN TODO DROPDOWN -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="hide dropdown dropdown-extended dropdown-tasks" id="header_task_bar">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"*/
/*                                data-close-others="true">*/
/*                                 <i class="icon-calendar"></i>*/
/*                                 <span class="badge badge-default"> 3 </span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended tasks">*/
/*                                 <li class="external">*/
/*                                     <h3>You have*/
/*                                         <span class="bold">12 pending</span> tasks</h3>*/
/*                                     <a href="app_todo.html">view all</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <ul class="dropdown-menu-list scroller" style="height: 275px;"*/
/*                                         data-handle-color="#637283">*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                     <span class="task">*/
/*                                                         <span class="desc">New release v1.2 </span>*/
/*                                                         <span class="percent">30%</span>*/
/*                                                     </span>*/
/*                                                     <span class="progress">*/
/*                                                         <span style="width: 40%;"*/
/*                                                               class="progress-bar progress-bar-success"*/
/*                                                               aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">*/
/*                                                             <span class="sr-only">40% Complete</span>*/
/*                                                         </span>*/
/*                                                     </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                     <span class="task">*/
/*                                                         <span class="desc">Application deployment</span>*/
/*                                                         <span class="percent">65%</span>*/
/*                                                     </span>*/
/*                                                     <span class="progress">*/
/*                                                         <span style="width: 65%;"*/
/*                                                               class="progress-bar progress-bar-danger"*/
/*                                                               aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">*/
/*                                                             <span class="sr-only">65% Complete</span>*/
/*                                                         </span>*/
/*                                                     </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                     <span class="task">*/
/*                                                         <span class="desc">Mobile app release</span>*/
/*                                                         <span class="percent">98%</span>*/
/*                                                     </span>*/
/*                                                     <span class="progress">*/
/*                                                         <span style="width: 98%;"*/
/*                                                               class="progress-bar progress-bar-success"*/
/*                                                               aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">*/
/*                                                             <span class="sr-only">98% Complete</span>*/
/*                                                         </span>*/
/*                                                     </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                     <span class="task">*/
/*                                                         <span class="desc">Database migration</span>*/
/*                                                         <span class="percent">10%</span>*/
/*                                                     </span>*/
/*                                                     <span class="progress">*/
/*                                                         <span style="width: 10%;"*/
/*                                                               class="progress-bar progress-bar-warning"*/
/*                                                               aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">*/
/*                                                             <span class="sr-only">10% Complete</span>*/
/*                                                         </span>*/
/*                                                     </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                     <span class="task">*/
/*                                                         <span class="desc">Web server upgrade</span>*/
/*                                                         <span class="percent">58%</span>*/
/*                                                     </span>*/
/*                                                     <span class="progress">*/
/*                                                         <span style="width: 58%;" class="progress-bar progress-bar-info"*/
/*                                                               aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">*/
/*                                                             <span class="sr-only">58% Complete</span>*/
/*                                                         </span>*/
/*                                                     </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                     <span class="task">*/
/*                                                         <span class="desc">Mobile development</span>*/
/*                                                         <span class="percent">85%</span>*/
/*                                                     </span>*/
/*                                                     <span class="progress">*/
/*                                                         <span style="width: 85%;"*/
/*                                                               class="progress-bar progress-bar-success"*/
/*                                                               aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">*/
/*                                                             <span class="sr-only">85% Complete</span>*/
/*                                                         </span>*/
/*                                                     </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                     <span class="task">*/
/*                                                         <span class="desc">New UI release</span>*/
/*                                                         <span class="percent">38%</span>*/
/*                                                     </span>*/
/*                                                     <span class="progress progress-striped">*/
/*                                                         <span style="width: 38%;"*/
/*                                                               class="progress-bar progress-bar-important"*/
/*                                                               aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">*/
/*                                                             <span class="sr-only">38% Complete</span>*/
/*                                                         </span>*/
/*                                                     </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- END TODO DROPDOWN -->*/
/*                         <!-- BEGIN USER LOGIN DROPDOWN -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="dropdown dropdown-user">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"*/
/*                                data-close-others="true">*/
/*                                 <img alt="" class="img-circle"*/
/*                                      src="{{ asset('assets/layouts/layout/img/avatar3_small.jpg') }}"/>*/
/*                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                     <span class="username username-hide-on-mobile"> {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} </span>*/
/*                                 {% endif %}*/
/*                                 <i class="fa fa-angle-down"></i>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-menu-default">*/
/*                                 <li>*/
/*                                     <a href="{{ path('userIndex') }}">*/
/*                                         <i class="icon-user"></i> 个人中心 </a>*/
/*                                 </li>*/
/*                                 <li class="hide">*/
/*                                     <a href="app_calendar.html">*/
/*                                         <i class="icon-calendar"></i> My Calendar </a>*/
/*                                 </li>*/
/*                                 <li class="hide">*/
/*                                     <a href="app_inbox.html">*/
/*                                         <i class="icon-envelope-open"></i> My Inbox*/
/*                                         <span class="badge badge-danger"> 3 </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="hide">*/
/*                                     <a href="app_todo.html">*/
/*                                         <i class="icon-rocket"></i> My Tasks*/
/*                                         <span class="badge badge-success"> 7 </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a href="page_user_lock_1.html">*/
/*                                         <i class="icon-lock"></i> 锁屏 </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ url('fos_user_security_logout') }}">*/
/*                                         <i class="icon-key"></i> 退出 </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- END USER LOGIN DROPDOWN -->*/
/*                         <!-- BEGIN QUICK SIDEBAR TOGGLER -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="hide dropdown dropdown-quick-sidebar-toggler">*/
/*                             <a href="javascript:;" class="dropdown-toggle">*/
/*                                 <i class="icon-logout"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                         <!-- END QUICK SIDEBAR TOGGLER -->*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- END TOP NAVIGATION MENU -->*/
/*             </div>*/
/*             <!-- END HEADER INNER -->*/
/*         </div>*/
/*     {% endblock %}*/
/*     <!-- END HEADER -->*/
/*     <!-- BEGIN HEADER & CONTENT DIVIDER -->*/
/*     <div class="clearfix"></div>*/
/*     <!-- END HEADER & CONTENT DIVIDER -->*/
/*     <!-- BEGIN CONTAINER -->*/
/*     <div class="page-container">*/
/*         <!-- BEGIN SIDEBAR -->*/
/*         <div class="page-sidebar-wrapper">*/
/*             <!-- BEGIN SIDEBAR -->*/
/*             <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->*/
/*             <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->*/
/*             <div class="page-sidebar navbar-collapse collapse">*/
/*                 <!-- BEGIN SIDEBAR MENU -->*/
/*                 <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->*/
/*                 <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->*/
/*                 <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->*/
/*                 <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->*/
/*                 <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->*/
/*                 <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->*/
/*                 {% block sidebarMenu %}*/
/*                     <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"*/
/*                         data-slide-speed="200" style="padding-top: 20px">*/
/*                         <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->*/
/*                         <!-- BEGIN SIDEBAR TOGGLER BUTTON -->*/
/*                         <li class="sidebar-toggler-wrapper hide">*/
/*                             <div class="sidebar-toggler">*/
/*                                 <span></span>*/
/*                             </div>*/
/*                         </li>*/
/*                         <!-- END SIDEBAR TOGGLER BUTTON -->*/
/*                         <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->*/
/*                         <li class="sidebar-search-wrapper">*/
/*                             <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->*/
/*                             <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->*/
/*                             <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->*/
/*                             <form class="sidebar-search  " action="page_general_search_3.html" method="POST">*/
/*                                 <a href="javascript:;" class="remove">*/
/*                                     <i class="icon-close"></i>*/
/*                                 </a>*/
/*                                 <div class="input-group">*/
/*                                     <input type="text" class="form-control" placeholder="搜索...">*/
/*                                         <span class="input-group-btn">*/
/*                                             <a href="javascript:;" class="btn submit">*/
/*                                                 <i class="icon-magnifier"></i>*/
/*                                             </a>*/
/*                                         </span>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <!-- END RESPONSIVE QUICK SEARCH FORM -->*/
/*                         </li>*/
/*                         <li class="nav-item start active open">*/
/*                             <a href="javascript:;" class="nav-link nav-toggle">*/
/*                                 <i class="icon-home"></i>*/
/*                                 <span class="title">会员管理</span>*/
/*                                 <span class="arrow"></span>*/
/*                             </a>*/
/*                             <ul class="sub-menu">*/
/*                                 <li class="nav-item start ">*/
/*                                     <a href="{{ path('app_user_user_ulist') }}" class="nav-link ">*/
/*                                         <i class="icon-bar-chart"></i>*/
/*                                         <span class="title">会员列表</span>*/
/* */
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="nav-item start ">*/
/*                                     <a href="{{ path('departmentList') }}" class="nav-link ">*/
/*                                         <i class="icon-bulb"></i>*/
/*                                         <span class="title">部门列表</span>*/
/* */
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="nav-item start ">*/
/*                                     <a href="{{ path('userIndex') }}" class="nav-link ">*/
/*                                         <i class="icon-graph"></i>*/
/*                                         <span class="title">个人中心</span>*/
/* */
/*                                     </a>*/
/*                                 </li>*/
/*                                 {% if is_granted('ROLE_ADMIN') %}*/
/*                                 <li class="nav-item start ">*/
/*                                     <a href="{{ url('addNewMember') }}" class="nav-link ">*/
/*                                         <i class="icon-bell"></i>*/
/*                                         <span class="title">添加会员</span>*/
/* */
/*                                     </a>*/
/*                                 </li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="heading">*/
/*                             <h3 class="uppercase">事务管理</h3>*/
/*                         </li>*/
/*                         <li class="nav-item">*/
/*                             <a href="javascript:;" class="nav-link nav-toggle">*/
/*                                 <i class="icon-diamond"></i>*/
/*                                 <span class="title">模块管理</span>*/
/*                                 <span class="arrow"></span>*/
/*                             </a>*/
/*                             <ul class="sub-menu">*/
/*                                 <li class="nav-item  ">*/
/*                                     <a href="{{ path('app_modules_modules_modlist') }}" class="nav-link ">*/
/*                                         <span class="title">模块列表</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 {% endblock %}*/
/*                 <!-- END SIDEBAR MENU -->*/
/*                 <!-- END SIDEBAR MENU -->*/
/*             </div>*/
/*             <!-- END SIDEBAR -->*/
/*         </div>*/
/*         <!-- END SIDEBAR -->*/
/*         <!-- BEGIN CONTENT -->*/
/*         <div class="page-content-wrapper">*/
/*             <!-- BEGIN CONTENT BODY -->*/
/*             <div class="page-content">*/
/*                 <!-- BEGIN PAGE HEADER-->*/
/* */
/*                 <!-- BEGIN PAGE BAR -->*/
/*                 {% block pageBar %}*/
/*                     <div class="page-bar">*/
/*                         <ul class="page-breadcrumb">*/
/*                             <li>*/
/*                                 <a href="index.html">Home</a>*/
/*                                 <i class="fa fa-circle"></i>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span>User</span>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div class="page-toolbar">*/
/*                             <div class="btn-group pull-right">*/
/*                                 <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"*/
/*                                         data-toggle="dropdown"> Actions*/
/*                                     <i class="fa fa-angle-down"></i>*/
/*                                 </button>*/
/*                                 <ul class="dropdown-menu pull-right" role="menu">*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <i class="icon-bell"></i> Action</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <i class="icon-shield"></i> Another action</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <i class="icon-user"></i> Something else here</a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <i class="icon-bag"></i> Separated link</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 <!-- END PAGE BAR -->*/
/*                 <!-- BEGIN PAGE TITLE-->*/
/*                 {% block pageTitle %}*/
/*                     <h1 class="page-title"> User Profile*/
/*                         <small></small>*/
/*                     </h1>*/
/*                 {% endblock %}*/
/*                 <!-- END PAGE TITLE-->*/
/*                 <!-- END PAGE HEADER-->*/
/*                 {% block pageContent %}*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <!-- BEGIN PROFILE SIDEBAR -->*/
/*                             <div class="profile-sidebar">*/
/*                                 <!-- PORTLET MAIN -->*/
/*                                 <div class="portlet light profile-sidebar-portlet">*/
/*                                     <!-- SIDEBAR USERPIC -->*/
/*                                     <div class="profile-userpic">*/
/*                                         <img src="{{ asset('assets/pages/media/profile/profile_user.jpg') }}"*/
/*                                              class="img-responsive"*/
/*                                              alt="">*/
/*                                     </div>*/
/*                                     <!-- END SIDEBAR USERPIC -->*/
/*                                     <!-- SIDEBAR USER TITLE -->*/
/*                                     <div class="profile-usertitle">*/
/*                                         <div class="profile-usertitle-name"> 赵博</div>*/
/*                                         <div class="profile-usertitle-job"> 管理员</div>*/
/*                                     </div>*/
/*                                     <!-- END SIDEBAR USER TITLE -->*/
/*                                     <!-- SIDEBAR BUTTONS -->*/
/*                                     <div class="profile-userbuttons">*/
/*                                         <button type="button" class="btn btn-circle green btn-sm">添加数据</button>*/
/*                                         <button type="button" class="btn btn-circle red btn-sm">添加模块</button>*/
/*                                     </div>*/
/*                                     <!-- END SIDEBAR BUTTONS -->*/
/*                                     <!-- SIDEBAR MENU -->*/
/*                                     <div class="profile-usermenu">*/
/*                                         <ul class="nav">*/
/*                                             <li class="active">*/
/*                                                 <a href="/user/index">*/
/*                                                     <i class="icon-home"></i> 预览 </a>*/
/*                                             </li>*/
/*                                             <li class="">*/
/*                                                 <a href="/user/account">*/
/*                                                     <i class="icon-settings"></i> 账号设置 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="/user/help">*/
/*                                                     <i class="icon-info"></i> 帮助 </a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <!-- END MENU -->*/
/*                                 </div>*/
/*                                 <!-- END PORTLET MAIN -->*/
/*                                 <!-- PORTLET MAIN -->*/
/*                                 <div class="portlet light ">*/
/*                                     <!-- STAT -->*/
/*                                     <div class="row list-separated profile-stat">*/
/*                                         <div class="col-md-4 col-sm-4 col-xs-6">*/
/*                                             <div class="uppercase profile-stat-title"> 37</div>*/
/*                                             <div class="uppercase profile-stat-text"> 录入数据</div>*/
/*                                         </div>*/
/*                                         <div class="col-md-4 col-sm-4 col-xs-6">*/
/*                                             <div class="uppercase profile-stat-title"> 5</div>*/
/*                                             <div class="uppercase profile-stat-text"> 回收站</div>*/
/*                                         </div>*/
/*                                         <div class="col-md-4 col-sm-4 col-xs-6">*/
/*                                             <div class="uppercase profile-stat-title"> 3</div>*/
/*                                             <div class="uppercase profile-stat-text"> 模块权限</div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!-- END STAT -->*/
/*                                     <div>*/
/*                                         <h4 class="profile-desc-title">关于 赵博</h4>*/
/*                                         <span class="profile-desc-text"> PHP程序员,5年工作经验,现任职于青岛联网飞网络科技有限公司 </span>*/
/*                                         <div class="margin-top-20 profile-desc-link">*/
/*                                             <i class="fa fa-globe"></i>*/
/*                                             <a href="http://host.huo15.com">host.huo15.com</a>*/
/*                                         </div>*/
/*                                         <div class="margin-top-20 profile-desc-link">*/
/*                                             <i class="fa fa-twitter"></i>*/
/*                                             <a href="http://www.twitter.com/zhaobo/">@buddy</a>*/
/*                                         </div>*/
/*                                         <div class="margin-top-20 profile-desc-link">*/
/*                                             <i class="fa fa-facebook"></i>*/
/*                                             <a href="http://www.facebook.com/zhaobo/">@buddy</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- END PORTLET MAIN -->*/
/* */
/*                             </div>*/
/*                             <!-- END BEGIN PROFILE SIDEBAR -->*/
/*                             <!-- BEGIN PROFILE CONTENT -->*/
/*                             <div class="profile-content">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <!-- BEGIN PORTLET -->*/
/*                                         <div class="portlet light">*/
/*                                             <div class="portlet-title">*/
/*                                                 <div class="caption caption-md">*/
/*                                                     <i class="icon-bar-chart theme-font hide"></i>*/
/*                                                     <span class="caption-subject font-blue-madison bold uppercase">预览</span>*/
/*                                                     <span class="caption-helper">root权限</span>*/
/*                                                 </div>*/
/*                                                 <div class="actions">*/
/*                                                     <div class="btn-group btn-group-devided" data-toggle="buttons">*/
/*                                                         <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">*/
/*                                                             <input type="radio" name="options" class="toggle"*/
/*                                                                    id="option1">模块管理</label>*/
/*                                                         <label class="btn btn-transparent grey-salsa btn-circle btn-sm">*/
/*                                                             <input type="radio" name="options" class="toggle"*/
/*                                                                    id="option2">数据列表</label>*/
/* */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="portlet-body">*/
/*                                                 <div class="table-responsive">*/
/*                                                     <table class="table">*/
/*                                                         <thead>*/
/*                                                         <tr>*/
/*                                                             <th>名称</th>*/
/*                                                             <th>内容</th>*/
/*                                                             <th>备注</th>*/
/*                                                         </tr>*/
/*                                                         </thead>*/
/*                                                         <tbody>*/
/*                                                         <tr>*/
/*                                                             <td>编号</td>*/
/*                                                             <td>NO0001</td>*/
/*                                                             <td></td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td>用户名</td>*/
/*                                                             <td>赵博</td>*/
/*                                                             <td></td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td>年龄</td>*/
/*                                                             <td>28</td>*/
/*                                                             <td></td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td>性别</td>*/
/*                                                             <td>男</td>*/
/*                                                             <td></td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td>部门</td>*/
/*                                                             <td>董事会</td>*/
/*                                                             <td></td>*/
/*                                                         </tr>*/
/* */
/*                                                         <tr>*/
/*                                                             <td>简介</td>*/
/*                                                             <td>PHP程序员,5年工作经验,现任职于青岛联网飞网络科技有限公司</td>*/
/*                                                             <td></td>*/
/*                                                         </tr>*/
/* */
/*                                                         </tbody>*/
/*                                                     </table>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!-- END PORTLET -->*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                             <!-- END PROFILE CONTENT -->*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*             </div>*/
/*             <!-- END CONTENT BODY -->*/
/*         </div>*/
/*         <!-- END CONTENT -->*/
/* */
/*     </div>*/
/*     <!-- END CONTAINER -->*/
/*     <!-- BEGIN FOOTER -->*/
/*     {% block footer %}*/
/*         <div class="page-footer">*/
/*             <div class="page-footer-inner"> 2016 &copy; huo15 Theme By*/
/*                 <a target="_blank" href="http://host.huo15.com">huo15 network</a> &nbsp;|&nbsp;*/
/*                 <a href="http://host.huo15.com"*/
/*                    title="huo15 network" target="_blank">huo15 info</a>*/
/*             </div>*/
/*             <div class="scroll-to-top">*/
/*                 <i class="icon-arrow-up"></i>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/*     <!-- END FOOTER -->*/
/* </div>*/
/* */
/* */
/* <!--[if lt IE 9]>*/
/* <script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>*/
/* <script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>*/
/* <![endif]-->*/
/* */
/* */
/* {% block bottom %}*/
/*     <!-- BEGIN CORE PLUGINS -->*/
/*     <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <!-- END CORE PLUGINS -->*/
/*     <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/* {% block pageLevelPlugins %}*/
/*     <script src="{{ asset('assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}"*/
/*             type="text/javascript"></script>*/
/* {% endblock %}*/
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/*     <!-- BEGIN THEME GLOBAL SCRIPTS -->*/
/*     <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>*/
/*     <!-- END THEME GLOBAL SCRIPTS -->*/
/*     <!-- BEGIN PAGE LEVEL SCRIPTS -->*/
/* {% block pageLevelScripts %}*/
/*     <script src="{{ asset('assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/*     <!-- END PAGE LEVEL SCRIPTS -->*/
/*     <!-- BEGIN THEME LAYOUT SCRIPTS -->*/
/* {% block themeLayoutScript %}*/
/*     <script src="{{ asset('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/*     <!-- END THEME LAYOUT SCRIPTS -->*/
/*     <!-- BEGIN HUO15FIX -->*/
/* {% block huo15fix %}*/
/*     <style>*/
/*         .page-content {*/
/*             background: #eef1f5;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/*     <!--END HUO15FIX-->*/
/* {% endblock %}*/
/* </body>*/
/* {% endblock %}*/
/* </html>*/
