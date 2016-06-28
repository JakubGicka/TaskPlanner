<?php

/* Task/comment.html.twig */
class __TwigTemplate_9e8799c2cca9a778aa746702d0115443ac46c2efc211700e2c9a0f82fff3e737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Task/comment.html.twig", 1);
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
        $__internal_27bc86055cd673e9edd1d7e7eae700c4f1bd18ea4c03d32b24b73f7765f7c050 = $this->env->getExtension("native_profiler");
        $__internal_27bc86055cd673e9edd1d7e7eae700c4f1bd18ea4c03d32b24b73f7765f7c050->enter($__internal_27bc86055cd673e9edd1d7e7eae700c4f1bd18ea4c03d32b24b73f7765f7c050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/comment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27bc86055cd673e9edd1d7e7eae700c4f1bd18ea4c03d32b24b73f7765f7c050->leave($__internal_27bc86055cd673e9edd1d7e7eae700c4f1bd18ea4c03d32b24b73f7765f7c050_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c88481ba2f8711def486a013ad0306bfb1ca4fcfded3713b2c83d99b6ea770a = $this->env->getExtension("native_profiler");
        $__internal_5c88481ba2f8711def486a013ad0306bfb1ca4fcfded3713b2c83d99b6ea770a->enter($__internal_5c88481ba2f8711def486a013ad0306bfb1ca4fcfded3713b2c83d99b6ea770a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:default:comment";
        
        $__internal_5c88481ba2f8711def486a013ad0306bfb1ca4fcfded3713b2c83d99b6ea770a->leave($__internal_5c88481ba2f8711def486a013ad0306bfb1ca4fcfded3713b2c83d99b6ea770a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a083d2d445c8575e651897b560ef704e7d13a148e2d4786a6111fcce67a15e11 = $this->env->getExtension("native_profiler");
        $__internal_a083d2d445c8575e651897b560ef704e7d13a148e2d4786a6111fcce67a15e11->enter($__internal_a083d2d445c8575e651897b560ef704e7d13a148e2d4786a6111fcce67a15e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_a083d2d445c8575e651897b560ef704e7d13a148e2d4786a6111fcce67a15e11->leave($__internal_a083d2d445c8575e651897b560ef704e7d13a148e2d4786a6111fcce67a15e11_prof);

    }

    public function getTemplateName()
    {
        return "Task/comment.html.twig";
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
/* {% block title %}app:Resources:default:comment{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* */
