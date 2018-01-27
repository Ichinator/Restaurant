<?php

/* FOSCommentBundle:Thread:commentable.html.twig */
class __TwigTemplate_aa6e42f21f3aa8200d64cd74a14b10fa8aa78923a9470c9f1243471d6c74f35e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_157e72c01f30f05dfca5e9dca36d12988c173145079c2afe0e24d7282110c658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157e72c01f30f05dfca5e9dca36d12988c173145079c2afe0e24d7282110c658->enter($__internal_157e72c01f30f05dfca5e9dca36d12988c173145079c2afe0e24d7282110c658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:commentable.html.twig"));

        $__internal_cb35ed1d34e756d4d6f36baac404c44c5a1e69c39cb5e8ce3361507ee25e929e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb35ed1d34e756d4d6f36baac404c44c5a1e69c39cb5e8ce3361507ee25e929e->enter($__internal_cb35ed1d34e756d4d6f36baac404c44c5a1e69c39cb5e8ce3361507ee25e929e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:commentable.html.twig"));

        // line 11
        echo "
<div class=\"fos_comment_commentable_form_holder\">
    <form class=\"fos_comment_commentable_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_patch_thread_commentable", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\" data-fos-comment-thread-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 23
        echo "
        <div class=\"fos_comment_submit\">
            ";
        // line 25
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 28
        echo "        </div>

    </form>
</div>
";
        
        $__internal_157e72c01f30f05dfca5e9dca36d12988c173145079c2afe0e24d7282110c658->leave($__internal_157e72c01f30f05dfca5e9dca36d12988c173145079c2afe0e24d7282110c658_prof);

        
        $__internal_cb35ed1d34e756d4d6f36baac404c44c5a1e69c39cb5e8ce3361507ee25e929e->leave($__internal_cb35ed1d34e756d4d6f36baac404c44c5a1e69c39cb5e8ce3361507ee25e929e_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_3e16776dee3e77f4b3ea4277cddcaf6fe69a2594191814f6f6fa164f16066446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e16776dee3e77f4b3ea4277cddcaf6fe69a2594191814f6f6fa164f16066446->enter($__internal_3e16776dee3e77f4b3ea4277cddcaf6fe69a2594191814f6f6fa164f16066446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_0a59431f799ef8a52277cd773289ad238b40266fe5e9e5f3744727ca49ef2198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a59431f799ef8a52277cd773289ad238b40266fe5e9e5f3744727ca49ef2198->enter($__internal_0a59431f799ef8a52277cd773289ad238b40266fe5e9e5f3744727ca49ef2198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isCommentable", array()), 'errors');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isCommentable", array()), 'widget');
        echo "

            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        ";
        
        $__internal_0a59431f799ef8a52277cd773289ad238b40266fe5e9e5f3744727ca49ef2198->leave($__internal_0a59431f799ef8a52277cd773289ad238b40266fe5e9e5f3744727ca49ef2198_prof);

        
        $__internal_3e16776dee3e77f4b3ea4277cddcaf6fe69a2594191814f6f6fa164f16066446->leave($__internal_3e16776dee3e77f4b3ea4277cddcaf6fe69a2594191814f6f6fa164f16066446_prof);

    }

    // line 25
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_a3fd7ccf02a0334084de39f3794366b5854eb32b7a5d0e2ffedfbaaf77ad9c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fd7ccf02a0334084de39f3794366b5854eb32b7a5d0e2ffedfbaaf77ad9c54->enter($__internal_a3fd7ccf02a0334084de39f3794366b5854eb32b7a5d0e2ffedfbaaf77ad9c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_74ac87a83b0ce27240cd57aa19cc945ce2f7e3d8a0e3a1207a3acae83147c241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ac87a83b0ce27240cd57aa19cc945ce2f7e3d8a0e3a1207a3acae83147c241->enter($__internal_74ac87a83b0ce27240cd57aa19cc945ce2f7e3d8a0e3a1207a3acae83147c241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 26
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((($context["isCommentable"] ?? $this->getContext($context, "isCommentable"))) ? ("fos_comment_thread_open") : ("fos_comment_thread_close")), array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
        
        $__internal_74ac87a83b0ce27240cd57aa19cc945ce2f7e3d8a0e3a1207a3acae83147c241->leave($__internal_74ac87a83b0ce27240cd57aa19cc945ce2f7e3d8a0e3a1207a3acae83147c241_prof);

        
        $__internal_a3fd7ccf02a0334084de39f3794366b5854eb32b7a5d0e2ffedfbaaf77ad9c54->leave($__internal_a3fd7ccf02a0334084de39f3794366b5854eb32b7a5d0e2ffedfbaaf77ad9c54_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:commentable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  96 => 25,  84 => 21,  79 => 19,  75 => 18,  69 => 16,  60 => 15,  46 => 28,  44 => 25,  40 => 23,  38 => 15,  31 => 13,  27 => 11,);
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

<div class=\"fos_comment_commentable_form_holder\">
    <form class=\"fos_comment_commentable_form\" action=\"{{ url('fos_comment_patch_thread_commentable', {'id': id}) }}\" data-fos-comment-thread-id=\"{{ id }}\" method=\"POST\">

        {% block fos_comment_form_fields %}
            {{ form_errors(form) }}

            {{ form_errors(form.isCommentable) }}
            {{ form_widget(form.isCommentable) }}

            {{ form_rest(form) }}
        {% endblock %}

        <div class=\"fos_comment_submit\">
            {% block fos_comment_form_submit %}
                <input type=\"submit\" value=\"{{ (isCommentable ? 'fos_comment_thread_open' : 'fos_comment_thread_close') | trans({}, 'FOSCommentBundle') }}\" />
            {% endblock %}
        </div>

    </form>
</div>
", "FOSCommentBundle:Thread:commentable.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/commentable.html.twig");
    }
}
