<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8cc7e0068a20b546c583be70bb680f4872eff5241cc36efdab5787e39b2415ad extends Twig_Template
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
        $__internal_25c04c475b541ad2ba3827d603046c3f7bf173aabc585afe72df374699fa7a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c04c475b541ad2ba3827d603046c3f7bf173aabc585afe72df374699fa7a35->enter($__internal_25c04c475b541ad2ba3827d603046c3f7bf173aabc585afe72df374699fa7a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_dfd1bc7dbd984366f0d7e37c9f1e2cc6a2157e3703e46c04bad4c59077ead747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd1bc7dbd984366f0d7e37c9f1e2cc6a2157e3703e46c04bad4c59077ead747->enter($__internal_dfd1bc7dbd984366f0d7e37c9f1e2cc6a2157e3703e46c04bad4c59077ead747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_25c04c475b541ad2ba3827d603046c3f7bf173aabc585afe72df374699fa7a35->leave($__internal_25c04c475b541ad2ba3827d603046c3f7bf173aabc585afe72df374699fa7a35_prof);

        
        $__internal_dfd1bc7dbd984366f0d7e37c9f1e2cc6a2157e3703e46c04bad4c59077ead747->leave($__internal_dfd1bc7dbd984366f0d7e37c9f1e2cc6a2157e3703e46c04bad4c59077ead747_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eaec1d81982965469caffeb5e76eff347b7255e35d9c2ecae6510373004b319c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaec1d81982965469caffeb5e76eff347b7255e35d9c2ecae6510373004b319c->enter($__internal_eaec1d81982965469caffeb5e76eff347b7255e35d9c2ecae6510373004b319c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1aa06e422e91b732cd692938280e515c6141494c85695f76ade19934a7c1741a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa06e422e91b732cd692938280e515c6141494c85695f76ade19934a7c1741a->enter($__internal_1aa06e422e91b732cd692938280e515c6141494c85695f76ade19934a7c1741a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_1aa06e422e91b732cd692938280e515c6141494c85695f76ade19934a7c1741a->leave($__internal_1aa06e422e91b732cd692938280e515c6141494c85695f76ade19934a7c1741a_prof);

        
        $__internal_eaec1d81982965469caffeb5e76eff347b7255e35d9c2ecae6510373004b319c->leave($__internal_eaec1d81982965469caffeb5e76eff347b7255e35d9c2ecae6510373004b319c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_837d8fb4bbbd487df300742c7b5b70f56686e891d835a6fd2615a24600ede625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837d8fb4bbbd487df300742c7b5b70f56686e891d835a6fd2615a24600ede625->enter($__internal_837d8fb4bbbd487df300742c7b5b70f56686e891d835a6fd2615a24600ede625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_18bbca1be7f2ec776637d2312def6c377ac51aec6e807c0d5a1d8aea4832572e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bbca1be7f2ec776637d2312def6c377ac51aec6e807c0d5a1d8aea4832572e->enter($__internal_18bbca1be7f2ec776637d2312def6c377ac51aec6e807c0d5a1d8aea4832572e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_18bbca1be7f2ec776637d2312def6c377ac51aec6e807c0d5a1d8aea4832572e->leave($__internal_18bbca1be7f2ec776637d2312def6c377ac51aec6e807c0d5a1d8aea4832572e_prof);

        
        $__internal_837d8fb4bbbd487df300742c7b5b70f56686e891d835a6fd2615a24600ede625->leave($__internal_837d8fb4bbbd487df300742c7b5b70f56686e891d835a6fd2615a24600ede625_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_12c06423e4a9538c4fb6fba1a3755b1747b64867e2abff70d4db8a3d44909c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c06423e4a9538c4fb6fba1a3755b1747b64867e2abff70d4db8a3d44909c23->enter($__internal_12c06423e4a9538c4fb6fba1a3755b1747b64867e2abff70d4db8a3d44909c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_053bf06756a3ec254c4b5b8ee80f60a06f4ee0e91638f489f122e12c129dd4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053bf06756a3ec254c4b5b8ee80f60a06f4ee0e91638f489f122e12c129dd4bc->enter($__internal_053bf06756a3ec254c4b5b8ee80f60a06f4ee0e91638f489f122e12c129dd4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_053bf06756a3ec254c4b5b8ee80f60a06f4ee0e91638f489f122e12c129dd4bc->leave($__internal_053bf06756a3ec254c4b5b8ee80f60a06f4ee0e91638f489f122e12c129dd4bc_prof);

        
        $__internal_12c06423e4a9538c4fb6fba1a3755b1747b64867e2abff70d4db8a3d44909c23->leave($__internal_12c06423e4a9538c4fb6fba1a3755b1747b64867e2abff70d4db8a3d44909c23_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
