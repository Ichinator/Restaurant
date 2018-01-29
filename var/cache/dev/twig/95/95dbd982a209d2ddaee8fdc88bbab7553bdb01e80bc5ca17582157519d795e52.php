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
        $__internal_07ee2b0c02432790e98fd475ca56ea4b1df17e21a34e83d557612de28ec76b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ee2b0c02432790e98fd475ca56ea4b1df17e21a34e83d557612de28ec76b68->enter($__internal_07ee2b0c02432790e98fd475ca56ea4b1df17e21a34e83d557612de28ec76b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_d90d0d5c9074fea6b56246dd6585071537e3a91e425e7d17b27df79a8588692d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90d0d5c9074fea6b56246dd6585071537e3a91e425e7d17b27df79a8588692d->enter($__internal_d90d0d5c9074fea6b56246dd6585071537e3a91e425e7d17b27df79a8588692d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07ee2b0c02432790e98fd475ca56ea4b1df17e21a34e83d557612de28ec76b68->leave($__internal_07ee2b0c02432790e98fd475ca56ea4b1df17e21a34e83d557612de28ec76b68_prof);

        
        $__internal_d90d0d5c9074fea6b56246dd6585071537e3a91e425e7d17b27df79a8588692d->leave($__internal_d90d0d5c9074fea6b56246dd6585071537e3a91e425e7d17b27df79a8588692d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0cceafb92b2f12c3576bad1f9fba7b6cba02ecaf1b6dc2ba88479f55451729b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0cceafb92b2f12c3576bad1f9fba7b6cba02ecaf1b6dc2ba88479f55451729b->enter($__internal_f0cceafb92b2f12c3576bad1f9fba7b6cba02ecaf1b6dc2ba88479f55451729b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_205ba55b8dbcfdcf804c545f4c1126ed65369ae65262b14c01c5e1be7671da7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205ba55b8dbcfdcf804c545f4c1126ed65369ae65262b14c01c5e1be7671da7e->enter($__internal_205ba55b8dbcfdcf804c545f4c1126ed65369ae65262b14c01c5e1be7671da7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_205ba55b8dbcfdcf804c545f4c1126ed65369ae65262b14c01c5e1be7671da7e->leave($__internal_205ba55b8dbcfdcf804c545f4c1126ed65369ae65262b14c01c5e1be7671da7e_prof);

        
        $__internal_f0cceafb92b2f12c3576bad1f9fba7b6cba02ecaf1b6dc2ba88479f55451729b->leave($__internal_f0cceafb92b2f12c3576bad1f9fba7b6cba02ecaf1b6dc2ba88479f55451729b_prof);

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
