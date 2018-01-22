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
        $__internal_91e7f78cad3c1f3d3ae58be63f2b7055c432e378c28eb6979ea0d1e726ecf1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e7f78cad3c1f3d3ae58be63f2b7055c432e378c28eb6979ea0d1e726ecf1ec->enter($__internal_91e7f78cad3c1f3d3ae58be63f2b7055c432e378c28eb6979ea0d1e726ecf1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_6bbdcbcd818ace2a852483abf8b043e68dc9b657827f9a0a1b9fc5ddbaab5c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbdcbcd818ace2a852483abf8b043e68dc9b657827f9a0a1b9fc5ddbaab5c97->enter($__internal_6bbdcbcd818ace2a852483abf8b043e68dc9b657827f9a0a1b9fc5ddbaab5c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_91e7f78cad3c1f3d3ae58be63f2b7055c432e378c28eb6979ea0d1e726ecf1ec->leave($__internal_91e7f78cad3c1f3d3ae58be63f2b7055c432e378c28eb6979ea0d1e726ecf1ec_prof);

        
        $__internal_6bbdcbcd818ace2a852483abf8b043e68dc9b657827f9a0a1b9fc5ddbaab5c97->leave($__internal_6bbdcbcd818ace2a852483abf8b043e68dc9b657827f9a0a1b9fc5ddbaab5c97_prof);

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
