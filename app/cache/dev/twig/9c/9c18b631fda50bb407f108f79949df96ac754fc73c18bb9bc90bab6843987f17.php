<?php

/* Task/new.html.twig */
class __TwigTemplate_0f2b9dbedc8dfe589711afcbef8440d99282fba31836c374543650eaf25beb96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Task/new.html.twig", 1);
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
        $__internal_b0475e15ed8100a8d7aa56147f4851cc5f85be698449dd54bd60bdbba240c875 = $this->env->getExtension("native_profiler");
        $__internal_b0475e15ed8100a8d7aa56147f4851cc5f85be698449dd54bd60bdbba240c875->enter($__internal_b0475e15ed8100a8d7aa56147f4851cc5f85be698449dd54bd60bdbba240c875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0475e15ed8100a8d7aa56147f4851cc5f85be698449dd54bd60bdbba240c875->leave($__internal_b0475e15ed8100a8d7aa56147f4851cc5f85be698449dd54bd60bdbba240c875_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_827d6544472a2cfa9d7fa3d9b87969ba576a8fdc4c295c36f309be5aa3e7f2c0 = $this->env->getExtension("native_profiler");
        $__internal_827d6544472a2cfa9d7fa3d9b87969ba576a8fdc4c295c36f309be5aa3e7f2c0->enter($__internal_827d6544472a2cfa9d7fa3d9b87969ba576a8fdc4c295c36f309be5aa3e7f2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:Task:new";
        
        $__internal_827d6544472a2cfa9d7fa3d9b87969ba576a8fdc4c295c36f309be5aa3e7f2c0->leave($__internal_827d6544472a2cfa9d7fa3d9b87969ba576a8fdc4c295c36f309be5aa3e7f2c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bce58046ec23621add63c417f2dd5bfc23d49eb38d6c999f1229b303f41ff4f3 = $this->env->getExtension("native_profiler");
        $__internal_bce58046ec23621add63c417f2dd5bfc23d49eb38d6c999f1229b303f41ff4f3->enter($__internal_bce58046ec23621add63c417f2dd5bfc23d49eb38d6c999f1229b303f41ff4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo "Wybierz kategorie, w której umieścisz zadanie:";
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_bce58046ec23621add63c417f2dd5bfc23d49eb38d6c999f1229b303f41ff4f3->leave($__internal_bce58046ec23621add63c417f2dd5bfc23d49eb38d6c999f1229b303f41ff4f3_prof);

    }

    public function getTemplateName()
    {
        return "Task/new.html.twig";
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
/* {% block title %}app:Resources:Task:new{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ 'Wybierz kategorie, w której umieścisz zadanie:' }}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
