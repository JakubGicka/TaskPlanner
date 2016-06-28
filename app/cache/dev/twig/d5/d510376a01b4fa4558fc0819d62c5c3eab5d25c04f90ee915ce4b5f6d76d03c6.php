<?php

/* Task/edit.html.twig */
class __TwigTemplate_1e35ab24c2c17f70d59ed67d0632244a5aeec7784b190830900e13cafdca7cea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Task/edit.html.twig", 1);
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
        $__internal_267d1952b1a75fedd65c3387b777d1eda3467cfc15ffb3885093473e36b6ec05 = $this->env->getExtension("native_profiler");
        $__internal_267d1952b1a75fedd65c3387b777d1eda3467cfc15ffb3885093473e36b6ec05->enter($__internal_267d1952b1a75fedd65c3387b777d1eda3467cfc15ffb3885093473e36b6ec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_267d1952b1a75fedd65c3387b777d1eda3467cfc15ffb3885093473e36b6ec05->leave($__internal_267d1952b1a75fedd65c3387b777d1eda3467cfc15ffb3885093473e36b6ec05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b411a7f3dd17656c6226b92fb13c9f9ddccd2d369b8387ead31e4c6521275998 = $this->env->getExtension("native_profiler");
        $__internal_b411a7f3dd17656c6226b92fb13c9f9ddccd2d369b8387ead31e4c6521275998->enter($__internal_b411a7f3dd17656c6226b92fb13c9f9ddccd2d369b8387ead31e4c6521275998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "app:Resources:default:edit";
        
        $__internal_b411a7f3dd17656c6226b92fb13c9f9ddccd2d369b8387ead31e4c6521275998->leave($__internal_b411a7f3dd17656c6226b92fb13c9f9ddccd2d369b8387ead31e4c6521275998_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f46f1fcb57bd4cd39783d9a6b02798ddd824e3221065c16af83993af680a29ce = $this->env->getExtension("native_profiler");
        $__internal_f46f1fcb57bd4cd39783d9a6b02798ddd824e3221065c16af83993af680a29ce->enter($__internal_f46f1fcb57bd4cd39783d9a6b02798ddd824e3221065c16af83993af680a29ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_f46f1fcb57bd4cd39783d9a6b02798ddd824e3221065c16af83993af680a29ce->leave($__internal_f46f1fcb57bd4cd39783d9a6b02798ddd824e3221065c16af83993af680a29ce_prof);

    }

    public function getTemplateName()
    {
        return "Task/edit.html.twig";
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
/* {% block title %}app:Resources:default:edit{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* */
