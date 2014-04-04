<?php

/* ::base.html.twig */
class __TwigTemplate_ecfe45b148688bae08152c5a60cc1f389fb42e881c4842433eafb463132885d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/crworks/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/crworks/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>
    <body>
        <navigation>
            ";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "        </navigation>
        
        <div id=\"content\">
            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        </div>
    
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/crworks/scripts/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/crworks/scripts/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "                <div>
                    <ul id=\"menu\" class=\"nav nav-pills nav-stacked\">
                        <li class=\"active\"><a href=\"#\">About Me</a></li>
                        <li><a href=\"#\">Projects</a></li>
                        <li><a href=\"#\">Customize Experience</a></li>
                        <li><a href=\"#\">Comments</a></li>
                    </ul>
                </div>
                <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span class=\"glyphicon glyphicon-align-justify\"></span>
                </button>
            ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  115 => 34,  110 => 29,  95 => 14,  92 => 13,  87 => 6,  81 => 5,  75 => 35,  73 => 34,  69 => 33,  65 => 32,  61 => 30,  59 => 29,  54 => 26,  52 => 13,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
