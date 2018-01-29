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
        $__internal_de12a0862b8c2fcbd6334b39d9fb5428d5c0548c03cb0a7c161468fb981b5a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de12a0862b8c2fcbd6334b39d9fb5428d5c0548c03cb0a7c161468fb981b5a1c->enter($__internal_de12a0862b8c2fcbd6334b39d9fb5428d5c0548c03cb0a7c161468fb981b5a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_611dc7e6525cc20b7ad8572a18a6019e7d0ca3f361c326c2831533c38bd190b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611dc7e6525cc20b7ad8572a18a6019e7d0ca3f361c326c2831533c38bd190b4->enter($__internal_611dc7e6525cc20b7ad8572a18a6019e7d0ca3f361c326c2831533c38bd190b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de12a0862b8c2fcbd6334b39d9fb5428d5c0548c03cb0a7c161468fb981b5a1c->leave($__internal_de12a0862b8c2fcbd6334b39d9fb5428d5c0548c03cb0a7c161468fb981b5a1c_prof);

        
        $__internal_611dc7e6525cc20b7ad8572a18a6019e7d0ca3f361c326c2831533c38bd190b4->leave($__internal_611dc7e6525cc20b7ad8572a18a6019e7d0ca3f361c326c2831533c38bd190b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ba2a2e58a5f5d27a34443353d57bc8a79f560e530ff46fe9231702db1ffbd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba2a2e58a5f5d27a34443353d57bc8a79f560e530ff46fe9231702db1ffbd83->enter($__internal_4ba2a2e58a5f5d27a34443353d57bc8a79f560e530ff46fe9231702db1ffbd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_119a0447d3917d0aeb531c482e90cc90061d550e6b362af1296a77fc3adce033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119a0447d3917d0aeb531c482e90cc90061d550e6b362af1296a77fc3adce033->enter($__internal_119a0447d3917d0aeb531c482e90cc90061d550e6b362af1296a77fc3adce033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_119a0447d3917d0aeb531c482e90cc90061d550e6b362af1296a77fc3adce033->leave($__internal_119a0447d3917d0aeb531c482e90cc90061d550e6b362af1296a77fc3adce033_prof);

        
        $__internal_4ba2a2e58a5f5d27a34443353d57bc8a79f560e530ff46fe9231702db1ffbd83->leave($__internal_4ba2a2e58a5f5d27a34443353d57bc8a79f560e530ff46fe9231702db1ffbd83_prof);

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
