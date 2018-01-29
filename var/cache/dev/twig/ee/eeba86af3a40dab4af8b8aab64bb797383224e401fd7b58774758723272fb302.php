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
        $__internal_cc0552d6f876686bd3df0e1cf125c654669d81f193c600389345f823671c0451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0552d6f876686bd3df0e1cf125c654669d81f193c600389345f823671c0451->enter($__internal_cc0552d6f876686bd3df0e1cf125c654669d81f193c600389345f823671c0451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:plats.html.twig"));

        $__internal_824d79845b104d0966486918c2e62efd14f42afaea09d8d2e26d3075bb6d6b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824d79845b104d0966486918c2e62efd14f42afaea09d8d2e26d3075bb6d6b12->enter($__internal_824d79845b104d0966486918c2e62efd14f42afaea09d8d2e26d3075bb6d6b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:plats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0552d6f876686bd3df0e1cf125c654669d81f193c600389345f823671c0451->leave($__internal_cc0552d6f876686bd3df0e1cf125c654669d81f193c600389345f823671c0451_prof);

        
        $__internal_824d79845b104d0966486918c2e62efd14f42afaea09d8d2e26d3075bb6d6b12->leave($__internal_824d79845b104d0966486918c2e62efd14f42afaea09d8d2e26d3075bb6d6b12_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fbea1a87939c46272bd1edc04699f722f2a5b5e2aa5883c1d2a15a342218b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbea1a87939c46272bd1edc04699f722f2a5b5e2aa5883c1d2a15a342218b55->enter($__internal_9fbea1a87939c46272bd1edc04699f722f2a5b5e2aa5883c1d2a15a342218b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec8ffe941e2d03101b0336de32aa25878839e55eb8d1889d9f4a0eb63c18166d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8ffe941e2d03101b0336de32aa25878839e55eb8d1889d9f4a0eb63c18166d->enter($__internal_ec8ffe941e2d03101b0336de32aa25878839e55eb8d1889d9f4a0eb63c18166d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ec8ffe941e2d03101b0336de32aa25878839e55eb8d1889d9f4a0eb63c18166d->leave($__internal_ec8ffe941e2d03101b0336de32aa25878839e55eb8d1889d9f4a0eb63c18166d_prof);

        
        $__internal_9fbea1a87939c46272bd1edc04699f722f2a5b5e2aa5883c1d2a15a342218b55->leave($__internal_9fbea1a87939c46272bd1edc04699f722f2a5b5e2aa5883c1d2a15a342218b55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d605d8a917dd9d15fccbf88848d865cb7cdfef544b13c86e58200c3d498e8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d605d8a917dd9d15fccbf88848d865cb7cdfef544b13c86e58200c3d498e8d5->enter($__internal_6d605d8a917dd9d15fccbf88848d865cb7cdfef544b13c86e58200c3d498e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa7ddabca1cb4a70604b833b24e013bd3ff997aba218f96d483efd62ff325c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7ddabca1cb4a70604b833b24e013bd3ff997aba218f96d483efd62ff325c13->enter($__internal_fa7ddabca1cb4a70604b833b24e013bd3ff997aba218f96d483efd62ff325c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <td><a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showOnePlat", array("id" => $this->getAttribute($context["plats"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["plats"], "name", array()), "html", null, true);
                echo "</a></td>
        ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fa7ddabca1cb4a70604b833b24e013bd3ff997aba218f96d483efd62ff325c13->leave($__internal_fa7ddabca1cb4a70604b833b24e013bd3ff997aba218f96d483efd62ff325c13_prof);

        
        $__internal_6d605d8a917dd9d15fccbf88848d865cb7cdfef544b13c86e58200c3d498e8d5->leave($__internal_6d605d8a917dd9d15fccbf88848d865cb7cdfef544b13c86e58200c3d498e8d5_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e5a153e58e0384754b0aeeb8b0bf6c09e314dabcd6e1dbe26f9711ed399ff2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5a153e58e0384754b0aeeb8b0bf6c09e314dabcd6e1dbe26f9711ed399ff2d->enter($__internal_0e5a153e58e0384754b0aeeb8b0bf6c09e314dabcd6e1dbe26f9711ed399ff2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e64a7b9b68af28bffc463411c430d641df212f26f7cfde55a3ba894169fdd4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64a7b9b68af28bffc463411c430d641df212f26f7cfde55a3ba894169fdd4fa->enter($__internal_e64a7b9b68af28bffc463411c430d641df212f26f7cfde55a3ba894169fdd4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_e64a7b9b68af28bffc463411c430d641df212f26f7cfde55a3ba894169fdd4fa->leave($__internal_e64a7b9b68af28bffc463411c430d641df212f26f7cfde55a3ba894169fdd4fa_prof);

        
        $__internal_0e5a153e58e0384754b0aeeb8b0bf6c09e314dabcd6e1dbe26f9711ed399ff2d->leave($__internal_0e5a153e58e0384754b0aeeb8b0bf6c09e314dabcd6e1dbe26f9711ed399ff2d_prof);

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
        return array (  131 => 19,  122 => 18,  108 => 15,  101 => 13,  95 => 12,  91 => 11,  86 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
            <td><a href=\"{{ path('showOnePlat', { 'id': plats.id }) }}\">{{ plats.name }}</a></td>
        {% endif %}
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:plats.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/plats.html.twig");
    }
}
