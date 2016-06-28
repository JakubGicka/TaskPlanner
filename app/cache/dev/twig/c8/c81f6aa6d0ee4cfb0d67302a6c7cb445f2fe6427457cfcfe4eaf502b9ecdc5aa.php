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
        $__internal_8b9879418944119150e2f57da830f220090116ab5a164f167178d32c962dcc5e = $this->env->getExtension("native_profiler");
        $__internal_8b9879418944119150e2f57da830f220090116ab5a164f167178d32c962dcc5e->enter($__internal_8b9879418944119150e2f57da830f220090116ab5a164f167178d32c962dcc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b9879418944119150e2f57da830f220090116ab5a164f167178d32c962dcc5e->leave($__internal_8b9879418944119150e2f57da830f220090116ab5a164f167178d32c962dcc5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae2e2138ea7c584776f2cd5a16b9267fba3844775fabc98244e7ac8c973be34b = $this->env->getExtension("native_profiler");
        $__internal_ae2e2138ea7c584776f2cd5a16b9267fba3844775fabc98244e7ac8c973be34b->enter($__internal_ae2e2138ea7c584776f2cd5a16b9267fba3844775fabc98244e7ac8c973be34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h5><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Zaloguj się</a></h5>
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
        <h4><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Zarejestruj się</a></h4>
        <h4><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("app_task_create");
        echo "\">Dodaj zadanie</a></h4>
        <h4><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("app_task_showall");
        echo "\">Wyświetl swoje zadania</a></h4>
        
        
        </div>
    </div>
                
";
        
        $__internal_ae2e2138ea7c584776f2cd5a16b9267fba3844775fabc98244e7ac8c973be34b->leave($__internal_ae2e2138ea7c584776f2cd5a16b9267fba3844775fabc98244e7ac8c973be34b_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4bac7380f77c77857d1aafce6040c45fa5cc3bd8870717a47a92d73140543bd = $this->env->getExtension("native_profiler");
        $__internal_d4bac7380f77c77857d1aafce6040c45fa5cc3bd8870717a47a92d73140543bd->enter($__internal_d4bac7380f77c77857d1aafce6040c45fa5cc3bd8870717a47a92d73140543bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
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
        
        $__internal_d4bac7380f77c77857d1aafce6040c45fa5cc3bd8870717a47a92d73140543bd->leave($__internal_d4bac7380f77c77857d1aafce6040c45fa5cc3bd8870717a47a92d73140543bd_prof);

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
        return array (  89 => 31,  83 => 30,  69 => 21,  65 => 20,  61 => 19,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h5><a href="{{ path('fos_user_security_login') }}">Zaloguj się</a></h5>*/
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
/*         <h4><a href="{{ path('fos_user_registration_register') }}">Zarejestruj się</a></h4>*/
/*         <h4><a href="{{ path('app_task_create') }}">Dodaj zadanie</a></h4>*/
/*         <h4><a href="{{ path('app_task_showall') }}">Wyświetl swoje zadania</a></h4>*/
/*         */
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
