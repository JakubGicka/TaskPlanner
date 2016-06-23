<?php

/* Task/show.html.twig */
class __TwigTemplate_57b0e3058a88177dd7a4fc16724d7790de23d61ac27c478589efb8fd21562ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbbac43e0150b9136e3727eeb87d6d89e10c76cefa6680c198d2e90692d6a917 = $this->env->getExtension("native_profiler");
        $__internal_cbbac43e0150b9136e3727eeb87d6d89e10c76cefa6680c198d2e90692d6a917->enter($__internal_cbbac43e0150b9136e3727eeb87d6d89e10c76cefa6680c198d2e90692d6a917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/show.html.twig"));

        // line 1
        echo "<p>
    <p>Name: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name", array()), "html", null, true);
        echo "</p>
    <p>Description: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description", array()), "html", null, true);
        echo "</p>
    <p>Deadline: ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "deadline", array()), "Y-m-d"), "html", null, true);
        echo "</p>
    <p>Priority: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "priority", array()), "html", null, true);
        echo "</p>
    ";
        // line 6
        if ( !(null === $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user", array()))) {
            // line 7
            echo "        <p>User: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "</p>

";
        
        $__internal_cbbac43e0150b9136e3727eeb87d6d89e10c76cefa6680c198d2e90692d6a917->leave($__internal_cbbac43e0150b9136e3727eeb87d6d89e10c76cefa6680c198d2e90692d6a917_prof);

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
        return array (  49 => 9,  43 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <p>*/
/*     <p>Name: {{task.name}}</p>*/
/*     <p>Description: {{task.description}}</p>*/
/*     <p>Deadline: {{task.deadline|date('Y-m-d')}}</p>*/
/*     <p>Priority: {{task.priority}}</p>*/
/*     {% if task.user is not null %}*/
/*         <p>User: {{ task.user.username }}</p>*/
/*     {% endif %}*/
/* </p>*/
/* */
/* */
