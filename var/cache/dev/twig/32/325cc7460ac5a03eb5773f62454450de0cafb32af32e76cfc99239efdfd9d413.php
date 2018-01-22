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
        $__internal_a26c932d0f4c70597f2eba497a48f1f392dcaead6f816ee2b99a3078117e1d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26c932d0f4c70597f2eba497a48f1f392dcaead6f816ee2b99a3078117e1d81->enter($__internal_a26c932d0f4c70597f2eba497a48f1f392dcaead6f816ee2b99a3078117e1d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_dc8d352fcf262c45ad114b99650910dc1400be9d290bff096be9a797abdbdbe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8d352fcf262c45ad114b99650910dc1400be9d290bff096be9a797abdbdbe7->enter($__internal_dc8d352fcf262c45ad114b99650910dc1400be9d290bff096be9a797abdbdbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26c932d0f4c70597f2eba497a48f1f392dcaead6f816ee2b99a3078117e1d81->leave($__internal_a26c932d0f4c70597f2eba497a48f1f392dcaead6f816ee2b99a3078117e1d81_prof);

        
        $__internal_dc8d352fcf262c45ad114b99650910dc1400be9d290bff096be9a797abdbdbe7->leave($__internal_dc8d352fcf262c45ad114b99650910dc1400be9d290bff096be9a797abdbdbe7_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_fc5a900f9f2b3d5ea5fc27cd96ef26d011f09332a971f9c3f5d9c5c6ac774efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5a900f9f2b3d5ea5fc27cd96ef26d011f09332a971f9c3f5d9c5c6ac774efd->enter($__internal_fc5a900f9f2b3d5ea5fc27cd96ef26d011f09332a971f9c3f5d9c5c6ac774efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_c6c2d09f9d0d19edb8863bcc70c53bce36681da652b58f95ed2eaaae255e6c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c2d09f9d0d19edb8863bcc70c53bce36681da652b58f95ed2eaaae255e6c47->enter($__internal_c6c2d09f9d0d19edb8863bcc70c53bce36681da652b58f95ed2eaaae255e6c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_c6c2d09f9d0d19edb8863bcc70c53bce36681da652b58f95ed2eaaae255e6c47->leave($__internal_c6c2d09f9d0d19edb8863bcc70c53bce36681da652b58f95ed2eaaae255e6c47_prof);

        
        $__internal_fc5a900f9f2b3d5ea5fc27cd96ef26d011f09332a971f9c3f5d9c5c6ac774efd->leave($__internal_fc5a900f9f2b3d5ea5fc27cd96ef26d011f09332a971f9c3f5d9c5c6ac774efd_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a325da227bb7c1b18bbdfb63b66825d2bb895334191bb601093e9ee777457cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a325da227bb7c1b18bbdfb63b66825d2bb895334191bb601093e9ee777457cb5->enter($__internal_a325da227bb7c1b18bbdfb63b66825d2bb895334191bb601093e9ee777457cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f48ca92d8b76d82544099dcb55ed16cb39d478f99f0132fae64c684ff208e847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48ca92d8b76d82544099dcb55ed16cb39d478f99f0132fae64c684ff208e847->enter($__internal_f48ca92d8b76d82544099dcb55ed16cb39d478f99f0132fae64c684ff208e847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_f48ca92d8b76d82544099dcb55ed16cb39d478f99f0132fae64c684ff208e847->leave($__internal_f48ca92d8b76d82544099dcb55ed16cb39d478f99f0132fae64c684ff208e847_prof);

        
        $__internal_a325da227bb7c1b18bbdfb63b66825d2bb895334191bb601093e9ee777457cb5->leave($__internal_a325da227bb7c1b18bbdfb63b66825d2bb895334191bb601093e9ee777457cb5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f11355459c0f7561b00973c81d8181a704b3953d35793a02109fbc52d2096764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11355459c0f7561b00973c81d8181a704b3953d35793a02109fbc52d2096764->enter($__internal_f11355459c0f7561b00973c81d8181a704b3953d35793a02109fbc52d2096764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_34ade882ab8829165f5c4434c3bd784635f4a86d691922c9655082f32f322b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ade882ab8829165f5c4434c3bd784635f4a86d691922c9655082f32f322b5d->enter($__internal_34ade882ab8829165f5c4434c3bd784635f4a86d691922c9655082f32f322b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_34ade882ab8829165f5c4434c3bd784635f4a86d691922c9655082f32f322b5d->leave($__internal_34ade882ab8829165f5c4434c3bd784635f4a86d691922c9655082f32f322b5d_prof);

        
        $__internal_f11355459c0f7561b00973c81d8181a704b3953d35793a02109fbc52d2096764->leave($__internal_f11355459c0f7561b00973c81d8181a704b3953d35793a02109fbc52d2096764_prof);

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
