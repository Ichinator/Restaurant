<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5dbd066d64fa7daee3b8438d68226e343e4344c49c32e15ea83f5b430eb14ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaf328a4a59a298dd3775433c9a5105bc804ec400a2c0bf9713f129c307d2d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf328a4a59a298dd3775433c9a5105bc804ec400a2c0bf9713f129c307d2d43->enter($__internal_aaf328a4a59a298dd3775433c9a5105bc804ec400a2c0bf9713f129c307d2d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_57aaa584ca894a955853496a83045e3bae8e4f271482887bfe2a2140e167a2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57aaa584ca894a955853496a83045e3bae8e4f271482887bfe2a2140e167a2d8->enter($__internal_57aaa584ca894a955853496a83045e3bae8e4f271482887bfe2a2140e167a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf328a4a59a298dd3775433c9a5105bc804ec400a2c0bf9713f129c307d2d43->leave($__internal_aaf328a4a59a298dd3775433c9a5105bc804ec400a2c0bf9713f129c307d2d43_prof);

        
        $__internal_57aaa584ca894a955853496a83045e3bae8e4f271482887bfe2a2140e167a2d8->leave($__internal_57aaa584ca894a955853496a83045e3bae8e4f271482887bfe2a2140e167a2d8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2540eacdde271a1fba360fa6395fb79c74709dd62d85097474b4b3d3bac19920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2540eacdde271a1fba360fa6395fb79c74709dd62d85097474b4b3d3bac19920->enter($__internal_2540eacdde271a1fba360fa6395fb79c74709dd62d85097474b4b3d3bac19920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff99dba088cee6788ee44e100177878459ceff2e9c9e941897e1267ecfd9820e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff99dba088cee6788ee44e100177878459ceff2e9c9e941897e1267ecfd9820e->enter($__internal_ff99dba088cee6788ee44e100177878459ceff2e9c9e941897e1267ecfd9820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ff99dba088cee6788ee44e100177878459ceff2e9c9e941897e1267ecfd9820e->leave($__internal_ff99dba088cee6788ee44e100177878459ceff2e9c9e941897e1267ecfd9820e_prof);

        
        $__internal_2540eacdde271a1fba360fa6395fb79c74709dd62d85097474b4b3d3bac19920->leave($__internal_2540eacdde271a1fba360fa6395fb79c74709dd62d85097474b4b3d3bac19920_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
