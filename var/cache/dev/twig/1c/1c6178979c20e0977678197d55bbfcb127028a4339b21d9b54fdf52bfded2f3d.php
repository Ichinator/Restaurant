<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f86a965c69b8c60efb2af9fd63b68a25c3e8a571ddec03ace51c90658a6f96fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_df15c69ceda8f10fa7dedfeb2bfa48545372ec6188cf01ad408d648b8d05a07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df15c69ceda8f10fa7dedfeb2bfa48545372ec6188cf01ad408d648b8d05a07a->enter($__internal_df15c69ceda8f10fa7dedfeb2bfa48545372ec6188cf01ad408d648b8d05a07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_b29452fde4385ee8781f484ad3ca728b1dd0adf6cb38229b47c0f71967736602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29452fde4385ee8781f484ad3ca728b1dd0adf6cb38229b47c0f71967736602->enter($__internal_b29452fde4385ee8781f484ad3ca728b1dd0adf6cb38229b47c0f71967736602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df15c69ceda8f10fa7dedfeb2bfa48545372ec6188cf01ad408d648b8d05a07a->leave($__internal_df15c69ceda8f10fa7dedfeb2bfa48545372ec6188cf01ad408d648b8d05a07a_prof);

        
        $__internal_b29452fde4385ee8781f484ad3ca728b1dd0adf6cb38229b47c0f71967736602->leave($__internal_b29452fde4385ee8781f484ad3ca728b1dd0adf6cb38229b47c0f71967736602_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_530c77bce5b6083922b8d89599fb49412c7a2cff27778d4ddd101cfeb49e269e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530c77bce5b6083922b8d89599fb49412c7a2cff27778d4ddd101cfeb49e269e->enter($__internal_530c77bce5b6083922b8d89599fb49412c7a2cff27778d4ddd101cfeb49e269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_72fe238f50b06b7efb302278773d31bd0054f04f822151642d69754d4393a763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fe238f50b06b7efb302278773d31bd0054f04f822151642d69754d4393a763->enter($__internal_72fe238f50b06b7efb302278773d31bd0054f04f822151642d69754d4393a763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_72fe238f50b06b7efb302278773d31bd0054f04f822151642d69754d4393a763->leave($__internal_72fe238f50b06b7efb302278773d31bd0054f04f822151642d69754d4393a763_prof);

        
        $__internal_530c77bce5b6083922b8d89599fb49412c7a2cff27778d4ddd101cfeb49e269e->leave($__internal_530c77bce5b6083922b8d89599fb49412c7a2cff27778d4ddd101cfeb49e269e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
