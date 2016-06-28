<?php

/* :Task:show.html.twig */
class __TwigTemplate_57b0e3058a88177dd7a4fc16724d7790de23d61ac27c478589efb8fd21562ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Task:show.html.twig", 1);
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
        $__internal_391fb59435568c3405551377358679fd967e176ab7a5153f6507a3f8cefdac48 = $this->env->getExtension("native_profiler");
        $__internal_391fb59435568c3405551377358679fd967e176ab7a5153f6507a3f8cefdac48->enter($__internal_391fb59435568c3405551377358679fd967e176ab7a5153f6507a3f8cefdac48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Task:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391fb59435568c3405551377358679fd967e176ab7a5153f6507a3f8cefdac48->leave($__internal_391fb59435568c3405551377358679fd967e176ab7a5153f6507a3f8cefdac48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5854b2a9722a5f9ce7efcd25ff4176d3cd39f728fcabba0f95f60f0a4b852b3 = $this->env->getExtension("native_profiler");
        $__internal_a5854b2a9722a5f9ce7efcd25ff4176d3cd39f728fcabba0f95f60f0a4b852b3->enter($__internal_a5854b2a9722a5f9ce7efcd25ff4176d3cd39f728fcabba0f95f60f0a4b852b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:Task:show";
        
        $__internal_a5854b2a9722a5f9ce7efcd25ff4176d3cd39f728fcabba0f95f60f0a4b852b3->leave($__internal_a5854b2a9722a5f9ce7efcd25ff4176d3cd39f728fcabba0f95f60f0a4b852b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f3a95774eeeb63aeb5138d4780783b7b8db652930d883ef75409774079a3d8c = $this->env->getExtension("native_profiler");
        $__internal_3f3a95774eeeb63aeb5138d4780783b7b8db652930d883ef75409774079a3d8c->enter($__internal_3f3a95774eeeb63aeb5138d4780783b7b8db652930d883ef75409774079a3d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<p>
    <p>Category: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "category", array()), "html", null, true);
        echo "</p>
    <p>Id: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()), "html", null, true);
        echo "</p>
    <p>Name: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name", array()), "html", null, true);
        echo "</p>
    <p>Description: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description", array()), "html", null, true);
        echo "</p>
    <p>Deadline: ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "deadline", array()), "Y-m-d"), "html", null, true);
        echo "</p>
    <p>Priority: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "priority", array()), "html", null, true);
        echo "</p>
    <p>Status: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "status", array()), "html", null, true);
        echo "</p>
    <p>Comment: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "comment", array()), "html", null, true);
        echo "</p>
    ";
        // line 15
        if ( !(null === $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user", array()))) {
            // line 16
            echo "        <p>User: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
    ";
        }
        // line 18
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_task_edit", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\">Edytuj zadanie</a>
    <br>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_task_comment", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\">Skomentuj zadanie</a>
</p>
";
        
        $__internal_3f3a95774eeeb63aeb5138d4780783b7b8db652930d883ef75409774079a3d8c->leave($__internal_3f3a95774eeeb63aeb5138d4780783b7b8db652930d883ef75409774079a3d8c_prof);

    }

    public function getTemplateName()
    {
        return ":Task:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  96 => 18,  90 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}app:Resources:Task:show{% endblock %}*/
/* */
/* {% block body %}*/
/* <p>*/
/*     <p>Category: {{task.category}}</p>*/
/*     <p>Id: {{task.id}}</p>*/
/*     <p>Name: {{task.name}}</p>*/
/*     <p>Description: {{task.description}}</p>*/
/*     <p>Deadline: {{task.deadline|date('Y-m-d')}}</p>*/
/*     <p>Priority: {{task.priority}}</p>*/
/*     <p>Status: {{task.status}}</p>*/
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
