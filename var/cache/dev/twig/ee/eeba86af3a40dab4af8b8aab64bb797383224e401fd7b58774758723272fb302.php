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
        $__internal_bcb262c506a62da650d5d024d0493e1f1e2708f66cc638d8d13821f07ed8e81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb262c506a62da650d5d024d0493e1f1e2708f66cc638d8d13821f07ed8e81f->enter($__internal_bcb262c506a62da650d5d024d0493e1f1e2708f66cc638d8d13821f07ed8e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:plats.html.twig"));

        $__internal_f0cfd4d444d276f7a041da06e1e3c2be38c0b288774d7cf2b45527c9e4e7d373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cfd4d444d276f7a041da06e1e3c2be38c0b288774d7cf2b45527c9e4e7d373->enter($__internal_f0cfd4d444d276f7a041da06e1e3c2be38c0b288774d7cf2b45527c9e4e7d373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:plats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb262c506a62da650d5d024d0493e1f1e2708f66cc638d8d13821f07ed8e81f->leave($__internal_bcb262c506a62da650d5d024d0493e1f1e2708f66cc638d8d13821f07ed8e81f_prof);

        
        $__internal_f0cfd4d444d276f7a041da06e1e3c2be38c0b288774d7cf2b45527c9e4e7d373->leave($__internal_f0cfd4d444d276f7a041da06e1e3c2be38c0b288774d7cf2b45527c9e4e7d373_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed12dfa8d1eedb4b0193690ee22753a4d2f51823856cdeb0aa4a16ec139493f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed12dfa8d1eedb4b0193690ee22753a4d2f51823856cdeb0aa4a16ec139493f5->enter($__internal_ed12dfa8d1eedb4b0193690ee22753a4d2f51823856cdeb0aa4a16ec139493f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_495bf5d85cedd0a95c15f93e4cee7ab931091bbe31da26a8ecf2113934d3be80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495bf5d85cedd0a95c15f93e4cee7ab931091bbe31da26a8ecf2113934d3be80->enter($__internal_495bf5d85cedd0a95c15f93e4cee7ab931091bbe31da26a8ecf2113934d3be80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_495bf5d85cedd0a95c15f93e4cee7ab931091bbe31da26a8ecf2113934d3be80->leave($__internal_495bf5d85cedd0a95c15f93e4cee7ab931091bbe31da26a8ecf2113934d3be80_prof);

        
        $__internal_ed12dfa8d1eedb4b0193690ee22753a4d2f51823856cdeb0aa4a16ec139493f5->leave($__internal_ed12dfa8d1eedb4b0193690ee22753a4d2f51823856cdeb0aa4a16ec139493f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67749ad07da82cbbd26843d34f532a1672fc1a3f7284434f50f001774b5753c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67749ad07da82cbbd26843d34f532a1672fc1a3f7284434f50f001774b5753c7->enter($__internal_67749ad07da82cbbd26843d34f532a1672fc1a3f7284434f50f001774b5753c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8b2a58843baa38f699813b62e3a854444584ea7cda881e13d7c386032525507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b2a58843baa38f699813b62e3a854444584ea7cda881e13d7c386032525507->enter($__internal_c8b2a58843baa38f699813b62e3a854444584ea7cda881e13d7c386032525507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["plats"], "name", array()), "html", null, true);
            echo "<br \\>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["plats"], "prix", array()), "html", null, true);
            echo "<br \\>
        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["plats"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plats"], "image", array()), "html", null, true);
            echo "\" /><br \\><br \\>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c8b2a58843baa38f699813b62e3a854444584ea7cda881e13d7c386032525507->leave($__internal_c8b2a58843baa38f699813b62e3a854444584ea7cda881e13d7c386032525507_prof);

        
        $__internal_67749ad07da82cbbd26843d34f532a1672fc1a3f7284434f50f001774b5753c7->leave($__internal_67749ad07da82cbbd26843d34f532a1672fc1a3f7284434f50f001774b5753c7_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8524ea694e9082dd001af8b16690f9e81ed55b9884cb64c0e19f3a48e6f5ca6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8524ea694e9082dd001af8b16690f9e81ed55b9884cb64c0e19f3a48e6f5ca6b->enter($__internal_8524ea694e9082dd001af8b16690f9e81ed55b9884cb64c0e19f3a48e6f5ca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f382834b0e8c1302922c103d44d73ac3dfbf0ca00ecba19faa0f2061c608d12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f382834b0e8c1302922c103d44d73ac3dfbf0ca00ecba19faa0f2061c608d12f->enter($__internal_f382834b0e8c1302922c103d44d73ac3dfbf0ca00ecba19faa0f2061c608d12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f382834b0e8c1302922c103d44d73ac3dfbf0ca00ecba19faa0f2061c608d12f->leave($__internal_f382834b0e8c1302922c103d44d73ac3dfbf0ca00ecba19faa0f2061c608d12f_prof);

        
        $__internal_8524ea694e9082dd001af8b16690f9e81ed55b9884cb64c0e19f3a48e6f5ca6b->leave($__internal_8524ea694e9082dd001af8b16690f9e81ed55b9884cb64c0e19f3a48e6f5ca6b_prof);

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
        return array (  119 => 16,  110 => 15,  92 => 11,  88 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        {{ plats.name}}<br \\>
        {{ plats.prix }}<br \\>
        <img src=\"{{ vich_uploader_asset(plats, 'imageFile') }}\" alt=\"{{ plats.image }}\" /><br \\><br \\>
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:plats.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/plats.html.twig");
    }
}
