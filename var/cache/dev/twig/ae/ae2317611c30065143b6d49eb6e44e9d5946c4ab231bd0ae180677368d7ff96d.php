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
        $__internal_c2c714d335ff76e757c1c6221981f2115e38e329123a00d9c64c50bd6f0887e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c714d335ff76e757c1c6221981f2115e38e329123a00d9c64c50bd6f0887e6->enter($__internal_c2c714d335ff76e757c1c6221981f2115e38e329123a00d9c64c50bd6f0887e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_6e22a298ba19e98dbe42428595953a67d1bd78e16ccc8a12fe8eee445abec3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e22a298ba19e98dbe42428595953a67d1bd78e16ccc8a12fe8eee445abec3f2->enter($__internal_6e22a298ba19e98dbe42428595953a67d1bd78e16ccc8a12fe8eee445abec3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2c714d335ff76e757c1c6221981f2115e38e329123a00d9c64c50bd6f0887e6->leave($__internal_c2c714d335ff76e757c1c6221981f2115e38e329123a00d9c64c50bd6f0887e6_prof);

        
        $__internal_6e22a298ba19e98dbe42428595953a67d1bd78e16ccc8a12fe8eee445abec3f2->leave($__internal_6e22a298ba19e98dbe42428595953a67d1bd78e16ccc8a12fe8eee445abec3f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0f713b5621b6359a03160a79a3dda6e761ba12b26f20a892f830d3a1af405c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f713b5621b6359a03160a79a3dda6e761ba12b26f20a892f830d3a1af405c1->enter($__internal_a0f713b5621b6359a03160a79a3dda6e761ba12b26f20a892f830d3a1af405c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d1d8c6f14d6fe38d912e69c8ecbe9da09b06b2470b678762dd32b2510ab3219c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d8c6f14d6fe38d912e69c8ecbe9da09b06b2470b678762dd32b2510ab3219c->enter($__internal_d1d8c6f14d6fe38d912e69c8ecbe9da09b06b2470b678762dd32b2510ab3219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d1d8c6f14d6fe38d912e69c8ecbe9da09b06b2470b678762dd32b2510ab3219c->leave($__internal_d1d8c6f14d6fe38d912e69c8ecbe9da09b06b2470b678762dd32b2510ab3219c_prof);

        
        $__internal_a0f713b5621b6359a03160a79a3dda6e761ba12b26f20a892f830d3a1af405c1->leave($__internal_a0f713b5621b6359a03160a79a3dda6e761ba12b26f20a892f830d3a1af405c1_prof);

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
