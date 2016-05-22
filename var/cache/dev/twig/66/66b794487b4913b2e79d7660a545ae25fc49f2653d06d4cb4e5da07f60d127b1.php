<?php

/* PPEPharBundle:Produit:confirmer.html.twig */
class __TwigTemplate_9884340c75513db9511198b8b3f9a0938a7a079bdab04256387445cc661c758f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Produit:confirmer.html.twig", 1);
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
        $__internal_b1c09dd89d76bbe1b4d58d1b930d05e27ba5fba2e6ff25ef60ae91253b38c7b7 = $this->env->getExtension("native_profiler");
        $__internal_b1c09dd89d76bbe1b4d58d1b930d05e27ba5fba2e6ff25ef60ae91253b38c7b7->enter($__internal_b1c09dd89d76bbe1b4d58d1b930d05e27ba5fba2e6ff25ef60ae91253b38c7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Produit:confirmer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c09dd89d76bbe1b4d58d1b930d05e27ba5fba2e6ff25ef60ae91253b38c7b7->leave($__internal_b1c09dd89d76bbe1b4d58d1b930d05e27ba5fba2e6ff25ef60ae91253b38c7b7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9807dc2ff70cf7c777d0d35c1f2ee4d380d2048761eb8f47a262aaea23e70b1d = $this->env->getExtension("native_profiler");
        $__internal_9807dc2ff70cf7c777d0d35c1f2ee4d380d2048761eb8f47a262aaea23e70b1d->enter($__internal_9807dc2ff70cf7c777d0d35c1f2ee4d380d2048761eb8f47a262aaea23e70b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9807dc2ff70cf7c777d0d35c1f2ee4d380d2048761eb8f47a262aaea23e70b1d->leave($__internal_9807dc2ff70cf7c777d0d35c1f2ee4d380d2048761eb8f47a262aaea23e70b1d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6757f0999df5078037389d5df4fe185b7ece36273a8e3a1641923f82f53249b0 = $this->env->getExtension("native_profiler");
        $__internal_6757f0999df5078037389d5df4fe185b7ece36273a8e3a1641923f82f53249b0->enter($__internal_6757f0999df5078037389d5df4fe185b7ece36273a8e3a1641923f82f53249b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
</br>
</br>
</br>
<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("merci.jpg"), "html", null, true);
        echo "\" alt=\"panier\" class=\"img-rounded\">

";
        
        $__internal_6757f0999df5078037389d5df4fe185b7ece36273a8e3a1641923f82f53249b0->leave($__internal_6757f0999df5078037389d5df4fe185b7ece36273a8e3a1641923f82f53249b0_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Produit:confirmer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base0.html.twig"%}*/
/* */
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* </br>*/
/* </br>*/
/* </br>*/
/* <img src="{{ asset('merci.jpg') }}" alt="panier" class="img-rounded">*/
/* */
/* {% endblock %}*/
/* */
