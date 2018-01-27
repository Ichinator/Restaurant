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
        $__internal_1c2f228abd0ed44427c0ed99c3a772420a6566c4ac783ee467f92d5623bfc9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2f228abd0ed44427c0ed99c3a772420a6566c4ac783ee467f92d5623bfc9ad->enter($__internal_1c2f228abd0ed44427c0ed99c3a772420a6566c4ac783ee467f92d5623bfc9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_910a392a0e3e6cc7d636671fafc4f7814f373b9461977e93d86d140f4cc06784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910a392a0e3e6cc7d636671fafc4f7814f373b9461977e93d86d140f4cc06784->enter($__internal_910a392a0e3e6cc7d636671fafc4f7814f373b9461977e93d86d140f4cc06784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c2f228abd0ed44427c0ed99c3a772420a6566c4ac783ee467f92d5623bfc9ad->leave($__internal_1c2f228abd0ed44427c0ed99c3a772420a6566c4ac783ee467f92d5623bfc9ad_prof);

        
        $__internal_910a392a0e3e6cc7d636671fafc4f7814f373b9461977e93d86d140f4cc06784->leave($__internal_910a392a0e3e6cc7d636671fafc4f7814f373b9461977e93d86d140f4cc06784_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18bdb4df90e7a287173400176319af9ae2ef389a1111ff91bb17eaf9de21feef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18bdb4df90e7a287173400176319af9ae2ef389a1111ff91bb17eaf9de21feef->enter($__internal_18bdb4df90e7a287173400176319af9ae2ef389a1111ff91bb17eaf9de21feef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea3a36ced3932748d65895b79ef174c6dcd33ef72a9da10c359c2e1185345355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3a36ced3932748d65895b79ef174c6dcd33ef72a9da10c359c2e1185345355->enter($__internal_ea3a36ced3932748d65895b79ef174c6dcd33ef72a9da10c359c2e1185345355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ea3a36ced3932748d65895b79ef174c6dcd33ef72a9da10c359c2e1185345355->leave($__internal_ea3a36ced3932748d65895b79ef174c6dcd33ef72a9da10c359c2e1185345355_prof);

        
        $__internal_18bdb4df90e7a287173400176319af9ae2ef389a1111ff91bb17eaf9de21feef->leave($__internal_18bdb4df90e7a287173400176319af9ae2ef389a1111ff91bb17eaf9de21feef_prof);

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
