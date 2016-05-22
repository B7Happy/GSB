<?php

/* PPEPharBundle:Admin:cliindex.html.twig */
class __TwigTemplate_8e46fec2fb51c684513125bc8d8e279d8ae12c96f5bedc2d3927ca3c6ed410c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "PPEPharBundle:Admin:cliindex.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf7a014fc121bc29fc0cedc103f945e5614d38e5caa8c96bfc52a7b06edbc16a = $this->env->getExtension("native_profiler");
        $__internal_cf7a014fc121bc29fc0cedc103f945e5614d38e5caa8c96bfc52a7b06edbc16a->enter($__internal_cf7a014fc121bc29fc0cedc103f945e5614d38e5caa8c96bfc52a7b06edbc16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Admin:cliindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7a014fc121bc29fc0cedc103f945e5614d38e5caa8c96bfc52a7b06edbc16a->leave($__internal_cf7a014fc121bc29fc0cedc103f945e5614d38e5caa8c96bfc52a7b06edbc16a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff1d7ad8971a814b02020b13796c7da384d7f3e36a5fc22fa78be02b520ef649 = $this->env->getExtension("native_profiler");
        $__internal_ff1d7ad8971a814b02020b13796c7da384d7f3e36a5fc22fa78be02b520ef649->enter($__internal_ff1d7ad8971a814b02020b13796c7da384d7f3e36a5fc22fa78be02b520ef649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<h2 class=\"page-header\"> Les Client </h2>
<table class=\"table table-hover\">
<thead>
   <tr>
       <th>Prenom </th>
       <th>Nom</th>
       <th>Num telephone</th>
          <th>Adresse</th>
             <th>Ville</th>


   </tr>
</thead>
<tdody>
";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["Client"]) ? $context["Client"] : $this->getContext($context, "Client"))) == 0)) {
            // line 21
            echo "    <tr>
        <td> <centre> Aucune facture actuellement. </centre>   </td>
    </tr>
";
        }
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Client"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Client"]) {
            // line 26
            echo "   <tr>

       <td scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["Client"], "prenom", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["Client"], "nom", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Client"], "telephone", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Client"], "adresse", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Client"], "ville", array()), "html", null, true);
            echo "</td>



</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</tbody>
</table>



";
        
        $__internal_ff1d7ad8971a814b02020b13796c7da384d7f3e36a5fc22fa78be02b520ef649->leave($__internal_ff1d7ad8971a814b02020b13796c7da384d7f3e36a5fc22fa78be02b520ef649_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Admin:cliindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 26,  66 => 25,  60 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base2.html.twig"%}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <h2 class="page-header"> Les Client </h2>*/
/* <table class="table table-hover">*/
/* <thead>*/
/*    <tr>*/
/*        <th>Prenom </th>*/
/*        <th>Nom</th>*/
/*        <th>Num telephone</th>*/
/*           <th>Adresse</th>*/
/*              <th>Ville</th>*/
/* */
/* */
/*    </tr>*/
/* </thead>*/
/* <tdody>*/
/* {% if Client|length == 0 %}*/
/*     <tr>*/
/*         <td> <centre> Aucune facture actuellement. </centre>   </td>*/
/*     </tr>*/
/* {% endif %}*/
/* {% for Client in Client %}*/
/*    <tr>*/
/* */
/*        <td scope="row">{{ Client.prenom}}</td>*/
/*        <td>{{ Client.nom}}</td>*/
/*        <td>{{ Client.telephone}}</td>*/
/*        <td>{{ Client.adresse}}</td>*/
/*        <td>{{ Client.ville}}</td>*/
/* */
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
