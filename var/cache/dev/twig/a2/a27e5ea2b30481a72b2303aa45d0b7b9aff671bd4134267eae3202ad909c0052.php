<?php

/* ::base.html.twig */
class __TwigTemplate_69fad979ed6d143e98b70fbb3e0dcba3882266adf0504b3a3cf72748e916b1cf extends Twig_Template
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
        $__internal_80cfc1b440dcd4e664ee9fd6b66df2ee49a46cbc7b140183395fc3f6d2c02567 = $this->env->getExtension("native_profiler");
        $__internal_80cfc1b440dcd4e664ee9fd6b66df2ee49a46cbc7b140183395fc3f6d2c02567->enter($__internal_80cfc1b440dcd4e664ee9fd6b66df2ee49a46cbc7b140183395fc3f6d2c02567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    </head>
    <body>
      


        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "




        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_80cfc1b440dcd4e664ee9fd6b66df2ee49a46cbc7b140183395fc3f6d2c02567->leave($__internal_80cfc1b440dcd4e664ee9fd6b66df2ee49a46cbc7b140183395fc3f6d2c02567_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0f251e5c0400f66718a08d68101f06273090c89d94285c513c953b2c741060e = $this->env->getExtension("native_profiler");
        $__internal_d0f251e5c0400f66718a08d68101f06273090c89d94285c513c953b2c741060e->enter($__internal_d0f251e5c0400f66718a08d68101f06273090c89d94285c513c953b2c741060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d0f251e5c0400f66718a08d68101f06273090c89d94285c513c953b2c741060e->leave($__internal_d0f251e5c0400f66718a08d68101f06273090c89d94285c513c953b2c741060e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ece37dbe838b92fdbd2467f6f95669b89b053d693e464ef7e360adb1490d1f4 = $this->env->getExtension("native_profiler");
        $__internal_6ece37dbe838b92fdbd2467f6f95669b89b053d693e464ef7e360adb1490d1f4->enter($__internal_6ece37dbe838b92fdbd2467f6f95669b89b053d693e464ef7e360adb1490d1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ece37dbe838b92fdbd2467f6f95669b89b053d693e464ef7e360adb1490d1f4->leave($__internal_6ece37dbe838b92fdbd2467f6f95669b89b053d693e464ef7e360adb1490d1f4_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4cb392376402de9b53c4b0e6d0443d4a51b44ee47f988848ebf9328357bc1cd = $this->env->getExtension("native_profiler");
        $__internal_c4cb392376402de9b53c4b0e6d0443d4a51b44ee47f988848ebf9328357bc1cd->enter($__internal_c4cb392376402de9b53c4b0e6d0443d4a51b44ee47f988848ebf9328357bc1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4cb392376402de9b53c4b0e6d0443d4a51b44ee47f988848ebf9328357bc1cd->leave($__internal_c4cb392376402de9b53c4b0e6d0443d4a51b44ee47f988848ebf9328357bc1cd_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ffa5531a66e771c6c83c1a1ff0b8cd59a63be093a436be8eb01588b912ce207 = $this->env->getExtension("native_profiler");
        $__internal_4ffa5531a66e771c6c83c1a1ff0b8cd59a63be093a436be8eb01588b912ce207->enter($__internal_4ffa5531a66e771c6c83c1a1ff0b8cd59a63be093a436be8eb01588b912ce207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4ffa5531a66e771c6c83c1a1ff0b8cd59a63be093a436be8eb01588b912ce207->leave($__internal_4ffa5531a66e771c6c83c1a1ff0b8cd59a63be093a436be8eb01588b912ce207_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  107 => 17,  96 => 10,  84 => 5,  75 => 26,  73 => 25,  69 => 24,  65 => 23,  58 => 18,  56 => 17,  48 => 11,  46 => 10,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*     </head>*/
/*     <body>*/
/*       */
/* */
/* */
/*         {% block body %}{% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/*         <script src="{{ asset("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js") }}"> </script>*/
/*         <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
