<?php

/* :default:entrees.html.twig */
class __TwigTemplate_486defcd1dede84206bab263af69b54ca0bbdfeb83c1a1ab0749ad53ca979f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:entrees.html.twig", 1);
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
        $__internal_ce0475f0d77efedea13b9e848ff1507302c654bab786f9ab5dafdbff6529053d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0475f0d77efedea13b9e848ff1507302c654bab786f9ab5dafdbff6529053d->enter($__internal_ce0475f0d77efedea13b9e848ff1507302c654bab786f9ab5dafdbff6529053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:entrees.html.twig"));

        $__internal_42590b4e59634a76ec651e12ba728fb87c64c4c0b26b6f2de16551b68c171dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42590b4e59634a76ec651e12ba728fb87c64c4c0b26b6f2de16551b68c171dd7->enter($__internal_42590b4e59634a76ec651e12ba728fb87c64c4c0b26b6f2de16551b68c171dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:entrees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce0475f0d77efedea13b9e848ff1507302c654bab786f9ab5dafdbff6529053d->leave($__internal_ce0475f0d77efedea13b9e848ff1507302c654bab786f9ab5dafdbff6529053d_prof);

        
        $__internal_42590b4e59634a76ec651e12ba728fb87c64c4c0b26b6f2de16551b68c171dd7->leave($__internal_42590b4e59634a76ec651e12ba728fb87c64c4c0b26b6f2de16551b68c171dd7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0901e2c6d5d412b7ac462b5bf8cd9922fbbc419386ea884188b3d34dab3bd300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0901e2c6d5d412b7ac462b5bf8cd9922fbbc419386ea884188b3d34dab3bd300->enter($__internal_0901e2c6d5d412b7ac462b5bf8cd9922fbbc419386ea884188b3d34dab3bd300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0baca07406d34ca387b5cb33e49cd2f98e662c5217eca2791557eaf9c4c859fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0baca07406d34ca387b5cb33e49cd2f98e662c5217eca2791557eaf9c4c859fe->enter($__internal_0baca07406d34ca387b5cb33e49cd2f98e662c5217eca2791557eaf9c4c859fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0baca07406d34ca387b5cb33e49cd2f98e662c5217eca2791557eaf9c4c859fe->leave($__internal_0baca07406d34ca387b5cb33e49cd2f98e662c5217eca2791557eaf9c4c859fe_prof);

        
        $__internal_0901e2c6d5d412b7ac462b5bf8cd9922fbbc419386ea884188b3d34dab3bd300->leave($__internal_0901e2c6d5d412b7ac462b5bf8cd9922fbbc419386ea884188b3d34dab3bd300_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea0ea4b88f457b201febab0c0c99f437ff772d7c0d1ab401cb951ffb0e649349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0ea4b88f457b201febab0c0c99f437ff772d7c0d1ab401cb951ffb0e649349->enter($__internal_ea0ea4b88f457b201febab0c0c99f437ff772d7c0d1ab401cb951ffb0e649349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_202439e926eef7aab154873e96dfcf9630b36acecdec23ac1167b7b3cfdc6ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202439e926eef7aab154873e96dfcf9630b36acecdec23ac1167b7b3cfdc6ed4->enter($__internal_202439e926eef7aab154873e96dfcf9630b36acecdec23ac1167b7b3cfdc6ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["entrees"]);
        foreach ($context['_seq'] as $context["_key"] => $context["entrees"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute($context["entrees"], "enabled", array())) {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entrees"], "name", array()), "html", null, true);
                echo "<br \\>
            ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["entrees"], "prix", array()), "html", null, true);
                echo "<br \\>
            <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["entrees"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entrees"], "image", array()), "html", null, true);
                echo "\" /><br \\><br \\>
            <td><a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showOneEntree", array("id" => $this->getAttribute($context["entrees"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entrees"], "name", array()), "html", null, true);
                echo "</a></td>
        ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        
        $__internal_202439e926eef7aab154873e96dfcf9630b36acecdec23ac1167b7b3cfdc6ed4->leave($__internal_202439e926eef7aab154873e96dfcf9630b36acecdec23ac1167b7b3cfdc6ed4_prof);

        
        $__internal_ea0ea4b88f457b201febab0c0c99f437ff772d7c0d1ab401cb951ffb0e649349->leave($__internal_ea0ea4b88f457b201febab0c0c99f437ff772d7c0d1ab401cb951ffb0e649349_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_384a141903753a91d70c58299db34d30579eb293c0fe10182601da40c83b2c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384a141903753a91d70c58299db34d30579eb293c0fe10182601da40c83b2c78->enter($__internal_384a141903753a91d70c58299db34d30579eb293c0fe10182601da40c83b2c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c57cc193a706b94ecf2402dcd96dfbd7bf28132c3fee922e1d88a5815a9b8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c57cc193a706b94ecf2402dcd96dfbd7bf28132c3fee922e1d88a5815a9b8ea->enter($__internal_9c57cc193a706b94ecf2402dcd96dfbd7bf28132c3fee922e1d88a5815a9b8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9c57cc193a706b94ecf2402dcd96dfbd7bf28132c3fee922e1d88a5815a9b8ea->leave($__internal_9c57cc193a706b94ecf2402dcd96dfbd7bf28132c3fee922e1d88a5815a9b8ea_prof);

        
        $__internal_384a141903753a91d70c58299db34d30579eb293c0fe10182601da40c83b2c78->leave($__internal_384a141903753a91d70c58299db34d30579eb293c0fe10182601da40c83b2c78_prof);

    }

    public function getTemplateName()
    {
        return ":default:entrees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 20,  125 => 19,  114 => 16,  108 => 15,  101 => 13,  95 => 12,  91 => 11,  86 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

    {% for entrees in entrees %}
        {% if entrees.enabled %}
            {{ entrees.name}}<br \\>
            {{ entrees.prix }}<br \\>
            <img src=\"{{ vich_uploader_asset(entrees, 'imageFile') }}\" alt=\"{{ entrees.image }}\" /><br \\><br \\>
            <td><a href=\"{{ path('showOneEntree', { 'id': entrees.id }) }}\">{{ entrees.name }}</a></td>
        {% endif %}
    {% endfor %}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:entrees.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/entrees.html.twig");
    }
}
