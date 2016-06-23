<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f4dec681b153e85fb81a2da2e9ba52a7bf2d90e5b9431e3bbe23baad6792a398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_34d71e25b29b2cf381a4dd340ad4cf3287b17477451794e28e9ebf7659b92cbe = $this->env->getExtension("native_profiler");
        $__internal_34d71e25b29b2cf381a4dd340ad4cf3287b17477451794e28e9ebf7659b92cbe->enter($__internal_34d71e25b29b2cf381a4dd340ad4cf3287b17477451794e28e9ebf7659b92cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d71e25b29b2cf381a4dd340ad4cf3287b17477451794e28e9ebf7659b92cbe->leave($__internal_34d71e25b29b2cf381a4dd340ad4cf3287b17477451794e28e9ebf7659b92cbe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f106732f8bb4ae29ca58cd8b121d9bcf480db25d41019f32ecae35328ec33c90 = $this->env->getExtension("native_profiler");
        $__internal_f106732f8bb4ae29ca58cd8b121d9bcf480db25d41019f32ecae35328ec33c90->enter($__internal_f106732f8bb4ae29ca58cd8b121d9bcf480db25d41019f32ecae35328ec33c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f106732f8bb4ae29ca58cd8b121d9bcf480db25d41019f32ecae35328ec33c90->leave($__internal_f106732f8bb4ae29ca58cd8b121d9bcf480db25d41019f32ecae35328ec33c90_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
