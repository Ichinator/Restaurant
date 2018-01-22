<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bde38e4fb9fe7eabbfea1e107aff0cfecba5b1a1adbb4f8eaccd937c99e9be1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2bd9d624fc9af1f71315010c84d9b4108009e093b167316fa78f70a40fdcdd3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd9d624fc9af1f71315010c84d9b4108009e093b167316fa78f70a40fdcdd3b->enter($__internal_2bd9d624fc9af1f71315010c84d9b4108009e093b167316fa78f70a40fdcdd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_632bea33f946a73f6e6a1388fb9fce5c2bf1c8cbfc0c1e66c00da23eb0efac25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632bea33f946a73f6e6a1388fb9fce5c2bf1c8cbfc0c1e66c00da23eb0efac25->enter($__internal_632bea33f946a73f6e6a1388fb9fce5c2bf1c8cbfc0c1e66c00da23eb0efac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd9d624fc9af1f71315010c84d9b4108009e093b167316fa78f70a40fdcdd3b->leave($__internal_2bd9d624fc9af1f71315010c84d9b4108009e093b167316fa78f70a40fdcdd3b_prof);

        
        $__internal_632bea33f946a73f6e6a1388fb9fce5c2bf1c8cbfc0c1e66c00da23eb0efac25->leave($__internal_632bea33f946a73f6e6a1388fb9fce5c2bf1c8cbfc0c1e66c00da23eb0efac25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d44e5f6c0ae0a6368f3875e9bdca91ad525a1b1b99f5caf5498468e5f13420b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d44e5f6c0ae0a6368f3875e9bdca91ad525a1b1b99f5caf5498468e5f13420b->enter($__internal_8d44e5f6c0ae0a6368f3875e9bdca91ad525a1b1b99f5caf5498468e5f13420b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9711f3bb6361746e8fc3ce605417717db1d78a75e674206a90e58726f65dec0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9711f3bb6361746e8fc3ce605417717db1d78a75e674206a90e58726f65dec0b->enter($__internal_9711f3bb6361746e8fc3ce605417717db1d78a75e674206a90e58726f65dec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9711f3bb6361746e8fc3ce605417717db1d78a75e674206a90e58726f65dec0b->leave($__internal_9711f3bb6361746e8fc3ce605417717db1d78a75e674206a90e58726f65dec0b_prof);

        
        $__internal_8d44e5f6c0ae0a6368f3875e9bdca91ad525a1b1b99f5caf5498468e5f13420b->leave($__internal_8d44e5f6c0ae0a6368f3875e9bdca91ad525a1b1b99f5caf5498468e5f13420b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
