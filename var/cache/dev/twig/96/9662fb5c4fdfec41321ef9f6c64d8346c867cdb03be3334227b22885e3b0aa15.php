<?php

/* FOSCommentBundle:Thread:comment_remove.html.twig */
class __TwigTemplate_45ee277f3858a2dced7be22ce64d22dcbd0d2c4c6f002566b1956fd332e4a0d4 extends Twig_Template
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
        $__internal_b144afd5ee1611fa6c0edcc61d10a55d33261220c9cbf23be177ec088b0dd5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b144afd5ee1611fa6c0edcc61d10a55d33261220c9cbf23be177ec088b0dd5a7->enter($__internal_b144afd5ee1611fa6c0edcc61d10a55d33261220c9cbf23be177ec088b0dd5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_remove.html.twig"));

        $__internal_288d225d17068cac706d142faba117ae1df737286c3118ee25414c61d2d552d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288d225d17068cac706d142faba117ae1df737286c3118ee25414c61d2d552d0->enter($__internal_288d225d17068cac706d142faba117ae1df737286c3118ee25414c61d2d552d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_remove.html.twig"));

        // line 11
        echo "
<div class=\"fos_comment_delete_form_holder\">
    <form class=\"fos_comment_delete_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_patch_thread_comment_state", array("id" => ($context["id"] ?? $this->getContext($context, "id")), "commentId" => ($context["commentId"] ?? $this->getContext($context, "commentId")))), "html", null, true);
        echo "\" data-fos-comment-thread-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 20
        echo "
        <div class=\"fos_comment_submit\">
            ";
        // line 22
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 25
        echo "        </div>

    </form>
</div>
";
        
        $__internal_b144afd5ee1611fa6c0edcc61d10a55d33261220c9cbf23be177ec088b0dd5a7->leave($__internal_b144afd5ee1611fa6c0edcc61d10a55d33261220c9cbf23be177ec088b0dd5a7_prof);

        
        $__internal_288d225d17068cac706d142faba117ae1df737286c3118ee25414c61d2d552d0->leave($__internal_288d225d17068cac706d142faba117ae1df737286c3118ee25414c61d2d552d0_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_205fc9dddc7afbb922e8dd83fbd5aeaea6607b97cda9d7ba7fb1e1dbfa031d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205fc9dddc7afbb922e8dd83fbd5aeaea6607b97cda9d7ba7fb1e1dbfa031d12->enter($__internal_205fc9dddc7afbb922e8dd83fbd5aeaea6607b97cda9d7ba7fb1e1dbfa031d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_fdce3da7c65f5077faf5e284958261c5ca0fff7187104b8a651fc72d2125764b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdce3da7c65f5077faf5e284958261c5ca0fff7187104b8a651fc72d2125764b->enter($__internal_fdce3da7c65f5077faf5e284958261c5ca0fff7187104b8a651fc72d2125764b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        ";
        
        $__internal_fdce3da7c65f5077faf5e284958261c5ca0fff7187104b8a651fc72d2125764b->leave($__internal_fdce3da7c65f5077faf5e284958261c5ca0fff7187104b8a651fc72d2125764b_prof);

        
        $__internal_205fc9dddc7afbb922e8dd83fbd5aeaea6607b97cda9d7ba7fb1e1dbfa031d12->leave($__internal_205fc9dddc7afbb922e8dd83fbd5aeaea6607b97cda9d7ba7fb1e1dbfa031d12_prof);

    }

    // line 22
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_26ae35ce72f6c46a8413b0606049355b1cf769f14786f0d5dc6e2f9a0417d9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ae35ce72f6c46a8413b0606049355b1cf769f14786f0d5dc6e2f9a0417d9bd->enter($__internal_26ae35ce72f6c46a8413b0606049355b1cf769f14786f0d5dc6e2f9a0417d9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_d9263daa299fe314b2199a443c9d62a15280b0ef8a351cf218020f23be5efe10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9263daa299fe314b2199a443c9d62a15280b0ef8a351cf218020f23be5efe10->enter($__internal_d9263daa299fe314b2199a443c9d62a15280b0ef8a351cf218020f23be5efe10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 23
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fos_comment_comment_delete", array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
        
        $__internal_d9263daa299fe314b2199a443c9d62a15280b0ef8a351cf218020f23be5efe10->leave($__internal_d9263daa299fe314b2199a443c9d62a15280b0ef8a351cf218020f23be5efe10_prof);

        
        $__internal_26ae35ce72f6c46a8413b0606049355b1cf769f14786f0d5dc6e2f9a0417d9bd->leave($__internal_26ae35ce72f6c46a8413b0606049355b1cf769f14786f0d5dc6e2f9a0417d9bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_remove.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  87 => 22,  75 => 18,  69 => 16,  60 => 15,  46 => 25,  44 => 22,  40 => 20,  38 => 15,  31 => 13,  27 => 11,);
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

<div class=\"fos_comment_delete_form_holder\">
    <form class=\"fos_comment_delete_form\" action=\"{{ url('fos_comment_patch_thread_comment_state', {'id': id, 'commentId': commentId}) }}\" data-fos-comment-thread-id=\"{{ id }}\" method=\"POST\">

        {% block fos_comment_form_fields %}
            {{ form_errors(form) }}

            {{ form_rest(form) }}
        {% endblock %}

        <div class=\"fos_comment_submit\">
            {% block fos_comment_form_submit %}
                <input type=\"submit\" value=\"{{ 'fos_comment_comment_delete' | trans({}, 'FOSCommentBundle') }}\" />
            {% endblock %}
        </div>

    </form>
</div>
", "FOSCommentBundle:Thread:comment_remove.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_remove.html.twig");
    }
}
