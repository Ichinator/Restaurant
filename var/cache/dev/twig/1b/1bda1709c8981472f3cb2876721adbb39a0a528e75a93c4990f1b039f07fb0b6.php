<?php

/* FOSCommentBundle:Thread:async.html.twig */
class __TwigTemplate_588e6695eda93904eae7a0bb542742749a64f26d7107cb11facd343a09c3888b extends Twig_Template
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
        $__internal_261ebe508744b1118b27e86f6439ec41984e30c63534f037d4a8ec4df9c91db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261ebe508744b1118b27e86f6439ec41984e30c63534f037d4a8ec4df9c91db6->enter($__internal_261ebe508744b1118b27e86f6439ec41984e30c63534f037d4a8ec4df9c91db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:async.html.twig"));

        $__internal_4bdae7b7dea7a0f80a11b8fb77931b5bed25528a2a425645f503085e81b706b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdae7b7dea7a0f80a11b8fb77931b5bed25528a2a425645f503085e81b706b1->enter($__internal_4bdae7b7dea7a0f80a11b8fb77931b5bed25528a2a425645f503085e81b706b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:async.html.twig"));

        // line 11
        echo "
<div id=\"fos_comment_thread\"></div>

<script type=\"text/javascript\">
    // thread id
    var fos_comment_thread_id = '";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "';
    var fos_comment_thread_view = '";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("view", $context)) ? (_twig_default_filter(($context["view"] ?? $this->getContext($context, "view")), "tree")) : ("tree")), "html", null, true);
        echo "';

    // api base url to use for initial requests
    var fos_comment_thread_api_base_url = '";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_comment_get_threads");
        echo "';

    // Snippet for asynchronously loading the comments
    (function() {
        var fos_comment_script = document.createElement('script');
        fos_comment_script.async = true;
        fos_comment_script.src = '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/foscomment/js/comments.js"), "html", null, true);
        echo "';
        fos_comment_script.type = 'text/javascript';

        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
    })();
</script>
";
        
        $__internal_261ebe508744b1118b27e86f6439ec41984e30c63534f037d4a8ec4df9c91db6->leave($__internal_261ebe508744b1118b27e86f6439ec41984e30c63534f037d4a8ec4df9c91db6_prof);

        
        $__internal_4bdae7b7dea7a0f80a11b8fb77931b5bed25528a2a425645f503085e81b706b1->leave($__internal_4bdae7b7dea7a0f80a11b8fb77931b5bed25528a2a425645f503085e81b706b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 26,  42 => 20,  36 => 17,  32 => 16,  25 => 11,);
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

<div id=\"fos_comment_thread\"></div>

<script type=\"text/javascript\">
    // thread id
    var fos_comment_thread_id = '{{ id }}';
    var fos_comment_thread_view = '{{ view|default('tree') }}';

    // api base url to use for initial requests
    var fos_comment_thread_api_base_url = '{{ path('fos_comment_get_threads') }}';

    // Snippet for asynchronously loading the comments
    (function() {
        var fos_comment_script = document.createElement('script');
        fos_comment_script.async = true;
        fos_comment_script.src = '{{ asset('bundles/foscomment/js/comments.js') }}';
        fos_comment_script.type = 'text/javascript';

        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
    })();
</script>
", "FOSCommentBundle:Thread:async.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/async.html.twig");
    }
}
