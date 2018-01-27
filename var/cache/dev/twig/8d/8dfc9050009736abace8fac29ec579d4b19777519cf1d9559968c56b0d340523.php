<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bde38e4fb9fe7eabbfea1e107aff0cfecba5b1a1adbb4f8eaccd937c99e9be1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_1c480cfcb238e56aa06dc9fd888dd1e1e4358292cef5eae5a8ea447a1ea7d94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c480cfcb238e56aa06dc9fd888dd1e1e4358292cef5eae5a8ea447a1ea7d94a->enter($__internal_1c480cfcb238e56aa06dc9fd888dd1e1e4358292cef5eae5a8ea447a1ea7d94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_353a2c1b8ee340e6819c1e1a0309e5c0c1e7bbd9995c8cf5255a77c339667856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353a2c1b8ee340e6819c1e1a0309e5c0c1e7bbd9995c8cf5255a77c339667856->enter($__internal_353a2c1b8ee340e6819c1e1a0309e5c0c1e7bbd9995c8cf5255a77c339667856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c480cfcb238e56aa06dc9fd888dd1e1e4358292cef5eae5a8ea447a1ea7d94a->leave($__internal_1c480cfcb238e56aa06dc9fd888dd1e1e4358292cef5eae5a8ea447a1ea7d94a_prof);

        
        $__internal_353a2c1b8ee340e6819c1e1a0309e5c0c1e7bbd9995c8cf5255a77c339667856->leave($__internal_353a2c1b8ee340e6819c1e1a0309e5c0c1e7bbd9995c8cf5255a77c339667856_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f5abfd0bc8e86fe10e41c466b717b1c045cfb5dfc5997042e0061113361d2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5abfd0bc8e86fe10e41c466b717b1c045cfb5dfc5997042e0061113361d2c3->enter($__internal_5f5abfd0bc8e86fe10e41c466b717b1c045cfb5dfc5997042e0061113361d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d9442636dfa2a0c3f54239de075b8b2cfdeec5668a3a7b31c9ebdff43c1510d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9442636dfa2a0c3f54239de075b8b2cfdeec5668a3a7b31c9ebdff43c1510d->enter($__internal_7d9442636dfa2a0c3f54239de075b8b2cfdeec5668a3a7b31c9ebdff43c1510d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7d9442636dfa2a0c3f54239de075b8b2cfdeec5668a3a7b31c9ebdff43c1510d->leave($__internal_7d9442636dfa2a0c3f54239de075b8b2cfdeec5668a3a7b31c9ebdff43c1510d_prof);

        
        $__internal_5f5abfd0bc8e86fe10e41c466b717b1c045cfb5dfc5997042e0061113361d2c3->leave($__internal_5f5abfd0bc8e86fe10e41c466b717b1c045cfb5dfc5997042e0061113361d2c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
