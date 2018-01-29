<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_bb8a3eb275890934c6bf8492821255d2f90b358eca01dcd6ecb091a371f7b4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_bfd8f6e98861134c5ae3f6e0500c7a4d91b34aca686a6da151e24277e48409ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd8f6e98861134c5ae3f6e0500c7a4d91b34aca686a6da151e24277e48409ca->enter($__internal_bfd8f6e98861134c5ae3f6e0500c7a4d91b34aca686a6da151e24277e48409ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_17f845b991c0c323cbe9927ddf7467bb734cd7ac6d12390ff049436e9d631471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f845b991c0c323cbe9927ddf7467bb734cd7ac6d12390ff049436e9d631471->enter($__internal_17f845b991c0c323cbe9927ddf7467bb734cd7ac6d12390ff049436e9d631471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfd8f6e98861134c5ae3f6e0500c7a4d91b34aca686a6da151e24277e48409ca->leave($__internal_bfd8f6e98861134c5ae3f6e0500c7a4d91b34aca686a6da151e24277e48409ca_prof);

        
        $__internal_17f845b991c0c323cbe9927ddf7467bb734cd7ac6d12390ff049436e9d631471->leave($__internal_17f845b991c0c323cbe9927ddf7467bb734cd7ac6d12390ff049436e9d631471_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53838b751407d7923ecf6744d992dd3fa9d53cb0e00d3e9e496b6d347f054b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53838b751407d7923ecf6744d992dd3fa9d53cb0e00d3e9e496b6d347f054b61->enter($__internal_53838b751407d7923ecf6744d992dd3fa9d53cb0e00d3e9e496b6d347f054b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba531989093aca9a71b1a9edf4b1f4ab394e2346ee51154fdb4f3a3e695ff256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba531989093aca9a71b1a9edf4b1f4ab394e2346ee51154fdb4f3a3e695ff256->enter($__internal_ba531989093aca9a71b1a9edf4b1f4ab394e2346ee51154fdb4f3a3e695ff256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ba531989093aca9a71b1a9edf4b1f4ab394e2346ee51154fdb4f3a3e695ff256->leave($__internal_ba531989093aca9a71b1a9edf4b1f4ab394e2346ee51154fdb4f3a3e695ff256_prof);

        
        $__internal_53838b751407d7923ecf6744d992dd3fa9d53cb0e00d3e9e496b6d347f054b61->leave($__internal_53838b751407d7923ecf6744d992dd3fa9d53cb0e00d3e9e496b6d347f054b61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
