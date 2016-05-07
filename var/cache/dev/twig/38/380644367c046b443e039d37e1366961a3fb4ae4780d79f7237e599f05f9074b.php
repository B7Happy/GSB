<?php

/* PPEPharBundle:Produit:index.html.twig */
class __TwigTemplate_6b4d1ce814fe7806c7624a0546c5255e84f77fb1d6f268e4d95c24bbed0939ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Produit:index.html.twig", 2);
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
        $__internal_5daebe276b91380e4a1b6a5d58bb5d3185bce4820d90c62cf9a3708b25200cbe = $this->env->getExtension("native_profiler");
        $__internal_5daebe276b91380e4a1b6a5d58bb5d3185bce4820d90c62cf9a3708b25200cbe->enter($__internal_5daebe276b91380e4a1b6a5d58bb5d3185bce4820d90c62cf9a3708b25200cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Produit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5daebe276b91380e4a1b6a5d58bb5d3185bce4820d90c62cf9a3708b25200cbe->leave($__internal_5daebe276b91380e4a1b6a5d58bb5d3185bce4820d90c62cf9a3708b25200cbe_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81f397281a4cb654b7dfe48174c264c52cc34d83dae6e4b8085292f8f8715c09 = $this->env->getExtension("native_profiler");
        $__internal_81f397281a4cb654b7dfe48174c264c52cc34d83dae6e4b8085292f8f8715c09->enter($__internal_81f397281a4cb654b7dfe48174c264c52cc34d83dae6e4b8085292f8f8715c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "


  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  ";
        
        $__internal_81f397281a4cb654b7dfe48174c264c52cc34d83dae6e4b8085292f8f8715c09->leave($__internal_81f397281a4cb654b7dfe48174c264c52cc34d83dae6e4b8085292f8f8715c09_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_346cbf3655db7f30d021c9e574072c46f8a69a31a86a685ea42b0adcd3382393 = $this->env->getExtension("native_profiler");
        $__internal_346cbf3655db7f30d021c9e574072c46f8a69a31a86a685ea42b0adcd3382393->enter($__internal_346cbf3655db7f30d021c9e574072c46f8a69a31a86a685ea42b0adcd3382393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<h2 class=\"page-header\"> Les Medicaments </h2>


<table class=\"table table-hover\">
<thead>
   <tr>
       <th>Type </th>
       <th>Nom</th>
       <th>Effet</th>
       <th>precaution</th>
       <th> quantite </th>
       <th>Prix</th>
       <th>  </th>
   </tr>
</thead>
<tdody>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Medicament"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Medicament"]) {
            // line 31
            echo "   <tr>

       <td scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "Type", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "Nom", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "effet", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "precaution", array()), "html", null, true);
            echo "</td>
      ";
            // line 43
            echo "       <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "prix", array()), "html", null, true);
            echo "</td>
       <td>

<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apanier", array("id" => $this->getAttribute($context["Medicament"], "id", array()))), "html", null, true);
            echo "\"   class=\"btn btn-primary\"> Acheter  </a>
</form>
</td>


</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Medicament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</tbody>
</table>



";
        
        $__internal_346cbf3655db7f30d021c9e574072c46f8a69a31a86a685ea42b0adcd3382393->leave($__internal_346cbf3655db7f30d021c9e574072c46f8a69a31a86a685ea42b0adcd3382393_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 53,  112 => 46,  105 => 43,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 31,  81 => 30,  62 => 13,  56 => 12,  46 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
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
/* <h2 class="page-header"> Les Medicaments </h2>*/
/* */
/* */
/* <table class="table table-hover">*/
/* <thead>*/
/*    <tr>*/
/*        <th>Type </th>*/
/*        <th>Nom</th>*/
/*        <th>Effet</th>*/
/*        <th>precaution</th>*/
/*        <th> quantite </th>*/
/*        <th>Prix</th>*/
/*        <th>  </th>*/
/*    </tr>*/
/* </thead>*/
/* <tdody>*/
/* {% for Medicament in Medicament %}*/
/*    <tr>*/
/* */
/*        <td scope="row">{{ Medicament.Type}}</td>*/
/*        <td>{{ Medicament.Nom}}</td>*/
/*        <td>{{ Medicament.effet}}</td>*/
/*        <td>{{ Medicament.precaution}}</td>*/
/*       {# <form action "{{path('apanier', { 'id' : Medicament.id}) }}" method="get">*/
/*        <select name="qte" >*/
/*        {% for i in 1..10 %}*/
/*        <option value="{{i}}"> {{i}}</option>*/
/*        {% endfor %}*/
/*        </select>  #}*/
/*        <td>{{ Medicament.prix}}</td>*/
/*        <td>*/
/* */
/* <a href="{{path('apanier', { 'id' : Medicament.id}) }}"   class="btn btn-primary"> Acheter  </a>*/
/* </form>*/
/* </td>*/
/* */
/* */
/* </tr>*/
/* {% endfor %}*/
/* </tbody>*/
/* </table>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
