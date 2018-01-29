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
        $__internal_97c5b13c5c538a97f65b1eae2560b93f0b01d1060ca07c27946985d2d4206c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c5b13c5c538a97f65b1eae2560b93f0b01d1060ca07c27946985d2d4206c34->enter($__internal_97c5b13c5c538a97f65b1eae2560b93f0b01d1060ca07c27946985d2d4206c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_89e69b1c87fb3d1be90ed899cc288869f8767601a390ceb15dcd0c1199f482bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e69b1c87fb3d1be90ed899cc288869f8767601a390ceb15dcd0c1199f482bd->enter($__internal_89e69b1c87fb3d1be90ed899cc288869f8767601a390ceb15dcd0c1199f482bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_97c5b13c5c538a97f65b1eae2560b93f0b01d1060ca07c27946985d2d4206c34->leave($__internal_97c5b13c5c538a97f65b1eae2560b93f0b01d1060ca07c27946985d2d4206c34_prof);

        
        $__internal_89e69b1c87fb3d1be90ed899cc288869f8767601a390ceb15dcd0c1199f482bd->leave($__internal_89e69b1c87fb3d1be90ed899cc288869f8767601a390ceb15dcd0c1199f482bd_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_4be2c357c63ba2973c4738efc919e78479780faec27af4b936f13a2a5892806a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be2c357c63ba2973c4738efc919e78479780faec27af4b936f13a2a5892806a->enter($__internal_4be2c357c63ba2973c4738efc919e78479780faec27af4b936f13a2a5892806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_dd2442a15db5f88f83f4517202a086e25952020964cabb869a8430b60bfcb12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2442a15db5f88f83f4517202a086e25952020964cabb869a8430b60bfcb12b->enter($__internal_dd2442a15db5f88f83f4517202a086e25952020964cabb869a8430b60bfcb12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dd2442a15db5f88f83f4517202a086e25952020964cabb869a8430b60bfcb12b->leave($__internal_dd2442a15db5f88f83f4517202a086e25952020964cabb869a8430b60bfcb12b_prof);

        
        $__internal_4be2c357c63ba2973c4738efc919e78479780faec27af4b936f13a2a5892806a->leave($__internal_4be2c357c63ba2973c4738efc919e78479780faec27af4b936f13a2a5892806a_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_26a153369e4c8baa4dc3b1ebd0ba84296bc5e063489229e388f9b900aa706eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a153369e4c8baa4dc3b1ebd0ba84296bc5e063489229e388f9b900aa706eba->enter($__internal_26a153369e4c8baa4dc3b1ebd0ba84296bc5e063489229e388f9b900aa706eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_08b44986f70d9aa33f7fde96c26162c4485317dbce7dba4f2e04b4004f83366d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b44986f70d9aa33f7fde96c26162c4485317dbce7dba4f2e04b4004f83366d->enter($__internal_08b44986f70d9aa33f7fde96c26162c4485317dbce7dba4f2e04b4004f83366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_08b44986f70d9aa33f7fde96c26162c4485317dbce7dba4f2e04b4004f83366d->leave($__internal_08b44986f70d9aa33f7fde96c26162c4485317dbce7dba4f2e04b4004f83366d_prof);

        
        $__internal_26a153369e4c8baa4dc3b1ebd0ba84296bc5e063489229e388f9b900aa706eba->leave($__internal_26a153369e4c8baa4dc3b1ebd0ba84296bc5e063489229e388f9b900aa706eba_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_ab5f47b4d09a1909e6f9c92c5928616f2f84f25279a908bfb0f4f0f1f9b8447f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5f47b4d09a1909e6f9c92c5928616f2f84f25279a908bfb0f4f0f1f9b8447f->enter($__internal_ab5f47b4d09a1909e6f9c92c5928616f2f84f25279a908bfb0f4f0f1f9b8447f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_7fff0486935478c79aa137808673366cb2ca16497006a2c1ff652c8bd6c01ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fff0486935478c79aa137808673366cb2ca16497006a2c1ff652c8bd6c01ea1->enter($__internal_7fff0486935478c79aa137808673366cb2ca16497006a2c1ff652c8bd6c01ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7fff0486935478c79aa137808673366cb2ca16497006a2c1ff652c8bd6c01ea1->leave($__internal_7fff0486935478c79aa137808673366cb2ca16497006a2c1ff652c8bd6c01ea1_prof);

        
        $__internal_ab5f47b4d09a1909e6f9c92c5928616f2f84f25279a908bfb0f4f0f1f9b8447f->leave($__internal_ab5f47b4d09a1909e6f9c92c5928616f2f84f25279a908bfb0f4f0f1f9b8447f_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_698d8d202ef99d10af762a0f431ec14c687e596d705b6e0317ab301b68c2c585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698d8d202ef99d10af762a0f431ec14c687e596d705b6e0317ab301b68c2c585->enter($__internal_698d8d202ef99d10af762a0f431ec14c687e596d705b6e0317ab301b68c2c585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_2b05a38fd587c7f2a098aac669e99845f90b980da4d678bb5ad051302be9b405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b05a38fd587c7f2a098aac669e99845f90b980da4d678bb5ad051302be9b405->enter($__internal_2b05a38fd587c7f2a098aac669e99845f90b980da4d678bb5ad051302be9b405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_2b05a38fd587c7f2a098aac669e99845f90b980da4d678bb5ad051302be9b405->leave($__internal_2b05a38fd587c7f2a098aac669e99845f90b980da4d678bb5ad051302be9b405_prof);

        
        $__internal_698d8d202ef99d10af762a0f431ec14c687e596d705b6e0317ab301b68c2c585->leave($__internal_698d8d202ef99d10af762a0f431ec14c687e596d705b6e0317ab301b68c2c585_prof);

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
