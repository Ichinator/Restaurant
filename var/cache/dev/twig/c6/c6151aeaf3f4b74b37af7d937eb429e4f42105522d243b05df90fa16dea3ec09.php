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
        $__internal_d2c22584d30b8d9a80593d38a39f5a9bc5c5a8faeb4aa7b2b65e7f67d5720361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c22584d30b8d9a80593d38a39f5a9bc5c5a8faeb4aa7b2b65e7f67d5720361->enter($__internal_d2c22584d30b8d9a80593d38a39f5a9bc5c5a8faeb4aa7b2b65e7f67d5720361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:commentable.html.twig"));

        $__internal_274c43c9bf7a95f61405c80f2a9f304abcbc4e3317d6a335263632f5c4aa0fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274c43c9bf7a95f61405c80f2a9f304abcbc4e3317d6a335263632f5c4aa0fb0->enter($__internal_274c43c9bf7a95f61405c80f2a9f304abcbc4e3317d6a335263632f5c4aa0fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:commentable.html.twig"));

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
        
        $__internal_d2c22584d30b8d9a80593d38a39f5a9bc5c5a8faeb4aa7b2b65e7f67d5720361->leave($__internal_d2c22584d30b8d9a80593d38a39f5a9bc5c5a8faeb4aa7b2b65e7f67d5720361_prof);

        
        $__internal_274c43c9bf7a95f61405c80f2a9f304abcbc4e3317d6a335263632f5c4aa0fb0->leave($__internal_274c43c9bf7a95f61405c80f2a9f304abcbc4e3317d6a335263632f5c4aa0fb0_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_8855c42aa84327f328fc3f55f2fd29ac1c16d76ff6f32b38d4cc27ef72b4248b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8855c42aa84327f328fc3f55f2fd29ac1c16d76ff6f32b38d4cc27ef72b4248b->enter($__internal_8855c42aa84327f328fc3f55f2fd29ac1c16d76ff6f32b38d4cc27ef72b4248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_9c429c46357d33f52c483732d5806e176af2007df065f3be27e35daae6cf5586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c429c46357d33f52c483732d5806e176af2007df065f3be27e35daae6cf5586->enter($__internal_9c429c46357d33f52c483732d5806e176af2007df065f3be27e35daae6cf5586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_9c429c46357d33f52c483732d5806e176af2007df065f3be27e35daae6cf5586->leave($__internal_9c429c46357d33f52c483732d5806e176af2007df065f3be27e35daae6cf5586_prof);

        
        $__internal_8855c42aa84327f328fc3f55f2fd29ac1c16d76ff6f32b38d4cc27ef72b4248b->leave($__internal_8855c42aa84327f328fc3f55f2fd29ac1c16d76ff6f32b38d4cc27ef72b4248b_prof);

    }

    // line 25
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_5be5081140c204bf3eb43e73d2ff48a17bc7d6e19467506b704e108838269a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be5081140c204bf3eb43e73d2ff48a17bc7d6e19467506b704e108838269a81->enter($__internal_5be5081140c204bf3eb43e73d2ff48a17bc7d6e19467506b704e108838269a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_1f0cc1ac9337d73934dffe3aa0a5001186fd1af0542c3f34394d3cbc187f6e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0cc1ac9337d73934dffe3aa0a5001186fd1af0542c3f34394d3cbc187f6e9c->enter($__internal_1f0cc1ac9337d73934dffe3aa0a5001186fd1af0542c3f34394d3cbc187f6e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 26
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((($context["isCommentable"] ?? $this->getContext($context, "isCommentable"))) ? ("fos_comment_thread_open") : ("fos_comment_thread_close")), array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
        
        $__internal_1f0cc1ac9337d73934dffe3aa0a5001186fd1af0542c3f34394d3cbc187f6e9c->leave($__internal_1f0cc1ac9337d73934dffe3aa0a5001186fd1af0542c3f34394d3cbc187f6e9c_prof);

        
        $__internal_5be5081140c204bf3eb43e73d2ff48a17bc7d6e19467506b704e108838269a81->leave($__internal_5be5081140c204bf3eb43e73d2ff48a17bc7d6e19467506b704e108838269a81_prof);

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
