<?php

/* ::base2.html.twig */
class __TwigTemplate_f88cb3c9b7141ddfebaa4f5b6ca3ab538b39fa566d26de4c09346b515fee13e5 extends Twig_Template
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
        $__internal_0fcaa02d3dd83e533c3990956a8be599ae7a9d378b15c9882ffdd02a5b61b129 = $this->env->getExtension("native_profiler");
        $__internal_0fcaa02d3dd83e533c3990956a8be599ae7a9d378b15c9882ffdd02a5b61b129->enter($__internal_0fcaa02d3dd83e533c3990956a8be599ae7a9d378b15c9882ffdd02a5b61b129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Admin</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("adminhome");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("cc");
        echo "\">Creer Medicament</a></li>
            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("chome");
        echo "\">Client</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

    <div class=\"row\">
    <div class=\"col-md-12\">
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 52
            echo "      <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </div>
    </div>
    </div>
    <!-- Bootstrap core JavaScript

        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "  </body>
</html>
";
        
        $__internal_0fcaa02d3dd83e533c3990956a8be599ae7a9d378b15c9882ffdd02a5b61b129->leave($__internal_0fcaa02d3dd83e533c3990956a8be599ae7a9d378b15c9882ffdd02a5b61b129_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e149d946dccbeda130febd2ca1f632e7bda1ba7eebe0ff1c7910fcae2250fee = $this->env->getExtension("native_profiler");
        $__internal_6e149d946dccbeda130febd2ca1f632e7bda1ba7eebe0ff1c7910fcae2250fee->enter($__internal_6e149d946dccbeda130febd2ca1f632e7bda1ba7eebe0ff1c7910fcae2250fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6e149d946dccbeda130febd2ca1f632e7bda1ba7eebe0ff1c7910fcae2250fee->leave($__internal_6e149d946dccbeda130febd2ca1f632e7bda1ba7eebe0ff1c7910fcae2250fee_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f59932e582fceed8d1929316df6b8d9e6327546591184d5a26eed472e0ee6c1 = $this->env->getExtension("native_profiler");
        $__internal_2f59932e582fceed8d1929316df6b8d9e6327546591184d5a26eed472e0ee6c1->enter($__internal_2f59932e582fceed8d1929316df6b8d9e6327546591184d5a26eed472e0ee6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    ";
        
        $__internal_2f59932e582fceed8d1929316df6b8d9e6327546591184d5a26eed472e0ee6c1->leave($__internal_2f59932e582fceed8d1929316df6b8d9e6327546591184d5a26eed472e0ee6c1_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_c90b643044bd0dfc7adefc60ed3ea31c834586fb954fe32171ead51a01dba7be = $this->env->getExtension("native_profiler");
        $__internal_c90b643044bd0dfc7adefc60ed3ea31c834586fb954fe32171ead51a01dba7be->enter($__internal_c90b643044bd0dfc7adefc60ed3ea31c834586fb954fe32171ead51a01dba7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c90b643044bd0dfc7adefc60ed3ea31c834586fb954fe32171ead51a01dba7be->leave($__internal_c90b643044bd0dfc7adefc60ed3ea31c834586fb954fe32171ead51a01dba7be_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e974ef7a0b662bd9d52d5f29dad5d792bac98079c57038346292fd1b1fd80ae6 = $this->env->getExtension("native_profiler");
        $__internal_e974ef7a0b662bd9d52d5f29dad5d792bac98079c57038346292fd1b1fd80ae6->enter($__internal_e974ef7a0b662bd9d52d5f29dad5d792bac98079c57038346292fd1b1fd80ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "
    ";
        
        $__internal_e974ef7a0b662bd9d52d5f29dad5d792bac98079c57038346292fd1b1fd80ae6->leave($__internal_e974ef7a0b662bd9d52d5f29dad5d792bac98079c57038346292fd1b1fd80ae6_prof);

    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 63,  173 => 62,  162 => 54,  155 => 19,  149 => 18,  137 => 13,  128 => 65,  126 => 62,  121 => 60,  114 => 55,  111 => 54,  102 => 52,  98 => 51,  84 => 40,  80 => 39,  76 => 38,  56 => 20,  54 => 18,  49 => 16,  43 => 13,  38 => 11,  26 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="{{ asset('favicon.ico') }}">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <nav class="navbar navbar-inverse">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="#">Admin</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="{{path('adminhome') }}">Home</a></li>*/
/*             <li><a href="{{path('cc') }}">Creer Medicament</a></li>*/
/*             <li><a href="{{path('chome') }}">Client</a></li>*/
/* */
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/* */
/*     <div class="row">*/
/*     <div class="col-md-12">*/
/*     {% for flash_message in app.session.flashbag.get('notice') %}*/
/*       <div class="alert alert-success">{{flash_message}}</div>*/
/*       {% endfor %}*/
/*   {% block body %}{% endblock %}*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/*     <!-- Bootstrap core JavaScript*/
/* */
/*         <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/* */
/*     {% block javascripts %}*/
/* */
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
