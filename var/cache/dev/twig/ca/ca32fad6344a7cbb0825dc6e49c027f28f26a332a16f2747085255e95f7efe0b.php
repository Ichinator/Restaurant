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
        $__internal_704abc147a5796b931258f18c6582d1256b0b9657fa2bb346ad11f1e0b1dc936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704abc147a5796b931258f18c6582d1256b0b9657fa2bb346ad11f1e0b1dc936->enter($__internal_704abc147a5796b931258f18c6582d1256b0b9657fa2bb346ad11f1e0b1dc936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a5331b60403ffb941534f69a32c05bba9f614f33fdf378f2baa6f68ef429dc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5331b60403ffb941534f69a32c05bba9f614f33fdf378f2baa6f68ef429dc13->enter($__internal_a5331b60403ffb941534f69a32c05bba9f614f33fdf378f2baa6f68ef429dc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_704abc147a5796b931258f18c6582d1256b0b9657fa2bb346ad11f1e0b1dc936->leave($__internal_704abc147a5796b931258f18c6582d1256b0b9657fa2bb346ad11f1e0b1dc936_prof);

        
        $__internal_a5331b60403ffb941534f69a32c05bba9f614f33fdf378f2baa6f68ef429dc13->leave($__internal_a5331b60403ffb941534f69a32c05bba9f614f33fdf378f2baa6f68ef429dc13_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6a3ae442adc29022d26c260a55cc97ce05f6ecb41bf6850d34a84e134806c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a3ae442adc29022d26c260a55cc97ce05f6ecb41bf6850d34a84e134806c22->enter($__internal_e6a3ae442adc29022d26c260a55cc97ce05f6ecb41bf6850d34a84e134806c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b82ce0c3b3ccbe38862c10e6451c56a5fc9ad130f1b4a93c6adeaf84475b341d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82ce0c3b3ccbe38862c10e6451c56a5fc9ad130f1b4a93c6adeaf84475b341d->enter($__internal_b82ce0c3b3ccbe38862c10e6451c56a5fc9ad130f1b4a93c6adeaf84475b341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b82ce0c3b3ccbe38862c10e6451c56a5fc9ad130f1b4a93c6adeaf84475b341d->leave($__internal_b82ce0c3b3ccbe38862c10e6451c56a5fc9ad130f1b4a93c6adeaf84475b341d_prof);

        
        $__internal_e6a3ae442adc29022d26c260a55cc97ce05f6ecb41bf6850d34a84e134806c22->leave($__internal_e6a3ae442adc29022d26c260a55cc97ce05f6ecb41bf6850d34a84e134806c22_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_606d64394204b8c5800b7338ccf15886bc0a34d7e4b95ca6b196b237fd8617d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606d64394204b8c5800b7338ccf15886bc0a34d7e4b95ca6b196b237fd8617d4->enter($__internal_606d64394204b8c5800b7338ccf15886bc0a34d7e4b95ca6b196b237fd8617d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22c82c061da9335b34ad6f1d12da12559598d16412753b335bfdeb7b421437eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c82c061da9335b34ad6f1d12da12559598d16412753b335bfdeb7b421437eb->enter($__internal_22c82c061da9335b34ad6f1d12da12559598d16412753b335bfdeb7b421437eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_22c82c061da9335b34ad6f1d12da12559598d16412753b335bfdeb7b421437eb->leave($__internal_22c82c061da9335b34ad6f1d12da12559598d16412753b335bfdeb7b421437eb_prof);

        
        $__internal_606d64394204b8c5800b7338ccf15886bc0a34d7e4b95ca6b196b237fd8617d4->leave($__internal_606d64394204b8c5800b7338ccf15886bc0a34d7e4b95ca6b196b237fd8617d4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f683d65770b8de90ed3e27293703349b5f078d400eb002b54906e85018d414c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f683d65770b8de90ed3e27293703349b5f078d400eb002b54906e85018d414c->enter($__internal_5f683d65770b8de90ed3e27293703349b5f078d400eb002b54906e85018d414c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26188e12bbe3f108cabf2be04166abf2d8264587759aced4c6a673eab1fd1d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26188e12bbe3f108cabf2be04166abf2d8264587759aced4c6a673eab1fd1d5a->enter($__internal_26188e12bbe3f108cabf2be04166abf2d8264587759aced4c6a673eab1fd1d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_26188e12bbe3f108cabf2be04166abf2d8264587759aced4c6a673eab1fd1d5a->leave($__internal_26188e12bbe3f108cabf2be04166abf2d8264587759aced4c6a673eab1fd1d5a_prof);

        
        $__internal_5f683d65770b8de90ed3e27293703349b5f078d400eb002b54906e85018d414c->leave($__internal_5f683d65770b8de90ed3e27293703349b5f078d400eb002b54906e85018d414c_prof);

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
