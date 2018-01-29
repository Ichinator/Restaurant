<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f86a965c69b8c60efb2af9fd63b68a25c3e8a571ddec03ace51c90658a6f96fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9d8b6285c973e6b9c2ea9f6fcad93a8b5b1dfd9c79c285b5613f20bfa2882da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8b6285c973e6b9c2ea9f6fcad93a8b5b1dfd9c79c285b5613f20bfa2882da9->enter($__internal_9d8b6285c973e6b9c2ea9f6fcad93a8b5b1dfd9c79c285b5613f20bfa2882da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_b23c10ad1d71ace288b310c1922b5114c917a23f5d4ba5d20203d65cb34c2a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23c10ad1d71ace288b310c1922b5114c917a23f5d4ba5d20203d65cb34c2a4b->enter($__internal_b23c10ad1d71ace288b310c1922b5114c917a23f5d4ba5d20203d65cb34c2a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d8b6285c973e6b9c2ea9f6fcad93a8b5b1dfd9c79c285b5613f20bfa2882da9->leave($__internal_9d8b6285c973e6b9c2ea9f6fcad93a8b5b1dfd9c79c285b5613f20bfa2882da9_prof);

        
        $__internal_b23c10ad1d71ace288b310c1922b5114c917a23f5d4ba5d20203d65cb34c2a4b->leave($__internal_b23c10ad1d71ace288b310c1922b5114c917a23f5d4ba5d20203d65cb34c2a4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d57548f9d7e0a7f1fcbd67730d37aa1083daca2d0f92acb054c6a9bca4fbf55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d57548f9d7e0a7f1fcbd67730d37aa1083daca2d0f92acb054c6a9bca4fbf55->enter($__internal_8d57548f9d7e0a7f1fcbd67730d37aa1083daca2d0f92acb054c6a9bca4fbf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24d6d324fd1cac992946f7d8adb7776cfa8e0479898c7e1493a4fb3d99faa82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d6d324fd1cac992946f7d8adb7776cfa8e0479898c7e1493a4fb3d99faa82a->enter($__internal_24d6d324fd1cac992946f7d8adb7776cfa8e0479898c7e1493a4fb3d99faa82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_24d6d324fd1cac992946f7d8adb7776cfa8e0479898c7e1493a4fb3d99faa82a->leave($__internal_24d6d324fd1cac992946f7d8adb7776cfa8e0479898c7e1493a4fb3d99faa82a_prof);

        
        $__internal_8d57548f9d7e0a7f1fcbd67730d37aa1083daca2d0f92acb054c6a9bca4fbf55->leave($__internal_8d57548f9d7e0a7f1fcbd67730d37aa1083daca2d0f92acb054c6a9bca4fbf55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
