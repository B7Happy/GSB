<?php

/* PPEPharBundle:Produit:payer.html.twig */
class __TwigTemplate_20fb7035bbded538471f9c926ed761d3e2cbe3bb1713bf2638ed10779d2cca5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Produit:payer.html.twig", 2);
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
        $__internal_d59e4c21ff9ff2f238ad16f8c4267bad4035e33a1889405a75e149a54309949c = $this->env->getExtension("native_profiler");
        $__internal_d59e4c21ff9ff2f238ad16f8c4267bad4035e33a1889405a75e149a54309949c->enter($__internal_d59e4c21ff9ff2f238ad16f8c4267bad4035e33a1889405a75e149a54309949c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Produit:payer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59e4c21ff9ff2f238ad16f8c4267bad4035e33a1889405a75e149a54309949c->leave($__internal_d59e4c21ff9ff2f238ad16f8c4267bad4035e33a1889405a75e149a54309949c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a28835d986c12265479c836f29eb584e840f24192f9bb24fde4e2cbb405ac63 = $this->env->getExtension("native_profiler");
        $__internal_2a28835d986c12265479c836f29eb584e840f24192f9bb24fde4e2cbb405ac63->enter($__internal_2a28835d986c12265479c836f29eb584e840f24192f9bb24fde4e2cbb405ac63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "




  ";
        
        $__internal_2a28835d986c12265479c836f29eb584e840f24192f9bb24fde4e2cbb405ac63->leave($__internal_2a28835d986c12265479c836f29eb584e840f24192f9bb24fde4e2cbb405ac63_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_13f87351aea40466a31a71564bfcaf3e4847051e09bac4689087d49b5a290157 = $this->env->getExtension("native_profiler");
        $__internal_13f87351aea40466a31a71564bfcaf3e4847051e09bac4689087d49b5a290157->enter($__internal_13f87351aea40466a31a71564bfcaf3e4847051e09bac4689087d49b5a290157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "




<h2 class=\"page-header\"> Paiement </h2>
</br>



<form>
  <div class=\"form-group\">
    <label >Numero de carte :</label>
    <input  class=\"form-control\" placeholder=\"\">
  </div>
  <div class=\"form-group\">
    <label >Date d'experiation :</label>
    <input type=\"date\" class=\"form-control\" >
  </div>
  <div class=\"form-group\">
    <label >Grytogramme visuel</label>
    <input type=\"number\" class=\"form-control\" >
  </div>
  <div class=\"form-group\">
    <label >Nom</label>
    <input type=\"text\" class=\"form-control\" >
  </div>




         <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("liv");
        echo "\"   class=\"btn btn-danger\"> Annuler  </a>       <a href=\"";
        echo $this->env->getExtension('routing')->getPath("confirmer");
        echo "\"   class=\"btn btn-primary\"> Confirmer  </a>
</form>



  ";
        
        $__internal_13f87351aea40466a31a71564bfcaf3e4847051e09bac4689087d49b5a290157->leave($__internal_13f87351aea40466a31a71564bfcaf3e4847051e09bac4689087d49b5a290157_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Produit:payer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 44,  59 => 13,  53 => 12,  41 => 5,  35 => 4,  11 => 2,);
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
/* */
/* */
/* */
/* */
/* <h2 class="page-header"> Paiement </h2>*/
/* </br>*/
/* */
/* */
/* */
/* <form>*/
/*   <div class="form-group">*/
/*     <label >Numero de carte :</label>*/
/*     <input  class="form-control" placeholder="">*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label >Date d'experiation :</label>*/
/*     <input type="date" class="form-control" >*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label >Grytogramme visuel</label>*/
/*     <input type="number" class="form-control" >*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label >Nom</label>*/
/*     <input type="text" class="form-control" >*/
/*   </div>*/
/* */
/* */
/* */
/* */
/*          <a href="{{path('liv') }}"   class="btn btn-danger"> Annuler  </a>       <a href="{{path('confirmer') }}"   class="btn btn-primary"> Confirmer  </a>*/
/* </form>*/
/* */
/* */
/* */
/*   {% endblock %}*/
/* */
