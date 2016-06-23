<?php

/* default/index.html.twig */
class __TwigTemplate_1aff74c30050a64b6405f42a9ec18386ba012bfe7894f9d0e8ceb22c26623318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f030660ad8a225f4ac644cf41675c3ad6b9c2f7e4537477fc519ac96aec97310 = $this->env->getExtension("native_profiler");
        $__internal_f030660ad8a225f4ac644cf41675c3ad6b9c2f7e4537477fc519ac96aec97310->enter($__internal_f030660ad8a225f4ac644cf41675c3ad6b9c2f7e4537477fc519ac96aec97310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f030660ad8a225f4ac644cf41675c3ad6b9c2f7e4537477fc519ac96aec97310->leave($__internal_f030660ad8a225f4ac644cf41675c3ad6b9c2f7e4537477fc519ac96aec97310_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28bbf66e10b6ab7058557f91c3bdd0908d55c9400b28eaa687b6fe398fdadf9c = $this->env->getExtension("native_profiler");
        $__internal_28bbf66e10b6ab7058557f91c3bdd0908d55c9400b28eaa687b6fe398fdadf9c->enter($__internal_28bbf66e10b6ab7058557f91c3bdd0908d55c9400b28eaa687b6fe398fdadf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Task Planner</span></h1>
            </div>
        <h2><span>Witaj na stronie Task Planner.</span></h2>
        <h3><span>Task Planner to aplikacja przeznaczona do prostego planowania zadań.</span></h3>
        <h3>Użytkownicy zarejestrowani w aplikacji mają możliwość m.in.:</h3>
        <ul>
            <li>Definiowania kategorii tematycznych i dodawania do nich zadań</li>
            <li>Wyświetlania swoich planów</li>
            <li>Komentowania swoich planów</li>
        </ul>
        <h3><a href=\"http://192.168.33.22:8080/register/\">Rejestracja użytkownika</a></h3>
        <h3><a href=\"http://192.168.33.22:8080/create\">Dodanie zadania</a></h3>
        
        </div>
    </div>
                
";
        
        $__internal_28bbf66e10b6ab7058557f91c3bdd0908d55c9400b28eaa687b6fe398fdadf9c->leave($__internal_28bbf66e10b6ab7058557f91c3bdd0908d55c9400b28eaa687b6fe398fdadf9c_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10c846ac2c013e39b9c5359f052a01a0d8e899ea3533faac7cc803b7674bfaa3 = $this->env->getExtension("native_profiler");
        $__internal_10c846ac2c013e39b9c5359f052a01a0d8e899ea3533faac7cc803b7674bfaa3->enter($__internal_10c846ac2c013e39b9c5359f052a01a0d8e899ea3533faac7cc803b7674bfaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_10c846ac2c013e39b9c5359f052a01a0d8e899ea3533faac7cc803b7674bfaa3->leave($__internal_10c846ac2c013e39b9c5359f052a01a0d8e899ea3533faac7cc803b7674bfaa3_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  68 => 27,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1><span>Task Planner</span></h1>*/
/*             </div>*/
/*         <h2><span>Witaj na stronie Task Planner.</span></h2>*/
/*         <h3><span>Task Planner to aplikacja przeznaczona do prostego planowania zadań.</span></h3>*/
/*         <h3>Użytkownicy zarejestrowani w aplikacji mają możliwość m.in.:</h3>*/
/*         <ul>*/
/*             <li>Definiowania kategorii tematycznych i dodawania do nich zadań</li>*/
/*             <li>Wyświetlania swoich planów</li>*/
/*             <li>Komentowania swoich planów</li>*/
/*         </ul>*/
/*         <h3><a href="http://192.168.33.22:8080/register/">Rejestracja użytkownika</a></h3>*/
/*         <h3><a href="http://192.168.33.22:8080/create">Dodanie zadania</a></h3>*/
/*         */
/*         </div>*/
/*     </div>*/
/*                 */
/* {% endblock %}*/
/* */
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
