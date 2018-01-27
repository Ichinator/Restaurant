<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_db892c3e5008796b3ad6ada3b4cfd23d6a66e3fd1af14935b5cd516d406165a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_5bd2f91feafcb42f9bf0a4bdf8ec029579fefd81556cd109358cca6e428a634e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd2f91feafcb42f9bf0a4bdf8ec029579fefd81556cd109358cca6e428a634e->enter($__internal_5bd2f91feafcb42f9bf0a4bdf8ec029579fefd81556cd109358cca6e428a634e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_48dfa480e3d61aa268ea7ea95840ed00a1de0bd5eef0602b6920dcd17d83d106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dfa480e3d61aa268ea7ea95840ed00a1de0bd5eef0602b6920dcd17d83d106->enter($__internal_48dfa480e3d61aa268ea7ea95840ed00a1de0bd5eef0602b6920dcd17d83d106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd2f91feafcb42f9bf0a4bdf8ec029579fefd81556cd109358cca6e428a634e->leave($__internal_5bd2f91feafcb42f9bf0a4bdf8ec029579fefd81556cd109358cca6e428a634e_prof);

        
        $__internal_48dfa480e3d61aa268ea7ea95840ed00a1de0bd5eef0602b6920dcd17d83d106->leave($__internal_48dfa480e3d61aa268ea7ea95840ed00a1de0bd5eef0602b6920dcd17d83d106_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bec5f898fbec4fce0a2a49ab489f54002d03a946b9a0c9c08147a1b0ff3ca86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec5f898fbec4fce0a2a49ab489f54002d03a946b9a0c9c08147a1b0ff3ca86c->enter($__internal_bec5f898fbec4fce0a2a49ab489f54002d03a946b9a0c9c08147a1b0ff3ca86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_674bf7c6157be015c26437c6dee8f638ad5584b35c3828ca6eeef3f932c65181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674bf7c6157be015c26437c6dee8f638ad5584b35c3828ca6eeef3f932c65181->enter($__internal_674bf7c6157be015c26437c6dee8f638ad5584b35c3828ca6eeef3f932c65181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_674bf7c6157be015c26437c6dee8f638ad5584b35c3828ca6eeef3f932c65181->leave($__internal_674bf7c6157be015c26437c6dee8f638ad5584b35c3828ca6eeef3f932c65181_prof);

        
        $__internal_bec5f898fbec4fce0a2a49ab489f54002d03a946b9a0c9c08147a1b0ff3ca86c->leave($__internal_bec5f898fbec4fce0a2a49ab489f54002d03a946b9a0c9c08147a1b0ff3ca86c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
