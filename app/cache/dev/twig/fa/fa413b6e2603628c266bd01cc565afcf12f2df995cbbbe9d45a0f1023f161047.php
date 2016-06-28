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
        $__internal_1a30c1599f7d43a2aa9a1ccafad4b5a5716a674e52643cb57f7a5ea6357cbcf6 = $this->env->getExtension("native_profiler");
        $__internal_1a30c1599f7d43a2aa9a1ccafad4b5a5716a674e52643cb57f7a5ea6357cbcf6->enter($__internal_1a30c1599f7d43a2aa9a1ccafad4b5a5716a674e52643cb57f7a5ea6357cbcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a30c1599f7d43a2aa9a1ccafad4b5a5716a674e52643cb57f7a5ea6357cbcf6->leave($__internal_1a30c1599f7d43a2aa9a1ccafad4b5a5716a674e52643cb57f7a5ea6357cbcf6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49ac51af0c0a0a973d4489500a033e03feb47ccdbdd2530d80c73558e1cdf5c1 = $this->env->getExtension("native_profiler");
        $__internal_49ac51af0c0a0a973d4489500a033e03feb47ccdbdd2530d80c73558e1cdf5c1->enter($__internal_49ac51af0c0a0a973d4489500a033e03feb47ccdbdd2530d80c73558e1cdf5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:Task:create";
        
        $__internal_49ac51af0c0a0a973d4489500a033e03feb47ccdbdd2530d80c73558e1cdf5c1->leave($__internal_49ac51af0c0a0a973d4489500a033e03feb47ccdbdd2530d80c73558e1cdf5c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3be96960bc8a985c3c181cd30ec082f4cccf8717efa1a2e0919e55235d74fc5f = $this->env->getExtension("native_profiler");
        $__internal_3be96960bc8a985c3c181cd30ec082f4cccf8717efa1a2e0919e55235d74fc5f->enter($__internal_3be96960bc8a985c3c181cd30ec082f4cccf8717efa1a2e0919e55235d74fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo "Dodaj zadanie:";
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_3be96960bc8a985c3c181cd30ec082f4cccf8717efa1a2e0919e55235d74fc5f->leave($__internal_3be96960bc8a985c3c181cd30ec082f4cccf8717efa1a2e0919e55235d74fc5f_prof);

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
        return array (  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}app:Resources:Task:create{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ 'Dodaj zadanie:' }}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
