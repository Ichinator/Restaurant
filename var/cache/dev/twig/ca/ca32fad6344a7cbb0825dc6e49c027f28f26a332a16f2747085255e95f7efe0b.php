<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bdc7a26903df0c2dd7479c8171e82058efda6765d5fe46e468b267969f57d924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_cb83f29025593eceb53d15e1092bbc9fbe9a9406351ea3538e79fb42e339435e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb83f29025593eceb53d15e1092bbc9fbe9a9406351ea3538e79fb42e339435e->enter($__internal_cb83f29025593eceb53d15e1092bbc9fbe9a9406351ea3538e79fb42e339435e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5cb9e489b55572432d4324ddce4a78f2e47a513339015f6217bf7c3f6bde44cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb9e489b55572432d4324ddce4a78f2e47a513339015f6217bf7c3f6bde44cc->enter($__internal_5cb9e489b55572432d4324ddce4a78f2e47a513339015f6217bf7c3f6bde44cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb83f29025593eceb53d15e1092bbc9fbe9a9406351ea3538e79fb42e339435e->leave($__internal_cb83f29025593eceb53d15e1092bbc9fbe9a9406351ea3538e79fb42e339435e_prof);

        
        $__internal_5cb9e489b55572432d4324ddce4a78f2e47a513339015f6217bf7c3f6bde44cc->leave($__internal_5cb9e489b55572432d4324ddce4a78f2e47a513339015f6217bf7c3f6bde44cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92ce7fa6057cd96948bcfc304d90b4b8eb5be9c0de78db0c1941b6eda0117b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ce7fa6057cd96948bcfc304d90b4b8eb5be9c0de78db0c1941b6eda0117b25->enter($__internal_92ce7fa6057cd96948bcfc304d90b4b8eb5be9c0de78db0c1941b6eda0117b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d0eeba476247912a6c54694e4705d836d3666aae8e2fe15f9991d90609ec2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0eeba476247912a6c54694e4705d836d3666aae8e2fe15f9991d90609ec2b2->enter($__internal_1d0eeba476247912a6c54694e4705d836d3666aae8e2fe15f9991d90609ec2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1d0eeba476247912a6c54694e4705d836d3666aae8e2fe15f9991d90609ec2b2->leave($__internal_1d0eeba476247912a6c54694e4705d836d3666aae8e2fe15f9991d90609ec2b2_prof);

        
        $__internal_92ce7fa6057cd96948bcfc304d90b4b8eb5be9c0de78db0c1941b6eda0117b25->leave($__internal_92ce7fa6057cd96948bcfc304d90b4b8eb5be9c0de78db0c1941b6eda0117b25_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_82398b3c10f758a863477adb9c4ae7c694de0b23cfb69dc43a13489f31a185fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82398b3c10f758a863477adb9c4ae7c694de0b23cfb69dc43a13489f31a185fe->enter($__internal_82398b3c10f758a863477adb9c4ae7c694de0b23cfb69dc43a13489f31a185fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ad42dc41f83f399974c20a02a4c6893707fcc54b8ebeb6a0f0ed520fc8dd44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad42dc41f83f399974c20a02a4c6893707fcc54b8ebeb6a0f0ed520fc8dd44b->enter($__internal_8ad42dc41f83f399974c20a02a4c6893707fcc54b8ebeb6a0f0ed520fc8dd44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ad42dc41f83f399974c20a02a4c6893707fcc54b8ebeb6a0f0ed520fc8dd44b->leave($__internal_8ad42dc41f83f399974c20a02a4c6893707fcc54b8ebeb6a0f0ed520fc8dd44b_prof);

        
        $__internal_82398b3c10f758a863477adb9c4ae7c694de0b23cfb69dc43a13489f31a185fe->leave($__internal_82398b3c10f758a863477adb9c4ae7c694de0b23cfb69dc43a13489f31a185fe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a434940be224544b3c74fb00cb850da6f12e8247b6a00d6e911c3f083e185403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a434940be224544b3c74fb00cb850da6f12e8247b6a00d6e911c3f083e185403->enter($__internal_a434940be224544b3c74fb00cb850da6f12e8247b6a00d6e911c3f083e185403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4692f0c1937c022645031e9b5e4189cb108b2a93d84b3c9da6152dd864089227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4692f0c1937c022645031e9b5e4189cb108b2a93d84b3c9da6152dd864089227->enter($__internal_4692f0c1937c022645031e9b5e4189cb108b2a93d84b3c9da6152dd864089227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4692f0c1937c022645031e9b5e4189cb108b2a93d84b3c9da6152dd864089227->leave($__internal_4692f0c1937c022645031e9b5e4189cb108b2a93d84b3c9da6152dd864089227_prof);

        
        $__internal_a434940be224544b3c74fb00cb850da6f12e8247b6a00d6e911c3f083e185403->leave($__internal_a434940be224544b3c74fb00cb850da6f12e8247b6a00d6e911c3f083e185403_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
