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
        $__internal_e500c74e232c0811e5c867c9f5356aaf68f467eae00921394202236c5da851be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e500c74e232c0811e5c867c9f5356aaf68f467eae00921394202236c5da851be->enter($__internal_e500c74e232c0811e5c867c9f5356aaf68f467eae00921394202236c5da851be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_ef1d87b8bded266e96943547cf370e8c92c4ccf145553b6da082c17bcb550ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1d87b8bded266e96943547cf370e8c92c4ccf145553b6da082c17bcb550ebb->enter($__internal_ef1d87b8bded266e96943547cf370e8c92c4ccf145553b6da082c17bcb550ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e500c74e232c0811e5c867c9f5356aaf68f467eae00921394202236c5da851be->leave($__internal_e500c74e232c0811e5c867c9f5356aaf68f467eae00921394202236c5da851be_prof);

        
        $__internal_ef1d87b8bded266e96943547cf370e8c92c4ccf145553b6da082c17bcb550ebb->leave($__internal_ef1d87b8bded266e96943547cf370e8c92c4ccf145553b6da082c17bcb550ebb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e827a5254eaf2e843f763dd7c17096a3108f99cb8fecf8b8f94561283b1a1c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e827a5254eaf2e843f763dd7c17096a3108f99cb8fecf8b8f94561283b1a1c34->enter($__internal_e827a5254eaf2e843f763dd7c17096a3108f99cb8fecf8b8f94561283b1a1c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b20de0b130ebb99649c458489bb1f7e1e79b9cb4f2199dd499fe65972c35bf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20de0b130ebb99649c458489bb1f7e1e79b9cb4f2199dd499fe65972c35bf00->enter($__internal_b20de0b130ebb99649c458489bb1f7e1e79b9cb4f2199dd499fe65972c35bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b20de0b130ebb99649c458489bb1f7e1e79b9cb4f2199dd499fe65972c35bf00->leave($__internal_b20de0b130ebb99649c458489bb1f7e1e79b9cb4f2199dd499fe65972c35bf00_prof);

        
        $__internal_e827a5254eaf2e843f763dd7c17096a3108f99cb8fecf8b8f94561283b1a1c34->leave($__internal_e827a5254eaf2e843f763dd7c17096a3108f99cb8fecf8b8f94561283b1a1c34_prof);

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
