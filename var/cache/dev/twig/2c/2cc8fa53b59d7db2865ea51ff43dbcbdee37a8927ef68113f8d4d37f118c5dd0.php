<?php

/* :default:oneDessert.html.twig */
class __TwigTemplate_2267eb1e9a0d32a13e9a0497cb38c09205233529a15f0c49cca8d439403bb7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:oneDessert.html.twig", 1);
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
        $__internal_06db073bf5542e9b6b10718ceba671ab3a7a2b266afa498ef410b66be8269d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06db073bf5542e9b6b10718ceba671ab3a7a2b266afa498ef410b66be8269d8d->enter($__internal_06db073bf5542e9b6b10718ceba671ab3a7a2b266afa498ef410b66be8269d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:oneDessert.html.twig"));

        $__internal_300f91282416edf83ebce4ea2e70b59765bc0411ad78fbe8db7af5cdafd73c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300f91282416edf83ebce4ea2e70b59765bc0411ad78fbe8db7af5cdafd73c77->enter($__internal_300f91282416edf83ebce4ea2e70b59765bc0411ad78fbe8db7af5cdafd73c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:oneDessert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06db073bf5542e9b6b10718ceba671ab3a7a2b266afa498ef410b66be8269d8d->leave($__internal_06db073bf5542e9b6b10718ceba671ab3a7a2b266afa498ef410b66be8269d8d_prof);

        
        $__internal_300f91282416edf83ebce4ea2e70b59765bc0411ad78fbe8db7af5cdafd73c77->leave($__internal_300f91282416edf83ebce4ea2e70b59765bc0411ad78fbe8db7af5cdafd73c77_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23f0294b5e4972961eb805a6ccfc6d3f94776b77eceed67057020f7370ef1478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f0294b5e4972961eb805a6ccfc6d3f94776b77eceed67057020f7370ef1478->enter($__internal_23f0294b5e4972961eb805a6ccfc6d3f94776b77eceed67057020f7370ef1478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73ec1b12021b97f5411ed9f827a87e8329fc5efc23036545a106d56d1e6eef51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ec1b12021b97f5411ed9f827a87e8329fc5efc23036545a106d56d1e6eef51->enter($__internal_73ec1b12021b97f5411ed9f827a87e8329fc5efc23036545a106d56d1e6eef51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_73ec1b12021b97f5411ed9f827a87e8329fc5efc23036545a106d56d1e6eef51->leave($__internal_73ec1b12021b97f5411ed9f827a87e8329fc5efc23036545a106d56d1e6eef51_prof);

        
        $__internal_23f0294b5e4972961eb805a6ccfc6d3f94776b77eceed67057020f7370ef1478->leave($__internal_23f0294b5e4972961eb805a6ccfc6d3f94776b77eceed67057020f7370ef1478_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15329e9ff12e2320e9c3f8c9e8103c905ff955ab6ae94c480526e4ad5b898331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15329e9ff12e2320e9c3f8c9e8103c905ff955ab6ae94c480526e4ad5b898331->enter($__internal_15329e9ff12e2320e9c3f8c9e8103c905ff955ab6ae94c480526e4ad5b898331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_728219e5bfff4b459d8b28bdda6c2127ab1578bd231daace3423a8411c138e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728219e5bfff4b459d8b28bdda6c2127ab1578bd231daace3423a8411c138e45->enter($__internal_728219e5bfff4b459d8b28bdda6c2127ab1578bd231daace3423a8411c138e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneDessert"] ?? $this->getContext($context, "oneDessert")), "name", array()), "html", null, true);
        echo "<br \\>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneDessert"] ?? $this->getContext($context, "oneDessert")), "prix", array()), "html", null, true);
        echo "<br \\>
    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["oneDessert"] ?? $this->getContext($context, "oneDessert")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneDessert"] ?? $this->getContext($context, "oneDessert")), "image", array()), "html", null, true);
        echo "\" /><br \\><br \\>
";
        
        $__internal_728219e5bfff4b459d8b28bdda6c2127ab1578bd231daace3423a8411c138e45->leave($__internal_728219e5bfff4b459d8b28bdda6c2127ab1578bd231daace3423a8411c138e45_prof);

        
        $__internal_15329e9ff12e2320e9c3f8c9e8103c905ff955ab6ae94c480526e4ad5b898331->leave($__internal_15329e9ff12e2320e9c3f8c9e8103c905ff955ab6ae94c480526e4ad5b898331_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e043832e26508a9723ea976642971fe335069c340c8f7358d1771183cb217ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e043832e26508a9723ea976642971fe335069c340c8f7358d1771183cb217ec->enter($__internal_2e043832e26508a9723ea976642971fe335069c340c8f7358d1771183cb217ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a230f61ae6d7220e8574e5f366e081379444b03324e39b968416376342ab3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a230f61ae6d7220e8574e5f366e081379444b03324e39b968416376342ab3c7->enter($__internal_3a230f61ae6d7220e8574e5f366e081379444b03324e39b968416376342ab3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_3a230f61ae6d7220e8574e5f366e081379444b03324e39b968416376342ab3c7->leave($__internal_3a230f61ae6d7220e8574e5f366e081379444b03324e39b968416376342ab3c7_prof);

        
        $__internal_2e043832e26508a9723ea976642971fe335069c340c8f7358d1771183cb217ec->leave($__internal_2e043832e26508a9723ea976642971fe335069c340c8f7358d1771183cb217ec_prof);

    }

    public function getTemplateName()
    {
        return ":default:oneDessert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 13,  100 => 12,  86 => 9,  82 => 8,  78 => 7,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    {{ oneDessert.name}}<br \\>
    {{ oneDessert.prix }}<br \\>
    <img src=\"{{ vich_uploader_asset(oneDessert, 'imageFile') }}\" alt=\"{{ oneDessert.image }}\" /><br \\><br \\>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:oneDessert.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/oneDessert.html.twig");
    }
}
