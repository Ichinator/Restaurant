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
        $__internal_971daac1a27af3678e8090d75e4fd98d63fc6e64ff79742953f9e98603bbcc5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971daac1a27af3678e8090d75e4fd98d63fc6e64ff79742953f9e98603bbcc5d->enter($__internal_971daac1a27af3678e8090d75e4fd98d63fc6e64ff79742953f9e98603bbcc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_7b527184f6dff897dceffba32bdc666f93fc08b194ee6f0575f870888a548bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b527184f6dff897dceffba32bdc666f93fc08b194ee6f0575f870888a548bb0->enter($__internal_7b527184f6dff897dceffba32bdc666f93fc08b194ee6f0575f870888a548bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_971daac1a27af3678e8090d75e4fd98d63fc6e64ff79742953f9e98603bbcc5d->leave($__internal_971daac1a27af3678e8090d75e4fd98d63fc6e64ff79742953f9e98603bbcc5d_prof);

        
        $__internal_7b527184f6dff897dceffba32bdc666f93fc08b194ee6f0575f870888a548bb0->leave($__internal_7b527184f6dff897dceffba32bdc666f93fc08b194ee6f0575f870888a548bb0_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_5a10a97ea0594b274be91fbf2b15c461340686915790a242bd8c86422764f22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a10a97ea0594b274be91fbf2b15c461340686915790a242bd8c86422764f22f->enter($__internal_5a10a97ea0594b274be91fbf2b15c461340686915790a242bd8c86422764f22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_806090c52b9010d8f0cc12c7c5ae61122f5831553bee26ac83b76a4d34753bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806090c52b9010d8f0cc12c7c5ae61122f5831553bee26ac83b76a4d34753bb9->enter($__internal_806090c52b9010d8f0cc12c7c5ae61122f5831553bee26ac83b76a4d34753bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_806090c52b9010d8f0cc12c7c5ae61122f5831553bee26ac83b76a4d34753bb9->leave($__internal_806090c52b9010d8f0cc12c7c5ae61122f5831553bee26ac83b76a4d34753bb9_prof);

        
        $__internal_5a10a97ea0594b274be91fbf2b15c461340686915790a242bd8c86422764f22f->leave($__internal_5a10a97ea0594b274be91fbf2b15c461340686915790a242bd8c86422764f22f_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_de662fae19cde46436ecec744dc1d6f3c3db8af891d40879cf69caddbb700e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de662fae19cde46436ecec744dc1d6f3c3db8af891d40879cf69caddbb700e25->enter($__internal_de662fae19cde46436ecec744dc1d6f3c3db8af891d40879cf69caddbb700e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_dd56ca9360ef2bcf07f449b46603af55fafd27301555d261e66c1ded4501f74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd56ca9360ef2bcf07f449b46603af55fafd27301555d261e66c1ded4501f74e->enter($__internal_dd56ca9360ef2bcf07f449b46603af55fafd27301555d261e66c1ded4501f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_dd56ca9360ef2bcf07f449b46603af55fafd27301555d261e66c1ded4501f74e->leave($__internal_dd56ca9360ef2bcf07f449b46603af55fafd27301555d261e66c1ded4501f74e_prof);

        
        $__internal_de662fae19cde46436ecec744dc1d6f3c3db8af891d40879cf69caddbb700e25->leave($__internal_de662fae19cde46436ecec744dc1d6f3c3db8af891d40879cf69caddbb700e25_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_53bc3668e41fb9e76ee35a9e06b12740fb04b55036c2d34f666c9013852182f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bc3668e41fb9e76ee35a9e06b12740fb04b55036c2d34f666c9013852182f7->enter($__internal_53bc3668e41fb9e76ee35a9e06b12740fb04b55036c2d34f666c9013852182f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_ecde26602b8a69149515f5ac6d24f408b1469481cc83cacabe8aeb34cae5c230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecde26602b8a69149515f5ac6d24f408b1469481cc83cacabe8aeb34cae5c230->enter($__internal_ecde26602b8a69149515f5ac6d24f408b1469481cc83cacabe8aeb34cae5c230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ecde26602b8a69149515f5ac6d24f408b1469481cc83cacabe8aeb34cae5c230->leave($__internal_ecde26602b8a69149515f5ac6d24f408b1469481cc83cacabe8aeb34cae5c230_prof);

        
        $__internal_53bc3668e41fb9e76ee35a9e06b12740fb04b55036c2d34f666c9013852182f7->leave($__internal_53bc3668e41fb9e76ee35a9e06b12740fb04b55036c2d34f666c9013852182f7_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_ceb605f82f78c4181e43aa48318ede8239f2786ee09e7cd78890c8a588ed3a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb605f82f78c4181e43aa48318ede8239f2786ee09e7cd78890c8a588ed3a97->enter($__internal_ceb605f82f78c4181e43aa48318ede8239f2786ee09e7cd78890c8a588ed3a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_9970cefa4b166d2f8b6616e2bbbd27351945069193d1162c33d1a7591b855345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9970cefa4b166d2f8b6616e2bbbd27351945069193d1162c33d1a7591b855345->enter($__internal_9970cefa4b166d2f8b6616e2bbbd27351945069193d1162c33d1a7591b855345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_9970cefa4b166d2f8b6616e2bbbd27351945069193d1162c33d1a7591b855345->leave($__internal_9970cefa4b166d2f8b6616e2bbbd27351945069193d1162c33d1a7591b855345_prof);

        
        $__internal_ceb605f82f78c4181e43aa48318ede8239f2786ee09e7cd78890c8a588ed3a97->leave($__internal_ceb605f82f78c4181e43aa48318ede8239f2786ee09e7cd78890c8a588ed3a97_prof);

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
