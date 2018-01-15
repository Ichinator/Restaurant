<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_d72dbfded245c95785ee4702827e251a6111e959362e78a2a03579397b86268f extends Twig_Template
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
        $__internal_b5c5df114043d5250766d62312dbc78b6f25f09ddd6809557c9c2762ab660c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c5df114043d5250766d62312dbc78b6f25f09ddd6809557c9c2762ab660c22->enter($__internal_b5c5df114043d5250766d62312dbc78b6f25f09ddd6809557c9c2762ab660c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_e3649f69b13819023ab4cba7dd801b1b7926816f2cc5e57024f45e19ef115e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3649f69b13819023ab4cba7dd801b1b7926816f2cc5e57024f45e19ef115e7b->enter($__internal_e3649f69b13819023ab4cba7dd801b1b7926816f2cc5e57024f45e19ef115e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_b5c5df114043d5250766d62312dbc78b6f25f09ddd6809557c9c2762ab660c22->leave($__internal_b5c5df114043d5250766d62312dbc78b6f25f09ddd6809557c9c2762ab660c22_prof);

        
        $__internal_e3649f69b13819023ab4cba7dd801b1b7926816f2cc5e57024f45e19ef115e7b->leave($__internal_e3649f69b13819023ab4cba7dd801b1b7926816f2cc5e57024f45e19ef115e7b_prof);

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
