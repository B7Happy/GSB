<?php

/* PPEPharBundle:Produit:som.html.twig */
class __TwigTemplate_48cceb8708f316c44eac2d5c20f27695d982985958be59cb76d54f648dfda86e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Produit:som.html.twig", 1);
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
        $__internal_f538bb6bd0cb5443dba12f5bbb5b0167a4eb2850ce323378ff789349a3e9e98e = $this->env->getExtension("native_profiler");
        $__internal_f538bb6bd0cb5443dba12f5bbb5b0167a4eb2850ce323378ff789349a3e9e98e->enter($__internal_f538bb6bd0cb5443dba12f5bbb5b0167a4eb2850ce323378ff789349a3e9e98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Produit:som.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f538bb6bd0cb5443dba12f5bbb5b0167a4eb2850ce323378ff789349a3e9e98e->leave($__internal_f538bb6bd0cb5443dba12f5bbb5b0167a4eb2850ce323378ff789349a3e9e98e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a3664c48e2cf5e48cf18ce2abb2dc1c846876d7ec1dd67b822a3650651801e2 = $this->env->getExtension("native_profiler");
        $__internal_8a3664c48e2cf5e48cf18ce2abb2dc1c846876d7ec1dd67b822a3650651801e2->enter($__internal_8a3664c48e2cf5e48cf18ce2abb2dc1c846876d7ec1dd67b822a3650651801e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "


  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  ";
        
        $__internal_8a3664c48e2cf5e48cf18ce2abb2dc1c846876d7ec1dd67b822a3650651801e2->leave($__internal_8a3664c48e2cf5e48cf18ce2abb2dc1c846876d7ec1dd67b822a3650651801e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_261b7d4fbdc8bc3e01bd67ce76ca60e979b07ce109e390dbe8f79258a47b42c9 = $this->env->getExtension("native_profiler");
        $__internal_261b7d4fbdc8bc3e01bd67ce76ca60e979b07ce109e390dbe8f79258a47b42c9->enter($__internal_261b7d4fbdc8bc3e01bd67ce76ca60e979b07ce109e390dbe8f79258a47b42c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "</br>
</br>
<h3>Qui sommes-nous? </h3>
</br>
<p>L’entreprise
Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union de trois petits laboratoires .

En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur industriel. L’entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.

Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis. </p>

Réorganisation
Une conséquence de cette fusion, est la recherche d’une optimisation de l’activité du groupe ainsi constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments (en passant par une nécessaire restructuration et vague de licenciement), tout en prenant le meilleur des deux laboratoires sur les produits concurrents.

L’entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les départements et territoires d’outre-mer. Les territoires sont répartis en 6 secteurs géographiques (Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).

Après deux années de réorganisations internes, tant au niveau du personnel que du fonctionnement administratif, l’entreprise GSB souhaite moderniser l’activité de visite médicale.


  ";
        
        $__internal_261b7d4fbdc8bc3e01bd67ce76ca60e979b07ce109e390dbe8f79258a47b42c9->leave($__internal_261b7d4fbdc8bc3e01bd67ce76ca60e979b07ce109e390dbe8f79258a47b42c9_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Produit:som.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  56 => 11,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/* </br>*/
/* </br>*/
/* <h3>Qui sommes-nous? </h3>*/
/* </br>*/
/* <p>L’entreprise*/
/* Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union de trois petits laboratoires .*/
/* */
/* En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur industriel. L’entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.*/
/* */
/* Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis. </p>*/
/* */
/* Réorganisation*/
/* Une conséquence de cette fusion, est la recherche d’une optimisation de l’activité du groupe ainsi constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments (en passant par une nécessaire restructuration et vague de licenciement), tout en prenant le meilleur des deux laboratoires sur les produits concurrents.*/
/* */
/* L’entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les départements et territoires d’outre-mer. Les territoires sont répartis en 6 secteurs géographiques (Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).*/
/* */
/* Après deux années de réorganisations internes, tant au niveau du personnel que du fonctionnement administratif, l’entreprise GSB souhaite moderniser l’activité de visite médicale.*/
/* */
/* */
/*   {% endblock %}*/
/* */
