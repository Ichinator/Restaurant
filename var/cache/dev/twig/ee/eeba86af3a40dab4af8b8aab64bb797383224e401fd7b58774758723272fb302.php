<?php

/* :default:plats.html.twig */
class __TwigTemplate_5e9a36c4c03e0b6b0c2ff1605cd48c3806435692f1df2c4e86a6b0ff7b6c0dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:plats.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7d4f3ac36b7f473997d87773c2a430aff9ab65999afa63578ab4fcb21f6cf58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d4f3ac36b7f473997d87773c2a430aff9ab65999afa63578ab4fcb21f6cf58->enter($__internal_c7d4f3ac36b7f473997d87773c2a430aff9ab65999afa63578ab4fcb21f6cf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:plats.html.twig"));

        $__internal_c5b8a1029dadc9c8195780a72a386bbec8b16153b0f9a4999a6d79477bfe36c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b8a1029dadc9c8195780a72a386bbec8b16153b0f9a4999a6d79477bfe36c5->enter($__internal_c5b8a1029dadc9c8195780a72a386bbec8b16153b0f9a4999a6d79477bfe36c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:plats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7d4f3ac36b7f473997d87773c2a430aff9ab65999afa63578ab4fcb21f6cf58->leave($__internal_c7d4f3ac36b7f473997d87773c2a430aff9ab65999afa63578ab4fcb21f6cf58_prof);

        
        $__internal_c5b8a1029dadc9c8195780a72a386bbec8b16153b0f9a4999a6d79477bfe36c5->leave($__internal_c5b8a1029dadc9c8195780a72a386bbec8b16153b0f9a4999a6d79477bfe36c5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c460b6d881c3cd1879ad38b782632936c78e09f543200b33b9e130b18731ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c460b6d881c3cd1879ad38b782632936c78e09f543200b33b9e130b18731ed6->enter($__internal_8c460b6d881c3cd1879ad38b782632936c78e09f543200b33b9e130b18731ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cbc7f7fb356f1b0ac028f68ac179d7acbd56139485d999dd96b6664fdaa89265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc7f7fb356f1b0ac028f68ac179d7acbd56139485d999dd96b6664fdaa89265->enter($__internal_cbc7f7fb356f1b0ac028f68ac179d7acbd56139485d999dd96b6664fdaa89265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_cbc7f7fb356f1b0ac028f68ac179d7acbd56139485d999dd96b6664fdaa89265->leave($__internal_cbc7f7fb356f1b0ac028f68ac179d7acbd56139485d999dd96b6664fdaa89265_prof);

        
        $__internal_8c460b6d881c3cd1879ad38b782632936c78e09f543200b33b9e130b18731ed6->leave($__internal_8c460b6d881c3cd1879ad38b782632936c78e09f543200b33b9e130b18731ed6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9e93e0f3ad8fe9474ee0d8fd3a43625bdd7635e6df4669f3abfa618b12c6b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e93e0f3ad8fe9474ee0d8fd3a43625bdd7635e6df4669f3abfa618b12c6b5f->enter($__internal_d9e93e0f3ad8fe9474ee0d8fd3a43625bdd7635e6df4669f3abfa618b12c6b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0d2ff5cc05c178a4858edba35fb3401c2dcaaa21923221790291251f7536230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d2ff5cc05c178a4858edba35fb3401c2dcaaa21923221790291251f7536230->enter($__internal_f0d2ff5cc05c178a4858edba35fb3401c2dcaaa21923221790291251f7536230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["plats"]);
        foreach ($context['_seq'] as $context["_key"] => $context["plats"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute($context["plats"], "enabled", array())) {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["plats"], "name", array()), "html", null, true);
                echo "<br \\>
            ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["plats"], "prix", array()), "html", null, true);
                echo "<br \\>
            <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["plats"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["plats"], "image", array()), "html", null, true);
                echo "\" /><br \\><br \\>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f0d2ff5cc05c178a4858edba35fb3401c2dcaaa21923221790291251f7536230->leave($__internal_f0d2ff5cc05c178a4858edba35fb3401c2dcaaa21923221790291251f7536230_prof);

        
        $__internal_d9e93e0f3ad8fe9474ee0d8fd3a43625bdd7635e6df4669f3abfa618b12c6b5f->leave($__internal_d9e93e0f3ad8fe9474ee0d8fd3a43625bdd7635e6df4669f3abfa618b12c6b5f_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10113aee586c20593d22e6b23f17b18a7a8f16fcc62c9904d1452324afbcd27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10113aee586c20593d22e6b23f17b18a7a8f16fcc62c9904d1452324afbcd27b->enter($__internal_10113aee586c20593d22e6b23f17b18a7a8f16fcc62c9904d1452324afbcd27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f4f675e189a58a2b2275a657add2318a38a8c3c38d17a3cbc0a71cd0de3ca372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f675e189a58a2b2275a657add2318a38a8c3c38d17a3cbc0a71cd0de3ca372->enter($__internal_f4f675e189a58a2b2275a657add2318a38a8c3c38d17a3cbc0a71cd0de3ca372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f4f675e189a58a2b2275a657add2318a38a8c3c38d17a3cbc0a71cd0de3ca372->leave($__internal_f4f675e189a58a2b2275a657add2318a38a8c3c38d17a3cbc0a71cd0de3ca372_prof);

        
        $__internal_10113aee586c20593d22e6b23f17b18a7a8f16fcc62c9904d1452324afbcd27b->leave($__internal_10113aee586c20593d22e6b23f17b18a7a8f16fcc62c9904d1452324afbcd27b_prof);

    }

    public function getTemplateName()
    {
        return ":default:plats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 18,  116 => 17,  102 => 14,  95 => 12,  91 => 11,  86 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent ()}}
{% endblock %}
{% block body %}
    {{ parent ()}}

    {% for plats in plats %}
        {% if plats.enabled %}
            {{ plats.name}}<br \\>
            {{ plats.prix }}<br \\>
            <img src=\"{{ vich_uploader_asset(plats, 'imageFile') }}\" alt=\"{{ plats.image }}\" /><br \\><br \\>
        {% endif %}
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:plats.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/plats.html.twig");
    }
}
