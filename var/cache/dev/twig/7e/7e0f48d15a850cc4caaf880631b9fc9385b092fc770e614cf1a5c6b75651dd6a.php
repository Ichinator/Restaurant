<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_cb6dd263d88f706af53e611e386ff166999cf10beaa67f5e7cb22ca75f5430f8 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f93d10fb84aab028e6919ee7330505882ccacb4add278c47b96bd0f2772b64dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93d10fb84aab028e6919ee7330505882ccacb4add278c47b96bd0f2772b64dc->enter($__internal_f93d10fb84aab028e6919ee7330505882ccacb4add278c47b96bd0f2772b64dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_1ed2f1d7779b5b6b96ccf4ce49bfbc473f993f9e419c2b712285d809a032eb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed2f1d7779b5b6b96ccf4ce49bfbc473f993f9e419c2b712285d809a032eb02->enter($__internal_1ed2f1d7779b5b6b96ccf4ce49bfbc473f993f9e419c2b712285d809a032eb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_aa2b20b8b4780c260384a4cd38d58943b097680c9372862cdbec4a251f277dbc"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_aa2b20b8b4780c260384a4cd38d58943b097680c9372862cdbec4a251f277dbc"] ?? $this->getContext($context, "__internal_aa2b20b8b4780c260384a4cd38d58943b097680c9372862cdbec4a251f277dbc"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_aa2b20b8b4780c260384a4cd38d58943b097680c9372862cdbec4a251f277dbc"] ?? $this->getContext($context, "__internal_aa2b20b8b4780c260384a4cd38d58943b097680c9372862cdbec4a251f277dbc"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93d10fb84aab028e6919ee7330505882ccacb4add278c47b96bd0f2772b64dc->leave($__internal_f93d10fb84aab028e6919ee7330505882ccacb4add278c47b96bd0f2772b64dc_prof);

        
        $__internal_1ed2f1d7779b5b6b96ccf4ce49bfbc473f993f9e419c2b712285d809a032eb02->leave($__internal_1ed2f1d7779b5b6b96ccf4ce49bfbc473f993f9e419c2b712285d809a032eb02_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_218375339a1f1b1b9913287c3f5cb10e3db3e788503b2228466728be0afcc1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218375339a1f1b1b9913287c3f5cb10e3db3e788503b2228466728be0afcc1bc->enter($__internal_218375339a1f1b1b9913287c3f5cb10e3db3e788503b2228466728be0afcc1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_3ecf671e54cd1f7bfdf5d9d36444cfa7bf93adf2470451c7d63e49fcf40682f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecf671e54cd1f7bfdf5d9d36444cfa7bf93adf2470451c7d63e49fcf40682f9->enter($__internal_3ecf671e54cd1f7bfdf5d9d36444cfa7bf93adf2470451c7d63e49fcf40682f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_3ecf671e54cd1f7bfdf5d9d36444cfa7bf93adf2470451c7d63e49fcf40682f9->leave($__internal_3ecf671e54cd1f7bfdf5d9d36444cfa7bf93adf2470451c7d63e49fcf40682f9_prof);

        
        $__internal_218375339a1f1b1b9913287c3f5cb10e3db3e788503b2228466728be0afcc1bc->leave($__internal_218375339a1f1b1b9913287c3f5cb10e3db3e788503b2228466728be0afcc1bc_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4d6134d18a3a9efe29e8c39ee3b9f299c0fa914d6877459a7362ebefa5a8703c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6134d18a3a9efe29e8c39ee3b9f299c0fa914d6877459a7362ebefa5a8703c->enter($__internal_4d6134d18a3a9efe29e8c39ee3b9f299c0fa914d6877459a7362ebefa5a8703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_5b4dce303d40216f750b13dabc4fec116c4246ce736c41bcf9cb812403a47fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4dce303d40216f750b13dabc4fec116c4246ce736c41bcf9cb812403a47fe5->enter($__internal_5b4dce303d40216f750b13dabc4fec116c4246ce736c41bcf9cb812403a47fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_5b4dce303d40216f750b13dabc4fec116c4246ce736c41bcf9cb812403a47fe5->leave($__internal_5b4dce303d40216f750b13dabc4fec116c4246ce736c41bcf9cb812403a47fe5_prof);

        
        $__internal_4d6134d18a3a9efe29e8c39ee3b9f299c0fa914d6877459a7362ebefa5a8703c->leave($__internal_4d6134d18a3a9efe29e8c39ee3b9f299c0fa914d6877459a7362ebefa5a8703c_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e8018e5e7ed8ff2c1c5d7a24c6e7d692c7f182acbe4f72ff023397af8618312f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8018e5e7ed8ff2c1c5d7a24c6e7d692c7f182acbe4f72ff023397af8618312f->enter($__internal_e8018e5e7ed8ff2c1c5d7a24c6e7d692c7f182acbe4f72ff023397af8618312f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_1ec836fc3362f18ac97b4ebe4fa6a20a5da326822e533060f4dd9b383db2cf4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec836fc3362f18ac97b4ebe4fa6a20a5da326822e533060f4dd9b383db2cf4c->enter($__internal_1ec836fc3362f18ac97b4ebe4fa6a20a5da326822e533060f4dd9b383db2cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_aa2b20b8b4780c260384a4cd38d58943b097680c9372862cdbec4a251f277dbc"] ?? $this->getContext($context, "__internal_aa2b20b8b4780c260384a4cd38d58943b097680c9372862cdbec4a251f277dbc")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1ec836fc3362f18ac97b4ebe4fa6a20a5da326822e533060f4dd9b383db2cf4c->leave($__internal_1ec836fc3362f18ac97b4ebe4fa6a20a5da326822e533060f4dd9b383db2cf4c_prof);

        
        $__internal_e8018e5e7ed8ff2c1c5d7a24c6e7d692c7f182acbe4f72ff023397af8618312f->leave($__internal_e8018e5e7ed8ff2c1c5d7a24c6e7d692c7f182acbe4f72ff023397af8618312f_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_a39af1a8f9f82b0823d04a890a9e105df802aa06a85456ac76201e829773f3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39af1a8f9f82b0823d04a890a9e105df802aa06a85456ac76201e829773f3ad->enter($__internal_a39af1a8f9f82b0823d04a890a9e105df802aa06a85456ac76201e829773f3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_58269f2ffb65500acde5cf60cc1c0067346504a923572047066e13a899372f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58269f2ffb65500acde5cf60cc1c0067346504a923572047066e13a899372f03->enter($__internal_58269f2ffb65500acde5cf60cc1c0067346504a923572047066e13a899372f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_58269f2ffb65500acde5cf60cc1c0067346504a923572047066e13a899372f03->leave($__internal_58269f2ffb65500acde5cf60cc1c0067346504a923572047066e13a899372f03_prof);

        
        $__internal_a39af1a8f9f82b0823d04a890a9e105df802aa06a85456ac76201e829773f3ad->leave($__internal_a39af1a8f9f82b0823d04a890a9e105df802aa06a85456ac76201e829773f3ad_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_41a9aac1438bf1af1d16e1a2bb7dfb0a9100bc0c09e89a80deab39526bee78ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a9aac1438bf1af1d16e1a2bb7dfb0a9100bc0c09e89a80deab39526bee78ac->enter($__internal_41a9aac1438bf1af1d16e1a2bb7dfb0a9100bc0c09e89a80deab39526bee78ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_430a1556c31d2e3cdf75d5477e3516b570e6cbac1cd9af827062b51415c90fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430a1556c31d2e3cdf75d5477e3516b570e6cbac1cd9af827062b51415c90fdd->enter($__internal_430a1556c31d2e3cdf75d5477e3516b570e6cbac1cd9af827062b51415c90fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_430a1556c31d2e3cdf75d5477e3516b570e6cbac1cd9af827062b51415c90fdd->leave($__internal_430a1556c31d2e3cdf75d5477e3516b570e6cbac1cd9af827062b51415c90fdd_prof);

        
        $__internal_41a9aac1438bf1af1d16e1a2bb7dfb0a9100bc0c09e89a80deab39526bee78ac->leave($__internal_41a9aac1438bf1af1d16e1a2bb7dfb0a9100bc0c09e89a80deab39526bee78ac_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_e00a7619fd35d0ca64eebc9d8693713542020cd5033ca9cf6bdaf261e49ea293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00a7619fd35d0ca64eebc9d8693713542020cd5033ca9cf6bdaf261e49ea293->enter($__internal_e00a7619fd35d0ca64eebc9d8693713542020cd5033ca9cf6bdaf261e49ea293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_3d2c18cf3097d8ed00b4a8e4b03b3b8b16f49072b4de10423c864705af3ea2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2c18cf3097d8ed00b4a8e4b03b3b8b16f49072b4de10423c864705af3ea2d0->enter($__internal_3d2c18cf3097d8ed00b4a8e4b03b3b8b16f49072b4de10423c864705af3ea2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_3d2c18cf3097d8ed00b4a8e4b03b3b8b16f49072b4de10423c864705af3ea2d0->leave($__internal_3d2c18cf3097d8ed00b4a8e4b03b3b8b16f49072b4de10423c864705af3ea2d0_prof);

        
        $__internal_e00a7619fd35d0ca64eebc9d8693713542020cd5033ca9cf6bdaf261e49ea293->leave($__internal_e00a7619fd35d0ca64eebc9d8693713542020cd5033ca9cf6bdaf261e49ea293_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_9521ff9d0b09382a941bce8aa3919b2407bced1f239eb23f605cc552af89cd52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9521ff9d0b09382a941bce8aa3919b2407bced1f239eb23f605cc552af89cd52->enter($__internal_9521ff9d0b09382a941bce8aa3919b2407bced1f239eb23f605cc552af89cd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_fc78847a20bb5062c81587130cae6ac5217f2267830edbd1dcd096c82865f191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc78847a20bb5062c81587130cae6ac5217f2267830edbd1dcd096c82865f191->enter($__internal_fc78847a20bb5062c81587130cae6ac5217f2267830edbd1dcd096c82865f191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_fc78847a20bb5062c81587130cae6ac5217f2267830edbd1dcd096c82865f191->leave($__internal_fc78847a20bb5062c81587130cae6ac5217f2267830edbd1dcd096c82865f191_prof);

        
        $__internal_9521ff9d0b09382a941bce8aa3919b2407bced1f239eb23f605cc552af89cd52->leave($__internal_9521ff9d0b09382a941bce8aa3919b2407bced1f239eb23f605cc552af89cd52_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
