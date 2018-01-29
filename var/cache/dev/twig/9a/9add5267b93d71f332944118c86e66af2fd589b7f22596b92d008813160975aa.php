<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d4faa8b502a4bf9ff5250a0fa668a9c7c3b0db72da88844be174de3b791616b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_451fd6fae506121a3ccec45ffd17c05ad1b89859a210d5de7a2461c5ce2d81d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451fd6fae506121a3ccec45ffd17c05ad1b89859a210d5de7a2461c5ce2d81d0->enter($__internal_451fd6fae506121a3ccec45ffd17c05ad1b89859a210d5de7a2461c5ce2d81d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_ead9a61df1b619e5a066804c8657a8f6d5574e397399cb5ac2b0ebd3d012d472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead9a61df1b619e5a066804c8657a8f6d5574e397399cb5ac2b0ebd3d012d472->enter($__internal_ead9a61df1b619e5a066804c8657a8f6d5574e397399cb5ac2b0ebd3d012d472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451fd6fae506121a3ccec45ffd17c05ad1b89859a210d5de7a2461c5ce2d81d0->leave($__internal_451fd6fae506121a3ccec45ffd17c05ad1b89859a210d5de7a2461c5ce2d81d0_prof);

        
        $__internal_ead9a61df1b619e5a066804c8657a8f6d5574e397399cb5ac2b0ebd3d012d472->leave($__internal_ead9a61df1b619e5a066804c8657a8f6d5574e397399cb5ac2b0ebd3d012d472_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1e055adac39133f324d69405ca114af13ddcc0dfb2bed49d9732ceacf77c8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e055adac39133f324d69405ca114af13ddcc0dfb2bed49d9732ceacf77c8b8->enter($__internal_f1e055adac39133f324d69405ca114af13ddcc0dfb2bed49d9732ceacf77c8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5639e55b32d790f2fbe04db061a23997617f3ebd443488b7ca02924578a7dedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5639e55b32d790f2fbe04db061a23997617f3ebd443488b7ca02924578a7dedc->enter($__internal_5639e55b32d790f2fbe04db061a23997617f3ebd443488b7ca02924578a7dedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5639e55b32d790f2fbe04db061a23997617f3ebd443488b7ca02924578a7dedc->leave($__internal_5639e55b32d790f2fbe04db061a23997617f3ebd443488b7ca02924578a7dedc_prof);

        
        $__internal_f1e055adac39133f324d69405ca114af13ddcc0dfb2bed49d9732ceacf77c8b8->leave($__internal_f1e055adac39133f324d69405ca114af13ddcc0dfb2bed49d9732ceacf77c8b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
