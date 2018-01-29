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
        $__internal_aa42acfbf98ae615b7ff6caba3f95f03b9475a6052ece9eb3f053110341e8a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa42acfbf98ae615b7ff6caba3f95f03b9475a6052ece9eb3f053110341e8a49->enter($__internal_aa42acfbf98ae615b7ff6caba3f95f03b9475a6052ece9eb3f053110341e8a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_0f5765410b9d0556b42c174690ae8772da92644bdfe3a02c92b6280cc8c59454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5765410b9d0556b42c174690ae8772da92644bdfe3a02c92b6280cc8c59454->enter($__internal_0f5765410b9d0556b42c174690ae8772da92644bdfe3a02c92b6280cc8c59454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aa42acfbf98ae615b7ff6caba3f95f03b9475a6052ece9eb3f053110341e8a49->leave($__internal_aa42acfbf98ae615b7ff6caba3f95f03b9475a6052ece9eb3f053110341e8a49_prof);

        
        $__internal_0f5765410b9d0556b42c174690ae8772da92644bdfe3a02c92b6280cc8c59454->leave($__internal_0f5765410b9d0556b42c174690ae8772da92644bdfe3a02c92b6280cc8c59454_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4f80719539c998247d31939520caabb6de153445137a474abfa5a2d5fee06021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f80719539c998247d31939520caabb6de153445137a474abfa5a2d5fee06021->enter($__internal_4f80719539c998247d31939520caabb6de153445137a474abfa5a2d5fee06021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_82164a07509b2ed45af30708336511b9c80a0d9105b9c6401d8d859ac37da2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82164a07509b2ed45af30708336511b9c80a0d9105b9c6401d8d859ac37da2b6->enter($__internal_82164a07509b2ed45af30708336511b9c80a0d9105b9c6401d8d859ac37da2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_82164a07509b2ed45af30708336511b9c80a0d9105b9c6401d8d859ac37da2b6->leave($__internal_82164a07509b2ed45af30708336511b9c80a0d9105b9c6401d8d859ac37da2b6_prof);

        
        $__internal_4f80719539c998247d31939520caabb6de153445137a474abfa5a2d5fee06021->leave($__internal_4f80719539c998247d31939520caabb6de153445137a474abfa5a2d5fee06021_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_89f2dfc2ab61270bb180ca61547f9f58edafe83f40e50ad16d73bc557f9149da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f2dfc2ab61270bb180ca61547f9f58edafe83f40e50ad16d73bc557f9149da->enter($__internal_89f2dfc2ab61270bb180ca61547f9f58edafe83f40e50ad16d73bc557f9149da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b5d0d78fc07c30bb023702a7483c91236e6b1f56f3f4fd6e1e59042a7a33939a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d0d78fc07c30bb023702a7483c91236e6b1f56f3f4fd6e1e59042a7a33939a->enter($__internal_b5d0d78fc07c30bb023702a7483c91236e6b1f56f3f4fd6e1e59042a7a33939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b5d0d78fc07c30bb023702a7483c91236e6b1f56f3f4fd6e1e59042a7a33939a->leave($__internal_b5d0d78fc07c30bb023702a7483c91236e6b1f56f3f4fd6e1e59042a7a33939a_prof);

        
        $__internal_89f2dfc2ab61270bb180ca61547f9f58edafe83f40e50ad16d73bc557f9149da->leave($__internal_89f2dfc2ab61270bb180ca61547f9f58edafe83f40e50ad16d73bc557f9149da_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_505a35727197d10b43650fcbea64010e26f404ad9b5262cf9f7816b758357fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505a35727197d10b43650fcbea64010e26f404ad9b5262cf9f7816b758357fbe->enter($__internal_505a35727197d10b43650fcbea64010e26f404ad9b5262cf9f7816b758357fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_31193be7e1189f5fe67cb2b1bec033608006ea7cf98bcd3af8b2d036aeb7891b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31193be7e1189f5fe67cb2b1bec033608006ea7cf98bcd3af8b2d036aeb7891b->enter($__internal_31193be7e1189f5fe67cb2b1bec033608006ea7cf98bcd3af8b2d036aeb7891b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_31193be7e1189f5fe67cb2b1bec033608006ea7cf98bcd3af8b2d036aeb7891b->leave($__internal_31193be7e1189f5fe67cb2b1bec033608006ea7cf98bcd3af8b2d036aeb7891b_prof);

        
        $__internal_505a35727197d10b43650fcbea64010e26f404ad9b5262cf9f7816b758357fbe->leave($__internal_505a35727197d10b43650fcbea64010e26f404ad9b5262cf9f7816b758357fbe_prof);

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
