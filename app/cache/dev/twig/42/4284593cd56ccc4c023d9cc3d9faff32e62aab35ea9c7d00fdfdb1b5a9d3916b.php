<?php

/* Category/create.html.twig */
class __TwigTemplate_c03cc95a988f25364a40a90ca6975e81cae379b6f7c5dc6ecc6d8b8782c675d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Category/create.html.twig", 1);
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
        $__internal_e18e787a91dd2e44a63fba6e08009635e83ee513f530fa3707f8cae350b582f1 = $this->env->getExtension("native_profiler");
        $__internal_e18e787a91dd2e44a63fba6e08009635e83ee513f530fa3707f8cae350b582f1->enter($__internal_e18e787a91dd2e44a63fba6e08009635e83ee513f530fa3707f8cae350b582f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Category/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18e787a91dd2e44a63fba6e08009635e83ee513f530fa3707f8cae350b582f1->leave($__internal_e18e787a91dd2e44a63fba6e08009635e83ee513f530fa3707f8cae350b582f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df342cbc1c9c2b2e23847aecaa2c6f2cc4e919488ff6f2fed5eacd66bfb91c4e = $this->env->getExtension("native_profiler");
        $__internal_df342cbc1c9c2b2e23847aecaa2c6f2cc4e919488ff6f2fed5eacd66bfb91c4e->enter($__internal_df342cbc1c9c2b2e23847aecaa2c6f2cc4e919488ff6f2fed5eacd66bfb91c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:Category:create";
        
        $__internal_df342cbc1c9c2b2e23847aecaa2c6f2cc4e919488ff6f2fed5eacd66bfb91c4e->leave($__internal_df342cbc1c9c2b2e23847aecaa2c6f2cc4e919488ff6f2fed5eacd66bfb91c4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2311c7f660df417e1723729b815231c36dc46cc306b301e8b1d3a4dedc057e0a = $this->env->getExtension("native_profiler");
        $__internal_2311c7f660df417e1723729b815231c36dc46cc306b301e8b1d3a4dedc057e0a->enter($__internal_2311c7f660df417e1723729b815231c36dc46cc306b301e8b1d3a4dedc057e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo "Wybierz kategorię, w której umieścisz zadanie:";
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_2311c7f660df417e1723729b815231c36dc46cc306b301e8b1d3a4dedc057e0a->leave($__internal_2311c7f660df417e1723729b815231c36dc46cc306b301e8b1d3a4dedc057e0a_prof);

    }

    public function getTemplateName()
    {
        return "Category/create.html.twig";
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
/* {% block title %}app:Resources:Category:create{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ 'Wybierz kategorię, w której umieścisz zadanie:' }}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
