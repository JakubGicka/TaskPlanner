<?php

/* Task/create.html.twig */
class __TwigTemplate_93f54421b26b0ebb47e7a34b970ffad0bdc0372555447dea88ac4c2783ffd1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Task/create.html.twig", 1);
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
        $__internal_c4944396610a7fba9f3b77e3449b598cd7d1338c56669266a05df0b8ea128086 = $this->env->getExtension("native_profiler");
        $__internal_c4944396610a7fba9f3b77e3449b598cd7d1338c56669266a05df0b8ea128086->enter($__internal_c4944396610a7fba9f3b77e3449b598cd7d1338c56669266a05df0b8ea128086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4944396610a7fba9f3b77e3449b598cd7d1338c56669266a05df0b8ea128086->leave($__internal_c4944396610a7fba9f3b77e3449b598cd7d1338c56669266a05df0b8ea128086_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af586e6a6a35710c8f38cbbd287ad9804739c6946926a99c69cdd87599d65623 = $this->env->getExtension("native_profiler");
        $__internal_af586e6a6a35710c8f38cbbd287ad9804739c6946926a99c69cdd87599d65623->enter($__internal_af586e6a6a35710c8f38cbbd287ad9804739c6946926a99c69cdd87599d65623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:default:create";
        
        $__internal_af586e6a6a35710c8f38cbbd287ad9804739c6946926a99c69cdd87599d65623->leave($__internal_af586e6a6a35710c8f38cbbd287ad9804739c6946926a99c69cdd87599d65623_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_952a2029eb9d90c12296312029d6d701c69bf6f62eb37b385972895232194bb0 = $this->env->getExtension("native_profiler");
        $__internal_952a2029eb9d90c12296312029d6d701c69bf6f62eb37b385972895232194bb0->enter($__internal_952a2029eb9d90c12296312029d6d701c69bf6f62eb37b385972895232194bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_952a2029eb9d90c12296312029d6d701c69bf6f62eb37b385972895232194bb0->leave($__internal_952a2029eb9d90c12296312029d6d701c69bf6f62eb37b385972895232194bb0_prof);

    }

    public function getTemplateName()
    {
        return "Task/create.html.twig";
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
