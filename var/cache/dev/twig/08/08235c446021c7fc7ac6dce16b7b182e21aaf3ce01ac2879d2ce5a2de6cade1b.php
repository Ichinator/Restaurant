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
        $__internal_c38cf73caff8611fb6d8594c2c542cb87b0b3ab1c373663fabe5c53b94cf7efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38cf73caff8611fb6d8594c2c542cb87b0b3ab1c373663fabe5c53b94cf7efe->enter($__internal_c38cf73caff8611fb6d8594c2c542cb87b0b3ab1c373663fabe5c53b94cf7efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_2ef41314784eb29f16ca07512a90cc9994bfca24067c0e5f24b7221742f71d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef41314784eb29f16ca07512a90cc9994bfca24067c0e5f24b7221742f71d19->enter($__internal_2ef41314784eb29f16ca07512a90cc9994bfca24067c0e5f24b7221742f71d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c38cf73caff8611fb6d8594c2c542cb87b0b3ab1c373663fabe5c53b94cf7efe->leave($__internal_c38cf73caff8611fb6d8594c2c542cb87b0b3ab1c373663fabe5c53b94cf7efe_prof);

        
        $__internal_2ef41314784eb29f16ca07512a90cc9994bfca24067c0e5f24b7221742f71d19->leave($__internal_2ef41314784eb29f16ca07512a90cc9994bfca24067c0e5f24b7221742f71d19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0580ef8cc7d855d65137c7a27d844789859e5e59f1ff4dd2d3e872013ca36e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0580ef8cc7d855d65137c7a27d844789859e5e59f1ff4dd2d3e872013ca36e31->enter($__internal_0580ef8cc7d855d65137c7a27d844789859e5e59f1ff4dd2d3e872013ca36e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e7d28584070ff541f9e2bf8434c7a51373a56a314022fa84ec5845e7b1c7854b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d28584070ff541f9e2bf8434c7a51373a56a314022fa84ec5845e7b1c7854b->enter($__internal_e7d28584070ff541f9e2bf8434c7a51373a56a314022fa84ec5845e7b1c7854b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e7d28584070ff541f9e2bf8434c7a51373a56a314022fa84ec5845e7b1c7854b->leave($__internal_e7d28584070ff541f9e2bf8434c7a51373a56a314022fa84ec5845e7b1c7854b_prof);

        
        $__internal_0580ef8cc7d855d65137c7a27d844789859e5e59f1ff4dd2d3e872013ca36e31->leave($__internal_0580ef8cc7d855d65137c7a27d844789859e5e59f1ff4dd2d3e872013ca36e31_prof);

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
