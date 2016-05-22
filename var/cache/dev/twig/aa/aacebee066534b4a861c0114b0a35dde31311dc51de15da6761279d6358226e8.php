<?php

/* PPEPharBundle:Admin:index.html.twig */
class __TwigTemplate_b3376fdc399404c5dd43b7a91b6886e3ecec278c7affb7d92a3fb48087c83d5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "PPEPharBundle:Admin:index.html.twig", 1);
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
        $__internal_98bb0ab392be3c892b9b22b6f199b2870c7814ca27c8c52586620beacae65219 = $this->env->getExtension("native_profiler");
        $__internal_98bb0ab392be3c892b9b22b6f199b2870c7814ca27c8c52586620beacae65219->enter($__internal_98bb0ab392be3c892b9b22b6f199b2870c7814ca27c8c52586620beacae65219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98bb0ab392be3c892b9b22b6f199b2870c7814ca27c8c52586620beacae65219->leave($__internal_98bb0ab392be3c892b9b22b6f199b2870c7814ca27c8c52586620beacae65219_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24e12dcf05468a22c5ec6898371a33e9a6812b9a629b2290793d4eec195ff62e = $this->env->getExtension("native_profiler");
        $__internal_24e12dcf05468a22c5ec6898371a33e9a6812b9a629b2290793d4eec195ff62e->enter($__internal_24e12dcf05468a22c5ec6898371a33e9a6812b9a629b2290793d4eec195ff62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<h2 class=\"page-header\"> Les Medicaments </h2>
<table class=\"table table-hover\">
<thead>
   <tr>
       <th>Type </th>
       <th>Nom</th>
       <th>Effet</th>
       <th>precaution</th>
       <th>Prix</th>
       <th> </th>
   </tr>
</thead>
<tdody>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Medicament"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Medicament"]) {
            // line 20
            echo "   <tr>

       <td scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "Type", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "Nom", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "effet", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "precaution", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "prix", array()), "html", null, true);
            echo "</td>

   <td>

<a href=\"/Symfony/web/app_dev.php/admin/edit/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "id", array()), "html", null, true);
            echo "\"  class=\"btn btn-default\"> Edit </a>
<a href=\"/Symfony/web/app_dev.php/admin/delete/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medicament"], "id", array()), "html", null, true);
            echo "\"  class=\"btn btn-danger\"> Delete </a>

</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Medicament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</tbody>
</table>



";
        
        $__internal_24e12dcf05468a22c5ec6898371a33e9a6812b9a629b2290793d4eec195ff62e->leave($__internal_24e12dcf05468a22c5ec6898371a33e9a6812b9a629b2290793d4eec195ff62e_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  92 => 31,  88 => 30,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base2.html.twig"%}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <h2 class="page-header"> Les Medicaments </h2>*/
/* <table class="table table-hover">*/
/* <thead>*/
/*    <tr>*/
/*        <th>Type </th>*/
/*        <th>Nom</th>*/
/*        <th>Effet</th>*/
/*        <th>precaution</th>*/
/*        <th>Prix</th>*/
/*        <th> </th>*/
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
/*        <td>{{ Medicament.prix}}</td>*/
/* */
/*    <td>*/
/* */
/* <a href="/Symfony/web/app_dev.php/admin/edit/{{Medicament.id}}"  class="btn btn-default"> Edit </a>*/
/* <a href="/Symfony/web/app_dev.php/admin/delete/{{Medicament.id}}"  class="btn btn-danger"> Delete </a>*/
/* */
/* </td>*/
/* </tr>*/
/* {% endfor %}*/
/* </tbody>*/
/* </table>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
