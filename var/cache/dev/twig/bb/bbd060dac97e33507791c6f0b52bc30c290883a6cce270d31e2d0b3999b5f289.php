<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ffdfa462c28a7a6e32a26c1071625606d012712f2b36b43a9d0d2c0e3018d29f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4d96834610b7af4e918f1babc8b8005c8513722b998f28e048b45ff25d4ed54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d96834610b7af4e918f1babc8b8005c8513722b998f28e048b45ff25d4ed54->enter($__internal_e4d96834610b7af4e918f1babc8b8005c8513722b998f28e048b45ff25d4ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff8952c472c2b882c4882b4a9b11d10a3b8f7b35f8b5559987bf86e2f461d431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8952c472c2b882c4882b4a9b11d10a3b8f7b35f8b5559987bf86e2f461d431->enter($__internal_ff8952c472c2b882c4882b4a9b11d10a3b8f7b35f8b5559987bf86e2f461d431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d96834610b7af4e918f1babc8b8005c8513722b998f28e048b45ff25d4ed54->leave($__internal_e4d96834610b7af4e918f1babc8b8005c8513722b998f28e048b45ff25d4ed54_prof);

        
        $__internal_ff8952c472c2b882c4882b4a9b11d10a3b8f7b35f8b5559987bf86e2f461d431->leave($__internal_ff8952c472c2b882c4882b4a9b11d10a3b8f7b35f8b5559987bf86e2f461d431_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_199f7909691ec29573514e81989c69df111db383eef0353214a67483a0c92657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199f7909691ec29573514e81989c69df111db383eef0353214a67483a0c92657->enter($__internal_199f7909691ec29573514e81989c69df111db383eef0353214a67483a0c92657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd5e302355875e8b17d6fbf4b2fe01a4142c24713c240b0a9303093e10858a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5e302355875e8b17d6fbf4b2fe01a4142c24713c240b0a9303093e10858a56->enter($__internal_bd5e302355875e8b17d6fbf4b2fe01a4142c24713c240b0a9303093e10858a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bd5e302355875e8b17d6fbf4b2fe01a4142c24713c240b0a9303093e10858a56->leave($__internal_bd5e302355875e8b17d6fbf4b2fe01a4142c24713c240b0a9303093e10858a56_prof);

        
        $__internal_199f7909691ec29573514e81989c69df111db383eef0353214a67483a0c92657->leave($__internal_199f7909691ec29573514e81989c69df111db383eef0353214a67483a0c92657_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96d6eaa8fec2ca0976e77c6891ff69696365c16b3115b711036bd0f0441f239a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d6eaa8fec2ca0976e77c6891ff69696365c16b3115b711036bd0f0441f239a->enter($__internal_96d6eaa8fec2ca0976e77c6891ff69696365c16b3115b711036bd0f0441f239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f7e247c58c02ef386dee9fc69b8b32e34756b7e1fbbb24196698243b491c766d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e247c58c02ef386dee9fc69b8b32e34756b7e1fbbb24196698243b491c766d->enter($__internal_f7e247c58c02ef386dee9fc69b8b32e34756b7e1fbbb24196698243b491c766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f7e247c58c02ef386dee9fc69b8b32e34756b7e1fbbb24196698243b491c766d->leave($__internal_f7e247c58c02ef386dee9fc69b8b32e34756b7e1fbbb24196698243b491c766d_prof);

        
        $__internal_96d6eaa8fec2ca0976e77c6891ff69696365c16b3115b711036bd0f0441f239a->leave($__internal_96d6eaa8fec2ca0976e77c6891ff69696365c16b3115b711036bd0f0441f239a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae00539a339d664a520090c714eab6b47c25f382889d558fa54c60f8bbfa460a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae00539a339d664a520090c714eab6b47c25f382889d558fa54c60f8bbfa460a->enter($__internal_ae00539a339d664a520090c714eab6b47c25f382889d558fa54c60f8bbfa460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5efa4ddc6162ed07b3405e8c5b87e759df0aad8cf0fa147dabe3c5f140a9a7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efa4ddc6162ed07b3405e8c5b87e759df0aad8cf0fa147dabe3c5f140a9a7cc->enter($__internal_5efa4ddc6162ed07b3405e8c5b87e759df0aad8cf0fa147dabe3c5f140a9a7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5efa4ddc6162ed07b3405e8c5b87e759df0aad8cf0fa147dabe3c5f140a9a7cc->leave($__internal_5efa4ddc6162ed07b3405e8c5b87e759df0aad8cf0fa147dabe3c5f140a9a7cc_prof);

        
        $__internal_ae00539a339d664a520090c714eab6b47c25f382889d558fa54c60f8bbfa460a->leave($__internal_ae00539a339d664a520090c714eab6b47c25f382889d558fa54c60f8bbfa460a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
