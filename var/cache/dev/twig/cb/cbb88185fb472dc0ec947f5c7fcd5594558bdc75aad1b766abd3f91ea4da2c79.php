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
        $__internal_111ae259028aadd917d933f54b370bfaa9de3247e1c3f7f2c6ea1c77fb957a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111ae259028aadd917d933f54b370bfaa9de3247e1c3f7f2c6ea1c77fb957a93->enter($__internal_111ae259028aadd917d933f54b370bfaa9de3247e1c3f7f2c6ea1c77fb957a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_c388ced52772b5bce5dc32657e8d0bd6e0f1d35f6207c61cf27724a6cfe46593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c388ced52772b5bce5dc32657e8d0bd6e0f1d35f6207c61cf27724a6cfe46593->enter($__internal_c388ced52772b5bce5dc32657e8d0bd6e0f1d35f6207c61cf27724a6cfe46593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_111ae259028aadd917d933f54b370bfaa9de3247e1c3f7f2c6ea1c77fb957a93->leave($__internal_111ae259028aadd917d933f54b370bfaa9de3247e1c3f7f2c6ea1c77fb957a93_prof);

        
        $__internal_c388ced52772b5bce5dc32657e8d0bd6e0f1d35f6207c61cf27724a6cfe46593->leave($__internal_c388ced52772b5bce5dc32657e8d0bd6e0f1d35f6207c61cf27724a6cfe46593_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_033e956f59af754c517df428cf9cc00327c0f218837065ac59b8c7c3f39e9f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033e956f59af754c517df428cf9cc00327c0f218837065ac59b8c7c3f39e9f8a->enter($__internal_033e956f59af754c517df428cf9cc00327c0f218837065ac59b8c7c3f39e9f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40ca6812021cdfaaa8f1447b3100ceb9e972391760df656d946adeb95ebf8865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ca6812021cdfaaa8f1447b3100ceb9e972391760df656d946adeb95ebf8865->enter($__internal_40ca6812021cdfaaa8f1447b3100ceb9e972391760df656d946adeb95ebf8865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_40ca6812021cdfaaa8f1447b3100ceb9e972391760df656d946adeb95ebf8865->leave($__internal_40ca6812021cdfaaa8f1447b3100ceb9e972391760df656d946adeb95ebf8865_prof);

        
        $__internal_033e956f59af754c517df428cf9cc00327c0f218837065ac59b8c7c3f39e9f8a->leave($__internal_033e956f59af754c517df428cf9cc00327c0f218837065ac59b8c7c3f39e9f8a_prof);

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
