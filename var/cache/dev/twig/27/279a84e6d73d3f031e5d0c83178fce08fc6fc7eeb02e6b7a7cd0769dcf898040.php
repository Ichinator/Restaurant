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
        $__internal_a5d20d7fc335ec59845d07e142e9114c49725dbf89e999af5864618db7ba5ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d20d7fc335ec59845d07e142e9114c49725dbf89e999af5864618db7ba5ca0->enter($__internal_a5d20d7fc335ec59845d07e142e9114c49725dbf89e999af5864618db7ba5ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:entrees.html.twig"));

        $__internal_38cdef3746651b952b9390f636d6205bc109a46aa2687da02815d2e11ad52f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cdef3746651b952b9390f636d6205bc109a46aa2687da02815d2e11ad52f52->enter($__internal_38cdef3746651b952b9390f636d6205bc109a46aa2687da02815d2e11ad52f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:entrees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5d20d7fc335ec59845d07e142e9114c49725dbf89e999af5864618db7ba5ca0->leave($__internal_a5d20d7fc335ec59845d07e142e9114c49725dbf89e999af5864618db7ba5ca0_prof);

        
        $__internal_38cdef3746651b952b9390f636d6205bc109a46aa2687da02815d2e11ad52f52->leave($__internal_38cdef3746651b952b9390f636d6205bc109a46aa2687da02815d2e11ad52f52_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84d364d82e63e63ed79d11a9f61efab1431d54a8c4700b3a36847cfad42063ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d364d82e63e63ed79d11a9f61efab1431d54a8c4700b3a36847cfad42063ba->enter($__internal_84d364d82e63e63ed79d11a9f61efab1431d54a8c4700b3a36847cfad42063ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6c84fb50915d0e7b78fe5fbba89839c4775d3e752cf2f4cb16b10b62f101bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c84fb50915d0e7b78fe5fbba89839c4775d3e752cf2f4cb16b10b62f101bcd->enter($__internal_f6c84fb50915d0e7b78fe5fbba89839c4775d3e752cf2f4cb16b10b62f101bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f6c84fb50915d0e7b78fe5fbba89839c4775d3e752cf2f4cb16b10b62f101bcd->leave($__internal_f6c84fb50915d0e7b78fe5fbba89839c4775d3e752cf2f4cb16b10b62f101bcd_prof);

        
        $__internal_84d364d82e63e63ed79d11a9f61efab1431d54a8c4700b3a36847cfad42063ba->leave($__internal_84d364d82e63e63ed79d11a9f61efab1431d54a8c4700b3a36847cfad42063ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4902e05c72e8ffcedfacd2de6e25509fef7a949995d5c9107ebaa64e226043a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4902e05c72e8ffcedfacd2de6e25509fef7a949995d5c9107ebaa64e226043a6->enter($__internal_4902e05c72e8ffcedfacd2de6e25509fef7a949995d5c9107ebaa64e226043a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ee77d605412e5f4b4f802eb2c837b1c840469907a3bb19c669f02db473a6b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee77d605412e5f4b4f802eb2c837b1c840469907a3bb19c669f02db473a6b62->enter($__internal_6ee77d605412e5f4b4f802eb2c837b1c840469907a3bb19c669f02db473a6b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrees"], "name", array()), "html", null, true);
            echo "<br \\>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrees"], "prix", array()), "html", null, true);
            echo "<br \\>
        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["entrees"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrees"], "image", array()), "html", null, true);
            echo "\" /><br \\><br \\>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6ee77d605412e5f4b4f802eb2c837b1c840469907a3bb19c669f02db473a6b62->leave($__internal_6ee77d605412e5f4b4f802eb2c837b1c840469907a3bb19c669f02db473a6b62_prof);

        
        $__internal_4902e05c72e8ffcedfacd2de6e25509fef7a949995d5c9107ebaa64e226043a6->leave($__internal_4902e05c72e8ffcedfacd2de6e25509fef7a949995d5c9107ebaa64e226043a6_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5efc4faf93694adbb9a83f4e7ed4366d4549493ce4bff112200bd03a6a1ecff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5efc4faf93694adbb9a83f4e7ed4366d4549493ce4bff112200bd03a6a1ecff->enter($__internal_a5efc4faf93694adbb9a83f4e7ed4366d4549493ce4bff112200bd03a6a1ecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d42bd50110534359749101c31c3071454ec5847b7a25649519c7c4395996045d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42bd50110534359749101c31c3071454ec5847b7a25649519c7c4395996045d->enter($__internal_d42bd50110534359749101c31c3071454ec5847b7a25649519c7c4395996045d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d42bd50110534359749101c31c3071454ec5847b7a25649519c7c4395996045d->leave($__internal_d42bd50110534359749101c31c3071454ec5847b7a25649519c7c4395996045d_prof);

        
        $__internal_a5efc4faf93694adbb9a83f4e7ed4366d4549493ce4bff112200bd03a6a1ecff->leave($__internal_a5efc4faf93694adbb9a83f4e7ed4366d4549493ce4bff112200bd03a6a1ecff_prof);

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

    {% for entrees in entrees %}
        {{ entrees.name}}<br \\>
        {{ entrees.prix }}<br \\>
        <img src=\"{{ vich_uploader_asset(entrees, 'imageFile') }}\" alt=\"{{ entrees.image }}\" /><br \\><br \\>
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:entrees.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/entrees.html.twig");
    }
}
