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
        $__internal_30e75c7b4dd71af046fb35a5a962f2b0e2cd71ccc0ec166680557840023bad6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e75c7b4dd71af046fb35a5a962f2b0e2cd71ccc0ec166680557840023bad6e->enter($__internal_30e75c7b4dd71af046fb35a5a962f2b0e2cd71ccc0ec166680557840023bad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_217d1a858abcce8c6ffba59becf19de6ba771b7e75f1b7314bc87471e2bba29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217d1a858abcce8c6ffba59becf19de6ba771b7e75f1b7314bc87471e2bba29b->enter($__internal_217d1a858abcce8c6ffba59becf19de6ba771b7e75f1b7314bc87471e2bba29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_30e75c7b4dd71af046fb35a5a962f2b0e2cd71ccc0ec166680557840023bad6e->leave($__internal_30e75c7b4dd71af046fb35a5a962f2b0e2cd71ccc0ec166680557840023bad6e_prof);

        
        $__internal_217d1a858abcce8c6ffba59becf19de6ba771b7e75f1b7314bc87471e2bba29b->leave($__internal_217d1a858abcce8c6ffba59becf19de6ba771b7e75f1b7314bc87471e2bba29b_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_7ba544e97f30761b678b7bbde635865ae10f9282ea53420852f2dafcb6ca4c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba544e97f30761b678b7bbde635865ae10f9282ea53420852f2dafcb6ca4c19->enter($__internal_7ba544e97f30761b678b7bbde635865ae10f9282ea53420852f2dafcb6ca4c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_3505bef6bc4ae0839511ab2bd8368a2b6ffbfc7e2c2ed3fd842b91fa67f7da2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3505bef6bc4ae0839511ab2bd8368a2b6ffbfc7e2c2ed3fd842b91fa67f7da2a->enter($__internal_3505bef6bc4ae0839511ab2bd8368a2b6ffbfc7e2c2ed3fd842b91fa67f7da2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3505bef6bc4ae0839511ab2bd8368a2b6ffbfc7e2c2ed3fd842b91fa67f7da2a->leave($__internal_3505bef6bc4ae0839511ab2bd8368a2b6ffbfc7e2c2ed3fd842b91fa67f7da2a_prof);

        
        $__internal_7ba544e97f30761b678b7bbde635865ae10f9282ea53420852f2dafcb6ca4c19->leave($__internal_7ba544e97f30761b678b7bbde635865ae10f9282ea53420852f2dafcb6ca4c19_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_de5e9a08a32d4cc23cfd65ead872416270162d7457956a504548fd78bbf85afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5e9a08a32d4cc23cfd65ead872416270162d7457956a504548fd78bbf85afa->enter($__internal_de5e9a08a32d4cc23cfd65ead872416270162d7457956a504548fd78bbf85afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_7d03ba29c84dcd38f4fdfea7061b6ed2957c65c55e73b9b64a1ed8f9d04729a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d03ba29c84dcd38f4fdfea7061b6ed2957c65c55e73b9b64a1ed8f9d04729a4->enter($__internal_7d03ba29c84dcd38f4fdfea7061b6ed2957c65c55e73b9b64a1ed8f9d04729a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_7d03ba29c84dcd38f4fdfea7061b6ed2957c65c55e73b9b64a1ed8f9d04729a4->leave($__internal_7d03ba29c84dcd38f4fdfea7061b6ed2957c65c55e73b9b64a1ed8f9d04729a4_prof);

        
        $__internal_de5e9a08a32d4cc23cfd65ead872416270162d7457956a504548fd78bbf85afa->leave($__internal_de5e9a08a32d4cc23cfd65ead872416270162d7457956a504548fd78bbf85afa_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_ddbdabc62b83837ab7847933dbff568c1aa2e0ab289eb794f52a662d66356ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddbdabc62b83837ab7847933dbff568c1aa2e0ab289eb794f52a662d66356ac4->enter($__internal_ddbdabc62b83837ab7847933dbff568c1aa2e0ab289eb794f52a662d66356ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_743f9f33f95de51c8157d59945dec1846fb89688330288282659d5780ebcfd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743f9f33f95de51c8157d59945dec1846fb89688330288282659d5780ebcfd91->enter($__internal_743f9f33f95de51c8157d59945dec1846fb89688330288282659d5780ebcfd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_743f9f33f95de51c8157d59945dec1846fb89688330288282659d5780ebcfd91->leave($__internal_743f9f33f95de51c8157d59945dec1846fb89688330288282659d5780ebcfd91_prof);

        
        $__internal_ddbdabc62b83837ab7847933dbff568c1aa2e0ab289eb794f52a662d66356ac4->leave($__internal_ddbdabc62b83837ab7847933dbff568c1aa2e0ab289eb794f52a662d66356ac4_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_cfa58b7667a56cf6d27a8179b6fe8d653f64e8f8d059aea142b5cd7c368316fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa58b7667a56cf6d27a8179b6fe8d653f64e8f8d059aea142b5cd7c368316fd->enter($__internal_cfa58b7667a56cf6d27a8179b6fe8d653f64e8f8d059aea142b5cd7c368316fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_b42954515b9558eddc5fcf87ee46c789da9142bdd42e2242ec6b0c120015006f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42954515b9558eddc5fcf87ee46c789da9142bdd42e2242ec6b0c120015006f->enter($__internal_b42954515b9558eddc5fcf87ee46c789da9142bdd42e2242ec6b0c120015006f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_b42954515b9558eddc5fcf87ee46c789da9142bdd42e2242ec6b0c120015006f->leave($__internal_b42954515b9558eddc5fcf87ee46c789da9142bdd42e2242ec6b0c120015006f_prof);

        
        $__internal_cfa58b7667a56cf6d27a8179b6fe8d653f64e8f8d059aea142b5cd7c368316fd->leave($__internal_cfa58b7667a56cf6d27a8179b6fe8d653f64e8f8d059aea142b5cd7c368316fd_prof);

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
