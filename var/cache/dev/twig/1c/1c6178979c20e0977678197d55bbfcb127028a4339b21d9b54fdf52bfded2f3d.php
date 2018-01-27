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
        $__internal_ed9f742d874dc545d4fb8a6cb770c4e4eb1e65d6c6a070fdfcd715e033e92c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9f742d874dc545d4fb8a6cb770c4e4eb1e65d6c6a070fdfcd715e033e92c0d->enter($__internal_ed9f742d874dc545d4fb8a6cb770c4e4eb1e65d6c6a070fdfcd715e033e92c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_8a28630c58b1dc6c95a6d86221373892f0602e4779727d21023c4d91dc3686dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a28630c58b1dc6c95a6d86221373892f0602e4779727d21023c4d91dc3686dc->enter($__internal_8a28630c58b1dc6c95a6d86221373892f0602e4779727d21023c4d91dc3686dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed9f742d874dc545d4fb8a6cb770c4e4eb1e65d6c6a070fdfcd715e033e92c0d->leave($__internal_ed9f742d874dc545d4fb8a6cb770c4e4eb1e65d6c6a070fdfcd715e033e92c0d_prof);

        
        $__internal_8a28630c58b1dc6c95a6d86221373892f0602e4779727d21023c4d91dc3686dc->leave($__internal_8a28630c58b1dc6c95a6d86221373892f0602e4779727d21023c4d91dc3686dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_100901ab26cabb3ec0df556ca9116510b2e1d17ece287a08b31a0a3cfe0adbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100901ab26cabb3ec0df556ca9116510b2e1d17ece287a08b31a0a3cfe0adbc0->enter($__internal_100901ab26cabb3ec0df556ca9116510b2e1d17ece287a08b31a0a3cfe0adbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7505e67d95b4ef94091717daee43fb1491c8df63e1924b3f07f820c3b7988381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7505e67d95b4ef94091717daee43fb1491c8df63e1924b3f07f820c3b7988381->enter($__internal_7505e67d95b4ef94091717daee43fb1491c8df63e1924b3f07f820c3b7988381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_7505e67d95b4ef94091717daee43fb1491c8df63e1924b3f07f820c3b7988381->leave($__internal_7505e67d95b4ef94091717daee43fb1491c8df63e1924b3f07f820c3b7988381_prof);

        
        $__internal_100901ab26cabb3ec0df556ca9116510b2e1d17ece287a08b31a0a3cfe0adbc0->leave($__internal_100901ab26cabb3ec0df556ca9116510b2e1d17ece287a08b31a0a3cfe0adbc0_prof);

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
