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
        $__internal_6ac56ecd45e5a3fd6843c63c4de34ea3e81524744385649c7172ca2d0d101e25 = $this->env->getExtension("native_profiler");
        $__internal_6ac56ecd45e5a3fd6843c63c4de34ea3e81524744385649c7172ca2d0d101e25->enter($__internal_6ac56ecd45e5a3fd6843c63c4de34ea3e81524744385649c7172ca2d0d101e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac56ecd45e5a3fd6843c63c4de34ea3e81524744385649c7172ca2d0d101e25->leave($__internal_6ac56ecd45e5a3fd6843c63c4de34ea3e81524744385649c7172ca2d0d101e25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0b27b43635568e2d1ec64eccc1212d9b82e1aa77ad2018714f6bb376fdb20b3 = $this->env->getExtension("native_profiler");
        $__internal_f0b27b43635568e2d1ec64eccc1212d9b82e1aa77ad2018714f6bb376fdb20b3->enter($__internal_f0b27b43635568e2d1ec64eccc1212d9b82e1aa77ad2018714f6bb376fdb20b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:Task:edit";
        
        $__internal_f0b27b43635568e2d1ec64eccc1212d9b82e1aa77ad2018714f6bb376fdb20b3->leave($__internal_f0b27b43635568e2d1ec64eccc1212d9b82e1aa77ad2018714f6bb376fdb20b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_090d7bc9480bb7ce22310e6743b46cb1ec88859fb013e09ba0b712db0abd2647 = $this->env->getExtension("native_profiler");
        $__internal_090d7bc9480bb7ce22310e6743b46cb1ec88859fb013e09ba0b712db0abd2647->enter($__internal_090d7bc9480bb7ce22310e6743b46cb1ec88859fb013e09ba0b712db0abd2647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    ";
        // line 7
        if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute((isset($context["deadline"]) ? $context["deadline"] : $this->getContext($context, "deadline")), "date", array()), "Y-m-d"))) {
            // line 8
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
    ";
        }
        // line 10
        echo "    
";
        
        $__internal_090d7bc9480bb7ce22310e6743b46cb1ec88859fb013e09ba0b712db0abd2647->leave($__internal_090d7bc9480bb7ce22310e6743b46cb1ec88859fb013e09ba0b712db0abd2647_prof);

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
        return array (  64 => 10,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}app:Resources:Task:edit{% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     {% if "now"|date('Y-m-d') > deadline.date|date('Y-m-d') %}*/
/*         {{ form(form) }}*/
/*     {% endif %}*/
/*     */
/* {% endblock %}*/
/* */
/* */
