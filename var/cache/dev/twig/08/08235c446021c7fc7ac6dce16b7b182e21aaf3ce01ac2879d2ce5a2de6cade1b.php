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
        $__internal_3a6fca309af60432442cdb053fdeebf742055ca16048e4b6d977990ef1012649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6fca309af60432442cdb053fdeebf742055ca16048e4b6d977990ef1012649->enter($__internal_3a6fca309af60432442cdb053fdeebf742055ca16048e4b6d977990ef1012649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_72c0dd7fa068cda5cbc09a1c8da4d946d9de768611ef7b1cdcf658e91ec967dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c0dd7fa068cda5cbc09a1c8da4d946d9de768611ef7b1cdcf658e91ec967dd->enter($__internal_72c0dd7fa068cda5cbc09a1c8da4d946d9de768611ef7b1cdcf658e91ec967dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a6fca309af60432442cdb053fdeebf742055ca16048e4b6d977990ef1012649->leave($__internal_3a6fca309af60432442cdb053fdeebf742055ca16048e4b6d977990ef1012649_prof);

        
        $__internal_72c0dd7fa068cda5cbc09a1c8da4d946d9de768611ef7b1cdcf658e91ec967dd->leave($__internal_72c0dd7fa068cda5cbc09a1c8da4d946d9de768611ef7b1cdcf658e91ec967dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df551ef719a41bad06c000aa1c724a4601c50579579b1e96b2b984390ac5c20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df551ef719a41bad06c000aa1c724a4601c50579579b1e96b2b984390ac5c20d->enter($__internal_df551ef719a41bad06c000aa1c724a4601c50579579b1e96b2b984390ac5c20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c47d35767cc904fa13e749d1574d13cf8c807698dfb0a74498053ea6997487ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47d35767cc904fa13e749d1574d13cf8c807698dfb0a74498053ea6997487ec->enter($__internal_c47d35767cc904fa13e749d1574d13cf8c807698dfb0a74498053ea6997487ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c47d35767cc904fa13e749d1574d13cf8c807698dfb0a74498053ea6997487ec->leave($__internal_c47d35767cc904fa13e749d1574d13cf8c807698dfb0a74498053ea6997487ec_prof);

        
        $__internal_df551ef719a41bad06c000aa1c724a4601c50579579b1e96b2b984390ac5c20d->leave($__internal_df551ef719a41bad06c000aa1c724a4601c50579579b1e96b2b984390ac5c20d_prof);

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
