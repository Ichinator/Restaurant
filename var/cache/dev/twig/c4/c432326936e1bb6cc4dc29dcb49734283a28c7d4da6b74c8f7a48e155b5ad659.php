<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a6f90727d783422f0d2b6f77e272605c7d33ad35df2e8a89fa0fdff5b8497651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2154d5e088e94405908c5b7b162113c9e14744c9e124edb1cc15f207895985c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2154d5e088e94405908c5b7b162113c9e14744c9e124edb1cc15f207895985c3->enter($__internal_2154d5e088e94405908c5b7b162113c9e14744c9e124edb1cc15f207895985c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e7a7d3214100bfc209111efcb5f9a2f0dec2d37876aca913e7e0981c4139e2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a7d3214100bfc209111efcb5f9a2f0dec2d37876aca913e7e0981c4139e2ae->enter($__internal_e7a7d3214100bfc209111efcb5f9a2f0dec2d37876aca913e7e0981c4139e2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2154d5e088e94405908c5b7b162113c9e14744c9e124edb1cc15f207895985c3->leave($__internal_2154d5e088e94405908c5b7b162113c9e14744c9e124edb1cc15f207895985c3_prof);

        
        $__internal_e7a7d3214100bfc209111efcb5f9a2f0dec2d37876aca913e7e0981c4139e2ae->leave($__internal_e7a7d3214100bfc209111efcb5f9a2f0dec2d37876aca913e7e0981c4139e2ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf4b942528e6cd1c12667cae2eae6554c35759f5f742c74ca4bb9d4bea97a83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4b942528e6cd1c12667cae2eae6554c35759f5f742c74ca4bb9d4bea97a83d->enter($__internal_bf4b942528e6cd1c12667cae2eae6554c35759f5f742c74ca4bb9d4bea97a83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_708284aa7b28e87e01a0217ce43940e376f702be97bf0fb964832462c4acb4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708284aa7b28e87e01a0217ce43940e376f702be97bf0fb964832462c4acb4b6->enter($__internal_708284aa7b28e87e01a0217ce43940e376f702be97bf0fb964832462c4acb4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_708284aa7b28e87e01a0217ce43940e376f702be97bf0fb964832462c4acb4b6->leave($__internal_708284aa7b28e87e01a0217ce43940e376f702be97bf0fb964832462c4acb4b6_prof);

        
        $__internal_bf4b942528e6cd1c12667cae2eae6554c35759f5f742c74ca4bb9d4bea97a83d->leave($__internal_bf4b942528e6cd1c12667cae2eae6554c35759f5f742c74ca4bb9d4bea97a83d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
