<?php

/* modules/modList.html.twig */
class __TwigTemplate_39ab2f41bdcaaba72822d4369ec3e8a29eb33307677ee0acffe13c5daffbe13f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "modules/modList.html.twig", 1);
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
        $__internal_74b901ce3d75a8a2d83c205163f31b9eef94a57c3f80943fca56c0ea0881af70 = $this->env->getExtension("native_profiler");
        $__internal_74b901ce3d75a8a2d83c205163f31b9eef94a57c3f80943fca56c0ea0881af70->enter($__internal_74b901ce3d75a8a2d83c205163f31b9eef94a57c3f80943fca56c0ea0881af70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/modList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74b901ce3d75a8a2d83c205163f31b9eef94a57c3f80943fca56c0ea0881af70->leave($__internal_74b901ce3d75a8a2d83c205163f31b9eef94a57c3f80943fca56c0ea0881af70_prof);

    }

    // line 5
    public function block_h_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_c4cedb7b52f1b3139642665ac2ce4b786697320811c3a66053b9e4b57dd55258 = $this->env->getExtension("native_profiler");
        $__internal_c4cedb7b52f1b3139642665ac2ce4b786697320811c3a66053b9e4b57dd55258->enter($__internal_c4cedb7b52f1b3139642665ac2ce4b786697320811c3a66053b9e4b57dd55258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelPlugins"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

";
        
        $__internal_c4cedb7b52f1b3139642665ac2ce4b786697320811c3a66053b9e4b57dd55258->leave($__internal_c4cedb7b52f1b3139642665ac2ce4b786697320811c3a66053b9e4b57dd55258_prof);

    }

    // line 15
    public function block_h_themeLayoutStyles($context, array $blocks = array())
    {
        $__internal_4d496cd30285b33e8a6b2687433e847908149550515ab2ba4438f3376ed4cd9d = $this->env->getExtension("native_profiler");
        $__internal_4d496cd30285b33e8a6b2687433e847908149550515ab2ba4438f3376ed4cd9d->enter($__internal_4d496cd30285b33e8a6b2687433e847908149550515ab2ba4438f3376ed4cd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_themeLayoutStyles"));

        // line 16
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"
          id=\"style_color\"/>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_4d496cd30285b33e8a6b2687433e847908149550515ab2ba4438f3376ed4cd9d->leave($__internal_4d496cd30285b33e8a6b2687433e847908149550515ab2ba4438f3376ed4cd9d_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_5767aa940cbb631214965a30c6dae9663460f7cbcf19f7ba1b82992aff351b03 = $this->env->getExtension("native_profiler");
        $__internal_5767aa940cbb631214965a30c6dae9663460f7cbcf19f7ba1b82992aff351b03->enter($__internal_5767aa940cbb631214965a30c6dae9663460f7cbcf19f7ba1b82992aff351b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_5767aa940cbb631214965a30c6dae9663460f7cbcf19f7ba1b82992aff351b03->leave($__internal_5767aa940cbb631214965a30c6dae9663460f7cbcf19f7ba1b82992aff351b03_prof);

    }

    // line 26
    public function block_sideBar($context, array $blocks = array())
    {
        $__internal_223a7ea476020781fbd4ed0fc249a1a8e2082adb4cb946753582981500aa28fe = $this->env->getExtension("native_profiler");
        $__internal_223a7ea476020781fbd4ed0fc249a1a8e2082adb4cb946753582981500aa28fe->enter($__internal_223a7ea476020781fbd4ed0fc249a1a8e2082adb4cb946753582981500aa28fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sideBar"));

        // line 27
        echo "    ";
        $this->displayParentBlock("sideBar", $context, $blocks);
        echo "
";
        
        $__internal_223a7ea476020781fbd4ed0fc249a1a8e2082adb4cb946753582981500aa28fe->leave($__internal_223a7ea476020781fbd4ed0fc249a1a8e2082adb4cb946753582981500aa28fe_prof);

    }

    // line 29
    public function block_pageBar($context, array $blocks = array())
    {
        $__internal_f9e846ae82755fee9ad38d8d5e2226cc8d24588e0bec1c5118b8b825a707c246 = $this->env->getExtension("native_profiler");
        $__internal_f9e846ae82755fee9ad38d8d5e2226cc8d24588e0bec1c5118b8b825a707c246->enter($__internal_f9e846ae82755fee9ad38d8d5e2226cc8d24588e0bec1c5118b8b825a707c246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageBar"));

        // line 30
        echo "    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <a href=\"index.html\">主页</a>
                <i class=\"fa fa-circle\"></i>
            </li>
            <li>
                <a href=\"#\">模块管理</a>
                <i class=\"fa fa-circle\"></i>
            </li>
            <li>
                <span>模块列表</span>
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
        
        $__internal_f9e846ae82755fee9ad38d8d5e2226cc8d24588e0bec1c5118b8b825a707c246->leave($__internal_f9e846ae82755fee9ad38d8d5e2226cc8d24588e0bec1c5118b8b825a707c246_prof);

    }

    // line 74
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_cd7682ecf2f3caf1554cf97fdbddb2e1d3b3292d5a0ca85885d603b1493d0734 = $this->env->getExtension("native_profiler");
        $__internal_cd7682ecf2f3caf1554cf97fdbddb2e1d3b3292d5a0ca85885d603b1493d0734->enter($__internal_cd7682ecf2f3caf1554cf97fdbddb2e1d3b3292d5a0ca85885d603b1493d0734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 75
        echo "    <div class=\"note note-info\">
        <p>
            请谨慎删除模块. 如果模块内部有数据,系统将禁止删除模块.
        </p>
    </div>
";
        
        $__internal_cd7682ecf2f3caf1554cf97fdbddb2e1d3b3292d5a0ca85885d603b1493d0734->leave($__internal_cd7682ecf2f3caf1554cf97fdbddb2e1d3b3292d5a0ca85885d603b1493d0734_prof);

    }

    // line 82
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_306f2d09e14af9269edef71a5f44e8815eb423a6f28c9ec3c9d21344d2a9040c = $this->env->getExtension("native_profiler");
        $__internal_306f2d09e14af9269edef71a5f44e8815eb423a6f28c9ec3c9d21344d2a9040c->enter($__internal_306f2d09e14af9269edef71a5f44e8815eb423a6f28c9ec3c9d21344d2a9040c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 83
        echo "    <div class=\"row\">
        <div class=\"portlet light portlet-fit bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <div class=\"col-md-4\">
                        <div class=\"btn-group\">
                            ";
        // line 89
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 90
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "modules_add", array()), "html", null, true);
            echo "\">
                                <button id=\"huo15_editable_add_mod\" class=\"btn green\">添加新模块
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </a>
                            ";
        }
        // line 96
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group\">
                        <a class=\"btn red btn-outline btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\"
                           data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> 快捷操作
                            <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"javascript:;\"> 添加模块</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"javascript:;\">个人中心</a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">会员列表</a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">部门列表</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <div class=\"row\">

                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 128
            echo "                    <div class=\"col-md-4\">
                        <div class=\"mt-widget-3\">
                            <div class=\"mt-head bg-";
            // line 130
            if ((($context["key"] % 4) == 0)) {
                echo "blue-hoki";
            } elseif ((($context["key"] % 4) == 1)) {
                echo "red";
            } elseif ((($context["key"] % 4) == 2)) {
                echo "green";
            } elseif ((($context["key"] % 4) == 3)) {
                echo "purple";
            }
            echo "\">
                                <div class=\"mt-head-icon\">
                                    <img src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('app_url_decode_extension')->urlDecode($this->getAttribute($context["module"], "avatar", array())), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"120\" class=\"img-circle\">
                                </div>
                                <div class=\"mt-head-desc\"> ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "brief", array()), "html", null, true);
            echo "</div>
                                <span class=\"mt-head-date\"> ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo " </span>
                                <div class=\"mt-head-button\">
                                    <a href=\"";
            // line 137
            echo $this->env->getExtension('routing')->getPath("app_modules_modules_adddata");
            echo "?moduleId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\">
                                        <button type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">添加数据
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class=\"mt-body-actions-icons\">
                                <div class=\"btn-group btn-group btn-group-justified\">
                                    <a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "modules_data_list", array()), "html", null, true);
            echo "?moduleId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" class=\"btn \">
                                                                <span class=\"mt-icon\">
                                                                    <i class=\"glyphicon glyphicon-align-justify\"></i>
                                                                </span>列表 </a>
                                    <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "modules_list_add_data", array()), "html", null, true);
            echo "?moduleId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" class=\"btn \">
                                                                <span class=\"mt-icon\">
                                                                    <i class=\"glyphicon glyphicon-plus\"></i>
                                                                </span>添加 </a>
                                    <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "modules_add", array()), "html", null, true);
            echo "?moduleId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" class=\"btn \">
                                                                <span class=\"mt-icon\">
                                                                    <i class=\"glyphicon glyphicon-pencil\"></i>
                                                                </span>修改 </a>
                                    <a href=\"#\" class=\"btn deleteMod\" data-id=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\">
                                                                <span class=\"mt-icon\">
                                                                    <i class=\"glyphicon glyphicon-remove\"></i>
                                                                </span>删除 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_306f2d09e14af9269edef71a5f44e8815eb423a6f28c9ec3c9d21344d2a9040c->leave($__internal_306f2d09e14af9269edef71a5f44e8815eb423a6f28c9ec3c9d21344d2a9040c_prof);

    }

    // line 173
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c6c2681e344be5617391a3c66171094544d9a6ad7fde6eab7ce967a215cbf7ff = $this->env->getExtension("native_profiler");
        $__internal_c6c2681e344be5617391a3c66171094544d9a6ad7fde6eab7ce967a215cbf7ff->enter($__internal_c6c2681e344be5617391a3c66171094544d9a6ad7fde6eab7ce967a215cbf7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 174
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_c6c2681e344be5617391a3c66171094544d9a6ad7fde6eab7ce967a215cbf7ff->leave($__internal_c6c2681e344be5617391a3c66171094544d9a6ad7fde6eab7ce967a215cbf7ff_prof);

    }

    // line 177
    public function block_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_aea641e1c35e399d0c6004178d1dc70829e5601848d4628861d2bea12d30fc3c = $this->env->getExtension("native_profiler");
        $__internal_aea641e1c35e399d0c6004178d1dc70829e5601848d4628861d2bea12d30fc3c->enter($__internal_aea641e1c35e399d0c6004178d1dc70829e5601848d4628861d2bea12d30fc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelPlugins"));

        // line 178
        echo "
";
        
        $__internal_aea641e1c35e399d0c6004178d1dc70829e5601848d4628861d2bea12d30fc3c->leave($__internal_aea641e1c35e399d0c6004178d1dc70829e5601848d4628861d2bea12d30fc3c_prof);

    }

    // line 185
    public function block_pageLevelScripts($context, array $blocks = array())
    {
        $__internal_2267b379f50b1b6eccf4451876aaae9235b1309d2bca5046590c31c77811f52e = $this->env->getExtension("native_profiler");
        $__internal_2267b379f50b1b6eccf4451876aaae9235b1309d2bca5046590c31c77811f52e->enter($__internal_2267b379f50b1b6eccf4451876aaae9235b1309d2bca5046590c31c77811f52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelScripts"));

        
        $__internal_2267b379f50b1b6eccf4451876aaae9235b1309d2bca5046590c31c77811f52e->leave($__internal_2267b379f50b1b6eccf4451876aaae9235b1309d2bca5046590c31c77811f52e_prof);

    }

    // line 191
    public function block_themeLayoutScript($context, array $blocks = array())
    {
        $__internal_b13b93599efaa1635e90f4a70ea3509cdb57aa6d87304571a97255e968f19554 = $this->env->getExtension("native_profiler");
        $__internal_b13b93599efaa1635e90f4a70ea3509cdb57aa6d87304571a97255e968f19554->enter($__internal_b13b93599efaa1635e90f4a70ea3509cdb57aa6d87304571a97255e968f19554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeLayoutScript"));

        // line 192
        echo "    ";
        $this->displayParentBlock("themeLayoutScript", $context, $blocks);
        echo "
";
        
        $__internal_b13b93599efaa1635e90f4a70ea3509cdb57aa6d87304571a97255e968f19554->leave($__internal_b13b93599efaa1635e90f4a70ea3509cdb57aa6d87304571a97255e968f19554_prof);

    }

    // line 196
    public function block_huo15fix($context, array $blocks = array())
    {
        $__internal_d197b3c60f80885ebb1ded62e33efea1414f222a9009a2246f9dc4acfc9eaa73 = $this->env->getExtension("native_profiler");
        $__internal_d197b3c60f80885ebb1ded62e33efea1414f222a9009a2246f9dc4acfc9eaa73->enter($__internal_d197b3c60f80885ebb1ded62e33efea1414f222a9009a2246f9dc4acfc9eaa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "huo15fix"));

        // line 197
        echo "    <script>
        \$(function() {
            \$('.deleteMod').each(function(index, element) {
                \$(element).click(function (e) {
                    e.preventDefault();
                    var moduleId = parseInt(\$(element).attr('data-id'));
                    deleteMod(moduleId);
                });
            });
        });
        function deleteMod(id) {
            if (confirm('确定要删除吗')) {
                window.location.href = '";
        // line 209
        echo $this->env->getExtension('routing')->getPath("deleteMod");
        echo "?moduleId=' + id;
            }
        }
    </script>
";
        
        $__internal_d197b3c60f80885ebb1ded62e33efea1414f222a9009a2246f9dc4acfc9eaa73->leave($__internal_d197b3c60f80885ebb1ded62e33efea1414f222a9009a2246f9dc4acfc9eaa73_prof);

    }

    public function getTemplateName()
    {
        return "modules/modList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 209,  431 => 197,  425 => 196,  415 => 192,  409 => 191,  398 => 185,  390 => 178,  384 => 177,  374 => 174,  368 => 173,  355 => 166,  340 => 157,  331 => 153,  322 => 149,  313 => 145,  300 => 137,  295 => 135,  291 => 134,  286 => 132,  273 => 130,  269 => 128,  265 => 127,  232 => 96,  222 => 90,  220 => 89,  212 => 83,  206 => 82,  194 => 75,  188 => 74,  139 => 30,  133 => 29,  123 => 27,  117 => 26,  107 => 24,  101 => 23,  92 => 19,  87 => 17,  82 => 16,  76 => 15,  66 => 11,  61 => 9,  57 => 8,  51 => 6,  45 => 5,  11 => 1,);
    }
}
/* {% extends 'user_base.html.twig' %}*/
/* */
/* */
/* */
/* {% block h_pageLevelPlugins %}*/
/*     <link href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet"*/
/*           type="text/css"/>*/
/*     <link href="{{ asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet"*/
/*           type="text/css"/>*/
/*     <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css"/>*/
/* */
/* {% endblock %}*/
/* */
/* {% block h_themeLayoutStyles %}*/
/*     <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css"*/
/*           id="style_color"/>*/
/*     <link href="{{ asset('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
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
/*                 <a href="#">模块管理</a>*/
/*                 <i class="fa fa-circle"></i>*/
/*             </li>*/
/*             <li>*/
/*                 <span>模块列表</span>*/
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
/*     <div class="note note-info">*/
/*         <p>*/
/*             请谨慎删除模块. 如果模块内部有数据,系统将禁止删除模块.*/
/*         </p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block pageContent %}*/
/*     <div class="row">*/
/*         <div class="portlet light portlet-fit bordered">*/
/*             <div class="portlet-title">*/
/*                 <div class="caption">*/
/*                     <div class="col-md-4">*/
/*                         <div class="btn-group">*/
/*                             {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                             <a href="{{ routes.modules_add }}">*/
/*                                 <button id="huo15_editable_add_mod" class="btn green">添加新模块*/
/*                                     <i class="fa fa-plus"></i>*/
/*                                 </button>*/
/*                             </a>*/
/*                             {% endif %}*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="actions">*/
/*                     <div class="btn-group">*/
/*                         <a class="btn red btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown"*/
/*                            data-hover="dropdown" data-close-others="true" aria-expanded="false"> 快捷操作*/
/*                             <i class="fa fa-angle-down"></i>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu pull-right">*/
/*                             <li>*/
/*                                 <a href="javascript:;"> 添加模块</a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="javascript:;">个人中心</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:;">会员列表</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:;">部门列表</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="portlet-body">*/
/*                 <div class="row">*/
/* */
/*                     {% for key, module in modules %}*/
/*                     <div class="col-md-4">*/
/*                         <div class="mt-widget-3">*/
/*                             <div class="mt-head bg-{% if key%4 == 0 %}blue-hoki{% elseif key%4 == 1 %}red{% elseif key%4 == 2 %}green{% elseif key%4 == 3 %}purple{% endif %}">*/
/*                                 <div class="mt-head-icon">*/
/*                                     <img src="{{ module.avatar|url_decode }}" alt="" width="120" height="120" class="img-circle">*/
/*                                 </div>*/
/*                                 <div class="mt-head-desc"> {{ module.brief }}</div>*/
/*                                 <span class="mt-head-date"> {{ module.name }} </span>*/
/*                                 <div class="mt-head-button">*/
/*                                     <a href="{{ path('app_modules_modules_adddata') }}?moduleId={{ module.id }}">*/
/*                                         <button type="button" class="btn btn-circle btn-outline white btn-sm">添加数据*/
/*                                         </button>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="mt-body-actions-icons">*/
/*                                 <div class="btn-group btn-group btn-group-justified">*/
/*                                     <a href="{{ routes.modules_data_list }}?moduleId={{ module.id }}" class="btn ">*/
/*                                                                 <span class="mt-icon">*/
/*                                                                     <i class="glyphicon glyphicon-align-justify"></i>*/
/*                                                                 </span>列表 </a>*/
/*                                     <a href="{{ routes.modules_list_add_data }}?moduleId={{ module.id }}" class="btn ">*/
/*                                                                 <span class="mt-icon">*/
/*                                                                     <i class="glyphicon glyphicon-plus"></i>*/
/*                                                                 </span>添加 </a>*/
/*                                     <a href="{{ routes.modules_add }}?moduleId={{ module.id }}" class="btn ">*/
/*                                                                 <span class="mt-icon">*/
/*                                                                     <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                                 </span>修改 </a>*/
/*                                     <a href="#" class="btn deleteMod" data-id="{{ module.id }}">*/
/*                                                                 <span class="mt-icon">*/
/*                                                                     <i class="glyphicon glyphicon-remove"></i>*/
/*                                                                 </span>删除 </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {# 底部js和css加载 #}*/
/* {% block pageLevelPlugins %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block pageLevelScripts %}*/
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
/*         $(function() {*/
/*             $('.deleteMod').each(function(index, element) {*/
/*                 $(element).click(function (e) {*/
/*                     e.preventDefault();*/
/*                     var moduleId = parseInt($(element).attr('data-id'));*/
/*                     deleteMod(moduleId);*/
/*                 });*/
/*             });*/
/*         });*/
/*         function deleteMod(id) {*/
/*             if (confirm('确定要删除吗')) {*/
/*                 window.location.href = '{{ path('deleteMod') }}?moduleId=' + id;*/
/*             }*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
