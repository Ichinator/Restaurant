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
        $__internal_08739994719883b3c42138f45c0b5fd9f04a6e25edab9e4e35ced07905097da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08739994719883b3c42138f45c0b5fd9f04a6e25edab9e4e35ced07905097da4->enter($__internal_08739994719883b3c42138f45c0b5fd9f04a6e25edab9e4e35ced07905097da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:commentable.html.twig"));

        $__internal_c080582ff6a9d3ac5995fbf07409e9590a8f1da12b62527038f59716739cb870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c080582ff6a9d3ac5995fbf07409e9590a8f1da12b62527038f59716739cb870->enter($__internal_c080582ff6a9d3ac5995fbf07409e9590a8f1da12b62527038f59716739cb870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:commentable.html.twig"));

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
        
        $__internal_08739994719883b3c42138f45c0b5fd9f04a6e25edab9e4e35ced07905097da4->leave($__internal_08739994719883b3c42138f45c0b5fd9f04a6e25edab9e4e35ced07905097da4_prof);

        
        $__internal_c080582ff6a9d3ac5995fbf07409e9590a8f1da12b62527038f59716739cb870->leave($__internal_c080582ff6a9d3ac5995fbf07409e9590a8f1da12b62527038f59716739cb870_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_a20933babb00a431fead91a086e8c6c433ac7e5cdf3501bef300018a4ff69474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20933babb00a431fead91a086e8c6c433ac7e5cdf3501bef300018a4ff69474->enter($__internal_a20933babb00a431fead91a086e8c6c433ac7e5cdf3501bef300018a4ff69474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_3e456540138299ea913e4472562c905a1156dd594186e9eab9793e24663744a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e456540138299ea913e4472562c905a1156dd594186e9eab9793e24663744a7->enter($__internal_3e456540138299ea913e4472562c905a1156dd594186e9eab9793e24663744a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_3e456540138299ea913e4472562c905a1156dd594186e9eab9793e24663744a7->leave($__internal_3e456540138299ea913e4472562c905a1156dd594186e9eab9793e24663744a7_prof);

        
        $__internal_a20933babb00a431fead91a086e8c6c433ac7e5cdf3501bef300018a4ff69474->leave($__internal_a20933babb00a431fead91a086e8c6c433ac7e5cdf3501bef300018a4ff69474_prof);

    }

    // line 25
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_37991778aa9214662920dcdeb18f1ec0d51b353dcb330b69d910434eb226b3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37991778aa9214662920dcdeb18f1ec0d51b353dcb330b69d910434eb226b3a5->enter($__internal_37991778aa9214662920dcdeb18f1ec0d51b353dcb330b69d910434eb226b3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_153257bc1ee2854f9e5472da496e70a099704816480cd4a6754c3728f42f4f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153257bc1ee2854f9e5472da496e70a099704816480cd4a6754c3728f42f4f55->enter($__internal_153257bc1ee2854f9e5472da496e70a099704816480cd4a6754c3728f42f4f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 26
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((($context["isCommentable"] ?? $this->getContext($context, "isCommentable"))) ? ("fos_comment_thread_open") : ("fos_comment_thread_close")), array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
        
        $__internal_153257bc1ee2854f9e5472da496e70a099704816480cd4a6754c3728f42f4f55->leave($__internal_153257bc1ee2854f9e5472da496e70a099704816480cd4a6754c3728f42f4f55_prof);

        
        $__internal_37991778aa9214662920dcdeb18f1ec0d51b353dcb330b69d910434eb226b3a5->leave($__internal_37991778aa9214662920dcdeb18f1ec0d51b353dcb330b69d910434eb226b3a5_prof);

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
