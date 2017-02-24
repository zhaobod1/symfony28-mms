<?php

/* modules/addData.html.twig */
class __TwigTemplate_6c4116fb21e6c767594e86f661cb86e5fd0ec4ee670aea41160a4b5f7db4817f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "modules/addData.html.twig", 1);
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
        $__internal_a4cf1115abc039c6f11ca3c36854b4ffea81b411beac6e63ed37b8c2cddc751e = $this->env->getExtension("native_profiler");
        $__internal_a4cf1115abc039c6f11ca3c36854b4ffea81b411beac6e63ed37b8c2cddc751e->enter($__internal_a4cf1115abc039c6f11ca3c36854b4ffea81b411beac6e63ed37b8c2cddc751e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/addData.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4cf1115abc039c6f11ca3c36854b4ffea81b411beac6e63ed37b8c2cddc751e->leave($__internal_a4cf1115abc039c6f11ca3c36854b4ffea81b411beac6e63ed37b8c2cddc751e_prof);

    }

    // line 5
    public function block_h_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_288719b0c459ac345b8c4e69449759999490808f8d4988a19763c26871676973 = $this->env->getExtension("native_profiler");
        $__internal_288719b0c459ac345b8c4e69449759999490808f8d4988a19763c26871676973->enter($__internal_288719b0c459ac345b8c4e69449759999490808f8d4988a19763c26871676973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_pageLevelPlugins"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css"), "html", null, true);
        echo "\"
          rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>

    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/css/jquery.fileupload-noscript.css"), "html", null, true);
        echo "\">
    </noscript>
    <noscript>
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/css/jquery.fileupload-ui-noscript.css"), "html", null, true);
        echo "\">
    </noscript>

";
        
        $__internal_288719b0c459ac345b8c4e69449759999490808f8d4988a19763c26871676973->leave($__internal_288719b0c459ac345b8c4e69449759999490808f8d4988a19763c26871676973_prof);

    }

    // line 25
    public function block_h_themeLayoutStyles($context, array $blocks = array())
    {
        $__internal_5d84bddd6393046d3893e4d76230a0ecbf1da4cd25f6627e4eafda5841194dbe = $this->env->getExtension("native_profiler");
        $__internal_5d84bddd6393046d3893e4d76230a0ecbf1da4cd25f6627e4eafda5841194dbe->enter($__internal_5d84bddd6393046d3893e4d76230a0ecbf1da4cd25f6627e4eafda5841194dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h_themeLayoutStyles"));

        // line 26
        echo "    ";
        $this->displayParentBlock("h_themeLayoutStyles", $context, $blocks);
        echo "
";
        
        $__internal_5d84bddd6393046d3893e4d76230a0ecbf1da4cd25f6627e4eafda5841194dbe->leave($__internal_5d84bddd6393046d3893e4d76230a0ecbf1da4cd25f6627e4eafda5841194dbe_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_dc8a858bc33af0d0c919a6bbf2a8d1bab5686d4fa29d9a86745d23633960e458 = $this->env->getExtension("native_profiler");
        $__internal_dc8a858bc33af0d0c919a6bbf2a8d1bab5686d4fa29d9a86745d23633960e458->enter($__internal_dc8a858bc33af0d0c919a6bbf2a8d1bab5686d4fa29d9a86745d23633960e458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_dc8a858bc33af0d0c919a6bbf2a8d1bab5686d4fa29d9a86745d23633960e458->leave($__internal_dc8a858bc33af0d0c919a6bbf2a8d1bab5686d4fa29d9a86745d23633960e458_prof);

    }

    // line 33
    public function block_sideBar($context, array $blocks = array())
    {
        $__internal_8cea6876dd529c50b18eb8c721455c83ba7e3a9e4b34e3de46ad61985ea496f6 = $this->env->getExtension("native_profiler");
        $__internal_8cea6876dd529c50b18eb8c721455c83ba7e3a9e4b34e3de46ad61985ea496f6->enter($__internal_8cea6876dd529c50b18eb8c721455c83ba7e3a9e4b34e3de46ad61985ea496f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sideBar"));

        // line 34
        echo "    ";
        $this->displayParentBlock("sideBar", $context, $blocks);
        echo "
";
        
        $__internal_8cea6876dd529c50b18eb8c721455c83ba7e3a9e4b34e3de46ad61985ea496f6->leave($__internal_8cea6876dd529c50b18eb8c721455c83ba7e3a9e4b34e3de46ad61985ea496f6_prof);

    }

    // line 36
    public function block_pageBar($context, array $blocks = array())
    {
        $__internal_7bb9bd04f7db3536138e8039223f3ec5f3f7b113255589da7d0cb3e1b16fd1bc = $this->env->getExtension("native_profiler");
        $__internal_7bb9bd04f7db3536138e8039223f3ec5f3f7b113255589da7d0cb3e1b16fd1bc->enter($__internal_7bb9bd04f7db3536138e8039223f3ec5f3f7b113255589da7d0cb3e1b16fd1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageBar"));

        // line 37
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
                <span>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "name", array()), "html", null, true);
        echo " - 添加新数据</span>
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
        
        $__internal_7bb9bd04f7db3536138e8039223f3ec5f3f7b113255589da7d0cb3e1b16fd1bc->leave($__internal_7bb9bd04f7db3536138e8039223f3ec5f3f7b113255589da7d0cb3e1b16fd1bc_prof);

    }

    // line 81
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_796538da5162bb53eb1613cd888ac632a6a6ed5fcfd1142fdd55b6684e638698 = $this->env->getExtension("native_profiler");
        $__internal_796538da5162bb53eb1613cd888ac632a6a6ed5fcfd1142fdd55b6684e638698->enter($__internal_796538da5162bb53eb1613cd888ac632a6a6ed5fcfd1142fdd55b6684e638698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 82
        echo "    <div class=\"note note-info\">
        <p>
            请谨慎删除数据. 一旦删除数据不可恢复. 遇到问题请联系管理员恢复数据.
        </p>
    </div>
";
        
        $__internal_796538da5162bb53eb1613cd888ac632a6a6ed5fcfd1142fdd55b6684e638698->leave($__internal_796538da5162bb53eb1613cd888ac632a6a6ed5fcfd1142fdd55b6684e638698_prof);

    }

    // line 89
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_72e6c31711237ef3898deb773f65cd5eab4283493fcc760d0af3ddfd4454722a = $this->env->getExtension("native_profiler");
        $__internal_72e6c31711237ef3898deb773f65cd5eab4283493fcc760d0af3ddfd4454722a->enter($__internal_72e6c31711237ef3898deb773f65cd5eab4283493fcc760d0af3ddfd4454722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 90
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                    <div class=\"caption\">
                        <i class=\"icon-settings font-dark\"></i>
                        <span class=\"caption-subject font-dark sbold uppercase\"> ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "name", array()), "html", null, true);
        echo " - 添加新数据 -</span>
                    </div>
                    <div class=\"actions\">
                        <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                            <label class=\"btn btn-transparent dark btn-outline btn-circle btn-sm active\">
                                <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">返回列表</label>

                        </div>
                    </div>
                </div>
                <div class=\"portlet-body form\">

                    ";
        // line 108
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "form_widget_style_multiple_fileUp.html.twig"));
        // line 109
        echo "
                    ";
        // line 111
        echo "
                    ";
        // line 112
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    ";
        // line 114
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                    <!-- The blueimp Gallery widget -->
                    <div id=\"blueimp-gallery\" class=\"blueimp-gallery blueimp-gallery-controls\" data-filter=\":even\">
                        <div class=\"slides\"></div>
                        <h3 class=\"title\"></h3>
                        <a class=\"prev\">‹</a>
                        <a class=\"next\">›</a>
                        <a class=\"close\">×</a>
                        <a class=\"play-pause\"></a>
                        <ol class=\"indicator\"></ol>
                    </div>
                </div>
                <div id=\"deviceUploadDiv\" class=\"portlet-body\">
                    <div class=\"modal-header\">
                        <button id=\"huo15close\" type=\"button\" class=\"close bg_white\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">拍照上传</h4>
                    </div>
                    <div>
                        <object id=\"view1\" type=\"application/x-eloamplugin\" width=\"600\" height=\"300\"
                                name=\"view\"></object>
                        <object id=\"view2\" type=\"application/x-eloamplugin\" width=\"600\" height=\"300\"
                                name=\"view\"></object>
                    </div>

                    <div>
                        <object id=\"thumb1\" type=\"application/x-eloamplugin\" width=\"1208\" height=\"150\"
                                name=\"thumb\"></object>
                    </div>

                    <tr>
                        <td>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <label id=\"lab1\" style=\"color:#fff;\">设备1</label>
                                    <select id=\"subType1\" style=\"width: 90px\" name=\"subType1\"
                                            onchange=\"changesubTypeMain()\"></select>
                                    <select id=\"selRes1\" style=\"width: 90px\" name=\"selRes\"></select>
                                    <span style=\"color:#fff;\">扫描尺寸</span><select id=\"scansize\" style=\"width: 90px\"
                                                                                 name=\"scansize\"
                                                                                 onchange=\"changescansize()\">
                                        <option value=\"org\">原始</option>
                                        <option value=\"mid\">中</option>
                                        <option value=\"small\">小</option>
                                    </select>
                                    ";
        // line 164
        echo "                                </div>
                                <div class=\"col-md-12\">
                                    <input class=\" btn btn-success\" type=\"button\" value=\"打开视频\" onclick=\"OpenVideo()\"/>
                                    <input class=\"submit_01 btn btn-success\" type=\"button\" value=\"关闭视频\"
                                           onclick=\"CloseVideo()\"/>
                                    <input class=\"submit_01 btn btn-success\" type=\"button\" value=\"左转\" onclick=\"Left()\"/>
                                    <input class=\"submit_01 btn btn-success\" type=\"button\" value=\"右转\"
                                           onclick=\"Right()\"/>
                                    <input class=\"submit_01 btn btn-success\" type=\"button\" value=\"属性\"
                                           onclick=\"ShowProperty()\"/>
                                    <span style=\"width: 10px;\"></span>
                                    <input class=\"submit_01 btn btn-primary\" type=\"button\" value=\"拍照\" onclick=\"Scan()\"/>
                                    <input class=\"submit_01 btn btn-primary\" type=\"button\" value=\"确定\"
                                           onclick=\"closeWinAndUpload()\"/>


                                </div>

                                <div class=\"col-md-12\">

                                    <input type=\"text\" class=\"msg_h15\" id=\"message\" size=\"195\"/>
                                    <input type=\"text\" class=\"msg_h15\" id=\"idcard\" size=\"195\"/>
                                    <input type=\"text\" class=\"msg_h15\" id=\"biokey\" size=\"195\"/>
                                    <input type=\"text\" class=\"msg_h15\" id=\"reader\" size=\"195\"/>
                                    <input type=\"text\" class=\"msg_h15\" id=\"mag\" size=\"195\"/>
                                </div>


                            </div>


                        </td>
                    </tr>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_72e6c31711237ef3898deb773f65cd5eab4283493fcc760d0af3ddfd4454722a->leave($__internal_72e6c31711237ef3898deb773f65cd5eab4283493fcc760d0af3ddfd4454722a_prof);

    }

    // line 203
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bb376056b99a123af8d05853eef53a615d843c7b37cfae607b62c8a2865318cf = $this->env->getExtension("native_profiler");
        $__internal_bb376056b99a123af8d05853eef53a615d843c7b37cfae607b62c8a2865318cf->enter($__internal_bb376056b99a123af8d05853eef53a615d843c7b37cfae607b62c8a2865318cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 204
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "


";
        
        $__internal_bb376056b99a123af8d05853eef53a615d843c7b37cfae607b62c8a2865318cf->leave($__internal_bb376056b99a123af8d05853eef53a615d843c7b37cfae607b62c8a2865318cf_prof);

    }

    // line 209
    public function block_pageLevelPlugins($context, array $blocks = array())
    {
        $__internal_3ff913fc934047d5c140e2d87514bebbd2ba7112c4d57f3e630ce0b27d716356 = $this->env->getExtension("native_profiler");
        $__internal_3ff913fc934047d5c140e2d87514bebbd2ba7112c4d57f3e630ce0b27d716356->enter($__internal_3ff913fc934047d5c140e2d87514bebbd2ba7112c4d57f3e630ce0b27d716356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelPlugins"));

        // line 210
        echo "
";
        
        $__internal_3ff913fc934047d5c140e2d87514bebbd2ba7112c4d57f3e630ce0b27d716356->leave($__internal_3ff913fc934047d5c140e2d87514bebbd2ba7112c4d57f3e630ce0b27d716356_prof);

    }

    // line 217
    public function block_pageLevelScripts($context, array $blocks = array())
    {
        $__internal_bead8a1c5c427d43a2cb80c51a65b7175ef2a2a028820a626860b940d561705a = $this->env->getExtension("native_profiler");
        $__internal_bead8a1c5c427d43a2cb80c51a65b7175ef2a2a028820a626860b940d561705a->enter($__internal_bead8a1c5c427d43a2cb80c51a65b7175ef2a2a028820a626860b940d561705a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageLevelScripts"));

        // line 218
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/gallery/js/blueimp-helper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/gallery/js/jquery.blueimp-gallery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/gallery/js/blueimp-gallery-fullscreen.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/gallery/js/blueimp-gallery-indicator.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/huo15Templates/tmpl.js"), "html", null, true);
        echo "\"></script>

    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/Javascript-Load-Image/load-image.all.min.js"), "html", null, true);
        echo "\"></script>

    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/Canvas-to-Blob/canvas-to-blob.js"), "html", null, true);
        echo "\"></script>

    <!-- blueimp Gallery script -->
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>

    <!-- The basic File Upload plugin -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>

    <!-- The File Upload processing plugin -->
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/jquery.fileupload-process.js"), "html", null, true);
        echo "\"></script>

    <!-- The File Upload image preview & resize plugin -->
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/jquery.fileupload-image.js"), "html", null, true);
        echo "\"></script>

    <!-- The File Upload audio preview plugin -->
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/jquery.fileupload-audio.js"), "html", null, true);
        echo "\"></script>

    <!-- The File Upload video preview plugin -->
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/jquery.fileupload-video.js"), "html", null, true);
        echo "\"></script>

    <!-- The File Upload validation plugin -->
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/jquery.fileupload-validate.js"), "html", null, true);
        echo "\"></script>

    <!-- The File Upload user interface plugin -->
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>
    <script>
        huo15ModuleId = ";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "id", array()), "html", null, true);
        echo ";
        is_detail = ";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["is_detail"]) ? $context["is_detail"] : $this->getContext($context, "is_detail")), "html", null, true);
        echo " ? 1 : 0;
    </script>
    <!-- The main application script -->
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/js/main.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/uploadFile/css/huo15DeviceUpload.css"), "html", null, true);
        echo "\">


";
        
        $__internal_bead8a1c5c427d43a2cb80c51a65b7175ef2a2a028820a626860b940d561705a->leave($__internal_bead8a1c5c427d43a2cb80c51a65b7175ef2a2a028820a626860b940d561705a_prof);

    }

    // line 272
    public function block_themeLayoutScript($context, array $blocks = array())
    {
        $__internal_21deb8fcce56885102bc3c76119cb9da712fe87f1dc91b5a18d879a2f85423a5 = $this->env->getExtension("native_profiler");
        $__internal_21deb8fcce56885102bc3c76119cb9da712fe87f1dc91b5a18d879a2f85423a5->enter($__internal_21deb8fcce56885102bc3c76119cb9da712fe87f1dc91b5a18d879a2f85423a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeLayoutScript"));

        // line 273
        echo "    ";
        $this->displayParentBlock("themeLayoutScript", $context, $blocks);
        echo "
";
        
        $__internal_21deb8fcce56885102bc3c76119cb9da712fe87f1dc91b5a18d879a2f85423a5->leave($__internal_21deb8fcce56885102bc3c76119cb9da712fe87f1dc91b5a18d879a2f85423a5_prof);

    }

    // line 277
    public function block_huo15fix($context, array $blocks = array())
    {
        $__internal_4cfd2ddaccf31ddb5f8518137c85ad8e53d23e308555938974fecfeb6249c507 = $this->env->getExtension("native_profiler");
        $__internal_4cfd2ddaccf31ddb5f8518137c85ad8e53d23e308555938974fecfeb6249c507->enter($__internal_4cfd2ddaccf31ddb5f8518137c85ad8e53d23e308555938974fecfeb6249c507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "huo15fix"));

        // line 278
        echo "    <script language=\"javascript\" type=\"text/javascript\">
        var DeviceMain;//主头
        var DeviceAssist;//副头
        var VideoMain;//主头
        var VideoAssist;//副头
        var videoCapMain;
        var videoCapAssist;
        imgArr = [];
        imgNameArr = [];
        var PicPath;

        function plugin() {
            return document.getElementById('view1');
        }

        function MainView() {
            return document.getElementById('view1');
        }

        function AssistView() {
            return document.getElementById('view2');
        }

        function thumb1() {
            return document.getElementById('thumb1');
        }

        function addEvent(obj, name, func) {
            if (obj.attachEvent) {
                obj.attachEvent(\"on\" + name, func);
            } else {
                obj.addEventListener(name, func, false);
            }
        }
        function OpenVideo() {
            OpenVideoMain();
            OpenVideoAssist();
        }
        function CloseVideo() {
            CloseVideoMain();
            CloseVideoAssist();
        }
        function CloseVideoMain() {
            if (VideoMain) {
                plugin().Video_Release(VideoMain);
                VideoMain = null;

                MainView().View_SetText(\"\", 0);
            }
        }
        function CloseVideoAssist() {
            if (VideoAssist) {
                plugin().Video_Release(VideoAssist);
                VideoAssist = null;

                AssistView().View_SetText(\"\", 0);
            }
        }

        function OpenVideoMain() {
            CloseVideoMain();

            if (!DeviceMain)
                return;

            var sSubType = document.getElementById('subType1');
            var sResolution = document.getElementById('selRes1');

            var SelectType = 0;
            var txt;
            if (sSubType.options.selectedIndex != -1) {
                txt = sSubType.options[sSubType.options.selectedIndex].text;
                if (txt == \"YUY2\") {
                    SelectType = 1;
                }
                else if (txt == \"MJPG\") {
                    SelectType = 2;
                }
                else if (txt == \"UYVY\") {
                    SelectType = 4;
                }
            }

            var nResolution = sResolution.selectedIndex;

            VideoMain = plugin().Device_CreateVideo(DeviceMain, nResolution, SelectType);
            if (VideoMain) {
                MainView().View_SelectVideo(VideoMain);
                MainView().View_SetText(\"打开视频中，请等待...\", 0);

            }
        }

        function OpenVideoAssist() {
            CloseVideoAssist();

            if (!DeviceAssist)
                return;

            var sSubType = document.getElementById('subType2');
            var sResolution = document.getElementById('selRes2');

            var SelectType = 0;
            var txt;
            if (sSubType.options.selectedIndex != -1) {
                txt = sSubType.options[sSubType.options.selectedIndex].text;
                if (txt == \"YUY2\") {
                    SelectType = 1;
                }
                else if (txt == \"MJPG\") {
                    SelectType = 2;
                }
                else if (txt == \"UYVY\") {
                    SelectType = 4;
                }
            }

            var nResolution = sResolution.selectedIndex;

            VideoAssist = plugin().Device_CreateVideo(DeviceAssist, nResolution, SelectType);
            if (VideoAssist) {
                AssistView().View_SelectVideo(VideoAssist);
                AssistView().View_SetText(\"打开视频中，请等待...\", 0);
            }
        }

        function changesubTypeMain() {
            if (DeviceMain) {
                var sSubType = document.getElementById('subType1');
                var sResolution = document.getElementById('selRes1');
                var SelectType = 0;
                var txt;
                if (sSubType.options.selectedIndex != -1) {
                    var txt = sSubType.options[sSubType.options.selectedIndex].text;
                    if (txt == \"YUY2\") {
                        SelectType = 1;
                    }
                    else if (txt == \"MJPG\") {
                        SelectType = 2;
                    }
                    else if (txt == \"UYVY\") {
                        SelectType = 4;
                    }
                }

                var nResolution = plugin().Device_GetResolutionCountEx(DeviceMain, SelectType);
                sResolution.options.length = 0;
                for (var i = 0; i < nResolution; i++) {
                    var width = plugin().Device_GetResolutionWidthEx(DeviceMain, SelectType, i);
                    var heigth = plugin().Device_GetResolutionHeightEx(DeviceMain, SelectType, i);
                    sResolution.add(new Option(width.toString() + \"*\" + heigth.toString()));
                }
                sResolution.selectedIndex = 0;
            }
        }

        function changesubTypeAssist() {
            if (DeviceAssist) {
                var sSubType = document.getElementById('subType2');
                var sResolution = document.getElementById('selRes2');

                var SelectType = 0;
                var txt;
                if (sSubType.options.selectedIndex != -1) {
                    var txt = sSubType.options[sSubType.options.selectedIndex].text;
                    if (txt == \"YUY2\") {
                        SelectType = 1;
                    }
                    else if (txt == \"MJPG\") {
                        SelectType = 2;
                    }
                    else if (txt == \"UYVY\") {
                        SelectType = 4;
                    }
                }

                var nResolution = plugin().Device_GetResolutionCountEx(DeviceAssist, SelectType);
                sResolution.options.length = 0;
                for (var i = 0; i < nResolution; i++) {
                    var width = plugin().Device_GetResolutionWidthEx(DeviceAssist, SelectType, i);
                    var heigth = plugin().Device_GetResolutionHeightEx(DeviceAssist, SelectType, i);
                    sResolution.add(new Option(width.toString() + \"*\" + heigth.toString()));
                }
                sResolution.selectedIndex = 0;
            }
        }

        function Load() {
            //设备接入和丢失
            //type设备类型， 1 表示视频设备， 2 表示音频设备
            //idx设备索引
            //dbt 1 表示设备到达， 2 表示设备丢失
            addEvent(plugin(), 'DevChange', function (type, idx, dbt) {
                if (1 == type)//视频设备
                {
                    if (1 == dbt)//设备到达
                    {
                        var deviceType = plugin().Global_GetEloamType(1, idx);
                        if (1 == deviceType)//主摄像头
                        {
                            if (null == DeviceMain) {
                                DeviceMain = plugin().Global_CreateDevice(1, idx);
                                if (DeviceMain) {
                                    document.getElementById('lab1').innerHTML = plugin().Device_GetFriendlyName(DeviceMain);

                                    var sSubType = document.getElementById('subType1');
                                    sSubType.options.length = 0;
                                    var subType = plugin().Device_GetSubtype(DeviceMain);
                                    if (subType & 1) {
                                        sSubType.add(new Option(\"YUY2\"));
                                    }
                                    if (subType & 2) {
                                        sSubType.add(new Option(\"MJPG\"));
                                    }
                                    if (subType & 4) {
                                        sSubType.add(new Option(\"UYVY\"));
                                    }
                                    sSubType.selectedIndex = 0;
                                    changesubTypeMain();

                                    OpenVideoMain();
                                }
                            }
                        }
                        else if (2 == deviceType || 3 == deviceType)//辅摄像头
                        {
                            if (null == DeviceAssist) {
                                DeviceAssist = plugin().Global_CreateDevice(1, idx);
                                if (DeviceAssist) {
                                    document.getElementById('lab2').innerHTML = plugin().Device_GetFriendlyName(DeviceAssist);

                                    var sSubType = document.getElementById('subType2');
                                    sSubType.options.length = 0;
                                    var subType = plugin().Device_GetSubtype(DeviceAssist);
                                    if (subType & 1) {
                                        sSubType.add(new Option(\"YUY2\"));
                                    }
                                    if (subType & 2) {
                                        sSubType.add(new Option(\"MJPG\"));
                                    }
                                    if (subType & 4) {
                                        sSubType.add(new Option(\"UYVY\"));
                                    }
                                    if ((0 != (subType & 2)) && (0 != (subType & 1)))//辅摄像头优先采用mjpg模式打开
                                    {
                                        sSubType.selectedIndex = 1;
                                    }
                                    else {
                                        sSubType.selectedIndex = 0;
                                    }
                                    changesubTypeAssist();

                                    OpenVideoAssist();
                                }
                            }
                        }
                    }
                    else if (2 == dbt)//设备丢失
                    {
                        if (DeviceMain) {
                            if (plugin().Device_GetIndex(DeviceMain) == idx) {
                                CloseVideoMain();
                                plugin().Device_Release(DeviceMain);
                                DeviceMain = null;

                                document.getElementById('lab1').innerHTML = \"\";
                                document.getElementById('subType1').options.length = 0;
                                document.getElementById('selRes1').options.length = 0;
                            }
                        }

                        if (DeviceAssist) {
                            if (plugin().Device_GetIndex(DeviceAssist) == idx) {
                                CloseVideoAssist();
                                plugin().Device_Release(DeviceAssist);
                                DeviceAssist = null;

                                document.getElementById('lab2').innerHTML = \"\";
                                document.getElementById('subType2').options.length = 0;
                                document.getElementById('selRes2').options.length = 0;
                            }
                        }
                    }
                }
            });

            addEvent(plugin(), 'Ocr', function (flag, ret) {
                if (1 == flag && 0 == ret) {
                    var ret = plugin().Global_GetOcrPlainText(0);
                    alert(ret);
                }
            });

            addEvent(plugin(), 'IdCard', function (ret) {
                if (1 == ret) {
                    var str = \"\";

                    for (var i = 0; i < 16; i++) {
                        str += plugin().Global_GetIdCardData(i + 1);
                        str += \";\";
                    }

                    document.getElementById(\"idcard\").value = str;

                    var image = plugin().Global_GetIdCardImage(1);//1表示头像， 2表示正面， 3表示反面 ...
                    plugin().Image_Save(image, \"C:\\\\idcard.jpg\", 0);
                    plugin().Image_Release(image);

                    document.getElementById(\"idcardimg\").src = \"C:\\\\idcard.jpg\";
                }
            });

            addEvent(plugin(), 'Biokey', function (ret) {
                if (4 == ret) {
                    // 采集模板成功
                    var mem = plugin().Global_GetBiokeyTemplateData();
                    if (mem) {
                        if (plugin().Memory_Save(mem, \"C:\\\\1.tmp\")) {
                            document.getElementById(\"biokey\").value = \"获取模板成功，存储路径为C:\\\\1.tmp\";
                        }
                        plugin().Memory_Release(mem);
                    }

                    var img = plugin().Global_GetBiokeyImage();
                    plugin().Image_Save(img, \"C:\\\\BiokeyImg1.jpg\", 0);
                    plugin().Image_Release(img);

                    document.getElementById(\"BiokeyImg1\").src = \"C:\\\\BiokeyImg1.jpg\";
                    alert(\"获取指纹模板成功\");
                }
                else if (8 == ret) {
                    var mem = plugin().Global_GetBiokeyFeatureData();
                    if (mem) {
                        if (plugin().Memory_Save(mem, \"C:\\\\2.tmp\")) {
                            document.getElementById(\"biokey\").value = \"获取特征成功，存储路径为C:\\\\2.tmp\";
                        }
                        plugin().Memory_Release(mem);
                    }

                    var img = plugin().Global_GetBiokeyImage();
                    plugin().Image_Save(img, \"C:\\\\BiokeyImg2.jpg\", 0);
                    plugin().Image_Release(img);

                    document.getElementById(\"BiokeyImg2\").src = \"C:\\\\BiokeyImg2.jpg\";
                    alert(\"获取指纹特征成功\");
                }
                else if (9 == ret) {
                    document.getElementById(\"biokey\").value += \"\\r\\n刷的不错！\";
                }
                else if (10 == ret) {
                    document.getElementById(\"biokey\").value += \"\\r\\n图像质量太差！\";
                }
                else if (11 == ret) {
                    document.getElementById(\"biokey\").value += \"\\r\\n图像点数太少！\";
                }
                else if (12 == ret) {
                    document.getElementById(\"biokey\").value += \"\\r\\n太快！\";
                }
                else if (13 == ret) {
                    document.getElementById(\"biokey\").value += \"\\r\\n太慢！\";
                }
                else if (14 == ret) {
                    document.getElementById(\"biokey\").value += \"\\r\\n其它质量问题！\";
                }
            });

            addEvent(plugin(), 'Reader', function (type, subtype) {
                var str = \"\";
                if (4 == type) {
                    str += \"[CPU卡] Id:\";
                    str += plugin().Global_ReaderGetCpuId();
                    str += \"; CardNumber:\";
                    str += plugin().Global_ReaderGetCpuCreditCardNumber();
                }
                else if (2 == type) {
                    str += \"[M1卡] Id:\";
                    str += plugin().Global_ReaderGetM1Id();
                }
                else if (3 == type) {
                    str += \"[Memory卡] Id:\";
                    str += plugin().Global_ReaderGetMemoryId();
                }
                else if (5 == type) {
                    str += \"[社保卡] :\";
                    str += plugin().Global_ReaderGetSocialData(1);
                    str += plugin().Global_ReaderGetSocialData(2);
                }
                document.getElementById(\"reader\").value = str;
            });

            addEvent(plugin(), 'Mag', function (ret) {
                var str = \"\";

                str += \"[磁卡卡号] \";
                str += plugin().Global_MagneticCardGetNumber();

                str += \"[磁道数据]\";

                str += \"磁道1:\";
                str += plugin().Global_MagneticCardGetData(0);
                str += \"磁道2:\";
                str += plugin().Global_MagneticCardGetData(1);
                str += \"磁道3:\";
                str += plugin().Global_MagneticCardGetData(2);

                document.getElementById(\"mag\").value = str;
            });

            addEvent(plugin(), 'MoveDetec', function (video, id) {
                // 自动拍照事件
            });

            addEvent(plugin(), 'Deskew', function (video, view, list) {
                // 纠偏回调事件
                var count = plugin().RegionList_GetCount(list);
                for (var i = 0; i < count; ++i) {
                    var region = plugin().RegionList_GetRegion(list, i);

                    var x1 = plugin().Region_GetX1(region);
                    var y1 = plugin().Region_GetY1(region);

                    var width = plugin().Region_GetWidth(region);
                    var height = plugin().Region_GetHeight(region);

                    plugin().Region_Release(region);
                }

                plugin().RegionList_Release(list);
            });

            var title = document.title;
            document.title = title + plugin().version;

            MainView().Global_SetWindowName(\"view\");
            AssistView().Global_SetWindowName(\"view\");
            thumb1().Global_SetWindowName(\"thumb\");

            var ret;
            ret = plugin().Global_InitDevs();
            if (ret) {
                //进行人脸识别初始化时，视频应处于关闭状态
                plugin().InitFaceDetect();
            }

            if (!plugin().Global_VideoCapInit()) {
                alert(\"初始化失败！\");
            }
        }

        function Unload() {
            if (VideoMain) {
                MainView().View_SetText(\"\", 0);
                plugin().Video_Release(VideoMain);
                VideoMain = null;
            }
            if (DeviceMain) {
                plugin().Device_Release(DeviceMain);
                DeviceMain = null;
            }
            if (VideoAssist) {
                AssistView().View_SetText(\"\", 0);
                plugin().Video_Release(VideoAssist);
                VideoAssist = null;
            }
            if (DeviceAssist) {
                plugin().Device_Release(DeviceAssist);
                DeviceAssist = null;
            }

            plugin().Global_DeinitDevs();

            //进行人脸识别反初始化时，视频应处于关闭状态
            plugin().DeinitFaceDetect();
        }
        function EnableDate(obj) {
            if (obj.checked) {
                var offsetx = 1000;
                var offsety = 60;

                var font;
                font = plugin().Global_CreateTypeface(50, 50, 0, 0, 2, 0, 0, 0, \"宋体\");

                if (VideoMain) {
                    var width = plugin().Video_GetWidth(VideoMain);
                    var heigth = plugin().Video_GetHeight(VideoMain);

                    plugin().Video_EnableDate(VideoMain, font, width - offsetx, heigth - offsety, 0xffffff, 0);
                }
                if (VideoAssist) {
                    var width = plugin().Video_GetWidth(VideoAssist);
                    var heigth = plugin().Video_GetHeight(VideoAssist);

                    plugin().Video_EnableDate(VideoAssist, font, width - offsetx, heigth - offsety, 0xffffff, 0);
                }
                plugin().Font_Release(font);
            }
            else {
                if (VideoMain) {
                    plugin().Video_DisableDate(VideoMain);
                }
                if (VideoAssist) {
                    plugin().Video_DisableDate(VideoAssist);
                }
            }
        }

        function AddText(obj) {
            if (obj.checked) {
                var font;
                font = plugin().Global_CreateTypeface(200, 200, 0, 0, 2, 0, 0, 0, \"宋体\");

                if (VideoMain) {
                    plugin().Video_EnableAddText(VideoMain, font, 0, 0, \"文字水印\", 65280, 150);
                }
                if (VideoAssist) {
                    plugin().Video_EnableAddText(VideoAssist, font, 0, 0, \"文字水印\", 65280, 150);
                }
                plugin().Font_Release(font);
            }
            else {
                if (VideoMain) {
                    plugin().Video_DisableAddText(VideoMain);
                }
                if (VideoAssist) {
                    plugin().Video_DisableAddText(VideoAssist);
                }
            }
        }

        function ShowProperty() {
            if (DeviceMain) {
                plugin().Device_ShowProperty(DeviceMain, MainView().View_GetObject());
            }
        }

        function Deskew(obj) {
            if (obj.checked) {
                if (VideoMain) {
                    plugin().Video_EnableDeskewEx(VideoMain, 1);
                }
                if (VideoAssist) {
                    plugin().Video_EnableDeskewEx(VideoAssist, 1);
                }
            }
            else {
                if (VideoMain) {
                    plugin().Video_DisableDeskew(VideoMain);
                }
                if (VideoAssist) {
                    plugin().Video_DisableDeskew(VideoAssist);
                }
            }
        }

        function SetState(obj) {
            if (obj.checked) {
                MainView().View_SetState(2);
                document.getElementById('scansize').disabled = \"disabled\";
            }
            else {
                MainView().View_SetState(1);
                document.getElementById('scansize').disabled = \"\";
            }
        }


        function changescansize() {
            var rect;
            var width = plugin().Video_GetWidth(VideoMain);
            var heigth = plugin().Video_GetHeight(VideoMain);

            var s = document.getElementById('scansize');
            var size = s.options.selectedIndex;

            if (size == 0) {
                MainView().View_SetState(1);//取消框选 状态
            }
            else if (size == 1) {
                rect = plugin().Global_CreateRect(width / 2 - width / 4, heigth / 2 - heigth / 4, width / 2, heigth / 2);
                MainView().View_SetState(2);//小尺寸
                MainView().View_SetSelectedRect(rect);

            }
            else if (size == 2) {
                rect = plugin().Global_CreateRect(width / 2 - width / 6, heigth / 2 - heigth / 6, width / 3, heigth / 3);
                MainView().View_SetState(2);//中尺寸
                MainView().View_SetSelectedRect(rect);
            }

            if (size != 0) {
                document.getElementById('SetState').checked = false;
                document.getElementById('SetState').disabled = \"disabled\";
            }
            else {
                document.getElementById('SetState').disabled = \"\"
            }
        }

        function Left() {
            if (VideoMain) {
                plugin().Video_RotateLeft(VideoMain);
            }
            if (VideoAssist) {
                plugin().Video_RotateLeft(VideoAssist);
            }

        }

        function Right() {
            if (VideoMain) {
                plugin().Video_RotateRight(VideoMain);
            }
            if (VideoAssist) {
                plugin().Video_RotateRight(VideoAssist);
            }

        }

        //拍照
        function Scan() {
            if (VideoMain) {
                var imgList = plugin().Video_CreateImageList(VideoMain, 0, 0);
                if (imgList) {
                    var len = plugin().ImageList_GetCount(imgList);
                    for (var i = 0; i < len; i++) {
                        var img = plugin().ImageList_GetImage(imgList, i);

                        var date = new Date();
                        var yy = date.getFullYear().toString();
                        var mm = (date.getMonth() + 1).toString();
                        var dd = date.getDate().toString();
                        var hh = date.getHours().toString();
                        var nn = date.getMinutes().toString();
                        var ss = date.getSeconds().toString();
                        var mi = date.getMilliseconds().toString();
                        var Name = \"D:\\\\huo15\\\\\" + yy + mm + dd + hh + nn + ss + mi + \".jpg\";

                        var b = plugin().Image_Save(img, Name, 0);
                        if (b) {
                            MainView().View_PlayCaptureEffect();
                            thumb1().Thumbnail_Add(Name);

                            PicPath = Name;
                            imgArr.push(PicPath);
                            imgNameArr.push(yy + mm + dd + hh + nn + ss + mi + \".jpg\");

                        }

                        plugin().Image_Release(img);
                    }

                    plugin().ImageList_Release(imgList);
                }
            }

            if (VideoAssist) {
                var imgList2 = plugin().Video_CreateImageList(VideoAssist, 0, 0);
                if (imgList2) {
                    var len = plugin().ImageList_GetCount(imgList2);
                    for (var i = 0; i < len; i++) {
                        var img = plugin().ImageList_GetImage(imgList2, i);

                        var date = new Date();
                        var yy = date.getFullYear().toString();
                        var mm = (date.getMonth() + 1).toString();
                        var dd = date.getDate().toString();
                        var hh = date.getHours().toString();
                        var nn = date.getMinutes().toString();
                        var ss = date.getSeconds().toString();
                        var mi = date.getMilliseconds().toString();
                        var Name = \"C:\\\\\" + yy + mm + dd + hh + nn + ss + mi + \".jpg\";

                        var b = plugin().Image_Save(img, Name, 0);
                        if (b) {
                            AssistView().View_PlayCaptureEffect();
                            thumb1().Thumbnail_Add(Name);
                        }

                        plugin().Image_Release(img);
                    }

                    plugin().ImageList_Release(imgList2);
                }
            }

            console.log(imgArr)
        }


        function OCR() {
            if (PicPath) {
                plugin().Global_InitOcr();

                var img;
                img = plugin().Global_CreateImageFromFile(PicPath, 0);
                plugin().Global_DiscernOcr(1, img);
                var b = plugin().Global_WaitOcrDiscern();
                if (b) {
                    alert(plugin().Global_GetOcrPlainText(0));
                    plugin().Global_SaveOcr(\"C:\\\\1.doc\", 0);
                }

                plugin().Global_DeinitOcr();

                plugin().Image_Release(img);
            }
            else {
                alert(\"请先拍照！\");
            }
        }

        function UploadToHttpServer() {

            var http = plugin().Global_CreateHttp(\"http://192.168.1.193:8080/upload.asp\");//asp服务器demo地址
            //var http = plugin().Global_CreateHttp(\"http://192.168.1.205:8080/FileStreamDemo/servlet/FileSteamUpload?\");//java服务器demo地址
            if (http) {
                var b = plugin().Http_UploadImageFile(http, \"C:\\\\1.jpg\", \"2.jpg\");
                if (b) {
                    alert(\"上传成功\");
                }
                else {
                    alert(\"上传失败\");
                }

                plugin().Http_Release(http);
            }
            else {
                alert(\"url 错误\");
            }
        }

        function ScanToHttpServer() {
            if (VideoMain) {
                var img = plugin().Video_CreateImage(VideoMain, 0, MainView().View_GetObject());
                console.log(img);
                return;
                if (img) {
                    //var http = plugin().Global_CreateHttp(\"http://192.168.1.193:8080/upload.asp\");//asp服务器demo地址
                    var http = plugin().Global_CreateHttp(\"http://127.0.0.1:8000/modules/addData?moduleId=1&_method=POST\");//java服务器demo地址
                    console.log(http);
                    if (http) {
                        var b = plugin().Http_UploadImage(http, img, 2, 0, \"2.jpg\");
                        if (b) {
                            alert(\"上传成功\");
                        }
                        else {
                            alert(\"上传失败\");
                        }

                        plugin().Http_Release(http);
                    }

                    plugin().Image_Release(img);
                }
            }
        }

        /******************录像********************/
        function StartMainRecord() {
            if (VideoMain) {
                var videoOutputWidth = plugin().Video_GetWidth(VideoMain);
                var videoOutputHeight = plugin().Video_GetHeight(VideoMain);
                //录像时，打开视频的分辨率越低，帧率越高,一般不超过200w像素
                //所设置的帧率应尽可能高于实际帧率，避免丢帧
                var FrameRate = 15;//此参数可根据录像分辨率与机型实际帧率调节
                var CheckWidth = 1600;
                var CheckHeight = 1200;
                //主流视频分辨率少有大于200万的，因此为节约cpu资源，当分辨率大于200w，应采用200w的配置录制
                if (videoOutputWidth * videoOutputHeight > (CheckWidth * CheckHeight)) {
                    if (confirm(\"当前分辨率过高，切换到200万像素时，录制效果最佳！\\r\\n点击'确定'，手动切换到1600X1200或相近分辨率后再次尝试\\r\\n点击'取消'，本次录制继续\")) {
                        return;
                    }
                    videoOutputWidth = CheckWidth;
                    videoOutputHeight = CheckHeight;
                }

                if (videoCapMain) {
                    plugin().VideoCap_Stop(videoCapMain);
                    plugin().VideoCap_Destroy(videoCapMain);
                }

                videoCapMain = plugin().Global_CreatVideoCap();
                if (null == videoCapMain) {
                    alert(\"创建录像对象失败\");
                    return;
                }

                var selMicIdx = -1;
                if (plugin().Global_VideoCapGetAudioDevNum() > 0)//有麦克风
                {
                    selMicIdx = 0;
                }

                if (!plugin().VideoCap_PreCap(videoCapMain, \"C:\\\\eloamPlugin_main.mp4\", selMicIdx, FrameRate, 1, videoOutputWidth, videoOutputHeight)) {
                    alert(\"录像设置失败\");
                    return;
                }

                if (!plugin().VideoCap_AddVideoSrc(videoCapMain, VideoMain)) {
                    alert(\"添加视频源失败\");
                    return;
                }

                if (!plugin().VideoCap_Start(videoCapMain)) {
                    alert(\"启动录像失败\");
                    return;
                }
                alert(\"已开始录像\");
            }
        }
        function StopMainRecord() {
            if (plugin().VideoCap_Stop(videoCapMain)) {
                plugin().VideoCap_Destroy(videoCapMain);
                videoCapMain = null;
                alert(\"录像结束，文件保存于C:\\\\eloamPlugin_main.mp4\\r\\n若录像失败请选择较小的分辨率尝试\");
            }
            else {
                alert(\"停止录像失败\");
            }
        }
        function StartAssistRecord() {
            if (VideoAssist) {
                var videoOutputWidth = plugin().Video_GetWidth(VideoAssist);
                var videoOutputHeight = plugin().Video_GetHeight(VideoAssist);
                //录像时，打开视频的分辨率越低，帧率越高,一般不超过200w像素
                //所设置的帧率应尽可能高于实际帧率，避免丢帧
                var FrameRate = 15;//此参数可根据录像分辨率与机型实际帧率调节
                var CheckWidth = 1600;
                var CheckHeight = 1200;
                //主流视频分辨率少有大于200万的，因此为节约cpu资源，当分辨率大于200w，应采用200w的配置录制
                if (videoOutputWidth * videoOutputHeight > (CheckWidth * CheckHeight)) {
                    if (confirm(\"当前分辨率过高，切换到200万像素时，录制效果最佳！\\r\\n点击'确定'，手动切换到1600X1200或相近分辨率后再次尝试\\r\\n点击'取消'，本次录制继续\")) {
                        return;
                    }
                    videoOutputWidth = CheckWidth;
                    videoOutputHeight = CheckHeight;
                }

                if (videoCapAssist) {
                    plugin().VideoCap_Stop(videoCapAssist);
                    plugin().VideoCap_Destroy(videoCapAssist);
                }

                videoCapAssist = plugin().Global_CreatVideoCap();
                if (null == videoCapAssist) {
                    alert(\"创建录像对象失败\");
                    return;
                }

                var selMicIdx = -1;
                if (plugin().Global_VideoCapGetAudioDevNum() > 0)//有麦克风
                {
                    selMicIdx = 0;
                }

                if (!plugin().VideoCap_PreCap(videoCapAssist, \"C:\\\\eloamPlugin_assist.mp4\", selMicIdx, FrameRate, 1, videoOutputWidth, videoOutputHeight)) {
                    alert(\"启动录像失败\");
                    return;
                }

                if (!plugin().VideoCap_AddVideoSrc(videoCapAssist, VideoAssist)) {
                    alert(\"添加视频源失败\");
                    return;
                }

                if (!plugin().VideoCap_Start(videoCapAssist)) {
                    alert(\"启动录像失败\");
                    return;
                }
                alert(\"已开始录像\");
            }
        }
        function StopAssistRecord() {
            if (plugin().VideoCap_Stop(videoCapAssist)) {
                plugin().VideoCap_Destroy(videoCapAssist);
                videoCapAssist = null;
                alert(\"录像结束，文件保存于C:\\\\eloamPlugin_assist.mp4\\r\\n若录像失败请选择较小的分辨率尝试\");
            }
            else {
                alert(\"停止录像失败\");
            }
        }
        /******************录像********************/
        function GetImgMD5() {
            if (PicPath) {
                var img;
                img = plugin().Global_CreateImageFromFile(PicPath, 0);
                var md5 = plugin().Image_GetMD5(img, 2, 0);
                alert(\"图像的MD5值为：\" + md5);

                plugin().Image_Release(img);
            }
            else {
                alert(\"请先拍照！\");
            }
        }

        function Barcode() {
            if (DeviceMain) {
                if (VideoMain) {
                    var imgList = plugin().Video_CreateImageList(VideoMain, 0, 0);
                    if (imgList) {
                        plugin().Global_InitBarcode();

                        var len = plugin().ImageList_GetCount(imgList);
                        for (var i = 0; i < len; i++) {
                            var image = plugin().ImageList_GetImage(imgList, i);

                            if (image) {
                                var b = plugin().Global_DiscernBarcode(image);
                                if (b) {
                                    if (plugin().Global_GetBarcodeCount() <= 0) {
                                        alert(\"识别失败！\");
                                    }
                                    else {
                                        for (var i = 0; i < plugin().Global_GetBarcodeCount(); i++)
                                            alert(plugin().Global_GetBarcodeData(i));
                                    }
                                }
                            }
                        }
                        plugin().ImageList_Release(imgList);
                        plugin().Global_DeinitBarcode();
                    }
                }
            }
        }


        /******************指纹识别********************/
        function InitBiokey() {
            if (!plugin().Global_InitBiokey()) {
                alert(\"初始化指纹识别失败！\");
            }
        }
        function DInitBiokey() {
            plugin().Global_DeinitBiokey();
        }
        function GetTemplate() {
            var b = plugin().Global_GetBiokeyTemplate();
            if (b) {
                document.getElementById(\"BiokeyImg1\").src = \"\";
                document.getElementById(\"biokey\").value = \"请按压手指三次完成模板采集！\";
            }
        }

        function StopGetTemplate() {
            var b = plugin().Global_StopGetBiokeyTemplate();
            if (b) {
                document.getElementById(\"biokey\").value = \"已停止获取模板\";
            }
        }

        function GetFeature() {
            var b = plugin().Global_GetBiokeyFeature();
            if (b) {
                document.getElementById(\"BiokeyImg2\").src = \"\";
                document.getElementById(\"biokey\").value = \"请按压手指\";
            }
        }

        function StopGetFeature() {
            var b = plugin().Global_StopGetBiokeyFeature();
            if (b) {
                document.getElementById(\"biokey\").value = \"已停止获取特征\";
            }
        }

        function BiokeyVerify() {
            var mem1 = plugin().Global_CreateMemoryFromFile(\"C:\\\\1.tmp\");
            var mem2 = plugin().Global_CreateMemoryFromFile(\"C:\\\\2.tmp\");
            if (mem1 && mem2) {
                // 比较
                var ret = plugin().Global_BiokeyVerify(mem1, mem2);
                if (ret > 50) {
                    document.getElementById(\"biokey\").value = \"匹配成功\" + ret.toString();
                }
                else {
                    document.getElementById(\"biokey\").value = \"匹配失败\" + ret.toString();
                }
                plugin().Memory_Release(mem1);
                plugin().Memory_Release(mem2);
            }
            else {
                alert(\"请采集完指纹模板和指纹特征后再比对！\");
            }
        }
        /******************二代证阅读器********************/
        function StartIDCard() {
            if (!plugin().Global_InitIdCard()) {
                alert(\"初始化二代证阅读器失败！\");
                return;
            }
            if (plugin().Global_DiscernIdCard()) {
                alert(\"请刷卡！\");
            }
            else {
                alert(\"启动二代证阅读失败！\");
            }
        }
        function StopIDCard() {
            plugin().Global_StopIdCardDiscern();
            plugin().Global_DeinitIdCard();
        }
        /******************IC卡阅读器********************/
        function StartICCard() {
            if (!plugin().Global_InitReader()) {
                alert(\"初始化IC卡阅读器失败！\");
                return;
            }
            if (plugin().Global_ReaderStart()) {
                alert(\"请刷卡！\");
            }
            else {
                alert(\"启动IC卡阅读失败！\");
            }
        }
        function StopICCard() {
            plugin().Global_ReaderStop();
            plugin().Global_DeinitReader();
        }
        /******************磁条卡阅读器********************/
        function StartMagCard() {
            if (!plugin().Global_InitMagneticCard()) {
                alert(\"初始化磁条卡阅读器失败！\");
                return;
            }
            if (plugin().Global_MagneticCardReaderStart()) {
                alert(\"请刷卡！\");
            }
            else {
                alert(\"启动磁条阅读失败！\");
            }
        }
        function StopMagCard() {
            plugin().Global_MagneticCardReaderStop();
            plugin().Global_DeinitMagneticCard();
        }

        /******************人脸识别********************/
        function FaceDetect() {
            var image1 = plugin().Global_CreateImageFromFile(\"C:\\\\1.jpg\", 0);
            var image2 = plugin().Global_CreateImageFromFile(\"C:\\\\2.jpg\", 0);
            if (image1 && image2) {
                var ret = plugin().DiscernFaceDetect(image1, image2);
                if (ret != -1) {
                    ret += 20;
                    if (ret > 100) {
                        ret = 100;
                    }
                    var msg = \"识别已完成，匹配度：\" + ret + \"\\r\\n（匹配阈值为70，高于阈值则为同一人）\";
                    alert(msg);
                }
                else {
                    alert(\"识别失败！\");
                }
            }
            else {
                alert(\"找不到图像！\");
                return;
            }

            plugin().Image_Release(image1);
            plugin().Image_Release(image2);
        }

        function VerifyFaceDetect() {
            if (VideoAssist) {
                var image = plugin().Video_CreateImage(VideoAssist, 0, AssistView().View_GetObject());
                var idcardImage = plugin().Global_CreateImageFromFile(\"C:\\\\idcard.jpg\", 0);

                if (image && idcardImage) {
                    var ret = plugin().DiscernFaceDetect(image, idcardImage);
                    if (ret != -1) {
                        ret += 20;
                        if (ret > 100) {
                            ret = 100;
                        }
                        var msg = \"识别已完成，匹配度：\" + ret + \"\\r\\n（匹配阈值为70，高于阈值则为同一人）\";
                        alert(msg);
                    }
                    else {
                        alert(\"识别失败！\");
                    }
                }
                else {
                    alert(\"获取图像失败，未识别到二代证！\");
                    return;
                }

                plugin().Image_Release(image);
                plugin().Image_Release(idcardImage);
            }
        }
        function closeWinAndUpload() {
            \$('#deviceUploadDiv').css({
                'margin-top': '-1000px'
            });


            //处理图片

            var http = plugin().Global_CreateHttp(\"http://gp.wxwall.cn/modules/addData?moduleId=7&upload=1\");//asp服务器demo地址
            //var http = plugin().Global_CreateHttp(\"http://192.168.1.205:8080/FileStreamDemo/servlet/FileSteamUpload?\");//java服务器demo地址
            if (http)
            {
                for (var i=0;i<imgArr.length;i++) {
                    var b = plugin().Http_UploadImageFile(http, imgArr[i], imgNameArr[i]);
                    if (b)
                    {
                        alert(\"上传成功\");
                    }
                    else
                    {
                        alert(\"上传失败\");
                    }
                    var res = plugin().Http_Release(http);
                    console.log(res);
                }

            }
            else
            {
                alert(\"url 错误\");
            }

            //处理图片 end




            Unload();





        }
    </script>
    <script>
        \$(function () {


            //数据详情页面
            var is_detail = ";
        // line 1422
        echo twig_escape_filter($this->env, (isset($context["is_detail"]) ? $context["is_detail"] : $this->getContext($context, "is_detail")), "html", null, true);
        echo " ? true : false;
            if (is_detail) {
                \$('input[flag=\"is_detail\"]').remove();
                \$('.is_detail').remove();


            }

            \$('#deviceUploadDiv').css({
                'margin-top': '-1000px'
            });
            \$('#huo15close').click(function () {
                \$('#deviceUploadDiv').css({
                    'margin-top': '-1000px'
                });

                Unload();
            });
            \$('#btn-device-upload').click(function () {
                \$('#deviceUploadDiv').css({
                    'margin-top': '20px'
                });
                Load();
            });
            Load();


        });
        \$(window).unload(function () {
            Unload();
        });

    </script>
    <style>
        .preview img {
            width:80px
        }
    </style>
";
        
        $__internal_4cfd2ddaccf31ddb5f8518137c85ad8e53d23e308555938974fecfeb6249c507->leave($__internal_4cfd2ddaccf31ddb5f8518137c85ad8e53d23e308555938974fecfeb6249c507_prof);

    }

    public function getTemplateName()
    {
        return "modules/addData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1676 => 1422,  530 => 278,  524 => 277,  514 => 273,  508 => 272,  497 => 264,  493 => 263,  487 => 260,  483 => 259,  478 => 257,  472 => 254,  466 => 251,  460 => 248,  454 => 245,  448 => 242,  442 => 239,  436 => 236,  429 => 232,  423 => 229,  417 => 226,  412 => 224,  406 => 221,  402 => 220,  398 => 219,  393 => 218,  387 => 217,  379 => 210,  373 => 209,  361 => 204,  355 => 203,  310 => 164,  261 => 114,  257 => 113,  253 => 112,  250 => 111,  247 => 109,  245 => 108,  230 => 96,  222 => 90,  216 => 89,  204 => 82,  198 => 81,  159 => 48,  146 => 37,  140 => 36,  130 => 34,  124 => 33,  114 => 31,  108 => 30,  98 => 26,  92 => 25,  81 => 20,  75 => 17,  67 => 12,  62 => 10,  57 => 8,  51 => 6,  45 => 5,  11 => 1,);
    }
}
/* {% extends 'user_base.html.twig' %}*/
/* */
/* */
/* */
/* {% block h_pageLevelPlugins %}*/
/*     <link href="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet"*/
/*           type="text/css"/>*/
/*     <link href="{{ asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css') }}"*/
/*           rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet"*/
/*           type="text/css"/>*/
/*     <link href="{{ asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}" rel="stylesheet"*/
/*           type="text/css"/>*/
/* */
/*     <!-- CSS adjustments for browsers with JavaScript disabled -->*/
/*     <noscript>*/
/*         <link rel="stylesheet" href="{{ asset('assets/pages/css/jquery.fileupload-noscript.css') }}">*/
/*     </noscript>*/
/*     <noscript>*/
/*         <link rel="stylesheet" href="{{ asset('assets/pages/css/jquery.fileupload-ui-noscript.css') }}">*/
/*     </noscript>*/
/* */
/* {% endblock %}*/
/* */
/* {% block h_themeLayoutStyles %}*/
/*     {{ parent() }}*/
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
/*                 <span>{{ module.name }} - 添加新数据</span>*/
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
/*             请谨慎删除数据. 一旦删除数据不可恢复. 遇到问题请联系管理员恢复数据.*/
/*         </p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block pageContent %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                     <div class="caption">*/
/*                         <i class="icon-settings font-dark"></i>*/
/*                         <span class="caption-subject font-dark sbold uppercase"> {{ module.name }} - 添加新数据 -</span>*/
/*                     </div>*/
/*                     <div class="actions">*/
/*                         <div class="btn-group btn-group-devided" data-toggle="buttons">*/
/*                             <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">*/
/*                                 <input type="radio" name="options" class="toggle" id="option1">返回列表</label>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/* */
/*                     {% form_theme form 'form_widget_style_multiple_fileUp.html.twig' %}*/
/* */
/*                     {#{{ form_start(form, {'attr' : {'id' : 'fileupload'}}) }}#}*/
/* */
/*                     {{ form_start(form) }}*/
/*                     {{ form_widget(form) }}*/
/*                     {{ form_end(form) }}*/
/* */
/*                     <!-- The blueimp Gallery widget -->*/
/*                     <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">*/
/*                         <div class="slides"></div>*/
/*                         <h3 class="title"></h3>*/
/*                         <a class="prev">‹</a>*/
/*                         <a class="next">›</a>*/
/*                         <a class="close">×</a>*/
/*                         <a class="play-pause"></a>*/
/*                         <ol class="indicator"></ol>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="deviceUploadDiv" class="portlet-body">*/
/*                     <div class="modal-header">*/
/*                         <button id="huo15close" type="button" class="close bg_white"><span*/
/*                                     aria-hidden="true">&times;</span></button>*/
/*                         <h4 class="modal-title" id="myModalLabel">拍照上传</h4>*/
/*                     </div>*/
/*                     <div>*/
/*                         <object id="view1" type="application/x-eloamplugin" width="600" height="300"*/
/*                                 name="view"></object>*/
/*                         <object id="view2" type="application/x-eloamplugin" width="600" height="300"*/
/*                                 name="view"></object>*/
/*                     </div>*/
/* */
/*                     <div>*/
/*                         <object id="thumb1" type="application/x-eloamplugin" width="1208" height="150"*/
/*                                 name="thumb"></object>*/
/*                     </div>*/
/* */
/*                     <tr>*/
/*                         <td>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12">*/
/*                                     <label id="lab1" style="color:#fff;">设备1</label>*/
/*                                     <select id="subType1" style="width: 90px" name="subType1"*/
/*                                             onchange="changesubTypeMain()"></select>*/
/*                                     <select id="selRes1" style="width: 90px" name="selRes"></select>*/
/*                                     <span style="color:#fff;">扫描尺寸</span><select id="scansize" style="width: 90px"*/
/*                                                                                  name="scansize"*/
/*                                                                                  onchange="changescansize()">*/
/*                                         <option value="org">原始</option>*/
/*                                         <option value="mid">中</option>*/
/*                                         <option value="small">小</option>*/
/*                                     </select>*/
/*                                     {#<label id="lab2">设备2</label>*/
/*                                     <select id="subType2" style="width: 90px" name="subType2"*/
/*                                             onchange="changesubTypeAssist()"></select>*/
/*                                     <select id="selRes2" style="width: 90px" name="selRes"></select>#}*/
/*                                 </div>*/
/*                                 <div class="col-md-12">*/
/*                                     <input class=" btn btn-success" type="button" value="打开视频" onclick="OpenVideo()"/>*/
/*                                     <input class="submit_01 btn btn-success" type="button" value="关闭视频"*/
/*                                            onclick="CloseVideo()"/>*/
/*                                     <input class="submit_01 btn btn-success" type="button" value="左转" onclick="Left()"/>*/
/*                                     <input class="submit_01 btn btn-success" type="button" value="右转"*/
/*                                            onclick="Right()"/>*/
/*                                     <input class="submit_01 btn btn-success" type="button" value="属性"*/
/*                                            onclick="ShowProperty()"/>*/
/*                                     <span style="width: 10px;"></span>*/
/*                                     <input class="submit_01 btn btn-primary" type="button" value="拍照" onclick="Scan()"/>*/
/*                                     <input class="submit_01 btn btn-primary" type="button" value="确定"*/
/*                                            onclick="closeWinAndUpload()"/>*/
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="col-md-12">*/
/* */
/*                                     <input type="text" class="msg_h15" id="message" size="195"/>*/
/*                                     <input type="text" class="msg_h15" id="idcard" size="195"/>*/
/*                                     <input type="text" class="msg_h15" id="biokey" size="195"/>*/
/*                                     <input type="text" class="msg_h15" id="reader" size="195"/>*/
/*                                     <input type="text" class="msg_h15" id="mag" size="195"/>*/
/*                                 </div>*/
/* */
/* */
/*                             </div>*/
/* */
/* */
/*                         </td>*/
/*                     </tr>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {{ parent() }}*/
/* */
/* */
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
/*     <script src="{{ asset('assets/gallery/js/blueimp-helper.js') }}"></script>*/
/*     <script src="{{ asset('assets/gallery/js/jquery.blueimp-gallery.js') }}"></script>*/
/*     <script src="{{ asset('assets/gallery/js/blueimp-gallery-fullscreen.js') }}"></script>*/
/*     <script src="{{ asset('assets/gallery/js/blueimp-gallery-indicator.js') }}"></script>*/
/* */
/* */
/*     <script src="{{ asset('assets/uploadFile/js/vendor/jquery.ui.widget.js') }}"></script>*/
/*     <!-- The Templates plugin is included to render the upload/download listings -->*/
/*     <script src="{{ asset('assets/uploadFile/js/huo15Templates/tmpl.js') }}"></script>*/
/* */
/*     <!-- The Load Image plugin is included for the preview images and image resizing functionality -->*/
/*     <script src="{{ asset('assets/uploadFile/js/Javascript-Load-Image/load-image.all.min.js') }}"></script>*/
/* */
/*     <!-- The Canvas to Blob plugin is included for image resizing functionality -->*/
/*     <script src="{{ asset('assets/uploadFile/js/Canvas-to-Blob/canvas-to-blob.js') }}"></script>*/
/* */
/*     <!-- blueimp Gallery script -->*/
/*     <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->*/
/*     <script src="{{ asset('assets/uploadFile/js/jquery.iframe-transport.js') }}"></script>*/
/* */
/*     <!-- The basic File Upload plugin -->*/
/*     <script src="{{ asset('assets/uploadFile/js/jquery.fileupload.js') }}"></script>*/
/* */
/*     <!-- The File Upload processing plugin -->*/
/*     <script src="{{ asset('assets/uploadFile/js/jquery.fileupload-process.js') }}"></script>*/
/* */
/*     <!-- The File Upload image preview & resize plugin -->*/
/*     <script src="{{ asset('assets/uploadFile/js/jquery.fileupload-image.js') }}"></script>*/
/* */
/*     <!-- The File Upload audio preview plugin -->*/
/*     <script src="{{ asset('assets/uploadFile/js/jquery.fileupload-audio.js') }}"></script>*/
/* */
/*     <!-- The File Upload video preview plugin -->*/
/*     <script src="{{ asset('assets/uploadFile/js/jquery.fileupload-video.js') }}"></script>*/
/* */
/*     <!-- The File Upload validation plugin -->*/
/*     <script src="{{ asset('assets/uploadFile/js/jquery.fileupload-validate.js') }}"></script>*/
/* */
/*     <!-- The File Upload user interface plugin -->*/
/*     <script src="{{ asset('assets/uploadFile/js/jquery.fileupload-ui.js') }}"></script>*/
/*     <script>*/
/*         huo15ModuleId = {{ module.id }};*/
/*         is_detail = {{ is_detail }} ? 1 : 0;*/
/*     </script>*/
/*     <!-- The main application script -->*/
/*     <script src="{{ asset('assets/uploadFile/js/main.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('assets/uploadFile/css/huo15DeviceUpload.css') }}">*/
/* */
/* */
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
/*     <script language="javascript" type="text/javascript">*/
/*         var DeviceMain;//主头*/
/*         var DeviceAssist;//副头*/
/*         var VideoMain;//主头*/
/*         var VideoAssist;//副头*/
/*         var videoCapMain;*/
/*         var videoCapAssist;*/
/*         imgArr = [];*/
/*         imgNameArr = [];*/
/*         var PicPath;*/
/* */
/*         function plugin() {*/
/*             return document.getElementById('view1');*/
/*         }*/
/* */
/*         function MainView() {*/
/*             return document.getElementById('view1');*/
/*         }*/
/* */
/*         function AssistView() {*/
/*             return document.getElementById('view2');*/
/*         }*/
/* */
/*         function thumb1() {*/
/*             return document.getElementById('thumb1');*/
/*         }*/
/* */
/*         function addEvent(obj, name, func) {*/
/*             if (obj.attachEvent) {*/
/*                 obj.attachEvent("on" + name, func);*/
/*             } else {*/
/*                 obj.addEventListener(name, func, false);*/
/*             }*/
/*         }*/
/*         function OpenVideo() {*/
/*             OpenVideoMain();*/
/*             OpenVideoAssist();*/
/*         }*/
/*         function CloseVideo() {*/
/*             CloseVideoMain();*/
/*             CloseVideoAssist();*/
/*         }*/
/*         function CloseVideoMain() {*/
/*             if (VideoMain) {*/
/*                 plugin().Video_Release(VideoMain);*/
/*                 VideoMain = null;*/
/* */
/*                 MainView().View_SetText("", 0);*/
/*             }*/
/*         }*/
/*         function CloseVideoAssist() {*/
/*             if (VideoAssist) {*/
/*                 plugin().Video_Release(VideoAssist);*/
/*                 VideoAssist = null;*/
/* */
/*                 AssistView().View_SetText("", 0);*/
/*             }*/
/*         }*/
/* */
/*         function OpenVideoMain() {*/
/*             CloseVideoMain();*/
/* */
/*             if (!DeviceMain)*/
/*                 return;*/
/* */
/*             var sSubType = document.getElementById('subType1');*/
/*             var sResolution = document.getElementById('selRes1');*/
/* */
/*             var SelectType = 0;*/
/*             var txt;*/
/*             if (sSubType.options.selectedIndex != -1) {*/
/*                 txt = sSubType.options[sSubType.options.selectedIndex].text;*/
/*                 if (txt == "YUY2") {*/
/*                     SelectType = 1;*/
/*                 }*/
/*                 else if (txt == "MJPG") {*/
/*                     SelectType = 2;*/
/*                 }*/
/*                 else if (txt == "UYVY") {*/
/*                     SelectType = 4;*/
/*                 }*/
/*             }*/
/* */
/*             var nResolution = sResolution.selectedIndex;*/
/* */
/*             VideoMain = plugin().Device_CreateVideo(DeviceMain, nResolution, SelectType);*/
/*             if (VideoMain) {*/
/*                 MainView().View_SelectVideo(VideoMain);*/
/*                 MainView().View_SetText("打开视频中，请等待...", 0);*/
/* */
/*             }*/
/*         }*/
/* */
/*         function OpenVideoAssist() {*/
/*             CloseVideoAssist();*/
/* */
/*             if (!DeviceAssist)*/
/*                 return;*/
/* */
/*             var sSubType = document.getElementById('subType2');*/
/*             var sResolution = document.getElementById('selRes2');*/
/* */
/*             var SelectType = 0;*/
/*             var txt;*/
/*             if (sSubType.options.selectedIndex != -1) {*/
/*                 txt = sSubType.options[sSubType.options.selectedIndex].text;*/
/*                 if (txt == "YUY2") {*/
/*                     SelectType = 1;*/
/*                 }*/
/*                 else if (txt == "MJPG") {*/
/*                     SelectType = 2;*/
/*                 }*/
/*                 else if (txt == "UYVY") {*/
/*                     SelectType = 4;*/
/*                 }*/
/*             }*/
/* */
/*             var nResolution = sResolution.selectedIndex;*/
/* */
/*             VideoAssist = plugin().Device_CreateVideo(DeviceAssist, nResolution, SelectType);*/
/*             if (VideoAssist) {*/
/*                 AssistView().View_SelectVideo(VideoAssist);*/
/*                 AssistView().View_SetText("打开视频中，请等待...", 0);*/
/*             }*/
/*         }*/
/* */
/*         function changesubTypeMain() {*/
/*             if (DeviceMain) {*/
/*                 var sSubType = document.getElementById('subType1');*/
/*                 var sResolution = document.getElementById('selRes1');*/
/*                 var SelectType = 0;*/
/*                 var txt;*/
/*                 if (sSubType.options.selectedIndex != -1) {*/
/*                     var txt = sSubType.options[sSubType.options.selectedIndex].text;*/
/*                     if (txt == "YUY2") {*/
/*                         SelectType = 1;*/
/*                     }*/
/*                     else if (txt == "MJPG") {*/
/*                         SelectType = 2;*/
/*                     }*/
/*                     else if (txt == "UYVY") {*/
/*                         SelectType = 4;*/
/*                     }*/
/*                 }*/
/* */
/*                 var nResolution = plugin().Device_GetResolutionCountEx(DeviceMain, SelectType);*/
/*                 sResolution.options.length = 0;*/
/*                 for (var i = 0; i < nResolution; i++) {*/
/*                     var width = plugin().Device_GetResolutionWidthEx(DeviceMain, SelectType, i);*/
/*                     var heigth = plugin().Device_GetResolutionHeightEx(DeviceMain, SelectType, i);*/
/*                     sResolution.add(new Option(width.toString() + "*" + heigth.toString()));*/
/*                 }*/
/*                 sResolution.selectedIndex = 0;*/
/*             }*/
/*         }*/
/* */
/*         function changesubTypeAssist() {*/
/*             if (DeviceAssist) {*/
/*                 var sSubType = document.getElementById('subType2');*/
/*                 var sResolution = document.getElementById('selRes2');*/
/* */
/*                 var SelectType = 0;*/
/*                 var txt;*/
/*                 if (sSubType.options.selectedIndex != -1) {*/
/*                     var txt = sSubType.options[sSubType.options.selectedIndex].text;*/
/*                     if (txt == "YUY2") {*/
/*                         SelectType = 1;*/
/*                     }*/
/*                     else if (txt == "MJPG") {*/
/*                         SelectType = 2;*/
/*                     }*/
/*                     else if (txt == "UYVY") {*/
/*                         SelectType = 4;*/
/*                     }*/
/*                 }*/
/* */
/*                 var nResolution = plugin().Device_GetResolutionCountEx(DeviceAssist, SelectType);*/
/*                 sResolution.options.length = 0;*/
/*                 for (var i = 0; i < nResolution; i++) {*/
/*                     var width = plugin().Device_GetResolutionWidthEx(DeviceAssist, SelectType, i);*/
/*                     var heigth = plugin().Device_GetResolutionHeightEx(DeviceAssist, SelectType, i);*/
/*                     sResolution.add(new Option(width.toString() + "*" + heigth.toString()));*/
/*                 }*/
/*                 sResolution.selectedIndex = 0;*/
/*             }*/
/*         }*/
/* */
/*         function Load() {*/
/*             //设备接入和丢失*/
/*             //type设备类型， 1 表示视频设备， 2 表示音频设备*/
/*             //idx设备索引*/
/*             //dbt 1 表示设备到达， 2 表示设备丢失*/
/*             addEvent(plugin(), 'DevChange', function (type, idx, dbt) {*/
/*                 if (1 == type)//视频设备*/
/*                 {*/
/*                     if (1 == dbt)//设备到达*/
/*                     {*/
/*                         var deviceType = plugin().Global_GetEloamType(1, idx);*/
/*                         if (1 == deviceType)//主摄像头*/
/*                         {*/
/*                             if (null == DeviceMain) {*/
/*                                 DeviceMain = plugin().Global_CreateDevice(1, idx);*/
/*                                 if (DeviceMain) {*/
/*                                     document.getElementById('lab1').innerHTML = plugin().Device_GetFriendlyName(DeviceMain);*/
/* */
/*                                     var sSubType = document.getElementById('subType1');*/
/*                                     sSubType.options.length = 0;*/
/*                                     var subType = plugin().Device_GetSubtype(DeviceMain);*/
/*                                     if (subType & 1) {*/
/*                                         sSubType.add(new Option("YUY2"));*/
/*                                     }*/
/*                                     if (subType & 2) {*/
/*                                         sSubType.add(new Option("MJPG"));*/
/*                                     }*/
/*                                     if (subType & 4) {*/
/*                                         sSubType.add(new Option("UYVY"));*/
/*                                     }*/
/*                                     sSubType.selectedIndex = 0;*/
/*                                     changesubTypeMain();*/
/* */
/*                                     OpenVideoMain();*/
/*                                 }*/
/*                             }*/
/*                         }*/
/*                         else if (2 == deviceType || 3 == deviceType)//辅摄像头*/
/*                         {*/
/*                             if (null == DeviceAssist) {*/
/*                                 DeviceAssist = plugin().Global_CreateDevice(1, idx);*/
/*                                 if (DeviceAssist) {*/
/*                                     document.getElementById('lab2').innerHTML = plugin().Device_GetFriendlyName(DeviceAssist);*/
/* */
/*                                     var sSubType = document.getElementById('subType2');*/
/*                                     sSubType.options.length = 0;*/
/*                                     var subType = plugin().Device_GetSubtype(DeviceAssist);*/
/*                                     if (subType & 1) {*/
/*                                         sSubType.add(new Option("YUY2"));*/
/*                                     }*/
/*                                     if (subType & 2) {*/
/*                                         sSubType.add(new Option("MJPG"));*/
/*                                     }*/
/*                                     if (subType & 4) {*/
/*                                         sSubType.add(new Option("UYVY"));*/
/*                                     }*/
/*                                     if ((0 != (subType & 2)) && (0 != (subType & 1)))//辅摄像头优先采用mjpg模式打开*/
/*                                     {*/
/*                                         sSubType.selectedIndex = 1;*/
/*                                     }*/
/*                                     else {*/
/*                                         sSubType.selectedIndex = 0;*/
/*                                     }*/
/*                                     changesubTypeAssist();*/
/* */
/*                                     OpenVideoAssist();*/
/*                                 }*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                     else if (2 == dbt)//设备丢失*/
/*                     {*/
/*                         if (DeviceMain) {*/
/*                             if (plugin().Device_GetIndex(DeviceMain) == idx) {*/
/*                                 CloseVideoMain();*/
/*                                 plugin().Device_Release(DeviceMain);*/
/*                                 DeviceMain = null;*/
/* */
/*                                 document.getElementById('lab1').innerHTML = "";*/
/*                                 document.getElementById('subType1').options.length = 0;*/
/*                                 document.getElementById('selRes1').options.length = 0;*/
/*                             }*/
/*                         }*/
/* */
/*                         if (DeviceAssist) {*/
/*                             if (plugin().Device_GetIndex(DeviceAssist) == idx) {*/
/*                                 CloseVideoAssist();*/
/*                                 plugin().Device_Release(DeviceAssist);*/
/*                                 DeviceAssist = null;*/
/* */
/*                                 document.getElementById('lab2').innerHTML = "";*/
/*                                 document.getElementById('subType2').options.length = 0;*/
/*                                 document.getElementById('selRes2').options.length = 0;*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             addEvent(plugin(), 'Ocr', function (flag, ret) {*/
/*                 if (1 == flag && 0 == ret) {*/
/*                     var ret = plugin().Global_GetOcrPlainText(0);*/
/*                     alert(ret);*/
/*                 }*/
/*             });*/
/* */
/*             addEvent(plugin(), 'IdCard', function (ret) {*/
/*                 if (1 == ret) {*/
/*                     var str = "";*/
/* */
/*                     for (var i = 0; i < 16; i++) {*/
/*                         str += plugin().Global_GetIdCardData(i + 1);*/
/*                         str += ";";*/
/*                     }*/
/* */
/*                     document.getElementById("idcard").value = str;*/
/* */
/*                     var image = plugin().Global_GetIdCardImage(1);//1表示头像， 2表示正面， 3表示反面 ...*/
/*                     plugin().Image_Save(image, "C:\\idcard.jpg", 0);*/
/*                     plugin().Image_Release(image);*/
/* */
/*                     document.getElementById("idcardimg").src = "C:\\idcard.jpg";*/
/*                 }*/
/*             });*/
/* */
/*             addEvent(plugin(), 'Biokey', function (ret) {*/
/*                 if (4 == ret) {*/
/*                     // 采集模板成功*/
/*                     var mem = plugin().Global_GetBiokeyTemplateData();*/
/*                     if (mem) {*/
/*                         if (plugin().Memory_Save(mem, "C:\\1.tmp")) {*/
/*                             document.getElementById("biokey").value = "获取模板成功，存储路径为C:\\1.tmp";*/
/*                         }*/
/*                         plugin().Memory_Release(mem);*/
/*                     }*/
/* */
/*                     var img = plugin().Global_GetBiokeyImage();*/
/*                     plugin().Image_Save(img, "C:\\BiokeyImg1.jpg", 0);*/
/*                     plugin().Image_Release(img);*/
/* */
/*                     document.getElementById("BiokeyImg1").src = "C:\\BiokeyImg1.jpg";*/
/*                     alert("获取指纹模板成功");*/
/*                 }*/
/*                 else if (8 == ret) {*/
/*                     var mem = plugin().Global_GetBiokeyFeatureData();*/
/*                     if (mem) {*/
/*                         if (plugin().Memory_Save(mem, "C:\\2.tmp")) {*/
/*                             document.getElementById("biokey").value = "获取特征成功，存储路径为C:\\2.tmp";*/
/*                         }*/
/*                         plugin().Memory_Release(mem);*/
/*                     }*/
/* */
/*                     var img = plugin().Global_GetBiokeyImage();*/
/*                     plugin().Image_Save(img, "C:\\BiokeyImg2.jpg", 0);*/
/*                     plugin().Image_Release(img);*/
/* */
/*                     document.getElementById("BiokeyImg2").src = "C:\\BiokeyImg2.jpg";*/
/*                     alert("获取指纹特征成功");*/
/*                 }*/
/*                 else if (9 == ret) {*/
/*                     document.getElementById("biokey").value += "\r\n刷的不错！";*/
/*                 }*/
/*                 else if (10 == ret) {*/
/*                     document.getElementById("biokey").value += "\r\n图像质量太差！";*/
/*                 }*/
/*                 else if (11 == ret) {*/
/*                     document.getElementById("biokey").value += "\r\n图像点数太少！";*/
/*                 }*/
/*                 else if (12 == ret) {*/
/*                     document.getElementById("biokey").value += "\r\n太快！";*/
/*                 }*/
/*                 else if (13 == ret) {*/
/*                     document.getElementById("biokey").value += "\r\n太慢！";*/
/*                 }*/
/*                 else if (14 == ret) {*/
/*                     document.getElementById("biokey").value += "\r\n其它质量问题！";*/
/*                 }*/
/*             });*/
/* */
/*             addEvent(plugin(), 'Reader', function (type, subtype) {*/
/*                 var str = "";*/
/*                 if (4 == type) {*/
/*                     str += "[CPU卡] Id:";*/
/*                     str += plugin().Global_ReaderGetCpuId();*/
/*                     str += "; CardNumber:";*/
/*                     str += plugin().Global_ReaderGetCpuCreditCardNumber();*/
/*                 }*/
/*                 else if (2 == type) {*/
/*                     str += "[M1卡] Id:";*/
/*                     str += plugin().Global_ReaderGetM1Id();*/
/*                 }*/
/*                 else if (3 == type) {*/
/*                     str += "[Memory卡] Id:";*/
/*                     str += plugin().Global_ReaderGetMemoryId();*/
/*                 }*/
/*                 else if (5 == type) {*/
/*                     str += "[社保卡] :";*/
/*                     str += plugin().Global_ReaderGetSocialData(1);*/
/*                     str += plugin().Global_ReaderGetSocialData(2);*/
/*                 }*/
/*                 document.getElementById("reader").value = str;*/
/*             });*/
/* */
/*             addEvent(plugin(), 'Mag', function (ret) {*/
/*                 var str = "";*/
/* */
/*                 str += "[磁卡卡号] ";*/
/*                 str += plugin().Global_MagneticCardGetNumber();*/
/* */
/*                 str += "[磁道数据]";*/
/* */
/*                 str += "磁道1:";*/
/*                 str += plugin().Global_MagneticCardGetData(0);*/
/*                 str += "磁道2:";*/
/*                 str += plugin().Global_MagneticCardGetData(1);*/
/*                 str += "磁道3:";*/
/*                 str += plugin().Global_MagneticCardGetData(2);*/
/* */
/*                 document.getElementById("mag").value = str;*/
/*             });*/
/* */
/*             addEvent(plugin(), 'MoveDetec', function (video, id) {*/
/*                 // 自动拍照事件*/
/*             });*/
/* */
/*             addEvent(plugin(), 'Deskew', function (video, view, list) {*/
/*                 // 纠偏回调事件*/
/*                 var count = plugin().RegionList_GetCount(list);*/
/*                 for (var i = 0; i < count; ++i) {*/
/*                     var region = plugin().RegionList_GetRegion(list, i);*/
/* */
/*                     var x1 = plugin().Region_GetX1(region);*/
/*                     var y1 = plugin().Region_GetY1(region);*/
/* */
/*                     var width = plugin().Region_GetWidth(region);*/
/*                     var height = plugin().Region_GetHeight(region);*/
/* */
/*                     plugin().Region_Release(region);*/
/*                 }*/
/* */
/*                 plugin().RegionList_Release(list);*/
/*             });*/
/* */
/*             var title = document.title;*/
/*             document.title = title + plugin().version;*/
/* */
/*             MainView().Global_SetWindowName("view");*/
/*             AssistView().Global_SetWindowName("view");*/
/*             thumb1().Global_SetWindowName("thumb");*/
/* */
/*             var ret;*/
/*             ret = plugin().Global_InitDevs();*/
/*             if (ret) {*/
/*                 //进行人脸识别初始化时，视频应处于关闭状态*/
/*                 plugin().InitFaceDetect();*/
/*             }*/
/* */
/*             if (!plugin().Global_VideoCapInit()) {*/
/*                 alert("初始化失败！");*/
/*             }*/
/*         }*/
/* */
/*         function Unload() {*/
/*             if (VideoMain) {*/
/*                 MainView().View_SetText("", 0);*/
/*                 plugin().Video_Release(VideoMain);*/
/*                 VideoMain = null;*/
/*             }*/
/*             if (DeviceMain) {*/
/*                 plugin().Device_Release(DeviceMain);*/
/*                 DeviceMain = null;*/
/*             }*/
/*             if (VideoAssist) {*/
/*                 AssistView().View_SetText("", 0);*/
/*                 plugin().Video_Release(VideoAssist);*/
/*                 VideoAssist = null;*/
/*             }*/
/*             if (DeviceAssist) {*/
/*                 plugin().Device_Release(DeviceAssist);*/
/*                 DeviceAssist = null;*/
/*             }*/
/* */
/*             plugin().Global_DeinitDevs();*/
/* */
/*             //进行人脸识别反初始化时，视频应处于关闭状态*/
/*             plugin().DeinitFaceDetect();*/
/*         }*/
/*         function EnableDate(obj) {*/
/*             if (obj.checked) {*/
/*                 var offsetx = 1000;*/
/*                 var offsety = 60;*/
/* */
/*                 var font;*/
/*                 font = plugin().Global_CreateTypeface(50, 50, 0, 0, 2, 0, 0, 0, "宋体");*/
/* */
/*                 if (VideoMain) {*/
/*                     var width = plugin().Video_GetWidth(VideoMain);*/
/*                     var heigth = plugin().Video_GetHeight(VideoMain);*/
/* */
/*                     plugin().Video_EnableDate(VideoMain, font, width - offsetx, heigth - offsety, 0xffffff, 0);*/
/*                 }*/
/*                 if (VideoAssist) {*/
/*                     var width = plugin().Video_GetWidth(VideoAssist);*/
/*                     var heigth = plugin().Video_GetHeight(VideoAssist);*/
/* */
/*                     plugin().Video_EnableDate(VideoAssist, font, width - offsetx, heigth - offsety, 0xffffff, 0);*/
/*                 }*/
/*                 plugin().Font_Release(font);*/
/*             }*/
/*             else {*/
/*                 if (VideoMain) {*/
/*                     plugin().Video_DisableDate(VideoMain);*/
/*                 }*/
/*                 if (VideoAssist) {*/
/*                     plugin().Video_DisableDate(VideoAssist);*/
/*                 }*/
/*             }*/
/*         }*/
/* */
/*         function AddText(obj) {*/
/*             if (obj.checked) {*/
/*                 var font;*/
/*                 font = plugin().Global_CreateTypeface(200, 200, 0, 0, 2, 0, 0, 0, "宋体");*/
/* */
/*                 if (VideoMain) {*/
/*                     plugin().Video_EnableAddText(VideoMain, font, 0, 0, "文字水印", 65280, 150);*/
/*                 }*/
/*                 if (VideoAssist) {*/
/*                     plugin().Video_EnableAddText(VideoAssist, font, 0, 0, "文字水印", 65280, 150);*/
/*                 }*/
/*                 plugin().Font_Release(font);*/
/*             }*/
/*             else {*/
/*                 if (VideoMain) {*/
/*                     plugin().Video_DisableAddText(VideoMain);*/
/*                 }*/
/*                 if (VideoAssist) {*/
/*                     plugin().Video_DisableAddText(VideoAssist);*/
/*                 }*/
/*             }*/
/*         }*/
/* */
/*         function ShowProperty() {*/
/*             if (DeviceMain) {*/
/*                 plugin().Device_ShowProperty(DeviceMain, MainView().View_GetObject());*/
/*             }*/
/*         }*/
/* */
/*         function Deskew(obj) {*/
/*             if (obj.checked) {*/
/*                 if (VideoMain) {*/
/*                     plugin().Video_EnableDeskewEx(VideoMain, 1);*/
/*                 }*/
/*                 if (VideoAssist) {*/
/*                     plugin().Video_EnableDeskewEx(VideoAssist, 1);*/
/*                 }*/
/*             }*/
/*             else {*/
/*                 if (VideoMain) {*/
/*                     plugin().Video_DisableDeskew(VideoMain);*/
/*                 }*/
/*                 if (VideoAssist) {*/
/*                     plugin().Video_DisableDeskew(VideoAssist);*/
/*                 }*/
/*             }*/
/*         }*/
/* */
/*         function SetState(obj) {*/
/*             if (obj.checked) {*/
/*                 MainView().View_SetState(2);*/
/*                 document.getElementById('scansize').disabled = "disabled";*/
/*             }*/
/*             else {*/
/*                 MainView().View_SetState(1);*/
/*                 document.getElementById('scansize').disabled = "";*/
/*             }*/
/*         }*/
/* */
/* */
/*         function changescansize() {*/
/*             var rect;*/
/*             var width = plugin().Video_GetWidth(VideoMain);*/
/*             var heigth = plugin().Video_GetHeight(VideoMain);*/
/* */
/*             var s = document.getElementById('scansize');*/
/*             var size = s.options.selectedIndex;*/
/* */
/*             if (size == 0) {*/
/*                 MainView().View_SetState(1);//取消框选 状态*/
/*             }*/
/*             else if (size == 1) {*/
/*                 rect = plugin().Global_CreateRect(width / 2 - width / 4, heigth / 2 - heigth / 4, width / 2, heigth / 2);*/
/*                 MainView().View_SetState(2);//小尺寸*/
/*                 MainView().View_SetSelectedRect(rect);*/
/* */
/*             }*/
/*             else if (size == 2) {*/
/*                 rect = plugin().Global_CreateRect(width / 2 - width / 6, heigth / 2 - heigth / 6, width / 3, heigth / 3);*/
/*                 MainView().View_SetState(2);//中尺寸*/
/*                 MainView().View_SetSelectedRect(rect);*/
/*             }*/
/* */
/*             if (size != 0) {*/
/*                 document.getElementById('SetState').checked = false;*/
/*                 document.getElementById('SetState').disabled = "disabled";*/
/*             }*/
/*             else {*/
/*                 document.getElementById('SetState').disabled = ""*/
/*             }*/
/*         }*/
/* */
/*         function Left() {*/
/*             if (VideoMain) {*/
/*                 plugin().Video_RotateLeft(VideoMain);*/
/*             }*/
/*             if (VideoAssist) {*/
/*                 plugin().Video_RotateLeft(VideoAssist);*/
/*             }*/
/* */
/*         }*/
/* */
/*         function Right() {*/
/*             if (VideoMain) {*/
/*                 plugin().Video_RotateRight(VideoMain);*/
/*             }*/
/*             if (VideoAssist) {*/
/*                 plugin().Video_RotateRight(VideoAssist);*/
/*             }*/
/* */
/*         }*/
/* */
/*         //拍照*/
/*         function Scan() {*/
/*             if (VideoMain) {*/
/*                 var imgList = plugin().Video_CreateImageList(VideoMain, 0, 0);*/
/*                 if (imgList) {*/
/*                     var len = plugin().ImageList_GetCount(imgList);*/
/*                     for (var i = 0; i < len; i++) {*/
/*                         var img = plugin().ImageList_GetImage(imgList, i);*/
/* */
/*                         var date = new Date();*/
/*                         var yy = date.getFullYear().toString();*/
/*                         var mm = (date.getMonth() + 1).toString();*/
/*                         var dd = date.getDate().toString();*/
/*                         var hh = date.getHours().toString();*/
/*                         var nn = date.getMinutes().toString();*/
/*                         var ss = date.getSeconds().toString();*/
/*                         var mi = date.getMilliseconds().toString();*/
/*                         var Name = "D:\\huo15\\" + yy + mm + dd + hh + nn + ss + mi + ".jpg";*/
/* */
/*                         var b = plugin().Image_Save(img, Name, 0);*/
/*                         if (b) {*/
/*                             MainView().View_PlayCaptureEffect();*/
/*                             thumb1().Thumbnail_Add(Name);*/
/* */
/*                             PicPath = Name;*/
/*                             imgArr.push(PicPath);*/
/*                             imgNameArr.push(yy + mm + dd + hh + nn + ss + mi + ".jpg");*/
/* */
/*                         }*/
/* */
/*                         plugin().Image_Release(img);*/
/*                     }*/
/* */
/*                     plugin().ImageList_Release(imgList);*/
/*                 }*/
/*             }*/
/* */
/*             if (VideoAssist) {*/
/*                 var imgList2 = plugin().Video_CreateImageList(VideoAssist, 0, 0);*/
/*                 if (imgList2) {*/
/*                     var len = plugin().ImageList_GetCount(imgList2);*/
/*                     for (var i = 0; i < len; i++) {*/
/*                         var img = plugin().ImageList_GetImage(imgList2, i);*/
/* */
/*                         var date = new Date();*/
/*                         var yy = date.getFullYear().toString();*/
/*                         var mm = (date.getMonth() + 1).toString();*/
/*                         var dd = date.getDate().toString();*/
/*                         var hh = date.getHours().toString();*/
/*                         var nn = date.getMinutes().toString();*/
/*                         var ss = date.getSeconds().toString();*/
/*                         var mi = date.getMilliseconds().toString();*/
/*                         var Name = "C:\\" + yy + mm + dd + hh + nn + ss + mi + ".jpg";*/
/* */
/*                         var b = plugin().Image_Save(img, Name, 0);*/
/*                         if (b) {*/
/*                             AssistView().View_PlayCaptureEffect();*/
/*                             thumb1().Thumbnail_Add(Name);*/
/*                         }*/
/* */
/*                         plugin().Image_Release(img);*/
/*                     }*/
/* */
/*                     plugin().ImageList_Release(imgList2);*/
/*                 }*/
/*             }*/
/* */
/*             console.log(imgArr)*/
/*         }*/
/* */
/* */
/*         function OCR() {*/
/*             if (PicPath) {*/
/*                 plugin().Global_InitOcr();*/
/* */
/*                 var img;*/
/*                 img = plugin().Global_CreateImageFromFile(PicPath, 0);*/
/*                 plugin().Global_DiscernOcr(1, img);*/
/*                 var b = plugin().Global_WaitOcrDiscern();*/
/*                 if (b) {*/
/*                     alert(plugin().Global_GetOcrPlainText(0));*/
/*                     plugin().Global_SaveOcr("C:\\1.doc", 0);*/
/*                 }*/
/* */
/*                 plugin().Global_DeinitOcr();*/
/* */
/*                 plugin().Image_Release(img);*/
/*             }*/
/*             else {*/
/*                 alert("请先拍照！");*/
/*             }*/
/*         }*/
/* */
/*         function UploadToHttpServer() {*/
/* */
/*             var http = plugin().Global_CreateHttp("http://192.168.1.193:8080/upload.asp");//asp服务器demo地址*/
/*             //var http = plugin().Global_CreateHttp("http://192.168.1.205:8080/FileStreamDemo/servlet/FileSteamUpload?");//java服务器demo地址*/
/*             if (http) {*/
/*                 var b = plugin().Http_UploadImageFile(http, "C:\\1.jpg", "2.jpg");*/
/*                 if (b) {*/
/*                     alert("上传成功");*/
/*                 }*/
/*                 else {*/
/*                     alert("上传失败");*/
/*                 }*/
/* */
/*                 plugin().Http_Release(http);*/
/*             }*/
/*             else {*/
/*                 alert("url 错误");*/
/*             }*/
/*         }*/
/* */
/*         function ScanToHttpServer() {*/
/*             if (VideoMain) {*/
/*                 var img = plugin().Video_CreateImage(VideoMain, 0, MainView().View_GetObject());*/
/*                 console.log(img);*/
/*                 return;*/
/*                 if (img) {*/
/*                     //var http = plugin().Global_CreateHttp("http://192.168.1.193:8080/upload.asp");//asp服务器demo地址*/
/*                     var http = plugin().Global_CreateHttp("http://127.0.0.1:8000/modules/addData?moduleId=1&_method=POST");//java服务器demo地址*/
/*                     console.log(http);*/
/*                     if (http) {*/
/*                         var b = plugin().Http_UploadImage(http, img, 2, 0, "2.jpg");*/
/*                         if (b) {*/
/*                             alert("上传成功");*/
/*                         }*/
/*                         else {*/
/*                             alert("上传失败");*/
/*                         }*/
/* */
/*                         plugin().Http_Release(http);*/
/*                     }*/
/* */
/*                     plugin().Image_Release(img);*/
/*                 }*/
/*             }*/
/*         }*/
/* */
/*         /******************录像********************//* */
/*         function StartMainRecord() {*/
/*             if (VideoMain) {*/
/*                 var videoOutputWidth = plugin().Video_GetWidth(VideoMain);*/
/*                 var videoOutputHeight = plugin().Video_GetHeight(VideoMain);*/
/*                 //录像时，打开视频的分辨率越低，帧率越高,一般不超过200w像素*/
/*                 //所设置的帧率应尽可能高于实际帧率，避免丢帧*/
/*                 var FrameRate = 15;//此参数可根据录像分辨率与机型实际帧率调节*/
/*                 var CheckWidth = 1600;*/
/*                 var CheckHeight = 1200;*/
/*                 //主流视频分辨率少有大于200万的，因此为节约cpu资源，当分辨率大于200w，应采用200w的配置录制*/
/*                 if (videoOutputWidth * videoOutputHeight > (CheckWidth * CheckHeight)) {*/
/*                     if (confirm("当前分辨率过高，切换到200万像素时，录制效果最佳！\r\n点击'确定'，手动切换到1600X1200或相近分辨率后再次尝试\r\n点击'取消'，本次录制继续")) {*/
/*                         return;*/
/*                     }*/
/*                     videoOutputWidth = CheckWidth;*/
/*                     videoOutputHeight = CheckHeight;*/
/*                 }*/
/* */
/*                 if (videoCapMain) {*/
/*                     plugin().VideoCap_Stop(videoCapMain);*/
/*                     plugin().VideoCap_Destroy(videoCapMain);*/
/*                 }*/
/* */
/*                 videoCapMain = plugin().Global_CreatVideoCap();*/
/*                 if (null == videoCapMain) {*/
/*                     alert("创建录像对象失败");*/
/*                     return;*/
/*                 }*/
/* */
/*                 var selMicIdx = -1;*/
/*                 if (plugin().Global_VideoCapGetAudioDevNum() > 0)//有麦克风*/
/*                 {*/
/*                     selMicIdx = 0;*/
/*                 }*/
/* */
/*                 if (!plugin().VideoCap_PreCap(videoCapMain, "C:\\eloamPlugin_main.mp4", selMicIdx, FrameRate, 1, videoOutputWidth, videoOutputHeight)) {*/
/*                     alert("录像设置失败");*/
/*                     return;*/
/*                 }*/
/* */
/*                 if (!plugin().VideoCap_AddVideoSrc(videoCapMain, VideoMain)) {*/
/*                     alert("添加视频源失败");*/
/*                     return;*/
/*                 }*/
/* */
/*                 if (!plugin().VideoCap_Start(videoCapMain)) {*/
/*                     alert("启动录像失败");*/
/*                     return;*/
/*                 }*/
/*                 alert("已开始录像");*/
/*             }*/
/*         }*/
/*         function StopMainRecord() {*/
/*             if (plugin().VideoCap_Stop(videoCapMain)) {*/
/*                 plugin().VideoCap_Destroy(videoCapMain);*/
/*                 videoCapMain = null;*/
/*                 alert("录像结束，文件保存于C:\\eloamPlugin_main.mp4\r\n若录像失败请选择较小的分辨率尝试");*/
/*             }*/
/*             else {*/
/*                 alert("停止录像失败");*/
/*             }*/
/*         }*/
/*         function StartAssistRecord() {*/
/*             if (VideoAssist) {*/
/*                 var videoOutputWidth = plugin().Video_GetWidth(VideoAssist);*/
/*                 var videoOutputHeight = plugin().Video_GetHeight(VideoAssist);*/
/*                 //录像时，打开视频的分辨率越低，帧率越高,一般不超过200w像素*/
/*                 //所设置的帧率应尽可能高于实际帧率，避免丢帧*/
/*                 var FrameRate = 15;//此参数可根据录像分辨率与机型实际帧率调节*/
/*                 var CheckWidth = 1600;*/
/*                 var CheckHeight = 1200;*/
/*                 //主流视频分辨率少有大于200万的，因此为节约cpu资源，当分辨率大于200w，应采用200w的配置录制*/
/*                 if (videoOutputWidth * videoOutputHeight > (CheckWidth * CheckHeight)) {*/
/*                     if (confirm("当前分辨率过高，切换到200万像素时，录制效果最佳！\r\n点击'确定'，手动切换到1600X1200或相近分辨率后再次尝试\r\n点击'取消'，本次录制继续")) {*/
/*                         return;*/
/*                     }*/
/*                     videoOutputWidth = CheckWidth;*/
/*                     videoOutputHeight = CheckHeight;*/
/*                 }*/
/* */
/*                 if (videoCapAssist) {*/
/*                     plugin().VideoCap_Stop(videoCapAssist);*/
/*                     plugin().VideoCap_Destroy(videoCapAssist);*/
/*                 }*/
/* */
/*                 videoCapAssist = plugin().Global_CreatVideoCap();*/
/*                 if (null == videoCapAssist) {*/
/*                     alert("创建录像对象失败");*/
/*                     return;*/
/*                 }*/
/* */
/*                 var selMicIdx = -1;*/
/*                 if (plugin().Global_VideoCapGetAudioDevNum() > 0)//有麦克风*/
/*                 {*/
/*                     selMicIdx = 0;*/
/*                 }*/
/* */
/*                 if (!plugin().VideoCap_PreCap(videoCapAssist, "C:\\eloamPlugin_assist.mp4", selMicIdx, FrameRate, 1, videoOutputWidth, videoOutputHeight)) {*/
/*                     alert("启动录像失败");*/
/*                     return;*/
/*                 }*/
/* */
/*                 if (!plugin().VideoCap_AddVideoSrc(videoCapAssist, VideoAssist)) {*/
/*                     alert("添加视频源失败");*/
/*                     return;*/
/*                 }*/
/* */
/*                 if (!plugin().VideoCap_Start(videoCapAssist)) {*/
/*                     alert("启动录像失败");*/
/*                     return;*/
/*                 }*/
/*                 alert("已开始录像");*/
/*             }*/
/*         }*/
/*         function StopAssistRecord() {*/
/*             if (plugin().VideoCap_Stop(videoCapAssist)) {*/
/*                 plugin().VideoCap_Destroy(videoCapAssist);*/
/*                 videoCapAssist = null;*/
/*                 alert("录像结束，文件保存于C:\\eloamPlugin_assist.mp4\r\n若录像失败请选择较小的分辨率尝试");*/
/*             }*/
/*             else {*/
/*                 alert("停止录像失败");*/
/*             }*/
/*         }*/
/*         /******************录像********************//* */
/*         function GetImgMD5() {*/
/*             if (PicPath) {*/
/*                 var img;*/
/*                 img = plugin().Global_CreateImageFromFile(PicPath, 0);*/
/*                 var md5 = plugin().Image_GetMD5(img, 2, 0);*/
/*                 alert("图像的MD5值为：" + md5);*/
/* */
/*                 plugin().Image_Release(img);*/
/*             }*/
/*             else {*/
/*                 alert("请先拍照！");*/
/*             }*/
/*         }*/
/* */
/*         function Barcode() {*/
/*             if (DeviceMain) {*/
/*                 if (VideoMain) {*/
/*                     var imgList = plugin().Video_CreateImageList(VideoMain, 0, 0);*/
/*                     if (imgList) {*/
/*                         plugin().Global_InitBarcode();*/
/* */
/*                         var len = plugin().ImageList_GetCount(imgList);*/
/*                         for (var i = 0; i < len; i++) {*/
/*                             var image = plugin().ImageList_GetImage(imgList, i);*/
/* */
/*                             if (image) {*/
/*                                 var b = plugin().Global_DiscernBarcode(image);*/
/*                                 if (b) {*/
/*                                     if (plugin().Global_GetBarcodeCount() <= 0) {*/
/*                                         alert("识别失败！");*/
/*                                     }*/
/*                                     else {*/
/*                                         for (var i = 0; i < plugin().Global_GetBarcodeCount(); i++)*/
/*                                             alert(plugin().Global_GetBarcodeData(i));*/
/*                                     }*/
/*                                 }*/
/*                             }*/
/*                         }*/
/*                         plugin().ImageList_Release(imgList);*/
/*                         plugin().Global_DeinitBarcode();*/
/*                     }*/
/*                 }*/
/*             }*/
/*         }*/
/* */
/* */
/*         /******************指纹识别********************//* */
/*         function InitBiokey() {*/
/*             if (!plugin().Global_InitBiokey()) {*/
/*                 alert("初始化指纹识别失败！");*/
/*             }*/
/*         }*/
/*         function DInitBiokey() {*/
/*             plugin().Global_DeinitBiokey();*/
/*         }*/
/*         function GetTemplate() {*/
/*             var b = plugin().Global_GetBiokeyTemplate();*/
/*             if (b) {*/
/*                 document.getElementById("BiokeyImg1").src = "";*/
/*                 document.getElementById("biokey").value = "请按压手指三次完成模板采集！";*/
/*             }*/
/*         }*/
/* */
/*         function StopGetTemplate() {*/
/*             var b = plugin().Global_StopGetBiokeyTemplate();*/
/*             if (b) {*/
/*                 document.getElementById("biokey").value = "已停止获取模板";*/
/*             }*/
/*         }*/
/* */
/*         function GetFeature() {*/
/*             var b = plugin().Global_GetBiokeyFeature();*/
/*             if (b) {*/
/*                 document.getElementById("BiokeyImg2").src = "";*/
/*                 document.getElementById("biokey").value = "请按压手指";*/
/*             }*/
/*         }*/
/* */
/*         function StopGetFeature() {*/
/*             var b = plugin().Global_StopGetBiokeyFeature();*/
/*             if (b) {*/
/*                 document.getElementById("biokey").value = "已停止获取特征";*/
/*             }*/
/*         }*/
/* */
/*         function BiokeyVerify() {*/
/*             var mem1 = plugin().Global_CreateMemoryFromFile("C:\\1.tmp");*/
/*             var mem2 = plugin().Global_CreateMemoryFromFile("C:\\2.tmp");*/
/*             if (mem1 && mem2) {*/
/*                 // 比较*/
/*                 var ret = plugin().Global_BiokeyVerify(mem1, mem2);*/
/*                 if (ret > 50) {*/
/*                     document.getElementById("biokey").value = "匹配成功" + ret.toString();*/
/*                 }*/
/*                 else {*/
/*                     document.getElementById("biokey").value = "匹配失败" + ret.toString();*/
/*                 }*/
/*                 plugin().Memory_Release(mem1);*/
/*                 plugin().Memory_Release(mem2);*/
/*             }*/
/*             else {*/
/*                 alert("请采集完指纹模板和指纹特征后再比对！");*/
/*             }*/
/*         }*/
/*         /******************二代证阅读器********************//* */
/*         function StartIDCard() {*/
/*             if (!plugin().Global_InitIdCard()) {*/
/*                 alert("初始化二代证阅读器失败！");*/
/*                 return;*/
/*             }*/
/*             if (plugin().Global_DiscernIdCard()) {*/
/*                 alert("请刷卡！");*/
/*             }*/
/*             else {*/
/*                 alert("启动二代证阅读失败！");*/
/*             }*/
/*         }*/
/*         function StopIDCard() {*/
/*             plugin().Global_StopIdCardDiscern();*/
/*             plugin().Global_DeinitIdCard();*/
/*         }*/
/*         /******************IC卡阅读器********************//* */
/*         function StartICCard() {*/
/*             if (!plugin().Global_InitReader()) {*/
/*                 alert("初始化IC卡阅读器失败！");*/
/*                 return;*/
/*             }*/
/*             if (plugin().Global_ReaderStart()) {*/
/*                 alert("请刷卡！");*/
/*             }*/
/*             else {*/
/*                 alert("启动IC卡阅读失败！");*/
/*             }*/
/*         }*/
/*         function StopICCard() {*/
/*             plugin().Global_ReaderStop();*/
/*             plugin().Global_DeinitReader();*/
/*         }*/
/*         /******************磁条卡阅读器********************//* */
/*         function StartMagCard() {*/
/*             if (!plugin().Global_InitMagneticCard()) {*/
/*                 alert("初始化磁条卡阅读器失败！");*/
/*                 return;*/
/*             }*/
/*             if (plugin().Global_MagneticCardReaderStart()) {*/
/*                 alert("请刷卡！");*/
/*             }*/
/*             else {*/
/*                 alert("启动磁条阅读失败！");*/
/*             }*/
/*         }*/
/*         function StopMagCard() {*/
/*             plugin().Global_MagneticCardReaderStop();*/
/*             plugin().Global_DeinitMagneticCard();*/
/*         }*/
/* */
/*         /******************人脸识别********************//* */
/*         function FaceDetect() {*/
/*             var image1 = plugin().Global_CreateImageFromFile("C:\\1.jpg", 0);*/
/*             var image2 = plugin().Global_CreateImageFromFile("C:\\2.jpg", 0);*/
/*             if (image1 && image2) {*/
/*                 var ret = plugin().DiscernFaceDetect(image1, image2);*/
/*                 if (ret != -1) {*/
/*                     ret += 20;*/
/*                     if (ret > 100) {*/
/*                         ret = 100;*/
/*                     }*/
/*                     var msg = "识别已完成，匹配度：" + ret + "\r\n（匹配阈值为70，高于阈值则为同一人）";*/
/*                     alert(msg);*/
/*                 }*/
/*                 else {*/
/*                     alert("识别失败！");*/
/*                 }*/
/*             }*/
/*             else {*/
/*                 alert("找不到图像！");*/
/*                 return;*/
/*             }*/
/* */
/*             plugin().Image_Release(image1);*/
/*             plugin().Image_Release(image2);*/
/*         }*/
/* */
/*         function VerifyFaceDetect() {*/
/*             if (VideoAssist) {*/
/*                 var image = plugin().Video_CreateImage(VideoAssist, 0, AssistView().View_GetObject());*/
/*                 var idcardImage = plugin().Global_CreateImageFromFile("C:\\idcard.jpg", 0);*/
/* */
/*                 if (image && idcardImage) {*/
/*                     var ret = plugin().DiscernFaceDetect(image, idcardImage);*/
/*                     if (ret != -1) {*/
/*                         ret += 20;*/
/*                         if (ret > 100) {*/
/*                             ret = 100;*/
/*                         }*/
/*                         var msg = "识别已完成，匹配度：" + ret + "\r\n（匹配阈值为70，高于阈值则为同一人）";*/
/*                         alert(msg);*/
/*                     }*/
/*                     else {*/
/*                         alert("识别失败！");*/
/*                     }*/
/*                 }*/
/*                 else {*/
/*                     alert("获取图像失败，未识别到二代证！");*/
/*                     return;*/
/*                 }*/
/* */
/*                 plugin().Image_Release(image);*/
/*                 plugin().Image_Release(idcardImage);*/
/*             }*/
/*         }*/
/*         function closeWinAndUpload() {*/
/*             $('#deviceUploadDiv').css({*/
/*                 'margin-top': '-1000px'*/
/*             });*/
/* */
/* */
/*             //处理图片*/
/* */
/*             var http = plugin().Global_CreateHttp("http://gp.wxwall.cn/modules/addData?moduleId=7&upload=1");//asp服务器demo地址*/
/*             //var http = plugin().Global_CreateHttp("http://192.168.1.205:8080/FileStreamDemo/servlet/FileSteamUpload?");//java服务器demo地址*/
/*             if (http)*/
/*             {*/
/*                 for (var i=0;i<imgArr.length;i++) {*/
/*                     var b = plugin().Http_UploadImageFile(http, imgArr[i], imgNameArr[i]);*/
/*                     if (b)*/
/*                     {*/
/*                         alert("上传成功");*/
/*                     }*/
/*                     else*/
/*                     {*/
/*                         alert("上传失败");*/
/*                     }*/
/*                     var res = plugin().Http_Release(http);*/
/*                     console.log(res);*/
/*                 }*/
/* */
/*             }*/
/*             else*/
/*             {*/
/*                 alert("url 错误");*/
/*             }*/
/* */
/*             //处理图片 end*/
/* */
/* */
/* */
/* */
/*             Unload();*/
/* */
/* */
/* */
/* */
/* */
/*         }*/
/*     </script>*/
/*     <script>*/
/*         $(function () {*/
/* */
/* */
/*             //数据详情页面*/
/*             var is_detail = {{ is_detail }} ? true : false;*/
/*             if (is_detail) {*/
/*                 $('input[flag="is_detail"]').remove();*/
/*                 $('.is_detail').remove();*/
/* */
/* */
/*             }*/
/* */
/*             $('#deviceUploadDiv').css({*/
/*                 'margin-top': '-1000px'*/
/*             });*/
/*             $('#huo15close').click(function () {*/
/*                 $('#deviceUploadDiv').css({*/
/*                     'margin-top': '-1000px'*/
/*                 });*/
/* */
/*                 Unload();*/
/*             });*/
/*             $('#btn-device-upload').click(function () {*/
/*                 $('#deviceUploadDiv').css({*/
/*                     'margin-top': '20px'*/
/*                 });*/
/*                 Load();*/
/*             });*/
/*             Load();*/
/* */
/* */
/*         });*/
/*         $(window).unload(function () {*/
/*             Unload();*/
/*         });*/
/* */
/*     </script>*/
/*     <style>*/
/*         .preview img {*/
/*             width:80px*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
