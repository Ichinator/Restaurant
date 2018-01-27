<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c8be5e464561c72f74f4c0761d0cfa6086f3888e680eeba2228aefe1308d1347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_51b091bbffcb8a8ee29a58691ab1216e756947972ff0a13fbd606eb550590f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b091bbffcb8a8ee29a58691ab1216e756947972ff0a13fbd606eb550590f05->enter($__internal_51b091bbffcb8a8ee29a58691ab1216e756947972ff0a13fbd606eb550590f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_75dafb4606289c02059544c37db85361aac76856081496d02f5ace032aeccc2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dafb4606289c02059544c37db85361aac76856081496d02f5ace032aeccc2b->enter($__internal_75dafb4606289c02059544c37db85361aac76856081496d02f5ace032aeccc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b091bbffcb8a8ee29a58691ab1216e756947972ff0a13fbd606eb550590f05->leave($__internal_51b091bbffcb8a8ee29a58691ab1216e756947972ff0a13fbd606eb550590f05_prof);

        
        $__internal_75dafb4606289c02059544c37db85361aac76856081496d02f5ace032aeccc2b->leave($__internal_75dafb4606289c02059544c37db85361aac76856081496d02f5ace032aeccc2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f987a8179a92279e077ce87f08ecf99490250e0b1d21da28452fa23a8d49ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f987a8179a92279e077ce87f08ecf99490250e0b1d21da28452fa23a8d49ad3->enter($__internal_3f987a8179a92279e077ce87f08ecf99490250e0b1d21da28452fa23a8d49ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3bd4073b5915378535b59b6d86666c1061eb485f0855bd3fbc1266b30642449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bd4073b5915378535b59b6d86666c1061eb485f0855bd3fbc1266b30642449->enter($__internal_d3bd4073b5915378535b59b6d86666c1061eb485f0855bd3fbc1266b30642449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d3bd4073b5915378535b59b6d86666c1061eb485f0855bd3fbc1266b30642449->leave($__internal_d3bd4073b5915378535b59b6d86666c1061eb485f0855bd3fbc1266b30642449_prof);

        
        $__internal_3f987a8179a92279e077ce87f08ecf99490250e0b1d21da28452fa23a8d49ad3->leave($__internal_3f987a8179a92279e077ce87f08ecf99490250e0b1d21da28452fa23a8d49ad3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3b79479ee3907c6add2a28516f5254c64a4463b74372487572252281c88db6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b79479ee3907c6add2a28516f5254c64a4463b74372487572252281c88db6d->enter($__internal_b3b79479ee3907c6add2a28516f5254c64a4463b74372487572252281c88db6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eb2facbba353b88ef5d72c120e3970858f118a50eee453a1ec69d793b79f23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb2facbba353b88ef5d72c120e3970858f118a50eee453a1ec69d793b79f23d->enter($__internal_3eb2facbba353b88ef5d72c120e3970858f118a50eee453a1ec69d793b79f23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3eb2facbba353b88ef5d72c120e3970858f118a50eee453a1ec69d793b79f23d->leave($__internal_3eb2facbba353b88ef5d72c120e3970858f118a50eee453a1ec69d793b79f23d_prof);

        
        $__internal_b3b79479ee3907c6add2a28516f5254c64a4463b74372487572252281c88db6d->leave($__internal_b3b79479ee3907c6add2a28516f5254c64a4463b74372487572252281c88db6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
