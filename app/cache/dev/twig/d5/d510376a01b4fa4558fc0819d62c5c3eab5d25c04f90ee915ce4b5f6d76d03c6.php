<?php

/* Task/edit.html.twig */
class __TwigTemplate_1e35ab24c2c17f70d59ed67d0632244a5aeec7784b190830900e13cafdca7cea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Task/edit.html.twig", 1);
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
        $__internal_2f13520cb841420a4414f17baec2d1179f3b081e6d3ee1749aa4cea0edee3059 = $this->env->getExtension("native_profiler");
        $__internal_2f13520cb841420a4414f17baec2d1179f3b081e6d3ee1749aa4cea0edee3059->enter($__internal_2f13520cb841420a4414f17baec2d1179f3b081e6d3ee1749aa4cea0edee3059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f13520cb841420a4414f17baec2d1179f3b081e6d3ee1749aa4cea0edee3059->leave($__internal_2f13520cb841420a4414f17baec2d1179f3b081e6d3ee1749aa4cea0edee3059_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13d9a5d8cd78ff5fd15edfd63cfecd8a6ffae702ee972d84d8c3a0b7162086b0 = $this->env->getExtension("native_profiler");
        $__internal_13d9a5d8cd78ff5fd15edfd63cfecd8a6ffae702ee972d84d8c3a0b7162086b0->enter($__internal_13d9a5d8cd78ff5fd15edfd63cfecd8a6ffae702ee972d84d8c3a0b7162086b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:default:create";
        
        $__internal_13d9a5d8cd78ff5fd15edfd63cfecd8a6ffae702ee972d84d8c3a0b7162086b0->leave($__internal_13d9a5d8cd78ff5fd15edfd63cfecd8a6ffae702ee972d84d8c3a0b7162086b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b88744ae643cc3c5f3f5f991970c4bb13d59054f57a8622cde5518f90bf52b32 = $this->env->getExtension("native_profiler");
        $__internal_b88744ae643cc3c5f3f5f991970c4bb13d59054f57a8622cde5518f90bf52b32->enter($__internal_b88744ae643cc3c5f3f5f991970c4bb13d59054f57a8622cde5518f90bf52b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_b88744ae643cc3c5f3f5f991970c4bb13d59054f57a8622cde5518f90bf52b32->leave($__internal_b88744ae643cc3c5f3f5f991970c4bb13d59054f57a8622cde5518f90bf52b32_prof);

    }

    public function getTemplateName()
    {
        return "Task/edit.html.twig";
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
/* {% block title %}app:Resources:default:create{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
