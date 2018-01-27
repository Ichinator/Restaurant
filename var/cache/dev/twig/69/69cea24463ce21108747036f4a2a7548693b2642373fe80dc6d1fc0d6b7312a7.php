<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_7435ef390c96ed1404e3be8283f70313f651ed6afb20f563c6cccfd30dd9d8da extends Twig_Template
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
        $__internal_742630f219ba351bdb5c6da7c683b9dd8361e5431ba2a6e3b49035d9e210ed73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742630f219ba351bdb5c6da7c683b9dd8361e5431ba2a6e3b49035d9e210ed73->enter($__internal_742630f219ba351bdb5c6da7c683b9dd8361e5431ba2a6e3b49035d9e210ed73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_863cd82e2602c6da467e21df3e59bf71c8c7c521202017c64113828bb7f3595a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863cd82e2602c6da467e21df3e59bf71c8c7c521202017c64113828bb7f3595a->enter($__internal_863cd82e2602c6da467e21df3e59bf71c8c7c521202017c64113828bb7f3595a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_742630f219ba351bdb5c6da7c683b9dd8361e5431ba2a6e3b49035d9e210ed73->leave($__internal_742630f219ba351bdb5c6da7c683b9dd8361e5431ba2a6e3b49035d9e210ed73_prof);

        
        $__internal_863cd82e2602c6da467e21df3e59bf71c8c7c521202017c64113828bb7f3595a->leave($__internal_863cd82e2602c6da467e21df3e59bf71c8c7c521202017c64113828bb7f3595a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
