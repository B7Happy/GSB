<?php

/* ::base0.html.twig */
class __TwigTemplate_f03a503567bee53935c817c877757df2a94e998c1307a421fd13634dedd3d447 extends Twig_Template
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
        $__internal_04986ed97c702ed38567a9ac3a869c8450a4700e369f15d6c063914b061b0a8a = $this->env->getExtension("native_profiler");
        $__internal_04986ed97c702ed38567a9ac3a869c8450a4700e369f15d6c063914b061b0a8a->enter($__internal_04986ed97c702ed38567a9ac3a869c8450a4700e369f15d6c063914b061b0a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base0.html.twig"));

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
          <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/foot.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    </head>
    <body>
<div class=\"wrap\">
     <header class=\"navbar navbar-static-top bs-docs-nav\" id=top role=banner>
       <div class=container>
         <div class=navbar-header>
            <button class=\"navbar-toggle collapsed\" type=button data-toggle=collapse data-target=#bs-navbar aria-controls=bs-navbar aria-expanded=false>
               <span class=sr-only>Toggle navigation</span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
               </button>
               <a href=\"\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("signup");
        echo "\"\" class=navbar-brand>GSB</a>
             </div>
             <nav id=bs-navbar class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                   <li> <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("hhh");
        echo "\"> <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil </a> </li>
                   <li> <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("nous");
        echo "\"> <span class=\"glyphicon glyphicon-road\" aria-hidden=\"true\"></span> Qui somme nous ?</a> </li>
                   <li> <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\"> <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span> Produit</a> </li>

                  </ul>
                  <ul class=\"nav navbar-nav navbar-right\"> <li>
                    ";
        // line 34
        $context["var"] = "";
        // line 35
        echo "                    <li> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\"> <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Dans le panier  </a> </li>

                    ";
        // line 37
        if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) == "active")) {
            // line 38
            echo "
                  ";
        } else {
            // line 40
            echo "
                    <li> <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("homelogin");
            echo "\"> <span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Espace personnel</a>  </li>


                ";
        }
        // line 45
        echo "                  </ul>
                </nav>
</div>

<div class=\"container\">



  ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "</div>


<footer class=\"footer-distributed\">

";
        // line 67
        echo "
    <div class=\"footer-left\">

    ";
        // line 84
        echo "      <p>Bhappy  &copy; 2016   - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("adminlogin");
        echo "\"> Admin </a></p>
    </div>

  </footer>

</div>





        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "    </body>
</html>
";
        
        $__internal_04986ed97c702ed38567a9ac3a869c8450a4700e369f15d6c063914b061b0a8a->leave($__internal_04986ed97c702ed38567a9ac3a869c8450a4700e369f15d6c063914b061b0a8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f81cb20dce2671290430891d9b6d3389c6ecb98ff173e789279501817baa95d4 = $this->env->getExtension("native_profiler");
        $__internal_f81cb20dce2671290430891d9b6d3389c6ecb98ff173e789279501817baa95d4->enter($__internal_f81cb20dce2671290430891d9b6d3389c6ecb98ff173e789279501817baa95d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB - Bhappy !";
        
        $__internal_f81cb20dce2671290430891d9b6d3389c6ecb98ff173e789279501817baa95d4->leave($__internal_f81cb20dce2671290430891d9b6d3389c6ecb98ff173e789279501817baa95d4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e419764a75b49a9398fe8c8ca89842759f266822300694ce1f624f89bcf74a82 = $this->env->getExtension("native_profiler");
        $__internal_e419764a75b49a9398fe8c8ca89842759f266822300694ce1f624f89bcf74a82->enter($__internal_e419764a75b49a9398fe8c8ca89842759f266822300694ce1f624f89bcf74a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e419764a75b49a9398fe8c8ca89842759f266822300694ce1f624f89bcf74a82->leave($__internal_e419764a75b49a9398fe8c8ca89842759f266822300694ce1f624f89bcf74a82_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_210321cf10d0374491beadb443b75bb234f84fee46f23d30543d83b333b898df = $this->env->getExtension("native_profiler");
        $__internal_210321cf10d0374491beadb443b75bb234f84fee46f23d30543d83b333b898df->enter($__internal_210321cf10d0374491beadb443b75bb234f84fee46f23d30543d83b333b898df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_210321cf10d0374491beadb443b75bb234f84fee46f23d30543d83b333b898df->leave($__internal_210321cf10d0374491beadb443b75bb234f84fee46f23d30543d83b333b898df_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0a7c655235ebd8a1498d62d3dc78986b5fc1e4a02388ab187b563f3ae424c6d = $this->env->getExtension("native_profiler");
        $__internal_d0a7c655235ebd8a1498d62d3dc78986b5fc1e4a02388ab187b563f3ae424c6d->enter($__internal_d0a7c655235ebd8a1498d62d3dc78986b5fc1e4a02388ab187b563f3ae424c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d0a7c655235ebd8a1498d62d3dc78986b5fc1e4a02388ab187b563f3ae424c6d->leave($__internal_d0a7c655235ebd8a1498d62d3dc78986b5fc1e4a02388ab187b563f3ae424c6d_prof);

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
        return array (  204 => 97,  193 => 53,  182 => 10,  170 => 5,  161 => 98,  159 => 97,  155 => 96,  151 => 95,  136 => 84,  131 => 67,  124 => 54,  122 => 53,  112 => 45,  105 => 41,  102 => 40,  98 => 38,  96 => 37,  90 => 35,  88 => 34,  81 => 30,  77 => 29,  73 => 28,  66 => 24,  51 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}GSB - Bhappy !{% endblock %}</title>*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('css/foot.css') }}" rel="stylesheet">*/
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*     </head>*/
/*     <body>*/
/* <div class="wrap">*/
/*      <header class="navbar navbar-static-top bs-docs-nav" id=top role=banner>*/
/*        <div class=container>*/
/*          <div class=navbar-header>*/
/*             <button class="navbar-toggle collapsed" type=button data-toggle=collapse data-target=#bs-navbar aria-controls=bs-navbar aria-expanded=false>*/
/*                <span class=sr-only>Toggle navigation</span>*/
/*                 <span class=icon-bar></span>*/
/*                 <span class=icon-bar></span>*/
/*                 <span class=icon-bar></span>*/
/*                </button>*/
/*                <a href=""{{path('signup') }}"" class=navbar-brand>GSB</a>*/
/*              </div>*/
/*              <nav id=bs-navbar class="collapse navbar-collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                    <li> <a href="{{path('hhh') }}"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil </a> </li>*/
/*                    <li> <a href="{{path('nous') }}"> <span class="glyphicon glyphicon-road" aria-hidden="true"></span> Qui somme nous ?</a> </li>*/
/*                    <li> <a href="{{path('produit') }}"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Produit</a> </li>*/
/* */
/*                   </ul>*/
/*                   <ul class="nav navbar-nav navbar-right"> <li>*/
/*                     {% set var = '' %}*/
/*                     <li> <a href="{{path('panier') }}"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Dans le panier  </a> </li>*/
/* */
/*                     {% if var == 'active' %}*/
/* */
/*                   {% else %}*/
/* */
/*                     <li> <a href="{{path('homelogin') }}"> <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Espace personnel</a>  </li>*/
/* */
/* */
/*                 {% endif%}*/
/*                   </ul>*/
/*                 </nav>*/
/* </div>*/
/* */
/* <div class="container">*/
/* */
/* */
/* */
/*   {% block body %}{% endblock %}*/
/* </div>*/
/* */
/* */
/* <footer class="footer-distributed">*/
/* */
/* {# <div class="footer-right">*/
/* */
/*       <a href="#"><i class="fa fa-facebook"></i></a>*/
/*       <a href="#"><i class="fa fa-twitter"></i></a>*/
/*       <a href="#"><i class="fa fa-linkedin"></i></a>*/
/*       <a href="#"><i class="fa fa-github"></i></a>*/
/* */
/*     </div> #}*/
/* */
/*     <div class="footer-left">*/
/* */
/*     {#  <p class="footer-links">*/
/*         <a href="#">Home</a>*/
/*         ·*/
/*         <a href="#">Blog</a>*/
/*         ·*/
/*         <a href="#">Pricing</a>*/
/*         ·*/
/*         <a href="#">About</a>*/
/*         ·*/
/*         <a href="#">Faq</a>*/
/*         ·*/
/*         <a href="#">Contact</a>*/
/*       </p>*/
/*  #}*/
/*       <p>Bhappy  &copy; 2016   - <a href="{{path('adminlogin') }}"> Admin </a></p>*/
/*     </div>*/
/* */
/*   </footer>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/*         <script src="{{ asset("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js") }}"> </script>*/
/*         <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
