<?php

/* PPEPharBundle:Produit:panier.html.twig */
class __TwigTemplate_b4d80e9050b988f54f581cbf6f97686c385a6702e1aa1caeff287b68a6af9bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Produit:panier.html.twig", 2);
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
        $__internal_26f3f555ccd8651f8c5a6bf8ddfcecf19ee3784673a89a977b93d9d7fec57f17 = $this->env->getExtension("native_profiler");
        $__internal_26f3f555ccd8651f8c5a6bf8ddfcecf19ee3784673a89a977b93d9d7fec57f17->enter($__internal_26f3f555ccd8651f8c5a6bf8ddfcecf19ee3784673a89a977b93d9d7fec57f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Produit:panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f3f555ccd8651f8c5a6bf8ddfcecf19ee3784673a89a977b93d9d7fec57f17->leave($__internal_26f3f555ccd8651f8c5a6bf8ddfcecf19ee3784673a89a977b93d9d7fec57f17_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2137e971c60af1479554bc3200e89e0bd20c433fe834f613a11279d16f9a3446 = $this->env->getExtension("native_profiler");
        $__internal_2137e971c60af1479554bc3200e89e0bd20c433fe834f613a11279d16f9a3446->enter($__internal_2137e971c60af1479554bc3200e89e0bd20c433fe834f613a11279d16f9a3446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "


  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  ";
        
        $__internal_2137e971c60af1479554bc3200e89e0bd20c433fe834f613a11279d16f9a3446->leave($__internal_2137e971c60af1479554bc3200e89e0bd20c433fe834f613a11279d16f9a3446_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fa38ea8ca3442a318bd2604629857f8d3aed1420f0e4b9c5432d6ece59f0fac = $this->env->getExtension("native_profiler");
        $__internal_0fa38ea8ca3442a318bd2604629857f8d3aed1420f0e4b9c5432d6ece59f0fac->enter($__internal_0fa38ea8ca3442a318bd2604629857f8d3aed1420f0e4b9c5432d6ece59f0fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<h2 class=\"page-header\"> Panier </h2>


<table class=\"table table-hover\">
<thead>
   <tr>
       <th>Nom </th>
       <th> choix du Quantité</th>
       <th>Quantité </th>
       <th>Prix</th>
       <th>Total HT</th>

   </tr>
</thead>
<tdody>
";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["Medicament"]) ? $context["Medicament"] : $this->getContext($context, "Medicament"))) == 0)) {
            // line 30
            echo "<tr>
  <td> Aucun articles dans votre panier </td>
  </tr>
  ";
        }
        // line 34
        echo "
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Medicament"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Medicament"]) {
            // line 36
            echo "   <tr>


       <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "Nom", array()), "html", null, true);
            echo "</td>
       <td>

       <select name=\"qte\" id=\"mySelect\" onchange=\"func()  \" >
  <script>
function func() {
    var x = document.getElementById(\"mySelect\").value;
    document.getElementById(\"qte\").innerHTML = \"\"+x;

}
</script>
";
            // line 50
            $context["i"] = "";
            // line 51
            echo "       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                echo "
       <option value=\"";
                // line 53
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" >   ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "  </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "       ";
            $context["qte"] = (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"));
            // line 56
            echo "
       </select>
       </td>
 ";
            // line 59
            $context["qte"] = 1;
            // line 60
            echo "       <td id =\"qte\"> ";
            echo twig_escape_filter($this->env, (isset($context["qte"]) ? $context["qte"] : $this->getContext($context, "qte")), "html", null, true);
            echo " </td>>

       <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "prix", array()), "html", null, true);
            echo " </td>


       <td>";
            // line 65
            echo twig_escape_filter($this->env, ($this->getAttribute($context["Medicament"], "prix", array()) * (isset($context["qte"]) ? $context["qte"] : $this->getContext($context, "qte"))), "html", null, true);
            echo " </td>
       <td>

 ";
            // line 69
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("span", array("id" => $this->getAttribute($context["Medicament"], "id", array()))), "html", null, true);
            echo "\"   class=\"btn btn-danger\"> Sup  </a>
</td>


</tr>

</tbody>
</table>
";
            // line 77
            $context["totalHT"] = "";
            // line 78
            $context["tva"] = "";
            // line 79
            $context["total"] = "";
            // line 80
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["Medicament"], "prix", array()) * (isset($context["qte"]) ? $context["qte"] : $this->getContext($context, "qte"))));
            // line 81
            $context["tva"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) * (20 / 100));
            // line 82
            $context["total"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + (isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            // line 83
            echo "
<d1 class=\"d3-horizontal \">
<dt> Total HT :  </dt>
<dd> ";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " </dd>

<dt> Tva 20 % : </dt>
<dd> ";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")), "html", null, true);
            echo " </dd>

<dt> Total : </dt>
<dd> ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " </dd>

</br>

 <a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("liv");
            echo "\"   class=\"btn btn-primary\"> Confirmer  </a>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Medicament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "

  ";
        
        $__internal_0fa38ea8ca3442a318bd2604629857f8d3aed1420f0e4b9c5432d6ece59f0fac->leave($__internal_0fa38ea8ca3442a318bd2604629857f8d3aed1420f0e4b9c5432d6ece59f0fac_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Produit:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 101,  210 => 96,  203 => 92,  197 => 89,  191 => 86,  186 => 83,  184 => 82,  182 => 81,  180 => 80,  178 => 79,  176 => 78,  174 => 77,  162 => 69,  156 => 65,  150 => 62,  144 => 60,  142 => 59,  137 => 56,  134 => 55,  124 => 53,  121 => 52,  116 => 51,  114 => 50,  100 => 39,  95 => 36,  91 => 35,  88 => 34,  82 => 30,  80 => 29,  62 => 13,  56 => 12,  46 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/* <h2 class="page-header"> Panier </h2>*/
/* */
/* */
/* <table class="table table-hover">*/
/* <thead>*/
/*    <tr>*/
/*        <th>Nom </th>*/
/*        <th> choix du Quantité</th>*/
/*        <th>Quantité </th>*/
/*        <th>Prix</th>*/
/*        <th>Total HT</th>*/
/* */
/*    </tr>*/
/* </thead>*/
/* <tdody>*/
/* {% if Medicament|length == 0 %}*/
/* <tr>*/
/*   <td> Aucun articles dans votre panier </td>*/
/*   </tr>*/
/*   {% endif %}*/
/* */
/* {% for Medicament in Medicament %}*/
/*    <tr>*/
/* */
/* */
/*        <td>{{ Medicament.Nom}}</td>*/
/*        <td>*/
/* */
/*        <select name="qte" id="mySelect" onchange="func()  " >*/
/*   <script>*/
/* function func() {*/
/*     var x = document.getElementById("mySelect").value;*/
/*     document.getElementById("qte").innerHTML = ""+x;*/
/* */
/* }*/
/* </script>*/
/* {% set i = "" %}*/
/*        {% for i  in 1..10 %}*/
/* */
/*        <option value="{{i}}" >   {{i}}  </option>*/
/*         {% endfor %}*/
/*        {% set qte = i %}*/
/* */
/*        </select>*/
/*        </td>*/
/*  {% set qte = 1%}*/
/*        <td id ="qte"> {{qte}} </td>>*/
/* */
/*        <td>{{ Medicament.prix}} </td>*/
/* */
/* */
/*        <td>{{ Medicament.prix * qte}} </td>*/
/*        <td>*/
/* */
/*  {#<a href="{{path('prep')}}"   class="btn btn-primary"> Acheter  </a> #}*/
/*  <a href="{{path('span', { 'id' : Medicament.id})}}"   class="btn btn-danger"> Sup  </a>*/
/* </td>*/
/* */
/* */
/* </tr>*/
/* */
/* </tbody>*/
/* </table>*/
/* {% set totalHT = "" %}*/
/* {% set tva = "" %}*/
/* {% set total= "" %}*/
/* {% set totalHT = totalHT + (Medicament.prix * qte)%}*/
/* {% set tva = totalHT * (20/100) %}*/
/* {% set total= totalHT + tva %}*/
/* */
/* <d1 class="d3-horizontal ">*/
/* <dt> Total HT :  </dt>*/
/* <dd> {{totalHT}} </dd>*/
/* */
/* <dt> Tva 20 % : </dt>*/
/* <dd> {{tva}} </dd>*/
/* */
/* <dt> Total : </dt>*/
/* <dd> {{total}} </dd>*/
/* */
/* </br>*/
/* */
/*  <a href="{{path('liv')}}"   class="btn btn-primary"> Confirmer  </a>*/
/* */
/* */
/* */
/* {% endfor %}*/
/* */
/* */
/*   {% endblock %}*/
/* */
