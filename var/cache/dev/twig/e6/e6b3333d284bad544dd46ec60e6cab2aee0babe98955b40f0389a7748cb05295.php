<?php

/* FOSCommentBundle:Thread:thread_xml_feed.rss.twig */
class __TwigTemplate_aaa00d58d81e86f7c58b32fea4771912626f386dde3281b68cf117f7badd7270 extends Twig_Template
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
        $__internal_82ee8963c96ceba5768be5a0c1956b92e98bbdf538f48712e90bf6a2289b7879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ee8963c96ceba5768be5a0c1956b92e98bbdf538f48712e90bf6a2289b7879->enter($__internal_82ee8963c96ceba5768be5a0c1956b92e98bbdf538f48712e90bf6a2289b7879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:thread_xml_feed.rss.twig"));

        $__internal_bf7de8baa00d36b7e166201a2d1c355d59446cae43ecd68e817856068450441f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7de8baa00d36b7e166201a2d1c355d59446cae43ecd68e817856068450441f->enter($__internal_bf7de8baa00d36b7e166201a2d1c355d59446cae43ecd68e817856068450441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:thread_xml_feed.rss.twig"));

        // line 11
        echo "
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()), "html", null, true);
        echo "</title>
    <id>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()), "html", null, true);
        echo "</id>
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "permalink", array()), "html", null, true);
        echo "\" rel=\"alternate\" />
    <updated>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "lastCommentAt", array()), "c"), "html", null, true);
        echo "</updated>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentinfo"]) {
            // line 18
            echo "    <entry>
        <title>By ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "authorName", array()), "html", null, true);
            echo " on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "createdAt", array())), "html", null, true);
            echo "</title>
        <author>
            <name>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "authorName", array()), "html", null, true);
            echo "</name>
        </author>
        <updated>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "createdAt", array()), "c"), "html", null, true);
            echo "</updated>
        <link rel=\"alternate\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "permalink", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "id", array()), "html", null, true);
            echo "</link>
        <summary>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "body", array()), "html", null, true);
            echo "</summary>
    </entry>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentinfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</feed>
";
        
        $__internal_82ee8963c96ceba5768be5a0c1956b92e98bbdf538f48712e90bf6a2289b7879->leave($__internal_82ee8963c96ceba5768be5a0c1956b92e98bbdf538f48712e90bf6a2289b7879_prof);

        
        $__internal_bf7de8baa00d36b7e166201a2d1c355d59446cae43ecd68e817856068450441f->leave($__internal_bf7de8baa00d36b7e166201a2d1c355d59446cae43ecd68e817856068450441f_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:thread_xml_feed.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  74 => 25,  68 => 24,  64 => 23,  59 => 21,  52 => 19,  49 => 18,  45 => 17,  41 => 16,  37 => 15,  33 => 14,  29 => 13,  25 => 11,);
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

<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>{{ thread.id }}</title>
    <id>{{ thread.id }}</id>
    <link href=\"{{ thread.permalink }}\" rel=\"alternate\" />
    <updated>{{ thread.lastCommentAt|date(\"c\") }}</updated>
{% for commentinfo in comments %}
    <entry>
        <title>By {{ commentinfo.comment.authorName }} on {{ commentinfo.comment.createdAt|date }}</title>
        <author>
            <name>{{ commentinfo.comment.authorName }}</name>
        </author>
        <updated>{{ commentinfo.comment.createdAt|date(\"c\") }}</updated>
        <link rel=\"alternate\">{{ thread.permalink }}#{{ commentinfo.comment.id }}</link>
        <summary>{{ commentinfo.comment.body }}</summary>
    </entry>
{% endfor %}
</feed>
", "FOSCommentBundle:Thread:thread_xml_feed.rss.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/thread_xml_feed.rss.twig");
    }
}
