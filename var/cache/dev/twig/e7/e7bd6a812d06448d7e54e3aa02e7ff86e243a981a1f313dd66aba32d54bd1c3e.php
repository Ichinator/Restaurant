<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_114a13ebcf91ecea836dd538477d69bda54abe63070cba20fef89f537f682385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_2a4c10931009af5eaa058d55e29825e819002b2a60c0bd8b828c47dfc83b295b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4c10931009af5eaa058d55e29825e819002b2a60c0bd8b828c47dfc83b295b->enter($__internal_2a4c10931009af5eaa058d55e29825e819002b2a60c0bd8b828c47dfc83b295b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_62d454d1d79eeb02ea3b095fd6b6ef75f2d27e35843c1c0496e942162f6a080e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d454d1d79eeb02ea3b095fd6b6ef75f2d27e35843c1c0496e942162f6a080e->enter($__internal_62d454d1d79eeb02ea3b095fd6b6ef75f2d27e35843c1c0496e942162f6a080e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4c10931009af5eaa058d55e29825e819002b2a60c0bd8b828c47dfc83b295b->leave($__internal_2a4c10931009af5eaa058d55e29825e819002b2a60c0bd8b828c47dfc83b295b_prof);

        
        $__internal_62d454d1d79eeb02ea3b095fd6b6ef75f2d27e35843c1c0496e942162f6a080e->leave($__internal_62d454d1d79eeb02ea3b095fd6b6ef75f2d27e35843c1c0496e942162f6a080e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2187f59fd2e1bba63dfbf6de6b0770d5dc02f104d8aee1c8576abe8e50d4e6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2187f59fd2e1bba63dfbf6de6b0770d5dc02f104d8aee1c8576abe8e50d4e6e2->enter($__internal_2187f59fd2e1bba63dfbf6de6b0770d5dc02f104d8aee1c8576abe8e50d4e6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8512350b093d6c2370d1f2d26092c54518c64fb12d18fdc1ea90ca958c9c23f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8512350b093d6c2370d1f2d26092c54518c64fb12d18fdc1ea90ca958c9c23f0->enter($__internal_8512350b093d6c2370d1f2d26092c54518c64fb12d18fdc1ea90ca958c9c23f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8512350b093d6c2370d1f2d26092c54518c64fb12d18fdc1ea90ca958c9c23f0->leave($__internal_8512350b093d6c2370d1f2d26092c54518c64fb12d18fdc1ea90ca958c9c23f0_prof);

        
        $__internal_2187f59fd2e1bba63dfbf6de6b0770d5dc02f104d8aee1c8576abe8e50d4e6e2->leave($__internal_2187f59fd2e1bba63dfbf6de6b0770d5dc02f104d8aee1c8576abe8e50d4e6e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
