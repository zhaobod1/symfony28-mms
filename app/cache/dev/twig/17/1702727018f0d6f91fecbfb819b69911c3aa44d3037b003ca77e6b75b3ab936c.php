<?php

/* modules/modList.html.twig */
class __TwigTemplate_aeed8d6549276b1c8096aef08806775057a793205207a5e44297f504c04e0339 extends Twig_Template
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
        $__internal_9415807c7834a93d027668933d4e643be0651800ccb0d652a7013292d91fd32d = $this->env->getExtension("native_profiler");
        $__internal_9415807c7834a93d027668933d4e643be0651800ccb0d652a7013292d91fd32d->enter($__internal_9415807c7834a93d027668933d4e643be0651800ccb0d652a7013292d91fd32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/modList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9415807c7834a93d027668933d4e643be0651800ccb0d652a7013292d91fd32d->leave($__internal_9415807c7834a93d027668933d4e643be0651800ccb0d652a7013292d91fd32d_prof);

    }

    // line 5
    public function block_h_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_83389295a97f3ed41b77baf1af3271c99093cadaff493e9f389c280f01c7fc2d = $this->env->getExtension("native_profiler");
        $__internal_83389295a97f3ed41b77baf1af3271c99093cadaff493e9f389c280f01c7fc2d->enter($__internal_83389295a97f3ed41b77baf1af3271c99093cadaff493e9f389c280f01c7fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelPlugins"));

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
        
        $__internal_83389295a97f3ed41b77baf1af3271c99093cadaff493e9f389c280f01c7fc2d->leave($__internal_83389295a97f3ed41b77baf1af3271c99093cadaff493e9f389c280f01c7fc2d_prof);

    }

    // line 15
    public function block_h_themeLayoutStyles($context, array $blocks = array())
    {
        $__internal_481f2432b9a00f783d98acff67a5c189b54586df648c55ae8e1e4ec244e5bdd0 = $this->env->getExtension("native_profiler");
        $__internal_481f2432b9a00f783d98acff67a5c189b54586df648c55ae8e1e4ec244e5bdd0->enter($__internal_481f2432b9a00f783d98acff67a5c189b54586df648c55ae8e1e4ec244e5bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_themeLayoutStyles"));

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
        
        $__internal_481f2432b9a00f783d98acff67a5c189b54586df648c55ae8e1e4ec244e5bdd0->leave($__internal_481f2432b9a00f783d98acff67a5c189b54586df648c55ae8e1e4ec244e5bdd0_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_428402f98572e97d917a5e23629ad61772735dd4a9deff856a82db3e32cc310e = $this->env->getExtension("native_profiler");
        $__internal_428402f98572e97d917a5e23629ad61772735dd4a9deff856a82db3e32cc310e->enter($__internal_428402f98572e97d917a5e23629ad61772735dd4a9deff856a82db3e32cc310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_428402f98572e97d917a5e23629ad61772735dd4a9deff856a82db3e32cc310e->leave($__internal_428402f98572e97d917a5e23629ad61772735dd4a9deff856a82db3e32cc310e_prof);

    }

    // line 26
    public function block_sideBar($context, array $blocks = array())
    {
        $__internal_9f7e1558cfa6aaf8f5b78c4ec86534500b48425cd1ffcffdf6f93d50fdcc7ad6 = $this->env->getExtension("native_profiler");
        $__internal_9f7e1558cfa6aaf8f5b78c4ec86534500b48425cd1ffcffdf6f93d50fdcc7ad6->enter($__internal_9f7e1558cfa6aaf8f5b78c4ec86534500b48425cd1ffcffdf6f93d50fdcc7ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sideBar"));

        // line 27
        echo "    ";
        $this->displayParentBlock("sideBar", $context, $blocks);
        echo "
";
        
        $__internal_9f7e1558cfa6aaf8f5b78c4ec86534500b48425cd1ffcffdf6f93d50fdcc7ad6->leave($__internal_9f7e1558cfa6aaf8f5b78c4ec86534500b48425cd1ffcffdf6f93d50fdcc7ad6_prof);

    }

    // line 29
    public function block_pageBar($context, array $blocks = array())
    {
        $__internal_0f2f5d18228045cf5754671fde58d537f22d3f718837549dc567e6fb15820549 = $this->env->getExtension("native_profiler");
        $__internal_0f2f5d18228045cf5754671fde58d537f22d3f718837549dc567e6fb15820549->enter($__internal_0f2f5d18228045cf5754671fde58d537f22d3f718837549dc567e6fb15820549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageBar"));

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
        
        $__internal_0f2f5d18228045cf5754671fde58d537f22d3f718837549dc567e6fb15820549->leave($__internal_0f2f5d18228045cf5754671fde58d537f22d3f718837549dc567e6fb15820549_prof);

    }

    // line 74
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_40f35a1d3def5dfa86c91ad32d9ab7c2391dd36324b55971fa2a4cd629d392f3 = $this->env->getExtension("native_profiler");
        $__internal_40f35a1d3def5dfa86c91ad32d9ab7c2391dd36324b55971fa2a4cd629d392f3->enter($__internal_40f35a1d3def5dfa86c91ad32d9ab7c2391dd36324b55971fa2a4cd629d392f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 75
        echo "    <div class=\"note note-info\">
        <p>
            请谨慎删除模块. 如果模块内部有数据,系统将禁止删除模块.
        </p>
    </div>
";
        
        $__internal_40f35a1d3def5dfa86c91ad32d9ab7c2391dd36324b55971fa2a4cd629d392f3->leave($__internal_40f35a1d3def5dfa86c91ad32d9ab7c2391dd36324b55971fa2a4cd629d392f3_prof);

    }

    // line 82
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_fccaf1dfb36a97abaa0de10c0df92429f1d6c6ee1a503eb7745bd8af2c27f052 = $this->env->getExtension("native_profiler");
        $__internal_fccaf1dfb36a97abaa0de10c0df92429f1d6c6ee1a503eb7745bd8af2c27f052->enter($__internal_fccaf1dfb36a97abaa0de10c0df92429f1d6c6ee1a503eb7745bd8af2c27f052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_fccaf1dfb36a97abaa0de10c0df92429f1d6c6ee1a503eb7745bd8af2c27f052->leave($__internal_fccaf1dfb36a97abaa0de10c0df92429f1d6c6ee1a503eb7745bd8af2c27f052_prof);

    }

    // line 173
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7b327418ac71b2030d4b01b9b9fa72811ad27ffb8786c0c3b291d4537a73a24a = $this->env->getExtension("native_profiler");
        $__internal_7b327418ac71b2030d4b01b9b9fa72811ad27ffb8786c0c3b291d4537a73a24a->enter($__internal_7b327418ac71b2030d4b01b9b9fa72811ad27ffb8786c0c3b291d4537a73a24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 174
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_7b327418ac71b2030d4b01b9b9fa72811ad27ffb8786c0c3b291d4537a73a24a->leave($__internal_7b327418ac71b2030d4b01b9b9fa72811ad27ffb8786c0c3b291d4537a73a24a_prof);

    }

    // line 177
    public function block_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_cf83b8e49688f0066a49ab393791ba7ef976e0b4512b5105868fe0696f4a10de = $this->env->getExtension("native_profiler");
        $__internal_cf83b8e49688f0066a49ab393791ba7ef976e0b4512b5105868fe0696f4a10de->enter($__internal_cf83b8e49688f0066a49ab393791ba7ef976e0b4512b5105868fe0696f4a10de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelPlugins"));

        // line 178
        echo "
";
        
        $__internal_cf83b8e49688f0066a49ab393791ba7ef976e0b4512b5105868fe0696f4a10de->leave($__internal_cf83b8e49688f0066a49ab393791ba7ef976e0b4512b5105868fe0696f4a10de_prof);

    }

    // line 185
    public function block_pageLevelScripts($context, array $blocks = array())
    {
        $__internal_b74ea13d15bd19b5c485bc8717ae9f485e2458945d1760b7d31f1dcea2f84ab4 = $this->env->getExtension("native_profiler");
        $__internal_b74ea13d15bd19b5c485bc8717ae9f485e2458945d1760b7d31f1dcea2f84ab4->enter($__internal_b74ea13d15bd19b5c485bc8717ae9f485e2458945d1760b7d31f1dcea2f84ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelScripts"));

        
        $__internal_b74ea13d15bd19b5c485bc8717ae9f485e2458945d1760b7d31f1dcea2f84ab4->leave($__internal_b74ea13d15bd19b5c485bc8717ae9f485e2458945d1760b7d31f1dcea2f84ab4_prof);

    }

    // line 191
    public function block_themeLayoutScript($context, array $blocks = array())
    {
        $__internal_5d10c39eddef6a976639d60fe0c2a77959d3a191b4b7d0798f6ebda88e39780b = $this->env->getExtension("native_profiler");
        $__internal_5d10c39eddef6a976639d60fe0c2a77959d3a191b4b7d0798f6ebda88e39780b->enter($__internal_5d10c39eddef6a976639d60fe0c2a77959d3a191b4b7d0798f6ebda88e39780b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeLayoutScript"));

        // line 192
        echo "    ";
        $this->displayParentBlock("themeLayoutScript", $context, $blocks);
        echo "
";
        
        $__internal_5d10c39eddef6a976639d60fe0c2a77959d3a191b4b7d0798f6ebda88e39780b->leave($__internal_5d10c39eddef6a976639d60fe0c2a77959d3a191b4b7d0798f6ebda88e39780b_prof);

    }

    // line 196
    public function block_huo15fix($context, array $blocks = array())
    {
        $__internal_1eec780e47c5f9769964af65bb6baab412b0a41696b01f78a2f908659eacdc74 = $this->env->getExtension("native_profiler");
        $__internal_1eec780e47c5f9769964af65bb6baab412b0a41696b01f78a2f908659eacdc74->enter($__internal_1eec780e47c5f9769964af65bb6baab412b0a41696b01f78a2f908659eacdc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "huo15fix"));

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
        
        $__internal_1eec780e47c5f9769964af65bb6baab412b0a41696b01f78a2f908659eacdc74->leave($__internal_1eec780e47c5f9769964af65bb6baab412b0a41696b01f78a2f908659eacdc74_prof);

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
