<?php

/* default/boissons.html.twig */
class __TwigTemplate_37b8459cad94a242feb5b554784624c8627ad2d9e0b194fc8fa2efce65183cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/boissons.html.twig", 1);
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
        $__internal_c4e39c17bcdbd0ef99ae6c4568541ce5e33aab1725712f4508a001e2ed890ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e39c17bcdbd0ef99ae6c4568541ce5e33aab1725712f4508a001e2ed890ff0->enter($__internal_c4e39c17bcdbd0ef99ae6c4568541ce5e33aab1725712f4508a001e2ed890ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/boissons.html.twig"));

        $__internal_5c2275f6c61981ad9b54aad1eea6d3f76adbb7d0e961a5878be57f0917fd89a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2275f6c61981ad9b54aad1eea6d3f76adbb7d0e961a5878be57f0917fd89a2->enter($__internal_5c2275f6c61981ad9b54aad1eea6d3f76adbb7d0e961a5878be57f0917fd89a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/boissons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e39c17bcdbd0ef99ae6c4568541ce5e33aab1725712f4508a001e2ed890ff0->leave($__internal_c4e39c17bcdbd0ef99ae6c4568541ce5e33aab1725712f4508a001e2ed890ff0_prof);

        
        $__internal_5c2275f6c61981ad9b54aad1eea6d3f76adbb7d0e961a5878be57f0917fd89a2->leave($__internal_5c2275f6c61981ad9b54aad1eea6d3f76adbb7d0e961a5878be57f0917fd89a2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecf627ce18017f383585b647cfa7d2cc8f91a011c3c948c17f843d8e6e892fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf627ce18017f383585b647cfa7d2cc8f91a011c3c948c17f843d8e6e892fb5->enter($__internal_ecf627ce18017f383585b647cfa7d2cc8f91a011c3c948c17f843d8e6e892fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0ee7df50108e0c14f8fb82e384af7bd11f247783a7d1e9d5e5d521d59f011cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee7df50108e0c14f8fb82e384af7bd11f247783a7d1e9d5e5d521d59f011cb8->enter($__internal_0ee7df50108e0c14f8fb82e384af7bd11f247783a7d1e9d5e5d521d59f011cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0ee7df50108e0c14f8fb82e384af7bd11f247783a7d1e9d5e5d521d59f011cb8->leave($__internal_0ee7df50108e0c14f8fb82e384af7bd11f247783a7d1e9d5e5d521d59f011cb8_prof);

        
        $__internal_ecf627ce18017f383585b647cfa7d2cc8f91a011c3c948c17f843d8e6e892fb5->leave($__internal_ecf627ce18017f383585b647cfa7d2cc8f91a011c3c948c17f843d8e6e892fb5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d726bc98895100fe5611fb9de2632fe32eaabf9c4e0ba7b7302b7bbb98e0f130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d726bc98895100fe5611fb9de2632fe32eaabf9c4e0ba7b7302b7bbb98e0f130->enter($__internal_d726bc98895100fe5611fb9de2632fe32eaabf9c4e0ba7b7302b7bbb98e0f130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3549ed7a3c4b314fa385d1c882275f718567bb5d0ecfa77ad97fcd0e9becc0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3549ed7a3c4b314fa385d1c882275f718567bb5d0ecfa77ad97fcd0e9becc0ff->enter($__internal_3549ed7a3c4b314fa385d1c882275f718567bb5d0ecfa77ad97fcd0e9becc0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["boissons"]);
        foreach ($context['_seq'] as $context["_key"] => $context["boissons"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "name", array()), "html", null, true);
            echo "<br \\>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "prix", array()), "html", null, true);
            echo "<br \\>
        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["boissons"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "image", array()), "html", null, true);
            echo "\" /><br \\><br \\>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boissons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3549ed7a3c4b314fa385d1c882275f718567bb5d0ecfa77ad97fcd0e9becc0ff->leave($__internal_3549ed7a3c4b314fa385d1c882275f718567bb5d0ecfa77ad97fcd0e9becc0ff_prof);

        
        $__internal_d726bc98895100fe5611fb9de2632fe32eaabf9c4e0ba7b7302b7bbb98e0f130->leave($__internal_d726bc98895100fe5611fb9de2632fe32eaabf9c4e0ba7b7302b7bbb98e0f130_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00377d1646736093a8bf105181ecd5972b9b46f3e92435ab566cc7668a6a0894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00377d1646736093a8bf105181ecd5972b9b46f3e92435ab566cc7668a6a0894->enter($__internal_00377d1646736093a8bf105181ecd5972b9b46f3e92435ab566cc7668a6a0894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_943181b8b80c1b9955c508262908bb4cb363a51b5f92c842def0c7db4c650e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943181b8b80c1b9955c508262908bb4cb363a51b5f92c842def0c7db4c650e3b->enter($__internal_943181b8b80c1b9955c508262908bb4cb363a51b5f92c842def0c7db4c650e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_943181b8b80c1b9955c508262908bb4cb363a51b5f92c842def0c7db4c650e3b->leave($__internal_943181b8b80c1b9955c508262908bb4cb363a51b5f92c842def0c7db4c650e3b_prof);

        
        $__internal_00377d1646736093a8bf105181ecd5972b9b46f3e92435ab566cc7668a6a0894->leave($__internal_00377d1646736093a8bf105181ecd5972b9b46f3e92435ab566cc7668a6a0894_prof);

    }

    public function getTemplateName()
    {
        return "default/boissons.html.twig";
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

    {% for boissons in boissons %}
        {{ boissons.name}}<br \\>
        {{ boissons.prix }}<br \\>
        <img src=\"{{ vich_uploader_asset(boissons, 'imageFile') }}\" alt=\"{{ boissons.image }}\" /><br \\><br \\>
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/boissons.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/boissons.html.twig");
    }
}
