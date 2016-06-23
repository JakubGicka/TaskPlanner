<?php

/* Task/showAll.html.twig */
class __TwigTemplate_cbb91d4752aa30935638197b7cb1372a3bac0e4559e860a09b5234fe67222a5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Task/showAll.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_511e6a464ac91ee0c43c36e49cc040074ab59060d4ded581447e78c986c9b936 = $this->env->getExtension("native_profiler");
        $__internal_511e6a464ac91ee0c43c36e49cc040074ab59060d4ded581447e78c986c9b936->enter($__internal_511e6a464ac91ee0c43c36e49cc040074ab59060d4ded581447e78c986c9b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/showAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511e6a464ac91ee0c43c36e49cc040074ab59060d4ded581447e78c986c9b936->leave($__internal_511e6a464ac91ee0c43c36e49cc040074ab59060d4ded581447e78c986c9b936_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_539734c5e44cf18b8edb8e56f6d85ba35569cfb0ec7627ace393869cb199c2bb = $this->env->getExtension("native_profiler");
        $__internal_539734c5e44cf18b8edb8e56f6d85ba35569cfb0ec7627ace393869cb199c2bb->enter($__internal_539734c5e44cf18b8edb8e56f6d85ba35569cfb0ec7627ace393869cb199c2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 5
            echo "        ";
            echo twig_include($this->env, $context, ":Task:show.html.twig", array("task" => $context["task"]));
            echo "
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 7
            echo "        <p>No tasks found</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_539734c5e44cf18b8edb8e56f6d85ba35569cfb0ec7627ace393869cb199c2bb->leave($__internal_539734c5e44cf18b8edb8e56f6d85ba35569cfb0ec7627ace393869cb199c2bb_prof);

    }

    public function getTemplateName()
    {
        return "Task/showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 7,  59 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for task in tasks %}*/
/*         {{ include(':Task:show.html.twig', {'task': task} )}}*/
/*     {% else %}*/
/*         <p>No tasks found</p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* */
/* */
