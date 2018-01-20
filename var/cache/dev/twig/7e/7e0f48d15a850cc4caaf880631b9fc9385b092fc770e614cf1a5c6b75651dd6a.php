<?php

/* @EasyAdmin/default/edit.html.twig */
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5e2ca5166d3826e416d64fcdeae27c01b0ef28b0704e1113c6747a60dede476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e2ca5166d3826e416d64fcdeae27c01b0ef28b0704e1113c6747a60dede476->enter($__internal_e5e2ca5166d3826e416d64fcdeae27c01b0ef28b0704e1113c6747a60dede476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        $__internal_bd0f313ec041e4f8308248b65f5d07951ede9c2c39b23f2315e188d283ee0daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0f313ec041e4f8308248b65f5d07951ede9c2c39b23f2315e188d283ee0daf->enter($__internal_bd0f313ec041e4f8308248b65f5d07951ede9c2c39b23f2315e188d283ee0daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_6281c8539630ecee7471ff6306d822f740395a87a9ec292a9e5b440f04c2cc0f"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_6281c8539630ecee7471ff6306d822f740395a87a9ec292a9e5b440f04c2cc0f"] ?? $this->getContext($context, "__internal_6281c8539630ecee7471ff6306d822f740395a87a9ec292a9e5b440f04c2cc0f"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_6281c8539630ecee7471ff6306d822f740395a87a9ec292a9e5b440f04c2cc0f"] ?? $this->getContext($context, "__internal_6281c8539630ecee7471ff6306d822f740395a87a9ec292a9e5b440f04c2cc0f"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e2ca5166d3826e416d64fcdeae27c01b0ef28b0704e1113c6747a60dede476->leave($__internal_e5e2ca5166d3826e416d64fcdeae27c01b0ef28b0704e1113c6747a60dede476_prof);

        
        $__internal_bd0f313ec041e4f8308248b65f5d07951ede9c2c39b23f2315e188d283ee0daf->leave($__internal_bd0f313ec041e4f8308248b65f5d07951ede9c2c39b23f2315e188d283ee0daf_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3153fed63f7c9f3f4ce8e9484deb9f18c8416f4ab19d27cd6ff0e5048f67305d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3153fed63f7c9f3f4ce8e9484deb9f18c8416f4ab19d27cd6ff0e5048f67305d->enter($__internal_3153fed63f7c9f3f4ce8e9484deb9f18c8416f4ab19d27cd6ff0e5048f67305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_67cf515eea40fade6015c3aee865e17d68dd737a247762647b2d06d51100b66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cf515eea40fade6015c3aee865e17d68dd737a247762647b2d06d51100b66b->enter($__internal_67cf515eea40fade6015c3aee865e17d68dd737a247762647b2d06d51100b66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_67cf515eea40fade6015c3aee865e17d68dd737a247762647b2d06d51100b66b->leave($__internal_67cf515eea40fade6015c3aee865e17d68dd737a247762647b2d06d51100b66b_prof);

        
        $__internal_3153fed63f7c9f3f4ce8e9484deb9f18c8416f4ab19d27cd6ff0e5048f67305d->leave($__internal_3153fed63f7c9f3f4ce8e9484deb9f18c8416f4ab19d27cd6ff0e5048f67305d_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_7fcdb10b94172c9634cb608ad9cba3239e8cfcc2b1dba20e9066e79123c05e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcdb10b94172c9634cb608ad9cba3239e8cfcc2b1dba20e9066e79123c05e0b->enter($__internal_7fcdb10b94172c9634cb608ad9cba3239e8cfcc2b1dba20e9066e79123c05e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_1fc822cd233fa8a3142bdc396b0f9b3a11fd77f8bd7ebbe382c4f13eae7b48d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc822cd233fa8a3142bdc396b0f9b3a11fd77f8bd7ebbe382c4f13eae7b48d2->enter($__internal_1fc822cd233fa8a3142bdc396b0f9b3a11fd77f8bd7ebbe382c4f13eae7b48d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_1fc822cd233fa8a3142bdc396b0f9b3a11fd77f8bd7ebbe382c4f13eae7b48d2->leave($__internal_1fc822cd233fa8a3142bdc396b0f9b3a11fd77f8bd7ebbe382c4f13eae7b48d2_prof);

        
        $__internal_7fcdb10b94172c9634cb608ad9cba3239e8cfcc2b1dba20e9066e79123c05e0b->leave($__internal_7fcdb10b94172c9634cb608ad9cba3239e8cfcc2b1dba20e9066e79123c05e0b_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_92aa5815689a8bb07533ddf91204b3c468aae8b1f5a3dc30f4f5627b7b293720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92aa5815689a8bb07533ddf91204b3c468aae8b1f5a3dc30f4f5627b7b293720->enter($__internal_92aa5815689a8bb07533ddf91204b3c468aae8b1f5a3dc30f4f5627b7b293720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_5cc591b6e5f503269df320d157e6f13487ad1cf60b1f87efb6d3b22c7db9a1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc591b6e5f503269df320d157e6f13487ad1cf60b1f87efb6d3b22c7db9a1b4->enter($__internal_5cc591b6e5f503269df320d157e6f13487ad1cf60b1f87efb6d3b22c7db9a1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_6281c8539630ecee7471ff6306d822f740395a87a9ec292a9e5b440f04c2cc0f"] ?? $this->getContext($context, "__internal_6281c8539630ecee7471ff6306d822f740395a87a9ec292a9e5b440f04c2cc0f")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5cc591b6e5f503269df320d157e6f13487ad1cf60b1f87efb6d3b22c7db9a1b4->leave($__internal_5cc591b6e5f503269df320d157e6f13487ad1cf60b1f87efb6d3b22c7db9a1b4_prof);

        
        $__internal_92aa5815689a8bb07533ddf91204b3c468aae8b1f5a3dc30f4f5627b7b293720->leave($__internal_92aa5815689a8bb07533ddf91204b3c468aae8b1f5a3dc30f4f5627b7b293720_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_553b476802d974e6b85dcd8b4f2c00d0512463f2a24b095cbffcddd78be9f05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553b476802d974e6b85dcd8b4f2c00d0512463f2a24b095cbffcddd78be9f05c->enter($__internal_553b476802d974e6b85dcd8b4f2c00d0512463f2a24b095cbffcddd78be9f05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3426df0e2960b153b1c64da1c5718fddc7363fff13d1cad41ea123c158c6dbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3426df0e2960b153b1c64da1c5718fddc7363fff13d1cad41ea123c158c6dbce->enter($__internal_3426df0e2960b153b1c64da1c5718fddc7363fff13d1cad41ea123c158c6dbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_3426df0e2960b153b1c64da1c5718fddc7363fff13d1cad41ea123c158c6dbce->leave($__internal_3426df0e2960b153b1c64da1c5718fddc7363fff13d1cad41ea123c158c6dbce_prof);

        
        $__internal_553b476802d974e6b85dcd8b4f2c00d0512463f2a24b095cbffcddd78be9f05c->leave($__internal_553b476802d974e6b85dcd8b4f2c00d0512463f2a24b095cbffcddd78be9f05c_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_cd01d975be3a9487ad84d9a8d24c2abc0044360ec81efc3d91b6f129bd622969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd01d975be3a9487ad84d9a8d24c2abc0044360ec81efc3d91b6f129bd622969->enter($__internal_cd01d975be3a9487ad84d9a8d24c2abc0044360ec81efc3d91b6f129bd622969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_f29f21fd9146ff26ab8bad6e5e5ae5031acc44068d6e75152e99ede002035095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29f21fd9146ff26ab8bad6e5e5ae5031acc44068d6e75152e99ede002035095->enter($__internal_f29f21fd9146ff26ab8bad6e5e5ae5031acc44068d6e75152e99ede002035095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_f29f21fd9146ff26ab8bad6e5e5ae5031acc44068d6e75152e99ede002035095->leave($__internal_f29f21fd9146ff26ab8bad6e5e5ae5031acc44068d6e75152e99ede002035095_prof);

        
        $__internal_cd01d975be3a9487ad84d9a8d24c2abc0044360ec81efc3d91b6f129bd622969->leave($__internal_cd01d975be3a9487ad84d9a8d24c2abc0044360ec81efc3d91b6f129bd622969_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_79b1027aa6c8b1a18549f4b23f157c9c95f7ee68b8895282ac249547cd6e9906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b1027aa6c8b1a18549f4b23f157c9c95f7ee68b8895282ac249547cd6e9906->enter($__internal_79b1027aa6c8b1a18549f4b23f157c9c95f7ee68b8895282ac249547cd6e9906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_31b69e8c60ba2389b49542994a9e91754980f2ba8a547f52d902df7c1f7f66a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b69e8c60ba2389b49542994a9e91754980f2ba8a547f52d902df7c1f7f66a6->enter($__internal_31b69e8c60ba2389b49542994a9e91754980f2ba8a547f52d902df7c1f7f66a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_31b69e8c60ba2389b49542994a9e91754980f2ba8a547f52d902df7c1f7f66a6->leave($__internal_31b69e8c60ba2389b49542994a9e91754980f2ba8a547f52d902df7c1f7f66a6_prof);

        
        $__internal_79b1027aa6c8b1a18549f4b23f157c9c95f7ee68b8895282ac249547cd6e9906->leave($__internal_79b1027aa6c8b1a18549f4b23f157c9c95f7ee68b8895282ac249547cd6e9906_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_06a25751f37fd9c9284bb3baead122328b9c721b7df2ee94280cd4f752127d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a25751f37fd9c9284bb3baead122328b9c721b7df2ee94280cd4f752127d28->enter($__internal_06a25751f37fd9c9284bb3baead122328b9c721b7df2ee94280cd4f752127d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_bbe0a95cb9953eb928e8750a995fea7a9d0c28dfb14eeabebde3202a46f6b100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe0a95cb9953eb928e8750a995fea7a9d0c28dfb14eeabebde3202a46f6b100->enter($__internal_bbe0a95cb9953eb928e8750a995fea7a9d0c28dfb14eeabebde3202a46f6b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_bbe0a95cb9953eb928e8750a995fea7a9d0c28dfb14eeabebde3202a46f6b100->leave($__internal_bbe0a95cb9953eb928e8750a995fea7a9d0c28dfb14eeabebde3202a46f6b100_prof);

        
        $__internal_06a25751f37fd9c9284bb3baead122328b9c721b7df2ee94280cd4f752127d28->leave($__internal_06a25751f37fd9c9284bb3baead122328b9c721b7df2ee94280cd4f752127d28_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
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
", "@EasyAdmin/default/edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
