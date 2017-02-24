<?php

/* modules/dataList.html.twig */
class __TwigTemplate_2d378263bb35632d706b2f7d1cda93083dae7ad6ffb33dd1b23b6d4da2495d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "modules/dataList.html.twig", 1);
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
        $__internal_031e27e4375f480c7406ea436f818bb59a70b8a0200a1bde61007c3d9c59aa85 = $this->env->getExtension("native_profiler");
        $__internal_031e27e4375f480c7406ea436f818bb59a70b8a0200a1bde61007c3d9c59aa85->enter($__internal_031e27e4375f480c7406ea436f818bb59a70b8a0200a1bde61007c3d9c59aa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/dataList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031e27e4375f480c7406ea436f818bb59a70b8a0200a1bde61007c3d9c59aa85->leave($__internal_031e27e4375f480c7406ea436f818bb59a70b8a0200a1bde61007c3d9c59aa85_prof);

    }

    // line 5
    public function block_h_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_8fcb1d25412dc997cf0fd98f1f8b14703729b1392c874faa93362026f1b14463 = $this->env->getExtension("native_profiler");
        $__internal_8fcb1d25412dc997cf0fd98f1f8b14703729b1392c874faa93362026f1b14463->enter($__internal_8fcb1d25412dc997cf0fd98f1f8b14703729b1392c874faa93362026f1b14463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelPlugins"));

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
        
        $__internal_8fcb1d25412dc997cf0fd98f1f8b14703729b1392c874faa93362026f1b14463->leave($__internal_8fcb1d25412dc997cf0fd98f1f8b14703729b1392c874faa93362026f1b14463_prof);

    }

    // line 13
    public function block_h_themeLayoutStyles($context, array $blocks = array())
    {
        $__internal_bf9d07638f3f54b0cdd97a8d59d7d12d2f350ff3716968d03a98e7b6933dc6da = $this->env->getExtension("native_profiler");
        $__internal_bf9d07638f3f54b0cdd97a8d59d7d12d2f350ff3716968d03a98e7b6933dc6da->enter($__internal_bf9d07638f3f54b0cdd97a8d59d7d12d2f350ff3716968d03a98e7b6933dc6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_themeLayoutStyles"));

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
        
        $__internal_bf9d07638f3f54b0cdd97a8d59d7d12d2f350ff3716968d03a98e7b6933dc6da->leave($__internal_bf9d07638f3f54b0cdd97a8d59d7d12d2f350ff3716968d03a98e7b6933dc6da_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_6918e7987bca501687ad19c0ef0765912d525b1155aecf5b0abdca2b25020c93 = $this->env->getExtension("native_profiler");
        $__internal_6918e7987bca501687ad19c0ef0765912d525b1155aecf5b0abdca2b25020c93->enter($__internal_6918e7987bca501687ad19c0ef0765912d525b1155aecf5b0abdca2b25020c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6918e7987bca501687ad19c0ef0765912d525b1155aecf5b0abdca2b25020c93->leave($__internal_6918e7987bca501687ad19c0ef0765912d525b1155aecf5b0abdca2b25020c93_prof);

    }

    // line 24
    public function block_sideBar($context, array $blocks = array())
    {
        $__internal_49035404ed1689595da1c79408e2c264a35328abb1f73a89e113513be365ec72 = $this->env->getExtension("native_profiler");
        $__internal_49035404ed1689595da1c79408e2c264a35328abb1f73a89e113513be365ec72->enter($__internal_49035404ed1689595da1c79408e2c264a35328abb1f73a89e113513be365ec72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sideBar"));

        // line 25
        echo "    ";
        $this->displayParentBlock("sideBar", $context, $blocks);
        echo "
";
        
        $__internal_49035404ed1689595da1c79408e2c264a35328abb1f73a89e113513be365ec72->leave($__internal_49035404ed1689595da1c79408e2c264a35328abb1f73a89e113513be365ec72_prof);

    }

    // line 27
    public function block_pageBar($context, array $blocks = array())
    {
        $__internal_2a5afd0f5a9cb94b400c2b893197d5e27171b57932f67c4b0c28f5d388ca3b60 = $this->env->getExtension("native_profiler");
        $__internal_2a5afd0f5a9cb94b400c2b893197d5e27171b57932f67c4b0c28f5d388ca3b60->enter($__internal_2a5afd0f5a9cb94b400c2b893197d5e27171b57932f67c4b0c28f5d388ca3b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageBar"));

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
                <span>会员列表</span>
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
        
        $__internal_2a5afd0f5a9cb94b400c2b893197d5e27171b57932f67c4b0c28f5d388ca3b60->leave($__internal_2a5afd0f5a9cb94b400c2b893197d5e27171b57932f67c4b0c28f5d388ca3b60_prof);

    }

    // line 72
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_69021591a6d8703ed0d8aed8e7b50d04c77b3e6be520858af992101204e31508 = $this->env->getExtension("native_profiler");
        $__internal_69021591a6d8703ed0d8aed8e7b50d04c77b3e6be520858af992101204e31508->enter($__internal_69021591a6d8703ed0d8aed8e7b50d04c77b3e6be520858af992101204e31508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 73
        echo "    <h1 class=\"page-title\"> 数据列表
        <small></small>
    </h1>
";
        
        $__internal_69021591a6d8703ed0d8aed8e7b50d04c77b3e6be520858af992101204e31508->leave($__internal_69021591a6d8703ed0d8aed8e7b50d04c77b3e6be520858af992101204e31508_prof);

    }

    // line 78
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_2486f74e4eb49e4378b50d0174261f4a3578050eafd07292c6476ba70b6397f1 = $this->env->getExtension("native_profiler");
        $__internal_2486f74e4eb49e4378b50d0174261f4a3578050eafd07292c6476ba70b6397f1->enter($__internal_2486f74e4eb49e4378b50d0174261f4a3578050eafd07292c6476ba70b6397f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "modules_list_add_data", array()), "html", null, true);
        echo "?moduleId=";
        echo twig_escape_filter($this->env, (isset($context["huo15ModuleId"]) ? $context["huo15ModuleId"] : $this->getContext($context, "huo15ModuleId")), "html", null, true);
        echo "\">
                                <button id=\"huo15_editable_add_newData\" class=\"btn green\">添加新数据
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"tools\"></div>
                </div>
                <div class=\"portlet-body\">
                    <table class=\"table table-striped table-bordered table-hover table-checkable\" id=\"datatable_modData\">
                        <thead>
                        <tr role=\"row\" class=\"heading\">
                            <th width=\"2%\">
                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#sample_2 .checkboxes\"/>
                                    <span></span>
                                </label>
                            </th>
                            <th width=\"10%\"> ID号</th>
                            <th width=\"200\"> ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldGroup"]) ? $context["fieldGroup"] : $this->getContext($context, "fieldGroup")), 0, array(), "array"), "fieldName", array()), "html", null, true);
        echo "</th>
                            <th width=\"15%\"> ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldGroup"]) ? $context["fieldGroup"] : $this->getContext($context, "fieldGroup")), 1, array(), "array"), "fieldName", array()), "html", null, true);
        echo "</th>
                            <th width=\"10%\"> ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldGroup"]) ? $context["fieldGroup"] : $this->getContext($context, "fieldGroup")), 2, array(), "array"), "fieldName", array()), "html", null, true);
        echo "</th>
                            <th width=\"20%\"> ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldGroup"]) ? $context["fieldGroup"] : $this->getContext($context, "fieldGroup")), 3, array(), "array"), "fieldName", array()), "html", null, true);
        echo "</th>
                            <th width=\"30%\"> 操作</th>
                        </tr>
                        <tr role=\"row\" class=\"filter\">
                            <td></td>
                            <td>
                                <input type=\"text\" class=\"form-control form-filter input-sm\" name=\"order_customer_id\">
                            </td>
                            <td>
                                <input type=\"text\" class=\"form-control form-filter input-sm\" name=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldGroup"]) ? $context["fieldGroup"] : $this->getContext($context, "fieldGroup")), 0, array(), "array"), "fieldId", array()), "html", null, true);
        echo "\">
                            </td>
                            <td>
                                <input type=\"text\" class=\"form-control form-filter input-sm\" name=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldGroup"]) ? $context["fieldGroup"] : $this->getContext($context, "fieldGroup")), 1, array(), "array"), "fieldId", array()), "html", null, true);
        echo "\"></td>
                            <td>
                                <div class=\"margin-bottom-5\">
                                    <input type=\"text\" class=\"form-control form-filter input-sm\" name=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldGroup"]) ? $context["fieldGroup"] : $this->getContext($context, "fieldGroup")), 2, array(), "array"), "fieldId", array()), "html", null, true);
        echo "\" /></div>
                               </td>
                            <td>
                                <div class=\"margin-bottom-5\">
                                    <input type=\"text\" class=\"form-control form-filter input-sm\" name=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldGroup"]) ? $context["fieldGroup"] : $this->getContext($context, "fieldGroup")), 3, array(), "array"), "fieldId", array()), "html", null, true);
        echo "\" /></div>
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
        
        $__internal_2486f74e4eb49e4378b50d0174261f4a3578050eafd07292c6476ba70b6397f1->leave($__internal_2486f74e4eb49e4378b50d0174261f4a3578050eafd07292c6476ba70b6397f1_prof);

    }

    // line 156
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c68597f000f83f274d6c18f6c3dd7b5ea5c67c3ab849c77935fd895a1277e870 = $this->env->getExtension("native_profiler");
        $__internal_c68597f000f83f274d6c18f6c3dd7b5ea5c67c3ab849c77935fd895a1277e870->enter($__internal_c68597f000f83f274d6c18f6c3dd7b5ea5c67c3ab849c77935fd895a1277e870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 157
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_c68597f000f83f274d6c18f6c3dd7b5ea5c67c3ab849c77935fd895a1277e870->leave($__internal_c68597f000f83f274d6c18f6c3dd7b5ea5c67c3ab849c77935fd895a1277e870_prof);

    }

    // line 160
    public function block_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_6d2e2422e59185e28eb4716f01700a66930de7d7ef76e1ecf4b1e231beb06cd9 = $this->env->getExtension("native_profiler");
        $__internal_6d2e2422e59185e28eb4716f01700a66930de7d7ef76e1ecf4b1e231beb06cd9->enter($__internal_6d2e2422e59185e28eb4716f01700a66930de7d7ef76e1ecf4b1e231beb06cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelPlugins"));

        // line 161
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
";
        
        $__internal_6d2e2422e59185e28eb4716f01700a66930de7d7ef76e1ecf4b1e231beb06cd9->leave($__internal_6d2e2422e59185e28eb4716f01700a66930de7d7ef76e1ecf4b1e231beb06cd9_prof);

    }

    // line 173
    public function block_pageLevelScripts($context, array $blocks = array())
    {
        $__internal_1f06d188ae9dde5d5a39ad36368093630b1197e567bf189421e8cc5104058dc3 = $this->env->getExtension("native_profiler");
        $__internal_1f06d188ae9dde5d5a39ad36368093630b1197e567bf189421e8cc5104058dc3->enter($__internal_1f06d188ae9dde5d5a39ad36368093630b1197e567bf189421e8cc5104058dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelScripts"));

        // line 174
        echo "    <script>
        huo15ModuleId = ";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["huo15ModuleId"]) ? $context["huo15ModuleId"] : $this->getContext($context, "huo15ModuleId")), "html", null, true);
        echo ";
    </script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/huo15-modData-ajax.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/page_user_list_common.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_1f06d188ae9dde5d5a39ad36368093630b1197e567bf189421e8cc5104058dc3->leave($__internal_1f06d188ae9dde5d5a39ad36368093630b1197e567bf189421e8cc5104058dc3_prof);

    }

    // line 184
    public function block_themeLayoutScript($context, array $blocks = array())
    {
        $__internal_2c662f4358643bec06d18e6436b61576e244961c4d7184bc44055d8d64cd61ec = $this->env->getExtension("native_profiler");
        $__internal_2c662f4358643bec06d18e6436b61576e244961c4d7184bc44055d8d64cd61ec->enter($__internal_2c662f4358643bec06d18e6436b61576e244961c4d7184bc44055d8d64cd61ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeLayoutScript"));

        // line 185
        echo "    ";
        $this->displayParentBlock("themeLayoutScript", $context, $blocks);
        echo "
";
        
        $__internal_2c662f4358643bec06d18e6436b61576e244961c4d7184bc44055d8d64cd61ec->leave($__internal_2c662f4358643bec06d18e6436b61576e244961c4d7184bc44055d8d64cd61ec_prof);

    }

    // line 189
    public function block_huo15fix($context, array $blocks = array())
    {
        $__internal_407893051d673ee1c8b4721930971da842fa863c160d322e65676e6362e0a700 = $this->env->getExtension("native_profiler");
        $__internal_407893051d673ee1c8b4721930971da842fa863c160d322e65676e6362e0a700->enter($__internal_407893051d673ee1c8b4721930971da842fa863c160d322e65676e6362e0a700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "huo15fix"));

        // line 190
        echo "    <script>
        var addNewUrl = \"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "user_ulist_addNew", array()), "html", null, true);
        echo "\";
    </script>
";
        
        $__internal_407893051d673ee1c8b4721930971da842fa863c160d322e65676e6362e0a700->leave($__internal_407893051d673ee1c8b4721930971da842fa863c160d322e65676e6362e0a700_prof);

    }

    public function getTemplateName()
    {
        return "modules/dataList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 191,  412 => 190,  406 => 189,  396 => 185,  390 => 184,  381 => 178,  377 => 177,  372 => 175,  369 => 174,  363 => 173,  353 => 165,  348 => 163,  344 => 162,  339 => 161,  333 => 160,  323 => 157,  317 => 156,  284 => 130,  277 => 126,  271 => 123,  265 => 120,  253 => 111,  249 => 110,  245 => 109,  241 => 108,  215 => 87,  205 => 79,  199 => 78,  189 => 73,  183 => 72,  134 => 28,  128 => 27,  118 => 25,  112 => 24,  102 => 22,  96 => 21,  87 => 17,  82 => 15,  77 => 14,  71 => 13,  61 => 9,  56 => 7,  51 => 6,  45 => 5,  11 => 1,);
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
/*                 <span>会员列表</span>*/
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
/*     <h1 class="page-title"> 数据列表*/
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
/*                             <div class="btn-group">*/
/*                                 <a href="{{ routes.modules_list_add_data }}?moduleId={{ huo15ModuleId }}">*/
/*                                 <button id="huo15_editable_add_newData" class="btn green">添加新数据*/
/*                                     <i class="fa fa-plus"></i>*/
/*                                 </button>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tools"></div>*/
/*                 </div>*/
/*                 <div class="portlet-body">*/
/*                     <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_modData">*/
/*                         <thead>*/
/*                         <tr role="row" class="heading">*/
/*                             <th width="2%">*/
/*                                 <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">*/
/*                                     <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>*/
/*                                     <span></span>*/
/*                                 </label>*/
/*                             </th>*/
/*                             <th width="10%"> ID号</th>*/
/*                             <th width="200"> {{ fieldGroup[0].fieldName }}</th>*/
/*                             <th width="15%"> {{ fieldGroup[1].fieldName }}</th>*/
/*                             <th width="10%"> {{ fieldGroup[2].fieldName }}</th>*/
/*                             <th width="20%"> {{ fieldGroup[3].fieldName }}</th>*/
/*                             <th width="30%"> 操作</th>*/
/*                         </tr>*/
/*                         <tr role="row" class="filter">*/
/*                             <td></td>*/
/*                             <td>*/
/*                                 <input type="text" class="form-control form-filter input-sm" name="order_customer_id">*/
/*                             </td>*/
/*                             <td>*/
/*                                 <input type="text" class="form-control form-filter input-sm" name="{{ fieldGroup[0].fieldId }}">*/
/*                             </td>*/
/*                             <td>*/
/*                                 <input type="text" class="form-control form-filter input-sm" name="{{ fieldGroup[1].fieldId }}"></td>*/
/*                             <td>*/
/*                                 <div class="margin-bottom-5">*/
/*                                     <input type="text" class="form-control form-filter input-sm" name="{{ fieldGroup[2].fieldId }}" /></div>*/
/*                                </td>*/
/*                             <td>*/
/*                                 <div class="margin-bottom-5">*/
/*                                     <input type="text" class="form-control form-filter input-sm" name="{{ fieldGroup[3].fieldId }}" /></div>*/
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
/*                 </div>*/
/* */
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
/*     <script>*/
/*         huo15ModuleId = {{ huo15ModuleId }};*/
/*     </script>*/
/*     <script src="{{ asset('assets/pages/scripts/huo15-modData-ajax.min.js') }}" type="text/javascript"></script>*/
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
