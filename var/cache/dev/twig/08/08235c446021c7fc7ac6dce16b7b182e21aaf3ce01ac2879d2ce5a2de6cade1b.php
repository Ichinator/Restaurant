<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_eab86871393f74a67ec5f3512734a8bca1f303d651bcae7f41edd893e77dc2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e8cc93bea03f128fcc2c566bd30d9dc87a45c7f8cc0db389f2fb1a327c58b118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cc93bea03f128fcc2c566bd30d9dc87a45c7f8cc0db389f2fb1a327c58b118->enter($__internal_e8cc93bea03f128fcc2c566bd30d9dc87a45c7f8cc0db389f2fb1a327c58b118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_82fcd738636acb589de941d11f994c919a07e1b558f47fd2c73f4fef89d6ac9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fcd738636acb589de941d11f994c919a07e1b558f47fd2c73f4fef89d6ac9b->enter($__internal_82fcd738636acb589de941d11f994c919a07e1b558f47fd2c73f4fef89d6ac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8cc93bea03f128fcc2c566bd30d9dc87a45c7f8cc0db389f2fb1a327c58b118->leave($__internal_e8cc93bea03f128fcc2c566bd30d9dc87a45c7f8cc0db389f2fb1a327c58b118_prof);

        
        $__internal_82fcd738636acb589de941d11f994c919a07e1b558f47fd2c73f4fef89d6ac9b->leave($__internal_82fcd738636acb589de941d11f994c919a07e1b558f47fd2c73f4fef89d6ac9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fb38b58d648b27497a8bc26805674a6d1d015073f6dcb538e5b81b3d92a2fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb38b58d648b27497a8bc26805674a6d1d015073f6dcb538e5b81b3d92a2fe4->enter($__internal_3fb38b58d648b27497a8bc26805674a6d1d015073f6dcb538e5b81b3d92a2fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d3b963f224e8c1fd70c95fbcfba9561b8c5a53538031511d1a6baf613b8419d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b963f224e8c1fd70c95fbcfba9561b8c5a53538031511d1a6baf613b8419d4->enter($__internal_d3b963f224e8c1fd70c95fbcfba9561b8c5a53538031511d1a6baf613b8419d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d3b963f224e8c1fd70c95fbcfba9561b8c5a53538031511d1a6baf613b8419d4->leave($__internal_d3b963f224e8c1fd70c95fbcfba9561b8c5a53538031511d1a6baf613b8419d4_prof);

        
        $__internal_3fb38b58d648b27497a8bc26805674a6d1d015073f6dcb538e5b81b3d92a2fe4->leave($__internal_3fb38b58d648b27497a8bc26805674a6d1d015073f6dcb538e5b81b3d92a2fe4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
