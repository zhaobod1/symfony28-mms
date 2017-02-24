<?php

/* form_widget_style_multiple_fileUp.html.twig */
class __TwigTemplate_96dce8e5b95d7263d9d2081af59c71e3c56badee2cc47b0ec3ec2d20e712af45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9825735b5de44d83e2721b890056805498d9d6b895dd8db7df93bc4dad7d7678 = $this->env->getExtension("native_profiler");
        $__internal_9825735b5de44d83e2721b890056805498d9d6b895dd8db7df93bc4dad7d7678->enter($__internal_9825735b5de44d83e2721b890056805498d9d6b895dd8db7df93bc4dad7d7678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_widget_style_multiple_fileUp.html.twig"));

        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        
        $__internal_9825735b5de44d83e2721b890056805498d9d6b895dd8db7df93bc4dad7d7678->leave($__internal_9825735b5de44d83e2721b890056805498d9d6b895dd8db7df93bc4dad7d7678_prof);

    }

    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_940bc251ccbb358600f1b615233df52f0a603ace57a487d3383de4d87a508a4e = $this->env->getExtension("native_profiler");
        $__internal_940bc251ccbb358600f1b615233df52f0a603ace57a487d3383de4d87a508a4e->enter($__internal_940bc251ccbb358600f1b615233df52f0a603ace57a487d3383de4d87a508a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 7
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "file")) {
            // line 8
            echo "
        <div class=\"huo15-fileupload\">
            <input class=\"full_name\" type=\"hidden\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
            <input class=\"form_full_name\" type=\"hidden\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
            echo "\">

            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type=\"hidden\" name=\"redirect\" value=\"https://blueimp.github.io/jQuery-File-Upload/\">
            </noscript>
            <div class=\"clearfix margin-top-10\">
                <span class=\"label label-success\">注意!</span> 图片大小不能超过2M.
            </div>
            <div style=\"height: 5px;\"></div>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class=\"row  fileupload-buttonbar\">
                <div class=\"col-lg-7\">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <button type=\"button\" id=\"btn-device-upload\" class=\"btn is_detail btn-primary fileinput-button\">
                        拍照上传
                    </button>

                <span class=\"btn btn-success is_detail fileinput-button\">
                    <i class=\"glyphicon is_detail glyphicon-plus\"></i>
                    <span>本地批量上传</span>
                    <input flag=\"is_detail\" type=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " multiple>
                </span>
                    <button flag=\"is_detail\" type=\"submit\" class=\"btn is_detail btn-primary start\">
                        <i class=\"glyphicon glyphicon-upload\"></i>
                        <span>开始上传</span>
                    </button>
                    <button flag=\"is_detail\" type=\"reset\" class=\"btn is_detail btn-warning cancel\">
                        <i class=\"glyphicon glyphicon-ban-circle\"></i>
                        <span>取消上传</span>
                    </button>
                    <button flag=\"is_detail\" type=\"button\" class=\"btn is_detail btn-danger delete\">
                        <i class=\"glyphicon glyphicon-trash\"></i>
                        <span>全部删除</span>
                    </button>
                    <input flag=\"is_detail\" type=\"checkbox\" class=\"toggle\">
                    <!-- The global file processing state -->
                    <span class=\"fileupload-process\"></span>
                </div>
                <!-- The global progress state -->
                <div class=\"col-lg-5 fileupload-progress fade\">
                    <!-- The global progress bar -->
                    <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\"
                         aria-valuemax=\"100\">
                        <div class=\"progress-bar progress-bar-success\" style=\"width:0%;\"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class=\"progress-extended\">&nbsp;</div>
                </div>
            </div>

            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\">
                <tbody class=\"files\"></tbody>
            </table>


        </div>














        <!-- The template to display files available for upload -->
        <script id=\"template-upload-";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" type=\"text/x-tmpl\">
            ";
            // line 114
            echo "
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-upload fade\">
        <td>
            <span class=\"preview\"></span>
        </td>
        <td>
            <p class=\"name\">{%=file.name%}</p>
            <strong class=\"error text-danger\"></strong>
        </td>
        <td>
            <p class=\"size\">Processing...</p>
            <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuenow=\"0\"><div class=\"progress-bar progress-bar-success\" style=\"width:0%;\"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class=\"btn btn-primary start\" disabled>
                    <i class=\"glyphicon glyphicon-upload\"></i>
                    <span>上传</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class=\"btn btn-warning cancel\">
                    <i class=\"glyphicon glyphicon-ban-circle\"></i>
                    <span>取消</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
";
            echo "

        </script>


        <!-- The template to display files available for download -->
        <script id=\"template-download-";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" type=\"text/x-tmpl\">
";
            // line 163
            echo "
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-download fade\">
        <td>
            <span class=\"preview\">
                {% if (file.thumbnailUrl) { %}
                    <a href=\"{%=file.url%}\" title=\"{%=file.name%}\" download=\"{%=file.name%}\" data-gallery><img src=\"{%=file.thumbnailUrl%}\"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class=\"name\">
                {% if (file.url) { %}
                    <a href=\"{%=file.url%}\" title=\"{%=file.name%}\" download=\"{%=file.name%}\" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class=\"label label-danger\">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class=\"btn btn-danger is_detail delete\" data-type=\"{%=file.deleteType%}\" data-url=\"{%=file.deleteUrl%}\"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{\"withCredentials\":true}'{% } %}>
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    <span>删除</span>
                </button>
                <input type=\"checkbox\" name=\"delete\" value=\"1\" class=\"toggle\">
            {% } else { %}
                <button class=\"btn btn-warning cancel\">
                    <i class=\"glyphicon glyphicon-ban-circle\"></i>
                    <span>Cancel</span>
                </button>
            {% } %}

        </td>
    </tr>
{% } %}
";
            echo "



        </script>




    ";
        } else {
            // line 173
            echo "        <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
    ";
        }
        
        $__internal_940bc251ccbb358600f1b615233df52f0a603ace57a487d3383de4d87a508a4e->leave($__internal_940bc251ccbb358600f1b615233df52f0a603ace57a487d3383de4d87a508a4e_prof);

    }

    public function getTemplateName()
    {
        return "form_widget_style_multiple_fileUp.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  229 => 173,  174 => 163,  170 => 120,  131 => 114,  127 => 83,  70 => 31,  47 => 11,  43 => 10,  39 => 8,  37 => 7,  35 => 6,  23 => 5,);
    }
}
/* {# Widgets #}*/
/* */
/* */
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {% if type == 'file' %}*/
/* */
/*         <div class="huo15-fileupload">*/
/*             <input class="full_name" type="hidden" value="{{ id }}">*/
/*             <input class="form_full_name" type="hidden" value="{{ full_name }}">*/
/* */
/*             <!-- Redirect browsers with JavaScript disabled to the origin page -->*/
/*             <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/">*/
/*             </noscript>*/
/*             <div class="clearfix margin-top-10">*/
/*                 <span class="label label-success">注意!</span> 图片大小不能超过2M.*/
/*             </div>*/
/*             <div style="height: 5px;"></div>*/
/*             <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->*/
/*             <div class="row  fileupload-buttonbar">*/
/*                 <div class="col-lg-7">*/
/*                     <!-- The fileinput-button span is used to style the file input field as button -->*/
/*                     <button type="button" id="btn-device-upload" class="btn is_detail btn-primary fileinput-button">*/
/*                         拍照上传*/
/*                     </button>*/
/* */
/*                 <span class="btn btn-success is_detail fileinput-button">*/
/*                     <i class="glyphicon is_detail glyphicon-plus"></i>*/
/*                     <span>本地批量上传</span>*/
/*                     <input flag="is_detail" type="{{ type }}" {{ block('widget_attributes') }} multiple>*/
/*                 </span>*/
/*                     <button flag="is_detail" type="submit" class="btn is_detail btn-primary start">*/
/*                         <i class="glyphicon glyphicon-upload"></i>*/
/*                         <span>开始上传</span>*/
/*                     </button>*/
/*                     <button flag="is_detail" type="reset" class="btn is_detail btn-warning cancel">*/
/*                         <i class="glyphicon glyphicon-ban-circle"></i>*/
/*                         <span>取消上传</span>*/
/*                     </button>*/
/*                     <button flag="is_detail" type="button" class="btn is_detail btn-danger delete">*/
/*                         <i class="glyphicon glyphicon-trash"></i>*/
/*                         <span>全部删除</span>*/
/*                     </button>*/
/*                     <input flag="is_detail" type="checkbox" class="toggle">*/
/*                     <!-- The global file processing state -->*/
/*                     <span class="fileupload-process"></span>*/
/*                 </div>*/
/*                 <!-- The global progress state -->*/
/*                 <div class="col-lg-5 fileupload-progress fade">*/
/*                     <!-- The global progress bar -->*/
/*                     <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"*/
/*                          aria-valuemax="100">*/
/*                         <div class="progress-bar progress-bar-success" style="width:0%;"></div>*/
/*                     </div>*/
/*                     <!-- The extended global progress state -->*/
/*                     <div class="progress-extended">&nbsp;</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- The table listing the files available for upload/download -->*/
/*             <table role="presentation" class="table table-striped">*/
/*                 <tbody class="files"></tbody>*/
/*             </table>*/
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         <!-- The template to display files available for upload -->*/
/*         <script id="template-upload-{{ id }}" type="text/x-tmpl">*/
/*             {% raw %}*/
/* {% for (var i=0, file; file=o.files[i]; i++) { %}*/
/*     <tr class="template-upload fade">*/
/*         <td>*/
/*             <span class="preview"></span>*/
/*         </td>*/
/*         <td>*/
/*             <p class="name">{%=file.name%}</p>*/
/*             <strong class="error text-danger"></strong>*/
/*         </td>*/
/*         <td>*/
/*             <p class="size">Processing...</p>*/
/*             <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>*/
/*         </td>*/
/*         <td>*/
/*             {% if (!i && !o.options.autoUpload) { %}*/
/*                 <button class="btn btn-primary start" disabled>*/
/*                     <i class="glyphicon glyphicon-upload"></i>*/
/*                     <span>上传</span>*/
/*                 </button>*/
/*             {% } %}*/
/*             {% if (!i) { %}*/
/*                 <button class="btn btn-warning cancel">*/
/*                     <i class="glyphicon glyphicon-ban-circle"></i>*/
/*                     <span>取消</span>*/
/*                 </button>*/
/*             {% } %}*/
/*         </td>*/
/*     </tr>*/
/* {% } %}*/
/* {% endraw %}*/
/* */
/*         </script>*/
/* */
/* */
/*         <!-- The template to display files available for download -->*/
/*         <script id="template-download-{{ id }}" type="text/x-tmpl">*/
/* {% raw %}*/
/* {% for (var i=0, file; file=o.files[i]; i++) { %}*/
/*     <tr class="template-download fade">*/
/*         <td>*/
/*             <span class="preview">*/
/*                 {% if (file.thumbnailUrl) { %}*/
/*                     <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>*/
/*                 {% } %}*/
/*             </span>*/
/*         </td>*/
/*         <td>*/
/*             <p class="name">*/
/*                 {% if (file.url) { %}*/
/*                     <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>*/
/*                 {% } else { %}*/
/*                     <span>{%=file.name%}</span>*/
/*                 {% } %}*/
/*             </p>*/
/*             {% if (file.error) { %}*/
/*                 <div><span class="label label-danger">Error</span> {%=file.error%}</div>*/
/*             {% } %}*/
/*         </td>*/
/*         <td>*/
/*             <span class="size">{%=o.formatFileSize(file.size)%}</span>*/
/*         </td>*/
/*         <td>*/
/*             {% if (file.deleteUrl) { %}*/
/*                 <button class="btn btn-danger is_detail delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>*/
/*                     <i class="glyphicon glyphicon-trash"></i>*/
/*                     <span>删除</span>*/
/*                 </button>*/
/*                 <input type="checkbox" name="delete" value="1" class="toggle">*/
/*             {% } else { %}*/
/*                 <button class="btn btn-warning cancel">*/
/*                     <i class="glyphicon glyphicon-ban-circle"></i>*/
/*                     <span>Cancel</span>*/
/*                 </button>*/
/*             {% } %}*/
/* */
/*         </td>*/
/*     </tr>*/
/* {% } %}*/
/* {% endraw %}*/
/* */
/* */
/* */
/*         </script>*/
/* */
/* */
/* */
/* */
/*     {% else %}*/
/*         <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* {%- endblock form_widget_simple -%}*/
/* */
/* */
