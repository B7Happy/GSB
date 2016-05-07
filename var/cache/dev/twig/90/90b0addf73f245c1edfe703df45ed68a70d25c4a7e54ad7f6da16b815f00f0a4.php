<?php

/* PPEPharBundle:Compte:index.html.twig */
class __TwigTemplate_2f99d990b426059504463181e838aacf5ab3f0518f40ac5d36783606fcd7d95c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::essai.html.twig", "PPEPharBundle:Compte:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::essai.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07b306c7af5c9021ddbde26212cc90f43583e92e6dbaa18f681265bb58ad7418 = $this->env->getExtension("native_profiler");
        $__internal_07b306c7af5c9021ddbde26212cc90f43583e92e6dbaa18f681265bb58ad7418->enter($__internal_07b306c7af5c9021ddbde26212cc90f43583e92e6dbaa18f681265bb58ad7418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Compte:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07b306c7af5c9021ddbde26212cc90f43583e92e6dbaa18f681265bb58ad7418->leave($__internal_07b306c7af5c9021ddbde26212cc90f43583e92e6dbaa18f681265bb58ad7418_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c423ea4091885c163d9e2d27e544c0489b4d8cb974e9dc63e5efb4d7de18426 = $this->env->getExtension("native_profiler");
        $__internal_1c423ea4091885c163d9e2d27e544c0489b4d8cb974e9dc63e5efb4d7de18426->enter($__internal_1c423ea4091885c163d9e2d27e544c0489b4d8cb974e9dc63e5efb4d7de18426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"col-md-9\">

<h4>Bienvenu dans votre esapce ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo " </h4>
<br>

<div class=\"row\">
<div class=\"col-md-7\">Profitez de toutes les fonctionnalités qui sont disponibles sur votre espace personnel pour voir , suivre et gérer toutes vos données. </div>

</div>

</div>
</div>

";
        
        $__internal_1c423ea4091885c163d9e2d27e544c0489b4d8cb974e9dc63e5efb4d7de18426->leave($__internal_1c423ea4091885c163d9e2d27e544c0489b4d8cb974e9dc63e5efb4d7de18426_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Compte:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::essai.html.twig"%}*/
/* */
/* {% block body %}*/
/* */
/* <div class="col-md-9">*/
/* */
/* <h4>Bienvenu dans votre esapce {{nom}} {{prenom}} </h4>*/
/* <br>*/
/* */
/* <div class="row">*/
/* <div class="col-md-7">Profitez de toutes les fonctionnalités qui sont disponibles sur votre espace personnel pour voir , suivre et gérer toutes vos données. </div>*/
/* */
/* </div>*/
/* */
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
