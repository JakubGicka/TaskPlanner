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
        $__internal_e5ed0e0fb7c560e0ff31a11bda93a50c38e7c2c08a530d8355a351dabd19a6e0 = $this->env->getExtension("native_profiler");
        $__internal_e5ed0e0fb7c560e0ff31a11bda93a50c38e7c2c08a530d8355a351dabd19a6e0->enter($__internal_e5ed0e0fb7c560e0ff31a11bda93a50c38e7c2c08a530d8355a351dabd19a6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/showAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ed0e0fb7c560e0ff31a11bda93a50c38e7c2c08a530d8355a351dabd19a6e0->leave($__internal_e5ed0e0fb7c560e0ff31a11bda93a50c38e7c2c08a530d8355a351dabd19a6e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca9a24ee50d42c42e149cbd1b1ac9af3b9260697a9e15fe0c8ab773ec2180946 = $this->env->getExtension("native_profiler");
        $__internal_ca9a24ee50d42c42e149cbd1b1ac9af3b9260697a9e15fe0c8ab773ec2180946->enter($__internal_ca9a24ee50d42c42e149cbd1b1ac9af3b9260697a9e15fe0c8ab773ec2180946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:Task:showAll";
        
        $__internal_ca9a24ee50d42c42e149cbd1b1ac9af3b9260697a9e15fe0c8ab773ec2180946->leave($__internal_ca9a24ee50d42c42e149cbd1b1ac9af3b9260697a9e15fe0c8ab773ec2180946_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b2663c215d371f4197006e9a3a8e52c8f162b7415f6d81040216db18804f61 = $this->env->getExtension("native_profiler");
        $__internal_d2b2663c215d371f4197006e9a3a8e52c8f162b7415f6d81040216db18804f61->enter($__internal_d2b2663c215d371f4197006e9a3a8e52c8f162b7415f6d81040216db18804f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
    ";
        // line 6
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
            // line 7
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
            // line 9
            echo "        <p>No tasks found</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d2b2663c215d371f4197006e9a3a8e52c8f162b7415f6d81040216db18804f61->leave($__internal_d2b2663c215d371f4197006e9a3a8e52c8f162b7415f6d81040216db18804f61_prof);

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
        return array (  89 => 9,  73 => 7,  55 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}app:Resources:Task:showAll{% endblock %}*/
/* */
/* {% block body %}    */
/*     {% for task in tasks %}*/
/*         {{ include(':Task:show.html.twig', {'task': task} )}}*/
/*     {% else %}*/
/*         <p>No tasks found</p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* */
/* */
