<?php

/* FOSCommentBundle:Thread:comment_new_content.html.twig */
class __TwigTemplate_051ab31d3cd0a4b4dbd541d7f32ea80db3027a4711bcdd17a0ff3419ff2e7d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment_form_holder' => array($this, 'block_fos_comment_comment_form_holder'),
            'fos_comment_form_title' => array($this, 'block_fos_comment_form_title'),
            'fos_comment_comment_new_form' => array($this, 'block_fos_comment_comment_new_form'),
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ddcfa1d99ddc6a0d9e1fa96cd98b7c444fee21a660227d413fea1a40a311a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddcfa1d99ddc6a0d9e1fa96cd98b7c444fee21a660227d413fea1a40a311a26->enter($__internal_4ddcfa1d99ddc6a0d9e1fa96cd98b7c444fee21a660227d413fea1a40a311a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new_content.html.twig"));

        $__internal_02fe1441fac4368f9166cee66b8fbaad400db7189fe1a1dafcb27a32f97fc698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fe1441fac4368f9166cee66b8fbaad400db7189fe1a1dafcb27a32f97fc698->enter($__internal_02fe1441fac4368f9166cee66b8fbaad400db7189fe1a1dafcb27a32f97fc698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new_content.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["first"] = ((array_key_exists("first", $context)) ? (_twig_default_filter(($context["first"] ?? $this->getContext($context, "first")), false)) : (false));
        // line 13
        echo "
";
        // line 14
        $context["url_parameters"] = array("id" => ($context["id"] ?? $this->getContext($context, "id")));
        // line 15
        if ( !(null === ($context["parent"] ?? $this->getContext($context, "parent")))) {
            // line 16
            echo "    ";
            $context["url_parameters"] = twig_array_merge(($context["url_parameters"] ?? $this->getContext($context, "url_parameters")), array("parentId" => $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "id", array())));
        }
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('fos_comment_comment_form_holder', $context, $blocks);
        
        $__internal_4ddcfa1d99ddc6a0d9e1fa96cd98b7c444fee21a660227d413fea1a40a311a26->leave($__internal_4ddcfa1d99ddc6a0d9e1fa96cd98b7c444fee21a660227d413fea1a40a311a26_prof);

        
        $__internal_02fe1441fac4368f9166cee66b8fbaad400db7189fe1a1dafcb27a32f97fc698->leave($__internal_02fe1441fac4368f9166cee66b8fbaad400db7189fe1a1dafcb27a32f97fc698_prof);

    }

    public function block_fos_comment_comment_form_holder($context, array $blocks = array())
    {
        $__internal_c5bd773af5b845fb56c148a4bb3e2fe66f94d6ca159d8cdd8e7aaaa905f7faf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bd773af5b845fb56c148a4bb3e2fe66f94d6ca159d8cdd8e7aaaa905f7faf7->enter($__internal_c5bd773af5b845fb56c148a4bb3e2fe66f94d6ca159d8cdd8e7aaaa905f7faf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

        $__internal_dbe405bc74669d9ff6e9c757808c86f42c2da73e02f41d6513abf3fe748a3083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe405bc74669d9ff6e9c757808c86f42c2da73e02f41d6513abf3fe748a3083->enter($__internal_dbe405bc74669d9ff6e9c757808c86f42c2da73e02f41d6513abf3fe748a3083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

        // line 20
        echo "    <div class=\"fos_comment_comment_form_holder\">
        ";
        // line 21
        $this->displayBlock('fos_comment_form_title', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('fos_comment_comment_new_form', $context, $blocks);
        // line 55
        echo "
    </div>
";
        
        $__internal_dbe405bc74669d9ff6e9c757808c86f42c2da73e02f41d6513abf3fe748a3083->leave($__internal_dbe405bc74669d9ff6e9c757808c86f42c2da73e02f41d6513abf3fe748a3083_prof);

        
        $__internal_c5bd773af5b845fb56c148a4bb3e2fe66f94d6ca159d8cdd8e7aaaa905f7faf7->leave($__internal_c5bd773af5b845fb56c148a4bb3e2fe66f94d6ca159d8cdd8e7aaaa905f7faf7_prof);

    }

    // line 21
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        $__internal_3cf831440246feec87ef7c585b2454f6e5ef3a97d578b24194ebf667bd735cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf831440246feec87ef7c585b2454f6e5ef3a97d578b24194ebf667bd735cf6->enter($__internal_3cf831440246feec87ef7c585b2454f6e5ef3a97d578b24194ebf667bd735cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

        $__internal_7795b128e971c17354f8cfe1bca62fa7e91c2555660880bff89a1514dd43a540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7795b128e971c17354f8cfe1bca62fa7e91c2555660880bff89a1514dd43a540->enter($__internal_7795b128e971c17354f8cfe1bca62fa7e91c2555660880bff89a1514dd43a540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

        // line 22
        echo "            ";
        if (($context["first"] ?? $this->getContext($context, "first"))) {
            // line 23
            echo "                <h3>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_headline_first", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        } elseif ( !(null ===         // line 24
($context["parent"] ?? $this->getContext($context, "parent")))) {
            // line 25
            echo "                <h3>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_reply_reply_to", array("%name%" => $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "authorName", array())), "FOSCommentBundle");
            echo "</h3>
            ";
        } else {
            // line 27
            echo "                <h3>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_headline", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        }
        // line 29
        echo "        ";
        
        $__internal_7795b128e971c17354f8cfe1bca62fa7e91c2555660880bff89a1514dd43a540->leave($__internal_7795b128e971c17354f8cfe1bca62fa7e91c2555660880bff89a1514dd43a540_prof);

        
        $__internal_3cf831440246feec87ef7c585b2454f6e5ef3a97d578b24194ebf667bd735cf6->leave($__internal_3cf831440246feec87ef7c585b2454f6e5ef3a97d578b24194ebf667bd735cf6_prof);

    }

    // line 31
    public function block_fos_comment_comment_new_form($context, array $blocks = array())
    {
        $__internal_e0e3814d91c27de5981d469a953f387b227af1cf720371d3f27f13a0253c5c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e3814d91c27de5981d469a953f387b227af1cf720371d3f27f13a0253c5c7a->enter($__internal_e0e3814d91c27de5981d469a953f387b227af1cf720371d3f27f13a0253c5c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

        $__internal_7e28bf468044e685cbca698252d1ed0d440ff3dfa79d6c4d1e277eda5e498294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e28bf468044e685cbca698252d1ed0d440ff3dfa79d6c4d1e277eda5e498294->enter($__internal_7e28bf468044e685cbca698252d1ed0d440ff3dfa79d6c4d1e277eda5e498294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

        // line 32
        echo "            <form class=\"fos_comment_comment_new_form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_post_thread_comments", ($context["url_parameters"] ?? $this->getContext($context, "url_parameters"))), "html", null, true);
        echo "\" data-parent=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["parent"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parent"] ?? null), "id", array()))) : ("")), "html", null, true);
        echo "\" method=\"POST\">

                ";
        // line 34
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 43
        echo "
                <div class=\"fos_comment_submit\">
                    ";
        // line 45
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 51
        echo "                </div>

            </form>
        ";
        
        $__internal_7e28bf468044e685cbca698252d1ed0d440ff3dfa79d6c4d1e277eda5e498294->leave($__internal_7e28bf468044e685cbca698252d1ed0d440ff3dfa79d6c4d1e277eda5e498294_prof);

        
        $__internal_e0e3814d91c27de5981d469a953f387b227af1cf720371d3f27f13a0253c5c7a->leave($__internal_e0e3814d91c27de5981d469a953f387b227af1cf720371d3f27f13a0253c5c7a_prof);

    }

    // line 34
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_0b405500b78fdd60deac67fc5ba328f7d9a1699789bf1b44d5050d1bf224e0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b405500b78fdd60deac67fc5ba328f7d9a1699789bf1b44d5050d1bf224e0de->enter($__internal_0b405500b78fdd60deac67fc5ba328f7d9a1699789bf1b44d5050d1bf224e0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_78dcc86e368e5f4b7db9a733a94b781ec5b21e587c7fd15c9ca653bcf18a2475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78dcc86e368e5f4b7db9a733a94b781ec5b21e587c7fd15c9ca653bcf18a2475->enter($__internal_78dcc86e368e5f4b7db9a733a94b781ec5b21e587c7fd15c9ca653bcf18a2475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 35
        echo "                    <div class=\"fos_comment_form_errors\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
                    </div>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'widget');
        echo "

                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                ";
        
        $__internal_78dcc86e368e5f4b7db9a733a94b781ec5b21e587c7fd15c9ca653bcf18a2475->leave($__internal_78dcc86e368e5f4b7db9a733a94b781ec5b21e587c7fd15c9ca653bcf18a2475_prof);

        
        $__internal_0b405500b78fdd60deac67fc5ba328f7d9a1699789bf1b44d5050d1bf224e0de->leave($__internal_0b405500b78fdd60deac67fc5ba328f7d9a1699789bf1b44d5050d1bf224e0de_prof);

    }

    // line 45
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_cda1746811a9fc3cc8d4bc9ac911e0e65378acd825fed2659ef66f882de8b17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda1746811a9fc3cc8d4bc9ac911e0e65378acd825fed2659ef66f882de8b17f->enter($__internal_cda1746811a9fc3cc8d4bc9ac911e0e65378acd825fed2659ef66f882de8b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_b3405503adb97d5348e6d87be733e95df8ba0aeb2d1641e175db1cb991669512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3405503adb97d5348e6d87be733e95df8ba0aeb2d1641e175db1cb991669512->enter($__internal_b3405503adb97d5348e6d87be733e95df8ba0aeb2d1641e175db1cb991669512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 46
        echo "                        ";
        if ( !(null === ($context["parent"] ?? $this->getContext($context, "parent")))) {
            // line 47
            echo "                            <input type=\"button\" value=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_reply_cancel", array(), "FOSCommentBundle");
            echo "\" class=\"fos_comment_comment_reply_cancel\" />
                        ";
        }
        // line 49
        echo "                        <input type=\"submit\" value=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
                    ";
        
        $__internal_b3405503adb97d5348e6d87be733e95df8ba0aeb2d1641e175db1cb991669512->leave($__internal_b3405503adb97d5348e6d87be733e95df8ba0aeb2d1641e175db1cb991669512_prof);

        
        $__internal_cda1746811a9fc3cc8d4bc9ac911e0e65378acd825fed2659ef66f882de8b17f->leave($__internal_cda1746811a9fc3cc8d4bc9ac911e0e65378acd825fed2659ef66f882de8b17f_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 49,  218 => 47,  215 => 46,  206 => 45,  194 => 41,  189 => 39,  184 => 37,  180 => 36,  177 => 35,  168 => 34,  155 => 51,  153 => 45,  149 => 43,  147 => 34,  139 => 32,  130 => 31,  120 => 29,  114 => 27,  108 => 25,  106 => 24,  101 => 23,  98 => 22,  89 => 21,  77 => 55,  75 => 31,  72 => 30,  70 => 21,  67 => 20,  49 => 19,  46 => 18,  42 => 16,  40 => 15,  38 => 14,  35 => 13,  33 => 12,  30 => 11,);
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

{% set first = first|default(false) %}

{% set url_parameters = {'id': id } %}
{% if parent is not null %}
    {% set url_parameters = url_parameters|merge({'parentId': parent.id}) %}
{% endif %}

{% block fos_comment_comment_form_holder %}
    <div class=\"fos_comment_comment_form_holder\">
        {% block fos_comment_form_title %}
            {% if first %}
                <h3>{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_headline_first{% endtrans %}</h3>
            {% elseif parent is not null %}
                <h3>{% trans with {\"%name%\": parent.authorName } from 'FOSCommentBundle' %}fos_comment_comment_reply_reply_to{% endtrans %}</h3>
            {% else %}
                <h3>{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_headline{% endtrans %}</h3>
            {% endif %}
        {% endblock %}

        {% block fos_comment_comment_new_form %}
            <form class=\"fos_comment_comment_new_form\" action=\"{{ url('fos_comment_post_thread_comments', url_parameters) }}\" data-parent=\"{{ parent.id|default() }}\" method=\"POST\">

                {% block fos_comment_form_fields %}
                    <div class=\"fos_comment_form_errors\">
                    {{ form_errors(form) }}
                    {{ form_errors(form.body) }}
                    </div>
                    {{ form_widget(form.body) }}

                    {{ form_rest(form) }}
                {% endblock %}

                <div class=\"fos_comment_submit\">
                    {% block fos_comment_form_submit %}
                        {% if parent is not null %}
                            <input type=\"button\" value=\"{% trans from 'FOSCommentBundle' %}fos_comment_comment_reply_cancel{% endtrans %}\" class=\"fos_comment_comment_reply_cancel\" />
                        {% endif %}
                        <input type=\"submit\" value=\"{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_submit{% endtrans %}\" />
                    {% endblock %}
                </div>

            </form>
        {% endblock fos_comment_comment_new_form %}

    </div>
{% endblock fos_comment_comment_form_holder %}
", "FOSCommentBundle:Thread:comment_new_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_new_content.html.twig");
    }
}
