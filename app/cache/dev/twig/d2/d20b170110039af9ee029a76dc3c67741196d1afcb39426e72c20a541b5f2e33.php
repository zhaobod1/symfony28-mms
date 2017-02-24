<?php

/* FOSUserBundle::layout.log.html.twig */
class __TwigTemplate_3f5b502c6771b617e00ba66834c4f8fa2f2b618402bbc470edd3babea9833a2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a4f5402c2864206821107f12a2ee10c3e94b317206b79b9359dc39607347822 = $this->env->getExtension("native_profiler");
        $__internal_5a4f5402c2864206821107f12a2ee10c3e94b317206b79b9359dc39607347822->enter($__internal_5a4f5402c2864206821107f12a2ee10c3e94b317206b79b9359dc39607347822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.log.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html lang=\"en\" class=\"ie6 ielt8\"> <![endif]-->
<!--[if IE 7 ]>
<html lang=\"en\" class=\"ie7 ielt8\"> <![endif]-->
<!--[if IE 8 ]>
<html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>青岛会员管理系统</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"container\">

    <section id=\"content\">
        ";
        // line 19
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "    </section>
</div>
<style>
    /* Reset CSS */
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, font, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
    }

    body {
        background: #DCDDDF url(http://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
        color: #000;
        font: 14px Arial;
        margin: 0 auto;
        padding: 0;
        position: relative;
    }

    h1 {
        font-size: 28px;
    }

    h2 {
        font-size: 26px;
    }

    h3 {
        font-size: 18px;
    }

    h4 {
        font-size: 16px;
    }

    h5 {
        font-size: 14px;
    }

    h6 {
        font-size: 12px;
    }

    h1, h2, h3, h4, h5, h6 {
        color: #563D64;
    }

    small {
        font-size: 10px;
    }

    b, strong {
        font-weight: bold;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .left {
        float: left;
    }

    .right {
        float: right;
    }

    .alignleft {
        float: left;
        margin-right: 15px;
    }

    .alignright {
        float: right;
        margin-left: 15px;
    }

    .clearfix:after,
    form:after {
        content: \".\";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }

    .container {
        margin: 25px auto;
        position: relative;
        width: 900px;
    }

    #content {
        background: #f9f9f9;
        opacity: 0.9;
        filter: alpha(opacity=90);
        background: -moz-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        background: -webkit-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        background: -o-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        background: -ms-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        background: linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f8f8f8', endColorstr='#f9f9f9', GradientType=0);
        -webkit-box-shadow: 0 1px 0 #fff inset;
        -moz-box-shadow: 0 1px 0 #fff inset;
        -ms-box-shadow: 0 1px 0 #fff inset;
        -o-box-shadow: 0 1px 0 #fff inset;
        box-shadow: 0 1px 0 #fff inset;
        border: 1px solid #c4c6ca;
        margin: 0 auto;
        padding: 25px 0 0;
        position: relative;
        text-align: center;
        text-shadow: 0 1px 0 #fff;
        width: 400px;
    }

    #content h1 {
        color: #7E7E7E;
        font: bold 25px Helvetica, Arial, sans-serif;
        letter-spacing: -0.05em;
        line-height: 20px;
        margin: 10px 0 30px;
    }

    #content h1:before,
    #content h1:after {
        content: \"\";
        height: 1px;
        position: absolute;
        top: 10px;
        width: 27%;
    }

    #content h1:after {
        background: rgb(126, 126, 126);
        background: -moz-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        background: -webkit-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        background: -o-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        background: -ms-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        background: linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        right: 0;
    }

    #content h1:before {
        background: rgb(126, 126, 126);
        background: -moz-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        background: -webkit-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        background: -o-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        background: -ms-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        background: linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
        left: 0;
    }

    #content:after,
    #content:before {
        background: #f9f9f9;
        background: -moz-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        background: -webkit-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        background: -o-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        background: -ms-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        background: linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f8f8f8', endColorstr='#f9f9f9', GradientType=0);
        border: 1px solid #c4c6ca;
        content: \"\";
        display: block;
        height: 100%;
        left: -1px;
        position: absolute;
        width: 100%;
    }

    #content:after {
        -webkit-transform: rotate(2deg);
        -moz-transform: rotate(2deg);
        -ms-transform: rotate(2deg);
        -o-transform: rotate(2deg);
        transform: rotate(2deg);
        top: 0;
        z-index: -1;
    }

    #content:before {
        -webkit-transform: rotate(-3deg);
        -moz-transform: rotate(-3deg);
        -ms-transform: rotate(-3deg);
        -o-transform: rotate(-3deg);
        transform: rotate(-3deg);
        top: 0;
        z-index: -2;
    }

    #content form {
        margin: 0 20px;
        position: relative
    }

    #content form input[type=\"text\"],
    #content form input[type=\"password\"] {
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        -o-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
        -moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
        -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
        -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
        box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        background: #eae7e7 url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
        border: 1px solid #c8c8c8;
        color: #777;
        font: 13px Helvetica, Arial, sans-serif;
        margin: 0 0 10px;
        padding: 15px 10px 15px 40px;
        width: 80%;
    }

    #content form input[type=\"text\"]:focus,
    #content form input[type=\"password\"]:focus {
        -webkit-box-shadow: 0 0 2px #ed1c24 inset;
        -moz-box-shadow: 0 0 2px #ed1c24 inset;
        -ms-box-shadow: 0 0 2px #ed1c24 inset;
        -o-box-shadow: 0 0 2px #ed1c24 inset;
        box-shadow: 0 0 2px #ed1c24 inset;
        background-color: #fff;
        border: 1px solid #ed1c24;
        outline: none;
    }

    #username {
        background-position: 10px 10px !important
    }

    #password {
        background-position: 10px -53px !important
    }

    #content form input[type=\"submit\"] {
        background: rgb(254, 231, 154);
        background: -moz-linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);
        background: -webkit-linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);
        background: -o-linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);
        background: -ms-linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);
        background: linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fee79a', endColorstr='#fec151', GradientType=0);
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        -o-border-radius: 30px;
        border-radius: 30px;
        -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;
        -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;
        -ms-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;
        -o-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;
        box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;
        border: 1px solid #D69E31;
        color: #85592e;
        cursor: pointer;
        float: left;
        font: bold 15px Helvetica, Arial, sans-serif;
        height: 35px;
        margin: 20px 0 35px 15px;
        position: relative;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
        width: 120px;
    }

    #content form input[type=\"submit\"]:hover {
        background: rgb(254, 193, 81);
        background: -moz-linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);
        background: -webkit-linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);
        background: -o-linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);
        background: -ms-linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);
        background: linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fec151', endColorstr='#fee79a', GradientType=0);
    }

    #content form div a {
        color: #004a80;
        float: right;
        font-size: 12px;
        margin: 30px 15px 0 0;
        text-decoration: underline;
    }

    .button {
        background: rgb(247, 249, 250);
        background: -moz-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
        background: -webkit-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
        background: -o-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
        background: -ms-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
        background: linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f9fa', endColorstr='#f0f0f0', GradientType=0);
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
        -ms-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
        -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
        -webkit-border-radius: 0 0 5px 5px;
        -moz-border-radius: 0 0 5px 5px;
        -o-border-radius: 0 0 5px 5px;
        -ms-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px;
        border-top: 1px solid #CFD5D9;
        padding: 15px 0;
    }

    .button a {
        background: url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) 0 -112px no-repeat;
        color: #7E7E7E;
        font-size: 17px;
        padding: 2px 0 2px 40px;
        text-decoration: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .button a:hover {
        background-position: 0 -135px;
        color: #00aeef;
    }
</style>


<script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"
        type=\"text/javascript\"></script>
<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"
        type=\"text/javascript\"></script>
<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"
        type=\"text/javascript\"></script>


<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/backstretch/jquery.backstretch.min.js"), "html", null, true);
        echo "\"
        type=\"text/javascript\"></script>

<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/coming-soon-login.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


</body>
</html>";
        
        $__internal_5a4f5402c2864206821107f12a2ee10c3e94b317206b79b9359dc39607347822->leave($__internal_5a4f5402c2864206821107f12a2ee10c3e94b317206b79b9359dc39607347822_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f1fa99b8ac17891c156661572b9ed5b12c6fc4bab186f4dbc66fe935d08a7bd = $this->env->getExtension("native_profiler");
        $__internal_0f1fa99b8ac17891c156661572b9ed5b12c6fc4bab186f4dbc66fe935d08a7bd->enter($__internal_0f1fa99b8ac17891c156661572b9ed5b12c6fc4bab186f4dbc66fe935d08a7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "        ";
        
        $__internal_0f1fa99b8ac17891c156661572b9ed5b12c6fc4bab186f4dbc66fe935d08a7bd->leave($__internal_0f1fa99b8ac17891c156661572b9ed5b12c6fc4bab186f4dbc66fe935d08a7bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 20,  445 => 19,  433 => 383,  427 => 380,  420 => 376,  416 => 375,  411 => 373,  407 => 372,  402 => 370,  398 => 369,  48 => 21,  46 => 19,  37 => 13,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7 ]>*/
/* <html lang="en" class="ie6 ielt8"> <![endif]-->*/
/* <!--[if IE 7 ]>*/
/* <html lang="en" class="ie7 ielt8"> <![endif]-->*/
/* <!--[if IE 8 ]>*/
/* <html lang="en" class="ie8"> <![endif]-->*/
/* <!--[if (gte IE 9)|!(IE)]><!-->*/
/* <html lang="en"> <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>青岛会员管理系统</title>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="container">*/
/* */
/*     <section id="content">*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </section>*/
/* </div>*/
/* <style>*/
/*     /* Reset CSS *//* */
/*     html, body, div, span, applet, object, iframe,*/
/*     h1, h2, h3, h4, h5, h6, p, blockquote, pre,*/
/*     a, abbr, acronym, address, big, cite, code,*/
/*     del, dfn, em, font, img, ins, kbd, q, s, samp,*/
/*     small, strike, strong, sub, sup, tt, var,*/
/*     b, u, i, center,*/
/*     dl, dt, dd, ol, ul, li,*/
/*     fieldset, form, label, legend,*/
/*     table, caption, tbody, tfoot, thead, tr, th, td {*/
/*         margin: 0;*/
/*         padding: 0;*/
/*         border: 0;*/
/*         outline: 0;*/
/*         font-size: 100%;*/
/*         vertical-align: baseline;*/
/*         background: transparent;*/
/*     }*/
/* */
/*     body {*/
/*         background: #DCDDDF url(http://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);*/
/*         color: #000;*/
/*         font: 14px Arial;*/
/*         margin: 0 auto;*/
/*         padding: 0;*/
/*         position: relative;*/
/*     }*/
/* */
/*     h1 {*/
/*         font-size: 28px;*/
/*     }*/
/* */
/*     h2 {*/
/*         font-size: 26px;*/
/*     }*/
/* */
/*     h3 {*/
/*         font-size: 18px;*/
/*     }*/
/* */
/*     h4 {*/
/*         font-size: 16px;*/
/*     }*/
/* */
/*     h5 {*/
/*         font-size: 14px;*/
/*     }*/
/* */
/*     h6 {*/
/*         font-size: 12px;*/
/*     }*/
/* */
/*     h1, h2, h3, h4, h5, h6 {*/
/*         color: #563D64;*/
/*     }*/
/* */
/*     small {*/
/*         font-size: 10px;*/
/*     }*/
/* */
/*     b, strong {*/
/*         font-weight: bold;*/
/*     }*/
/* */
/*     a {*/
/*         text-decoration: none;*/
/*     }*/
/* */
/*     a:hover {*/
/*         text-decoration: underline;*/
/*     }*/
/* */
/*     .left {*/
/*         float: left;*/
/*     }*/
/* */
/*     .right {*/
/*         float: right;*/
/*     }*/
/* */
/*     .alignleft {*/
/*         float: left;*/
/*         margin-right: 15px;*/
/*     }*/
/* */
/*     .alignright {*/
/*         float: right;*/
/*         margin-left: 15px;*/
/*     }*/
/* */
/*     .clearfix:after,*/
/*     form:after {*/
/*         content: ".";*/
/*         display: block;*/
/*         height: 0;*/
/*         clear: both;*/
/*         visibility: hidden;*/
/*     }*/
/* */
/*     .container {*/
/*         margin: 25px auto;*/
/*         position: relative;*/
/*         width: 900px;*/
/*     }*/
/* */
/*     #content {*/
/*         background: #f9f9f9;*/
/*         opacity: 0.9;*/
/*         filter: alpha(opacity=90);*/
/*         background: -moz-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         background: -webkit-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         background: -o-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         background: -ms-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         background: linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f8f8f8', endColorstr='#f9f9f9', GradientType=0);*/
/*         -webkit-box-shadow: 0 1px 0 #fff inset;*/
/*         -moz-box-shadow: 0 1px 0 #fff inset;*/
/*         -ms-box-shadow: 0 1px 0 #fff inset;*/
/*         -o-box-shadow: 0 1px 0 #fff inset;*/
/*         box-shadow: 0 1px 0 #fff inset;*/
/*         border: 1px solid #c4c6ca;*/
/*         margin: 0 auto;*/
/*         padding: 25px 0 0;*/
/*         position: relative;*/
/*         text-align: center;*/
/*         text-shadow: 0 1px 0 #fff;*/
/*         width: 400px;*/
/*     }*/
/* */
/*     #content h1 {*/
/*         color: #7E7E7E;*/
/*         font: bold 25px Helvetica, Arial, sans-serif;*/
/*         letter-spacing: -0.05em;*/
/*         line-height: 20px;*/
/*         margin: 10px 0 30px;*/
/*     }*/
/* */
/*     #content h1:before,*/
/*     #content h1:after {*/
/*         content: "";*/
/*         height: 1px;*/
/*         position: absolute;*/
/*         top: 10px;*/
/*         width: 27%;*/
/*     }*/
/* */
/*     #content h1:after {*/
/*         background: rgb(126, 126, 126);*/
/*         background: -moz-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         background: -webkit-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         background: -o-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         background: -ms-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         background: linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         right: 0;*/
/*     }*/
/* */
/*     #content h1:before {*/
/*         background: rgb(126, 126, 126);*/
/*         background: -moz-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         background: -webkit-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         background: -o-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         background: -ms-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         background: linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);*/
/*         left: 0;*/
/*     }*/
/* */
/*     #content:after,*/
/*     #content:before {*/
/*         background: #f9f9f9;*/
/*         background: -moz-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         background: -webkit-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         background: -o-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         background: -ms-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         background: linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(249, 249, 249, 1) 100%);*/
/*         filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f8f8f8', endColorstr='#f9f9f9', GradientType=0);*/
/*         border: 1px solid #c4c6ca;*/
/*         content: "";*/
/*         display: block;*/
/*         height: 100%;*/
/*         left: -1px;*/
/*         position: absolute;*/
/*         width: 100%;*/
/*     }*/
/* */
/*     #content:after {*/
/*         -webkit-transform: rotate(2deg);*/
/*         -moz-transform: rotate(2deg);*/
/*         -ms-transform: rotate(2deg);*/
/*         -o-transform: rotate(2deg);*/
/*         transform: rotate(2deg);*/
/*         top: 0;*/
/*         z-index: -1;*/
/*     }*/
/* */
/*     #content:before {*/
/*         -webkit-transform: rotate(-3deg);*/
/*         -moz-transform: rotate(-3deg);*/
/*         -ms-transform: rotate(-3deg);*/
/*         -o-transform: rotate(-3deg);*/
/*         transform: rotate(-3deg);*/
/*         top: 0;*/
/*         z-index: -2;*/
/*     }*/
/* */
/*     #content form {*/
/*         margin: 0 20px;*/
/*         position: relative*/
/*     }*/
/* */
/*     #content form input[type="text"],*/
/*     #content form input[type="password"] {*/
/*         -webkit-border-radius: 3px;*/
/*         -moz-border-radius: 3px;*/
/*         -ms-border-radius: 3px;*/
/*         -o-border-radius: 3px;*/
/*         border-radius: 3px;*/
/*         -webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;*/
/*         -moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;*/
/*         -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;*/
/*         -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;*/
/*         box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;*/
/*         -webkit-transition: all 0.5s ease;*/
/*         -moz-transition: all 0.5s ease;*/
/*         -ms-transition: all 0.5s ease;*/
/*         -o-transition: all 0.5s ease;*/
/*         transition: all 0.5s ease;*/
/*         background: #eae7e7 url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;*/
/*         border: 1px solid #c8c8c8;*/
/*         color: #777;*/
/*         font: 13px Helvetica, Arial, sans-serif;*/
/*         margin: 0 0 10px;*/
/*         padding: 15px 10px 15px 40px;*/
/*         width: 80%;*/
/*     }*/
/* */
/*     #content form input[type="text"]:focus,*/
/*     #content form input[type="password"]:focus {*/
/*         -webkit-box-shadow: 0 0 2px #ed1c24 inset;*/
/*         -moz-box-shadow: 0 0 2px #ed1c24 inset;*/
/*         -ms-box-shadow: 0 0 2px #ed1c24 inset;*/
/*         -o-box-shadow: 0 0 2px #ed1c24 inset;*/
/*         box-shadow: 0 0 2px #ed1c24 inset;*/
/*         background-color: #fff;*/
/*         border: 1px solid #ed1c24;*/
/*         outline: none;*/
/*     }*/
/* */
/*     #username {*/
/*         background-position: 10px 10px !important*/
/*     }*/
/* */
/*     #password {*/
/*         background-position: 10px -53px !important*/
/*     }*/
/* */
/*     #content form input[type="submit"] {*/
/*         background: rgb(254, 231, 154);*/
/*         background: -moz-linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);*/
/*         background: -webkit-linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);*/
/*         background: -o-linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);*/
/*         background: -ms-linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);*/
/*         background: linear-gradient(top, rgba(254, 231, 154, 1) 0%, rgba(254, 193, 81, 1) 100%);*/
/*         filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fee79a', endColorstr='#fec151', GradientType=0);*/
/*         -webkit-border-radius: 30px;*/
/*         -moz-border-radius: 30px;*/
/*         -ms-border-radius: 30px;*/
/*         -o-border-radius: 30px;*/
/*         border-radius: 30px;*/
/*         -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;*/
/*         -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;*/
/*         -ms-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;*/
/*         -o-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;*/
/*         box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;*/
/*         border: 1px solid #D69E31;*/
/*         color: #85592e;*/
/*         cursor: pointer;*/
/*         float: left;*/
/*         font: bold 15px Helvetica, Arial, sans-serif;*/
/*         height: 35px;*/
/*         margin: 20px 0 35px 15px;*/
/*         position: relative;*/
/*         text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);*/
/*         width: 120px;*/
/*     }*/
/* */
/*     #content form input[type="submit"]:hover {*/
/*         background: rgb(254, 193, 81);*/
/*         background: -moz-linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);*/
/*         background: -webkit-linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);*/
/*         background: -o-linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);*/
/*         background: -ms-linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);*/
/*         background: linear-gradient(top, rgba(254, 193, 81, 1) 0%, rgba(254, 231, 154, 1) 100%);*/
/*         filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fec151', endColorstr='#fee79a', GradientType=0);*/
/*     }*/
/* */
/*     #content form div a {*/
/*         color: #004a80;*/
/*         float: right;*/
/*         font-size: 12px;*/
/*         margin: 30px 15px 0 0;*/
/*         text-decoration: underline;*/
/*     }*/
/* */
/*     .button {*/
/*         background: rgb(247, 249, 250);*/
/*         background: -moz-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);*/
/*         background: -webkit-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);*/
/*         background: -o-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);*/
/*         background: -ms-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);*/
/*         background: linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);*/
/*         filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f9fa', endColorstr='#f0f0f0', GradientType=0);*/
/*         -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;*/
/*         -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;*/
/*         -ms-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;*/
/*         -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;*/
/*         box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;*/
/*         -webkit-border-radius: 0 0 5px 5px;*/
/*         -moz-border-radius: 0 0 5px 5px;*/
/*         -o-border-radius: 0 0 5px 5px;*/
/*         -ms-border-radius: 0 0 5px 5px;*/
/*         border-radius: 0 0 5px 5px;*/
/*         border-top: 1px solid #CFD5D9;*/
/*         padding: 15px 0;*/
/*     }*/
/* */
/*     .button a {*/
/*         background: url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) 0 -112px no-repeat;*/
/*         color: #7E7E7E;*/
/*         font-size: 17px;*/
/*         padding: 2px 0 2px 40px;*/
/*         text-decoration: none;*/
/*         -webkit-transition: all 0.3s ease;*/
/*         -moz-transition: all 0.3s ease;*/
/*         -ms-transition: all 0.3s ease;*/
/*         -o-transition: all 0.3s ease;*/
/*         transition: all 0.3s ease;*/
/*     }*/
/* */
/*     .button a:hover {*/
/*         background-position: 0 -135px;*/
/*         color: #00aeef;*/
/*     }*/
/* </style>*/
/* */
/* */
/* <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"*/
/*         type="text/javascript"></script>*/
/* <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"*/
/*         type="text/javascript"></script>*/
/* <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"*/
/*         type="text/javascript"></script>*/
/* */
/* */
/* <script src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}"*/
/*         type="text/javascript"></script>*/
/* */
/* <script src="{{ asset('assets/pages/scripts/coming-soon-login.min.js') }}" type="text/javascript"></script>*/
/* */
/* */
/* </body>*/
/* </html>*/