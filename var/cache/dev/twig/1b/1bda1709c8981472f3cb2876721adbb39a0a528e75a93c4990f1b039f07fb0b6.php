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
        $__internal_fbd2efa120382525c8baf93cede9d411b11ed016c34adcee13d170056e3b694d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd2efa120382525c8baf93cede9d411b11ed016c34adcee13d170056e3b694d->enter($__internal_fbd2efa120382525c8baf93cede9d411b11ed016c34adcee13d170056e3b694d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:async.html.twig"));

        $__internal_3b66d5960df0ade877542f857cb375aaca4434001fd9957da8449f6df5435d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b66d5960df0ade877542f857cb375aaca4434001fd9957da8449f6df5435d70->enter($__internal_3b66d5960df0ade877542f857cb375aaca4434001fd9957da8449f6df5435d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:async.html.twig"));

        // line 11
        echo "
<div id=\"fos_comment_thread\"></div>

<script type=\"text/javascript\">
    // thread id
    var fos_comment_thread_id = '";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "';

    // api base url to use for initial requests
    var fos_comment_thread_api_base_url = '";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_comment_get_threads");
        echo "';

    // Snippet for asynchronously loading the comments
    (function() {
        var fos_comment_script = document.createElement('script');
        fos_comment_script.async = true;
        fos_comment_script.src = '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/foscomment/js/comments.js"), "html", null, true);
        echo "';
        fos_comment_script.type = 'text/javascript';

        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
    })();
</script>
";
        
        $__internal_fbd2efa120382525c8baf93cede9d411b11ed016c34adcee13d170056e3b694d->leave($__internal_fbd2efa120382525c8baf93cede9d411b11ed016c34adcee13d170056e3b694d_prof);

        
        $__internal_3b66d5960df0ade877542f857cb375aaca4434001fd9957da8449f6df5435d70->leave($__internal_3b66d5960df0ade877542f857cb375aaca4434001fd9957da8449f6df5435d70_prof);

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
        return array (  47 => 25,  38 => 19,  32 => 16,  25 => 11,);
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
