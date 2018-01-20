<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a4319cf5d9c473f91c9c04e47b7fd024af5e65c3727f4bfc69a7942458175299 extends Twig_Template
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
        $__internal_b5d4075140fdabd1fd6b68d00c4f00badcc32c4a5a0f6d19681548d88d18bc5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d4075140fdabd1fd6b68d00c4f00badcc32c4a5a0f6d19681548d88d18bc5e->enter($__internal_b5d4075140fdabd1fd6b68d00c4f00badcc32c4a5a0f6d19681548d88d18bc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2eba9fc214e4581e478f8aaf794315ed62fc1804be245dadfc17585e07ccfcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eba9fc214e4581e478f8aaf794315ed62fc1804be245dadfc17585e07ccfcb4->enter($__internal_2eba9fc214e4581e478f8aaf794315ed62fc1804be245dadfc17585e07ccfcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d4075140fdabd1fd6b68d00c4f00badcc32c4a5a0f6d19681548d88d18bc5e->leave($__internal_b5d4075140fdabd1fd6b68d00c4f00badcc32c4a5a0f6d19681548d88d18bc5e_prof);

        
        $__internal_2eba9fc214e4581e478f8aaf794315ed62fc1804be245dadfc17585e07ccfcb4->leave($__internal_2eba9fc214e4581e478f8aaf794315ed62fc1804be245dadfc17585e07ccfcb4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_953b94052df1c54b08f9e78532a575d472b6461897a7e8fcbe16b96eb708359e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953b94052df1c54b08f9e78532a575d472b6461897a7e8fcbe16b96eb708359e->enter($__internal_953b94052df1c54b08f9e78532a575d472b6461897a7e8fcbe16b96eb708359e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9e5914100d1652f802df074d2b3b78e4832d1aee706affa3f4717402a66041f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5914100d1652f802df074d2b3b78e4832d1aee706affa3f4717402a66041f8->enter($__internal_9e5914100d1652f802df074d2b3b78e4832d1aee706affa3f4717402a66041f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9e5914100d1652f802df074d2b3b78e4832d1aee706affa3f4717402a66041f8->leave($__internal_9e5914100d1652f802df074d2b3b78e4832d1aee706affa3f4717402a66041f8_prof);

        
        $__internal_953b94052df1c54b08f9e78532a575d472b6461897a7e8fcbe16b96eb708359e->leave($__internal_953b94052df1c54b08f9e78532a575d472b6461897a7e8fcbe16b96eb708359e_prof);

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
