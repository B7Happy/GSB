<?php

/* PPEPharBundle:Default:index.html.twig */
class __TwigTemplate_8b2f07ca3f4d43ea8e136a48d9440c19ddbe742efa9b0df816c16abf09735f66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base0.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b316b5a14c48f95a0a6158b92cc214e4ce686dd5ffebc4607805896b1f1090c1 = $this->env->getExtension("native_profiler");
        $__internal_b316b5a14c48f95a0a6158b92cc214e4ce686dd5ffebc4607805896b1f1090c1->enter($__internal_b316b5a14c48f95a0a6158b92cc214e4ce686dd5ffebc4607805896b1f1090c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b316b5a14c48f95a0a6158b92cc214e4ce686dd5ffebc4607805896b1f1090c1->leave($__internal_b316b5a14c48f95a0a6158b92cc214e4ce686dd5ffebc4607805896b1f1090c1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1effbad6f22b64f03bf18c7b0698729699e96f2437708dddab57842e4586226 = $this->env->getExtension("native_profiler");
        $__internal_b1effbad6f22b64f03bf18c7b0698729699e96f2437708dddab57842e4586226->enter($__internal_b1effbad6f22b64f03bf18c7b0698729699e96f2437708dddab57842e4586226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_b1effbad6f22b64f03bf18c7b0698729699e96f2437708dddab57842e4586226->leave($__internal_b1effbad6f22b64f03bf18c7b0698729699e96f2437708dddab57842e4586226_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_51cc1329dd07e22cd0cebc48d218bec14ab194d782083a740e7b801d2cb4407f = $this->env->getExtension("native_profiler");
        $__internal_51cc1329dd07e22cd0cebc48d218bec14ab194d782083a740e7b801d2cb4407f->enter($__internal_51cc1329dd07e22cd0cebc48d218bec14ab194d782083a740e7b801d2cb4407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
      <!-- Indicators -->
      <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
          <img class=\"first-slide\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Bienvenue.</h1>
              <p>Nous proposant ici les meilleurs Medicament, si vous n'etes pas inscrit click en bas  </p>
              <p><a class=\"btn btn-lg btn-primary\" href=\"http://localhost/Symfony7/web/app_dev.php/signup\" role=\"button\">Insription</a></p>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img class=\"second-slide\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img4.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1></h1>
              <p></p>

            </div>
          </div>
        </div>
        <div class=\"item\">
          <img class=\"third-slide\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img3.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1></h1>
              <p></p>

            </div>
          </div>
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>

";
        
        $__internal_51cc1329dd07e22cd0cebc48d218bec14ab194d782083a740e7b801d2cb4407f->leave($__internal_51cc1329dd07e22cd0cebc48d218bec14ab194d782083a740e7b801d2cb4407f_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  86 => 31,  73 => 21,  60 => 10,  54 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base0.html.twig"%}*/
/* */
/* {% block stylesheets %}*/
/* */
/*   <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*       <!-- Indicators -->*/
/*       <ol class="carousel-indicators">*/
/*         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*       </ol>*/
/*       <div class="carousel-inner" role="listbox">*/
/*         <div class="item active">*/
/*           <img class="first-slide" src="{{ asset('img.jpg') }}" alt="First slide">*/
/*           <div class="container">*/
/*             <div class="carousel-caption">*/
/*               <h1>Bienvenue.</h1>*/
/*               <p>Nous proposant ici les meilleurs Medicament, si vous n'etes pas inscrit click en bas  </p>*/
/*               <p><a class="btn btn-lg btn-primary" href="http://localhost/Symfony7/web/app_dev.php/signup" role="button">Insription</a></p>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="item">*/
/*           <img class="second-slide" src="{{ asset('img4.jpg') }}" alt="Second slide">*/
/*           <div class="container">*/
/*             <div class="carousel-caption">*/
/*               <h1></h1>*/
/*               <p></p>*/
/* */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="item">*/
/*           <img class="third-slide" src="{{ asset('img3.jpg') }}" alt="Third slide">*/
/*           <div class="container">*/
/*             <div class="carousel-caption">*/
/*               <h1></h1>*/
/*               <p></p>*/
/* */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*         <span class="sr-only">Previous</span>*/
/*       </a>*/
/*       <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*         <span class="sr-only">Next</span>*/
/*       </a>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
