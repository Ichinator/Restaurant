<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_7b9c82b6c925fd0efc140e3cd92f64e532c502fff3e03bd4da04690d91b09848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bfc5f33565afc6b63e3cb581a0e8027392093b006f3a6eb09636beff2ff2c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bfc5f33565afc6b63e3cb581a0e8027392093b006f3a6eb09636beff2ff2c35->enter($__internal_7bfc5f33565afc6b63e3cb581a0e8027392093b006f3a6eb09636beff2ff2c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_32ef1cab70e3aa4fcd8b4f5a30b523e75bccead20c16023976e9bceac8474915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ef1cab70e3aa4fcd8b4f5a30b523e75bccead20c16023976e9bceac8474915->enter($__internal_32ef1cab70e3aa4fcd8b4f5a30b523e75bccead20c16023976e9bceac8474915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7bfc5f33565afc6b63e3cb581a0e8027392093b006f3a6eb09636beff2ff2c35->leave($__internal_7bfc5f33565afc6b63e3cb581a0e8027392093b006f3a6eb09636beff2ff2c35_prof);

        
        $__internal_32ef1cab70e3aa4fcd8b4f5a30b523e75bccead20c16023976e9bceac8474915->leave($__internal_32ef1cab70e3aa4fcd8b4f5a30b523e75bccead20c16023976e9bceac8474915_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
