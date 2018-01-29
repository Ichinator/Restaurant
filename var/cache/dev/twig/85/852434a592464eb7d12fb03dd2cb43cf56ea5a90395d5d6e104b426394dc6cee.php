<?php

/* :default:index.html.twig */
class __TwigTemplate_eb393832a25084efde0a24c75d43536496e428abd3606ea7a9bf8c39eb288100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_90ceca03782f0a21b6d97097050c3ef7119b696b3a0c2fef436724a5dc10e4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ceca03782f0a21b6d97097050c3ef7119b696b3a0c2fef436724a5dc10e4bb->enter($__internal_90ceca03782f0a21b6d97097050c3ef7119b696b3a0c2fef436724a5dc10e4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_5a84c761f5d408b434a9422381b4bb7428b8d1b762ad8923c8510908d1f755e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a84c761f5d408b434a9422381b4bb7428b8d1b762ad8923c8510908d1f755e2->enter($__internal_5a84c761f5d408b434a9422381b4bb7428b8d1b762ad8923c8510908d1f755e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90ceca03782f0a21b6d97097050c3ef7119b696b3a0c2fef436724a5dc10e4bb->leave($__internal_90ceca03782f0a21b6d97097050c3ef7119b696b3a0c2fef436724a5dc10e4bb_prof);

        
        $__internal_5a84c761f5d408b434a9422381b4bb7428b8d1b762ad8923c8510908d1f755e2->leave($__internal_5a84c761f5d408b434a9422381b4bb7428b8d1b762ad8923c8510908d1f755e2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7e55008eb3297cefce3deff837ad2c332d2db932496f0074f4667caa83c52e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e55008eb3297cefce3deff837ad2c332d2db932496f0074f4667caa83c52e7->enter($__internal_e7e55008eb3297cefce3deff837ad2c332d2db932496f0074f4667caa83c52e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e1295ead6d067e4398162cbcc278dc6308d446c1645a9a5eb88954e2e9182348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1295ead6d067e4398162cbcc278dc6308d446c1645a9a5eb88954e2e9182348->enter($__internal_e1295ead6d067e4398162cbcc278dc6308d446c1645a9a5eb88954e2e9182348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e1295ead6d067e4398162cbcc278dc6308d446c1645a9a5eb88954e2e9182348->leave($__internal_e1295ead6d067e4398162cbcc278dc6308d446c1645a9a5eb88954e2e9182348_prof);

        
        $__internal_e7e55008eb3297cefce3deff837ad2c332d2db932496f0074f4667caa83c52e7->leave($__internal_e7e55008eb3297cefce3deff837ad2c332d2db932496f0074f4667caa83c52e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_331a8cc1a44c77d439875a032f56b9cb5397063d755f216ff86286ef7f80aa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331a8cc1a44c77d439875a032f56b9cb5397063d755f216ff86286ef7f80aa59->enter($__internal_331a8cc1a44c77d439875a032f56b9cb5397063d755f216ff86286ef7f80aa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71431e388b05081a1f9cb8c200614b988463c0b9b0edc59dfaa2680574785f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71431e388b05081a1f9cb8c200614b988463c0b9b0edc59dfaa2680574785f18->enter($__internal_71431e388b05081a1f9cb8c200614b988463c0b9b0edc59dfaa2680574785f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_71431e388b05081a1f9cb8c200614b988463c0b9b0edc59dfaa2680574785f18->leave($__internal_71431e388b05081a1f9cb8c200614b988463c0b9b0edc59dfaa2680574785f18_prof);

        
        $__internal_331a8cc1a44c77d439875a032f56b9cb5397063d755f216ff86286ef7f80aa59->leave($__internal_331a8cc1a44c77d439875a032f56b9cb5397063d755f216ff86286ef7f80aa59_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1e6293435d4ed4c18f2a50491cb62ffa6db1f7e3ba43478b43cef5b34db1d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e6293435d4ed4c18f2a50491cb62ffa6db1f7e3ba43478b43cef5b34db1d00->enter($__internal_a1e6293435d4ed4c18f2a50491cb62ffa6db1f7e3ba43478b43cef5b34db1d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ca9ff12a1e2779fafd554950eed48f1819a845a87fe2a326b88cf33f26cab8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca9ff12a1e2779fafd554950eed48f1819a845a87fe2a326b88cf33f26cab8a->enter($__internal_8ca9ff12a1e2779fafd554950eed48f1819a845a87fe2a326b88cf33f26cab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_8ca9ff12a1e2779fafd554950eed48f1819a845a87fe2a326b88cf33f26cab8a->leave($__internal_8ca9ff12a1e2779fafd554950eed48f1819a845a87fe2a326b88cf33f26cab8a_prof);

        
        $__internal_a1e6293435d4ed4c18f2a50491cb62ffa6db1f7e3ba43478b43cef5b34db1d00->leave($__internal_a1e6293435d4ed4c18f2a50491cb62ffa6db1f7e3ba43478b43cef5b34db1d00_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 10,  86 => 9,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/index.html.twig");
    }
}
