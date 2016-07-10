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
        $__internal_e3df6958ecc8d89e7d0b92beb11913a0a2bb92c9dc3f9971d0c821f0ffdfbc54 = $this->env->getExtension("native_profiler");
        $__internal_e3df6958ecc8d89e7d0b92beb11913a0a2bb92c9dc3f9971d0c821f0ffdfbc54->enter($__internal_e3df6958ecc8d89e7d0b92beb11913a0a2bb92c9dc3f9971d0c821f0ffdfbc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
        
        $__internal_e3df6958ecc8d89e7d0b92beb11913a0a2bb92c9dc3f9971d0c821f0ffdfbc54->leave($__internal_e3df6958ecc8d89e7d0b92beb11913a0a2bb92c9dc3f9971d0c821f0ffdfbc54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_186dca84491fd91560751e7608bc49f7643768131b692754c55c2409e52ee630 = $this->env->getExtension("native_profiler");
        $__internal_186dca84491fd91560751e7608bc49f7643768131b692754c55c2409e52ee630->enter($__internal_186dca84491fd91560751e7608bc49f7643768131b692754c55c2409e52ee630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_186dca84491fd91560751e7608bc49f7643768131b692754c55c2409e52ee630->leave($__internal_186dca84491fd91560751e7608bc49f7643768131b692754c55c2409e52ee630_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6cb12085914e95da2be4463d57924b93ba59ddba3cb2bec6691ee6467f80f6c = $this->env->getExtension("native_profiler");
        $__internal_f6cb12085914e95da2be4463d57924b93ba59ddba3cb2bec6691ee6467f80f6c->enter($__internal_f6cb12085914e95da2be4463d57924b93ba59ddba3cb2bec6691ee6467f80f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
            <div>
                ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 15
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 17
        echo "            </div>
    
            <h4><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Wróć do strony głównej</a></h4>
        
        ";
        
        $__internal_f6cb12085914e95da2be4463d57924b93ba59ddba3cb2bec6691ee6467f80f6c->leave($__internal_f6cb12085914e95da2be4463d57924b93ba59ddba3cb2bec6691ee6467f80f6c_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_be06614e88520df9d6005f48be12ca7c7addb30c0f736adc8c98d23bdc1ecf26 = $this->env->getExtension("native_profiler");
        $__internal_be06614e88520df9d6005f48be12ca7c7addb30c0f736adc8c98d23bdc1ecf26->enter($__internal_be06614e88520df9d6005f48be12ca7c7addb30c0f736adc8c98d23bdc1ecf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be06614e88520df9d6005f48be12ca7c7addb30c0f736adc8c98d23bdc1ecf26->leave($__internal_be06614e88520df9d6005f48be12ca7c7addb30c0f736adc8c98d23bdc1ecf26_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b73d40d8be4ea9e74e26b3728865e6943daf101874f0f897314c870ec4d36c92 = $this->env->getExtension("native_profiler");
        $__internal_b73d40d8be4ea9e74e26b3728865e6943daf101874f0f897314c870ec4d36c92->enter($__internal_b73d40d8be4ea9e74e26b3728865e6943daf101874f0f897314c870ec4d36c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b73d40d8be4ea9e74e26b3728865e6943daf101874f0f897314c870ec4d36c92->leave($__internal_b73d40d8be4ea9e74e26b3728865e6943daf101874f0f897314c870ec4d36c92_prof);

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
        return array (  133 => 27,  122 => 25,  112 => 19,  108 => 17,  100 => 15,  94 => 12,  90 => 11,  85 => 10,  83 => 9,  79 => 7,  73 => 6,  61 => 5,  52 => 28,  50 => 27,  47 => 26,  45 => 25,  38 => 22,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         */
/*             <div>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                     <a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                     </a>*/
/*                 {% else %}*/
/*                     <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                 {% endif %}*/
/*             </div>*/
/*     */
/*             <h4><a href="{{ path('homepage') }}">Wróć do strony głównej</a></h4>*/
/*         */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
