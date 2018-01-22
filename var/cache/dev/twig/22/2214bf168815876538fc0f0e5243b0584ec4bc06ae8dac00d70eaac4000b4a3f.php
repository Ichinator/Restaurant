<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_432b3e9bc49c1f2eb5b8c377f07d025177aa72f4b4e8284f0bc5319e641979a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_390d9ebc772d1ad78f8fb1a4a380101d662daf7f47bb8a200d213b0c36070a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390d9ebc772d1ad78f8fb1a4a380101d662daf7f47bb8a200d213b0c36070a12->enter($__internal_390d9ebc772d1ad78f8fb1a4a380101d662daf7f47bb8a200d213b0c36070a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_300884b9517c80127001f29dd5d4a93d4a26f4c81cd5ee6e18ba29a8547e6314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300884b9517c80127001f29dd5d4a93d4a26f4c81cd5ee6e18ba29a8547e6314->enter($__internal_300884b9517c80127001f29dd5d4a93d4a26f4c81cd5ee6e18ba29a8547e6314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_390d9ebc772d1ad78f8fb1a4a380101d662daf7f47bb8a200d213b0c36070a12->leave($__internal_390d9ebc772d1ad78f8fb1a4a380101d662daf7f47bb8a200d213b0c36070a12_prof);

        
        $__internal_300884b9517c80127001f29dd5d4a93d4a26f4c81cd5ee6e18ba29a8547e6314->leave($__internal_300884b9517c80127001f29dd5d4a93d4a26f4c81cd5ee6e18ba29a8547e6314_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5fd5875068b0f60ee64e91a710a8ddc06a7b27dc1e299a1b0c6ca34650040db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fd5875068b0f60ee64e91a710a8ddc06a7b27dc1e299a1b0c6ca34650040db->enter($__internal_b5fd5875068b0f60ee64e91a710a8ddc06a7b27dc1e299a1b0c6ca34650040db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6137636707c589b8523273f426b0da940c8f9d43b8a35e1cec772fe2f7ef310a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6137636707c589b8523273f426b0da940c8f9d43b8a35e1cec772fe2f7ef310a->enter($__internal_6137636707c589b8523273f426b0da940c8f9d43b8a35e1cec772fe2f7ef310a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6137636707c589b8523273f426b0da940c8f9d43b8a35e1cec772fe2f7ef310a->leave($__internal_6137636707c589b8523273f426b0da940c8f9d43b8a35e1cec772fe2f7ef310a_prof);

        
        $__internal_b5fd5875068b0f60ee64e91a710a8ddc06a7b27dc1e299a1b0c6ca34650040db->leave($__internal_b5fd5875068b0f60ee64e91a710a8ddc06a7b27dc1e299a1b0c6ca34650040db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
