<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_38bde738494f93d7fb825fde3e76b025ee060b80dd80acfc835eaeaf1a3daec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3bcf8b6d2e8cabf9a56fa260f979da9d41cc708e6094950a6f7e39824fc2e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3bcf8b6d2e8cabf9a56fa260f979da9d41cc708e6094950a6f7e39824fc2e60->enter($__internal_a3bcf8b6d2e8cabf9a56fa260f979da9d41cc708e6094950a6f7e39824fc2e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_b3e377a833a8534e24799da84ee2118c7a514a218625e8e5c0783a1cc1046fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e377a833a8534e24799da84ee2118c7a514a218625e8e5c0783a1cc1046fc5->enter($__internal_b3e377a833a8534e24799da84ee2118c7a514a218625e8e5c0783a1cc1046fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3bcf8b6d2e8cabf9a56fa260f979da9d41cc708e6094950a6f7e39824fc2e60->leave($__internal_a3bcf8b6d2e8cabf9a56fa260f979da9d41cc708e6094950a6f7e39824fc2e60_prof);

        
        $__internal_b3e377a833a8534e24799da84ee2118c7a514a218625e8e5c0783a1cc1046fc5->leave($__internal_b3e377a833a8534e24799da84ee2118c7a514a218625e8e5c0783a1cc1046fc5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6559fbeffa995b25789deeebf8644448a6f04f322a87f810c7c8deec93ed2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6559fbeffa995b25789deeebf8644448a6f04f322a87f810c7c8deec93ed2d1->enter($__internal_d6559fbeffa995b25789deeebf8644448a6f04f322a87f810c7c8deec93ed2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_384060acd1ac52762c6f405d0849e2e4a866fe48b9f48d35ea2e749b92acca5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384060acd1ac52762c6f405d0849e2e4a866fe48b9f48d35ea2e749b92acca5f->enter($__internal_384060acd1ac52762c6f405d0849e2e4a866fe48b9f48d35ea2e749b92acca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_384060acd1ac52762c6f405d0849e2e4a866fe48b9f48d35ea2e749b92acca5f->leave($__internal_384060acd1ac52762c6f405d0849e2e4a866fe48b9f48d35ea2e749b92acca5f_prof);

        
        $__internal_d6559fbeffa995b25789deeebf8644448a6f04f322a87f810c7c8deec93ed2d1->leave($__internal_d6559fbeffa995b25789deeebf8644448a6f04f322a87f810c7c8deec93ed2d1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
