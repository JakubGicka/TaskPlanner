<?php

/* Task/show.html.twig */
class __TwigTemplate_57b0e3058a88177dd7a4fc16724d7790de23d61ac27c478589efb8fd21562ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Task/show.html.twig", 1);
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
        $__internal_336adc5f7dfabfa88876390ebbcbbf0090f9d130efa9d1ab3a6bf1da27d5459a = $this->env->getExtension("native_profiler");
        $__internal_336adc5f7dfabfa88876390ebbcbbf0090f9d130efa9d1ab3a6bf1da27d5459a->enter($__internal_336adc5f7dfabfa88876390ebbcbbf0090f9d130efa9d1ab3a6bf1da27d5459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336adc5f7dfabfa88876390ebbcbbf0090f9d130efa9d1ab3a6bf1da27d5459a->leave($__internal_336adc5f7dfabfa88876390ebbcbbf0090f9d130efa9d1ab3a6bf1da27d5459a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62c4ff5fb20aa4d5e44a4a4abbbb8722457daf8f3e3ab27100f446fa79e94e06 = $this->env->getExtension("native_profiler");
        $__internal_62c4ff5fb20aa4d5e44a4a4abbbb8722457daf8f3e3ab27100f446fa79e94e06->enter($__internal_62c4ff5fb20aa4d5e44a4a4abbbb8722457daf8f3e3ab27100f446fa79e94e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:default:show";
        
        $__internal_62c4ff5fb20aa4d5e44a4a4abbbb8722457daf8f3e3ab27100f446fa79e94e06->leave($__internal_62c4ff5fb20aa4d5e44a4a4abbbb8722457daf8f3e3ab27100f446fa79e94e06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cfa47d5f201142147f351d06aca978b7aeb13c661ed0b9be2ac1f17d32fd867 = $this->env->getExtension("native_profiler");
        $__internal_8cfa47d5f201142147f351d06aca978b7aeb13c661ed0b9be2ac1f17d32fd867->enter($__internal_8cfa47d5f201142147f351d06aca978b7aeb13c661ed0b9be2ac1f17d32fd867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<p>
    <p>Id: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()), "html", null, true);
        echo "</p>
    <p>Name: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name", array()), "html", null, true);
        echo "</p>
    <p>Description: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description", array()), "html", null, true);
        echo "</p>
    <p>Deadline: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "deadline", array()), "Y-m-d"), "html", null, true);
        echo "</p>
    <p>Priority: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "priority", array()), "html", null, true);
        echo "</p>
    <p>Comment: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "comment", array()), "html", null, true);
        echo "</p>
    ";
        // line 13
        if ( !(null === $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user", array()))) {
            // line 14
            echo "        <p>User: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
    ";
        }
        // line 16
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_task_edit", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\">Edytuj zadanie</a>
    <br>
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_task_comment", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\">Skomentuj zadanie</a>
</p>
";
        
        $__internal_8cfa47d5f201142147f351d06aca978b7aeb13c661ed0b9be2ac1f17d32fd867->leave($__internal_8cfa47d5f201142147f351d06aca978b7aeb13c661ed0b9be2ac1f17d32fd867_prof);

    }

    public function getTemplateName()
    {
        return "Task/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  88 => 16,  82 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}app:Resources:default:show{% endblock %}*/
/* */
/* {% block body %}*/
/* <p>*/
/*     <p>Id: {{task.id}}</p>*/
/*     <p>Name: {{task.name}}</p>*/
/*     <p>Description: {{task.description}}</p>*/
/*     <p>Deadline: {{task.deadline|date('Y-m-d')}}</p>*/
/*     <p>Priority: {{task.priority}}</p>*/
/*     <p>Comment: {{task.comment}}</p>*/
/*     {% if task.user is not null %}*/
/*         <p>User: {{ task.user.username }}</p>*/
/*     {% endif %}*/
/*     <a href="{{ path('app_task_edit', {'id': task.id}) }}">Edytuj zadanie</a>*/
/*     <br>*/
/*     <a href="{{ path('app_task_comment', {'id': task.id}) }}">Skomentuj zadanie</a>*/
/* </p>*/
/* {% endblock %}*/
/* */
/* */
