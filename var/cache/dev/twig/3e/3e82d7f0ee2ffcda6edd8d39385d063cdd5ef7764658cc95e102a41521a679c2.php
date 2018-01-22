<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_db892c3e5008796b3ad6ada3b4cfd23d6a66e3fd1af14935b5cd516d406165a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_231f41991dcb80e79cb4e0be5ec942abf1e9a2a7496d2fd907e9fc8d6a119a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231f41991dcb80e79cb4e0be5ec942abf1e9a2a7496d2fd907e9fc8d6a119a79->enter($__internal_231f41991dcb80e79cb4e0be5ec942abf1e9a2a7496d2fd907e9fc8d6a119a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_19dcb37757c934a5bc4b339fddbedd51dd4f43c190df6fa3e8c76d94cc24e6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19dcb37757c934a5bc4b339fddbedd51dd4f43c190df6fa3e8c76d94cc24e6c9->enter($__internal_19dcb37757c934a5bc4b339fddbedd51dd4f43c190df6fa3e8c76d94cc24e6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231f41991dcb80e79cb4e0be5ec942abf1e9a2a7496d2fd907e9fc8d6a119a79->leave($__internal_231f41991dcb80e79cb4e0be5ec942abf1e9a2a7496d2fd907e9fc8d6a119a79_prof);

        
        $__internal_19dcb37757c934a5bc4b339fddbedd51dd4f43c190df6fa3e8c76d94cc24e6c9->leave($__internal_19dcb37757c934a5bc4b339fddbedd51dd4f43c190df6fa3e8c76d94cc24e6c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7450229e287d640bce6a1d244c15632c13b1379e7f6e284d57e9dee40afb215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7450229e287d640bce6a1d244c15632c13b1379e7f6e284d57e9dee40afb215->enter($__internal_a7450229e287d640bce6a1d244c15632c13b1379e7f6e284d57e9dee40afb215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_afaa4c0034ea4276691430dcd9c9c5794f38d7cee37542b88b62f8a48fccf5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afaa4c0034ea4276691430dcd9c9c5794f38d7cee37542b88b62f8a48fccf5b7->enter($__internal_afaa4c0034ea4276691430dcd9c9c5794f38d7cee37542b88b62f8a48fccf5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_afaa4c0034ea4276691430dcd9c9c5794f38d7cee37542b88b62f8a48fccf5b7->leave($__internal_afaa4c0034ea4276691430dcd9c9c5794f38d7cee37542b88b62f8a48fccf5b7_prof);

        
        $__internal_a7450229e287d640bce6a1d244c15632c13b1379e7f6e284d57e9dee40afb215->leave($__internal_a7450229e287d640bce6a1d244c15632c13b1379e7f6e284d57e9dee40afb215_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
