<?php

/* user/index.html.twig */
class __TwigTemplate_2f798a7ba9319f454e7086926ca4eed205d9023bd51caa36fd917b00cfcab504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'h_pageLevelPlugins' => array($this, 'block_h_pageLevelPlugins'),
            'h_pageLevelStyles' => array($this, 'block_h_pageLevelStyles'),
            'h_themeLayoutStyles' => array($this, 'block_h_themeLayoutStyles'),
            'pageBar' => array($this, 'block_pageBar'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageContent' => array($this, 'block_pageContent'),
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
        $__internal_d648574d0e6dabb531641109f305ccb4fbcccaefce6a3f74e7d97f465f70ec71 = $this->env->getExtension("native_profiler");
        $__internal_d648574d0e6dabb531641109f305ccb4fbcccaefce6a3f74e7d97f465f70ec71->enter($__internal_d648574d0e6dabb531641109f305ccb4fbcccaefce6a3f74e7d97f465f70ec71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d648574d0e6dabb531641109f305ccb4fbcccaefce6a3f74e7d97f465f70ec71->leave($__internal_d648574d0e6dabb531641109f305ccb4fbcccaefce6a3f74e7d97f465f70ec71_prof);

    }

    // line 3
    public function block_h_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_4f5b7d01a2aa92082fa787fb638b663b8e26fecfe0bffd3f5016b3c6ba4fb05b = $this->env->getExtension("native_profiler");
        $__internal_4f5b7d01a2aa92082fa787fb638b663b8e26fecfe0bffd3f5016b3c6ba4fb05b->enter($__internal_4f5b7d01a2aa92082fa787fb638b663b8e26fecfe0bffd3f5016b3c6ba4fb05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelPlugins"));

        // line 4
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\"
          rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_4f5b7d01a2aa92082fa787fb638b663b8e26fecfe0bffd3f5016b3c6ba4fb05b->leave($__internal_4f5b7d01a2aa92082fa787fb638b663b8e26fecfe0bffd3f5016b3c6ba4fb05b_prof);

    }

    // line 15
    public function block_h_pageLevelStyles($context, array $blocks = array())
    {
        $__internal_6422b258f77acfdf30d859c74630f4ce679df7961b132730cbec92e319fdbc14 = $this->env->getExtension("native_profiler");
        $__internal_6422b258f77acfdf30d859c74630f4ce679df7961b132730cbec92e319fdbc14->enter($__internal_6422b258f77acfdf30d859c74630f4ce679df7961b132730cbec92e319fdbc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelStyles"));

        // line 16
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/pages/css/profile.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_6422b258f77acfdf30d859c74630f4ce679df7961b132730cbec92e319fdbc14->leave($__internal_6422b258f77acfdf30d859c74630f4ce679df7961b132730cbec92e319fdbc14_prof);

    }

    // line 19
    public function block_h_themeLayoutStyles($context, array $blocks = array())
    {
        $__internal_f1360d52823f28dadb82a96b28a8c35b1c6dd14cd7d05428631c8638f3754179 = $this->env->getExtension("native_profiler");
        $__internal_f1360d52823f28dadb82a96b28a8c35b1c6dd14cd7d05428631c8638f3754179->enter($__internal_f1360d52823f28dadb82a96b28a8c35b1c6dd14cd7d05428631c8638f3754179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_themeLayoutStyles"));

        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"
          id=\"style_color\"/>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_f1360d52823f28dadb82a96b28a8c35b1c6dd14cd7d05428631c8638f3754179->leave($__internal_f1360d52823f28dadb82a96b28a8c35b1c6dd14cd7d05428631c8638f3754179_prof);

    }

    // line 26
    public function block_pageBar($context, array $blocks = array())
    {
        $__internal_130544c1bddb29fb0b8b35f4f019012f1acaba0e1b42baebe83718ee10a4a008 = $this->env->getExtension("native_profiler");
        $__internal_130544c1bddb29fb0b8b35f4f019012f1acaba0e1b42baebe83718ee10a4a008->enter($__internal_130544c1bddb29fb0b8b35f4f019012f1acaba0e1b42baebe83718ee10a4a008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageBar"));

        // line 27
        echo "    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <a href=\"index.html\">首页</a>
                <i class=\"fa fa-circle\"></i>
            </li>
            <li>
                <a href=\"#\">个人中心</a>
                <i class=\"fa fa-circle\"></i>
            </li>
            <li>
                <span>预览</span>
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
        
        $__internal_130544c1bddb29fb0b8b35f4f019012f1acaba0e1b42baebe83718ee10a4a008->leave($__internal_130544c1bddb29fb0b8b35f4f019012f1acaba0e1b42baebe83718ee10a4a008_prof);

    }

    // line 71
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_b58a51bc19f1b033e1a59ee54916f3789399834f2d74a1a945a1963d8d37bab8 = $this->env->getExtension("native_profiler");
        $__internal_b58a51bc19f1b033e1a59ee54916f3789399834f2d74a1a945a1963d8d37bab8->enter($__internal_b58a51bc19f1b033e1a59ee54916f3789399834f2d74a1a945a1963d8d37bab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 72
        echo "    <h1 class=\"page-title\"> 个人中心
        <small></small>
    </h1>
";
        
        $__internal_b58a51bc19f1b033e1a59ee54916f3789399834f2d74a1a945a1963d8d37bab8->leave($__internal_b58a51bc19f1b033e1a59ee54916f3789399834f2d74a1a945a1963d8d37bab8_prof);

    }

    // line 77
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_46f6fdd316cf74a4fb730554f5b7b3ca5700f63b58d5bef8d7a6e34058000cff = $this->env->getExtension("native_profiler");
        $__internal_46f6fdd316cf74a4fb730554f5b7b3ca5700f63b58d5bef8d7a6e34058000cff->enter($__internal_46f6fdd316cf74a4fb730554f5b7b3ca5700f63b58d5bef8d7a6e34058000cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 78
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class=\"profile-sidebar\">
                <!-- PORTLET MAIN -->
                <div class=\"portlet light profile-sidebar-portlet\">
                    <!-- SIDEBAR USERPIC -->
                    <div class=\"profile-userpic\">
                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/media/profile/profile_user.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"
                             alt=\"\">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class=\"profile-usertitle\">
                        <div class=\"profile-usertitle-name\"> ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userArr"]) ? $context["userArr"] : $this->getContext($context, "userArr")), "username", array()), "html", null, true);
        echo "</div>
                        <div class=\"profile-usertitle-job\"> ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userArr"]) ? $context["userArr"] : $this->getContext($context, "userArr")), "department", array()), "html", null, true);
        echo "</div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class=\"profile-userbuttons\">
                        <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getUrl("app_user_user_ulist");
        echo "\">
                            <button type=\"button\" class=\"btn btn-circle green btn-sm\">部门同事</button>
                        </a>
                        <button type=\"button\" class=\"btn btn-circle red btn-sm\">添加模块</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class=\"profile-usermenu\">
                        <ul class=\"nav\">
                            <li class=\"active\">
                                <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "user_index", array()), "html", null, true);
        echo "\">
                                    <i class=\"icon-home\"></i> 预览 </a>
                            </li>
                            <li class=\"\">
                                <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">
                                    <i class=\"icon-settings\"></i> 账号设置 </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "user_help", array()), "html", null, true);
        echo "\">
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
                        <h4 class=\"profile-desc-title\">关于 ";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userArr"]) ? $context["userArr"] : $this->getContext($context, "userArr")), "username", array()), "html", null, true);
        echo "</h4>

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
                                    <span class=\"caption-helper\">权限:
                                        ";
        // line 162
        if (((isset($context["isCheck"]) ? $context["isCheck"] : $this->getContext($context, "isCheck")) == "1")) {
            // line 163
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userRoles"]) ? $context["userRoles"] : $this->getContext($context, "userRoles")));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 164
                echo "                                                ";
                if (($context["role"] == "ROLE_SUPER_ADMIN")) {
                    // line 165
                    echo "                                                    超级管理员,
                                                ";
                } elseif ((                // line 166
$context["role"] == "ROLE_ADMIN")) {
                    // line 167
                    echo "                                                    部长,
                                                ";
                } elseif ((                // line 168
$context["role"] == "ROLE_USER")) {
                    // line 169
                    echo "                                                    普通用户
                                                ";
                }
                // line 171
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                                        ";
        } else {
            // line 173
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getRoles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 174
                echo "                                                ";
                if (($context["role"] == "ROLE_SUPER_ADMIN")) {
                    // line 175
                    echo "                                                    超级管理员,
                                                ";
                } elseif ((                // line 176
$context["role"] == "ROLE_ADMIN")) {
                    // line 177
                    echo "                                                    部长,
                                                ";
                } elseif ((                // line 178
$context["role"] == "ROLE_USER")) {
                    // line 179
                    echo "                                                    普通用户
                                                ";
                }
                // line 181
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                                        ";
        }
        // line 183
        echo "                                    </span>
                                </div>
                                <div class=\"actions\">
                                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm active\">
                                            <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">模块管理</label>
                                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm\">
                                            <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">数据列表</label>

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
                                            <td>用户名</td>
                                            <td>";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userArr"]) ? $context["userArr"] : $this->getContext($context, "userArr")), "username", array()), "html", null, true);
        echo "</td>
                                            <td></td>
                                        </tr>


                                        <tr>
                                            <td>年龄</td>
                                            <td>";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userArr"]) ? $context["userArr"] : $this->getContext($context, "userArr")), "age", array()), "html", null, true);
        echo "</td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>部门</td>
                                            <td>";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userArr"]) ? $context["userArr"] : $this->getContext($context, "userArr")), "department", array()), "html", null, true);
        echo "</td>
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
        
        $__internal_46f6fdd316cf74a4fb730554f5b7b3ca5700f63b58d5bef8d7a6e34058000cff->leave($__internal_46f6fdd316cf74a4fb730554f5b7b3ca5700f63b58d5bef8d7a6e34058000cff_prof);

    }

    // line 242
    public function block_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_5ed17552ced3c818988ca5e9e868e7e37af516fdb48de9c26041d67bc46c926b = $this->env->getExtension("native_profiler");
        $__internal_5ed17552ced3c818988ca5e9e868e7e37af516fdb48de9c26041d67bc46c926b->enter($__internal_5ed17552ced3c818988ca5e9e868e7e37af516fdb48de9c26041d67bc46c926b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelPlugins"));

        // line 243
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/global/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/global/plugins/gmaps/gmaps.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_5ed17552ced3c818988ca5e9e868e7e37af516fdb48de9c26041d67bc46c926b->leave($__internal_5ed17552ced3c818988ca5e9e868e7e37af516fdb48de9c26041d67bc46c926b_prof);

    }

    // line 248
    public function block_pageLevelScripts($context, array $blocks = array())
    {
        $__internal_77004b83f2e39fe94c69d9dcbcda24e60b9ed5e869c4b980b8596939decea2b5 = $this->env->getExtension("native_profiler");
        $__internal_77004b83f2e39fe94c69d9dcbcda24e60b9ed5e869c4b980b8596939decea2b5->enter($__internal_77004b83f2e39fe94c69d9dcbcda24e60b9ed5e869c4b980b8596939decea2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelScripts"));

        // line 249
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/pages/scripts/profile.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_77004b83f2e39fe94c69d9dcbcda24e60b9ed5e869c4b980b8596939decea2b5->leave($__internal_77004b83f2e39fe94c69d9dcbcda24e60b9ed5e869c4b980b8596939decea2b5_prof);

    }

    // line 251
    public function block_themeLayoutScript($context, array $blocks = array())
    {
        $__internal_e96079d57643aba716169a28fa86a8dff8faa7f3e62f3d865921bc5f557198e3 = $this->env->getExtension("native_profiler");
        $__internal_e96079d57643aba716169a28fa86a8dff8faa7f3e62f3d865921bc5f557198e3->enter($__internal_e96079d57643aba716169a28fa86a8dff8faa7f3e62f3d865921bc5f557198e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeLayoutScript"));

        // line 252
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_e96079d57643aba716169a28fa86a8dff8faa7f3e62f3d865921bc5f557198e3->leave($__internal_e96079d57643aba716169a28fa86a8dff8faa7f3e62f3d865921bc5f557198e3_prof);

    }

    // line 258
    public function block_huo15fix($context, array $blocks = array())
    {
        $__internal_6ca8568267b192c26aede30129fc26dddb8aafcc8125a18adb2da47e75cf3f90 = $this->env->getExtension("native_profiler");
        $__internal_6ca8568267b192c26aede30129fc26dddb8aafcc8125a18adb2da47e75cf3f90->enter($__internal_6ca8568267b192c26aede30129fc26dddb8aafcc8125a18adb2da47e75cf3f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "huo15fix"));

        // line 259
        echo "    <style>
        .page-content {
            background: #eef1f5;
        }
    </style>
";
        
        $__internal_6ca8568267b192c26aede30129fc26dddb8aafcc8125a18adb2da47e75cf3f90->leave($__internal_6ca8568267b192c26aede30129fc26dddb8aafcc8125a18adb2da47e75cf3f90_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 259,  506 => 258,  497 => 254,  493 => 253,  488 => 252,  482 => 251,  472 => 249,  466 => 248,  457 => 246,  453 => 245,  447 => 243,  441 => 242,  415 => 222,  406 => 216,  396 => 209,  368 => 183,  365 => 182,  359 => 181,  355 => 179,  353 => 178,  350 => 177,  348 => 176,  345 => 175,  342 => 174,  337 => 173,  334 => 172,  328 => 171,  324 => 169,  322 => 168,  319 => 167,  317 => 166,  314 => 165,  311 => 164,  306 => 163,  304 => 162,  282 => 143,  252 => 116,  245 => 112,  238 => 108,  225 => 98,  217 => 93,  213 => 92,  204 => 86,  194 => 78,  188 => 77,  178 => 72,  172 => 71,  123 => 27,  117 => 26,  108 => 23,  103 => 21,  98 => 20,  92 => 19,  82 => 16,  76 => 15,  67 => 11,  62 => 9,  58 => 8,  52 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }
}
/* {% extends 'user_base.html.twig' %}*/
/* */
/* {% block h_pageLevelPlugins %}*/
/* */
/*     <link href="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}"*/
/*           rel="stylesheet"*/
/*           type="text/css"/>*/
/*     <link href="{{ asset('/assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet"*/
/*           type="text/css"/>*/
/*     <link href="{{ asset('/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
/* */
/* */
/* {% block h_pageLevelStyles %}*/
/*     <link href="{{ asset('/assets/pages/css/profile.min.css') }}" rel="stylesheet" type="text/css">*/
/* {% endblock %}*/
/* */
/* {% block h_themeLayoutStyles %}*/
/*     <link href="{{ asset('/assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('/assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css"*/
/*           id="style_color"/>*/
/*     <link href="{{ asset('/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
/* */
/* {% block pageBar %}*/
/*     <div class="page-bar">*/
/*         <ul class="page-breadcrumb">*/
/*             <li>*/
/*                 <a href="index.html">首页</a>*/
/*                 <i class="fa fa-circle"></i>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#">个人中心</a>*/
/*                 <i class="fa fa-circle"></i>*/
/*             </li>*/
/*             <li>*/
/*                 <span>预览</span>*/
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
/*     <h1 class="page-title"> 个人中心*/
/*         <small></small>*/
/*     </h1>*/
/* {% endblock %}*/
/* */
/* {% block pageContent %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <!-- BEGIN PROFILE SIDEBAR -->*/
/*             <div class="profile-sidebar">*/
/*                 <!-- PORTLET MAIN -->*/
/*                 <div class="portlet light profile-sidebar-portlet">*/
/*                     <!-- SIDEBAR USERPIC -->*/
/*                     <div class="profile-userpic">*/
/*                         <img src="{{ asset('assets/pages/media/profile/profile_user.jpg') }}" class="img-responsive"*/
/*                              alt="">*/
/*                     </div>*/
/*                     <!-- END SIDEBAR USERPIC -->*/
/*                     <!-- SIDEBAR USER TITLE -->*/
/*                     <div class="profile-usertitle">*/
/*                         <div class="profile-usertitle-name"> {{ userArr.username }}</div>*/
/*                         <div class="profile-usertitle-job"> {{ userArr.department }}</div>*/
/*                     </div>*/
/*                     <!-- END SIDEBAR USER TITLE -->*/
/*                     <!-- SIDEBAR BUTTONS -->*/
/*                     <div class="profile-userbuttons">*/
/*                         <a href="{{ url('app_user_user_ulist') }}">*/
/*                             <button type="button" class="btn btn-circle green btn-sm">部门同事</button>*/
/*                         </a>*/
/*                         <button type="button" class="btn btn-circle red btn-sm">添加模块</button>*/
/*                     </div>*/
/*                     <!-- END SIDEBAR BUTTONS -->*/
/*                     <!-- SIDEBAR MENU -->*/
/*                     <div class="profile-usermenu">*/
/*                         <ul class="nav">*/
/*                             <li class="active">*/
/*                                 <a href="{{ routes.user_index }}">*/
/*                                     <i class="icon-home"></i> 预览 </a>*/
/*                             </li>*/
/*                             <li class="">*/
/*                                 <a href="{{ path('fos_user_profile_edit') }}">*/
/*                                     <i class="icon-settings"></i> 账号设置 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ routes.user_help }}">*/
/*                                     <i class="icon-info"></i> 帮助 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- END MENU -->*/
/*                 </div>*/
/*                 <!-- END PORTLET MAIN -->*/
/*                 <!-- PORTLET MAIN -->*/
/*                 <div class="portlet light ">*/
/*                     <!-- STAT -->*/
/*                     <div class="row list-separated profile-stat">*/
/*                         <div class="col-md-4 col-sm-4 col-xs-6">*/
/*                             <div class="uppercase profile-stat-title"> 37</div>*/
/*                             <div class="uppercase profile-stat-text"> 录入数据</div>*/
/*                         </div>*/
/*                         <div class="col-md-4 col-sm-4 col-xs-6">*/
/*                             <div class="uppercase profile-stat-title"> 5</div>*/
/*                             <div class="uppercase profile-stat-text"> 回收站</div>*/
/*                         </div>*/
/*                         <div class="col-md-4 col-sm-4 col-xs-6">*/
/*                             <div class="uppercase profile-stat-title"> 3</div>*/
/*                             <div class="uppercase profile-stat-text"> 模块权限</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- END STAT -->*/
/*                     <div>*/
/*                         <h4 class="profile-desc-title">关于 {{ userArr.username }}</h4>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <!-- END PORTLET MAIN -->*/
/* */
/*             </div>*/
/*             <!-- END BEGIN PROFILE SIDEBAR -->*/
/*             <!-- BEGIN PROFILE CONTENT -->*/
/*             <div class="profile-content">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <!-- BEGIN PORTLET -->*/
/*                         <div class="portlet light">*/
/*                             <div class="portlet-title">*/
/*                                 <div class="caption caption-md">*/
/*                                     <i class="icon-bar-chart theme-font hide"></i>*/
/*                                     <span class="caption-subject font-blue-madison bold uppercase">预览</span>*/
/*                                     <span class="caption-helper">权限:*/
/*                                         {% if isCheck == '1' %}*/
/*                                             {% for  role in userRoles %}*/
/*                                                 {% if role == 'ROLE_SUPER_ADMIN' %}*/
/*                                                     超级管理员,*/
/*                                                 {% elseif role == 'ROLE_ADMIN' %}*/
/*                                                     部长,*/
/*                                                 {% elseif role == 'ROLE_USER' %}*/
/*                                                     普通用户*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         {% else %}*/
/*                                             {% for role in app.user.getRoles %}*/
/*                                                 {% if role == 'ROLE_SUPER_ADMIN' %}*/
/*                                                     超级管理员,*/
/*                                                 {% elseif role == 'ROLE_ADMIN' %}*/
/*                                                     部长,*/
/*                                                 {% elseif role == 'ROLE_USER' %}*/
/*                                                     普通用户*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </span>*/
/*                                 </div>*/
/*                                 <div class="actions">*/
/*                                     <div class="btn-group btn-group-devided" data-toggle="buttons">*/
/*                                         <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">*/
/*                                             <input type="radio" name="options" class="toggle" id="option1">模块管理</label>*/
/*                                         <label class="btn btn-transparent grey-salsa btn-circle btn-sm">*/
/*                                             <input type="radio" name="options" class="toggle" id="option2">数据列表</label>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="portlet-body">*/
/*                                 <div class="table-responsive">*/
/*                                     <table class="table">*/
/*                                         <thead>*/
/*                                         <tr>*/
/*                                             <th>名称</th>*/
/*                                             <th>内容</th>*/
/*                                             <th>备注</th>*/
/*                                         </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/* */
/*                                         <tr>*/
/*                                             <td>用户名</td>*/
/*                                             <td>{{ userArr.username }}</td>*/
/*                                             <td></td>*/
/*                                         </tr>*/
/* */
/* */
/*                                         <tr>*/
/*                                             <td>年龄</td>*/
/*                                             <td>{{ userArr.age }}</td>*/
/*                                             <td></td>*/
/*                                         </tr>*/
/* */
/*                                         <tr>*/
/*                                             <td>部门</td>*/
/*                                             <td>{{ userArr.department }}</td>*/
/*                                             <td></td>*/
/*                                         </tr>*/
/* */
/* */
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- END PORTLET -->*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <!-- END PROFILE CONTENT -->*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {# 底部js和css加载 #}*/
/* {% block pageLevelPlugins %}*/
/*     <script src="{{ asset('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{ asset('/assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/assets/global/plugins/gmaps/gmaps.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* {% block pageLevelScripts %}*/
/*     <script src="{{ asset('/assets/pages/scripts/profile.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* {% block themeLayoutScript %}*/
/*     <script src="{{ asset('/assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block huo15fix %}*/
/*     <style>*/
/*         .page-content {*/
/*             background: #eef1f5;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
