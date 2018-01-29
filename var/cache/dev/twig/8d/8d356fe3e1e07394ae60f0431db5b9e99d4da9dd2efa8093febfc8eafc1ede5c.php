<?php

/* FOSCommentBundle:Thread:comment_votes.html.twig */
class __TwigTemplate_3c5a9a5da4324e67561f017cb4ee51d923b76fa4496a326f84f3e196679745ab extends Twig_Template
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
        $__internal_bc2cd2621dd65fcd96019af968db9306b05a0bd4ea8f68a4e090c3895b07bcaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2cd2621dd65fcd96019af968db9306b05a0bd4ea8f68a4e090c3895b07bcaa->enter($__internal_bc2cd2621dd65fcd96019af968db9306b05a0bd4ea8f68a4e090c3895b07bcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_votes.html.twig"));

        $__internal_77d42fcdbb4d487bccb31389a4713164583eec1f68718102855a0a8c9a56d479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d42fcdbb4d487bccb31389a4713164583eec1f68718102855a0a8c9a56d479->enter($__internal_77d42fcdbb4d487bccb31389a4713164583eec1f68718102855a0a8c9a56d479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_votes.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_vote_score", array(), "FOSCommentBundle");
        echo " ";
        echo twig_escape_filter($this->env, ($context["commentScore"] ?? $this->getContext($context, "commentScore")), "html", null, true);
        echo "
";
        
        $__internal_bc2cd2621dd65fcd96019af968db9306b05a0bd4ea8f68a4e090c3895b07bcaa->leave($__internal_bc2cd2621dd65fcd96019af968db9306b05a0bd4ea8f68a4e090c3895b07bcaa_prof);

        
        $__internal_77d42fcdbb4d487bccb31389a4713164583eec1f68718102855a0a8c9a56d479->leave($__internal_77d42fcdbb4d487bccb31389a4713164583eec1f68718102855a0a8c9a56d479_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_votes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

{% trans from 'FOSCommentBundle' %}fos_comment_comment_vote_score{% endtrans %} {{ commentScore }}
", "FOSCommentBundle:Thread:comment_votes.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_votes.html.twig");
    }
}
