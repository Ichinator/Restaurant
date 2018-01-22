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
        $__internal_595ab31458fe01def48d8f82040f56e2c5870cc843d6982577601e611e019e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595ab31458fe01def48d8f82040f56e2c5870cc843d6982577601e611e019e61->enter($__internal_595ab31458fe01def48d8f82040f56e2c5870cc843d6982577601e611e019e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_65dd3fb06d691efc53096224d4e063b6dc4a668adf5a7b5d47ad3cd440e1f416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dd3fb06d691efc53096224d4e063b6dc4a668adf5a7b5d47ad3cd440e1f416->enter($__internal_65dd3fb06d691efc53096224d4e063b6dc4a668adf5a7b5d47ad3cd440e1f416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_6a84b6150d5e5043ea14ef3f10458b86b27a1f67d6533f2b97bea2dc56325177"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_6a84b6150d5e5043ea14ef3f10458b86b27a1f67d6533f2b97bea2dc56325177"] ?? $this->getContext($context, "__internal_6a84b6150d5e5043ea14ef3f10458b86b27a1f67d6533f2b97bea2dc56325177"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_6a84b6150d5e5043ea14ef3f10458b86b27a1f67d6533f2b97bea2dc56325177"] ?? $this->getContext($context, "__internal_6a84b6150d5e5043ea14ef3f10458b86b27a1f67d6533f2b97bea2dc56325177"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595ab31458fe01def48d8f82040f56e2c5870cc843d6982577601e611e019e61->leave($__internal_595ab31458fe01def48d8f82040f56e2c5870cc843d6982577601e611e019e61_prof);

        
        $__internal_65dd3fb06d691efc53096224d4e063b6dc4a668adf5a7b5d47ad3cd440e1f416->leave($__internal_65dd3fb06d691efc53096224d4e063b6dc4a668adf5a7b5d47ad3cd440e1f416_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c6a3e5331afeb027878cf7bc3571a2a7c61d09c976f9e9c91f4d978dcc67e545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a3e5331afeb027878cf7bc3571a2a7c61d09c976f9e9c91f4d978dcc67e545->enter($__internal_c6a3e5331afeb027878cf7bc3571a2a7c61d09c976f9e9c91f4d978dcc67e545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_9c7a91518ffba2a9c2970c5ce670435cdffb3253a2a734d4eaac1f2f6ba29e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7a91518ffba2a9c2970c5ce670435cdffb3253a2a734d4eaac1f2f6ba29e1e->enter($__internal_9c7a91518ffba2a9c2970c5ce670435cdffb3253a2a734d4eaac1f2f6ba29e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_9c7a91518ffba2a9c2970c5ce670435cdffb3253a2a734d4eaac1f2f6ba29e1e->leave($__internal_9c7a91518ffba2a9c2970c5ce670435cdffb3253a2a734d4eaac1f2f6ba29e1e_prof);

        
        $__internal_c6a3e5331afeb027878cf7bc3571a2a7c61d09c976f9e9c91f4d978dcc67e545->leave($__internal_c6a3e5331afeb027878cf7bc3571a2a7c61d09c976f9e9c91f4d978dcc67e545_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c187bb0bdbaf69467a770ef8c65038a286c11fa7fd2b5f15555b7e0d8a81c6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c187bb0bdbaf69467a770ef8c65038a286c11fa7fd2b5f15555b7e0d8a81c6e6->enter($__internal_c187bb0bdbaf69467a770ef8c65038a286c11fa7fd2b5f15555b7e0d8a81c6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_744ea619a1f170f697fb180c5dd8e0bfe59218d78b70226af35c3b2f8fa8274a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744ea619a1f170f697fb180c5dd8e0bfe59218d78b70226af35c3b2f8fa8274a->enter($__internal_744ea619a1f170f697fb180c5dd8e0bfe59218d78b70226af35c3b2f8fa8274a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_744ea619a1f170f697fb180c5dd8e0bfe59218d78b70226af35c3b2f8fa8274a->leave($__internal_744ea619a1f170f697fb180c5dd8e0bfe59218d78b70226af35c3b2f8fa8274a_prof);

        
        $__internal_c187bb0bdbaf69467a770ef8c65038a286c11fa7fd2b5f15555b7e0d8a81c6e6->leave($__internal_c187bb0bdbaf69467a770ef8c65038a286c11fa7fd2b5f15555b7e0d8a81c6e6_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d9a4a73a27eb38dc84b76bec898571d6493683292efe3a38f08e462747945763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a4a73a27eb38dc84b76bec898571d6493683292efe3a38f08e462747945763->enter($__internal_d9a4a73a27eb38dc84b76bec898571d6493683292efe3a38f08e462747945763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_8be92e9fc1f523e67ae3bb28cc1fdbcc1c09f72843c0be6ec94e36a2bafb9bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be92e9fc1f523e67ae3bb28cc1fdbcc1c09f72843c0be6ec94e36a2bafb9bcd->enter($__internal_8be92e9fc1f523e67ae3bb28cc1fdbcc1c09f72843c0be6ec94e36a2bafb9bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_6a84b6150d5e5043ea14ef3f10458b86b27a1f67d6533f2b97bea2dc56325177"] ?? $this->getContext($context, "__internal_6a84b6150d5e5043ea14ef3f10458b86b27a1f67d6533f2b97bea2dc56325177")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8be92e9fc1f523e67ae3bb28cc1fdbcc1c09f72843c0be6ec94e36a2bafb9bcd->leave($__internal_8be92e9fc1f523e67ae3bb28cc1fdbcc1c09f72843c0be6ec94e36a2bafb9bcd_prof);

        
        $__internal_d9a4a73a27eb38dc84b76bec898571d6493683292efe3a38f08e462747945763->leave($__internal_d9a4a73a27eb38dc84b76bec898571d6493683292efe3a38f08e462747945763_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_66b2ca7789cbe86aeaed0eb49c6d4a5419014016792d73946abd821dd207a6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b2ca7789cbe86aeaed0eb49c6d4a5419014016792d73946abd821dd207a6f4->enter($__internal_66b2ca7789cbe86aeaed0eb49c6d4a5419014016792d73946abd821dd207a6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c30b8bcc8dba1fc3b46db3009173c5e61afd047089b4838b4dbfef97a9494137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30b8bcc8dba1fc3b46db3009173c5e61afd047089b4838b4dbfef97a9494137->enter($__internal_c30b8bcc8dba1fc3b46db3009173c5e61afd047089b4838b4dbfef97a9494137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_c30b8bcc8dba1fc3b46db3009173c5e61afd047089b4838b4dbfef97a9494137->leave($__internal_c30b8bcc8dba1fc3b46db3009173c5e61afd047089b4838b4dbfef97a9494137_prof);

        
        $__internal_66b2ca7789cbe86aeaed0eb49c6d4a5419014016792d73946abd821dd207a6f4->leave($__internal_66b2ca7789cbe86aeaed0eb49c6d4a5419014016792d73946abd821dd207a6f4_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_807fb82adb5ffd020fc0c3b83809691f258305e5faea6a59ec556da1cc8b9d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807fb82adb5ffd020fc0c3b83809691f258305e5faea6a59ec556da1cc8b9d3b->enter($__internal_807fb82adb5ffd020fc0c3b83809691f258305e5faea6a59ec556da1cc8b9d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_15abae1972655da81c088eb87d63afbde9dcf6522836dd4e22651db1b68c9ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15abae1972655da81c088eb87d63afbde9dcf6522836dd4e22651db1b68c9ae7->enter($__internal_15abae1972655da81c088eb87d63afbde9dcf6522836dd4e22651db1b68c9ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_15abae1972655da81c088eb87d63afbde9dcf6522836dd4e22651db1b68c9ae7->leave($__internal_15abae1972655da81c088eb87d63afbde9dcf6522836dd4e22651db1b68c9ae7_prof);

        
        $__internal_807fb82adb5ffd020fc0c3b83809691f258305e5faea6a59ec556da1cc8b9d3b->leave($__internal_807fb82adb5ffd020fc0c3b83809691f258305e5faea6a59ec556da1cc8b9d3b_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_1b1459325eab9e59e3163bb2bca6e7d13b23b2e874f68f4d40ded835410f0d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1459325eab9e59e3163bb2bca6e7d13b23b2e874f68f4d40ded835410f0d50->enter($__internal_1b1459325eab9e59e3163bb2bca6e7d13b23b2e874f68f4d40ded835410f0d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_8aad8c1e01a6ff9a04336bc935d51bbb7e7a4b208cd64bbd12c3fe0e6a66e5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aad8c1e01a6ff9a04336bc935d51bbb7e7a4b208cd64bbd12c3fe0e6a66e5d0->enter($__internal_8aad8c1e01a6ff9a04336bc935d51bbb7e7a4b208cd64bbd12c3fe0e6a66e5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_8aad8c1e01a6ff9a04336bc935d51bbb7e7a4b208cd64bbd12c3fe0e6a66e5d0->leave($__internal_8aad8c1e01a6ff9a04336bc935d51bbb7e7a4b208cd64bbd12c3fe0e6a66e5d0_prof);

        
        $__internal_1b1459325eab9e59e3163bb2bca6e7d13b23b2e874f68f4d40ded835410f0d50->leave($__internal_1b1459325eab9e59e3163bb2bca6e7d13b23b2e874f68f4d40ded835410f0d50_prof);

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
