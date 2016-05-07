<?php

/* PPEPharBundle:Produit:prepanier.html.twig */
class __TwigTemplate_c7768802f688b595d2d79be170489c99fe223f243893e3665640371c8edb7759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Produit:prepanier.html.twig", 1);
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
        $__internal_f8448e1f6591c5c29c9ddf6e1eaf4b2385e2ac3a2ecc275f7aa540e4b0f6537c = $this->env->getExtension("native_profiler");
        $__internal_f8448e1f6591c5c29c9ddf6e1eaf4b2385e2ac3a2ecc275f7aa540e4b0f6537c->enter($__internal_f8448e1f6591c5c29c9ddf6e1eaf4b2385e2ac3a2ecc275f7aa540e4b0f6537c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Produit:prepanier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8448e1f6591c5c29c9ddf6e1eaf4b2385e2ac3a2ecc275f7aa540e4b0f6537c->leave($__internal_f8448e1f6591c5c29c9ddf6e1eaf4b2385e2ac3a2ecc275f7aa540e4b0f6537c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2e756033957da41cd1343def04aea377aac281211e33dcc1fce7f404286eba7 = $this->env->getExtension("native_profiler");
        $__internal_c2e756033957da41cd1343def04aea377aac281211e33dcc1fce7f404286eba7->enter($__internal_c2e756033957da41cd1343def04aea377aac281211e33dcc1fce7f404286eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "


  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  ";
        
        $__internal_c2e756033957da41cd1343def04aea377aac281211e33dcc1fce7f404286eba7->leave($__internal_c2e756033957da41cd1343def04aea377aac281211e33dcc1fce7f404286eba7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f46b8239b751a102dc5af9b2edca41b7b4d793a655c9d3f4740cf974d55a6108 = $this->env->getExtension("native_profiler");
        $__internal_f46b8239b751a102dc5af9b2edca41b7b4d793a655c9d3f4740cf974d55a6108->enter($__internal_f46b8239b751a102dc5af9b2edca41b7b4d793a655c9d3f4740cf974d55a6108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<h3> Ajoute au panier </h3>

<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("panier.jpg"), "html", null, true);
        echo "\" alt=\"panier\" class=\"img-rounded\" height=\"300\" width=\"300\">

<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\"  class=\"btn btn-primary\"> Continuer mes achats</a>
<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\"  class=\"btn btn-primary\"> Passer la commande </a>

  ";
        
        $__internal_f46b8239b751a102dc5af9b2edca41b7b4d793a655c9d3f4740cf974d55a6108->leave($__internal_f46b8239b751a102dc5af9b2edca41b7b4d793a655c9d3f4740cf974d55a6108_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Produit:prepanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  72 => 17,  67 => 15,  62 => 12,  56 => 11,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base0.html.twig"%}*/
/* */
/* {% block stylesheets %}*/
/* */
/* */
/* */
/*   <link href="{{ asset('css/signin.css') }}" rel="stylesheet">*/
/* */
/*   {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <h3> Ajoute au panier </h3>*/
/* */
/* <img src="{{ asset('panier.jpg') }}" alt="panier" class="img-rounded" height="300" width="300">*/
/* */
/* <a href="{{path('produit')}}"  class="btn btn-primary"> Continuer mes achats</a>*/
/* <a href="{{path('panier')}}"  class="btn btn-primary"> Passer la commande </a>*/
/* */
/*   {% endblock %}*/
/* */
