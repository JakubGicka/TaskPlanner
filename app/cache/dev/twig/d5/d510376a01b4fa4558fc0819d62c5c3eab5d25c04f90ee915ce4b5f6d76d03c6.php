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
        $__internal_1f2806b88e8b628e13c39f623af5d50c90f1261a54651c4f642980365cfd1787 = $this->env->getExtension("native_profiler");
        $__internal_1f2806b88e8b628e13c39f623af5d50c90f1261a54651c4f642980365cfd1787->enter($__internal_1f2806b88e8b628e13c39f623af5d50c90f1261a54651c4f642980365cfd1787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f2806b88e8b628e13c39f623af5d50c90f1261a54651c4f642980365cfd1787->leave($__internal_1f2806b88e8b628e13c39f623af5d50c90f1261a54651c4f642980365cfd1787_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5445ae054d67b51829d7e993f57df0f43284664e9d1ba12fa2efa6fdf29b74a = $this->env->getExtension("native_profiler");
        $__internal_a5445ae054d67b51829d7e993f57df0f43284664e9d1ba12fa2efa6fdf29b74a->enter($__internal_a5445ae054d67b51829d7e993f57df0f43284664e9d1ba12fa2efa6fdf29b74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:Task:edit";
        
        $__internal_a5445ae054d67b51829d7e993f57df0f43284664e9d1ba12fa2efa6fdf29b74a->leave($__internal_a5445ae054d67b51829d7e993f57df0f43284664e9d1ba12fa2efa6fdf29b74a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac20c63f6f3735576fe1010e45c4ed5d28ee09c3f8423e22759567a516307092 = $this->env->getExtension("native_profiler");
        $__internal_ac20c63f6f3735576fe1010e45c4ed5d28ee09c3f8423e22759567a516307092->enter($__internal_ac20c63f6f3735576fe1010e45c4ed5d28ee09c3f8423e22759567a516307092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    ";
        // line 7
        if ($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "isTaskOverdue", array())) {
            // line 8
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
    ";
        }
        // line 10
        echo "    
";
        
        $__internal_ac20c63f6f3735576fe1010e45c4ed5d28ee09c3f8423e22759567a516307092->leave($__internal_ac20c63f6f3735576fe1010e45c4ed5d28ee09c3f8423e22759567a516307092_prof);

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
/*     {% if task.isTaskOverdue %}*/
/*         {{ form(form) }}*/
/*     {% endif %}*/
/*     */
/* {% endblock %}*/
/* */
/* */
