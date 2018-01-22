<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c9aca8dae4c5931c286f3f8c9f3771ca938fd067324b6d86d9d15ddf814d8ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_fbee4850dee4faab04da03d9e348f7e6b6aeac783c25fa1c73030f7802df4585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbee4850dee4faab04da03d9e348f7e6b6aeac783c25fa1c73030f7802df4585->enter($__internal_fbee4850dee4faab04da03d9e348f7e6b6aeac783c25fa1c73030f7802df4585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_247b75e7282c5594c886accbda949e8614247a4eaa356e1305ca356880e7f7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247b75e7282c5594c886accbda949e8614247a4eaa356e1305ca356880e7f7ac->enter($__internal_247b75e7282c5594c886accbda949e8614247a4eaa356e1305ca356880e7f7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbee4850dee4faab04da03d9e348f7e6b6aeac783c25fa1c73030f7802df4585->leave($__internal_fbee4850dee4faab04da03d9e348f7e6b6aeac783c25fa1c73030f7802df4585_prof);

        
        $__internal_247b75e7282c5594c886accbda949e8614247a4eaa356e1305ca356880e7f7ac->leave($__internal_247b75e7282c5594c886accbda949e8614247a4eaa356e1305ca356880e7f7ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab082938415511030960cc801b872f2fca95178c9a4f4b465ce3454408a64071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab082938415511030960cc801b872f2fca95178c9a4f4b465ce3454408a64071->enter($__internal_ab082938415511030960cc801b872f2fca95178c9a4f4b465ce3454408a64071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b99f480e78195eba4dd682124f66bb284ded18cd8b934961550a4fd0212d5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b99f480e78195eba4dd682124f66bb284ded18cd8b934961550a4fd0212d5d5->enter($__internal_2b99f480e78195eba4dd682124f66bb284ded18cd8b934961550a4fd0212d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2b99f480e78195eba4dd682124f66bb284ded18cd8b934961550a4fd0212d5d5->leave($__internal_2b99f480e78195eba4dd682124f66bb284ded18cd8b934961550a4fd0212d5d5_prof);

        
        $__internal_ab082938415511030960cc801b872f2fca95178c9a4f4b465ce3454408a64071->leave($__internal_ab082938415511030960cc801b872f2fca95178c9a4f4b465ce3454408a64071_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
