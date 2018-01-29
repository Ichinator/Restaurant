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
        $__internal_ca20de766a101e0cc0f91e0bfa0a8ca3e2131a0ca68b6e67cd065128d2450c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca20de766a101e0cc0f91e0bfa0a8ca3e2131a0ca68b6e67cd065128d2450c60->enter($__internal_ca20de766a101e0cc0f91e0bfa0a8ca3e2131a0ca68b6e67cd065128d2450c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_57effaed79855eeb04651a30d0e06eb3a256c4838c1b4361d32802f41ef50214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57effaed79855eeb04651a30d0e06eb3a256c4838c1b4361d32802f41ef50214->enter($__internal_57effaed79855eeb04651a30d0e06eb3a256c4838c1b4361d32802f41ef50214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca20de766a101e0cc0f91e0bfa0a8ca3e2131a0ca68b6e67cd065128d2450c60->leave($__internal_ca20de766a101e0cc0f91e0bfa0a8ca3e2131a0ca68b6e67cd065128d2450c60_prof);

        
        $__internal_57effaed79855eeb04651a30d0e06eb3a256c4838c1b4361d32802f41ef50214->leave($__internal_57effaed79855eeb04651a30d0e06eb3a256c4838c1b4361d32802f41ef50214_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f245980bcf41b58f0901dd6944d31b396c0afd64027c84afe02674bbd08cdacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f245980bcf41b58f0901dd6944d31b396c0afd64027c84afe02674bbd08cdacc->enter($__internal_f245980bcf41b58f0901dd6944d31b396c0afd64027c84afe02674bbd08cdacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_13d6c196f46743f1d076c18805df34f4ca06e1e024f7b2a9054b425103caa39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d6c196f46743f1d076c18805df34f4ca06e1e024f7b2a9054b425103caa39b->enter($__internal_13d6c196f46743f1d076c18805df34f4ca06e1e024f7b2a9054b425103caa39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_13d6c196f46743f1d076c18805df34f4ca06e1e024f7b2a9054b425103caa39b->leave($__internal_13d6c196f46743f1d076c18805df34f4ca06e1e024f7b2a9054b425103caa39b_prof);

        
        $__internal_f245980bcf41b58f0901dd6944d31b396c0afd64027c84afe02674bbd08cdacc->leave($__internal_f245980bcf41b58f0901dd6944d31b396c0afd64027c84afe02674bbd08cdacc_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05b07f1e994c1656a1d6fc0e5350711e9a95fd9916de8b964657b018b4a7641f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b07f1e994c1656a1d6fc0e5350711e9a95fd9916de8b964657b018b4a7641f->enter($__internal_05b07f1e994c1656a1d6fc0e5350711e9a95fd9916de8b964657b018b4a7641f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3c89717a91ae3ce2df172ed6a31ce6df98743587630b19959188c4ebb718ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c89717a91ae3ce2df172ed6a31ce6df98743587630b19959188c4ebb718ac4->enter($__internal_d3c89717a91ae3ce2df172ed6a31ce6df98743587630b19959188c4ebb718ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d3c89717a91ae3ce2df172ed6a31ce6df98743587630b19959188c4ebb718ac4->leave($__internal_d3c89717a91ae3ce2df172ed6a31ce6df98743587630b19959188c4ebb718ac4_prof);

        
        $__internal_05b07f1e994c1656a1d6fc0e5350711e9a95fd9916de8b964657b018b4a7641f->leave($__internal_05b07f1e994c1656a1d6fc0e5350711e9a95fd9916de8b964657b018b4a7641f_prof);

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
