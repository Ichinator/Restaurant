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
        $__internal_11095b1cd041bdd3724555ffa7e78d85c159f28d563abed2545ac9e878b5c4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11095b1cd041bdd3724555ffa7e78d85c159f28d563abed2545ac9e878b5c4c1->enter($__internal_11095b1cd041bdd3724555ffa7e78d85c159f28d563abed2545ac9e878b5c4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_a7a73a5c51c13ea36412133dd62182fec8ce724e7c163c5a3e34025ec5bb545c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a73a5c51c13ea36412133dd62182fec8ce724e7c163c5a3e34025ec5bb545c->enter($__internal_a7a73a5c51c13ea36412133dd62182fec8ce724e7c163c5a3e34025ec5bb545c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_11095b1cd041bdd3724555ffa7e78d85c159f28d563abed2545ac9e878b5c4c1->leave($__internal_11095b1cd041bdd3724555ffa7e78d85c159f28d563abed2545ac9e878b5c4c1_prof);

        
        $__internal_a7a73a5c51c13ea36412133dd62182fec8ce724e7c163c5a3e34025ec5bb545c->leave($__internal_a7a73a5c51c13ea36412133dd62182fec8ce724e7c163c5a3e34025ec5bb545c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_30de3d77586d7cc23e112bc69124ace11a59273f829a12497fffa67e6f834b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30de3d77586d7cc23e112bc69124ace11a59273f829a12497fffa67e6f834b2a->enter($__internal_30de3d77586d7cc23e112bc69124ace11a59273f829a12497fffa67e6f834b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_92cefe240118a0e3b52852c6ed81221feea8bd5c1733126ef40033ebdd460573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cefe240118a0e3b52852c6ed81221feea8bd5c1733126ef40033ebdd460573->enter($__internal_92cefe240118a0e3b52852c6ed81221feea8bd5c1733126ef40033ebdd460573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_92cefe240118a0e3b52852c6ed81221feea8bd5c1733126ef40033ebdd460573->leave($__internal_92cefe240118a0e3b52852c6ed81221feea8bd5c1733126ef40033ebdd460573_prof);

        
        $__internal_30de3d77586d7cc23e112bc69124ace11a59273f829a12497fffa67e6f834b2a->leave($__internal_30de3d77586d7cc23e112bc69124ace11a59273f829a12497fffa67e6f834b2a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d89a7353d48dd9935a75c504bd53edb776416be9e9d185ff7de759c15e8c8ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89a7353d48dd9935a75c504bd53edb776416be9e9d185ff7de759c15e8c8ff7->enter($__internal_d89a7353d48dd9935a75c504bd53edb776416be9e9d185ff7de759c15e8c8ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_14f9c484597bacdb48edfa6d9d8d5f4df5d0fa66b8c211408e20e5d053076b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f9c484597bacdb48edfa6d9d8d5f4df5d0fa66b8c211408e20e5d053076b28->enter($__internal_14f9c484597bacdb48edfa6d9d8d5f4df5d0fa66b8c211408e20e5d053076b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_14f9c484597bacdb48edfa6d9d8d5f4df5d0fa66b8c211408e20e5d053076b28->leave($__internal_14f9c484597bacdb48edfa6d9d8d5f4df5d0fa66b8c211408e20e5d053076b28_prof);

        
        $__internal_d89a7353d48dd9935a75c504bd53edb776416be9e9d185ff7de759c15e8c8ff7->leave($__internal_d89a7353d48dd9935a75c504bd53edb776416be9e9d185ff7de759c15e8c8ff7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_241c1c2e1e4602a24a0b796fa985fb8181f8eb74d91b143dad975c38307d553a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241c1c2e1e4602a24a0b796fa985fb8181f8eb74d91b143dad975c38307d553a->enter($__internal_241c1c2e1e4602a24a0b796fa985fb8181f8eb74d91b143dad975c38307d553a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_941c7627c3704af5280b813ab26a61763f613fd0ca4d2ba0d35579cec9230af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941c7627c3704af5280b813ab26a61763f613fd0ca4d2ba0d35579cec9230af2->enter($__internal_941c7627c3704af5280b813ab26a61763f613fd0ca4d2ba0d35579cec9230af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_941c7627c3704af5280b813ab26a61763f613fd0ca4d2ba0d35579cec9230af2->leave($__internal_941c7627c3704af5280b813ab26a61763f613fd0ca4d2ba0d35579cec9230af2_prof);

        
        $__internal_241c1c2e1e4602a24a0b796fa985fb8181f8eb74d91b143dad975c38307d553a->leave($__internal_241c1c2e1e4602a24a0b796fa985fb8181f8eb74d91b143dad975c38307d553a_prof);

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
