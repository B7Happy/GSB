<?php

/* ::essai.html.twig */
class __TwigTemplate_b31ed80a314044995bde2b81ff804541744d64b196dcb9793436283494c6dca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e16cb596230c24b9617672c13a39608c1ba1d8c16e5286ea2deac9dd0f816f44 = $this->env->getExtension("native_profiler");
        $__internal_e16cb596230c24b9617672c13a39608c1ba1d8c16e5286ea2deac9dd0f816f44->enter($__internal_e16cb596230c24b9617672c13a39608c1ba1d8c16e5286ea2deac9dd0f816f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::essai.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
                    <title>
                                  GSB
                            </title>
            <meta charset=\"UTF-8\">

              <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

                            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
               <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" type=\"text/css\" />
                            <link rel=\"stylesheet\" href=  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/frontend.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                                        ";
        // line 18
        echo "


    </head>
    <body class=\"toolbar-padding\">
                                <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js\"></script>
                            <script type=\"text/javascript\" src=\"/assets/compiled/frontend.js\"></script>
                        <div class=\"container\">
                    <div class=\"masthead pull-right\">
                    <ul class=\"nav nav-pills\">


        <li>        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("hhh");
        echo "\" title=\"Back to the shop\">    <i class=\"icon-th icon-large\"></i>            <span> Aller au site </span>
        </a>
    </li>

        <li>        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("deco");
        echo "\" title=\"Logout\">    <i class=\"icon-off icon-large\"></i>            <span>Deco</span>
        </a>
    </li>




    </ul>

            </div>
            <div class=\"locale-menu masthead pull-right\">

            </div>
            <div class=\"currency-menu masthead pull-right\">

            </div>
            <h1 class=\"logo\"><a  title=\"GSB\"><span>GSB</span></a></h1>


                <hr>
                <div class=\"page\">
                <div class=\"row\">
            <div class=\"col-md-3\" id=\"sidebar\">
                    <ul class=\"nav\">
                <li class=\"current_ancestor first last\">        <span class=\"nav-header\">                <span>Mon compte</span>
        </span>            <ul class=\"nav nav-list menu_level_1\">
                <li class=\"current first\">        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("homelogin");
        echo "\" title=\"Home\">    <i class=\"icon-home\"></i>            <span>Menu</span>
        </a>
    </li>


        <li>        <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("cperso");
        echo "\" title=\"My personal information\">    <i class=\"icon-info-sign\"></i>            <span>Information personel</span>
        </a>
    </li>

        <li>        <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("cmp");
        echo "\" title=\"My password\">    <i class=\"icon-lock\"></i>            <span>Mon mot de passe</span>
        </a>
    </li>

        <li>        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("homelogin");
        echo "\" title=\"My orders / my invoices\">    <i class=\"icon-briefcase\"></i>            <span>Mes factures</span>
        </a>
    </li>




    </ul>

    </li>


    </ul>

            </div>

              ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
      <hr>


                <div class=\"modal fade\" id=\"confirmation-modal\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Confirmation</h4>
            </div>

            <div class=\"modal-body\">
                Do you want to delete this item
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\"><i class=\"glyphicon glyphicon-remove\"></i> Cancel</button>
                <a class=\"btn btn-danger\" id=\"confirmation-modal-confirm\">
                    <i class=\"glyphicon glyphicon-trash\"></i><span>Delete</span>
                </a>
            </div>
        </div>
    </div>
</div>


                    <div class=\"footer\">
                <p class=\"text-muted\">
                    &copy; GSB - 2016.
                </p>
                    <ul class=\"nav nav-pills pull-right\">
                <li class=\"first\">        <a href=\"https://github.com/\" title=\"GitHub\">    <i class=\"icon-github-sign icon-large\"></i>        </a>
    </li>

        <li>        <a href=\"https://twitter.com\" title=\"Twitter\">    <i class=\"icon-twitter-sign icon-large\"></i>        </a>
    </li>

        <li class=\"last\">        <a href=\"http://facebook.com\" title=\"Facebook\">    <i class=\"icon-facebook-sign icon-large\"></i>        </a>
    </li>


    </ul>

            </div>

                </div>


<script type=\"text/javascript\">
            var cmfCreateImageUpload = false;
        var cmfCreateImageSearch = false;
        var cmfCreateLinkRelatedPath = false;
        var cmfCreateBrowseUrl = false;

        var cmfCreatePutDocument = '/en_US/symfony-cmf/create/document/';
    var cmfCreateWorkflows = '/en_US/symfony-cmf/create/workflows/';
    var cmfCreateStanbolUrl = 'http://dev.iks-project.eu:8081';

    var cmfCreatePlainTextTypes = [\"dcterms:title\",\"schema:headline\"];
</script>

    <script src=\"/js/create.js\"></script>


<script type=\"text/javascript\">
            var cmfCreateHalloFixedToolbar = 'halloToolbarFixed';
        var cmfCreateHalloParentElement = '.create-ui-toolbar-dynamictoolarea .create-ui-tool-freearea';
    </script>

<script src=\"/js/hallo-extra.js\"></script>
            </body>
</html>
";
        
        $__internal_e16cb596230c24b9617672c13a39608c1ba1d8c16e5286ea2deac9dd0f816f44->leave($__internal_e16cb596230c24b9617672c13a39608c1ba1d8c16e5286ea2deac9dd0f816f44_prof);

    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb8f980353f46af9d69a14e2d989228a4c87cf001c2677500b82206c2a1620f6 = $this->env->getExtension("native_profiler");
        $__internal_eb8f980353f46af9d69a14e2d989228a4c87cf001c2677500b82206c2a1620f6->enter($__internal_eb8f980353f46af9d69a14e2d989228a4c87cf001c2677500b82206c2a1620f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb8f980353f46af9d69a14e2d989228a4c87cf001c2677500b82206c2a1620f6->leave($__internal_eb8f980353f46af9d69a14e2d989228a4c87cf001c2677500b82206c2a1620f6_prof);

    }

    public function getTemplateName()
    {
        return "::essai.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 90,  144 => 91,  142 => 90,  123 => 74,  116 => 70,  109 => 66,  101 => 61,  72 => 35,  65 => 31,  50 => 18,  46 => 16,  41 => 14,  34 => 10,  23 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*                     <title>*/
/*                                   GSB*/
/*                             </title>*/
/*             <meta charset="UTF-8">*/
/* */
/*               <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/* */
/*                             <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">*/
/*                <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" type="text/css" />*/
/*                             <link rel="stylesheet" href=  <link href="{{ asset('css/frontend.css')}}" type="text/css" />*/
/*                                         {#   <link rel="stylesheet" href="/css/06935bc.css" media="screen" type="text/css"/> #}*/
/* */
/* */
/* */
/*     </head>*/
/*     <body class="toolbar-padding">*/
/*                                 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>*/
/*             <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>*/
/*                             <script type="text/javascript" src="/assets/compiled/frontend.js"></script>*/
/*                         <div class="container">*/
/*                     <div class="masthead pull-right">*/
/*                     <ul class="nav nav-pills">*/
/* */
/* */
/*         <li>        <a href="{{path('hhh')}}" title="Back to the shop">    <i class="icon-th icon-large"></i>            <span> Aller au site </span>*/
/*         </a>*/
/*     </li>*/
/* */
/*         <li>        <a href="{{path('deco')}}" title="Logout">    <i class="icon-off icon-large"></i>            <span>Deco</span>*/
/*         </a>*/
/*     </li>*/
/* */
/* */
/* */
/* */
/*     </ul>*/
/* */
/*             </div>*/
/*             <div class="locale-menu masthead pull-right">*/
/* */
/*             </div>*/
/*             <div class="currency-menu masthead pull-right">*/
/* */
/*             </div>*/
/*             <h1 class="logo"><a  title="GSB"><span>GSB</span></a></h1>*/
/* */
/* */
/*                 <hr>*/
/*                 <div class="page">*/
/*                 <div class="row">*/
/*             <div class="col-md-3" id="sidebar">*/
/*                     <ul class="nav">*/
/*                 <li class="current_ancestor first last">        <span class="nav-header">                <span>Mon compte</span>*/
/*         </span>            <ul class="nav nav-list menu_level_1">*/
/*                 <li class="current first">        <a href="{{path('homelogin')}}" title="Home">    <i class="icon-home"></i>            <span>Menu</span>*/
/*         </a>*/
/*     </li>*/
/* */
/* */
/*         <li>        <a href="{{path('cperso')}}" title="My personal information">    <i class="icon-info-sign"></i>            <span>Information personel</span>*/
/*         </a>*/
/*     </li>*/
/* */
/*         <li>        <a href="{{path('cmp')}}" title="My password">    <i class="icon-lock"></i>            <span>Mon mot de passe</span>*/
/*         </a>*/
/*     </li>*/
/* */
/*         <li>        <a href="{{path('homelogin')}}" title="My orders / my invoices">    <i class="icon-briefcase"></i>            <span>Mes factures</span>*/
/*         </a>*/
/*     </li>*/
/* */
/* */
/* */
/* */
/*     </ul>*/
/* */
/*     </li>*/
/* */
/* */
/*     </ul>*/
/* */
/*             </div>*/
/* */
/*               {% block body %}{% endblock %}*/
/* */
/*       <hr>*/
/* */
/* */
/*                 <div class="modal fade" id="confirmation-modal" role="dialog">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title">Confirmation</h4>*/
/*             </div>*/
/* */
/*             <div class="modal-body">*/
/*                 Do you want to delete this item*/
/*             </div>*/
/* */
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-info" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel</button>*/
/*                 <a class="btn btn-danger" id="confirmation-modal-confirm">*/
/*                     <i class="glyphicon glyphicon-trash"></i><span>Delete</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/*                     <div class="footer">*/
/*                 <p class="text-muted">*/
/*                     &copy; GSB - 2016.*/
/*                 </p>*/
/*                     <ul class="nav nav-pills pull-right">*/
/*                 <li class="first">        <a href="https://github.com/" title="GitHub">    <i class="icon-github-sign icon-large"></i>        </a>*/
/*     </li>*/
/* */
/*         <li>        <a href="https://twitter.com" title="Twitter">    <i class="icon-twitter-sign icon-large"></i>        </a>*/
/*     </li>*/
/* */
/*         <li class="last">        <a href="http://facebook.com" title="Facebook">    <i class="icon-facebook-sign icon-large"></i>        </a>*/
/*     </li>*/
/* */
/* */
/*     </ul>*/
/* */
/*             </div>*/
/* */
/*                 </div>*/
/* */
/* */
/* <script type="text/javascript">*/
/*             var cmfCreateImageUpload = false;*/
/*         var cmfCreateImageSearch = false;*/
/*         var cmfCreateLinkRelatedPath = false;*/
/*         var cmfCreateBrowseUrl = false;*/
/* */
/*         var cmfCreatePutDocument = '/en_US/symfony-cmf/create/document/';*/
/*     var cmfCreateWorkflows = '/en_US/symfony-cmf/create/workflows/';*/
/*     var cmfCreateStanbolUrl = 'http://dev.iks-project.eu:8081';*/
/* */
/*     var cmfCreatePlainTextTypes = ["dcterms:title","schema:headline"];*/
/* </script>*/
/* */
/*     <script src="/js/create.js"></script>*/
/* */
/* */
/* <script type="text/javascript">*/
/*             var cmfCreateHalloFixedToolbar = 'halloToolbarFixed';*/
/*         var cmfCreateHalloParentElement = '.create-ui-toolbar-dynamictoolarea .create-ui-tool-freearea';*/
/*     </script>*/
/* */
/* <script src="/js/hallo-extra.js"></script>*/
/*             </body>*/
/* </html>*/
/* */
