<?php

/* user/department.html.twig */
class __TwigTemplate_747a89c6ee9dd0895d3d41da5f4e8f259cfec29027098be9e29991123ff46dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/department.html.twig", 1);
        $this->blocks = array(
            'h_pageLevelPlugins' => array($this, 'block_h_pageLevelPlugins'),
            'h_themeLayoutStyles' => array($this, 'block_h_themeLayoutStyles'),
            'header' => array($this, 'block_header'),
            'sideBar' => array($this, 'block_sideBar'),
            'pageBar' => array($this, 'block_pageBar'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageContent' => array($this, 'block_pageContent'),
            'footer' => array($this, 'block_footer'),
            'pageLevelPlugins' => array($this, 'block_pageLevelPlugins'),
            'pageLevelScripts' => array($this, 'block_pageLevelScripts'),
            'themeLayoutScript' => array($this, 'block_themeLayoutScript'),
            'huo15fix' => array($this, 'block_huo15fix'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d0b4da322540494efcbf26a967a275760edfd64adbf76243e193d30263326f5 = $this->env->getExtension("native_profiler");
        $__internal_9d0b4da322540494efcbf26a967a275760edfd64adbf76243e193d30263326f5->enter($__internal_9d0b4da322540494efcbf26a967a275760edfd64adbf76243e193d30263326f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/department.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0b4da322540494efcbf26a967a275760edfd64adbf76243e193d30263326f5->leave($__internal_9d0b4da322540494efcbf26a967a275760edfd64adbf76243e193d30263326f5_prof);

    }

    // line 5
    public function block_h_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_79f81a3ca95f2ee63d46a4fcaee22427b90653745893135f1074f3eee53bc6a2 = $this->env->getExtension("native_profiler");
        $__internal_79f81a3ca95f2ee63d46a4fcaee22427b90653745893135f1074f3eee53bc6a2->enter($__internal_79f81a3ca95f2ee63d46a4fcaee22427b90653745893135f1074f3eee53bc6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelPlugins"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
";
        
        $__internal_79f81a3ca95f2ee63d46a4fcaee22427b90653745893135f1074f3eee53bc6a2->leave($__internal_79f81a3ca95f2ee63d46a4fcaee22427b90653745893135f1074f3eee53bc6a2_prof);

    }

    // line 13
    public function block_h_themeLayoutStyles($context, array $blocks = array())
    {
        $__internal_4481ab492e26c62fc456792f2ad945f27302688edc8757a8a55095f289905feb = $this->env->getExtension("native_profiler");
        $__internal_4481ab492e26c62fc456792f2ad945f27302688edc8757a8a55095f289905feb->enter($__internal_4481ab492e26c62fc456792f2ad945f27302688edc8757a8a55095f289905feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_themeLayoutStyles"));

        // line 14
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"
                  id=\"style_color\"/>
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        
        $__internal_4481ab492e26c62fc456792f2ad945f27302688edc8757a8a55095f289905feb->leave($__internal_4481ab492e26c62fc456792f2ad945f27302688edc8757a8a55095f289905feb_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_283e5fabd10fe8257449265223ee9756ecef81386f6da719bba98bcee428e1e1 = $this->env->getExtension("native_profiler");
        $__internal_283e5fabd10fe8257449265223ee9756ecef81386f6da719bba98bcee428e1e1->enter($__internal_283e5fabd10fe8257449265223ee9756ecef81386f6da719bba98bcee428e1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_283e5fabd10fe8257449265223ee9756ecef81386f6da719bba98bcee428e1e1->leave($__internal_283e5fabd10fe8257449265223ee9756ecef81386f6da719bba98bcee428e1e1_prof);

    }

    // line 24
    public function block_sideBar($context, array $blocks = array())
    {
        $__internal_36ea1759ca459549511ecc22dbd147343c72746a020fe7ade2edc402b856b860 = $this->env->getExtension("native_profiler");
        $__internal_36ea1759ca459549511ecc22dbd147343c72746a020fe7ade2edc402b856b860->enter($__internal_36ea1759ca459549511ecc22dbd147343c72746a020fe7ade2edc402b856b860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sideBar"));

        // line 25
        echo "    ";
        $this->displayParentBlock("sideBar", $context, $blocks);
        echo "
";
        
        $__internal_36ea1759ca459549511ecc22dbd147343c72746a020fe7ade2edc402b856b860->leave($__internal_36ea1759ca459549511ecc22dbd147343c72746a020fe7ade2edc402b856b860_prof);

    }

    // line 27
    public function block_pageBar($context, array $blocks = array())
    {
        $__internal_4e56a00c320ad2704df94f428364693205cf8dff330605f129119d353529d7e1 = $this->env->getExtension("native_profiler");
        $__internal_4e56a00c320ad2704df94f428364693205cf8dff330605f129119d353529d7e1->enter($__internal_4e56a00c320ad2704df94f428364693205cf8dff330605f129119d353529d7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageBar"));

        // line 28
        echo "    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <a href=\"index.html\">主页</a>
                <i class=\"fa fa-circle\"></i>
            </li>
            <li>
                <a href=\"#\">会员管理</a>
                <i class=\"fa fa-circle\"></i>
            </li>
            <li>
                <span>部门列表</span>
            </li>
        </ul>
        <div class=\"page-toolbar\">
            <div class=\"btn-group pull-right\">
                <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\"
                        data-toggle=\"dropdown\"> 快捷菜单
                    <i class=\"fa fa-angle-down\"></i>
                </button>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bell\"></i> 公告</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-shield\"></i> 规则</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-user\"></i> 个人中心</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bag\"></i> 计划任务</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_4e56a00c320ad2704df94f428364693205cf8dff330605f129119d353529d7e1->leave($__internal_4e56a00c320ad2704df94f428364693205cf8dff330605f129119d353529d7e1_prof);

    }

    // line 72
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_3e09477ee3df0918f241d7e9dc04d3f571e6240f26190fdcb56f3428539ea2c8 = $this->env->getExtension("native_profiler");
        $__internal_3e09477ee3df0918f241d7e9dc04d3f571e6240f26190fdcb56f3428539ea2c8->enter($__internal_3e09477ee3df0918f241d7e9dc04d3f571e6240f26190fdcb56f3428539ea2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 73
        echo "    <h1 class=\"page-title\"> 部门列表
        <small></small>
    </h1>
";
        
        $__internal_3e09477ee3df0918f241d7e9dc04d3f571e6240f26190fdcb56f3428539ea2c8->leave($__internal_3e09477ee3df0918f241d7e9dc04d3f571e6240f26190fdcb56f3428539ea2c8_prof);

    }

    // line 78
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_c37b56ee8dea7f7bae09adddc5915966c5e9ec043475e163c8800103c838fef9 = $this->env->getExtension("native_profiler");
        $__internal_c37b56ee8dea7f7bae09adddc5915966c5e9ec043475e163c8800103c838fef9->enter($__internal_c37b56ee8dea7f7bae09adddc5915966c5e9ec043475e163c8800103c838fef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 79
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                    <div class=\"caption font-dark\">
                        <div class=\"col-md-4\">



                            <div class=\"btn-group\">
                                <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getUrl("addDepartment");
        echo "\">
                                <button id=\"huo15_editable_add_department\" class=\"btn green\">添加部门
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"tools\"></div>
                </div>
                <div class=\"portlet-body\">
                    <table class=\"table table-striped table-bordered table-hover table-checkable\" id=\"datatable_department\">
                        <thead>
                        <tr role=\"row\" class=\"heading\">
                            <th width=\"2%\">
                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#sample_2 .checkboxes\"/>
                                    <span></span>
                                </label>
                            </th>
                            <th width=\"15%\">编号</th>
                            <th width=\"25%\">部门名称</th>
                            <th width=\"20%\">成立日期</th>
                            <th width=\"20%\">修改日期</th>
                            <th width=\"18%\">操作</th>
                        </tr>
                        <tr role=\"row\" class=\"filter\">
                            <td></td>
                            <td>
                                <input type=\"text\" class=\"form-control form-filter input-sm\" name=\"order_department_no\">
                            </td>
                            <td>
                                <input type=\"text\" class=\"form-control form-filter input-sm\" name=\"order_department_name\"></td>
                            <td>
                                <div class=\"input-group date date-picker margin-bottom-5\" data-date-format=\"yyyy-mm-dd\">
                                    <input type=\"text\" class=\"form-control form-filter input-sm\" readonly
                                           name=\"order_create_from\" placeholder=\"From\">
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-sm default\" type=\"button\">
                                                                        <i class=\"fa fa-calendar\"></i>
                                                                    </button>
                                                                </span>
                                </div>
                                <div class=\"input-group date date-picker\" data-date-format=\"yyyy-mm-dd\">
                                    <input type=\"text\" class=\"form-control form-filter input-sm\" readonly
                                           name=\"order_create_to\" placeholder=\"To\">
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-sm default\" type=\"button\">
                                                                        <i class=\"fa fa-calendar\"></i>
                                                                    </button>
                                                                </span>
                                </div>
                            </td>
                            <td>
                                <div class=\"input-group date date-picker margin-bottom-5\" data-date-format=\"yyyy-mm-dd\">
                                    <input type=\"text\" class=\"form-control form-filter input-sm\" readonly
                                           name=\"order_update_from\" placeholder=\"From\">
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-sm default\" type=\"button\">
                                                                        <i class=\"fa fa-calendar\"></i>
                                                                    </button>
                                                                </span>
                                </div>
                                <div class=\"input-group date date-picker\" data-date-format=\"yyyy-mm-dd\">
                                    <input type=\"text\" class=\"form-control form-filter input-sm\" readonly
                                           name=\"order_update_to\" placeholder=\"To\">
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-sm default\" type=\"button\">
                                                                        <i class=\"fa fa-calendar\"></i>
                                                                    </button>
                                                                </span>
                                </div>
                            </td>
                            <td>
                                <div class=\"margin-bottom-5\">
                                    <button class=\"btn btn-sm green btn-outline filter-submit margin-bottom\">
                                        <i class=\"fa fa-search\"></i> 搜索
                                    </button>
                                    <button class=\"btn btn-sm red btn-outline filter-cancel\">
                                        <i class=\"fa fa-times\"></i> 清空
                                    </button>
                                </div>

                            </td>
                        </tr>
                        </thead>

                        <tbody></tbody>
                    </table>

                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->

        </div>
    </div>
";
        
        $__internal_c37b56ee8dea7f7bae09adddc5915966c5e9ec043475e163c8800103c838fef9->leave($__internal_c37b56ee8dea7f7bae09adddc5915966c5e9ec043475e163c8800103c838fef9_prof);

    }

    // line 187
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4d367f9838bca1a5c850d73ab689112cd30d8806efe5df1c790446fb19778a60 = $this->env->getExtension("native_profiler");
        $__internal_4d367f9838bca1a5c850d73ab689112cd30d8806efe5df1c790446fb19778a60->enter($__internal_4d367f9838bca1a5c850d73ab689112cd30d8806efe5df1c790446fb19778a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 188
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_4d367f9838bca1a5c850d73ab689112cd30d8806efe5df1c790446fb19778a60->leave($__internal_4d367f9838bca1a5c850d73ab689112cd30d8806efe5df1c790446fb19778a60_prof);

    }

    // line 191
    public function block_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_38ae7dd814267004dc480b86696e5a7384d87e709c94757abf3e56a78df82ac3 = $this->env->getExtension("native_profiler");
        $__internal_38ae7dd814267004dc480b86696e5a7384d87e709c94757abf3e56a78df82ac3->enter($__internal_38ae7dd814267004dc480b86696e5a7384d87e709c94757abf3e56a78df82ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelPlugins"));

        // line 192
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
";
        
        $__internal_38ae7dd814267004dc480b86696e5a7384d87e709c94757abf3e56a78df82ac3->leave($__internal_38ae7dd814267004dc480b86696e5a7384d87e709c94757abf3e56a78df82ac3_prof);

    }

    // line 204
    public function block_pageLevelScripts($context, array $blocks = array())
    {
        $__internal_5db0d2a492ff4f57260ad74009d6198bdc162ab1299b4e93de95b2477663a176 = $this->env->getExtension("native_profiler");
        $__internal_5db0d2a492ff4f57260ad74009d6198bdc162ab1299b4e93de95b2477663a176->enter($__internal_5db0d2a492ff4f57260ad74009d6198bdc162ab1299b4e93de95b2477663a176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelScripts"));

        // line 205
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/huo15-department-ajax.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/page_user_list_common.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_5db0d2a492ff4f57260ad74009d6198bdc162ab1299b4e93de95b2477663a176->leave($__internal_5db0d2a492ff4f57260ad74009d6198bdc162ab1299b4e93de95b2477663a176_prof);

    }

    // line 212
    public function block_themeLayoutScript($context, array $blocks = array())
    {
        $__internal_f705fa038810fc66b634a1c8c3d4d71ae77b0eee4d2c67957dc94ef5d245e16b = $this->env->getExtension("native_profiler");
        $__internal_f705fa038810fc66b634a1c8c3d4d71ae77b0eee4d2c67957dc94ef5d245e16b->enter($__internal_f705fa038810fc66b634a1c8c3d4d71ae77b0eee4d2c67957dc94ef5d245e16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeLayoutScript"));

        // line 213
        echo "    ";
        $this->displayParentBlock("themeLayoutScript", $context, $blocks);
        echo "
";
        
        $__internal_f705fa038810fc66b634a1c8c3d4d71ae77b0eee4d2c67957dc94ef5d245e16b->leave($__internal_f705fa038810fc66b634a1c8c3d4d71ae77b0eee4d2c67957dc94ef5d245e16b_prof);

    }

    // line 217
    public function block_huo15fix($context, array $blocks = array())
    {
        $__internal_74b1a5ad83a24b01cdbec6297d83f9d40d478ba26ca33ee07eee230f0f189719 = $this->env->getExtension("native_profiler");
        $__internal_74b1a5ad83a24b01cdbec6297d83f9d40d478ba26ca33ee07eee230f0f189719->enter($__internal_74b1a5ad83a24b01cdbec6297d83f9d40d478ba26ca33ee07eee230f0f189719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "huo15fix"));

        // line 218
        echo "    <script>
        var addNewUrl = \"";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "user_ulist_addNew", array()), "html", null, true);
        echo "\";
    </script>
";
        
        $__internal_74b1a5ad83a24b01cdbec6297d83f9d40d478ba26ca33ee07eee230f0f189719->leave($__internal_74b1a5ad83a24b01cdbec6297d83f9d40d478ba26ca33ee07eee230f0f189719_prof);

    }

    public function getTemplateName()
    {
        return "user/department.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 219,  410 => 218,  404 => 217,  394 => 213,  388 => 212,  379 => 206,  374 => 205,  368 => 204,  358 => 196,  353 => 194,  349 => 193,  344 => 192,  338 => 191,  328 => 188,  322 => 187,  218 => 90,  205 => 79,  199 => 78,  189 => 73,  183 => 72,  134 => 28,  128 => 27,  118 => 25,  112 => 24,  102 => 22,  96 => 21,  87 => 17,  82 => 15,  77 => 14,  71 => 13,  61 => 9,  56 => 7,  51 => 6,  45 => 5,  11 => 1,);
    }
}
/* {% extends 'user_base.html.twig' %}*/
/* */
/* */
/* */
/* {% block h_pageLevelPlugins %}*/
/*     <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet"*/
/*           type="text/css"/>*/
/*     <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet"*/
/*           type="text/css"/>*/
/* {% endblock %}*/
/* */
/*         {% block h_themeLayoutStyles %}*/
/*             <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css"*/
/*                   id="style_color"/>*/
/*             <link href="{{ asset('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*         {% endblock %}*/
/* */
/* */
/* {% block header %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block sideBar %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block pageBar %}*/
/*     <div class="page-bar">*/
/*         <ul class="page-breadcrumb">*/
/*             <li>*/
/*                 <a href="index.html">主页</a>*/
/*                 <i class="fa fa-circle"></i>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#">会员管理</a>*/
/*                 <i class="fa fa-circle"></i>*/
/*             </li>*/
/*             <li>*/
/*                 <span>部门列表</span>*/
/*             </li>*/
/*         </ul>*/
/*         <div class="page-toolbar">*/
/*             <div class="btn-group pull-right">*/
/*                 <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"*/
/*                         data-toggle="dropdown"> 快捷菜单*/
/*                     <i class="fa fa-angle-down"></i>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu pull-right" role="menu">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <i class="icon-bell"></i> 公告</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <i class="icon-shield"></i> 规则</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <i class="icon-user"></i> 个人中心</a>*/
/*                     </li>*/
/*                     <li class="divider"></li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <i class="icon-bag"></i> 计划任务</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <h1 class="page-title"> 部门列表*/
/*         <small></small>*/
/*     </h1>*/
/* {% endblock %}*/
/* */
/* {% block pageContent %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <!-- BEGIN EXAMPLE TABLE PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption font-dark">*/
/*                         <div class="col-md-4">*/
/* */
/* */
/* */
/*                             <div class="btn-group">*/
/*                                 <a href="{{ url('addDepartment') }}">*/
/*                                 <button id="huo15_editable_add_department" class="btn green">添加部门*/
/*                                     <i class="fa fa-plus"></i>*/
/*                                 </button>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tools"></div>*/
/*                 </div>*/
/*                 <div class="portlet-body">*/
/*                     <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_department">*/
/*                         <thead>*/
/*                         <tr role="row" class="heading">*/
/*                             <th width="2%">*/
/*                                 <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">*/
/*                                     <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>*/
/*                                     <span></span>*/
/*                                 </label>*/
/*                             </th>*/
/*                             <th width="15%">编号</th>*/
/*                             <th width="25%">部门名称</th>*/
/*                             <th width="20%">成立日期</th>*/
/*                             <th width="20%">修改日期</th>*/
/*                             <th width="18%">操作</th>*/
/*                         </tr>*/
/*                         <tr role="row" class="filter">*/
/*                             <td></td>*/
/*                             <td>*/
/*                                 <input type="text" class="form-control form-filter input-sm" name="order_department_no">*/
/*                             </td>*/
/*                             <td>*/
/*                                 <input type="text" class="form-control form-filter input-sm" name="order_department_name"></td>*/
/*                             <td>*/
/*                                 <div class="input-group date date-picker margin-bottom-5" data-date-format="yyyy-mm-dd">*/
/*                                     <input type="text" class="form-control form-filter input-sm" readonly*/
/*                                            name="order_create_from" placeholder="From">*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button class="btn btn-sm default" type="button">*/
/*                                                                         <i class="fa fa-calendar"></i>*/
/*                                                                     </button>*/
/*                                                                 </span>*/
/*                                 </div>*/
/*                                 <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">*/
/*                                     <input type="text" class="form-control form-filter input-sm" readonly*/
/*                                            name="order_create_to" placeholder="To">*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button class="btn btn-sm default" type="button">*/
/*                                                                         <i class="fa fa-calendar"></i>*/
/*                                                                     </button>*/
/*                                                                 </span>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="input-group date date-picker margin-bottom-5" data-date-format="yyyy-mm-dd">*/
/*                                     <input type="text" class="form-control form-filter input-sm" readonly*/
/*                                            name="order_update_from" placeholder="From">*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button class="btn btn-sm default" type="button">*/
/*                                                                         <i class="fa fa-calendar"></i>*/
/*                                                                     </button>*/
/*                                                                 </span>*/
/*                                 </div>*/
/*                                 <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">*/
/*                                     <input type="text" class="form-control form-filter input-sm" readonly*/
/*                                            name="order_update_to" placeholder="To">*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button class="btn btn-sm default" type="button">*/
/*                                                                         <i class="fa fa-calendar"></i>*/
/*                                                                     </button>*/
/*                                                                 </span>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="margin-bottom-5">*/
/*                                     <button class="btn btn-sm green btn-outline filter-submit margin-bottom">*/
/*                                         <i class="fa fa-search"></i> 搜索*/
/*                                     </button>*/
/*                                     <button class="btn btn-sm red btn-outline filter-cancel">*/
/*                                         <i class="fa fa-times"></i> 清空*/
/*                                     </button>*/
/*                                 </div>*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody></tbody>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <!-- END EXAMPLE TABLE PORTLET-->*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {# 底部js和css加载 #}*/
/* {% block pageLevelPlugins %}*/
/*     <script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"*/
/*             type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block pageLevelScripts %}*/
/*     <script src="{{ asset('assets/pages/scripts/huo15-department-ajax.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/pages/scripts/page_user_list_common.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block themeLayoutScript %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block huo15fix %}*/
/*     <script>*/
/*         var addNewUrl = "{{ routes.user_ulist_addNew }}";*/
/*     </script>*/
/* {% endblock %}*/
