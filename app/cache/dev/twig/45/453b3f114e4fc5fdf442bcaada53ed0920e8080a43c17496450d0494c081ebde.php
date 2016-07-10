<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8dc3eef2fc59e072f51ad5332eae6773d17dbc50defc0edda4ac01b9d972ad58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79cec7171d361b242931dfc88d0d7c6320ee0986f1fd268db06c485467fbfdf8 = $this->env->getExtension("native_profiler");
        $__internal_79cec7171d361b242931dfc88d0d7c6320ee0986f1fd268db06c485467fbfdf8->enter($__internal_79cec7171d361b242931dfc88d0d7c6320ee0986f1fd268db06c485467fbfdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79cec7171d361b242931dfc88d0d7c6320ee0986f1fd268db06c485467fbfdf8->leave($__internal_79cec7171d361b242931dfc88d0d7c6320ee0986f1fd268db06c485467fbfdf8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c97e52a006ef5d97098b81d3730fc93ab8f54f404f80f3a18f0e0c1efb11b02c = $this->env->getExtension("native_profiler");
        $__internal_c97e52a006ef5d97098b81d3730fc93ab8f54f404f80f3a18f0e0c1efb11b02c->enter($__internal_c97e52a006ef5d97098b81d3730fc93ab8f54f404f80f3a18f0e0c1efb11b02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <h4><a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Wróć do strony głównej</a></h4>
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_c97e52a006ef5d97098b81d3730fc93ab8f54f404f80f3a18f0e0c1efb11b02c->leave($__internal_c97e52a006ef5d97098b81d3730fc93ab8f54f404f80f3a18f0e0c1efb11b02c_prof);

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
        return array (  86 => 23,  81 => 21,  74 => 17,  69 => 15,  65 => 14,  60 => 12,  56 => 11,  53 => 10,  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <h4><a href="{{ path('homepage') }}">Wróć do strony głównej</a></h4>*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
