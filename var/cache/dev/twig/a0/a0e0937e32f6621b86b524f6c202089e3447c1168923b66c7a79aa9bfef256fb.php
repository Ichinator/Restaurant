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
        $__internal_2512003516fbeb57d9706c9ef10bc4ff76e1493107fae6447808ee5acb07a6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2512003516fbeb57d9706c9ef10bc4ff76e1493107fae6447808ee5acb07a6dd->enter($__internal_2512003516fbeb57d9706c9ef10bc4ff76e1493107fae6447808ee5acb07a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5bd63ac8cf8526099d95809d3701a347ab96ac4d79ef3038e9a4a871f1475ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd63ac8cf8526099d95809d3701a347ab96ac4d79ef3038e9a4a871f1475ea3->enter($__internal_5bd63ac8cf8526099d95809d3701a347ab96ac4d79ef3038e9a4a871f1475ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2512003516fbeb57d9706c9ef10bc4ff76e1493107fae6447808ee5acb07a6dd->leave($__internal_2512003516fbeb57d9706c9ef10bc4ff76e1493107fae6447808ee5acb07a6dd_prof);

        
        $__internal_5bd63ac8cf8526099d95809d3701a347ab96ac4d79ef3038e9a4a871f1475ea3->leave($__internal_5bd63ac8cf8526099d95809d3701a347ab96ac4d79ef3038e9a4a871f1475ea3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2d53c050ccd65ab2bdc32341525b3069f18bd14b8a325ea5d789653a0a3fedce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d53c050ccd65ab2bdc32341525b3069f18bd14b8a325ea5d789653a0a3fedce->enter($__internal_2d53c050ccd65ab2bdc32341525b3069f18bd14b8a325ea5d789653a0a3fedce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8a5aa5a9884befd76c41068d4a19daeab271491daff308b1d74e0411b2b67acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5aa5a9884befd76c41068d4a19daeab271491daff308b1d74e0411b2b67acf->enter($__internal_8a5aa5a9884befd76c41068d4a19daeab271491daff308b1d74e0411b2b67acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8a5aa5a9884befd76c41068d4a19daeab271491daff308b1d74e0411b2b67acf->leave($__internal_8a5aa5a9884befd76c41068d4a19daeab271491daff308b1d74e0411b2b67acf_prof);

        
        $__internal_2d53c050ccd65ab2bdc32341525b3069f18bd14b8a325ea5d789653a0a3fedce->leave($__internal_2d53c050ccd65ab2bdc32341525b3069f18bd14b8a325ea5d789653a0a3fedce_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d645c288d11bb1515787f82bc501b6fa60ee381c1364783693feee4698b2ee4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d645c288d11bb1515787f82bc501b6fa60ee381c1364783693feee4698b2ee4e->enter($__internal_d645c288d11bb1515787f82bc501b6fa60ee381c1364783693feee4698b2ee4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e17647da2649dc9b666d18ddc7af01637a4096b86e3292239d3e5fbfb8ccea51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17647da2649dc9b666d18ddc7af01637a4096b86e3292239d3e5fbfb8ccea51->enter($__internal_e17647da2649dc9b666d18ddc7af01637a4096b86e3292239d3e5fbfb8ccea51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e17647da2649dc9b666d18ddc7af01637a4096b86e3292239d3e5fbfb8ccea51->leave($__internal_e17647da2649dc9b666d18ddc7af01637a4096b86e3292239d3e5fbfb8ccea51_prof);

        
        $__internal_d645c288d11bb1515787f82bc501b6fa60ee381c1364783693feee4698b2ee4e->leave($__internal_d645c288d11bb1515787f82bc501b6fa60ee381c1364783693feee4698b2ee4e_prof);

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
