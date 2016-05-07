<?php

/* ::base20.html.twig */
class __TwigTemplate_b9816bfa5e896198e5b399f4ee5a0c52d477fc7acfd0f158601ba22074217e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_579ac808a9ce106129143e3037ba30c7b70e59de790b3cbe48fe92210525ca99 = $this->env->getExtension("native_profiler");
        $__internal_579ac808a9ce106129143e3037ba30c7b70e59de790b3cbe48fe92210525ca99->enter($__internal_579ac808a9ce106129143e3037ba30c7b70e59de790b3cbe48fe92210525ca99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base20.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
          <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
    <div class=\"container\">
    <div class=\"row\">
  <div class=\"col-md-4\">
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li role=\"presentation\" ><a href=\"#\">Home</a></li>
      <li role=\"presentation\"><a href=\"#\">About us</a></li>
      <li role=\"presentation\"><a href=\"#\">Les medicaments</a></li>
    </div>
  <div class=\"col-md-4 col-md-offset-4\">
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li role=\"presentation\" ><a href=\"#\">Home</a></li>
      <li role=\"presentation\"><a href=\"#\">About us</a></li>
      <li role=\"presentation\"><a href=\"#\">Les medicaments</a></li>
  </div>
</div>



    </ul>

</div>

</div>







      <div class=\"starter-template\">
        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
        
        $__internal_579ac808a9ce106129143e3037ba30c7b70e59de790b3cbe48fe92210525ca99->leave($__internal_579ac808a9ce106129143e3037ba30c7b70e59de790b3cbe48fe92210525ca99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1215bc5937b312deb924876bdfa21794e3a1d8dbcbd738375eeb1b9865ed6fbb = $this->env->getExtension("native_profiler");
        $__internal_1215bc5937b312deb924876bdfa21794e3a1d8dbcbd738375eeb1b9865ed6fbb->enter($__internal_1215bc5937b312deb924876bdfa21794e3a1d8dbcbd738375eeb1b9865ed6fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1215bc5937b312deb924876bdfa21794e3a1d8dbcbd738375eeb1b9865ed6fbb->leave($__internal_1215bc5937b312deb924876bdfa21794e3a1d8dbcbd738375eeb1b9865ed6fbb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_138c782399cece4c338971640d2c561eac0fc4643d2a92546ad41c3f7d2b8b47 = $this->env->getExtension("native_profiler");
        $__internal_138c782399cece4c338971640d2c561eac0fc4643d2a92546ad41c3f7d2b8b47->enter($__internal_138c782399cece4c338971640d2c561eac0fc4643d2a92546ad41c3f7d2b8b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_138c782399cece4c338971640d2c561eac0fc4643d2a92546ad41c3f7d2b8b47->leave($__internal_138c782399cece4c338971640d2c561eac0fc4643d2a92546ad41c3f7d2b8b47_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_9118eea0c1914ab7b66b7aca9d8a4eaa70bc1f549e44635407d979d226f34d25 = $this->env->getExtension("native_profiler");
        $__internal_9118eea0c1914ab7b66b7aca9d8a4eaa70bc1f549e44635407d979d226f34d25->enter($__internal_9118eea0c1914ab7b66b7aca9d8a4eaa70bc1f549e44635407d979d226f34d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9118eea0c1914ab7b66b7aca9d8a4eaa70bc1f549e44635407d979d226f34d25->leave($__internal_9118eea0c1914ab7b66b7aca9d8a4eaa70bc1f549e44635407d979d226f34d25_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4b4008e64484a93c9e203ce7a71c855c5727105e088b7f2ba0913171ea2e08f = $this->env->getExtension("native_profiler");
        $__internal_e4b4008e64484a93c9e203ce7a71c855c5727105e088b7f2ba0913171ea2e08f->enter($__internal_e4b4008e64484a93c9e203ce7a71c855c5727105e088b7f2ba0913171ea2e08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e4b4008e64484a93c9e203ce7a71c855c5727105e088b7f2ba0913171ea2e08f->leave($__internal_e4b4008e64484a93c9e203ce7a71c855c5727105e088b7f2ba0913171ea2e08f_prof);

    }

    public function getTemplateName()
    {
        return "::base20.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  133 => 47,  122 => 6,  110 => 5,  101 => 53,  99 => 52,  94 => 50,  90 => 49,  87 => 48,  85 => 47,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*           <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*     <div class="container">*/
/*     <div class="row">*/
/*   <div class="col-md-4">*/
/*     <ul class="nav nav-tabs" role="tablist">*/
/*       <li role="presentation" ><a href="#">Home</a></li>*/
/*       <li role="presentation"><a href="#">About us</a></li>*/
/*       <li role="presentation"><a href="#">Les medicaments</a></li>*/
/*     </div>*/
/*   <div class="col-md-4 col-md-offset-4">*/
/*     <ul class="nav nav-tabs" role="tablist">*/
/*       <li role="presentation" ><a href="#">Home</a></li>*/
/*       <li role="presentation"><a href="#">About us</a></li>*/
/*       <li role="presentation"><a href="#">Les medicaments</a></li>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/*     </ul>*/
/* */
/* </div>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*       <div class="starter-template">*/
/*         <h1>Bootstrap starter template</h1>*/
/*         <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>*/
/*       </div>*/
/* */
/*     </div>*/
/*         {% block body %}{% endblock %}*/
/* */
/*         <script src="{{ asset("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js") }}"> </script>*/
/*         <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
