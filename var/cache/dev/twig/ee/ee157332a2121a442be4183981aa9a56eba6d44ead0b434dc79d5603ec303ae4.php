<?php

/* FOSCommentBundle:Thread:new.html.twig */
class __TwigTemplate_b029b13ce73b89c3514b237f301e4909f6f561ea49623878b25237a619c6e9ed extends Twig_Template
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
        $__internal_ca5fd35f39d72b314c519fe12358a3e51ec176f447d6f8d115355ce15b7fabd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5fd35f39d72b314c519fe12358a3e51ec176f447d6f8d115355ce15b7fabd8->enter($__internal_ca5fd35f39d72b314c519fe12358a3e51ec176f447d6f8d115355ce15b7fabd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:new.html.twig"));

        $__internal_747b7fbf2da8141e03a6e626e194707f0d3a66fc76c415249108b8cc5a6e8faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747b7fbf2da8141e03a6e626e194707f0d3a66fc76c415249108b8cc5a6e8faf->enter($__internal_747b7fbf2da8141e03a6e626e194707f0d3a66fc76c415249108b8cc5a6e8faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:new.html.twig"));

        // line 11
        echo "
<form class=\"fos_comment_comment_form\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_post_threads");
        echo "\" method=\"POST\">

    ";
        // line 14
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 23
        echo "
    <div class=\"fos_comment_submit\">
        ";
        // line 25
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 28
        echo "    </div>

</form>
";
        
        $__internal_ca5fd35f39d72b314c519fe12358a3e51ec176f447d6f8d115355ce15b7fabd8->leave($__internal_ca5fd35f39d72b314c519fe12358a3e51ec176f447d6f8d115355ce15b7fabd8_prof);

        
        $__internal_747b7fbf2da8141e03a6e626e194707f0d3a66fc76c415249108b8cc5a6e8faf->leave($__internal_747b7fbf2da8141e03a6e626e194707f0d3a66fc76c415249108b8cc5a6e8faf_prof);

    }

    // line 14
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_b052895a9bdcf28586fed262792cbd79ddb415b203fb7c2fdff961c68df865c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b052895a9bdcf28586fed262792cbd79ddb415b203fb7c2fdff961c68df865c1->enter($__internal_b052895a9bdcf28586fed262792cbd79ddb415b203fb7c2fdff961c68df865c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_4c74e0d263ff4a99815fe845a5912174fd4153da297a231148b8e6ab81f0fb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c74e0d263ff4a99815fe845a5912174fd4153da297a231148b8e6ab81f0fb8b->enter($__internal_4c74e0d263ff4a99815fe845a5912174fd4153da297a231148b8e6ab81f0fb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 15
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "permalink", array()), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "permalink", array()), 'widget');
        echo "

        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    ";
        
        $__internal_4c74e0d263ff4a99815fe845a5912174fd4153da297a231148b8e6ab81f0fb8b->leave($__internal_4c74e0d263ff4a99815fe845a5912174fd4153da297a231148b8e6ab81f0fb8b_prof);

        
        $__internal_b052895a9bdcf28586fed262792cbd79ddb415b203fb7c2fdff961c68df865c1->leave($__internal_b052895a9bdcf28586fed262792cbd79ddb415b203fb7c2fdff961c68df865c1_prof);

    }

    // line 25
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_2fd6e9ed725dd7d3401c16757873788543586c7a8c12e04476278dc96bef1b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd6e9ed725dd7d3401c16757873788543586c7a8c12e04476278dc96bef1b3c->enter($__internal_2fd6e9ed725dd7d3401c16757873788543586c7a8c12e04476278dc96bef1b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_aeadcde7fd7236f64830964de0e82404304be5a02f00c107af1933b17b151ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeadcde7fd7236f64830964de0e82404304be5a02f00c107af1933b17b151ea0->enter($__internal_aeadcde7fd7236f64830964de0e82404304be5a02f00c107af1933b17b151ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 26
        echo "            <input type=\"submit\" value=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
        ";
        
        $__internal_aeadcde7fd7236f64830964de0e82404304be5a02f00c107af1933b17b151ea0->leave($__internal_aeadcde7fd7236f64830964de0e82404304be5a02f00c107af1933b17b151ea0_prof);

        
        $__internal_2fd6e9ed725dd7d3401c16757873788543586c7a8c12e04476278dc96bef1b3c->leave($__internal_2fd6e9ed725dd7d3401c16757873788543586c7a8c12e04476278dc96bef1b3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  99 => 25,  87 => 21,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  65 => 15,  56 => 14,  43 => 28,  41 => 25,  37 => 23,  35 => 14,  30 => 12,  27 => 11,);
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

<form class=\"fos_comment_comment_form\" action=\"{{ url('fos_comment_post_threads') }}\" method=\"POST\">

    {% block fos_comment_form_fields %}
        {{ form_errors(form) }}
        {{ form_errors(form.id) }}
        {{ form_widget(form.id) }}
        {{ form_errors(form.permalink) }}
        {{ form_widget(form.permalink) }}

        {{ form_rest(form) }}
    {% endblock %}

    <div class=\"fos_comment_submit\">
        {% block fos_comment_form_submit %}
            <input type=\"submit\" value=\"{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_submit{% endtrans %}\" />
        {% endblock %}
    </div>

</form>
", "FOSCommentBundle:Thread:new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/new.html.twig");
    }
}
