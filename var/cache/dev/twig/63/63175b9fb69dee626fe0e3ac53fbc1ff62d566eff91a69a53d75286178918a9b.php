<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_64c4e2b2f14c3979e0e8db56b5997ee89d1f361545ce55ac3c96085bbc5cb7ea extends Twig_Template
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
        $__internal_8813f5749e0c8b306e71650365e0361e90451b8ddc500b35a1e55706db2f9bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8813f5749e0c8b306e71650365e0361e90451b8ddc500b35a1e55706db2f9bdb->enter($__internal_8813f5749e0c8b306e71650365e0361e90451b8ddc500b35a1e55706db2f9bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_6e3d2e3236468f05b75d19a06aea7a1649e44c9eb03af6f3e49c4b0c0a61979c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3d2e3236468f05b75d19a06aea7a1649e44c9eb03af6f3e49c4b0c0a61979c->enter($__internal_6e3d2e3236468f05b75d19a06aea7a1649e44c9eb03af6f3e49c4b0c0a61979c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_8813f5749e0c8b306e71650365e0361e90451b8ddc500b35a1e55706db2f9bdb->leave($__internal_8813f5749e0c8b306e71650365e0361e90451b8ddc500b35a1e55706db2f9bdb_prof);

        
        $__internal_6e3d2e3236468f05b75d19a06aea7a1649e44c9eb03af6f3e49c4b0c0a61979c->leave($__internal_6e3d2e3236468f05b75d19a06aea7a1649e44c9eb03af6f3e49c4b0c0a61979c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
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
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
