<?php

/* PPEPharBundle:Login:index.html.twig */
class __TwigTemplate_8da84f660e125743ffad45ab0c37285120877fef0bc5af47d6e28e2b21237740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base0.html.twig", "PPEPharBundle:Login:index.html.twig", 2);
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
        $__internal_f763017945b2bdc2c299ee988166be0208c90a959f9b84dfe93860b56a91b670 = $this->env->getExtension("native_profiler");
        $__internal_f763017945b2bdc2c299ee988166be0208c90a959f9b84dfe93860b56a91b670->enter($__internal_f763017945b2bdc2c299ee988166be0208c90a959f9b84dfe93860b56a91b670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPEPharBundle:Login:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f763017945b2bdc2c299ee988166be0208c90a959f9b84dfe93860b56a91b670->leave($__internal_f763017945b2bdc2c299ee988166be0208c90a959f9b84dfe93860b56a91b670_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_957bd1ff3c3f265ea7d7c1a4d4fbb46b5e3ff80f18d5d030b82c00397e309a2a = $this->env->getExtension("native_profiler");
        $__internal_957bd1ff3c3f265ea7d7c1a4d4fbb46b5e3ff80f18d5d030b82c00397e309a2a->enter($__internal_957bd1ff3c3f265ea7d7c1a4d4fbb46b5e3ff80f18d5d030b82c00397e309a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "


  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  ";
        
        $__internal_957bd1ff3c3f265ea7d7c1a4d4fbb46b5e3ff80f18d5d030b82c00397e309a2a->leave($__internal_957bd1ff3c3f265ea7d7c1a4d4fbb46b5e3ff80f18d5d030b82c00397e309a2a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_542e4eb1631bded8b5b3f5d38983bb9fa6fb9a6c242f47856620c6d68db47c23 = $this->env->getExtension("native_profiler");
        $__internal_542e4eb1631bded8b5b3f5d38983bb9fa6fb9a6c242f47856620c6d68db47c23->enter($__internal_542e4eb1631bded8b5b3f5d38983bb9fa6fb9a6c242f47856620c6d68db47c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
  <h2 class=\"form-signin-heading\">Connecter ici</h2>
  <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
  <input type=\"text\"  name=\"identifiant\" class=\"form-control\" placeholder=\"address mail \" required autofocus>
  <label for=\"inputPassword\" class=\"sr-only\">Password</label>
  <input type=\"password\"  name=\"mp\" class=\"form-control\" placeholder=\"Mot de passe\" required>
  <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" name=\"remember\" value=\"remember-me\" > Garder ma session active

    </label>
  </div>
  <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"> Connexion </button>
  <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("signup");
        echo "\" > S'inscrir' </a>
</form>

</div>

";
        // line 48
        if (array_key_exists("Nom", $context)) {
            // line 49
            echo "
<div class=\"alert-info fade in\">
<strong> Bienvenu ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["Nom"]) ? $context["Nom"] : $this->getContext($context, "Nom")), "html", null, true);
            echo " </strong>
</div>
";
        }
        
        $__internal_542e4eb1631bded8b5b3f5d38983bb9fa6fb9a6c242f47856620c6d68db47c23->leave($__internal_542e4eb1631bded8b5b3f5d38983bb9fa6fb9a6c242f47856620c6d68db47c23_prof);

    }

    public function getTemplateName()
    {
        return "PPEPharBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  133 => 49,  131 => 48,  123 => 43,  107 => 30,  104 => 29,  95 => 26,  91 => 24,  87 => 23,  84 => 22,  75 => 19,  71 => 17,  67 => 16,  62 => 13,  56 => 12,  46 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/*   <h2 class="form-signin-heading">Connecter ici</h2>*/
/*   <label for="inputEmail" class="sr-only">Email address</label>*/
/*   <input type="text"  name="identifiant" class="form-control" placeholder="address mail " required autofocus>*/
/*   <label for="inputPassword" class="sr-only">Password</label>*/
/*   <input type="password"  name="mp" class="form-control" placeholder="Mot de passe" required>*/
/*   <div class="checkbox">*/
/*     <label>*/
/*       <input type="checkbox" name="remember" value="remember-me" > Garder ma session active*/
/* */
/*     </label>*/
/*   </div>*/
/*   <button class="btn btn-lg btn-primary btn-block" type="submit"> Connexion </button>*/
/*   <a href="{{path('signup')}}" > S'inscrir' </a>*/
/* </form>*/
/* */
/* </div>*/
/* */
/* {% if Nom is defined %}*/
/* */
/* <div class="alert-info fade in">*/
/* <strong> Bienvenu {{Nom}} </strong>*/
/* </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
