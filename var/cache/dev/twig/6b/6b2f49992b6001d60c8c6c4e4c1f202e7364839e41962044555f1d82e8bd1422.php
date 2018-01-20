<?php

/* default/employees.html.twig */
class __TwigTemplate_0b2fff6fba61b822af088cdb41faa86b27e83d72fe1021d51ccc149fa3a8b7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/employees.html.twig", 1);
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
        $__internal_e5d1536602b7aace829c803b738aaefe36d79b37c9ae4dff9750ee858b548fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d1536602b7aace829c803b738aaefe36d79b37c9ae4dff9750ee858b548fdd->enter($__internal_e5d1536602b7aace829c803b738aaefe36d79b37c9ae4dff9750ee858b548fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/employees.html.twig"));

        $__internal_3164b6998cf471901907108ffaecd413d9815163c75dc16c17ecc0b0eb6eca0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3164b6998cf471901907108ffaecd413d9815163c75dc16c17ecc0b0eb6eca0d->enter($__internal_3164b6998cf471901907108ffaecd413d9815163c75dc16c17ecc0b0eb6eca0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/employees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5d1536602b7aace829c803b738aaefe36d79b37c9ae4dff9750ee858b548fdd->leave($__internal_e5d1536602b7aace829c803b738aaefe36d79b37c9ae4dff9750ee858b548fdd_prof);

        
        $__internal_3164b6998cf471901907108ffaecd413d9815163c75dc16c17ecc0b0eb6eca0d->leave($__internal_3164b6998cf471901907108ffaecd413d9815163c75dc16c17ecc0b0eb6eca0d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_368e3e5015c5b7e872af89e104282082050ff1e71a1e925cc8838cb78b545ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368e3e5015c5b7e872af89e104282082050ff1e71a1e925cc8838cb78b545ea8->enter($__internal_368e3e5015c5b7e872af89e104282082050ff1e71a1e925cc8838cb78b545ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dc483960a8a0cae36cc9c2bad300d6386cff2791c9d8a358781ca8c06771ba0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc483960a8a0cae36cc9c2bad300d6386cff2791c9d8a358781ca8c06771ba0e->enter($__internal_dc483960a8a0cae36cc9c2bad300d6386cff2791c9d8a358781ca8c06771ba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_dc483960a8a0cae36cc9c2bad300d6386cff2791c9d8a358781ca8c06771ba0e->leave($__internal_dc483960a8a0cae36cc9c2bad300d6386cff2791c9d8a358781ca8c06771ba0e_prof);

        
        $__internal_368e3e5015c5b7e872af89e104282082050ff1e71a1e925cc8838cb78b545ea8->leave($__internal_368e3e5015c5b7e872af89e104282082050ff1e71a1e925cc8838cb78b545ea8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8b4da02167fd5bd233a5c09f3db76c8ed3a61d9ea3246161540d5d4250c4b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b4da02167fd5bd233a5c09f3db76c8ed3a61d9ea3246161540d5d4250c4b24->enter($__internal_e8b4da02167fd5bd233a5c09f3db76c8ed3a61d9ea3246161540d5d4250c4b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b5f29b56bab65a85c03ab0a917050a6de8f33e819848e4e1068f55eb91943fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5f29b56bab65a85c03ab0a917050a6de8f33e819848e4e1068f55eb91943fc->enter($__internal_5b5f29b56bab65a85c03ab0a917050a6de8f33e819848e4e1068f55eb91943fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["employees"]);
        foreach ($context['_seq'] as $context["_key"] => $context["employees"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "nom", array()), "html", null, true);
            echo "<br \\>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "prenom", array()), "html", null, true);
            echo "<br \\>
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "poste", array()), "html", null, true);
            echo "<br \\>
        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["employees"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "image", array()), "html", null, true);
            echo "\" /><br \\><br \\>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5b5f29b56bab65a85c03ab0a917050a6de8f33e819848e4e1068f55eb91943fc->leave($__internal_5b5f29b56bab65a85c03ab0a917050a6de8f33e819848e4e1068f55eb91943fc_prof);

        
        $__internal_e8b4da02167fd5bd233a5c09f3db76c8ed3a61d9ea3246161540d5d4250c4b24->leave($__internal_e8b4da02167fd5bd233a5c09f3db76c8ed3a61d9ea3246161540d5d4250c4b24_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f51fa04e0750c95bc29b792170b762ff59d9339a97293c36be7e0d7a8abbcd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51fa04e0750c95bc29b792170b762ff59d9339a97293c36be7e0d7a8abbcd6d->enter($__internal_f51fa04e0750c95bc29b792170b762ff59d9339a97293c36be7e0d7a8abbcd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b0d3647da0736318573ab27ab6b82901c384699add7d5433ee81bdb1060a1541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d3647da0736318573ab27ab6b82901c384699add7d5433ee81bdb1060a1541->enter($__internal_b0d3647da0736318573ab27ab6b82901c384699add7d5433ee81bdb1060a1541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_b0d3647da0736318573ab27ab6b82901c384699add7d5433ee81bdb1060a1541->leave($__internal_b0d3647da0736318573ab27ab6b82901c384699add7d5433ee81bdb1060a1541_prof);

        
        $__internal_f51fa04e0750c95bc29b792170b762ff59d9339a97293c36be7e0d7a8abbcd6d->leave($__internal_f51fa04e0750c95bc29b792170b762ff59d9339a97293c36be7e0d7a8abbcd6d_prof);

    }

    public function getTemplateName()
    {
        return "default/employees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 17,  114 => 16,  96 => 12,  92 => 11,  88 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

    {% for employees in employees %}
        {{ employees.nom}}<br \\>
        {{ employees.prenom }}<br \\>
        {{ employees.poste }}<br \\>
        <img src=\"{{ vich_uploader_asset(employees, 'imageFile') }}\" alt=\"{{ employees.image }}\" /><br \\><br \\>
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/employees.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/employees.html.twig");
    }
}
