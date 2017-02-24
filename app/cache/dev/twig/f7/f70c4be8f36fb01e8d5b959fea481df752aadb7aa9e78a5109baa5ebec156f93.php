<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d8b44bafe02eb07275caebb41ab12e0e008741d9872c622c632395eee212b888 extends Twig_Template
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
        $__internal_1e92b3f52df22dfb771c6bd0356ff95df216796a3bd7cd9b3e1b770fecd5d0a9 = $this->env->getExtension("native_profiler");
        $__internal_1e92b3f52df22dfb771c6bd0356ff95df216796a3bd7cd9b3e1b770fecd5d0a9->enter($__internal_1e92b3f52df22dfb771c6bd0356ff95df216796a3bd7cd9b3e1b770fecd5d0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e92b3f52df22dfb771c6bd0356ff95df216796a3bd7cd9b3e1b770fecd5d0a9->leave($__internal_1e92b3f52df22dfb771c6bd0356ff95df216796a3bd7cd9b3e1b770fecd5d0a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2563903bf7891432d537821e61c9c376310c9ab3e1a6e8635894234a100ade55 = $this->env->getExtension("native_profiler");
        $__internal_2563903bf7891432d537821e61c9c376310c9ab3e1a6e8635894234a100ade55->enter($__internal_2563903bf7891432d537821e61c9c376310c9ab3e1a6e8635894234a100ade55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2563903bf7891432d537821e61c9c376310c9ab3e1a6e8635894234a100ade55->leave($__internal_2563903bf7891432d537821e61c9c376310c9ab3e1a6e8635894234a100ade55_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_954c40576d77687940c15d22edec096330abae3c1c4c980e75056cea1c2b4b80 = $this->env->getExtension("native_profiler");
        $__internal_954c40576d77687940c15d22edec096330abae3c1c4c980e75056cea1c2b4b80->enter($__internal_954c40576d77687940c15d22edec096330abae3c1c4c980e75056cea1c2b4b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_954c40576d77687940c15d22edec096330abae3c1c4c980e75056cea1c2b4b80->leave($__internal_954c40576d77687940c15d22edec096330abae3c1c4c980e75056cea1c2b4b80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f47ed737a32178547a1a48df8b1e5b33e4d75037816495dc59173ee0840ed17 = $this->env->getExtension("native_profiler");
        $__internal_9f47ed737a32178547a1a48df8b1e5b33e4d75037816495dc59173ee0840ed17->enter($__internal_9f47ed737a32178547a1a48df8b1e5b33e4d75037816495dc59173ee0840ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f47ed737a32178547a1a48df8b1e5b33e4d75037816495dc59173ee0840ed17->leave($__internal_9f47ed737a32178547a1a48df8b1e5b33e4d75037816495dc59173ee0840ed17_prof);

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
