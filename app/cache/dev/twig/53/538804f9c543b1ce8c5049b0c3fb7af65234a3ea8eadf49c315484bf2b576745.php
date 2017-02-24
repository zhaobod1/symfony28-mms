<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7f1237b10c9eaefcdc0760f626282e462ac5ce2a89339d9b279bd1b102d0230c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d0f944fdc06f3531fb95314dd0a634aeab68192299cffa63e5b0ebb663dbac = $this->env->getExtension("native_profiler");
        $__internal_25d0f944fdc06f3531fb95314dd0a634aeab68192299cffa63e5b0ebb663dbac->enter($__internal_25d0f944fdc06f3531fb95314dd0a634aeab68192299cffa63e5b0ebb663dbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d0f944fdc06f3531fb95314dd0a634aeab68192299cffa63e5b0ebb663dbac->leave($__internal_25d0f944fdc06f3531fb95314dd0a634aeab68192299cffa63e5b0ebb663dbac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_088e83766f4f8e1bfb47cb8e54b64c046ad013e877c49d61f79f5fe1ff794fb8 = $this->env->getExtension("native_profiler");
        $__internal_088e83766f4f8e1bfb47cb8e54b64c046ad013e877c49d61f79f5fe1ff794fb8->enter($__internal_088e83766f4f8e1bfb47cb8e54b64c046ad013e877c49d61f79f5fe1ff794fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_088e83766f4f8e1bfb47cb8e54b64c046ad013e877c49d61f79f5fe1ff794fb8->leave($__internal_088e83766f4f8e1bfb47cb8e54b64c046ad013e877c49d61f79f5fe1ff794fb8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f12062625832481ccf635495ada52f258bb998b17bca1d36774fe61d3bf510f8 = $this->env->getExtension("native_profiler");
        $__internal_f12062625832481ccf635495ada52f258bb998b17bca1d36774fe61d3bf510f8->enter($__internal_f12062625832481ccf635495ada52f258bb998b17bca1d36774fe61d3bf510f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f12062625832481ccf635495ada52f258bb998b17bca1d36774fe61d3bf510f8->leave($__internal_f12062625832481ccf635495ada52f258bb998b17bca1d36774fe61d3bf510f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e576c70dd89f52df859fc9afe61a2113c491a3d10cbbf722385d735d639807a = $this->env->getExtension("native_profiler");
        $__internal_4e576c70dd89f52df859fc9afe61a2113c491a3d10cbbf722385d735d639807a->enter($__internal_4e576c70dd89f52df859fc9afe61a2113c491a3d10cbbf722385d735d639807a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e576c70dd89f52df859fc9afe61a2113c491a3d10cbbf722385d735d639807a->leave($__internal_4e576c70dd89f52df859fc9afe61a2113c491a3d10cbbf722385d735d639807a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
