<?php

/* EasyAdminBundle:default:new.html.twig */
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f420e07c616af503271ea697a8cfdc0ed185fb0c59c38d3d922cb8d8b735dd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f420e07c616af503271ea697a8cfdc0ed185fb0c59c38d3d922cb8d8b735dd83->enter($__internal_f420e07c616af503271ea697a8cfdc0ed185fb0c59c38d3d922cb8d8b735dd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_d4eba56e84f3519febe938501cb594832019a494bda52cea9ab653f58be89c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eba56e84f3519febe938501cb594832019a494bda52cea9ab653f58be89c79->enter($__internal_d4eba56e84f3519febe938501cb594832019a494bda52cea9ab653f58be89c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_11807e3ee1874f8ea7f14a4921ee7821646affe6e757b5905ae78c5317337cd5"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_11807e3ee1874f8ea7f14a4921ee7821646affe6e757b5905ae78c5317337cd5"] ?? $this->getContext($context, "__internal_11807e3ee1874f8ea7f14a4921ee7821646affe6e757b5905ae78c5317337cd5"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_11807e3ee1874f8ea7f14a4921ee7821646affe6e757b5905ae78c5317337cd5"] ?? $this->getContext($context, "__internal_11807e3ee1874f8ea7f14a4921ee7821646affe6e757b5905ae78c5317337cd5"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f420e07c616af503271ea697a8cfdc0ed185fb0c59c38d3d922cb8d8b735dd83->leave($__internal_f420e07c616af503271ea697a8cfdc0ed185fb0c59c38d3d922cb8d8b735dd83_prof);

        
        $__internal_d4eba56e84f3519febe938501cb594832019a494bda52cea9ab653f58be89c79->leave($__internal_d4eba56e84f3519febe938501cb594832019a494bda52cea9ab653f58be89c79_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0ec42b9625dd37d2440bd31f4fb3347910460de0e8abdfb2b95f5250862d8641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec42b9625dd37d2440bd31f4fb3347910460de0e8abdfb2b95f5250862d8641->enter($__internal_0ec42b9625dd37d2440bd31f4fb3347910460de0e8abdfb2b95f5250862d8641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_146f3a9a3c317140d64e007ca566c266b18678d2375fe48b810d80566feef168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146f3a9a3c317140d64e007ca566c266b18678d2375fe48b810d80566feef168->enter($__internal_146f3a9a3c317140d64e007ca566c266b18678d2375fe48b810d80566feef168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_146f3a9a3c317140d64e007ca566c266b18678d2375fe48b810d80566feef168->leave($__internal_146f3a9a3c317140d64e007ca566c266b18678d2375fe48b810d80566feef168_prof);

        
        $__internal_0ec42b9625dd37d2440bd31f4fb3347910460de0e8abdfb2b95f5250862d8641->leave($__internal_0ec42b9625dd37d2440bd31f4fb3347910460de0e8abdfb2b95f5250862d8641_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ee03e5a3036237d0a31bed8d8ddb14f1753be5f9576d0fd6b3dee0cc6f244d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee03e5a3036237d0a31bed8d8ddb14f1753be5f9576d0fd6b3dee0cc6f244d91->enter($__internal_ee03e5a3036237d0a31bed8d8ddb14f1753be5f9576d0fd6b3dee0cc6f244d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_bad2a17f1925f99c315a93f11fb5936a4b79f0ccd1cfa3d46c454dee061cb5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad2a17f1925f99c315a93f11fb5936a4b79f0ccd1cfa3d46c454dee061cb5af->enter($__internal_bad2a17f1925f99c315a93f11fb5936a4b79f0ccd1cfa3d46c454dee061cb5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_bad2a17f1925f99c315a93f11fb5936a4b79f0ccd1cfa3d46c454dee061cb5af->leave($__internal_bad2a17f1925f99c315a93f11fb5936a4b79f0ccd1cfa3d46c454dee061cb5af_prof);

        
        $__internal_ee03e5a3036237d0a31bed8d8ddb14f1753be5f9576d0fd6b3dee0cc6f244d91->leave($__internal_ee03e5a3036237d0a31bed8d8ddb14f1753be5f9576d0fd6b3dee0cc6f244d91_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_bb4e224c369f8a7afef8cca2e870e78500f95fbc44828587d639df692c879dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4e224c369f8a7afef8cca2e870e78500f95fbc44828587d639df692c879dc3->enter($__internal_bb4e224c369f8a7afef8cca2e870e78500f95fbc44828587d639df692c879dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_8296a0544fca992194ebc80fab37d4635ce3fa84463b81f71f8501975233a6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8296a0544fca992194ebc80fab37d4635ce3fa84463b81f71f8501975233a6af->enter($__internal_8296a0544fca992194ebc80fab37d4635ce3fa84463b81f71f8501975233a6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_11807e3ee1874f8ea7f14a4921ee7821646affe6e757b5905ae78c5317337cd5"] ?? $this->getContext($context, "__internal_11807e3ee1874f8ea7f14a4921ee7821646affe6e757b5905ae78c5317337cd5")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8296a0544fca992194ebc80fab37d4635ce3fa84463b81f71f8501975233a6af->leave($__internal_8296a0544fca992194ebc80fab37d4635ce3fa84463b81f71f8501975233a6af_prof);

        
        $__internal_bb4e224c369f8a7afef8cca2e870e78500f95fbc44828587d639df692c879dc3->leave($__internal_bb4e224c369f8a7afef8cca2e870e78500f95fbc44828587d639df692c879dc3_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_3619e6863a7fe308a1a2e6cbbc903336d2e8d36cdc0c5a191ba87e5b2afdb3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3619e6863a7fe308a1a2e6cbbc903336d2e8d36cdc0c5a191ba87e5b2afdb3cb->enter($__internal_3619e6863a7fe308a1a2e6cbbc903336d2e8d36cdc0c5a191ba87e5b2afdb3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3bf17c550517a1f6393fafcf192ef75086ca212918b4444635b8a66be585b93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf17c550517a1f6393fafcf192ef75086ca212918b4444635b8a66be585b93f->enter($__internal_3bf17c550517a1f6393fafcf192ef75086ca212918b4444635b8a66be585b93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_3bf17c550517a1f6393fafcf192ef75086ca212918b4444635b8a66be585b93f->leave($__internal_3bf17c550517a1f6393fafcf192ef75086ca212918b4444635b8a66be585b93f_prof);

        
        $__internal_3619e6863a7fe308a1a2e6cbbc903336d2e8d36cdc0c5a191ba87e5b2afdb3cb->leave($__internal_3619e6863a7fe308a1a2e6cbbc903336d2e8d36cdc0c5a191ba87e5b2afdb3cb_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_cd1fd8c265892a2f62de4653c2f27d342d4dfa0ca621a2db9bdacff8fcac6da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1fd8c265892a2f62de4653c2f27d342d4dfa0ca621a2db9bdacff8fcac6da5->enter($__internal_cd1fd8c265892a2f62de4653c2f27d342d4dfa0ca621a2db9bdacff8fcac6da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_1b1816a579400576ee54e239b5942ce0678d9f6a940b57af6039aad229f9f250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1816a579400576ee54e239b5942ce0678d9f6a940b57af6039aad229f9f250->enter($__internal_1b1816a579400576ee54e239b5942ce0678d9f6a940b57af6039aad229f9f250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_1b1816a579400576ee54e239b5942ce0678d9f6a940b57af6039aad229f9f250->leave($__internal_1b1816a579400576ee54e239b5942ce0678d9f6a940b57af6039aad229f9f250_prof);

        
        $__internal_cd1fd8c265892a2f62de4653c2f27d342d4dfa0ca621a2db9bdacff8fcac6da5->leave($__internal_cd1fd8c265892a2f62de4653c2f27d342d4dfa0ca621a2db9bdacff8fcac6da5_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_72abfa746fecf24b92ff9c05b02fe3598b98b0b30bab69f1f3231057e962e011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72abfa746fecf24b92ff9c05b02fe3598b98b0b30bab69f1f3231057e962e011->enter($__internal_72abfa746fecf24b92ff9c05b02fe3598b98b0b30bab69f1f3231057e962e011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_769bc4449653d114d552943ecad9c43353cb9503b610c54294dd3a81c8c7be0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769bc4449653d114d552943ecad9c43353cb9503b610c54294dd3a81c8c7be0c->enter($__internal_769bc4449653d114d552943ecad9c43353cb9503b610c54294dd3a81c8c7be0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_769bc4449653d114d552943ecad9c43353cb9503b610c54294dd3a81c8c7be0c->leave($__internal_769bc4449653d114d552943ecad9c43353cb9503b610c54294dd3a81c8c7be0c_prof);

        
        $__internal_72abfa746fecf24b92ff9c05b02fe3598b98b0b30bab69f1f3231057e962e011->leave($__internal_72abfa746fecf24b92ff9c05b02fe3598b98b0b30bab69f1f3231057e962e011_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
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
", "EasyAdminBundle:default:new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
