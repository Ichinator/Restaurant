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
        $__internal_d6b7c0fb052b22a592c92a51fa487335177c8279652991db957e073f341e9a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b7c0fb052b22a592c92a51fa487335177c8279652991db957e073f341e9a1d->enter($__internal_d6b7c0fb052b22a592c92a51fa487335177c8279652991db957e073f341e9a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_4883e2ca94a668790cee1fe23f4ae7fb3b431f372a4c630fc74e30db8652039a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4883e2ca94a668790cee1fe23f4ae7fb3b431f372a4c630fc74e30db8652039a->enter($__internal_4883e2ca94a668790cee1fe23f4ae7fb3b431f372a4c630fc74e30db8652039a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_02a503390edbe2a119c343246b98a2a455fc080829b671613c93322a6443a4ac"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_02a503390edbe2a119c343246b98a2a455fc080829b671613c93322a6443a4ac"] ?? $this->getContext($context, "__internal_02a503390edbe2a119c343246b98a2a455fc080829b671613c93322a6443a4ac"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_02a503390edbe2a119c343246b98a2a455fc080829b671613c93322a6443a4ac"] ?? $this->getContext($context, "__internal_02a503390edbe2a119c343246b98a2a455fc080829b671613c93322a6443a4ac"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b7c0fb052b22a592c92a51fa487335177c8279652991db957e073f341e9a1d->leave($__internal_d6b7c0fb052b22a592c92a51fa487335177c8279652991db957e073f341e9a1d_prof);

        
        $__internal_4883e2ca94a668790cee1fe23f4ae7fb3b431f372a4c630fc74e30db8652039a->leave($__internal_4883e2ca94a668790cee1fe23f4ae7fb3b431f372a4c630fc74e30db8652039a_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e96e9d60fd00108de4608ff9c0d37fdb2f59f14b6bc1b82be0250fb240e1a072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96e9d60fd00108de4608ff9c0d37fdb2f59f14b6bc1b82be0250fb240e1a072->enter($__internal_e96e9d60fd00108de4608ff9c0d37fdb2f59f14b6bc1b82be0250fb240e1a072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_79f34a77255bad4fd239e9ff9a41c48912fd4565600c244884384cc3474d222d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f34a77255bad4fd239e9ff9a41c48912fd4565600c244884384cc3474d222d->enter($__internal_79f34a77255bad4fd239e9ff9a41c48912fd4565600c244884384cc3474d222d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_79f34a77255bad4fd239e9ff9a41c48912fd4565600c244884384cc3474d222d->leave($__internal_79f34a77255bad4fd239e9ff9a41c48912fd4565600c244884384cc3474d222d_prof);

        
        $__internal_e96e9d60fd00108de4608ff9c0d37fdb2f59f14b6bc1b82be0250fb240e1a072->leave($__internal_e96e9d60fd00108de4608ff9c0d37fdb2f59f14b6bc1b82be0250fb240e1a072_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c2f75fec40259d57f1a54acc3dc15cb9a448f2050d4a921caadc8145367b5d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f75fec40259d57f1a54acc3dc15cb9a448f2050d4a921caadc8145367b5d81->enter($__internal_c2f75fec40259d57f1a54acc3dc15cb9a448f2050d4a921caadc8145367b5d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_35ccebce6cfab2d097330aa72ae2c844375bdc3c64bbacd289b114e73f023447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ccebce6cfab2d097330aa72ae2c844375bdc3c64bbacd289b114e73f023447->enter($__internal_35ccebce6cfab2d097330aa72ae2c844375bdc3c64bbacd289b114e73f023447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_35ccebce6cfab2d097330aa72ae2c844375bdc3c64bbacd289b114e73f023447->leave($__internal_35ccebce6cfab2d097330aa72ae2c844375bdc3c64bbacd289b114e73f023447_prof);

        
        $__internal_c2f75fec40259d57f1a54acc3dc15cb9a448f2050d4a921caadc8145367b5d81->leave($__internal_c2f75fec40259d57f1a54acc3dc15cb9a448f2050d4a921caadc8145367b5d81_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d02b225f5e8a4a388abec6bb7c8e985a571e729061b832a5e07fbb8912950e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02b225f5e8a4a388abec6bb7c8e985a571e729061b832a5e07fbb8912950e25->enter($__internal_d02b225f5e8a4a388abec6bb7c8e985a571e729061b832a5e07fbb8912950e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_89d745aa65ca77cf39daa8b4958e3ef04eba08b12bbe88f2013675caa4600c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d745aa65ca77cf39daa8b4958e3ef04eba08b12bbe88f2013675caa4600c74->enter($__internal_89d745aa65ca77cf39daa8b4958e3ef04eba08b12bbe88f2013675caa4600c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_02a503390edbe2a119c343246b98a2a455fc080829b671613c93322a6443a4ac"] ?? $this->getContext($context, "__internal_02a503390edbe2a119c343246b98a2a455fc080829b671613c93322a6443a4ac")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_89d745aa65ca77cf39daa8b4958e3ef04eba08b12bbe88f2013675caa4600c74->leave($__internal_89d745aa65ca77cf39daa8b4958e3ef04eba08b12bbe88f2013675caa4600c74_prof);

        
        $__internal_d02b225f5e8a4a388abec6bb7c8e985a571e729061b832a5e07fbb8912950e25->leave($__internal_d02b225f5e8a4a388abec6bb7c8e985a571e729061b832a5e07fbb8912950e25_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_f0fc9c085d86e34aa54a6a1d0bd015735bf123014aa2501b5f8e60564e5f413d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fc9c085d86e34aa54a6a1d0bd015735bf123014aa2501b5f8e60564e5f413d->enter($__internal_f0fc9c085d86e34aa54a6a1d0bd015735bf123014aa2501b5f8e60564e5f413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_eaf807c1e7451d852875b42810cc0eab4774697f51f5fe8af2c1a68f40ef3291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf807c1e7451d852875b42810cc0eab4774697f51f5fe8af2c1a68f40ef3291->enter($__internal_eaf807c1e7451d852875b42810cc0eab4774697f51f5fe8af2c1a68f40ef3291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_eaf807c1e7451d852875b42810cc0eab4774697f51f5fe8af2c1a68f40ef3291->leave($__internal_eaf807c1e7451d852875b42810cc0eab4774697f51f5fe8af2c1a68f40ef3291_prof);

        
        $__internal_f0fc9c085d86e34aa54a6a1d0bd015735bf123014aa2501b5f8e60564e5f413d->leave($__internal_f0fc9c085d86e34aa54a6a1d0bd015735bf123014aa2501b5f8e60564e5f413d_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_047a5cf5138c3c354e83dbaa63aec1124838de22bbb5020066ed161d6889ae72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047a5cf5138c3c354e83dbaa63aec1124838de22bbb5020066ed161d6889ae72->enter($__internal_047a5cf5138c3c354e83dbaa63aec1124838de22bbb5020066ed161d6889ae72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_dfb8a7aaa465d871565e737685915f2eb9beb4b24d9a9abb2e3918a2e0bb87f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb8a7aaa465d871565e737685915f2eb9beb4b24d9a9abb2e3918a2e0bb87f6->enter($__internal_dfb8a7aaa465d871565e737685915f2eb9beb4b24d9a9abb2e3918a2e0bb87f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_dfb8a7aaa465d871565e737685915f2eb9beb4b24d9a9abb2e3918a2e0bb87f6->leave($__internal_dfb8a7aaa465d871565e737685915f2eb9beb4b24d9a9abb2e3918a2e0bb87f6_prof);

        
        $__internal_047a5cf5138c3c354e83dbaa63aec1124838de22bbb5020066ed161d6889ae72->leave($__internal_047a5cf5138c3c354e83dbaa63aec1124838de22bbb5020066ed161d6889ae72_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_fa6139faf7a760db128a679f0ce340b5dc1db816059d1c7894c1c2c5effd3ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6139faf7a760db128a679f0ce340b5dc1db816059d1c7894c1c2c5effd3ab9->enter($__internal_fa6139faf7a760db128a679f0ce340b5dc1db816059d1c7894c1c2c5effd3ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_584b7ffdf0114c772231ee0f5ab90689b0e9b423210d512e4fdb9309e5a8d482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584b7ffdf0114c772231ee0f5ab90689b0e9b423210d512e4fdb9309e5a8d482->enter($__internal_584b7ffdf0114c772231ee0f5ab90689b0e9b423210d512e4fdb9309e5a8d482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_584b7ffdf0114c772231ee0f5ab90689b0e9b423210d512e4fdb9309e5a8d482->leave($__internal_584b7ffdf0114c772231ee0f5ab90689b0e9b423210d512e4fdb9309e5a8d482_prof);

        
        $__internal_fa6139faf7a760db128a679f0ce340b5dc1db816059d1c7894c1c2c5effd3ab9->leave($__internal_fa6139faf7a760db128a679f0ce340b5dc1db816059d1c7894c1c2c5effd3ab9_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_13ebb9e8909dccec440a796147b54c4a791562d9c9fdad5d602b1eefbd4a3b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ebb9e8909dccec440a796147b54c4a791562d9c9fdad5d602b1eefbd4a3b4c->enter($__internal_13ebb9e8909dccec440a796147b54c4a791562d9c9fdad5d602b1eefbd4a3b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_85f840edbd50cc4b9be294c8dbd6ac7daf324ac784a58e9d56e513cb27eb1634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f840edbd50cc4b9be294c8dbd6ac7daf324ac784a58e9d56e513cb27eb1634->enter($__internal_85f840edbd50cc4b9be294c8dbd6ac7daf324ac784a58e9d56e513cb27eb1634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_85f840edbd50cc4b9be294c8dbd6ac7daf324ac784a58e9d56e513cb27eb1634->leave($__internal_85f840edbd50cc4b9be294c8dbd6ac7daf324ac784a58e9d56e513cb27eb1634_prof);

        
        $__internal_13ebb9e8909dccec440a796147b54c4a791562d9c9fdad5d602b1eefbd4a3b4c->leave($__internal_13ebb9e8909dccec440a796147b54c4a791562d9c9fdad5d602b1eefbd4a3b4c_prof);

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
