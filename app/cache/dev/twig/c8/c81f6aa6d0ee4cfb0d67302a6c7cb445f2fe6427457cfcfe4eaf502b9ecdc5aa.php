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
        $__internal_43d18fd1b0cfee71b0015bbd7dda3fce45c762a440e9f28d2f9f86bea54c5ac4 = $this->env->getExtension("native_profiler");
        $__internal_43d18fd1b0cfee71b0015bbd7dda3fce45c762a440e9f28d2f9f86bea54c5ac4->enter($__internal_43d18fd1b0cfee71b0015bbd7dda3fce45c762a440e9f28d2f9f86bea54c5ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d18fd1b0cfee71b0015bbd7dda3fce45c762a440e9f28d2f9f86bea54c5ac4->leave($__internal_43d18fd1b0cfee71b0015bbd7dda3fce45c762a440e9f28d2f9f86bea54c5ac4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aede7507591ca39b5c77c008dd53216c16cf6b7e92afcf4ccbd202416215f7d9 = $this->env->getExtension("native_profiler");
        $__internal_aede7507591ca39b5c77c008dd53216c16cf6b7e92afcf4ccbd202416215f7d9->enter($__internal_aede7507591ca39b5c77c008dd53216c16cf6b7e92afcf4ccbd202416215f7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        </div>
    </div>
                
";
        
        $__internal_aede7507591ca39b5c77c008dd53216c16cf6b7e92afcf4ccbd202416215f7d9->leave($__internal_aede7507591ca39b5c77c008dd53216c16cf6b7e92afcf4ccbd202416215f7d9_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecc378fd6c3562f0e69ece25d234fd4b36771909434bd4347fba5263717e0c52 = $this->env->getExtension("native_profiler");
        $__internal_ecc378fd6c3562f0e69ece25d234fd4b36771909434bd4347fba5263717e0c52->enter($__internal_ecc378fd6c3562f0e69ece25d234fd4b36771909434bd4347fba5263717e0c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
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
        
        $__internal_ecc378fd6c3562f0e69ece25d234fd4b36771909434bd4347fba5263717e0c52->leave($__internal_ecc378fd6c3562f0e69ece25d234fd4b36771909434bd4347fba5263717e0c52_prof);

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
        return array (  73 => 27,  67 => 26,  41 => 4,  35 => 3,  11 => 1,);
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
