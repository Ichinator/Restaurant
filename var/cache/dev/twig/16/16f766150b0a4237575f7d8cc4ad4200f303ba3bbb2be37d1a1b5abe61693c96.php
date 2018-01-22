<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2fa804d1b463eaa81ff289ee3d10e7eac2033f12ec9c64c2cf4c16e878fc52b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e4fe5c6d33e4049a9dcc3487f876b2427efcb1695e3faf9f962dc9a3f45912cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fe5c6d33e4049a9dcc3487f876b2427efcb1695e3faf9f962dc9a3f45912cb->enter($__internal_e4fe5c6d33e4049a9dcc3487f876b2427efcb1695e3faf9f962dc9a3f45912cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_026cefd517e61d24aeefb17312b8b1a108e638dc97b45a2b7e01011f31e913d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026cefd517e61d24aeefb17312b8b1a108e638dc97b45a2b7e01011f31e913d1->enter($__internal_026cefd517e61d24aeefb17312b8b1a108e638dc97b45a2b7e01011f31e913d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4fe5c6d33e4049a9dcc3487f876b2427efcb1695e3faf9f962dc9a3f45912cb->leave($__internal_e4fe5c6d33e4049a9dcc3487f876b2427efcb1695e3faf9f962dc9a3f45912cb_prof);

        
        $__internal_026cefd517e61d24aeefb17312b8b1a108e638dc97b45a2b7e01011f31e913d1->leave($__internal_026cefd517e61d24aeefb17312b8b1a108e638dc97b45a2b7e01011f31e913d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6239a54539c4839038eb7442033de3b9f91ed544eb56131d6a6d34267e9dffaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6239a54539c4839038eb7442033de3b9f91ed544eb56131d6a6d34267e9dffaf->enter($__internal_6239a54539c4839038eb7442033de3b9f91ed544eb56131d6a6d34267e9dffaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af3124842b8284536ced29ae8a753565646c1c3d1a16e1a4d5d069159117d20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3124842b8284536ced29ae8a753565646c1c3d1a16e1a4d5d069159117d20e->enter($__internal_af3124842b8284536ced29ae8a753565646c1c3d1a16e1a4d5d069159117d20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_af3124842b8284536ced29ae8a753565646c1c3d1a16e1a4d5d069159117d20e->leave($__internal_af3124842b8284536ced29ae8a753565646c1c3d1a16e1a4d5d069159117d20e_prof);

        
        $__internal_6239a54539c4839038eb7442033de3b9f91ed544eb56131d6a6d34267e9dffaf->leave($__internal_6239a54539c4839038eb7442033de3b9f91ed544eb56131d6a6d34267e9dffaf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
