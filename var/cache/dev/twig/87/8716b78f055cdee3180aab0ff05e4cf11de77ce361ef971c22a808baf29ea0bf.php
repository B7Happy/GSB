<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be25535348bc43458ffb623613c56c2023a5df9e8a2de1011d832858261350b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62adf7c2cf4d062280d99aeba925bd3242b3e8a4edbb605dadaf155a3cf0b4f2 = $this->env->getExtension("native_profiler");
        $__internal_62adf7c2cf4d062280d99aeba925bd3242b3e8a4edbb605dadaf155a3cf0b4f2->enter($__internal_62adf7c2cf4d062280d99aeba925bd3242b3e8a4edbb605dadaf155a3cf0b4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62adf7c2cf4d062280d99aeba925bd3242b3e8a4edbb605dadaf155a3cf0b4f2->leave($__internal_62adf7c2cf4d062280d99aeba925bd3242b3e8a4edbb605dadaf155a3cf0b4f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d44e69068c24402b66a90371d3fd3f31ef82c48d733df9bebb3802522b90d61 = $this->env->getExtension("native_profiler");
        $__internal_3d44e69068c24402b66a90371d3fd3f31ef82c48d733df9bebb3802522b90d61->enter($__internal_3d44e69068c24402b66a90371d3fd3f31ef82c48d733df9bebb3802522b90d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d44e69068c24402b66a90371d3fd3f31ef82c48d733df9bebb3802522b90d61->leave($__internal_3d44e69068c24402b66a90371d3fd3f31ef82c48d733df9bebb3802522b90d61_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d8e0259ff38a4d3b8ef859c576578b505a28a7d7b6640f0271ad4762e68d6fb = $this->env->getExtension("native_profiler");
        $__internal_6d8e0259ff38a4d3b8ef859c576578b505a28a7d7b6640f0271ad4762e68d6fb->enter($__internal_6d8e0259ff38a4d3b8ef859c576578b505a28a7d7b6640f0271ad4762e68d6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d8e0259ff38a4d3b8ef859c576578b505a28a7d7b6640f0271ad4762e68d6fb->leave($__internal_6d8e0259ff38a4d3b8ef859c576578b505a28a7d7b6640f0271ad4762e68d6fb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d98f2ee4724af55936464e614461af186ecbcfd07f90d013361a448a7e56c47e = $this->env->getExtension("native_profiler");
        $__internal_d98f2ee4724af55936464e614461af186ecbcfd07f90d013361a448a7e56c47e->enter($__internal_d98f2ee4724af55936464e614461af186ecbcfd07f90d013361a448a7e56c47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d98f2ee4724af55936464e614461af186ecbcfd07f90d013361a448a7e56c47e->leave($__internal_d98f2ee4724af55936464e614461af186ecbcfd07f90d013361a448a7e56c47e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
