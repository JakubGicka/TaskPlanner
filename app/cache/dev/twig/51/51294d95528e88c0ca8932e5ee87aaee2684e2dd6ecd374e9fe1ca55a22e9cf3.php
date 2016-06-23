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
        $__internal_923fb55f7996800192b73716ac9d08b5b0b5934f281b58c22336f7a090e08412 = $this->env->getExtension("native_profiler");
        $__internal_923fb55f7996800192b73716ac9d08b5b0b5934f281b58c22336f7a090e08412->enter($__internal_923fb55f7996800192b73716ac9d08b5b0b5934f281b58c22336f7a090e08412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/comment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_923fb55f7996800192b73716ac9d08b5b0b5934f281b58c22336f7a090e08412->leave($__internal_923fb55f7996800192b73716ac9d08b5b0b5934f281b58c22336f7a090e08412_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d292616c571dc3d87a902eda6eb111a85df9b45c2e961b5f762a44cb5f4708ad = $this->env->getExtension("native_profiler");
        $__internal_d292616c571dc3d87a902eda6eb111a85df9b45c2e961b5f762a44cb5f4708ad->enter($__internal_d292616c571dc3d87a902eda6eb111a85df9b45c2e961b5f762a44cb5f4708ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:default:comment";
        
        $__internal_d292616c571dc3d87a902eda6eb111a85df9b45c2e961b5f762a44cb5f4708ad->leave($__internal_d292616c571dc3d87a902eda6eb111a85df9b45c2e961b5f762a44cb5f4708ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4799b454940efe452cf191ef19169d0f4e86c507ab4b1a35cc646c213b4c8842 = $this->env->getExtension("native_profiler");
        $__internal_4799b454940efe452cf191ef19169d0f4e86c507ab4b1a35cc646c213b4c8842->enter($__internal_4799b454940efe452cf191ef19169d0f4e86c507ab4b1a35cc646c213b4c8842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_4799b454940efe452cf191ef19169d0f4e86c507ab4b1a35cc646c213b4c8842->leave($__internal_4799b454940efe452cf191ef19169d0f4e86c507ab4b1a35cc646c213b4c8842_prof);

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
