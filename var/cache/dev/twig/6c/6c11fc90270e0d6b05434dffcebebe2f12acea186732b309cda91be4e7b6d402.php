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
        $__internal_036fc72eec6008276f4b01431b6a3514667c44c868614bbd46b4090c36bb0f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036fc72eec6008276f4b01431b6a3514667c44c868614bbd46b4090c36bb0f75->enter($__internal_036fc72eec6008276f4b01431b6a3514667c44c868614bbd46b4090c36bb0f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_7a3f293d8ed839a4983f83af22e29d42b4c27f613a0cc5f3b0277f7672d4c295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3f293d8ed839a4983f83af22e29d42b4c27f613a0cc5f3b0277f7672d4c295->enter($__internal_7a3f293d8ed839a4983f83af22e29d42b4c27f613a0cc5f3b0277f7672d4c295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_b1c22cfce333a4e788d300f3abab4ce2b593c2c1db5e8c929b5ad6d4fbb8c2c0"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_b1c22cfce333a4e788d300f3abab4ce2b593c2c1db5e8c929b5ad6d4fbb8c2c0"] ?? $this->getContext($context, "__internal_b1c22cfce333a4e788d300f3abab4ce2b593c2c1db5e8c929b5ad6d4fbb8c2c0"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_b1c22cfce333a4e788d300f3abab4ce2b593c2c1db5e8c929b5ad6d4fbb8c2c0"] ?? $this->getContext($context, "__internal_b1c22cfce333a4e788d300f3abab4ce2b593c2c1db5e8c929b5ad6d4fbb8c2c0"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036fc72eec6008276f4b01431b6a3514667c44c868614bbd46b4090c36bb0f75->leave($__internal_036fc72eec6008276f4b01431b6a3514667c44c868614bbd46b4090c36bb0f75_prof);

        
        $__internal_7a3f293d8ed839a4983f83af22e29d42b4c27f613a0cc5f3b0277f7672d4c295->leave($__internal_7a3f293d8ed839a4983f83af22e29d42b4c27f613a0cc5f3b0277f7672d4c295_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4e450e053eb44301f3ee15ed7f4cf22cb6857e9518a70e186580008b82b154d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e450e053eb44301f3ee15ed7f4cf22cb6857e9518a70e186580008b82b154d0->enter($__internal_4e450e053eb44301f3ee15ed7f4cf22cb6857e9518a70e186580008b82b154d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_b70806916f843a821b9159b75ca2b1e4288d12aeab682e552051fca5afca755d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70806916f843a821b9159b75ca2b1e4288d12aeab682e552051fca5afca755d->enter($__internal_b70806916f843a821b9159b75ca2b1e4288d12aeab682e552051fca5afca755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_b70806916f843a821b9159b75ca2b1e4288d12aeab682e552051fca5afca755d->leave($__internal_b70806916f843a821b9159b75ca2b1e4288d12aeab682e552051fca5afca755d_prof);

        
        $__internal_4e450e053eb44301f3ee15ed7f4cf22cb6857e9518a70e186580008b82b154d0->leave($__internal_4e450e053eb44301f3ee15ed7f4cf22cb6857e9518a70e186580008b82b154d0_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_26acf8471d2c4268c2120219a032e7eb9db126aa9e2def054b6f421b596c2388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26acf8471d2c4268c2120219a032e7eb9db126aa9e2def054b6f421b596c2388->enter($__internal_26acf8471d2c4268c2120219a032e7eb9db126aa9e2def054b6f421b596c2388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_54677b42bd6ae15a9d1c05bd55b3a2a591949878e6c7c0255df3156a02605b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54677b42bd6ae15a9d1c05bd55b3a2a591949878e6c7c0255df3156a02605b74->enter($__internal_54677b42bd6ae15a9d1c05bd55b3a2a591949878e6c7c0255df3156a02605b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_54677b42bd6ae15a9d1c05bd55b3a2a591949878e6c7c0255df3156a02605b74->leave($__internal_54677b42bd6ae15a9d1c05bd55b3a2a591949878e6c7c0255df3156a02605b74_prof);

        
        $__internal_26acf8471d2c4268c2120219a032e7eb9db126aa9e2def054b6f421b596c2388->leave($__internal_26acf8471d2c4268c2120219a032e7eb9db126aa9e2def054b6f421b596c2388_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d14389ab9750520b4ab9fd0958af5d9b462a5e6f351354aab6e34b37d0d1c570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14389ab9750520b4ab9fd0958af5d9b462a5e6f351354aab6e34b37d0d1c570->enter($__internal_d14389ab9750520b4ab9fd0958af5d9b462a5e6f351354aab6e34b37d0d1c570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_dcb4860800fd448aedc436cd703e3cd6ecc0327421aa67adffea75adb9a1981f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb4860800fd448aedc436cd703e3cd6ecc0327421aa67adffea75adb9a1981f->enter($__internal_dcb4860800fd448aedc436cd703e3cd6ecc0327421aa67adffea75adb9a1981f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_b1c22cfce333a4e788d300f3abab4ce2b593c2c1db5e8c929b5ad6d4fbb8c2c0"] ?? $this->getContext($context, "__internal_b1c22cfce333a4e788d300f3abab4ce2b593c2c1db5e8c929b5ad6d4fbb8c2c0")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dcb4860800fd448aedc436cd703e3cd6ecc0327421aa67adffea75adb9a1981f->leave($__internal_dcb4860800fd448aedc436cd703e3cd6ecc0327421aa67adffea75adb9a1981f_prof);

        
        $__internal_d14389ab9750520b4ab9fd0958af5d9b462a5e6f351354aab6e34b37d0d1c570->leave($__internal_d14389ab9750520b4ab9fd0958af5d9b462a5e6f351354aab6e34b37d0d1c570_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_537f7fa3cebc2a3741bafa3c72350f5efa779adf030e45f6ff813526768bc09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537f7fa3cebc2a3741bafa3c72350f5efa779adf030e45f6ff813526768bc09b->enter($__internal_537f7fa3cebc2a3741bafa3c72350f5efa779adf030e45f6ff813526768bc09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d25213b496a0719a4f51a89dd23cea3cd5193d79d16684aa296dd48143a125f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25213b496a0719a4f51a89dd23cea3cd5193d79d16684aa296dd48143a125f5->enter($__internal_d25213b496a0719a4f51a89dd23cea3cd5193d79d16684aa296dd48143a125f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_d25213b496a0719a4f51a89dd23cea3cd5193d79d16684aa296dd48143a125f5->leave($__internal_d25213b496a0719a4f51a89dd23cea3cd5193d79d16684aa296dd48143a125f5_prof);

        
        $__internal_537f7fa3cebc2a3741bafa3c72350f5efa779adf030e45f6ff813526768bc09b->leave($__internal_537f7fa3cebc2a3741bafa3c72350f5efa779adf030e45f6ff813526768bc09b_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_9fb89bddad05c19ec3ed1649940c97eb6ab384507b9e119a69667b024126b466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb89bddad05c19ec3ed1649940c97eb6ab384507b9e119a69667b024126b466->enter($__internal_9fb89bddad05c19ec3ed1649940c97eb6ab384507b9e119a69667b024126b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_95a20ef7285a1c2515c1061d6827f20937145bf6a95ed0e7f3293eaf0a4be16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a20ef7285a1c2515c1061d6827f20937145bf6a95ed0e7f3293eaf0a4be16e->enter($__internal_95a20ef7285a1c2515c1061d6827f20937145bf6a95ed0e7f3293eaf0a4be16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_95a20ef7285a1c2515c1061d6827f20937145bf6a95ed0e7f3293eaf0a4be16e->leave($__internal_95a20ef7285a1c2515c1061d6827f20937145bf6a95ed0e7f3293eaf0a4be16e_prof);

        
        $__internal_9fb89bddad05c19ec3ed1649940c97eb6ab384507b9e119a69667b024126b466->leave($__internal_9fb89bddad05c19ec3ed1649940c97eb6ab384507b9e119a69667b024126b466_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ef9762de4c3509c03d8c2d3813ffa034dc905910bd25900084791547d85c86a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9762de4c3509c03d8c2d3813ffa034dc905910bd25900084791547d85c86a6->enter($__internal_ef9762de4c3509c03d8c2d3813ffa034dc905910bd25900084791547d85c86a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_7c7e7298ce5e08225ed0062ef4c8ac3d8c395f5b4319fdee1b54c97246a92fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7e7298ce5e08225ed0062ef4c8ac3d8c395f5b4319fdee1b54c97246a92fc2->enter($__internal_7c7e7298ce5e08225ed0062ef4c8ac3d8c395f5b4319fdee1b54c97246a92fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_7c7e7298ce5e08225ed0062ef4c8ac3d8c395f5b4319fdee1b54c97246a92fc2->leave($__internal_7c7e7298ce5e08225ed0062ef4c8ac3d8c395f5b4319fdee1b54c97246a92fc2_prof);

        
        $__internal_ef9762de4c3509c03d8c2d3813ffa034dc905910bd25900084791547d85c86a6->leave($__internal_ef9762de4c3509c03d8c2d3813ffa034dc905910bd25900084791547d85c86a6_prof);

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
