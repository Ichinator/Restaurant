<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_a4319cf5d9c473f91c9c04e47b7fd024af5e65c3727f4bfc69a7942458175299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_5609e3e1b6ffcf787945357a6b5da6c0daac7c4e5f70254ec60a4fc7368f202b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5609e3e1b6ffcf787945357a6b5da6c0daac7c4e5f70254ec60a4fc7368f202b->enter($__internal_5609e3e1b6ffcf787945357a6b5da6c0daac7c4e5f70254ec60a4fc7368f202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ec8b30255f97f418343a03f4ea82edff31ef6dea92a7d0c3dd9637bf706d495b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8b30255f97f418343a03f4ea82edff31ef6dea92a7d0c3dd9637bf706d495b->enter($__internal_ec8b30255f97f418343a03f4ea82edff31ef6dea92a7d0c3dd9637bf706d495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5609e3e1b6ffcf787945357a6b5da6c0daac7c4e5f70254ec60a4fc7368f202b->leave($__internal_5609e3e1b6ffcf787945357a6b5da6c0daac7c4e5f70254ec60a4fc7368f202b_prof);

        
        $__internal_ec8b30255f97f418343a03f4ea82edff31ef6dea92a7d0c3dd9637bf706d495b->leave($__internal_ec8b30255f97f418343a03f4ea82edff31ef6dea92a7d0c3dd9637bf706d495b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cba5a1321fedccba6a3c398cd31f281291d4515f3b64b2c77001fa1f89d14999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba5a1321fedccba6a3c398cd31f281291d4515f3b64b2c77001fa1f89d14999->enter($__internal_cba5a1321fedccba6a3c398cd31f281291d4515f3b64b2c77001fa1f89d14999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_65168535f6f42ec5d71f677e9113696972cd96e13e2410295081815a66744563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65168535f6f42ec5d71f677e9113696972cd96e13e2410295081815a66744563->enter($__internal_65168535f6f42ec5d71f677e9113696972cd96e13e2410295081815a66744563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_65168535f6f42ec5d71f677e9113696972cd96e13e2410295081815a66744563->leave($__internal_65168535f6f42ec5d71f677e9113696972cd96e13e2410295081815a66744563_prof);

        
        $__internal_cba5a1321fedccba6a3c398cd31f281291d4515f3b64b2c77001fa1f89d14999->leave($__internal_cba5a1321fedccba6a3c398cd31f281291d4515f3b64b2c77001fa1f89d14999_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
