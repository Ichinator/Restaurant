<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0ac40669758c4455de38d58af93d63a2f5c995478eec6539872035fc9301b977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83e6b5a93a093e976788c21438e2175ada25ddef66a2a7a470033201007a60a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e6b5a93a093e976788c21438e2175ada25ddef66a2a7a470033201007a60a8->enter($__internal_83e6b5a93a093e976788c21438e2175ada25ddef66a2a7a470033201007a60a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0cab44000f928edf797e7e63fe0694e0f11252707aa21f317c06eec9688ddd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cab44000f928edf797e7e63fe0694e0f11252707aa21f317c06eec9688ddd09->enter($__internal_0cab44000f928edf797e7e63fe0694e0f11252707aa21f317c06eec9688ddd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83e6b5a93a093e976788c21438e2175ada25ddef66a2a7a470033201007a60a8->leave($__internal_83e6b5a93a093e976788c21438e2175ada25ddef66a2a7a470033201007a60a8_prof);

        
        $__internal_0cab44000f928edf797e7e63fe0694e0f11252707aa21f317c06eec9688ddd09->leave($__internal_0cab44000f928edf797e7e63fe0694e0f11252707aa21f317c06eec9688ddd09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f805f354c7a0caecfed2da14988b96ab4f047689f98e2cc4713912545e85d71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f805f354c7a0caecfed2da14988b96ab4f047689f98e2cc4713912545e85d71c->enter($__internal_f805f354c7a0caecfed2da14988b96ab4f047689f98e2cc4713912545e85d71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64bd0fa7cabe353b0f3745349fd308b8c633a07a9f269a6e7befaaa5bc6b95a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bd0fa7cabe353b0f3745349fd308b8c633a07a9f269a6e7befaaa5bc6b95a3->enter($__internal_64bd0fa7cabe353b0f3745349fd308b8c633a07a9f269a6e7befaaa5bc6b95a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_64bd0fa7cabe353b0f3745349fd308b8c633a07a9f269a6e7befaaa5bc6b95a3->leave($__internal_64bd0fa7cabe353b0f3745349fd308b8c633a07a9f269a6e7befaaa5bc6b95a3_prof);

        
        $__internal_f805f354c7a0caecfed2da14988b96ab4f047689f98e2cc4713912545e85d71c->leave($__internal_f805f354c7a0caecfed2da14988b96ab4f047689f98e2cc4713912545e85d71c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e02b3edf401d0a9786d8a8c14e96363b1ccff208587266af91f030b740b41c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02b3edf401d0a9786d8a8c14e96363b1ccff208587266af91f030b740b41c51->enter($__internal_e02b3edf401d0a9786d8a8c14e96363b1ccff208587266af91f030b740b41c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55538e0c435a66fa0df5a8545e236dc4e3e7751d8e55fdffff45c17d75aca188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55538e0c435a66fa0df5a8545e236dc4e3e7751d8e55fdffff45c17d75aca188->enter($__internal_55538e0c435a66fa0df5a8545e236dc4e3e7751d8e55fdffff45c17d75aca188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55538e0c435a66fa0df5a8545e236dc4e3e7751d8e55fdffff45c17d75aca188->leave($__internal_55538e0c435a66fa0df5a8545e236dc4e3e7751d8e55fdffff45c17d75aca188_prof);

        
        $__internal_e02b3edf401d0a9786d8a8c14e96363b1ccff208587266af91f030b740b41c51->leave($__internal_e02b3edf401d0a9786d8a8c14e96363b1ccff208587266af91f030b740b41c51_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7785a58920b2238544455f41b7228ef08ca4efe84dfb7173e4ff0c8e21dc650f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7785a58920b2238544455f41b7228ef08ca4efe84dfb7173e4ff0c8e21dc650f->enter($__internal_7785a58920b2238544455f41b7228ef08ca4efe84dfb7173e4ff0c8e21dc650f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2eac76abc2cef96588275564e4810f8b9fbb0976cb96f76ba8bd70af0db94298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eac76abc2cef96588275564e4810f8b9fbb0976cb96f76ba8bd70af0db94298->enter($__internal_2eac76abc2cef96588275564e4810f8b9fbb0976cb96f76ba8bd70af0db94298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2eac76abc2cef96588275564e4810f8b9fbb0976cb96f76ba8bd70af0db94298->leave($__internal_2eac76abc2cef96588275564e4810f8b9fbb0976cb96f76ba8bd70af0db94298_prof);

        
        $__internal_7785a58920b2238544455f41b7228ef08ca4efe84dfb7173e4ff0c8e21dc650f->leave($__internal_7785a58920b2238544455f41b7228ef08ca4efe84dfb7173e4ff0c8e21dc650f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
