<?php

/* FOSCommentBundle:Thread:comment.html.twig */
class __TwigTemplate_dfe2b587f8efa36b2139bbc46a7accd47bc1da471e8917612b039515ca2cc9d2 extends Twig_Template
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
        $__internal_9dcde9e5feec4d48c145f2416b072d5b58be35071f359cd2f7eea9f0cf54543a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dcde9e5feec4d48c145f2416b072d5b58be35071f359cd2f7eea9f0cf54543a->enter($__internal_9dcde9e5feec4d48c145f2416b072d5b58be35071f359cd2f7eea9f0cf54543a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment.html.twig"));

        $__internal_5805733c7f151665def6e1d2c4a53eadc430c1097e64bcc57617ea477e6ad521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5805733c7f151665def6e1d2c4a53eadc430c1097e64bcc57617ea477e6ad521->enter($__internal_5805733c7f151665def6e1d2c4a53eadc430c1097e64bcc57617ea477e6ad521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter(($context["view"] ?? $this->getContext($context, "view")), "tree")) : ("tree"));
        // line 13
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter(($context["depth"] ?? $this->getContext($context, "depth")), 0)) : (0));
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("FOSCommentBundle:Thread:comment_content.html.twig", "FOSCommentBundle:Thread:comment.html.twig", 15)->display($context);
        
        $__internal_9dcde9e5feec4d48c145f2416b072d5b58be35071f359cd2f7eea9f0cf54543a->leave($__internal_9dcde9e5feec4d48c145f2416b072d5b58be35071f359cd2f7eea9f0cf54543a_prof);

        
        $__internal_5805733c7f151665def6e1d2c4a53eadc430c1097e64bcc57617ea477e6ad521->leave($__internal_5805733c7f151665def6e1d2c4a53eadc430c1097e64bcc57617ea477e6ad521_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  32 => 14,  30 => 13,  28 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

{% set view = view|default('tree') %}
{% set depth = depth|default(0) %}

{% include \"FOSCommentBundle:Thread:comment_content.html.twig\" %}
", "FOSCommentBundle:Thread:comment.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment.html.twig");
    }
}
