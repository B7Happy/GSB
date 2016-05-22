<?php

/* PPEPharBundle:Admin:create.html.twig */
class __TwigTemplate_093bf6e810b5021d2f2dd161dd33d3b10236d1cd1b04fe211c7e141d7588dab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "PPEPharBundle:Admin:create.html.twig", 1);
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
        $__internal_90eb5fa3505055ea65702e5e1e8c81c4af7793f29b78cea80ed8e6413517b0ca = $this->env->getExtension("native_profiler");
        $__internal_90eb5fa3505055ea65702e5e1e8c81c4af7793f29b78cea80ed8e6413517b0ca->enter($__internal_90eb5fa3505055ea65702e5e1e8c81c4af7793f29b78cea80ed8e6413517b0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Admin:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90eb5fa3505055ea65702e5e1e8c81c4af7793f29b78cea80ed8e6413517b0ca->leave($__internal_90eb5fa3505055ea65702e5e1e8c81c4af7793f29b78cea80ed8e6413517b0ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_638a754ecf4dae6b24f9d5d7406a749e987aa0a3ca619cff83c3bc866994e426 = $this->env->getExtension("native_profiler");
        $__internal_638a754ecf4dae6b24f9d5d7406a749e987aa0a3ca619cff83c3bc866994e426->enter($__internal_638a754ecf4dae6b24f9d5d7406a749e987aa0a3ca619cff83c3bc866994e426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h2 class=\"page-header\">Creer un Medicament </h2>
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
        
        $__internal_638a754ecf4dae6b24f9d5d7406a749e987aa0a3ca619cff83c3bc866994e426->leave($__internal_638a754ecf4dae6b24f9d5d7406a749e987aa0a3ca619cff83c3bc866994e426_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Admin:create.html.twig";
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
/* {% extends "::base2.html.twig"%}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="page-header">Creer un Medicament </h2>*/
/*   {{form_start(form)}}*/
/*   {{form_widget(form)}}*/
/*   {{form_end(form)}}*/
/* {% endblock %}*/
/* */
