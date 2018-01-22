<?php

/* :default:desserts.html.twig */
class __TwigTemplate_cb759733b811553b9147aab983795e14d815e86ef8f9643fb0423960ecf81200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:desserts.html.twig", 1);
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
        $__internal_da4dde78b6dba3347abfdeaaf8c2e00d8da741564a02e592b6e7ab488adfad00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4dde78b6dba3347abfdeaaf8c2e00d8da741564a02e592b6e7ab488adfad00->enter($__internal_da4dde78b6dba3347abfdeaaf8c2e00d8da741564a02e592b6e7ab488adfad00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:desserts.html.twig"));

        $__internal_b4ca2c94bffd77f5f6ad21bdbb6842e1ec87b958f5f297677157bb45448c2a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ca2c94bffd77f5f6ad21bdbb6842e1ec87b958f5f297677157bb45448c2a33->enter($__internal_b4ca2c94bffd77f5f6ad21bdbb6842e1ec87b958f5f297677157bb45448c2a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:desserts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4dde78b6dba3347abfdeaaf8c2e00d8da741564a02e592b6e7ab488adfad00->leave($__internal_da4dde78b6dba3347abfdeaaf8c2e00d8da741564a02e592b6e7ab488adfad00_prof);

        
        $__internal_b4ca2c94bffd77f5f6ad21bdbb6842e1ec87b958f5f297677157bb45448c2a33->leave($__internal_b4ca2c94bffd77f5f6ad21bdbb6842e1ec87b958f5f297677157bb45448c2a33_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_589cc8e0fcd873e9e8b14d8e7930ad4196b218deeffebb2cd3954ef63e20eabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589cc8e0fcd873e9e8b14d8e7930ad4196b218deeffebb2cd3954ef63e20eabf->enter($__internal_589cc8e0fcd873e9e8b14d8e7930ad4196b218deeffebb2cd3954ef63e20eabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8e24b52574f4a90b44d8dde8b303c6baac4cc54bbf370f9c6b76de17ccba13bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e24b52574f4a90b44d8dde8b303c6baac4cc54bbf370f9c6b76de17ccba13bd->enter($__internal_8e24b52574f4a90b44d8dde8b303c6baac4cc54bbf370f9c6b76de17ccba13bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8e24b52574f4a90b44d8dde8b303c6baac4cc54bbf370f9c6b76de17ccba13bd->leave($__internal_8e24b52574f4a90b44d8dde8b303c6baac4cc54bbf370f9c6b76de17ccba13bd_prof);

        
        $__internal_589cc8e0fcd873e9e8b14d8e7930ad4196b218deeffebb2cd3954ef63e20eabf->leave($__internal_589cc8e0fcd873e9e8b14d8e7930ad4196b218deeffebb2cd3954ef63e20eabf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a97f63fb583ff617bb0c91d8bc39fd52da4a99efc5c9528844589752a52f985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a97f63fb583ff617bb0c91d8bc39fd52da4a99efc5c9528844589752a52f985->enter($__internal_7a97f63fb583ff617bb0c91d8bc39fd52da4a99efc5c9528844589752a52f985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_623718f0b61410dc3b48d96e475c0d3227e76b0f1077c6b670374a80d5c2b261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623718f0b61410dc3b48d96e475c0d3227e76b0f1077c6b670374a80d5c2b261->enter($__internal_623718f0b61410dc3b48d96e475c0d3227e76b0f1077c6b670374a80d5c2b261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["desserts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["desserts"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "name", array()), "html", null, true);
            echo "<br \\>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "prix", array()), "html", null, true);
            echo "<br \\>
        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["desserts"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "image", array()), "html", null, true);
            echo "\" /><br \\><br \\>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['desserts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_623718f0b61410dc3b48d96e475c0d3227e76b0f1077c6b670374a80d5c2b261->leave($__internal_623718f0b61410dc3b48d96e475c0d3227e76b0f1077c6b670374a80d5c2b261_prof);

        
        $__internal_7a97f63fb583ff617bb0c91d8bc39fd52da4a99efc5c9528844589752a52f985->leave($__internal_7a97f63fb583ff617bb0c91d8bc39fd52da4a99efc5c9528844589752a52f985_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21eddb0cd1266cbbf96eabccad18247e87d394c9430deb8c583e4ee157a6cc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21eddb0cd1266cbbf96eabccad18247e87d394c9430deb8c583e4ee157a6cc86->enter($__internal_21eddb0cd1266cbbf96eabccad18247e87d394c9430deb8c583e4ee157a6cc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cdd5c9d4b8c9f9934a7a9427e1de9611457b247764a0296c9db90edae511fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdd5c9d4b8c9f9934a7a9427e1de9611457b247764a0296c9db90edae511fcd->enter($__internal_4cdd5c9d4b8c9f9934a7a9427e1de9611457b247764a0296c9db90edae511fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_4cdd5c9d4b8c9f9934a7a9427e1de9611457b247764a0296c9db90edae511fcd->leave($__internal_4cdd5c9d4b8c9f9934a7a9427e1de9611457b247764a0296c9db90edae511fcd_prof);

        
        $__internal_21eddb0cd1266cbbf96eabccad18247e87d394c9430deb8c583e4ee157a6cc86->leave($__internal_21eddb0cd1266cbbf96eabccad18247e87d394c9430deb8c583e4ee157a6cc86_prof);

    }

    public function getTemplateName()
    {
        return ":default:desserts.html.twig";
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

    {% for desserts in desserts %}
        {{ desserts.name}}<br \\>
        {{ desserts.prix }}<br \\>
        <img src=\"{{ vich_uploader_asset(desserts, 'imageFile') }}\" alt=\"{{ desserts.image }}\" /><br \\><br \\>
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:desserts.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/desserts.html.twig");
    }
}
