<?php

/* :default:boissons.html.twig */
class __TwigTemplate_37b8459cad94a242feb5b554784624c8627ad2d9e0b194fc8fa2efce65183cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:boissons.html.twig", 1);
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
        $__internal_7b0794494c3dda10ef54c1807692adbaa8e999c7c598e8ded6fd68d95dd986f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0794494c3dda10ef54c1807692adbaa8e999c7c598e8ded6fd68d95dd986f0->enter($__internal_7b0794494c3dda10ef54c1807692adbaa8e999c7c598e8ded6fd68d95dd986f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:boissons.html.twig"));

        $__internal_9aa2d33226948500b7032109cf615371bcbcdc9e8b00dd9ab97ce4d41c09fb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa2d33226948500b7032109cf615371bcbcdc9e8b00dd9ab97ce4d41c09fb38->enter($__internal_9aa2d33226948500b7032109cf615371bcbcdc9e8b00dd9ab97ce4d41c09fb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:boissons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b0794494c3dda10ef54c1807692adbaa8e999c7c598e8ded6fd68d95dd986f0->leave($__internal_7b0794494c3dda10ef54c1807692adbaa8e999c7c598e8ded6fd68d95dd986f0_prof);

        
        $__internal_9aa2d33226948500b7032109cf615371bcbcdc9e8b00dd9ab97ce4d41c09fb38->leave($__internal_9aa2d33226948500b7032109cf615371bcbcdc9e8b00dd9ab97ce4d41c09fb38_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06857bd42913330cea6f89cd4f9b5e9c9c3ae361e58db04c783843084aa31346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06857bd42913330cea6f89cd4f9b5e9c9c3ae361e58db04c783843084aa31346->enter($__internal_06857bd42913330cea6f89cd4f9b5e9c9c3ae361e58db04c783843084aa31346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a1a477defa72434e7a7244ba88269f19484b759de44a364457f37d87c67cf226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a477defa72434e7a7244ba88269f19484b759de44a364457f37d87c67cf226->enter($__internal_a1a477defa72434e7a7244ba88269f19484b759de44a364457f37d87c67cf226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a1a477defa72434e7a7244ba88269f19484b759de44a364457f37d87c67cf226->leave($__internal_a1a477defa72434e7a7244ba88269f19484b759de44a364457f37d87c67cf226_prof);

        
        $__internal_06857bd42913330cea6f89cd4f9b5e9c9c3ae361e58db04c783843084aa31346->leave($__internal_06857bd42913330cea6f89cd4f9b5e9c9c3ae361e58db04c783843084aa31346_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39e574e0202721cf48b843b8795ed20853456647a18f4eb5bab4ffc7b259a924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e574e0202721cf48b843b8795ed20853456647a18f4eb5bab4ffc7b259a924->enter($__internal_39e574e0202721cf48b843b8795ed20853456647a18f4eb5bab4ffc7b259a924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ace60b3f6b3c41d49ed4c313e09dbb1fd6196209e5e1ffef09a152df39fc72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ace60b3f6b3c41d49ed4c313e09dbb1fd6196209e5e1ffef09a152df39fc72d->enter($__internal_9ace60b3f6b3c41d49ed4c313e09dbb1fd6196209e5e1ffef09a152df39fc72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "


    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["boissons"]);
        foreach ($context['_seq'] as $context["_key"] => $context["boissons"]) {
            // line 10
            echo "        ";
            if ($this->getAttribute($context["boissons"], "enabled", array())) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "name", array()), "html", null, true);
                echo "<br \\>
            ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "prix", array()), "html", null, true);
                echo "<br \\>
            <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["boissons"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "image", array()), "html", null, true);
                echo "\" /><br \\><br \\>
        ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boissons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9ace60b3f6b3c41d49ed4c313e09dbb1fd6196209e5e1ffef09a152df39fc72d->leave($__internal_9ace60b3f6b3c41d49ed4c313e09dbb1fd6196209e5e1ffef09a152df39fc72d_prof);

        
        $__internal_39e574e0202721cf48b843b8795ed20853456647a18f4eb5bab4ffc7b259a924->leave($__internal_39e574e0202721cf48b843b8795ed20853456647a18f4eb5bab4ffc7b259a924_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5c1380ef644c4a39c93bc0a7204514bdcf509a023d124a2fd6adbacff741ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c1380ef644c4a39c93bc0a7204514bdcf509a023d124a2fd6adbacff741ffe->enter($__internal_c5c1380ef644c4a39c93bc0a7204514bdcf509a023d124a2fd6adbacff741ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b57b61d23aad113fcafb89679cec5668c58976bb84b20c9ce7058b5122290a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57b61d23aad113fcafb89679cec5668c58976bb84b20c9ce7058b5122290a04->enter($__internal_b57b61d23aad113fcafb89679cec5668c58976bb84b20c9ce7058b5122290a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_b57b61d23aad113fcafb89679cec5668c58976bb84b20c9ce7058b5122290a04->leave($__internal_b57b61d23aad113fcafb89679cec5668c58976bb84b20c9ce7058b5122290a04_prof);

        
        $__internal_c5c1380ef644c4a39c93bc0a7204514bdcf509a023d124a2fd6adbacff741ffe->leave($__internal_c5c1380ef644c4a39c93bc0a7204514bdcf509a023d124a2fd6adbacff741ffe_prof);

    }

    public function getTemplateName()
    {
        return ":default:boissons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 19,  117 => 18,  103 => 15,  96 => 13,  92 => 12,  87 => 11,  84 => 10,  80 => 9,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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


    {% for boissons in boissons %}
        {% if boissons.enabled %}
            {{ boissons.name}}<br \\>
            {{ boissons.prix }}<br \\>
            <img src=\"{{ vich_uploader_asset(boissons, 'imageFile') }}\" alt=\"{{ boissons.image }}\" /><br \\><br \\>
        {% endif %}
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:boissons.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/boissons.html.twig");
    }
}
