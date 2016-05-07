<?php

/* PPEPharBundle:Produit:livraison.html.twig */
class __TwigTemplate_1517c470994b978a0e169525f4f8e9b1f6bdc484198de751a43d337dc47dda7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Produit:livraison.html.twig", 2);
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
        $__internal_28f4e5e147eba57564668c3de3c97603c0fca67b2850cf1c21a8c1811cf33022 = $this->env->getExtension("native_profiler");
        $__internal_28f4e5e147eba57564668c3de3c97603c0fca67b2850cf1c21a8c1811cf33022->enter($__internal_28f4e5e147eba57564668c3de3c97603c0fca67b2850cf1c21a8c1811cf33022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Produit:livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f4e5e147eba57564668c3de3c97603c0fca67b2850cf1c21a8c1811cf33022->leave($__internal_28f4e5e147eba57564668c3de3c97603c0fca67b2850cf1c21a8c1811cf33022_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4ec6939ea1f1ee89c1916a5aa2f38d552117c4243cd17f515204fdb5c073131 = $this->env->getExtension("native_profiler");
        $__internal_b4ec6939ea1f1ee89c1916a5aa2f38d552117c4243cd17f515204fdb5c073131->enter($__internal_b4ec6939ea1f1ee89c1916a5aa2f38d552117c4243cd17f515204fdb5c073131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "




  ";
        
        $__internal_b4ec6939ea1f1ee89c1916a5aa2f38d552117c4243cd17f515204fdb5c073131->leave($__internal_b4ec6939ea1f1ee89c1916a5aa2f38d552117c4243cd17f515204fdb5c073131_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_aea0d9325886500054d223235db4149b66aa3100756d89484ae680c4a496a3bc = $this->env->getExtension("native_profiler");
        $__internal_aea0d9325886500054d223235db4149b66aa3100756d89484ae680c4a496a3bc->enter($__internal_aea0d9325886500054d223235db4149b66aa3100756d89484ae680c4a496a3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<h2 class=\"page-header\"> Livraison </h2>
</br>

<h3>  Adresse de livraison  :</h3>
</br>
<form>
  <div class=\"form-group\">
    <label >Prenom</label>
    <input  class=\"form-control\" placeholder=\"\">
  </div>
  <div class=\"form-group\">
    <label >Nom</label>
    <input type=\"\" class=\"form-control\" >
  </div>
  <div class=\"form-group\">
    <label >adresse</label>
    <input type=\"\"text\"\" class=\"form-control\" >
  </div>
  <div class=\"form-group\">
    <label >code postal</label>
    <input type=\"number\" class=\"form-control\" >
  </div>
  <div class=\"form-group\">
    <label >Ville</label>
    <input type=\"\"text\"\" class=\"form-control\" >
  </div>
  <div class=\"form-group\">
    <label >Pays</label>
    <input type=\"text\" class=\"form-control\" placeholder=\"France\" >
  </div>



 <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\"   class=\"btn btn-danger\"> Annuler  </a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("payer");
        echo "\"   class=\"btn btn-primary\"> confirme </a>
</form>

";
        // line 71
        echo "



  ";
        
        $__internal_aea0d9325886500054d223235db4149b66aa3100756d89484ae680c4a496a3bc->leave($__internal_aea0d9325886500054d223235db4149b66aa3100756d89484ae680c4a496a3bc_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Produit:livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 71,  95 => 47,  59 => 13,  53 => 12,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base0.html.twig"%}*/
/* */
/* {% block stylesheets %}*/
/* */
/* */
/* */
/* */
/* */
/*   {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <h2 class="page-header"> Livraison </h2>*/
/* </br>*/
/* */
/* <h3>  Adresse de livraison  :</h3>*/
/* </br>*/
/* <form>*/
/*   <div class="form-group">*/
/*     <label >Prenom</label>*/
/*     <input  class="form-control" placeholder="">*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label >Nom</label>*/
/*     <input type="" class="form-control" >*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label >adresse</label>*/
/*     <input type=""text"" class="form-control" >*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label >code postal</label>*/
/*     <input type="number" class="form-control" >*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label >Ville</label>*/
/*     <input type=""text"" class="form-control" >*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label >Pays</label>*/
/*     <input type="text" class="form-control" placeholder="France" >*/
/*   </div>*/
/* */
/* */
/* */
/*  <a href="{{path('panier') }}"   class="btn btn-danger"> Annuler  </a> <a href="{{path('payer') }}"   class="btn btn-primary"> confirme </a>*/
/* </form>*/
/* */
/* {#*/
/* */
/* {% for client in client %}*/
/* */
/*   <h4>  Adresse de livraison </h4>*/
/* */
/*     <p>   {{ Client.prenom}} {{ Client.nom}} </p>*/
/*     <p>    {{Client.adresse}}, {{Client.codePostal}} - {{Client.ville}} </p>*/
/*     <p> France </p>*/
/* */
/* </br>*/
/* */
/* */
/* */
/* <a href="{{path('produit')}}"  class="btn btn-primary"> Valider mes adresses </a>*/
/* */
/* {% endif %}*/
/* */
/* */
/* {% endfor %}*/
/* #}*/
/* */
/* */
/* */
/* */
/*   {% endblock %}*/
/* */
