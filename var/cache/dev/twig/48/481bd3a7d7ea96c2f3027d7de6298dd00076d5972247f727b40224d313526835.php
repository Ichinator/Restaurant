<?php

/* default/oneBoisson.html.twig */
class __TwigTemplate_27f0069f1891ad6158015cce6a0e7cefccc2f54b87846d378e35982c15fec098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/oneBoisson.html.twig", 1);
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
        $__internal_f139d35115b09fc77e3f9fc350fb13d07a2eff8fc0d7885d01dd04fcdac21364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f139d35115b09fc77e3f9fc350fb13d07a2eff8fc0d7885d01dd04fcdac21364->enter($__internal_f139d35115b09fc77e3f9fc350fb13d07a2eff8fc0d7885d01dd04fcdac21364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/oneBoisson.html.twig"));

        $__internal_cd45413cb88e6872aa03d6dd9699861a721dd8f76ac71643783ef0de116129df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd45413cb88e6872aa03d6dd9699861a721dd8f76ac71643783ef0de116129df->enter($__internal_cd45413cb88e6872aa03d6dd9699861a721dd8f76ac71643783ef0de116129df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/oneBoisson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f139d35115b09fc77e3f9fc350fb13d07a2eff8fc0d7885d01dd04fcdac21364->leave($__internal_f139d35115b09fc77e3f9fc350fb13d07a2eff8fc0d7885d01dd04fcdac21364_prof);

        
        $__internal_cd45413cb88e6872aa03d6dd9699861a721dd8f76ac71643783ef0de116129df->leave($__internal_cd45413cb88e6872aa03d6dd9699861a721dd8f76ac71643783ef0de116129df_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a593d5af5de84b4aebe1d9976d9dcfa819b2961a0d2c071449300329af05d4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a593d5af5de84b4aebe1d9976d9dcfa819b2961a0d2c071449300329af05d4a2->enter($__internal_a593d5af5de84b4aebe1d9976d9dcfa819b2961a0d2c071449300329af05d4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a29ca51556e22459203cae8a4025824c491a11285a77fd305af34cd0a62d8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a29ca51556e22459203cae8a4025824c491a11285a77fd305af34cd0a62d8b3->enter($__internal_0a29ca51556e22459203cae8a4025824c491a11285a77fd305af34cd0a62d8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0a29ca51556e22459203cae8a4025824c491a11285a77fd305af34cd0a62d8b3->leave($__internal_0a29ca51556e22459203cae8a4025824c491a11285a77fd305af34cd0a62d8b3_prof);

        
        $__internal_a593d5af5de84b4aebe1d9976d9dcfa819b2961a0d2c071449300329af05d4a2->leave($__internal_a593d5af5de84b4aebe1d9976d9dcfa819b2961a0d2c071449300329af05d4a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c503dfef4d422673834a95b21d5645965c40bf3e200ef552092178ee578476ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c503dfef4d422673834a95b21d5645965c40bf3e200ef552092178ee578476ee->enter($__internal_c503dfef4d422673834a95b21d5645965c40bf3e200ef552092178ee578476ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0bf4b5a42044a982911e0e62ccef9f24bb7689158fb6ad464c2ba452f39e132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bf4b5a42044a982911e0e62ccef9f24bb7689158fb6ad464c2ba452f39e132->enter($__internal_c0bf4b5a42044a982911e0e62ccef9f24bb7689158fb6ad464c2ba452f39e132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneBoisson"] ?? $this->getContext($context, "oneBoisson")), "name", array()), "html", null, true);
        echo "<br \\>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneBoisson"] ?? $this->getContext($context, "oneBoisson")), "prix", array()), "html", null, true);
        echo "<br \\>
    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["oneBoisson"] ?? $this->getContext($context, "oneBoisson")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneBoisson"] ?? $this->getContext($context, "oneBoisson")), "image", array()), "html", null, true);
        echo "\" /><br \\><br \\>
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneBoisson"] ?? $this->getContext($context, "oneBoisson")), "description", array()), "html", null, true);
        echo "
";
        
        $__internal_c0bf4b5a42044a982911e0e62ccef9f24bb7689158fb6ad464c2ba452f39e132->leave($__internal_c0bf4b5a42044a982911e0e62ccef9f24bb7689158fb6ad464c2ba452f39e132_prof);

        
        $__internal_c503dfef4d422673834a95b21d5645965c40bf3e200ef552092178ee578476ee->leave($__internal_c503dfef4d422673834a95b21d5645965c40bf3e200ef552092178ee578476ee_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9bc5cf172cc808612790842c6a5fc1dbf24aa184c28a7aa486ab7528a5eff55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9bc5cf172cc808612790842c6a5fc1dbf24aa184c28a7aa486ab7528a5eff55->enter($__internal_a9bc5cf172cc808612790842c6a5fc1dbf24aa184c28a7aa486ab7528a5eff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00a2f3b70a3ec52ed90d2f2a51182cc71a0e47364f5141efcd36953d63e828a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a2f3b70a3ec52ed90d2f2a51182cc71a0e47364f5141efcd36953d63e828a0->enter($__internal_00a2f3b70a3ec52ed90d2f2a51182cc71a0e47364f5141efcd36953d63e828a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_00a2f3b70a3ec52ed90d2f2a51182cc71a0e47364f5141efcd36953d63e828a0->leave($__internal_00a2f3b70a3ec52ed90d2f2a51182cc71a0e47364f5141efcd36953d63e828a0_prof);

        
        $__internal_a9bc5cf172cc808612790842c6a5fc1dbf24aa184c28a7aa486ab7528a5eff55->leave($__internal_a9bc5cf172cc808612790842c6a5fc1dbf24aa184c28a7aa486ab7528a5eff55_prof);

    }

    public function getTemplateName()
    {
        return "default/oneBoisson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 14,  104 => 13,  92 => 10,  86 => 9,  82 => 8,  78 => 7,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    {{ oneBoisson.name}}<br \\>
    {{ oneBoisson.prix }}<br \\>
    <img src=\"{{ vich_uploader_asset(oneBoisson, 'imageFile') }}\" alt=\"{{ oneBoisson.image }}\" /><br \\><br \\>
    {{ oneBoisson.description }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/oneBoisson.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/oneBoisson.html.twig");
    }
}
