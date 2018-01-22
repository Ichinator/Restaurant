<?php

/* FOSCommentBundle:Thread:comments.html.twig */
class __TwigTemplate_48698430a953e66caf550e9cf8c51062a26516a0ff4489cac9782d5ac3a0bf55 extends Twig_Template
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
        $__internal_2c0bcc3b83ed754819192fed7698077b5f76a9c30d872635547277167f410cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0bcc3b83ed754819192fed7698077b5f76a9c30d872635547277167f410cb0->enter($__internal_2c0bcc3b83ed754819192fed7698077b5f76a9c30d872635547277167f410cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comments.html.twig"));

        $__internal_f9d1cbbefe8808b75f410fbde7d38cf4ae7c7c06497353519636c5c767341bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d1cbbefe8808b75f410fbde7d38cf4ae7c7c06497353519636c5c767341bff->enter($__internal_f9d1cbbefe8808b75f410fbde7d38cf4ae7c7c06497353519636c5c767341bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comments.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter(($context["depth"] ?? $this->getContext($context, "depth")), 0)) : (0));
        // line 13
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter(($context["view"] ?? $this->getContext($context, "view")), "tree")) : ("tree"));
        // line 14
        echo "
";
        // line 15
        if ((($context["depth"] ?? $this->getContext($context, "depth")) == 0)) {
            // line 16
            echo "    ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canCommentThread(($context["thread"] ?? $this->getContext($context, "thread")))) {
                // line 17
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()))));
                echo "
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canEditThread(($context["thread"] ?? $this->getContext($context, "thread")))) {
                // line 21
                echo "    <div class=\"fos_comment_thread_commentable\">
        <button data-url=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_edit_thread_commentable", array("id" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()), "value" =>  !$this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "commentable", array()))), "html", null, true);
                echo "\" class=\"fos_comment_thread_commentable_action\">
            ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "commentable", array())) ? ("fos_comment_thread_close") : ("fos_comment_thread_open")), array(), "FOSCommentBundle"), "html", null, true);
                echo "
        </button>
    </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            $context["count"] = $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "numComments", array());
            // line 29
            echo "    <h3>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("fos_comment_thread_comment_count", ($context["count"] ?? $this->getContext($context, "count")), array("%count%" => ($context["count"] ?? $this->getContext($context, "count"))), "FOSCommentBundle");
            echo "</h3>
";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["commentinfo"]) {
            // line 33
            echo "    ";
            $this->loadTemplate("FOSCommentBundle:Thread:comment.html.twig", "FOSCommentBundle:Thread:comments.html.twig", 33)->display(array_merge($context, array("children" => $this->getAttribute($context["commentinfo"], "children", array()), "comment" => $this->getAttribute($context["commentinfo"], "comment", array()), "depth" => ($context["depth"] ?? $this->getContext($context, "depth")), "view" => ($context["view"] ?? $this->getContext($context, "view")))));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentinfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2c0bcc3b83ed754819192fed7698077b5f76a9c30d872635547277167f410cb0->leave($__internal_2c0bcc3b83ed754819192fed7698077b5f76a9c30d872635547277167f410cb0_prof);

        
        $__internal_f9d1cbbefe8808b75f410fbde7d38cf4ae7c7c06497353519636c5c767341bff->leave($__internal_f9d1cbbefe8808b75f410fbde7d38cf4ae7c7c06497353519636c5c767341bff_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  79 => 32,  76 => 31,  70 => 29,  68 => 28,  65 => 27,  58 => 23,  54 => 22,  51 => 21,  49 => 20,  46 => 19,  40 => 17,  37 => 16,  35 => 15,  32 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% set depth = depth|default(0) %}
{% set view = view|default('tree') %}

{% if depth == 0 %}
    {% if fos_comment_can_comment_thread(thread) %}
        {{ render(url('fos_comment_new_thread_comments', {\"id\": thread.id})) }}
    {% endif %}

    {% if fos_comment_can_edit_thread(thread) %}
    <div class=\"fos_comment_thread_commentable\">
        <button data-url=\"{{ url('fos_comment_edit_thread_commentable', {'id': thread.id, 'value': not thread.commentable}) }}\" class=\"fos_comment_thread_commentable_action\">
            {{ (thread.commentable ? 'fos_comment_thread_close' : 'fos_comment_thread_open') | trans({}, 'FOSCommentBundle') }}
        </button>
    </div>
    {% endif %}

    {% set count = thread.numComments %}
    <h3>{% transchoice count with {'%count%': count} from \"FOSCommentBundle\" %}fos_comment_thread_comment_count{% endtranschoice %}</h3>
{% endif %}

{% for commentinfo in comments %}
    {% include \"FOSCommentBundle:Thread:comment.html.twig\" with { \"children\": commentinfo.children, \"comment\": commentinfo.comment, \"depth\": depth, \"view\": view } %}
{% endfor %}
", "FOSCommentBundle:Thread:comments.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comments.html.twig");
    }
}
