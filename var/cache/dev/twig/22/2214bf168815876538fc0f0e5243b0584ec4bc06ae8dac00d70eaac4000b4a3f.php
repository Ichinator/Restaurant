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
        $__internal_e9ff48a1f61c3b55cc2dba6d3f0b1cc206c42399d6f3eac1d1b4527ff9860d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ff48a1f61c3b55cc2dba6d3f0b1cc206c42399d6f3eac1d1b4527ff9860d88->enter($__internal_e9ff48a1f61c3b55cc2dba6d3f0b1cc206c42399d6f3eac1d1b4527ff9860d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a54d7a070b1b793ef00772f614a286c89144f33077e17ce8bea09ee9683ae9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54d7a070b1b793ef00772f614a286c89144f33077e17ce8bea09ee9683ae9f8->enter($__internal_a54d7a070b1b793ef00772f614a286c89144f33077e17ce8bea09ee9683ae9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ff48a1f61c3b55cc2dba6d3f0b1cc206c42399d6f3eac1d1b4527ff9860d88->leave($__internal_e9ff48a1f61c3b55cc2dba6d3f0b1cc206c42399d6f3eac1d1b4527ff9860d88_prof);

        
        $__internal_a54d7a070b1b793ef00772f614a286c89144f33077e17ce8bea09ee9683ae9f8->leave($__internal_a54d7a070b1b793ef00772f614a286c89144f33077e17ce8bea09ee9683ae9f8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_552382067371e08f74585d93613f5e7786e358e8dc4aab63241baa28eb0441f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552382067371e08f74585d93613f5e7786e358e8dc4aab63241baa28eb0441f1->enter($__internal_552382067371e08f74585d93613f5e7786e358e8dc4aab63241baa28eb0441f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d990d53106ac40e86f00b4320bc5fe87be21f7ace8b1f8a1fabb582594b237b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d990d53106ac40e86f00b4320bc5fe87be21f7ace8b1f8a1fabb582594b237b->enter($__internal_7d990d53106ac40e86f00b4320bc5fe87be21f7ace8b1f8a1fabb582594b237b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7d990d53106ac40e86f00b4320bc5fe87be21f7ace8b1f8a1fabb582594b237b->leave($__internal_7d990d53106ac40e86f00b4320bc5fe87be21f7ace8b1f8a1fabb582594b237b_prof);

        
        $__internal_552382067371e08f74585d93613f5e7786e358e8dc4aab63241baa28eb0441f1->leave($__internal_552382067371e08f74585d93613f5e7786e358e8dc4aab63241baa28eb0441f1_prof);

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
