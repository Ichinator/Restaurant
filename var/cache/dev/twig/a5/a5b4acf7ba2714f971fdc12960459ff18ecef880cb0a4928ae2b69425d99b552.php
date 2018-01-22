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
        $__internal_be027d0a401fbc16f3715b00b4bcc63f2b474bcf9530c17f90948b22ad312954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be027d0a401fbc16f3715b00b4bcc63f2b474bcf9530c17f90948b22ad312954->enter($__internal_be027d0a401fbc16f3715b00b4bcc63f2b474bcf9530c17f90948b22ad312954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b3a202ced27163b9ae39da3952e60d5ab8028f2f026c445c15a7a3fea1ca227e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a202ced27163b9ae39da3952e60d5ab8028f2f026c445c15a7a3fea1ca227e->enter($__internal_b3a202ced27163b9ae39da3952e60d5ab8028f2f026c445c15a7a3fea1ca227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be027d0a401fbc16f3715b00b4bcc63f2b474bcf9530c17f90948b22ad312954->leave($__internal_be027d0a401fbc16f3715b00b4bcc63f2b474bcf9530c17f90948b22ad312954_prof);

        
        $__internal_b3a202ced27163b9ae39da3952e60d5ab8028f2f026c445c15a7a3fea1ca227e->leave($__internal_b3a202ced27163b9ae39da3952e60d5ab8028f2f026c445c15a7a3fea1ca227e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d3dd3be251b7609b752c6001bf9059dae4347c4a08be2a644c7b8ceacba833f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3dd3be251b7609b752c6001bf9059dae4347c4a08be2a644c7b8ceacba833f->enter($__internal_7d3dd3be251b7609b752c6001bf9059dae4347c4a08be2a644c7b8ceacba833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0dffe77e3120c561aaf7840621a53918777e8920098526f06e675d3147eed4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dffe77e3120c561aaf7840621a53918777e8920098526f06e675d3147eed4e3->enter($__internal_0dffe77e3120c561aaf7840621a53918777e8920098526f06e675d3147eed4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_0dffe77e3120c561aaf7840621a53918777e8920098526f06e675d3147eed4e3->leave($__internal_0dffe77e3120c561aaf7840621a53918777e8920098526f06e675d3147eed4e3_prof);

        
        $__internal_7d3dd3be251b7609b752c6001bf9059dae4347c4a08be2a644c7b8ceacba833f->leave($__internal_7d3dd3be251b7609b752c6001bf9059dae4347c4a08be2a644c7b8ceacba833f_prof);

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
