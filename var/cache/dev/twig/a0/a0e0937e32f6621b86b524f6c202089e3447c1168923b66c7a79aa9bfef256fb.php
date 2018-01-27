<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6e8b42de543df8b6ee61ec39389ce5bcc22c78a20609397b44e3ea1f73766154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa67618f0c3b5195c24e44667a462d1a92f6ef97ff900c5a382076cc9c52690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa67618f0c3b5195c24e44667a462d1a92f6ef97ff900c5a382076cc9c52690->enter($__internal_6fa67618f0c3b5195c24e44667a462d1a92f6ef97ff900c5a382076cc9c52690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8d3f8220190af5640611f606a93c9dd7a9da34c1100883cf747085dd6d0e12e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3f8220190af5640611f606a93c9dd7a9da34c1100883cf747085dd6d0e12e0->enter($__internal_8d3f8220190af5640611f606a93c9dd7a9da34c1100883cf747085dd6d0e12e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa67618f0c3b5195c24e44667a462d1a92f6ef97ff900c5a382076cc9c52690->leave($__internal_6fa67618f0c3b5195c24e44667a462d1a92f6ef97ff900c5a382076cc9c52690_prof);

        
        $__internal_8d3f8220190af5640611f606a93c9dd7a9da34c1100883cf747085dd6d0e12e0->leave($__internal_8d3f8220190af5640611f606a93c9dd7a9da34c1100883cf747085dd6d0e12e0_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b9a11f838157fc7ccc1877aface8dc7f1c223d8d03cc17caf8ca3b4010fe3efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a11f838157fc7ccc1877aface8dc7f1c223d8d03cc17caf8ca3b4010fe3efe->enter($__internal_b9a11f838157fc7ccc1877aface8dc7f1c223d8d03cc17caf8ca3b4010fe3efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5a1bad8af75de4a8be4b01ee4ca80fff93954bc61bcd2eacba368ca17acd9621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1bad8af75de4a8be4b01ee4ca80fff93954bc61bcd2eacba368ca17acd9621->enter($__internal_5a1bad8af75de4a8be4b01ee4ca80fff93954bc61bcd2eacba368ca17acd9621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5a1bad8af75de4a8be4b01ee4ca80fff93954bc61bcd2eacba368ca17acd9621->leave($__internal_5a1bad8af75de4a8be4b01ee4ca80fff93954bc61bcd2eacba368ca17acd9621_prof);

        
        $__internal_b9a11f838157fc7ccc1877aface8dc7f1c223d8d03cc17caf8ca3b4010fe3efe->leave($__internal_b9a11f838157fc7ccc1877aface8dc7f1c223d8d03cc17caf8ca3b4010fe3efe_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed3b413a3e75885e3a87e05767b480b7a1862251b25d44f1fd9981e3e03a0ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3b413a3e75885e3a87e05767b480b7a1862251b25d44f1fd9981e3e03a0ccd->enter($__internal_ed3b413a3e75885e3a87e05767b480b7a1862251b25d44f1fd9981e3e03a0ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ece3c612b021f1659288deed6990c506fa6f85630d2c50a8ed6700447f631d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ece3c612b021f1659288deed6990c506fa6f85630d2c50a8ed6700447f631d4->enter($__internal_4ece3c612b021f1659288deed6990c506fa6f85630d2c50a8ed6700447f631d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4ece3c612b021f1659288deed6990c506fa6f85630d2c50a8ed6700447f631d4->leave($__internal_4ece3c612b021f1659288deed6990c506fa6f85630d2c50a8ed6700447f631d4_prof);

        
        $__internal_ed3b413a3e75885e3a87e05767b480b7a1862251b25d44f1fd9981e3e03a0ccd->leave($__internal_ed3b413a3e75885e3a87e05767b480b7a1862251b25d44f1fd9981e3e03a0ccd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
