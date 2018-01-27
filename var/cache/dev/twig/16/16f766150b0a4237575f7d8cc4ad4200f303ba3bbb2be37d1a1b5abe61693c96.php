<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2fa804d1b463eaa81ff289ee3d10e7eac2033f12ec9c64c2cf4c16e878fc52b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_6e889b2012c3d2679a9d53888a51db449c7332fc6b69134b39a222e5c287233d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e889b2012c3d2679a9d53888a51db449c7332fc6b69134b39a222e5c287233d->enter($__internal_6e889b2012c3d2679a9d53888a51db449c7332fc6b69134b39a222e5c287233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_bdde38160ecf0b1a350b7e36cee4a6468f118a75bb24422388b9d07c32f130fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdde38160ecf0b1a350b7e36cee4a6468f118a75bb24422388b9d07c32f130fe->enter($__internal_bdde38160ecf0b1a350b7e36cee4a6468f118a75bb24422388b9d07c32f130fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e889b2012c3d2679a9d53888a51db449c7332fc6b69134b39a222e5c287233d->leave($__internal_6e889b2012c3d2679a9d53888a51db449c7332fc6b69134b39a222e5c287233d_prof);

        
        $__internal_bdde38160ecf0b1a350b7e36cee4a6468f118a75bb24422388b9d07c32f130fe->leave($__internal_bdde38160ecf0b1a350b7e36cee4a6468f118a75bb24422388b9d07c32f130fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0db7f51a5229c886f9b8d7e5e47c396e848e93c125712b2a9ab2bfd18981a139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db7f51a5229c886f9b8d7e5e47c396e848e93c125712b2a9ab2bfd18981a139->enter($__internal_0db7f51a5229c886f9b8d7e5e47c396e848e93c125712b2a9ab2bfd18981a139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6a9ef35cf59a0016042c9169e9c82a941854b80c23db4b6700cb0f13de03cc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9ef35cf59a0016042c9169e9c82a941854b80c23db4b6700cb0f13de03cc0b->enter($__internal_6a9ef35cf59a0016042c9169e9c82a941854b80c23db4b6700cb0f13de03cc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6a9ef35cf59a0016042c9169e9c82a941854b80c23db4b6700cb0f13de03cc0b->leave($__internal_6a9ef35cf59a0016042c9169e9c82a941854b80c23db4b6700cb0f13de03cc0b_prof);

        
        $__internal_0db7f51a5229c886f9b8d7e5e47c396e848e93c125712b2a9ab2bfd18981a139->leave($__internal_0db7f51a5229c886f9b8d7e5e47c396e848e93c125712b2a9ab2bfd18981a139_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
