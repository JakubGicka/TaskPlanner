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
        $__internal_d7630d8a6686124fe3e119456067edd8f7b874d94e1205b2074673d587da081b = $this->env->getExtension("native_profiler");
        $__internal_d7630d8a6686124fe3e119456067edd8f7b874d94e1205b2074673d587da081b->enter($__internal_d7630d8a6686124fe3e119456067edd8f7b874d94e1205b2074673d587da081b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/comment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7630d8a6686124fe3e119456067edd8f7b874d94e1205b2074673d587da081b->leave($__internal_d7630d8a6686124fe3e119456067edd8f7b874d94e1205b2074673d587da081b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76397ef99a1aff44ee63ff562ef9589fcd12c749974b527a6cfe17c4858d46e5 = $this->env->getExtension("native_profiler");
        $__internal_76397ef99a1aff44ee63ff562ef9589fcd12c749974b527a6cfe17c4858d46e5->enter($__internal_76397ef99a1aff44ee63ff562ef9589fcd12c749974b527a6cfe17c4858d46e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:Task:comment";
        
        $__internal_76397ef99a1aff44ee63ff562ef9589fcd12c749974b527a6cfe17c4858d46e5->leave($__internal_76397ef99a1aff44ee63ff562ef9589fcd12c749974b527a6cfe17c4858d46e5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9616ee665d92e4c335df789c0167e36d8bb481e48ca0edae4a9ce30c7a7f3a81 = $this->env->getExtension("native_profiler");
        $__internal_9616ee665d92e4c335df789c0167e36d8bb481e48ca0edae4a9ce30c7a7f3a81->enter($__internal_9616ee665d92e4c335df789c0167e36d8bb481e48ca0edae4a9ce30c7a7f3a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_9616ee665d92e4c335df789c0167e36d8bb481e48ca0edae4a9ce30c7a7f3a81->leave($__internal_9616ee665d92e4c335df789c0167e36d8bb481e48ca0edae4a9ce30c7a7f3a81_prof);

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
/* {% block title %}app:Resources:Task:comment{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* */
