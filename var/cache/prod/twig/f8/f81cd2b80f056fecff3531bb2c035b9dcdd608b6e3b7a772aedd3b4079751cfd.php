<?php

/* ::base0.html.twig */
class __TwigTemplate_9a0ae472f45a9914624e4adf8de45bc6d4a1187e9e7cde112d52f3af3544fb3a extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    </head>
    <body>

     <header class=\"navbar navbar-static-top bs-docs-nav\" id=top role=banner>
       <div class=container>
         <div class=navbar-header>
            <button class=\"navbar-toggle collapsed\" type=button data-toggle=collapse data-target=#bs-navbar aria-controls=bs-navbar aria-expanded=false>
               <span class=sr-only>Toggle navigation</span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
               </button>
               <a href=../ class=navbar-brand>Bootstrap</a>
             </div>
             <nav id=bs-navbar class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                   <li> <a href=\"../getting-started/\">Getting started</a> </li>
                   <li> <a href=\"../css/\">CSS</a> </li>
                   <li> <a href=\"../components/\">Components</a> </li>
                   <li> <a href=\"../javascript/\">JavaScript</a> </li>
                   <li> <a href=\"../customize/\">Customize</a> </li>
                  </ul>
                  <ul class=\"nav navbar-nav navbar-right\"> <li>
                    <li> <a href=\"../components/\">Components</a> </li>
                    <li> <a href=\"../javascript/\">JavaScript</a> </li>
                    <li> <a href=\"../customize/\">Customize</a> </li>
                  </ul>
                </nav>





        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  113 => 45,  108 => 10,  102 => 5,  96 => 50,  94 => 49,  90 => 48,  86 => 47,  83 => 46,  81 => 45,  45 => 11,  43 => 10,  38 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*     </head>*/
/*     <body>*/
/* */
/*      <header class="navbar navbar-static-top bs-docs-nav" id=top role=banner>*/
/*        <div class=container>*/
/*          <div class=navbar-header>*/
/*             <button class="navbar-toggle collapsed" type=button data-toggle=collapse data-target=#bs-navbar aria-controls=bs-navbar aria-expanded=false>*/
/*                <span class=sr-only>Toggle navigation</span>*/
/*                 <span class=icon-bar></span>*/
/*                 <span class=icon-bar></span>*/
/*                 <span class=icon-bar></span>*/
/*                </button>*/
/*                <a href=../ class=navbar-brand>Bootstrap</a>*/
/*              </div>*/
/*              <nav id=bs-navbar class="collapse navbar-collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                    <li> <a href="../getting-started/">Getting started</a> </li>*/
/*                    <li> <a href="../css/">CSS</a> </li>*/
/*                    <li> <a href="../components/">Components</a> </li>*/
/*                    <li> <a href="../javascript/">JavaScript</a> </li>*/
/*                    <li> <a href="../customize/">Customize</a> </li>*/
/*                   </ul>*/
/*                   <ul class="nav navbar-nav navbar-right"> <li>*/
/*                     <li> <a href="../components/">Components</a> </li>*/
/*                     <li> <a href="../javascript/">JavaScript</a> </li>*/
/*                     <li> <a href="../customize/">Customize</a> </li>*/
/*                   </ul>*/
/*                 </nav>*/
/* */
/* */
/* */
/* */
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*         <script src="{{ asset("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js") }}"> </script>*/
/*         <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
