<?php

/* ::base200.html.twig */
class __TwigTemplate_f55ddab5fe7e571578465952cb85a0f0f0834953f63cffc7ea6702d4657be03b extends Twig_Template
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
        $__internal_e5ad275b7711c036669568a811621c1994c9d5263063ff4cc35ec0e47258f25d = $this->env->getExtension("native_profiler");
        $__internal_e5ad275b7711c036669568a811621c1994c9d5263063ff4cc35ec0e47258f25d->enter($__internal_e5ad275b7711c036669568a811621c1994c9d5263063ff4cc35ec0e47258f25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base200.html.twig"));

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
               <a href=\"/\" class=navbar-brand>GSB</a>
             </div>
             <nav id=bs-navbar class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                   <li> <a href=\"#\"> <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Home </a> </li>
                   <li> <a href=\"#\"> <span class=\"glyphicon glyphicon-road\" aria-hidden=\"true\"></span> About us</a> </li>
                   <li> <a href=\"#\"> <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span> Produit</a> </li>

                  </ul>
                  <ul class=\"nav navbar-nav navbar-right\"> <li>
                    <li> <a href=\"#\"> <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Dans le panier  </a> </li>
                    <li> <a href=\"#\"> <span class=\"glyphicon glyphicon-th\" aria-hidden=\"true\"></span> Accuil</a>  </li>
                    <li> <a href=\"#\"> <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span> Logout </a> </li>
                  </ul>
                </nav>
</div>

<div class=\"container\">

  <div class=\"row\">
            <div class=\"col-md-3\" id=\"sidebar\">
                    <ul class=\"nav\">
                <li class=\"current_ancestor first last\">        <span class=\"nav-header\">                <span>My account</span>
        </span>            <ul class=\"nav nav-list menu_level_1\">
                <li class=\"current first\">        <a href=\"/account/\" title=\"Home\">    <i class=\"icon-home\"></i>            <span>Home</span>
        </a>
    </li>

        <li>        <a href=\"/account/profile/edit\" title=\"My personal information\">    <i class=\"icon-info-sign\"></i>            <span>My personal information</span>
        </a>
    </li>

        <li>        <a href=\"/account/change-password\" title=\"My password\">    <i class=\"icon-lock\"></i>            <span>My password</span>
        </a>
    </li>

        <li>        <a href=\"/account/orders/\" title=\"My orders / my invoices\">    <i class=\"icon-briefcase\"></i>            <span>My orders / my invoices</span>
        </a>
    </li>

        <li class=\"last\">        <a href=\"/account/addresses/\" title=\"My address book\">    <i class=\"icon-envelope\"></i>            <span>My address book</span>
        </a>
    </li>


    </ul>

    </li>


    </ul>

            </div>
            <div class=\"col-md-9\">

";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "

</div>



        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
</html>
";
        
        $__internal_e5ad275b7711c036669568a811621c1994c9d5263063ff4cc35ec0e47258f25d->leave($__internal_e5ad275b7711c036669568a811621c1994c9d5263063ff4cc35ec0e47258f25d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_830c61b5a3df3b978c302902718fc7acaac974cf1f155d0a3db588fbd38fc6c1 = $this->env->getExtension("native_profiler");
        $__internal_830c61b5a3df3b978c302902718fc7acaac974cf1f155d0a3db588fbd38fc6c1->enter($__internal_830c61b5a3df3b978c302902718fc7acaac974cf1f155d0a3db588fbd38fc6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_830c61b5a3df3b978c302902718fc7acaac974cf1f155d0a3db588fbd38fc6c1->leave($__internal_830c61b5a3df3b978c302902718fc7acaac974cf1f155d0a3db588fbd38fc6c1_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dfa92afb3a8b6dda326b9bb8d61c587f7704b46ba644eb7d628ce715aeb2701 = $this->env->getExtension("native_profiler");
        $__internal_7dfa92afb3a8b6dda326b9bb8d61c587f7704b46ba644eb7d628ce715aeb2701->enter($__internal_7dfa92afb3a8b6dda326b9bb8d61c587f7704b46ba644eb7d628ce715aeb2701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7dfa92afb3a8b6dda326b9bb8d61c587f7704b46ba644eb7d628ce715aeb2701->leave($__internal_7dfa92afb3a8b6dda326b9bb8d61c587f7704b46ba644eb7d628ce715aeb2701_prof);

    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        $__internal_648e5ff8f346c34e008545a5c19614d0fe3d41f7eaee34a10112226e62ba0eb5 = $this->env->getExtension("native_profiler");
        $__internal_648e5ff8f346c34e008545a5c19614d0fe3d41f7eaee34a10112226e62ba0eb5->enter($__internal_648e5ff8f346c34e008545a5c19614d0fe3d41f7eaee34a10112226e62ba0eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_648e5ff8f346c34e008545a5c19614d0fe3d41f7eaee34a10112226e62ba0eb5->leave($__internal_648e5ff8f346c34e008545a5c19614d0fe3d41f7eaee34a10112226e62ba0eb5_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0991b799e563105327819ba760096463d4e3add1fa5dfc7be5d7599460544b4 = $this->env->getExtension("native_profiler");
        $__internal_c0991b799e563105327819ba760096463d4e3add1fa5dfc7be5d7599460544b4->enter($__internal_c0991b799e563105327819ba760096463d4e3add1fa5dfc7be5d7599460544b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0991b799e563105327819ba760096463d4e3add1fa5dfc7be5d7599460544b4->leave($__internal_c0991b799e563105327819ba760096463d4e3add1fa5dfc7be5d7599460544b4_prof);

    }

    public function getTemplateName()
    {
        return "::base200.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 88,  170 => 79,  159 => 10,  147 => 5,  138 => 89,  136 => 88,  132 => 87,  128 => 86,  120 => 80,  118 => 79,  48 => 11,  46 => 10,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
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
/*                <a href="/" class=navbar-brand>GSB</a>*/
/*              </div>*/
/*              <nav id=bs-navbar class="collapse navbar-collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                    <li> <a href="#"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a> </li>*/
/*                    <li> <a href="#"> <span class="glyphicon glyphicon-road" aria-hidden="true"></span> About us</a> </li>*/
/*                    <li> <a href="#"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Produit</a> </li>*/
/* */
/*                   </ul>*/
/*                   <ul class="nav navbar-nav navbar-right"> <li>*/
/*                     <li> <a href="#"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Dans le panier  </a> </li>*/
/*                     <li> <a href="#"> <span class="glyphicon glyphicon-th" aria-hidden="true"></span> Accuil</a>  </li>*/
/*                     <li> <a href="#"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout </a> </li>*/
/*                   </ul>*/
/*                 </nav>*/
/* </div>*/
/* */
/* <div class="container">*/
/* */
/*   <div class="row">*/
/*             <div class="col-md-3" id="sidebar">*/
/*                     <ul class="nav">*/
/*                 <li class="current_ancestor first last">        <span class="nav-header">                <span>My account</span>*/
/*         </span>            <ul class="nav nav-list menu_level_1">*/
/*                 <li class="current first">        <a href="/account/" title="Home">    <i class="icon-home"></i>            <span>Home</span>*/
/*         </a>*/
/*     </li>*/
/* */
/*         <li>        <a href="/account/profile/edit" title="My personal information">    <i class="icon-info-sign"></i>            <span>My personal information</span>*/
/*         </a>*/
/*     </li>*/
/* */
/*         <li>        <a href="/account/change-password" title="My password">    <i class="icon-lock"></i>            <span>My password</span>*/
/*         </a>*/
/*     </li>*/
/* */
/*         <li>        <a href="/account/orders/" title="My orders / my invoices">    <i class="icon-briefcase"></i>            <span>My orders / my invoices</span>*/
/*         </a>*/
/*     </li>*/
/* */
/*         <li class="last">        <a href="/account/addresses/" title="My address book">    <i class="icon-envelope"></i>            <span>My address book</span>*/
/*         </a>*/
/*     </li>*/
/* */
/* */
/*     </ul>*/
/* */
/*     </li>*/
/* */
/* */
/*     </ul>*/
/* */
/*             </div>*/
/*             <div class="col-md-9">*/
/* */
/* {% block body %}{% endblock %}*/
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
