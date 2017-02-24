<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_393a77b6a18bba8fe83e6f2ff3f0750ae5f75c3b4b41f6bbfbd9b13cc98201d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7a39f2300be5f2bcd78e905b0a40d7a8b6e6ed11529c50c86508e3799e48c70 = $this->env->getExtension("native_profiler");
        $__internal_d7a39f2300be5f2bcd78e905b0a40d7a8b6e6ed11529c50c86508e3799e48c70->enter($__internal_d7a39f2300be5f2bcd78e905b0a40d7a8b6e6ed11529c50c86508e3799e48c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a39f2300be5f2bcd78e905b0a40d7a8b6e6ed11529c50c86508e3799e48c70->leave($__internal_d7a39f2300be5f2bcd78e905b0a40d7a8b6e6ed11529c50c86508e3799e48c70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_954d610cd0282174010ffab6bf934ece80a1659fd5fa1232233a76b1e476d686 = $this->env->getExtension("native_profiler");
        $__internal_954d610cd0282174010ffab6bf934ece80a1659fd5fa1232233a76b1e476d686->enter($__internal_954d610cd0282174010ffab6bf934ece80a1659fd5fa1232233a76b1e476d686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_954d610cd0282174010ffab6bf934ece80a1659fd5fa1232233a76b1e476d686->leave($__internal_954d610cd0282174010ffab6bf934ece80a1659fd5fa1232233a76b1e476d686_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db03b915e75f604eb5dd3809eef97fbb5782b71c1c8973c9d4ae4531a56ecd38 = $this->env->getExtension("native_profiler");
        $__internal_db03b915e75f604eb5dd3809eef97fbb5782b71c1c8973c9d4ae4531a56ecd38->enter($__internal_db03b915e75f604eb5dd3809eef97fbb5782b71c1c8973c9d4ae4531a56ecd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_db03b915e75f604eb5dd3809eef97fbb5782b71c1c8973c9d4ae4531a56ecd38->leave($__internal_db03b915e75f604eb5dd3809eef97fbb5782b71c1c8973c9d4ae4531a56ecd38_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30d1f365ceb1c1778cdd3856bb5a870e4cb1d795e48c5526aff405543e922d3 = $this->env->getExtension("native_profiler");
        $__internal_c30d1f365ceb1c1778cdd3856bb5a870e4cb1d795e48c5526aff405543e922d3->enter($__internal_c30d1f365ceb1c1778cdd3856bb5a870e4cb1d795e48c5526aff405543e922d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c30d1f365ceb1c1778cdd3856bb5a870e4cb1d795e48c5526aff405543e922d3->leave($__internal_c30d1f365ceb1c1778cdd3856bb5a870e4cb1d795e48c5526aff405543e922d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
