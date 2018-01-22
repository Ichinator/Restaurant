<?php

/* FOSCommentBundle:Thread:vote_new.html.twig */
class __TwigTemplate_fae02fbae06bfdfb2b11c324cd0c38002cc67fea2dca215095f5363f15991665 extends Twig_Template
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
        $__internal_2b916095a7a4f07df1cf90e971eb98929b92d4f5222ab4b918653dfba174d7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b916095a7a4f07df1cf90e971eb98929b92d4f5222ab4b918653dfba174d7fa->enter($__internal_2b916095a7a4f07df1cf90e971eb98929b92d4f5222ab4b918653dfba174d7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:vote_new.html.twig"));

        $__internal_569649db6e253248cd788be4fb5985b83aa7a8ecd9f0e5629a7b90cd6c30f2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569649db6e253248cd788be4fb5985b83aa7a8ecd9f0e5629a7b90cd6c30f2d7->enter($__internal_569649db6e253248cd788be4fb5985b83aa7a8ecd9f0e5629a7b90cd6c30f2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:vote_new.html.twig"));

        // line 11
        echo "
<div class=\"fos_comment_vote_form_holder\">
    <form class=\"fos_comment_vote_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_post_thread_comment_votes", array("id" => ($context["id"] ?? $this->getContext($context, "id")), "commentId" => ($context["commentId"] ?? $this->getContext($context, "commentId")))), "html", null, true);
        echo "\" data-score-holder=\"fos_comment_score_";
        echo twig_escape_filter($this->env, ($context["commentId"] ?? $this->getContext($context, "commentId")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 22
        echo "
        <div class=\"fos_comment_submit\">
            ";
        // line 24
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 27
        echo "        </div>

    </form>
</div>
";
        
        $__internal_2b916095a7a4f07df1cf90e971eb98929b92d4f5222ab4b918653dfba174d7fa->leave($__internal_2b916095a7a4f07df1cf90e971eb98929b92d4f5222ab4b918653dfba174d7fa_prof);

        
        $__internal_569649db6e253248cd788be4fb5985b83aa7a8ecd9f0e5629a7b90cd6c30f2d7->leave($__internal_569649db6e253248cd788be4fb5985b83aa7a8ecd9f0e5629a7b90cd6c30f2d7_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_a314af5681bdab3bb9de58086d315ecc7975592ed5bd02e06818a2fa427aeedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a314af5681bdab3bb9de58086d315ecc7975592ed5bd02e06818a2fa427aeedf->enter($__internal_a314af5681bdab3bb9de58086d315ecc7975592ed5bd02e06818a2fa427aeedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_e6da108e15f48809934264b914cb6a8622f5b9d272200e4146f41fb6fb63414f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6da108e15f48809934264b914cb6a8622f5b9d272200e4146f41fb6fb63414f->enter($__internal_e6da108e15f48809934264b914cb6a8622f5b9d272200e4146f41fb6fb63414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "value", array()), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "value", array()), 'widget');
        echo "

            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        ";
        
        $__internal_e6da108e15f48809934264b914cb6a8622f5b9d272200e4146f41fb6fb63414f->leave($__internal_e6da108e15f48809934264b914cb6a8622f5b9d272200e4146f41fb6fb63414f_prof);

        
        $__internal_a314af5681bdab3bb9de58086d315ecc7975592ed5bd02e06818a2fa427aeedf->leave($__internal_a314af5681bdab3bb9de58086d315ecc7975592ed5bd02e06818a2fa427aeedf_prof);

    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_874ace3a160a1ff10bfc356b20d4045c71f5059766b1f1ef4a630ae43d8e7850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874ace3a160a1ff10bfc356b20d4045c71f5059766b1f1ef4a630ae43d8e7850->enter($__internal_874ace3a160a1ff10bfc356b20d4045c71f5059766b1f1ef4a630ae43d8e7850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_e0972ac78f201752fa009935fec3133ec8c13a66733e4628257777f1eb3920ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0972ac78f201752fa009935fec3133ec8c13a66733e4628257777f1eb3920ac->enter($__internal_e0972ac78f201752fa009935fec3133ec8c13a66733e4628257777f1eb3920ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 25
        echo "                <input type=\"submit\" />
            ";
        
        $__internal_e0972ac78f201752fa009935fec3133ec8c13a66733e4628257777f1eb3920ac->leave($__internal_e0972ac78f201752fa009935fec3133ec8c13a66733e4628257777f1eb3920ac_prof);

        
        $__internal_874ace3a160a1ff10bfc356b20d4045c71f5059766b1f1ef4a630ae43d8e7850->leave($__internal_874ace3a160a1ff10bfc356b20d4045c71f5059766b1f1ef4a630ae43d8e7850_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:vote_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  95 => 24,  83 => 20,  78 => 18,  74 => 17,  69 => 16,  60 => 15,  46 => 27,  44 => 24,  40 => 22,  38 => 15,  31 => 13,  27 => 11,);
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

<div class=\"fos_comment_vote_form_holder\">
    <form class=\"fos_comment_vote_form\" action=\"{{ url('fos_comment_post_thread_comment_votes', {'id': id, 'commentId': commentId}) }}\" data-score-holder=\"fos_comment_score_{{ commentId }}\" method=\"POST\">

        {% block fos_comment_form_fields %}
            {{ form_errors(form) }}
            {{ form_errors(form.value) }}
            {{ form_widget(form.value) }}

            {{ form_rest(form) }}
        {% endblock %}

        <div class=\"fos_comment_submit\">
            {% block fos_comment_form_submit %}
                <input type=\"submit\" />
            {% endblock %}
        </div>

    </form>
</div>
", "FOSCommentBundle:Thread:vote_new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/vote_new.html.twig");
    }
}
