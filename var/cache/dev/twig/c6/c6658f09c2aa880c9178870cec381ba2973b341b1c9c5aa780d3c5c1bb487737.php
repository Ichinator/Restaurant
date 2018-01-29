<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a77bacb32889e3f42636496730ad20ad419474a43e9bea2043d6d72f438fb2de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0805be1588f1a2dce369c87c3e06725f97b28f752d17a89f303120ad751bc240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0805be1588f1a2dce369c87c3e06725f97b28f752d17a89f303120ad751bc240->enter($__internal_0805be1588f1a2dce369c87c3e06725f97b28f752d17a89f303120ad751bc240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_4857ebcb5b9a154c7abf842ea1993e94db603448f796d1f2b4cff108be8a0896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4857ebcb5b9a154c7abf842ea1993e94db603448f796d1f2b4cff108be8a0896->enter($__internal_4857ebcb5b9a154c7abf842ea1993e94db603448f796d1f2b4cff108be8a0896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0805be1588f1a2dce369c87c3e06725f97b28f752d17a89f303120ad751bc240->leave($__internal_0805be1588f1a2dce369c87c3e06725f97b28f752d17a89f303120ad751bc240_prof);

        
        $__internal_4857ebcb5b9a154c7abf842ea1993e94db603448f796d1f2b4cff108be8a0896->leave($__internal_4857ebcb5b9a154c7abf842ea1993e94db603448f796d1f2b4cff108be8a0896_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b01b23645182842f3c3d4b8342dcf27ae70c5b8158c1d19c43d5d7b43f10085c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01b23645182842f3c3d4b8342dcf27ae70c5b8158c1d19c43d5d7b43f10085c->enter($__internal_b01b23645182842f3c3d4b8342dcf27ae70c5b8158c1d19c43d5d7b43f10085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d59523e7fc8cd6cb559112523397665ed8791030ee1ab419357d72a2715f40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d59523e7fc8cd6cb559112523397665ed8791030ee1ab419357d72a2715f40c->enter($__internal_6d59523e7fc8cd6cb559112523397665ed8791030ee1ab419357d72a2715f40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6d59523e7fc8cd6cb559112523397665ed8791030ee1ab419357d72a2715f40c->leave($__internal_6d59523e7fc8cd6cb559112523397665ed8791030ee1ab419357d72a2715f40c_prof);

        
        $__internal_b01b23645182842f3c3d4b8342dcf27ae70c5b8158c1d19c43d5d7b43f10085c->leave($__internal_b01b23645182842f3c3d4b8342dcf27ae70c5b8158c1d19c43d5d7b43f10085c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
