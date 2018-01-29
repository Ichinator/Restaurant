<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c9aca8dae4c5931c286f3f8c9f3771ca938fd067324b6d86d9d15ddf814d8ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6524ef3eeb5b2d2db39a788ce36b083069a419dd2484e52b58e08e132e690450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6524ef3eeb5b2d2db39a788ce36b083069a419dd2484e52b58e08e132e690450->enter($__internal_6524ef3eeb5b2d2db39a788ce36b083069a419dd2484e52b58e08e132e690450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_096c59dba9b4a6aa215c5fa7850162d8a0d0e3d16152929fc1fc81dda776df6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096c59dba9b4a6aa215c5fa7850162d8a0d0e3d16152929fc1fc81dda776df6f->enter($__internal_096c59dba9b4a6aa215c5fa7850162d8a0d0e3d16152929fc1fc81dda776df6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6524ef3eeb5b2d2db39a788ce36b083069a419dd2484e52b58e08e132e690450->leave($__internal_6524ef3eeb5b2d2db39a788ce36b083069a419dd2484e52b58e08e132e690450_prof);

        
        $__internal_096c59dba9b4a6aa215c5fa7850162d8a0d0e3d16152929fc1fc81dda776df6f->leave($__internal_096c59dba9b4a6aa215c5fa7850162d8a0d0e3d16152929fc1fc81dda776df6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37faac25b87ac16f91b6bb56085f60a66bb68065ba49113abb130c80f5e608e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37faac25b87ac16f91b6bb56085f60a66bb68065ba49113abb130c80f5e608e9->enter($__internal_37faac25b87ac16f91b6bb56085f60a66bb68065ba49113abb130c80f5e608e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62f7cf000654c2b5fc8795b9b608a4d6ee960ee9a8c16d2104c0b4953d0c73a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f7cf000654c2b5fc8795b9b608a4d6ee960ee9a8c16d2104c0b4953d0c73a7->enter($__internal_62f7cf000654c2b5fc8795b9b608a4d6ee960ee9a8c16d2104c0b4953d0c73a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_62f7cf000654c2b5fc8795b9b608a4d6ee960ee9a8c16d2104c0b4953d0c73a7->leave($__internal_62f7cf000654c2b5fc8795b9b608a4d6ee960ee9a8c16d2104c0b4953d0c73a7_prof);

        
        $__internal_37faac25b87ac16f91b6bb56085f60a66bb68065ba49113abb130c80f5e608e9->leave($__internal_37faac25b87ac16f91b6bb56085f60a66bb68065ba49113abb130c80f5e608e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
