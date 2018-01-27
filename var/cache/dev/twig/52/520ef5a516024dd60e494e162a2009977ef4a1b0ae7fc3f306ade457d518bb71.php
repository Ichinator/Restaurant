<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_37386f93683c2951c5f8f954d90018fcefc771f557e8177160f081127ca0f699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f2fdb9b9196848fab2260bfc2938700e6a66f0ad5bb83ed796189da4b7c7fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f2fdb9b9196848fab2260bfc2938700e6a66f0ad5bb83ed796189da4b7c7fc8->enter($__internal_8f2fdb9b9196848fab2260bfc2938700e6a66f0ad5bb83ed796189da4b7c7fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_4e387fb70b4020bf6db7b3b7d94d78f4a873f7b46c65334c9ccdcf9aa6332fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e387fb70b4020bf6db7b3b7d94d78f4a873f7b46c65334c9ccdcf9aa6332fc9->enter($__internal_4e387fb70b4020bf6db7b3b7d94d78f4a873f7b46c65334c9ccdcf9aa6332fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_8f2fdb9b9196848fab2260bfc2938700e6a66f0ad5bb83ed796189da4b7c7fc8->leave($__internal_8f2fdb9b9196848fab2260bfc2938700e6a66f0ad5bb83ed796189da4b7c7fc8_prof);

        
        $__internal_4e387fb70b4020bf6db7b3b7d94d78f4a873f7b46c65334c9ccdcf9aa6332fc9->leave($__internal_4e387fb70b4020bf6db7b3b7d94d78f4a873f7b46c65334c9ccdcf9aa6332fc9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
