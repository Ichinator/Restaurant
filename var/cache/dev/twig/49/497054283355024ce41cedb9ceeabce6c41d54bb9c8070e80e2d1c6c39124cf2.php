<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_ba9fb65339824bf2d924c0ad0acace1c89432b37de1d54fee4691c4aeed6f628 extends Twig_Template
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
        $__internal_b25151a4d13f0a8401aff2dd2f12dbe45c59687473abf3949566769a635d3c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25151a4d13f0a8401aff2dd2f12dbe45c59687473abf3949566769a635d3c1a->enter($__internal_b25151a4d13f0a8401aff2dd2f12dbe45c59687473abf3949566769a635d3c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        $__internal_400e9ab93faac77692d7f606fb2a50eea566fc305feef513c611e447fafdc68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400e9ab93faac77692d7f606fb2a50eea566fc305feef513c611e447fafdc68b->enter($__internal_400e9ab93faac77692d7f606fb2a50eea566fc305feef513c611e447fafdc68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_replace_filter(($context["value"] ?? $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_b25151a4d13f0a8401aff2dd2f12dbe45c59687473abf3949566769a635d3c1a->leave($__internal_b25151a4d13f0a8401aff2dd2f12dbe45c59687473abf3949566769a635d3c1a_prof);

        
        $__internal_400e9ab93faac77692d7f606fb2a50eea566fc305feef513c611e447fafdc68b->leave($__internal_400e9ab93faac77692d7f606fb2a50eea566fc305feef513c611e447fafdc68b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value }}</a>
{% else %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_url.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_url.html.twig");
    }
}
