<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bdc7a26903df0c2dd7479c8171e82058efda6765d5fe46e468b267969f57d924 extends Twig_Template
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
        $__internal_881a29bf1276c0344b5e85e32a570aed2188de08f8de65894948156f17c824c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881a29bf1276c0344b5e85e32a570aed2188de08f8de65894948156f17c824c1->enter($__internal_881a29bf1276c0344b5e85e32a570aed2188de08f8de65894948156f17c824c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7ba976a8f8b56b4d940fd22d810bc50e7319b8413944cba2527e01c0694b3776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba976a8f8b56b4d940fd22d810bc50e7319b8413944cba2527e01c0694b3776->enter($__internal_7ba976a8f8b56b4d940fd22d810bc50e7319b8413944cba2527e01c0694b3776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_881a29bf1276c0344b5e85e32a570aed2188de08f8de65894948156f17c824c1->leave($__internal_881a29bf1276c0344b5e85e32a570aed2188de08f8de65894948156f17c824c1_prof);

        
        $__internal_7ba976a8f8b56b4d940fd22d810bc50e7319b8413944cba2527e01c0694b3776->leave($__internal_7ba976a8f8b56b4d940fd22d810bc50e7319b8413944cba2527e01c0694b3776_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c12a96d5f6fffd757f6f9bb3cb24dc99d7572286375220dfce0763bf20f5e873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12a96d5f6fffd757f6f9bb3cb24dc99d7572286375220dfce0763bf20f5e873->enter($__internal_c12a96d5f6fffd757f6f9bb3cb24dc99d7572286375220dfce0763bf20f5e873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e08b945269160c5aaf2cdce7c5872bff7d0e6ca183a67ab8080aa6ed98530ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08b945269160c5aaf2cdce7c5872bff7d0e6ca183a67ab8080aa6ed98530ac6->enter($__internal_e08b945269160c5aaf2cdce7c5872bff7d0e6ca183a67ab8080aa6ed98530ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e08b945269160c5aaf2cdce7c5872bff7d0e6ca183a67ab8080aa6ed98530ac6->leave($__internal_e08b945269160c5aaf2cdce7c5872bff7d0e6ca183a67ab8080aa6ed98530ac6_prof);

        
        $__internal_c12a96d5f6fffd757f6f9bb3cb24dc99d7572286375220dfce0763bf20f5e873->leave($__internal_c12a96d5f6fffd757f6f9bb3cb24dc99d7572286375220dfce0763bf20f5e873_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f2159922710bbb50eae3cfe95d74ab37bd065646fb1a3a428a0ea00a25872d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2159922710bbb50eae3cfe95d74ab37bd065646fb1a3a428a0ea00a25872d0->enter($__internal_9f2159922710bbb50eae3cfe95d74ab37bd065646fb1a3a428a0ea00a25872d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a09e028396625bded1df7383abd7c6ed61516f2bcdbd934d9f861c5a8d1737f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a09e028396625bded1df7383abd7c6ed61516f2bcdbd934d9f861c5a8d1737f->enter($__internal_0a09e028396625bded1df7383abd7c6ed61516f2bcdbd934d9f861c5a8d1737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a09e028396625bded1df7383abd7c6ed61516f2bcdbd934d9f861c5a8d1737f->leave($__internal_0a09e028396625bded1df7383abd7c6ed61516f2bcdbd934d9f861c5a8d1737f_prof);

        
        $__internal_9f2159922710bbb50eae3cfe95d74ab37bd065646fb1a3a428a0ea00a25872d0->leave($__internal_9f2159922710bbb50eae3cfe95d74ab37bd065646fb1a3a428a0ea00a25872d0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b45b6e67816ac7550f2c11ac2bc3023a6656968da986e0ae4b768df87e199b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45b6e67816ac7550f2c11ac2bc3023a6656968da986e0ae4b768df87e199b67->enter($__internal_b45b6e67816ac7550f2c11ac2bc3023a6656968da986e0ae4b768df87e199b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3686cd78595871fb07b3bb25fc6c2e7b3a499b0fbe18891e7f67507b65f4b281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3686cd78595871fb07b3bb25fc6c2e7b3a499b0fbe18891e7f67507b65f4b281->enter($__internal_3686cd78595871fb07b3bb25fc6c2e7b3a499b0fbe18891e7f67507b65f4b281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3686cd78595871fb07b3bb25fc6c2e7b3a499b0fbe18891e7f67507b65f4b281->leave($__internal_3686cd78595871fb07b3bb25fc6c2e7b3a499b0fbe18891e7f67507b65f4b281_prof);

        
        $__internal_b45b6e67816ac7550f2c11ac2bc3023a6656968da986e0ae4b768df87e199b67->leave($__internal_b45b6e67816ac7550f2c11ac2bc3023a6656968da986e0ae4b768df87e199b67_prof);

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
