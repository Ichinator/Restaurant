<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_a9f89bfcbcd0acb69bf0992fd1adec4f63f904d4de06218da42f9dfab5fa02cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c56425dd4a946d5e2218fc1a5860500597a04c72f814ccce03b14937da9f0b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56425dd4a946d5e2218fc1a5860500597a04c72f814ccce03b14937da9f0b62->enter($__internal_c56425dd4a946d5e2218fc1a5860500597a04c72f814ccce03b14937da9f0b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_23ba4ffe8f2081014e01f50ee94f97f794927df07c390bfff5d47e8d8b7b96d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ba4ffe8f2081014e01f50ee94f97f794927df07c390bfff5d47e8d8b7b96d1->enter($__internal_23ba4ffe8f2081014e01f50ee94f97f794927df07c390bfff5d47e8d8b7b96d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c56425dd4a946d5e2218fc1a5860500597a04c72f814ccce03b14937da9f0b62->leave($__internal_c56425dd4a946d5e2218fc1a5860500597a04c72f814ccce03b14937da9f0b62_prof);

        
        $__internal_23ba4ffe8f2081014e01f50ee94f97f794927df07c390bfff5d47e8d8b7b96d1->leave($__internal_23ba4ffe8f2081014e01f50ee94f97f794927df07c390bfff5d47e8d8b7b96d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
