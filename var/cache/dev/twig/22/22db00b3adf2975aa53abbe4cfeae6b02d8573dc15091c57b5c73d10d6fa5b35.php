<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_967ba3d2ba4de8ba378b4f5f49799b733727636b7db573cd27a99dd591878342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87d0905f12b5154ed8ed5668b57459dc498063bf9892f5d66e765cb3c02e4320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d0905f12b5154ed8ed5668b57459dc498063bf9892f5d66e765cb3c02e4320->enter($__internal_87d0905f12b5154ed8ed5668b57459dc498063bf9892f5d66e765cb3c02e4320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_482ea5ca35f533445718c243a1c5e1b7416366ccb01923f657cd3081589db293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482ea5ca35f533445718c243a1c5e1b7416366ccb01923f657cd3081589db293->enter($__internal_482ea5ca35f533445718c243a1c5e1b7416366ccb01923f657cd3081589db293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_87d0905f12b5154ed8ed5668b57459dc498063bf9892f5d66e765cb3c02e4320->leave($__internal_87d0905f12b5154ed8ed5668b57459dc498063bf9892f5d66e765cb3c02e4320_prof);

        
        $__internal_482ea5ca35f533445718c243a1c5e1b7416366ccb01923f657cd3081589db293->leave($__internal_482ea5ca35f533445718c243a1c5e1b7416366ccb01923f657cd3081589db293_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_da34780e1e5dfd3369b4af450a0b1b4b6cb9c309170b86791b6b8d874541712d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da34780e1e5dfd3369b4af450a0b1b4b6cb9c309170b86791b6b8d874541712d->enter($__internal_da34780e1e5dfd3369b4af450a0b1b4b6cb9c309170b86791b6b8d874541712d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_5c9d9c51cc07665cc0ac59768f498fda3c99755bb6457df0b9fc07f676c7321a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9d9c51cc07665cc0ac59768f498fda3c99755bb6457df0b9fc07f676c7321a->enter($__internal_5c9d9c51cc07665cc0ac59768f498fda3c99755bb6457df0b9fc07f676c7321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5c9d9c51cc07665cc0ac59768f498fda3c99755bb6457df0b9fc07f676c7321a->leave($__internal_5c9d9c51cc07665cc0ac59768f498fda3c99755bb6457df0b9fc07f676c7321a_prof);

        
        $__internal_da34780e1e5dfd3369b4af450a0b1b4b6cb9c309170b86791b6b8d874541712d->leave($__internal_da34780e1e5dfd3369b4af450a0b1b4b6cb9c309170b86791b6b8d874541712d_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_d3099c8a39cc5b0e4a68f362d5d1b064e48c770bc640044e84e61c368b7e1ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3099c8a39cc5b0e4a68f362d5d1b064e48c770bc640044e84e61c368b7e1ad6->enter($__internal_d3099c8a39cc5b0e4a68f362d5d1b064e48c770bc640044e84e61c368b7e1ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_cce1b6265855ca66a5ca0706df5ee196dc6c1ffc37167a9ab3be1205ea2cfdd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce1b6265855ca66a5ca0706df5ee196dc6c1ffc37167a9ab3be1205ea2cfdd9->enter($__internal_cce1b6265855ca66a5ca0706df5ee196dc6c1ffc37167a9ab3be1205ea2cfdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cce1b6265855ca66a5ca0706df5ee196dc6c1ffc37167a9ab3be1205ea2cfdd9->leave($__internal_cce1b6265855ca66a5ca0706df5ee196dc6c1ffc37167a9ab3be1205ea2cfdd9_prof);

        
        $__internal_d3099c8a39cc5b0e4a68f362d5d1b064e48c770bc640044e84e61c368b7e1ad6->leave($__internal_d3099c8a39cc5b0e4a68f362d5d1b064e48c770bc640044e84e61c368b7e1ad6_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_c8498bce9a577faeaee48e30ec5974f8d7b6cb177a56ea1122ac92e6c4686c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8498bce9a577faeaee48e30ec5974f8d7b6cb177a56ea1122ac92e6c4686c44->enter($__internal_c8498bce9a577faeaee48e30ec5974f8d7b6cb177a56ea1122ac92e6c4686c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_75b360fe9b1dc51fdaadcca5a3d63f39f10444729362fdfcc6bf005b41681f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b360fe9b1dc51fdaadcca5a3d63f39f10444729362fdfcc6bf005b41681f17->enter($__internal_75b360fe9b1dc51fdaadcca5a3d63f39f10444729362fdfcc6bf005b41681f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_75b360fe9b1dc51fdaadcca5a3d63f39f10444729362fdfcc6bf005b41681f17->leave($__internal_75b360fe9b1dc51fdaadcca5a3d63f39f10444729362fdfcc6bf005b41681f17_prof);

        
        $__internal_c8498bce9a577faeaee48e30ec5974f8d7b6cb177a56ea1122ac92e6c4686c44->leave($__internal_c8498bce9a577faeaee48e30ec5974f8d7b6cb177a56ea1122ac92e6c4686c44_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_b8b812395fd17c57c00185c7bf583a79a2358101affe29f8e73120f3fa48c1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b812395fd17c57c00185c7bf583a79a2358101affe29f8e73120f3fa48c1b5->enter($__internal_b8b812395fd17c57c00185c7bf583a79a2358101affe29f8e73120f3fa48c1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_b3c2f28d89cc1bff4124c27c2985449ccc48fdfa64a5bd1e7c12c2e6ca810ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c2f28d89cc1bff4124c27c2985449ccc48fdfa64a5bd1e7c12c2e6ca810ad0->enter($__internal_b3c2f28d89cc1bff4124c27c2985449ccc48fdfa64a5bd1e7c12c2e6ca810ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b3c2f28d89cc1bff4124c27c2985449ccc48fdfa64a5bd1e7c12c2e6ca810ad0->leave($__internal_b3c2f28d89cc1bff4124c27c2985449ccc48fdfa64a5bd1e7c12c2e6ca810ad0_prof);

        
        $__internal_b8b812395fd17c57c00185c7bf583a79a2358101affe29f8e73120f3fa48c1b5->leave($__internal_b8b812395fd17c57c00185c7bf583a79a2358101affe29f8e73120f3fa48c1b5_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
