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
        $__internal_ce2497a10512733846f3ab16864761afe74200b2d202b9c1bee74d4fd44f623f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2497a10512733846f3ab16864761afe74200b2d202b9c1bee74d4fd44f623f->enter($__internal_ce2497a10512733846f3ab16864761afe74200b2d202b9c1bee74d4fd44f623f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_edit.html.twig"));

        $__internal_76d718f02f8f3ddcf26f2e259bfc7c1316b651bacffddb46362b64cfcb6552a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d718f02f8f3ddcf26f2e259bfc7c1316b651bacffddb46362b64cfcb6552a4->enter($__internal_76d718f02f8f3ddcf26f2e259bfc7c1316b651bacffddb46362b64cfcb6552a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_edit.html.twig"));

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
        
        $__internal_ce2497a10512733846f3ab16864761afe74200b2d202b9c1bee74d4fd44f623f->leave($__internal_ce2497a10512733846f3ab16864761afe74200b2d202b9c1bee74d4fd44f623f_prof);

        
        $__internal_76d718f02f8f3ddcf26f2e259bfc7c1316b651bacffddb46362b64cfcb6552a4->leave($__internal_76d718f02f8f3ddcf26f2e259bfc7c1316b651bacffddb46362b64cfcb6552a4_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_0cdec4030403aa09bb099e84918c0590a0601e183649124c228b0dc97441b42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdec4030403aa09bb099e84918c0590a0601e183649124c228b0dc97441b42c->enter($__internal_0cdec4030403aa09bb099e84918c0590a0601e183649124c228b0dc97441b42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_2a3a140edcd45a9a5afeadef24961a33a6b8c987b7e070964288aeb71cfbe454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3a140edcd45a9a5afeadef24961a33a6b8c987b7e070964288aeb71cfbe454->enter($__internal_2a3a140edcd45a9a5afeadef24961a33a6b8c987b7e070964288aeb71cfbe454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_2a3a140edcd45a9a5afeadef24961a33a6b8c987b7e070964288aeb71cfbe454->leave($__internal_2a3a140edcd45a9a5afeadef24961a33a6b8c987b7e070964288aeb71cfbe454_prof);

        
        $__internal_0cdec4030403aa09bb099e84918c0590a0601e183649124c228b0dc97441b42c->leave($__internal_0cdec4030403aa09bb099e84918c0590a0601e183649124c228b0dc97441b42c_prof);

    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_f24ba910c1b1e9a9259b5323baee13b14338906287009834120d7459995f0670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24ba910c1b1e9a9259b5323baee13b14338906287009834120d7459995f0670->enter($__internal_f24ba910c1b1e9a9259b5323baee13b14338906287009834120d7459995f0670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_7cc573fd01900b2d733d7af75623e7a32f8ab8fc82598f114e75a591bf88e900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc573fd01900b2d733d7af75623e7a32f8ab8fc82598f114e75a591bf88e900->enter($__internal_7cc573fd01900b2d733d7af75623e7a32f8ab8fc82598f114e75a591bf88e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 25
        echo "                <input type=\"submit\" value=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_edit_submit", array(), "FOSCommentBundle");
        echo "\" />
            ";
        
        $__internal_7cc573fd01900b2d733d7af75623e7a32f8ab8fc82598f114e75a591bf88e900->leave($__internal_7cc573fd01900b2d733d7af75623e7a32f8ab8fc82598f114e75a591bf88e900_prof);

        
        $__internal_f24ba910c1b1e9a9259b5323baee13b14338906287009834120d7459995f0670->leave($__internal_f24ba910c1b1e9a9259b5323baee13b14338906287009834120d7459995f0670_prof);

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
