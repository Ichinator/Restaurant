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
        $__internal_c7eef3a75850ae8bde8fdf99c3062bd384520faaa1649af8e404383f3f755c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7eef3a75850ae8bde8fdf99c3062bd384520faaa1649af8e404383f3f755c67->enter($__internal_c7eef3a75850ae8bde8fdf99c3062bd384520faaa1649af8e404383f3f755c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:vote_new.html.twig"));

        $__internal_47f453e668f15ee7991386cea4f6fc78fc169331c73bdca969aa3156501a611e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f453e668f15ee7991386cea4f6fc78fc169331c73bdca969aa3156501a611e->enter($__internal_47f453e668f15ee7991386cea4f6fc78fc169331c73bdca969aa3156501a611e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:vote_new.html.twig"));

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
        
        $__internal_c7eef3a75850ae8bde8fdf99c3062bd384520faaa1649af8e404383f3f755c67->leave($__internal_c7eef3a75850ae8bde8fdf99c3062bd384520faaa1649af8e404383f3f755c67_prof);

        
        $__internal_47f453e668f15ee7991386cea4f6fc78fc169331c73bdca969aa3156501a611e->leave($__internal_47f453e668f15ee7991386cea4f6fc78fc169331c73bdca969aa3156501a611e_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_319e1d27bff503cb4cff94856ee4691dd3d16fc1150d86ed1420cc2c04395c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319e1d27bff503cb4cff94856ee4691dd3d16fc1150d86ed1420cc2c04395c03->enter($__internal_319e1d27bff503cb4cff94856ee4691dd3d16fc1150d86ed1420cc2c04395c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_0e5b82851d464788387f75123bbf95b6b8ecd50af4ee428d923a3e7507d983cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5b82851d464788387f75123bbf95b6b8ecd50af4ee428d923a3e7507d983cc->enter($__internal_0e5b82851d464788387f75123bbf95b6b8ecd50af4ee428d923a3e7507d983cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_0e5b82851d464788387f75123bbf95b6b8ecd50af4ee428d923a3e7507d983cc->leave($__internal_0e5b82851d464788387f75123bbf95b6b8ecd50af4ee428d923a3e7507d983cc_prof);

        
        $__internal_319e1d27bff503cb4cff94856ee4691dd3d16fc1150d86ed1420cc2c04395c03->leave($__internal_319e1d27bff503cb4cff94856ee4691dd3d16fc1150d86ed1420cc2c04395c03_prof);

    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_627a9dfcb7336ba5d007452386da0b6d943358fb372008d04e4d95760d953b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627a9dfcb7336ba5d007452386da0b6d943358fb372008d04e4d95760d953b17->enter($__internal_627a9dfcb7336ba5d007452386da0b6d943358fb372008d04e4d95760d953b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_0ed26c36c173552d5033328cb0f4170a1c6a39a563333c3cd4bf14b9cce343dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed26c36c173552d5033328cb0f4170a1c6a39a563333c3cd4bf14b9cce343dc->enter($__internal_0ed26c36c173552d5033328cb0f4170a1c6a39a563333c3cd4bf14b9cce343dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 25
        echo "                <input type=\"submit\" />
            ";
        
        $__internal_0ed26c36c173552d5033328cb0f4170a1c6a39a563333c3cd4bf14b9cce343dc->leave($__internal_0ed26c36c173552d5033328cb0f4170a1c6a39a563333c3cd4bf14b9cce343dc_prof);

        
        $__internal_627a9dfcb7336ba5d007452386da0b6d943358fb372008d04e4d95760d953b17->leave($__internal_627a9dfcb7336ba5d007452386da0b6d943358fb372008d04e4d95760d953b17_prof);

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
