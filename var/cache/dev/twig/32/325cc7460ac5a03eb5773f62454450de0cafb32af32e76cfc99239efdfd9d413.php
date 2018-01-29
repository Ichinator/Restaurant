<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_632fffdeed070ebc4322b7f0fef4561177cd2a52dccaca8347b9eed22d103fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d62ff46a1cd16879646f420cd3793f58e1219cfdf5dbc61b4529520058c4702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d62ff46a1cd16879646f420cd3793f58e1219cfdf5dbc61b4529520058c4702->enter($__internal_3d62ff46a1cd16879646f420cd3793f58e1219cfdf5dbc61b4529520058c4702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_41ec707ecd5ad9a2f5acc96cbbe9ffdf58fb4642e5fd5489487907bc47169caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ec707ecd5ad9a2f5acc96cbbe9ffdf58fb4642e5fd5489487907bc47169caf->enter($__internal_41ec707ecd5ad9a2f5acc96cbbe9ffdf58fb4642e5fd5489487907bc47169caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d62ff46a1cd16879646f420cd3793f58e1219cfdf5dbc61b4529520058c4702->leave($__internal_3d62ff46a1cd16879646f420cd3793f58e1219cfdf5dbc61b4529520058c4702_prof);

        
        $__internal_41ec707ecd5ad9a2f5acc96cbbe9ffdf58fb4642e5fd5489487907bc47169caf->leave($__internal_41ec707ecd5ad9a2f5acc96cbbe9ffdf58fb4642e5fd5489487907bc47169caf_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a415c222e1abefaf10667f946239814ade37d8c683d14ff5e31e23138898c41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a415c222e1abefaf10667f946239814ade37d8c683d14ff5e31e23138898c41b->enter($__internal_a415c222e1abefaf10667f946239814ade37d8c683d14ff5e31e23138898c41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2d91cd3ccd87c17fbfeff581e57e6f4c808478218121906566110c99a687fea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d91cd3ccd87c17fbfeff581e57e6f4c808478218121906566110c99a687fea3->enter($__internal_2d91cd3ccd87c17fbfeff581e57e6f4c808478218121906566110c99a687fea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_2d91cd3ccd87c17fbfeff581e57e6f4c808478218121906566110c99a687fea3->leave($__internal_2d91cd3ccd87c17fbfeff581e57e6f4c808478218121906566110c99a687fea3_prof);

        
        $__internal_a415c222e1abefaf10667f946239814ade37d8c683d14ff5e31e23138898c41b->leave($__internal_a415c222e1abefaf10667f946239814ade37d8c683d14ff5e31e23138898c41b_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0d889dbe34896b5789dca72a4fcbb141de2eb57f63a24383475912f7aaab7fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d889dbe34896b5789dca72a4fcbb141de2eb57f63a24383475912f7aaab7fce->enter($__internal_0d889dbe34896b5789dca72a4fcbb141de2eb57f63a24383475912f7aaab7fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f3eeba993adfc22ed646758baa0e66a4cdfca7d47d6377ae458c62a266b4087b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eeba993adfc22ed646758baa0e66a4cdfca7d47d6377ae458c62a266b4087b->enter($__internal_f3eeba993adfc22ed646758baa0e66a4cdfca7d47d6377ae458c62a266b4087b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_f3eeba993adfc22ed646758baa0e66a4cdfca7d47d6377ae458c62a266b4087b->leave($__internal_f3eeba993adfc22ed646758baa0e66a4cdfca7d47d6377ae458c62a266b4087b_prof);

        
        $__internal_0d889dbe34896b5789dca72a4fcbb141de2eb57f63a24383475912f7aaab7fce->leave($__internal_0d889dbe34896b5789dca72a4fcbb141de2eb57f63a24383475912f7aaab7fce_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ea19a153e18ddfa01bf7de0e8065ad1584dc60df56041b2c64321bacb3346b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea19a153e18ddfa01bf7de0e8065ad1584dc60df56041b2c64321bacb3346b5->enter($__internal_2ea19a153e18ddfa01bf7de0e8065ad1584dc60df56041b2c64321bacb3346b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d17ec158894bd27dbc508d649bdb522876344364db90534fb5b717e2e4407774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17ec158894bd27dbc508d649bdb522876344364db90534fb5b717e2e4407774->enter($__internal_d17ec158894bd27dbc508d649bdb522876344364db90534fb5b717e2e4407774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_d17ec158894bd27dbc508d649bdb522876344364db90534fb5b717e2e4407774->leave($__internal_d17ec158894bd27dbc508d649bdb522876344364db90534fb5b717e2e4407774_prof);

        
        $__internal_2ea19a153e18ddfa01bf7de0e8065ad1584dc60df56041b2c64321bacb3346b5->leave($__internal_2ea19a153e18ddfa01bf7de0e8065ad1584dc60df56041b2c64321bacb3346b5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
