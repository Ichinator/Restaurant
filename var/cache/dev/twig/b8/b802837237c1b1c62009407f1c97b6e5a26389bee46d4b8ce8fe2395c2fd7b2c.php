<?php

/* FOSCommentBundle:Thread:comment_edit.html.twig */
class __TwigTemplate_7b70c9bd790468db7247cf644789d648ca5c80d58df9c4dc3969c733f6569250 extends Twig_Template
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
        $__internal_699a8973f7f000f8c2a21bce092e8b302fd1c14b8e02659c08af787153c1fe8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699a8973f7f000f8c2a21bce092e8b302fd1c14b8e02659c08af787153c1fe8b->enter($__internal_699a8973f7f000f8c2a21bce092e8b302fd1c14b8e02659c08af787153c1fe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_edit.html.twig"));

        $__internal_42b3065ab96bd17f2af5a3cabcbdf20db1d3f87332c099907d8ab156ebfe0942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b3065ab96bd17f2af5a3cabcbdf20db1d3f87332c099907d8ab156ebfe0942->enter($__internal_42b3065ab96bd17f2af5a3cabcbdf20db1d3f87332c099907d8ab156ebfe0942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_edit.html.twig"));

        // line 11
        echo "
<div class=\"fos_comment_comment_form_holder\">
    <form class=\"fos_comment_comment_edit_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_put_thread_comments", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 21
        echo "
        <div class=\"fos_comment_submit\">
            <button type=\"button\" class=\"fos_comment_comment_edit_cancel\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_edit_cancel", array(), "FOSCommentBundle");
        echo "</button>
            ";
        // line 24
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 27
        echo "        </div>

    </form>
</div>
";
        
        $__internal_699a8973f7f000f8c2a21bce092e8b302fd1c14b8e02659c08af787153c1fe8b->leave($__internal_699a8973f7f000f8c2a21bce092e8b302fd1c14b8e02659c08af787153c1fe8b_prof);

        
        $__internal_42b3065ab96bd17f2af5a3cabcbdf20db1d3f87332c099907d8ab156ebfe0942->leave($__internal_42b3065ab96bd17f2af5a3cabcbdf20db1d3f87332c099907d8ab156ebfe0942_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_bd82bd5e5ed6accf980d92478be4db0e06ab23d9b20963a8bc39e73c319582e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd82bd5e5ed6accf980d92478be4db0e06ab23d9b20963a8bc39e73c319582e8->enter($__internal_bd82bd5e5ed6accf980d92478be4db0e06ab23d9b20963a8bc39e73c319582e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_ce7eb610a13e0ba9cf01cd74fbe166cd57be9d34b2885956ebce443993f584f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7eb610a13e0ba9cf01cd74fbe166cd57be9d34b2885956ebce443993f584f6->enter($__internal_ce7eb610a13e0ba9cf01cd74fbe166cd57be9d34b2885956ebce443993f584f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'widget');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        ";
        
        $__internal_ce7eb610a13e0ba9cf01cd74fbe166cd57be9d34b2885956ebce443993f584f6->leave($__internal_ce7eb610a13e0ba9cf01cd74fbe166cd57be9d34b2885956ebce443993f584f6_prof);

        
        $__internal_bd82bd5e5ed6accf980d92478be4db0e06ab23d9b20963a8bc39e73c319582e8->leave($__internal_bd82bd5e5ed6accf980d92478be4db0e06ab23d9b20963a8bc39e73c319582e8_prof);

    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_0668673e80dfb27c2841680d49b5a8dda1f01ab907db36725f874f442197c360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0668673e80dfb27c2841680d49b5a8dda1f01ab907db36725f874f442197c360->enter($__internal_0668673e80dfb27c2841680d49b5a8dda1f01ab907db36725f874f442197c360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_78a7c4735d8b11b8e10850c35c6959d211217b9e005c6da8493682e05e976000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a7c4735d8b11b8e10850c35c6959d211217b9e005c6da8493682e05e976000->enter($__internal_78a7c4735d8b11b8e10850c35c6959d211217b9e005c6da8493682e05e976000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 25
        echo "                <input type=\"submit\" value=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_edit_submit", array(), "FOSCommentBundle");
        echo "\" />
            ";
        
        $__internal_78a7c4735d8b11b8e10850c35c6959d211217b9e005c6da8493682e05e976000->leave($__internal_78a7c4735d8b11b8e10850c35c6959d211217b9e005c6da8493682e05e976000_prof);

        
        $__internal_0668673e80dfb27c2841680d49b5a8dda1f01ab907db36725f874f442197c360->leave($__internal_0668673e80dfb27c2841680d49b5a8dda1f01ab907db36725f874f442197c360_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  96 => 24,  84 => 19,  80 => 18,  76 => 17,  71 => 16,  62 => 15,  48 => 27,  46 => 24,  42 => 23,  38 => 21,  36 => 15,  31 => 13,  27 => 11,);
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

<div class=\"fos_comment_comment_form_holder\">
    <form class=\"fos_comment_comment_edit_form\" action=\"{{ url('fos_comment_put_thread_comments', {'id': comment.thread.id, 'commentId': comment.id}) }}\" method=\"POST\">

        {% block fos_comment_form_fields %}
            {{ form_errors(form) }}
            {{ form_errors(form.body) }}
            {{ form_widget(form.body) }}
            {{ form_rest(form) }}
        {% endblock %}

        <div class=\"fos_comment_submit\">
            <button type=\"button\" class=\"fos_comment_comment_edit_cancel\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit_cancel{% endtrans %}</button>
            {% block fos_comment_form_submit %}
                <input type=\"submit\" value=\"{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit_submit{% endtrans %}\" />
            {% endblock %}
        </div>

    </form>
</div>
", "FOSCommentBundle:Thread:comment_edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_edit.html.twig");
    }
}
