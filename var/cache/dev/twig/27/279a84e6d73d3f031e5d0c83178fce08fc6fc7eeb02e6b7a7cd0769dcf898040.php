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
        $__internal_8c4f0eadb72be4314dedc490cee322554668f3f6f8e3df4239d74122bd40de30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4f0eadb72be4314dedc490cee322554668f3f6f8e3df4239d74122bd40de30->enter($__internal_8c4f0eadb72be4314dedc490cee322554668f3f6f8e3df4239d74122bd40de30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:entrees.html.twig"));

        $__internal_51856090383485baee5380aad6418d58b8791fd9cb32b195d55d298725fa8b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51856090383485baee5380aad6418d58b8791fd9cb32b195d55d298725fa8b8b->enter($__internal_51856090383485baee5380aad6418d58b8791fd9cb32b195d55d298725fa8b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:entrees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4f0eadb72be4314dedc490cee322554668f3f6f8e3df4239d74122bd40de30->leave($__internal_8c4f0eadb72be4314dedc490cee322554668f3f6f8e3df4239d74122bd40de30_prof);

        
        $__internal_51856090383485baee5380aad6418d58b8791fd9cb32b195d55d298725fa8b8b->leave($__internal_51856090383485baee5380aad6418d58b8791fd9cb32b195d55d298725fa8b8b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03dbadd9ea3873eb5d768dd3653e544d56285ac774e8035036cc085ef5702337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03dbadd9ea3873eb5d768dd3653e544d56285ac774e8035036cc085ef5702337->enter($__internal_03dbadd9ea3873eb5d768dd3653e544d56285ac774e8035036cc085ef5702337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6c55c20af9a3828daa26704a8c32a9f26958b870db618c962ef92fd9057083f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c55c20af9a3828daa26704a8c32a9f26958b870db618c962ef92fd9057083f3->enter($__internal_6c55c20af9a3828daa26704a8c32a9f26958b870db618c962ef92fd9057083f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6c55c20af9a3828daa26704a8c32a9f26958b870db618c962ef92fd9057083f3->leave($__internal_6c55c20af9a3828daa26704a8c32a9f26958b870db618c962ef92fd9057083f3_prof);

        
        $__internal_03dbadd9ea3873eb5d768dd3653e544d56285ac774e8035036cc085ef5702337->leave($__internal_03dbadd9ea3873eb5d768dd3653e544d56285ac774e8035036cc085ef5702337_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8660253f72e6964f9f6b25f6c1ebdde5ab04ad5ab59ed16fa6711b2bf0e4140a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8660253f72e6964f9f6b25f6c1ebdde5ab04ad5ab59ed16fa6711b2bf0e4140a->enter($__internal_8660253f72e6964f9f6b25f6c1ebdde5ab04ad5ab59ed16fa6711b2bf0e4140a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b53a7522d06313b49555843fe052c62d08bdbfb4ce729b4ebb1e442f104cb2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53a7522d06313b49555843fe052c62d08bdbfb4ce729b4ebb1e442f104cb2ca->enter($__internal_b53a7522d06313b49555843fe052c62d08bdbfb4ce729b4ebb1e442f104cb2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        
        $__internal_b53a7522d06313b49555843fe052c62d08bdbfb4ce729b4ebb1e442f104cb2ca->leave($__internal_b53a7522d06313b49555843fe052c62d08bdbfb4ce729b4ebb1e442f104cb2ca_prof);

        
        $__internal_8660253f72e6964f9f6b25f6c1ebdde5ab04ad5ab59ed16fa6711b2bf0e4140a->leave($__internal_8660253f72e6964f9f6b25f6c1ebdde5ab04ad5ab59ed16fa6711b2bf0e4140a_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_708cd92833bb4110dfa03d8f19659d6d5b3fa19271f74e60d644a16327a43729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708cd92833bb4110dfa03d8f19659d6d5b3fa19271f74e60d644a16327a43729->enter($__internal_708cd92833bb4110dfa03d8f19659d6d5b3fa19271f74e60d644a16327a43729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce5e623d7c6dd2e7c87fa63865c4929fd860e071a91bd570d8f06d6534d723fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5e623d7c6dd2e7c87fa63865c4929fd860e071a91bd570d8f06d6534d723fc->enter($__internal_ce5e623d7c6dd2e7c87fa63865c4929fd860e071a91bd570d8f06d6534d723fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_ce5e623d7c6dd2e7c87fa63865c4929fd860e071a91bd570d8f06d6534d723fc->leave($__internal_ce5e623d7c6dd2e7c87fa63865c4929fd860e071a91bd570d8f06d6534d723fc_prof);

        
        $__internal_708cd92833bb4110dfa03d8f19659d6d5b3fa19271f74e60d644a16327a43729->leave($__internal_708cd92833bb4110dfa03d8f19659d6d5b3fa19271f74e60d644a16327a43729_prof);

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
        return array (  128 => 19,  119 => 18,  108 => 15,  102 => 14,  95 => 12,  91 => 11,  86 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        {% endif %}
    {% endfor %}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:entrees.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/entrees.html.twig");
    }
}
