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
        $__internal_03273e3dff4615f531c60d2a45a87b518f84ea5b8199b1bfd1038626e7f33b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03273e3dff4615f531c60d2a45a87b518f84ea5b8199b1bfd1038626e7f33b6d->enter($__internal_03273e3dff4615f531c60d2a45a87b518f84ea5b8199b1bfd1038626e7f33b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_votes.html.twig"));

        $__internal_cf5a8075d6279748720f860b4bf5e1b25c8195003bdf470c5e438a155be93781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5a8075d6279748720f860b4bf5e1b25c8195003bdf470c5e438a155be93781->enter($__internal_cf5a8075d6279748720f860b4bf5e1b25c8195003bdf470c5e438a155be93781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_votes.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_vote_score", array(), "FOSCommentBundle");
        echo " ";
        echo twig_escape_filter($this->env, ($context["commentScore"] ?? $this->getContext($context, "commentScore")), "html", null, true);
        echo "
";
        
        $__internal_03273e3dff4615f531c60d2a45a87b518f84ea5b8199b1bfd1038626e7f33b6d->leave($__internal_03273e3dff4615f531c60d2a45a87b518f84ea5b8199b1bfd1038626e7f33b6d_prof);

        
        $__internal_cf5a8075d6279748720f860b4bf5e1b25c8195003bdf470c5e438a155be93781->leave($__internal_cf5a8075d6279748720f860b4bf5e1b25c8195003bdf470c5e438a155be93781_prof);

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
