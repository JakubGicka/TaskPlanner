<?php

/* base.html.twig */
class __TwigTemplate_34aedf6bff973c9153ee41948598a7528d19a2b61c35a3c51f29e7e966011835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae42be2a8ab5761f4ba353049388db32c4530b004def8cebd3b45b5080246193 = $this->env->getExtension("native_profiler");
        $__internal_ae42be2a8ab5761f4ba353049388db32c4530b004def8cebd3b45b5080246193->enter($__internal_ae42be2a8ab5761f4ba353049388db32c4530b004def8cebd3b45b5080246193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ae42be2a8ab5761f4ba353049388db32c4530b004def8cebd3b45b5080246193->leave($__internal_ae42be2a8ab5761f4ba353049388db32c4530b004def8cebd3b45b5080246193_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb9d6549fd9cb90d07adc1c3ab977d9ab51f088b9bc96bf04e242e07db4b629b = $this->env->getExtension("native_profiler");
        $__internal_cb9d6549fd9cb90d07adc1c3ab977d9ab51f088b9bc96bf04e242e07db4b629b->enter($__internal_cb9d6549fd9cb90d07adc1c3ab977d9ab51f088b9bc96bf04e242e07db4b629b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cb9d6549fd9cb90d07adc1c3ab977d9ab51f088b9bc96bf04e242e07db4b629b->leave($__internal_cb9d6549fd9cb90d07adc1c3ab977d9ab51f088b9bc96bf04e242e07db4b629b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c74f3a6f44800db891c32f69154976c1d8a0298c4b16468d60645aab13af72c = $this->env->getExtension("native_profiler");
        $__internal_8c74f3a6f44800db891c32f69154976c1d8a0298c4b16468d60645aab13af72c->enter($__internal_8c74f3a6f44800db891c32f69154976c1d8a0298c4b16468d60645aab13af72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8c74f3a6f44800db891c32f69154976c1d8a0298c4b16468d60645aab13af72c->leave($__internal_8c74f3a6f44800db891c32f69154976c1d8a0298c4b16468d60645aab13af72c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcdb2aea0ee10c1c55662e4f44f0e31c47c729410fa83e072366049b7e31084a = $this->env->getExtension("native_profiler");
        $__internal_fcdb2aea0ee10c1c55662e4f44f0e31c47c729410fa83e072366049b7e31084a->enter($__internal_fcdb2aea0ee10c1c55662e4f44f0e31c47c729410fa83e072366049b7e31084a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcdb2aea0ee10c1c55662e4f44f0e31c47c729410fa83e072366049b7e31084a->leave($__internal_fcdb2aea0ee10c1c55662e4f44f0e31c47c729410fa83e072366049b7e31084a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d3a52c024ee8ce24082877ff818e65a3bf4872406cb212eefe947d104a906bf = $this->env->getExtension("native_profiler");
        $__internal_0d3a52c024ee8ce24082877ff818e65a3bf4872406cb212eefe947d104a906bf->enter($__internal_0d3a52c024ee8ce24082877ff818e65a3bf4872406cb212eefe947d104a906bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d3a52c024ee8ce24082877ff818e65a3bf4872406cb212eefe947d104a906bf->leave($__internal_0d3a52c024ee8ce24082877ff818e65a3bf4872406cb212eefe947d104a906bf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
