<?php

/* default/create.html.twig */
class __TwigTemplate_7e8c5f89aca2e21a8ead185c0be4aa40dc35e86358b4277dd3f5b1b3a6ab3f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e529233d15627cc785df8a5aad482cd8ff14ce3514add8c41ea612c1d36b132 = $this->env->getExtension("native_profiler");
        $__internal_5e529233d15627cc785df8a5aad482cd8ff14ce3514add8c41ea612c1d36b132->enter($__internal_5e529233d15627cc785df8a5aad482cd8ff14ce3514add8c41ea612c1d36b132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e529233d15627cc785df8a5aad482cd8ff14ce3514add8c41ea612c1d36b132->leave($__internal_5e529233d15627cc785df8a5aad482cd8ff14ce3514add8c41ea612c1d36b132_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf93e75ee0ba06135b7ead1f9a9772c1b649825a15a6f399481273145c5bbdb5 = $this->env->getExtension("native_profiler");
        $__internal_bf93e75ee0ba06135b7ead1f9a9772c1b649825a15a6f399481273145c5bbdb5->enter($__internal_bf93e75ee0ba06135b7ead1f9a9772c1b649825a15a6f399481273145c5bbdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:default:add_task";
        
        $__internal_bf93e75ee0ba06135b7ead1f9a9772c1b649825a15a6f399481273145c5bbdb5->leave($__internal_bf93e75ee0ba06135b7ead1f9a9772c1b649825a15a6f399481273145c5bbdb5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdef3335e99425748ac61fc212da519da95d3ababccf9fddef17e639bdf95a76 = $this->env->getExtension("native_profiler");
        $__internal_cdef3335e99425748ac61fc212da519da95d3ababccf9fddef17e639bdf95a76->enter($__internal_cdef3335e99425748ac61fc212da519da95d3ababccf9fddef17e639bdf95a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_cdef3335e99425748ac61fc212da519da95d3ababccf9fddef17e639bdf95a76->leave($__internal_cdef3335e99425748ac61fc212da519da95d3ababccf9fddef17e639bdf95a76_prof);

    }

    public function getTemplateName()
    {
        return "default/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}app:Resources:default:add_task{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
