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
        $__internal_f8bb150f689fa820c88e469c30d3f06def4a1d0e2fabeb003f81c6f63cecc65e = $this->env->getExtension("native_profiler");
        $__internal_f8bb150f689fa820c88e469c30d3f06def4a1d0e2fabeb003f81c6f63cecc65e->enter($__internal_f8bb150f689fa820c88e469c30d3f06def4a1d0e2fabeb003f81c6f63cecc65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base0.html.twig"));

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
                    <li> <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\"> <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Dans le panier  </a> </li>


                  <li> <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("deco");
        echo "\"> <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span> Deco</a>  </li>


                    <li> <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("homelogin");
        echo "\"> <span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Login</a>  </li>
                    <li> <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("signup");
        echo "\"> <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Insription </a> </li>

                
                  </ul>
                </nav>
</div>

<div class=\"container\">



  ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "

</div>



        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
</html>
";
        
        $__internal_f8bb150f689fa820c88e469c30d3f06def4a1d0e2fabeb003f81c6f63cecc65e->leave($__internal_f8bb150f689fa820c88e469c30d3f06def4a1d0e2fabeb003f81c6f63cecc65e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fd4d58710bb518d7919eba356213df489fd67678e82ff27b8373118fabc977c = $this->env->getExtension("native_profiler");
        $__internal_9fd4d58710bb518d7919eba356213df489fd67678e82ff27b8373118fabc977c->enter($__internal_9fd4d58710bb518d7919eba356213df489fd67678e82ff27b8373118fabc977c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB - Bhappy !";
        
        $__internal_9fd4d58710bb518d7919eba356213df489fd67678e82ff27b8373118fabc977c->leave($__internal_9fd4d58710bb518d7919eba356213df489fd67678e82ff27b8373118fabc977c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ef3f2f82903fe22482863ffbf2919f3e3e226a97849d3dd9b70f1bb803d8b81 = $this->env->getExtension("native_profiler");
        $__internal_4ef3f2f82903fe22482863ffbf2919f3e3e226a97849d3dd9b70f1bb803d8b81->enter($__internal_4ef3f2f82903fe22482863ffbf2919f3e3e226a97849d3dd9b70f1bb803d8b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4ef3f2f82903fe22482863ffbf2919f3e3e226a97849d3dd9b70f1bb803d8b81->leave($__internal_4ef3f2f82903fe22482863ffbf2919f3e3e226a97849d3dd9b70f1bb803d8b81_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_738c17e93f147c324a015a9a4016251fe059f85d42b26bbff155bfb2956ba5eb = $this->env->getExtension("native_profiler");
        $__internal_738c17e93f147c324a015a9a4016251fe059f85d42b26bbff155bfb2956ba5eb->enter($__internal_738c17e93f147c324a015a9a4016251fe059f85d42b26bbff155bfb2956ba5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_738c17e93f147c324a015a9a4016251fe059f85d42b26bbff155bfb2956ba5eb->leave($__internal_738c17e93f147c324a015a9a4016251fe059f85d42b26bbff155bfb2956ba5eb_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7f36f73b0154e60ae0e77739ebdf77600b74bafaa68bd45ea5c02bf92096768 = $this->env->getExtension("native_profiler");
        $__internal_e7f36f73b0154e60ae0e77739ebdf77600b74bafaa68bd45ea5c02bf92096768->enter($__internal_e7f36f73b0154e60ae0e77739ebdf77600b74bafaa68bd45ea5c02bf92096768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e7f36f73b0154e60ae0e77739ebdf77600b74bafaa68bd45ea5c02bf92096768->leave($__internal_e7f36f73b0154e60ae0e77739ebdf77600b74bafaa68bd45ea5c02bf92096768_prof);

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
        return array (  178 => 61,  167 => 52,  156 => 10,  144 => 5,  135 => 62,  133 => 61,  129 => 60,  125 => 59,  117 => 53,  115 => 52,  101 => 41,  97 => 40,  91 => 37,  85 => 34,  78 => 30,  74 => 29,  70 => 28,  63 => 24,  48 => 11,  46 => 10,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
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
/*                     <li> <a href="{{path('panier') }}"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Dans le panier  </a> </li>*/
/* */
/* */
/*                   <li> <a href="{{path('deco') }}"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Deco</a>  </li>*/
/* */
/* */
/*                     <li> <a href="{{path('homelogin') }}"> <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a>  </li>*/
/*                     <li> <a href="{{path('signup') }}"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Insription </a> </li>*/
/* */
/*                 */
/*                   </ul>*/
/*                 </nav>*/
/* </div>*/
/* */
/* <div class="container">*/
/* */
/* */
/* */
/*   {% block body %}{% endblock %}*/
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/*         <script src="{{ asset("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js") }}"> </script>*/
/*         <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
