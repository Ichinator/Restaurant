<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f2e140fccc9d0c2ee4a7b10b123fdfff099a0bc51cfa44350bbc74efa5dd35f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f65993a91ed92949d0dde8f9b03ab44cb42cdb29b8493bf09ad25bbfb67c8747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65993a91ed92949d0dde8f9b03ab44cb42cdb29b8493bf09ad25bbfb67c8747->enter($__internal_f65993a91ed92949d0dde8f9b03ab44cb42cdb29b8493bf09ad25bbfb67c8747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5a4bc9f927abae7f8f9d2034c7622ac34b7100bf7c65e7bd613b2e477f68f936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4bc9f927abae7f8f9d2034c7622ac34b7100bf7c65e7bd613b2e477f68f936->enter($__internal_5a4bc9f927abae7f8f9d2034c7622ac34b7100bf7c65e7bd613b2e477f68f936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65993a91ed92949d0dde8f9b03ab44cb42cdb29b8493bf09ad25bbfb67c8747->leave($__internal_f65993a91ed92949d0dde8f9b03ab44cb42cdb29b8493bf09ad25bbfb67c8747_prof);

        
        $__internal_5a4bc9f927abae7f8f9d2034c7622ac34b7100bf7c65e7bd613b2e477f68f936->leave($__internal_5a4bc9f927abae7f8f9d2034c7622ac34b7100bf7c65e7bd613b2e477f68f936_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b079b81e06a690dbbb217c6c78719c186941aa2f86383ad0dafb757d02cd270f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b079b81e06a690dbbb217c6c78719c186941aa2f86383ad0dafb757d02cd270f->enter($__internal_b079b81e06a690dbbb217c6c78719c186941aa2f86383ad0dafb757d02cd270f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_56ac34f7efae3b05a3b96dc89e8b19e860bc655d38568bc56f8cbfff7c6356b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ac34f7efae3b05a3b96dc89e8b19e860bc655d38568bc56f8cbfff7c6356b5->enter($__internal_56ac34f7efae3b05a3b96dc89e8b19e860bc655d38568bc56f8cbfff7c6356b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_56ac34f7efae3b05a3b96dc89e8b19e860bc655d38568bc56f8cbfff7c6356b5->leave($__internal_56ac34f7efae3b05a3b96dc89e8b19e860bc655d38568bc56f8cbfff7c6356b5_prof);

        
        $__internal_b079b81e06a690dbbb217c6c78719c186941aa2f86383ad0dafb757d02cd270f->leave($__internal_b079b81e06a690dbbb217c6c78719c186941aa2f86383ad0dafb757d02cd270f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
