<?php

/* PPEPharBundle:Login:signup.html.twig */
class __TwigTemplate_e12c5bbfb8616ebc333c1e081e245cda574ba01e71ac049b35b452f7e397e858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Login:signup.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base0.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42b95cf7c2e569477cd87ebc5c8e5c4ed1c605ec3546def2bfcb95d4b7b54590 = $this->env->getExtension("native_profiler");
        $__internal_42b95cf7c2e569477cd87ebc5c8e5c4ed1c605ec3546def2bfcb95d4b7b54590->enter($__internal_42b95cf7c2e569477cd87ebc5c8e5c4ed1c605ec3546def2bfcb95d4b7b54590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Login:signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42b95cf7c2e569477cd87ebc5c8e5c4ed1c605ec3546def2bfcb95d4b7b54590->leave($__internal_42b95cf7c2e569477cd87ebc5c8e5c4ed1c605ec3546def2bfcb95d4b7b54590_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee5c0c6cbf280b466f5bb02689741f96efa41672cf644e2faafc2cd862517a0 = $this->env->getExtension("native_profiler");
        $__internal_1ee5c0c6cbf280b466f5bb02689741f96efa41672cf644e2faafc2cd862517a0->enter($__internal_1ee5c0c6cbf280b466f5bb02689741f96efa41672cf644e2faafc2cd862517a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h2 class=\"page-header\">Cree un compte </h2>
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1ee5c0c6cbf280b466f5bb02689741f96efa41672cf644e2faafc2cd862517a0->leave($__internal_1ee5c0c6cbf280b466f5bb02689741f96efa41672cf644e2faafc2cd862517a0_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Login:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base0.html.twig"%}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="page-header">Cree un compte </h2>*/
/*   {{form_start(form)}}*/
/*   {{form_widget(form)}}*/
/*   {{form_end(form)}}*/
/* {% endblock %}*/
/* */
