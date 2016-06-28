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
        $__internal_40b799f93eec63b44bdd75558f5602dc8a0f9d21b9a6c70878f8747a3d8f47aa = $this->env->getExtension("native_profiler");
        $__internal_40b799f93eec63b44bdd75558f5602dc8a0f9d21b9a6c70878f8747a3d8f47aa->enter($__internal_40b799f93eec63b44bdd75558f5602dc8a0f9d21b9a6c70878f8747a3d8f47aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_40b799f93eec63b44bdd75558f5602dc8a0f9d21b9a6c70878f8747a3d8f47aa->leave($__internal_40b799f93eec63b44bdd75558f5602dc8a0f9d21b9a6c70878f8747a3d8f47aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0811560cba791dcafde7ba47cd2c846bf5fb21b4a56857b188dc466650ce18a = $this->env->getExtension("native_profiler");
        $__internal_c0811560cba791dcafde7ba47cd2c846bf5fb21b4a56857b188dc466650ce18a->enter($__internal_c0811560cba791dcafde7ba47cd2c846bf5fb21b4a56857b188dc466650ce18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c0811560cba791dcafde7ba47cd2c846bf5fb21b4a56857b188dc466650ce18a->leave($__internal_c0811560cba791dcafde7ba47cd2c846bf5fb21b4a56857b188dc466650ce18a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a85477e77c220a4931d4a804a1c5c056add8a1eb79044985dc12b6e64249e84 = $this->env->getExtension("native_profiler");
        $__internal_9a85477e77c220a4931d4a804a1c5c056add8a1eb79044985dc12b6e64249e84->enter($__internal_9a85477e77c220a4931d4a804a1c5c056add8a1eb79044985dc12b6e64249e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9a85477e77c220a4931d4a804a1c5c056add8a1eb79044985dc12b6e64249e84->leave($__internal_9a85477e77c220a4931d4a804a1c5c056add8a1eb79044985dc12b6e64249e84_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca88cd3698913b5776bf22ec211f1f54855b3b8b80d77eba9e2aad023b242090 = $this->env->getExtension("native_profiler");
        $__internal_ca88cd3698913b5776bf22ec211f1f54855b3b8b80d77eba9e2aad023b242090->enter($__internal_ca88cd3698913b5776bf22ec211f1f54855b3b8b80d77eba9e2aad023b242090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca88cd3698913b5776bf22ec211f1f54855b3b8b80d77eba9e2aad023b242090->leave($__internal_ca88cd3698913b5776bf22ec211f1f54855b3b8b80d77eba9e2aad023b242090_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edb8b57a68fd409b1c40e48fc98a53592eced4d5e5eb76d1213c1313cf079c5e = $this->env->getExtension("native_profiler");
        $__internal_edb8b57a68fd409b1c40e48fc98a53592eced4d5e5eb76d1213c1313cf079c5e->enter($__internal_edb8b57a68fd409b1c40e48fc98a53592eced4d5e5eb76d1213c1313cf079c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_edb8b57a68fd409b1c40e48fc98a53592eced4d5e5eb76d1213c1313cf079c5e->leave($__internal_edb8b57a68fd409b1c40e48fc98a53592eced4d5e5eb76d1213c1313cf079c5e_prof);

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
