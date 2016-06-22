<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9790056d4449e841bdbd19e33e68ab2753d4f57d5ff3b4f3563cbaf01fe51b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebf37b35e82788f5d7c7e76e0ad17df33b0c06d0735a3d6b2dfb36c899147680 = $this->env->getExtension("native_profiler");
        $__internal_ebf37b35e82788f5d7c7e76e0ad17df33b0c06d0735a3d6b2dfb36c899147680->enter($__internal_ebf37b35e82788f5d7c7e76e0ad17df33b0c06d0735a3d6b2dfb36c899147680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf37b35e82788f5d7c7e76e0ad17df33b0c06d0735a3d6b2dfb36c899147680->leave($__internal_ebf37b35e82788f5d7c7e76e0ad17df33b0c06d0735a3d6b2dfb36c899147680_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c027ce0a0e256b2afb858cf54f4437ca98d89b54cdc346995f3caf787af1e74d = $this->env->getExtension("native_profiler");
        $__internal_c027ce0a0e256b2afb858cf54f4437ca98d89b54cdc346995f3caf787af1e74d->enter($__internal_c027ce0a0e256b2afb858cf54f4437ca98d89b54cdc346995f3caf787af1e74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c027ce0a0e256b2afb858cf54f4437ca98d89b54cdc346995f3caf787af1e74d->leave($__internal_c027ce0a0e256b2afb858cf54f4437ca98d89b54cdc346995f3caf787af1e74d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
