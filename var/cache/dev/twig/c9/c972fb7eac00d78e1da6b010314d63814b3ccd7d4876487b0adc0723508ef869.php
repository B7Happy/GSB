<?php

/* PPEPharBundle:Admin:login.html.twig */
class __TwigTemplate_f0510cabd622533408cf405f75bb1cad5838edcaf3b6f9c74f2cd2ec1621fc51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Admin:login.html.twig", 2);
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
        $__internal_ad72dfddc35d720f232b25645c89e424a826fa2542c6170cb2b1c334cf2dcd75 = $this->env->getExtension("native_profiler");
        $__internal_ad72dfddc35d720f232b25645c89e424a826fa2542c6170cb2b1c334cf2dcd75->enter($__internal_ad72dfddc35d720f232b25645c89e424a826fa2542c6170cb2b1c334cf2dcd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad72dfddc35d720f232b25645c89e424a826fa2542c6170cb2b1c334cf2dcd75->leave($__internal_ad72dfddc35d720f232b25645c89e424a826fa2542c6170cb2b1c334cf2dcd75_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb7b28c40a1fdf22001de510f05cd5c4d7e77816f4660eef33e9791185a7b8e5 = $this->env->getExtension("native_profiler");
        $__internal_eb7b28c40a1fdf22001de510f05cd5c4d7e77816f4660eef33e9791185a7b8e5->enter($__internal_eb7b28c40a1fdf22001de510f05cd5c4d7e77816f4660eef33e9791185a7b8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "


  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  ";
        
        $__internal_eb7b28c40a1fdf22001de510f05cd5c4d7e77816f4660eef33e9791185a7b8e5->leave($__internal_eb7b28c40a1fdf22001de510f05cd5c4d7e77816f4660eef33e9791185a7b8e5_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c999e97c4a41b9e56f62fbb4c06209f0eb7574347e975baeab01a3df383cbe23 = $this->env->getExtension("native_profiler");
        $__internal_c999e97c4a41b9e56f62fbb4c06209f0eb7574347e975baeab01a3df383cbe23->enter($__internal_c999e97c4a41b9e56f62fbb4c06209f0eb7574347e975baeab01a3df383cbe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<div class=\"container\">

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 17
            echo "      <div class=\"alert alert-success\">
      <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
      ";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 24
            echo "            <div class=\"alert alert-danger\">
            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
            ";
            // line 26
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
<form class=\"form-signin\" method =\"POST\" action\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("homelogin");
        echo ">
  <h2 class=\"form-signin-heading\">Administrateur</h2>
  <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
  <input type=\"text\"  name=\"iden\" class=\"form-control\" placeholder=\"address mail \" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\"  name=\"mp\" class=\"form-control\" placeholder=\"Mot de passe\" required>
  <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" name=\"remember\" value=\"remember-me\" > Garder ma session active

    </label>
  </div>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"> Connexion </button>

</form>

</div>


";
        
        $__internal_c999e97c4a41b9e56f62fbb4c06209f0eb7574347e975baeab01a3df383cbe23->leave($__internal_c999e97c4a41b9e56f62fbb4c06209f0eb7574347e975baeab01a3df383cbe23_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  104 => 29,  95 => 26,  91 => 24,  87 => 23,  84 => 22,  75 => 19,  71 => 17,  67 => 16,  62 => 13,  56 => 12,  46 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/* <div class="container">*/
/* */
/* {% for flash_message in app.session.flashbag.get('notice') %}*/
/*       <div class="alert alert-success">*/
/*       <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>*/
/*       {{flash_message}}*/
/*       </div>*/
/*       {% endfor %}*/
/* */
/*       {% for flash_message in app.session.flashbag.get('error') %}*/
/*             <div class="alert alert-danger">*/
/*             <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>*/
/*             {{flash_message}}*/
/*             </div>*/
/*             {% endfor %}*/
/* */
/* <form class="form-signin" method ="POST" action"{{path('homelogin')}}>*/
/*   <h2 class="form-signin-heading">Administrateur</h2>*/
/*   <label for="inputEmail" class="sr-only">Email address</label>*/
/*   <input type="text"  name="iden" class="form-control" placeholder="address mail " required autofocus>*/
/*   <label for="inputPassword" class="sr-only">Password</label>*/
/*   <input type="password"  name="mp" class="form-control" placeholder="Mot de passe" required>*/
/*   <div class="checkbox">*/
/*     <label>*/
/*       <input type="checkbox" name="remember" value="remember-me" > Garder ma session active*/
/* */
/*     </label>*/
/*   </div>*/
/*   <button class="btn btn-lg btn-primary btn-block" type="submit"> Connexion </button>*/
/* */
/* </form>*/
/* */
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
