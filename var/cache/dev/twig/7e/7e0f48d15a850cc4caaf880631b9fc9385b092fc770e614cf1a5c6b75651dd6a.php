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
        $__internal_ad425f3daa47ef07b386c763ff14d4208862b6e61c72b925147147fc1a6b92c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad425f3daa47ef07b386c763ff14d4208862b6e61c72b925147147fc1a6b92c9->enter($__internal_ad425f3daa47ef07b386c763ff14d4208862b6e61c72b925147147fc1a6b92c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_90f987a3dac6e8993bf50c325f450b4b2505b23310862a0b3872a3d464e2a1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f987a3dac6e8993bf50c325f450b4b2505b23310862a0b3872a3d464e2a1fa->enter($__internal_90f987a3dac6e8993bf50c325f450b4b2505b23310862a0b3872a3d464e2a1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_f3804bdf0e4e3e7c1dfabc40bab55b1bf3d41c081cac670a7a0f172156a0b32a"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_f3804bdf0e4e3e7c1dfabc40bab55b1bf3d41c081cac670a7a0f172156a0b32a"] ?? $this->getContext($context, "__internal_f3804bdf0e4e3e7c1dfabc40bab55b1bf3d41c081cac670a7a0f172156a0b32a"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_f3804bdf0e4e3e7c1dfabc40bab55b1bf3d41c081cac670a7a0f172156a0b32a"] ?? $this->getContext($context, "__internal_f3804bdf0e4e3e7c1dfabc40bab55b1bf3d41c081cac670a7a0f172156a0b32a"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad425f3daa47ef07b386c763ff14d4208862b6e61c72b925147147fc1a6b92c9->leave($__internal_ad425f3daa47ef07b386c763ff14d4208862b6e61c72b925147147fc1a6b92c9_prof);

        
        $__internal_90f987a3dac6e8993bf50c325f450b4b2505b23310862a0b3872a3d464e2a1fa->leave($__internal_90f987a3dac6e8993bf50c325f450b4b2505b23310862a0b3872a3d464e2a1fa_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_60682b0726631593553d1d2a35ec959eaf5335397b355e871474c6bc2209f566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60682b0726631593553d1d2a35ec959eaf5335397b355e871474c6bc2209f566->enter($__internal_60682b0726631593553d1d2a35ec959eaf5335397b355e871474c6bc2209f566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_841a903e9998cdc2bbe37f155d39e6bdedcc4385eb1a90dd49f3699a01281fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841a903e9998cdc2bbe37f155d39e6bdedcc4385eb1a90dd49f3699a01281fa8->enter($__internal_841a903e9998cdc2bbe37f155d39e6bdedcc4385eb1a90dd49f3699a01281fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_841a903e9998cdc2bbe37f155d39e6bdedcc4385eb1a90dd49f3699a01281fa8->leave($__internal_841a903e9998cdc2bbe37f155d39e6bdedcc4385eb1a90dd49f3699a01281fa8_prof);

        
        $__internal_60682b0726631593553d1d2a35ec959eaf5335397b355e871474c6bc2209f566->leave($__internal_60682b0726631593553d1d2a35ec959eaf5335397b355e871474c6bc2209f566_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_61484350cb9a7783e2b1d8e5a83ad3b1de8e3d4fe7c8f68eb20adc0af0524409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61484350cb9a7783e2b1d8e5a83ad3b1de8e3d4fe7c8f68eb20adc0af0524409->enter($__internal_61484350cb9a7783e2b1d8e5a83ad3b1de8e3d4fe7c8f68eb20adc0af0524409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_b291bd26333578e58d2d732edbac1ab63746c91c226bfdb56ca2fae76ff8a0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b291bd26333578e58d2d732edbac1ab63746c91c226bfdb56ca2fae76ff8a0c1->enter($__internal_b291bd26333578e58d2d732edbac1ab63746c91c226bfdb56ca2fae76ff8a0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_b291bd26333578e58d2d732edbac1ab63746c91c226bfdb56ca2fae76ff8a0c1->leave($__internal_b291bd26333578e58d2d732edbac1ab63746c91c226bfdb56ca2fae76ff8a0c1_prof);

        
        $__internal_61484350cb9a7783e2b1d8e5a83ad3b1de8e3d4fe7c8f68eb20adc0af0524409->leave($__internal_61484350cb9a7783e2b1d8e5a83ad3b1de8e3d4fe7c8f68eb20adc0af0524409_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_07f3523a6d2e51577fdf6d200d875b378b44214eb9cc5d25584da7b5c218da47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f3523a6d2e51577fdf6d200d875b378b44214eb9cc5d25584da7b5c218da47->enter($__internal_07f3523a6d2e51577fdf6d200d875b378b44214eb9cc5d25584da7b5c218da47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_f25ef45d3083c30bb626602fc0ef22efabafeedbc9ac529f168222c4e840b51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25ef45d3083c30bb626602fc0ef22efabafeedbc9ac529f168222c4e840b51c->enter($__internal_f25ef45d3083c30bb626602fc0ef22efabafeedbc9ac529f168222c4e840b51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_f3804bdf0e4e3e7c1dfabc40bab55b1bf3d41c081cac670a7a0f172156a0b32a"] ?? $this->getContext($context, "__internal_f3804bdf0e4e3e7c1dfabc40bab55b1bf3d41c081cac670a7a0f172156a0b32a")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f25ef45d3083c30bb626602fc0ef22efabafeedbc9ac529f168222c4e840b51c->leave($__internal_f25ef45d3083c30bb626602fc0ef22efabafeedbc9ac529f168222c4e840b51c_prof);

        
        $__internal_07f3523a6d2e51577fdf6d200d875b378b44214eb9cc5d25584da7b5c218da47->leave($__internal_07f3523a6d2e51577fdf6d200d875b378b44214eb9cc5d25584da7b5c218da47_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_06b24aaf8c6a6d3fbaa003e4eab4bc45ebd41def843e7cd6cf193be29ea19e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b24aaf8c6a6d3fbaa003e4eab4bc45ebd41def843e7cd6cf193be29ea19e70->enter($__internal_06b24aaf8c6a6d3fbaa003e4eab4bc45ebd41def843e7cd6cf193be29ea19e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b53aa6cd2076f97e1c538ee24c3292996c7e9c03088e51bb373c5e8cb21efe7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53aa6cd2076f97e1c538ee24c3292996c7e9c03088e51bb373c5e8cb21efe7a->enter($__internal_b53aa6cd2076f97e1c538ee24c3292996c7e9c03088e51bb373c5e8cb21efe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_b53aa6cd2076f97e1c538ee24c3292996c7e9c03088e51bb373c5e8cb21efe7a->leave($__internal_b53aa6cd2076f97e1c538ee24c3292996c7e9c03088e51bb373c5e8cb21efe7a_prof);

        
        $__internal_06b24aaf8c6a6d3fbaa003e4eab4bc45ebd41def843e7cd6cf193be29ea19e70->leave($__internal_06b24aaf8c6a6d3fbaa003e4eab4bc45ebd41def843e7cd6cf193be29ea19e70_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_e8173b5c00c53ef19bb3725189f830617436fc5ab2abb4c2d6063d4e73e93260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8173b5c00c53ef19bb3725189f830617436fc5ab2abb4c2d6063d4e73e93260->enter($__internal_e8173b5c00c53ef19bb3725189f830617436fc5ab2abb4c2d6063d4e73e93260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_c38250aebc140e7ea1ef9e46e22a311c1b996320c9e7e52dfce3e0d2ca07173e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38250aebc140e7ea1ef9e46e22a311c1b996320c9e7e52dfce3e0d2ca07173e->enter($__internal_c38250aebc140e7ea1ef9e46e22a311c1b996320c9e7e52dfce3e0d2ca07173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_c38250aebc140e7ea1ef9e46e22a311c1b996320c9e7e52dfce3e0d2ca07173e->leave($__internal_c38250aebc140e7ea1ef9e46e22a311c1b996320c9e7e52dfce3e0d2ca07173e_prof);

        
        $__internal_e8173b5c00c53ef19bb3725189f830617436fc5ab2abb4c2d6063d4e73e93260->leave($__internal_e8173b5c00c53ef19bb3725189f830617436fc5ab2abb4c2d6063d4e73e93260_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_aa8d0e6fa872a1d6c7f2c9f7c53d8f9e4af5b747ba45bcb5620fb39f137128c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8d0e6fa872a1d6c7f2c9f7c53d8f9e4af5b747ba45bcb5620fb39f137128c1->enter($__internal_aa8d0e6fa872a1d6c7f2c9f7c53d8f9e4af5b747ba45bcb5620fb39f137128c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_fa3448698fed9c65cc741f8752cbd7aa3f0ca9c15f69bf12475f77c367bea75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3448698fed9c65cc741f8752cbd7aa3f0ca9c15f69bf12475f77c367bea75d->enter($__internal_fa3448698fed9c65cc741f8752cbd7aa3f0ca9c15f69bf12475f77c367bea75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_fa3448698fed9c65cc741f8752cbd7aa3f0ca9c15f69bf12475f77c367bea75d->leave($__internal_fa3448698fed9c65cc741f8752cbd7aa3f0ca9c15f69bf12475f77c367bea75d_prof);

        
        $__internal_aa8d0e6fa872a1d6c7f2c9f7c53d8f9e4af5b747ba45bcb5620fb39f137128c1->leave($__internal_aa8d0e6fa872a1d6c7f2c9f7c53d8f9e4af5b747ba45bcb5620fb39f137128c1_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8b9555c71b32d97a3231a762b7ef6d26f897da83226033d5e140408a4b48b515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9555c71b32d97a3231a762b7ef6d26f897da83226033d5e140408a4b48b515->enter($__internal_8b9555c71b32d97a3231a762b7ef6d26f897da83226033d5e140408a4b48b515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_4629b767a73c249001758fdb5e3f5845733988029957505cfa473c040f06aaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4629b767a73c249001758fdb5e3f5845733988029957505cfa473c040f06aaf9->enter($__internal_4629b767a73c249001758fdb5e3f5845733988029957505cfa473c040f06aaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_4629b767a73c249001758fdb5e3f5845733988029957505cfa473c040f06aaf9->leave($__internal_4629b767a73c249001758fdb5e3f5845733988029957505cfa473c040f06aaf9_prof);

        
        $__internal_8b9555c71b32d97a3231a762b7ef6d26f897da83226033d5e140408a4b48b515->leave($__internal_8b9555c71b32d97a3231a762b7ef6d26f897da83226033d5e140408a4b48b515_prof);

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
