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
        $__internal_e0888bded6eb4cd37bff540a1f35636cf6e8015de448031f096e18ad970c1703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0888bded6eb4cd37bff540a1f35636cf6e8015de448031f096e18ad970c1703->enter($__internal_e0888bded6eb4cd37bff540a1f35636cf6e8015de448031f096e18ad970c1703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_f384f9863c2bd0de72096ab2a22427b948c4b68c267405297bd8d75ca78e63a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f384f9863c2bd0de72096ab2a22427b948c4b68c267405297bd8d75ca78e63a0->enter($__internal_f384f9863c2bd0de72096ab2a22427b948c4b68c267405297bd8d75ca78e63a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0888bded6eb4cd37bff540a1f35636cf6e8015de448031f096e18ad970c1703->leave($__internal_e0888bded6eb4cd37bff540a1f35636cf6e8015de448031f096e18ad970c1703_prof);

        
        $__internal_f384f9863c2bd0de72096ab2a22427b948c4b68c267405297bd8d75ca78e63a0->leave($__internal_f384f9863c2bd0de72096ab2a22427b948c4b68c267405297bd8d75ca78e63a0_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_cc5180a4e752fc3c1c7606222847134319c9951934d247a0e65a442ca06d2f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5180a4e752fc3c1c7606222847134319c9951934d247a0e65a442ca06d2f56->enter($__internal_cc5180a4e752fc3c1c7606222847134319c9951934d247a0e65a442ca06d2f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_98b22b96f87f9ad499bdfd7dc019ab62ce4741524705dd2824d53bacca7445c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b22b96f87f9ad499bdfd7dc019ab62ce4741524705dd2824d53bacca7445c4->enter($__internal_98b22b96f87f9ad499bdfd7dc019ab62ce4741524705dd2824d53bacca7445c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_98b22b96f87f9ad499bdfd7dc019ab62ce4741524705dd2824d53bacca7445c4->leave($__internal_98b22b96f87f9ad499bdfd7dc019ab62ce4741524705dd2824d53bacca7445c4_prof);

        
        $__internal_cc5180a4e752fc3c1c7606222847134319c9951934d247a0e65a442ca06d2f56->leave($__internal_cc5180a4e752fc3c1c7606222847134319c9951934d247a0e65a442ca06d2f56_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d342249a1fe7369b78f5f272e2c674de8218f08deaf77f4200e375d526e27189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d342249a1fe7369b78f5f272e2c674de8218f08deaf77f4200e375d526e27189->enter($__internal_d342249a1fe7369b78f5f272e2c674de8218f08deaf77f4200e375d526e27189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6c4af5860262d89144a96a642f7c0a06a046cd08d790896718206cbed44fab21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4af5860262d89144a96a642f7c0a06a046cd08d790896718206cbed44fab21->enter($__internal_6c4af5860262d89144a96a642f7c0a06a046cd08d790896718206cbed44fab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_6c4af5860262d89144a96a642f7c0a06a046cd08d790896718206cbed44fab21->leave($__internal_6c4af5860262d89144a96a642f7c0a06a046cd08d790896718206cbed44fab21_prof);

        
        $__internal_d342249a1fe7369b78f5f272e2c674de8218f08deaf77f4200e375d526e27189->leave($__internal_d342249a1fe7369b78f5f272e2c674de8218f08deaf77f4200e375d526e27189_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c489731e95b1b126b5c3112374a756d60376e1c82412b8e8c81ea920dbf3d79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c489731e95b1b126b5c3112374a756d60376e1c82412b8e8c81ea920dbf3d79c->enter($__internal_c489731e95b1b126b5c3112374a756d60376e1c82412b8e8c81ea920dbf3d79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f4e95ddacaaf3b4039547cf67e3e6d2230ba6d57771f93ceccc05ee742e99486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e95ddacaaf3b4039547cf67e3e6d2230ba6d57771f93ceccc05ee742e99486->enter($__internal_f4e95ddacaaf3b4039547cf67e3e6d2230ba6d57771f93ceccc05ee742e99486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f4e95ddacaaf3b4039547cf67e3e6d2230ba6d57771f93ceccc05ee742e99486->leave($__internal_f4e95ddacaaf3b4039547cf67e3e6d2230ba6d57771f93ceccc05ee742e99486_prof);

        
        $__internal_c489731e95b1b126b5c3112374a756d60376e1c82412b8e8c81ea920dbf3d79c->leave($__internal_c489731e95b1b126b5c3112374a756d60376e1c82412b8e8c81ea920dbf3d79c_prof);

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
