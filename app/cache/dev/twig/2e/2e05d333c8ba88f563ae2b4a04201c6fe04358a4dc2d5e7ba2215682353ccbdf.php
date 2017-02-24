<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_98a3cb534a6bb32bbb2aeb4616865b4001c0b0c447b3449c6a8a0e42d4a62be3 extends Twig_Template
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
        $__internal_7ab1f4282fc26e5c94e9d989835b4242d45d36fd102c058c46a647eb1c99cae4 = $this->env->getExtension("native_profiler");
        $__internal_7ab1f4282fc26e5c94e9d989835b4242d45d36fd102c058c46a647eb1c99cae4->enter($__internal_7ab1f4282fc26e5c94e9d989835b4242d45d36fd102c058c46a647eb1c99cae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ab1f4282fc26e5c94e9d989835b4242d45d36fd102c058c46a647eb1c99cae4->leave($__internal_7ab1f4282fc26e5c94e9d989835b4242d45d36fd102c058c46a647eb1c99cae4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a6a5a9da6ad080aa4a08f9a200a6d7dc4252d9eab298064a3dec1a4a324cfb0 = $this->env->getExtension("native_profiler");
        $__internal_3a6a5a9da6ad080aa4a08f9a200a6d7dc4252d9eab298064a3dec1a4a324cfb0->enter($__internal_3a6a5a9da6ad080aa4a08f9a200a6d7dc4252d9eab298064a3dec1a4a324cfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a6a5a9da6ad080aa4a08f9a200a6d7dc4252d9eab298064a3dec1a4a324cfb0->leave($__internal_3a6a5a9da6ad080aa4a08f9a200a6d7dc4252d9eab298064a3dec1a4a324cfb0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f69f98946cc76268700bef648d1337efb994bfc9183d34f8c5d9b27181d9a8e = $this->env->getExtension("native_profiler");
        $__internal_2f69f98946cc76268700bef648d1337efb994bfc9183d34f8c5d9b27181d9a8e->enter($__internal_2f69f98946cc76268700bef648d1337efb994bfc9183d34f8c5d9b27181d9a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f69f98946cc76268700bef648d1337efb994bfc9183d34f8c5d9b27181d9a8e->leave($__internal_2f69f98946cc76268700bef648d1337efb994bfc9183d34f8c5d9b27181d9a8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_66f9c5ad0de22c22958343e340267410ce7effee55fa1c1ff8dfb9e2834134e7 = $this->env->getExtension("native_profiler");
        $__internal_66f9c5ad0de22c22958343e340267410ce7effee55fa1c1ff8dfb9e2834134e7->enter($__internal_66f9c5ad0de22c22958343e340267410ce7effee55fa1c1ff8dfb9e2834134e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_66f9c5ad0de22c22958343e340267410ce7effee55fa1c1ff8dfb9e2834134e7->leave($__internal_66f9c5ad0de22c22958343e340267410ce7effee55fa1c1ff8dfb9e2834134e7_prof);

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
