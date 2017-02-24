<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8904c916b0562bfab3662cbed62d88126ee3889b890bfe70d6b4d0393ec2409b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.log.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'logInTitleA' => array($this, 'block_logInTitleA'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.log.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2997a1d8b20a0924c34827047bf908647a1f597893572446424696cacf5e1647 = $this->env->getExtension("native_profiler");
        $__internal_2997a1d8b20a0924c34827047bf908647a1f597893572446424696cacf5e1647->enter($__internal_2997a1d8b20a0924c34827047bf908647a1f597893572446424696cacf5e1647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2997a1d8b20a0924c34827047bf908647a1f597893572446424696cacf5e1647->leave($__internal_2997a1d8b20a0924c34827047bf908647a1f597893572446424696cacf5e1647_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce47f9cabb4d1cf12f29277dea053864721b270efb5ab9d4cdff7b7b708e420b = $this->env->getExtension("native_profiler");
        $__internal_ce47f9cabb4d1cf12f29277dea053864721b270efb5ab9d4cdff7b7b708e420b->enter($__internal_ce47f9cabb4d1cf12f29277dea053864721b270efb5ab9d4cdff7b7b708e420b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 11
        $this->displayBlock('logInTitleA', $context, $blocks);
        // line 29
        echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

        ";
        // line 32
        echo "        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>

        ";
        // line 35
        echo "        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>

        <div>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
            <label for=\"remember_me\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            ";
        // line 43
        echo "        </div>

    </form>
    <div class=\"button\">
        <a href=\"#\">下载使用手册</a>
    </div>
";
        
        $__internal_ce47f9cabb4d1cf12f29277dea053864721b270efb5ab9d4cdff7b7b708e420b->leave($__internal_ce47f9cabb4d1cf12f29277dea053864721b270efb5ab9d4cdff7b7b708e420b_prof);

    }

    // line 11
    public function block_logInTitleA($context, array $blocks = array())
    {
        $__internal_a0f5c5a6ad6c4c5b324fa830cbf5852294a173c88f9bd21d95e7c896a3325cfb = $this->env->getExtension("native_profiler");
        $__internal_a0f5c5a6ad6c4c5b324fa830cbf5852294a173c88f9bd21d95e7c896a3325cfb->enter($__internal_a0f5c5a6ad6c4c5b324fa830cbf5852294a173c88f9bd21d95e7c896a3325cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logInTitleA"));

        // line 12
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <h1><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a></h1>
                ";
        } else {
            // line 18
            echo "                    <h1><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></h1>
                ";
        }
        // line 20
        echo "
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 22
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                    <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        ";
        
        $__internal_a0f5c5a6ad6c4c5b324fa830cbf5852294a173c88f9bd21d95e7c896a3325cfb->leave($__internal_a0f5c5a6ad6c4c5b324fa830cbf5852294a173c88f9bd21d95e7c896a3325cfb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  157 => 27,  148 => 24,  143 => 23,  138 => 22,  134 => 21,  131 => 20,  123 => 18,  117 => 15,  113 => 14,  108 => 13,  105 => 12,  99 => 11,  86 => 43,  82 => 41,  77 => 39,  71 => 35,  65 => 32,  59 => 29,  57 => 11,  53 => 10,  50 => 9,  44 => 7,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.log.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         {% block logInTitleA %}*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                     <h1><a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                     </a></h1>*/
/*                 {% else %}*/
/*                     <h1><a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></h1>*/
/*                 {% endif %}*/
/* */
/*             {% for type, messages in app.session.flashBag.all %}*/
/*                 {% for message in messages %}*/
/*                     <div class="{{ type }}">*/
/*                         {{ message|trans({}, 'FOSUserBundle') }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*         {#<label for="username">{{ 'security.login.username'|trans }}</label>#}*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required"/>*/
/* */
/*         {#<label for="password">{{ 'security.login.password'|trans }}</label>#}*/
/*         <input type="password" id="password" name="_password" required="required"/>*/
/* */
/*         <div>*/
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*             <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*             <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}"/>*/
/*             {#<a href="#">忘记密码?</a>#}*/
/*         </div>*/
/* */
/*     </form>*/
/*     <div class="button">*/
/*         <a href="#">下载使用手册</a>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
