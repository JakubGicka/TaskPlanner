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
        $__internal_9a1243afaed903f2550708d26bc4eb716f2330c539df483c2f66466efefa31b2 = $this->env->getExtension("native_profiler");
        $__internal_9a1243afaed903f2550708d26bc4eb716f2330c539df483c2f66466efefa31b2->enter($__internal_9a1243afaed903f2550708d26bc4eb716f2330c539df483c2f66466efefa31b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1243afaed903f2550708d26bc4eb716f2330c539df483c2f66466efefa31b2->leave($__internal_9a1243afaed903f2550708d26bc4eb716f2330c539df483c2f66466efefa31b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c91fe17bb5033825d9b6cf7c25a1dd7671222ff97ecca98580b560353b0c40dd = $this->env->getExtension("native_profiler");
        $__internal_c91fe17bb5033825d9b6cf7c25a1dd7671222ff97ecca98580b560353b0c40dd->enter($__internal_c91fe17bb5033825d9b6cf7c25a1dd7671222ff97ecca98580b560353b0c40dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c91fe17bb5033825d9b6cf7c25a1dd7671222ff97ecca98580b560353b0c40dd->leave($__internal_c91fe17bb5033825d9b6cf7c25a1dd7671222ff97ecca98580b560353b0c40dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ea932b67aeaa6ebb8ea79a9d15fea0db8e3d62c114dc93c35f453badde5d36e = $this->env->getExtension("native_profiler");
        $__internal_6ea932b67aeaa6ebb8ea79a9d15fea0db8e3d62c114dc93c35f453badde5d36e->enter($__internal_6ea932b67aeaa6ebb8ea79a9d15fea0db8e3d62c114dc93c35f453badde5d36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ea932b67aeaa6ebb8ea79a9d15fea0db8e3d62c114dc93c35f453badde5d36e->leave($__internal_6ea932b67aeaa6ebb8ea79a9d15fea0db8e3d62c114dc93c35f453badde5d36e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5586d8486cf3fc2836953bafb227fbd0c2e8fb9f59f07db8325cdcf878b2a5bd = $this->env->getExtension("native_profiler");
        $__internal_5586d8486cf3fc2836953bafb227fbd0c2e8fb9f59f07db8325cdcf878b2a5bd->enter($__internal_5586d8486cf3fc2836953bafb227fbd0c2e8fb9f59f07db8325cdcf878b2a5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5586d8486cf3fc2836953bafb227fbd0c2e8fb9f59f07db8325cdcf878b2a5bd->leave($__internal_5586d8486cf3fc2836953bafb227fbd0c2e8fb9f59f07db8325cdcf878b2a5bd_prof);

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
