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
        $__internal_d3148ba300cdf31a2bea9f98fc49381519ccb6d9e85a46144d6957b801c2778d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3148ba300cdf31a2bea9f98fc49381519ccb6d9e85a46144d6957b801c2778d->enter($__internal_d3148ba300cdf31a2bea9f98fc49381519ccb6d9e85a46144d6957b801c2778d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_cba2ea61a507d3d03aa70f93244cc1f29b8b4a4b4c445c7f61e1f90450672d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba2ea61a507d3d03aa70f93244cc1f29b8b4a4b4c445c7f61e1f90450672d08->enter($__internal_cba2ea61a507d3d03aa70f93244cc1f29b8b4a4b4c445c7f61e1f90450672d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3148ba300cdf31a2bea9f98fc49381519ccb6d9e85a46144d6957b801c2778d->leave($__internal_d3148ba300cdf31a2bea9f98fc49381519ccb6d9e85a46144d6957b801c2778d_prof);

        
        $__internal_cba2ea61a507d3d03aa70f93244cc1f29b8b4a4b4c445c7f61e1f90450672d08->leave($__internal_cba2ea61a507d3d03aa70f93244cc1f29b8b4a4b4c445c7f61e1f90450672d08_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2eef485d46b392e66e5b000e15f2d9fb974e0131ba5ba0410572fa971d706e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eef485d46b392e66e5b000e15f2d9fb974e0131ba5ba0410572fa971d706e8a->enter($__internal_2eef485d46b392e66e5b000e15f2d9fb974e0131ba5ba0410572fa971d706e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8159ffcf806a352c2c8a7091a738c9070c34851152850c54d8d333dbcd58d195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8159ffcf806a352c2c8a7091a738c9070c34851152850c54d8d333dbcd58d195->enter($__internal_8159ffcf806a352c2c8a7091a738c9070c34851152850c54d8d333dbcd58d195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_8159ffcf806a352c2c8a7091a738c9070c34851152850c54d8d333dbcd58d195->leave($__internal_8159ffcf806a352c2c8a7091a738c9070c34851152850c54d8d333dbcd58d195_prof);

        
        $__internal_2eef485d46b392e66e5b000e15f2d9fb974e0131ba5ba0410572fa971d706e8a->leave($__internal_2eef485d46b392e66e5b000e15f2d9fb974e0131ba5ba0410572fa971d706e8a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_19098ee2f9e7a5e50ed98e3637b03ac49f10b03d9f5fa65f9789fb459ad36f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19098ee2f9e7a5e50ed98e3637b03ac49f10b03d9f5fa65f9789fb459ad36f68->enter($__internal_19098ee2f9e7a5e50ed98e3637b03ac49f10b03d9f5fa65f9789fb459ad36f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c00598b6affcf910b7ccb6dfa05cd0df0b3d987041099d92a65cbca43e3e9b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00598b6affcf910b7ccb6dfa05cd0df0b3d987041099d92a65cbca43e3e9b0a->enter($__internal_c00598b6affcf910b7ccb6dfa05cd0df0b3d987041099d92a65cbca43e3e9b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c00598b6affcf910b7ccb6dfa05cd0df0b3d987041099d92a65cbca43e3e9b0a->leave($__internal_c00598b6affcf910b7ccb6dfa05cd0df0b3d987041099d92a65cbca43e3e9b0a_prof);

        
        $__internal_19098ee2f9e7a5e50ed98e3637b03ac49f10b03d9f5fa65f9789fb459ad36f68->leave($__internal_19098ee2f9e7a5e50ed98e3637b03ac49f10b03d9f5fa65f9789fb459ad36f68_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d262721b83479c65a7e9e01b0472fbb708b652bab99fc305f23cbce4ebd87379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d262721b83479c65a7e9e01b0472fbb708b652bab99fc305f23cbce4ebd87379->enter($__internal_d262721b83479c65a7e9e01b0472fbb708b652bab99fc305f23cbce4ebd87379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1a9827c42a8080034b9bd4f893a54d347d6688a70bc985e231db5b1dc70573d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9827c42a8080034b9bd4f893a54d347d6688a70bc985e231db5b1dc70573d6->enter($__internal_1a9827c42a8080034b9bd4f893a54d347d6688a70bc985e231db5b1dc70573d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1a9827c42a8080034b9bd4f893a54d347d6688a70bc985e231db5b1dc70573d6->leave($__internal_1a9827c42a8080034b9bd4f893a54d347d6688a70bc985e231db5b1dc70573d6_prof);

        
        $__internal_d262721b83479c65a7e9e01b0472fbb708b652bab99fc305f23cbce4ebd87379->leave($__internal_d262721b83479c65a7e9e01b0472fbb708b652bab99fc305f23cbce4ebd87379_prof);

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
