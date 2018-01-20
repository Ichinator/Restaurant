<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_66f01fc28a965609fc8a6aa87dc8531704ec93398c249a86f0682abd0f22376f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2b1297e9fcfdc225f81e6cc52ae468231838fde86075c864124809281b664a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b1297e9fcfdc225f81e6cc52ae468231838fde86075c864124809281b664a7->enter($__internal_f2b1297e9fcfdc225f81e6cc52ae468231838fde86075c864124809281b664a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_a8255d814af3cb94e249e666d188d8d448cfffea75ed8aeaf96f781977b41991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8255d814af3cb94e249e666d188d8d448cfffea75ed8aeaf96f781977b41991->enter($__internal_a8255d814af3cb94e249e666d188d8d448cfffea75ed8aeaf96f781977b41991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_45b0e13e09439d3f28a5c6579b9e061b6654a61d1c66f103f65e67db69ae89af"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_45b0e13e09439d3f28a5c6579b9e061b6654a61d1c66f103f65e67db69ae89af"] ?? $this->getContext($context, "__internal_45b0e13e09439d3f28a5c6579b9e061b6654a61d1c66f103f65e67db69ae89af"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_45b0e13e09439d3f28a5c6579b9e061b6654a61d1c66f103f65e67db69ae89af"] ?? $this->getContext($context, "__internal_45b0e13e09439d3f28a5c6579b9e061b6654a61d1c66f103f65e67db69ae89af"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b1297e9fcfdc225f81e6cc52ae468231838fde86075c864124809281b664a7->leave($__internal_f2b1297e9fcfdc225f81e6cc52ae468231838fde86075c864124809281b664a7_prof);

        
        $__internal_a8255d814af3cb94e249e666d188d8d448cfffea75ed8aeaf96f781977b41991->leave($__internal_a8255d814af3cb94e249e666d188d8d448cfffea75ed8aeaf96f781977b41991_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_66cac9596ade53841d0bde8932a10b002ba6d71bbbfe061760ca20e3e8615c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66cac9596ade53841d0bde8932a10b002ba6d71bbbfe061760ca20e3e8615c51->enter($__internal_66cac9596ade53841d0bde8932a10b002ba6d71bbbfe061760ca20e3e8615c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_c40ea8d50cc2807b56974d7b1daa0636fad1f3302d9054692116050dc5fc28c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40ea8d50cc2807b56974d7b1daa0636fad1f3302d9054692116050dc5fc28c0->enter($__internal_c40ea8d50cc2807b56974d7b1daa0636fad1f3302d9054692116050dc5fc28c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_c40ea8d50cc2807b56974d7b1daa0636fad1f3302d9054692116050dc5fc28c0->leave($__internal_c40ea8d50cc2807b56974d7b1daa0636fad1f3302d9054692116050dc5fc28c0_prof);

        
        $__internal_66cac9596ade53841d0bde8932a10b002ba6d71bbbfe061760ca20e3e8615c51->leave($__internal_66cac9596ade53841d0bde8932a10b002ba6d71bbbfe061760ca20e3e8615c51_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_41bb216c2cff0ebeb54d1dc52abc9b02f95cd4e3c9e3bae502e8f17ffe461fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bb216c2cff0ebeb54d1dc52abc9b02f95cd4e3c9e3bae502e8f17ffe461fcc->enter($__internal_41bb216c2cff0ebeb54d1dc52abc9b02f95cd4e3c9e3bae502e8f17ffe461fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2c6b03e7b04a2ecf2e9b5addbdc5fb2a4bf358b1043220074dad6b3f3dde9d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6b03e7b04a2ecf2e9b5addbdc5fb2a4bf358b1043220074dad6b3f3dde9d8d->enter($__internal_2c6b03e7b04a2ecf2e9b5addbdc5fb2a4bf358b1043220074dad6b3f3dde9d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_2c6b03e7b04a2ecf2e9b5addbdc5fb2a4bf358b1043220074dad6b3f3dde9d8d->leave($__internal_2c6b03e7b04a2ecf2e9b5addbdc5fb2a4bf358b1043220074dad6b3f3dde9d8d_prof);

        
        $__internal_41bb216c2cff0ebeb54d1dc52abc9b02f95cd4e3c9e3bae502e8f17ffe461fcc->leave($__internal_41bb216c2cff0ebeb54d1dc52abc9b02f95cd4e3c9e3bae502e8f17ffe461fcc_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_97f48fe55d434a2f6760c557a9e2a8a520a8835c3113655dc396f65795fe4344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f48fe55d434a2f6760c557a9e2a8a520a8835c3113655dc396f65795fe4344->enter($__internal_97f48fe55d434a2f6760c557a9e2a8a520a8835c3113655dc396f65795fe4344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_9bfccea26dfc454aeb7ad192706eabaa9a88f2b06fc9cf953b65f1711550ae04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfccea26dfc454aeb7ad192706eabaa9a88f2b06fc9cf953b65f1711550ae04->enter($__internal_9bfccea26dfc454aeb7ad192706eabaa9a88f2b06fc9cf953b65f1711550ae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_45b0e13e09439d3f28a5c6579b9e061b6654a61d1c66f103f65e67db69ae89af"] ?? $this->getContext($context, "__internal_45b0e13e09439d3f28a5c6579b9e061b6654a61d1c66f103f65e67db69ae89af")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9bfccea26dfc454aeb7ad192706eabaa9a88f2b06fc9cf953b65f1711550ae04->leave($__internal_9bfccea26dfc454aeb7ad192706eabaa9a88f2b06fc9cf953b65f1711550ae04_prof);

        
        $__internal_97f48fe55d434a2f6760c557a9e2a8a520a8835c3113655dc396f65795fe4344->leave($__internal_97f48fe55d434a2f6760c557a9e2a8a520a8835c3113655dc396f65795fe4344_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_920be416da3c0bb545325380c8503f736b5aae5a5a8f8c181d9fc1d7d525dcba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920be416da3c0bb545325380c8503f736b5aae5a5a8f8c181d9fc1d7d525dcba->enter($__internal_920be416da3c0bb545325380c8503f736b5aae5a5a8f8c181d9fc1d7d525dcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0bca7735d54a82bcf80edd20ef777aea52cdc176377deb5907bbc262d1f0c9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bca7735d54a82bcf80edd20ef777aea52cdc176377deb5907bbc262d1f0c9c6->enter($__internal_0bca7735d54a82bcf80edd20ef777aea52cdc176377deb5907bbc262d1f0c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_0bca7735d54a82bcf80edd20ef777aea52cdc176377deb5907bbc262d1f0c9c6->leave($__internal_0bca7735d54a82bcf80edd20ef777aea52cdc176377deb5907bbc262d1f0c9c6_prof);

        
        $__internal_920be416da3c0bb545325380c8503f736b5aae5a5a8f8c181d9fc1d7d525dcba->leave($__internal_920be416da3c0bb545325380c8503f736b5aae5a5a8f8c181d9fc1d7d525dcba_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_6c2002e1c87ff0d1ac334880c7264c31f82f8a5362462a611ff43af6e9ce00b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2002e1c87ff0d1ac334880c7264c31f82f8a5362462a611ff43af6e9ce00b5->enter($__internal_6c2002e1c87ff0d1ac334880c7264c31f82f8a5362462a611ff43af6e9ce00b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_1c357fe28485e1ad40023e471ca15f4f54f617e9d35a8e25ef68d1479b7bb390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c357fe28485e1ad40023e471ca15f4f54f617e9d35a8e25ef68d1479b7bb390->enter($__internal_1c357fe28485e1ad40023e471ca15f4f54f617e9d35a8e25ef68d1479b7bb390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_1c357fe28485e1ad40023e471ca15f4f54f617e9d35a8e25ef68d1479b7bb390->leave($__internal_1c357fe28485e1ad40023e471ca15f4f54f617e9d35a8e25ef68d1479b7bb390_prof);

        
        $__internal_6c2002e1c87ff0d1ac334880c7264c31f82f8a5362462a611ff43af6e9ce00b5->leave($__internal_6c2002e1c87ff0d1ac334880c7264c31f82f8a5362462a611ff43af6e9ce00b5_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6a4bcb3bb6a7ce04db2a83c78e538f2f8150ef97bb94d8de0fb448eaf17d25d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4bcb3bb6a7ce04db2a83c78e538f2f8150ef97bb94d8de0fb448eaf17d25d5->enter($__internal_6a4bcb3bb6a7ce04db2a83c78e538f2f8150ef97bb94d8de0fb448eaf17d25d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_66c981089350b3f298c41bf7024cb7103189165e3a07239c0344c067a97a0dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c981089350b3f298c41bf7024cb7103189165e3a07239c0344c067a97a0dc3->enter($__internal_66c981089350b3f298c41bf7024cb7103189165e3a07239c0344c067a97a0dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_66c981089350b3f298c41bf7024cb7103189165e3a07239c0344c067a97a0dc3->leave($__internal_66c981089350b3f298c41bf7024cb7103189165e3a07239c0344c067a97a0dc3_prof);

        
        $__internal_6a4bcb3bb6a7ce04db2a83c78e538f2f8150ef97bb94d8de0fb448eaf17d25d5->leave($__internal_6a4bcb3bb6a7ce04db2a83c78e538f2f8150ef97bb94d8de0fb448eaf17d25d5_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
