<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_516ae0ec9d439b2f67d652e0f4b8c8603c131357f987a4b791c90259058595dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec1a475b7f16d0392a5edcd21623fb918b688bc9bcd116b0cd100e4072d16fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1a475b7f16d0392a5edcd21623fb918b688bc9bcd116b0cd100e4072d16fbe->enter($__internal_ec1a475b7f16d0392a5edcd21623fb918b688bc9bcd116b0cd100e4072d16fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_bb9648f17fd0ac1a8b216e118b67bf798b6056b79848c710d1d50038c9bfe2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9648f17fd0ac1a8b216e118b67bf798b6056b79848c710d1d50038c9bfe2c2->enter($__internal_bb9648f17fd0ac1a8b216e118b67bf798b6056b79848c710d1d50038c9bfe2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ec1a475b7f16d0392a5edcd21623fb918b688bc9bcd116b0cd100e4072d16fbe->leave($__internal_ec1a475b7f16d0392a5edcd21623fb918b688bc9bcd116b0cd100e4072d16fbe_prof);

        
        $__internal_bb9648f17fd0ac1a8b216e118b67bf798b6056b79848c710d1d50038c9bfe2c2->leave($__internal_bb9648f17fd0ac1a8b216e118b67bf798b6056b79848c710d1d50038c9bfe2c2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4a7d7f5ba3eb0b6b219f4196df7164c9dc423dbdfd6d03a85bd3ed41282530aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7d7f5ba3eb0b6b219f4196df7164c9dc423dbdfd6d03a85bd3ed41282530aa->enter($__internal_4a7d7f5ba3eb0b6b219f4196df7164c9dc423dbdfd6d03a85bd3ed41282530aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8719d964a9eb57c38852bcdb553d5833ec4fa4f338fcd43b7fededaf30544007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8719d964a9eb57c38852bcdb553d5833ec4fa4f338fcd43b7fededaf30544007->enter($__internal_8719d964a9eb57c38852bcdb553d5833ec4fa4f338fcd43b7fededaf30544007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8719d964a9eb57c38852bcdb553d5833ec4fa4f338fcd43b7fededaf30544007->leave($__internal_8719d964a9eb57c38852bcdb553d5833ec4fa4f338fcd43b7fededaf30544007_prof);

        
        $__internal_4a7d7f5ba3eb0b6b219f4196df7164c9dc423dbdfd6d03a85bd3ed41282530aa->leave($__internal_4a7d7f5ba3eb0b6b219f4196df7164c9dc423dbdfd6d03a85bd3ed41282530aa_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6742cd36cdcc65e7b745af83233c9f925dbef9041d5fcc9457c2853a6134b781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6742cd36cdcc65e7b745af83233c9f925dbef9041d5fcc9457c2853a6134b781->enter($__internal_6742cd36cdcc65e7b745af83233c9f925dbef9041d5fcc9457c2853a6134b781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_773d868deb29880cec5706c546a0651c33e223de9a865afb49e4e8f452824214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773d868deb29880cec5706c546a0651c33e223de9a865afb49e4e8f452824214->enter($__internal_773d868deb29880cec5706c546a0651c33e223de9a865afb49e4e8f452824214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_773d868deb29880cec5706c546a0651c33e223de9a865afb49e4e8f452824214->leave($__internal_773d868deb29880cec5706c546a0651c33e223de9a865afb49e4e8f452824214_prof);

        
        $__internal_6742cd36cdcc65e7b745af83233c9f925dbef9041d5fcc9457c2853a6134b781->leave($__internal_6742cd36cdcc65e7b745af83233c9f925dbef9041d5fcc9457c2853a6134b781_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1caeb68d8ab4944c1426e446b1fb9493667b6914a6345e9f58c56663ea25b7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1caeb68d8ab4944c1426e446b1fb9493667b6914a6345e9f58c56663ea25b7cf->enter($__internal_1caeb68d8ab4944c1426e446b1fb9493667b6914a6345e9f58c56663ea25b7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8e60d5f56bc121800042dab53c8f7251e3fde8352f0cea7d4b93e0f4a2c792a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e60d5f56bc121800042dab53c8f7251e3fde8352f0cea7d4b93e0f4a2c792a3->enter($__internal_8e60d5f56bc121800042dab53c8f7251e3fde8352f0cea7d4b93e0f4a2c792a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8e60d5f56bc121800042dab53c8f7251e3fde8352f0cea7d4b93e0f4a2c792a3->leave($__internal_8e60d5f56bc121800042dab53c8f7251e3fde8352f0cea7d4b93e0f4a2c792a3_prof);

        
        $__internal_1caeb68d8ab4944c1426e446b1fb9493667b6914a6345e9f58c56663ea25b7cf->leave($__internal_1caeb68d8ab4944c1426e446b1fb9493667b6914a6345e9f58c56663ea25b7cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
