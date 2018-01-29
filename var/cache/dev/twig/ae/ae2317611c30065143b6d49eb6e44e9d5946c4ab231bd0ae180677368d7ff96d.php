<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c8e9268ef3247d76f721a6320fcda0f254b149105268703b6222a71e02d8445f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1de885babc332505252e4db4549411ecf6fbb6abfafcfb0d1381bcb2672bdec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de885babc332505252e4db4549411ecf6fbb6abfafcfb0d1381bcb2672bdec7->enter($__internal_1de885babc332505252e4db4549411ecf6fbb6abfafcfb0d1381bcb2672bdec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_e761c93aaae37eb21535337d86106efb5e009eae60a362650f712ddefba2042b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e761c93aaae37eb21535337d86106efb5e009eae60a362650f712ddefba2042b->enter($__internal_e761c93aaae37eb21535337d86106efb5e009eae60a362650f712ddefba2042b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1de885babc332505252e4db4549411ecf6fbb6abfafcfb0d1381bcb2672bdec7->leave($__internal_1de885babc332505252e4db4549411ecf6fbb6abfafcfb0d1381bcb2672bdec7_prof);

        
        $__internal_e761c93aaae37eb21535337d86106efb5e009eae60a362650f712ddefba2042b->leave($__internal_e761c93aaae37eb21535337d86106efb5e009eae60a362650f712ddefba2042b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afc2c3cd7e4d3693a8f6fa0c0cc25277c15f8a0befefa12b55288e3e297a7f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc2c3cd7e4d3693a8f6fa0c0cc25277c15f8a0befefa12b55288e3e297a7f8e->enter($__internal_afc2c3cd7e4d3693a8f6fa0c0cc25277c15f8a0befefa12b55288e3e297a7f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea7c23ff19c8a6e5bd0304c7521e1d47357e27625e5b85c588f398fcf87021c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7c23ff19c8a6e5bd0304c7521e1d47357e27625e5b85c588f398fcf87021c7->enter($__internal_ea7c23ff19c8a6e5bd0304c7521e1d47357e27625e5b85c588f398fcf87021c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ea7c23ff19c8a6e5bd0304c7521e1d47357e27625e5b85c588f398fcf87021c7->leave($__internal_ea7c23ff19c8a6e5bd0304c7521e1d47357e27625e5b85c588f398fcf87021c7_prof);

        
        $__internal_afc2c3cd7e4d3693a8f6fa0c0cc25277c15f8a0befefa12b55288e3e297a7f8e->leave($__internal_afc2c3cd7e4d3693a8f6fa0c0cc25277c15f8a0befefa12b55288e3e297a7f8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
