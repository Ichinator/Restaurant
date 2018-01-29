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
        $__internal_d5189a9010307207d79c8904cdbc2d1e0338be1018b41ff43504b8407fe6a746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5189a9010307207d79c8904cdbc2d1e0338be1018b41ff43504b8407fe6a746->enter($__internal_d5189a9010307207d79c8904cdbc2d1e0338be1018b41ff43504b8407fe6a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:vote_new.html.twig"));

        $__internal_e86afa32df9476a8b34dc1620b75505a225ee89852b85d5508b677fe78f88b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86afa32df9476a8b34dc1620b75505a225ee89852b85d5508b677fe78f88b5c->enter($__internal_e86afa32df9476a8b34dc1620b75505a225ee89852b85d5508b677fe78f88b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:vote_new.html.twig"));

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
        
        $__internal_d5189a9010307207d79c8904cdbc2d1e0338be1018b41ff43504b8407fe6a746->leave($__internal_d5189a9010307207d79c8904cdbc2d1e0338be1018b41ff43504b8407fe6a746_prof);

        
        $__internal_e86afa32df9476a8b34dc1620b75505a225ee89852b85d5508b677fe78f88b5c->leave($__internal_e86afa32df9476a8b34dc1620b75505a225ee89852b85d5508b677fe78f88b5c_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_60c690a7f48e07a9c3ad610fe705a08ae704caaa5940bfc65613e6460babc9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c690a7f48e07a9c3ad610fe705a08ae704caaa5940bfc65613e6460babc9c0->enter($__internal_60c690a7f48e07a9c3ad610fe705a08ae704caaa5940bfc65613e6460babc9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_f5be44e9e745beaae595f3196b6391c16a7f4d54be00631dfd874b047d0258b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5be44e9e745beaae595f3196b6391c16a7f4d54be00631dfd874b047d0258b3->enter($__internal_f5be44e9e745beaae595f3196b6391c16a7f4d54be00631dfd874b047d0258b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_f5be44e9e745beaae595f3196b6391c16a7f4d54be00631dfd874b047d0258b3->leave($__internal_f5be44e9e745beaae595f3196b6391c16a7f4d54be00631dfd874b047d0258b3_prof);

        
        $__internal_60c690a7f48e07a9c3ad610fe705a08ae704caaa5940bfc65613e6460babc9c0->leave($__internal_60c690a7f48e07a9c3ad610fe705a08ae704caaa5940bfc65613e6460babc9c0_prof);

    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_250f7987afa633c87f98441102ad5e188db1c8d9134cd8306208c8dc39698211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250f7987afa633c87f98441102ad5e188db1c8d9134cd8306208c8dc39698211->enter($__internal_250f7987afa633c87f98441102ad5e188db1c8d9134cd8306208c8dc39698211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_89d61233c9a756e1c124fb509f8115b7f09ea649406507fc42eac6ed6656f3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d61233c9a756e1c124fb509f8115b7f09ea649406507fc42eac6ed6656f3e7->enter($__internal_89d61233c9a756e1c124fb509f8115b7f09ea649406507fc42eac6ed6656f3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 25
        echo "                <input type=\"submit\" />
            ";
        
        $__internal_89d61233c9a756e1c124fb509f8115b7f09ea649406507fc42eac6ed6656f3e7->leave($__internal_89d61233c9a756e1c124fb509f8115b7f09ea649406507fc42eac6ed6656f3e7_prof);

        
        $__internal_250f7987afa633c87f98441102ad5e188db1c8d9134cd8306208c8dc39698211->leave($__internal_250f7987afa633c87f98441102ad5e188db1c8d9134cd8306208c8dc39698211_prof);

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
