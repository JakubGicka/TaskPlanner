<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18c8583627be271b520934a8b67e98578f52f8cceedf6a158abe81c24216ddd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f68c1917961bcf388dd701ea62a3f2dd84dcb72db68b12cbf1b2d0871b6d4db9 = $this->env->getExtension("native_profiler");
        $__internal_f68c1917961bcf388dd701ea62a3f2dd84dcb72db68b12cbf1b2d0871b6d4db9->enter($__internal_f68c1917961bcf388dd701ea62a3f2dd84dcb72db68b12cbf1b2d0871b6d4db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f68c1917961bcf388dd701ea62a3f2dd84dcb72db68b12cbf1b2d0871b6d4db9->leave($__internal_f68c1917961bcf388dd701ea62a3f2dd84dcb72db68b12cbf1b2d0871b6d4db9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43ac60aca9dc9c20475d55dba6963fde8cc1266abf8f1efd6f7444389d6d7482 = $this->env->getExtension("native_profiler");
        $__internal_43ac60aca9dc9c20475d55dba6963fde8cc1266abf8f1efd6f7444389d6d7482->enter($__internal_43ac60aca9dc9c20475d55dba6963fde8cc1266abf8f1efd6f7444389d6d7482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_43ac60aca9dc9c20475d55dba6963fde8cc1266abf8f1efd6f7444389d6d7482->leave($__internal_43ac60aca9dc9c20475d55dba6963fde8cc1266abf8f1efd6f7444389d6d7482_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e36a77a3ca593830b411a65a972b5987b0c9ced70893773b592b306f0c2e82be = $this->env->getExtension("native_profiler");
        $__internal_e36a77a3ca593830b411a65a972b5987b0c9ced70893773b592b306f0c2e82be->enter($__internal_e36a77a3ca593830b411a65a972b5987b0c9ced70893773b592b306f0c2e82be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e36a77a3ca593830b411a65a972b5987b0c9ced70893773b592b306f0c2e82be->leave($__internal_e36a77a3ca593830b411a65a972b5987b0c9ced70893773b592b306f0c2e82be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed643fa6eac6fa5520430f1577664e9c79a8ab651a772a9643d861e207ded01e = $this->env->getExtension("native_profiler");
        $__internal_ed643fa6eac6fa5520430f1577664e9c79a8ab651a772a9643d861e207ded01e->enter($__internal_ed643fa6eac6fa5520430f1577664e9c79a8ab651a772a9643d861e207ded01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ed643fa6eac6fa5520430f1577664e9c79a8ab651a772a9643d861e207ded01e->leave($__internal_ed643fa6eac6fa5520430f1577664e9c79a8ab651a772a9643d861e207ded01e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
