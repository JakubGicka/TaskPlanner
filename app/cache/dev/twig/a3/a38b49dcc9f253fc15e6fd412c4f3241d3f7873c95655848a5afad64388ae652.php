<?php

/* default/add_task.html.twig */
class __TwigTemplate_a08021a012450a7ab5ebafd7a5fbd94bf72fae08ae123ff0983f1012df832c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/add_task.html.twig", 1);
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
        $__internal_431cfbf90312d254fbcb4d30db026e646a9d6885721a81a9cbb6d8d2e29cc5a7 = $this->env->getExtension("native_profiler");
        $__internal_431cfbf90312d254fbcb4d30db026e646a9d6885721a81a9cbb6d8d2e29cc5a7->enter($__internal_431cfbf90312d254fbcb4d30db026e646a9d6885721a81a9cbb6d8d2e29cc5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add_task.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_431cfbf90312d254fbcb4d30db026e646a9d6885721a81a9cbb6d8d2e29cc5a7->leave($__internal_431cfbf90312d254fbcb4d30db026e646a9d6885721a81a9cbb6d8d2e29cc5a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26d7aa010d547f56f66199d1fc0f1d395036524dd0fb4b88a68c457757a0d639 = $this->env->getExtension("native_profiler");
        $__internal_26d7aa010d547f56f66199d1fc0f1d395036524dd0fb4b88a68c457757a0d639->enter($__internal_26d7aa010d547f56f66199d1fc0f1d395036524dd0fb4b88a68c457757a0d639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:default:add_task";
        
        $__internal_26d7aa010d547f56f66199d1fc0f1d395036524dd0fb4b88a68c457757a0d639->leave($__internal_26d7aa010d547f56f66199d1fc0f1d395036524dd0fb4b88a68c457757a0d639_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f859ce994bbc1eabc6ff0f10fb72683c50cc978d8606526496fbf2839a5b2c5a = $this->env->getExtension("native_profiler");
        $__internal_f859ce994bbc1eabc6ff0f10fb72683c50cc978d8606526496fbf2839a5b2c5a->enter($__internal_f859ce994bbc1eabc6ff0f10fb72683c50cc978d8606526496fbf2839a5b2c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_f859ce994bbc1eabc6ff0f10fb72683c50cc978d8606526496fbf2839a5b2c5a->leave($__internal_f859ce994bbc1eabc6ff0f10fb72683c50cc978d8606526496fbf2839a5b2c5a_prof);

    }

    public function getTemplateName()
    {
        return "default/add_task.html.twig";
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
/* {% block title %}app:Resources:default:add_task{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
