<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_bb8a3eb275890934c6bf8492821255d2f90b358eca01dcd6ecb091a371f7b4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_36d37bb4d47ba8b26b781f488a2b57f80915da14930c7c0a0ea895c7cab6e41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d37bb4d47ba8b26b781f488a2b57f80915da14930c7c0a0ea895c7cab6e41d->enter($__internal_36d37bb4d47ba8b26b781f488a2b57f80915da14930c7c0a0ea895c7cab6e41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_cb7c63fc4fc298c247709312af970c1873b828a243010e1da850e126afb272b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7c63fc4fc298c247709312af970c1873b828a243010e1da850e126afb272b9->enter($__internal_cb7c63fc4fc298c247709312af970c1873b828a243010e1da850e126afb272b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36d37bb4d47ba8b26b781f488a2b57f80915da14930c7c0a0ea895c7cab6e41d->leave($__internal_36d37bb4d47ba8b26b781f488a2b57f80915da14930c7c0a0ea895c7cab6e41d_prof);

        
        $__internal_cb7c63fc4fc298c247709312af970c1873b828a243010e1da850e126afb272b9->leave($__internal_cb7c63fc4fc298c247709312af970c1873b828a243010e1da850e126afb272b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fe837b7961e46c9dc39653645a6c67cb21319d3a42de8ea470f416c676e9e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe837b7961e46c9dc39653645a6c67cb21319d3a42de8ea470f416c676e9e91->enter($__internal_9fe837b7961e46c9dc39653645a6c67cb21319d3a42de8ea470f416c676e9e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_660d2aab950101a9600feb78bfa64ab67974fe70737a48b111c70a3e51b83b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660d2aab950101a9600feb78bfa64ab67974fe70737a48b111c70a3e51b83b14->enter($__internal_660d2aab950101a9600feb78bfa64ab67974fe70737a48b111c70a3e51b83b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_660d2aab950101a9600feb78bfa64ab67974fe70737a48b111c70a3e51b83b14->leave($__internal_660d2aab950101a9600feb78bfa64ab67974fe70737a48b111c70a3e51b83b14_prof);

        
        $__internal_9fe837b7961e46c9dc39653645a6c67cb21319d3a42de8ea470f416c676e9e91->leave($__internal_9fe837b7961e46c9dc39653645a6c67cb21319d3a42de8ea470f416c676e9e91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
