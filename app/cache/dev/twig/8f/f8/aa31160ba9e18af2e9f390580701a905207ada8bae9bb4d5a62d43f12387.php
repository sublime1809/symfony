<?php

/* CRWorksBundle:Default:index.html.twig */
class __TwigTemplate_8ff8aa31160ba9e18af2e9f390580701a905207ada8bae9bb4d5a62d43f12387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CRWorksBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CRWorksBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
            // line 7
            echo "    Hello ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
            echo "!
";
        }
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                // line 10
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even", 2 => "middle"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
                echo "\">
        Div
    </div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CRWorksBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 9,  40 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
