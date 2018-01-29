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
        $__internal_e4c947cc6397601fe499f08dfab5e0ff3cbf57c1e99e67c483f7b1b34e9a1b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c947cc6397601fe499f08dfab5e0ff3cbf57c1e99e67c483f7b1b34e9a1b91->enter($__internal_e4c947cc6397601fe499f08dfab5e0ff3cbf57c1e99e67c483f7b1b34e9a1b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new_content.html.twig"));

        $__internal_907785cad550a0471aeb88e009568210eb24cb42e7567b615c5ba9078912cf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907785cad550a0471aeb88e009568210eb24cb42e7567b615c5ba9078912cf02->enter($__internal_907785cad550a0471aeb88e009568210eb24cb42e7567b615c5ba9078912cf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new_content.html.twig"));

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
        
        $__internal_e4c947cc6397601fe499f08dfab5e0ff3cbf57c1e99e67c483f7b1b34e9a1b91->leave($__internal_e4c947cc6397601fe499f08dfab5e0ff3cbf57c1e99e67c483f7b1b34e9a1b91_prof);

        
        $__internal_907785cad550a0471aeb88e009568210eb24cb42e7567b615c5ba9078912cf02->leave($__internal_907785cad550a0471aeb88e009568210eb24cb42e7567b615c5ba9078912cf02_prof);

    }

    public function block_fos_comment_comment_form_holder($context, array $blocks = array())
    {
        $__internal_babf2fb004f94604c0250ac6494a5dee97ca0f16489a11397b72a3721f92fa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babf2fb004f94604c0250ac6494a5dee97ca0f16489a11397b72a3721f92fa75->enter($__internal_babf2fb004f94604c0250ac6494a5dee97ca0f16489a11397b72a3721f92fa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

        $__internal_0ba9eb01d2e964900b3cebe11067c1de9f9a42872a69b60acf83d8afc92903ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba9eb01d2e964900b3cebe11067c1de9f9a42872a69b60acf83d8afc92903ce->enter($__internal_0ba9eb01d2e964900b3cebe11067c1de9f9a42872a69b60acf83d8afc92903ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

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
        
        $__internal_0ba9eb01d2e964900b3cebe11067c1de9f9a42872a69b60acf83d8afc92903ce->leave($__internal_0ba9eb01d2e964900b3cebe11067c1de9f9a42872a69b60acf83d8afc92903ce_prof);

        
        $__internal_babf2fb004f94604c0250ac6494a5dee97ca0f16489a11397b72a3721f92fa75->leave($__internal_babf2fb004f94604c0250ac6494a5dee97ca0f16489a11397b72a3721f92fa75_prof);

    }

    // line 21
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        $__internal_e5532d7f3490e6f1efd01a1e734f5b32ab14c27e4661ea04b13468f23f9c3b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5532d7f3490e6f1efd01a1e734f5b32ab14c27e4661ea04b13468f23f9c3b2f->enter($__internal_e5532d7f3490e6f1efd01a1e734f5b32ab14c27e4661ea04b13468f23f9c3b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

        $__internal_24fc01040d9e3e23c26f9946efc35408ea1d44af2a218ee42feff4e238ed1cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fc01040d9e3e23c26f9946efc35408ea1d44af2a218ee42feff4e238ed1cb3->enter($__internal_24fc01040d9e3e23c26f9946efc35408ea1d44af2a218ee42feff4e238ed1cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

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
        
        $__internal_24fc01040d9e3e23c26f9946efc35408ea1d44af2a218ee42feff4e238ed1cb3->leave($__internal_24fc01040d9e3e23c26f9946efc35408ea1d44af2a218ee42feff4e238ed1cb3_prof);

        
        $__internal_e5532d7f3490e6f1efd01a1e734f5b32ab14c27e4661ea04b13468f23f9c3b2f->leave($__internal_e5532d7f3490e6f1efd01a1e734f5b32ab14c27e4661ea04b13468f23f9c3b2f_prof);

    }

    // line 31
    public function block_fos_comment_comment_new_form($context, array $blocks = array())
    {
        $__internal_17b65afe8187342d8eab2b28a95f7e50be9bddff538e7be9536f785bdb1489a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b65afe8187342d8eab2b28a95f7e50be9bddff538e7be9536f785bdb1489a8->enter($__internal_17b65afe8187342d8eab2b28a95f7e50be9bddff538e7be9536f785bdb1489a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

        $__internal_13f83197a42e85007274014f848176e84b7de07bd76dc42296709bf607f88276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f83197a42e85007274014f848176e84b7de07bd76dc42296709bf607f88276->enter($__internal_13f83197a42e85007274014f848176e84b7de07bd76dc42296709bf607f88276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

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
        
        $__internal_13f83197a42e85007274014f848176e84b7de07bd76dc42296709bf607f88276->leave($__internal_13f83197a42e85007274014f848176e84b7de07bd76dc42296709bf607f88276_prof);

        
        $__internal_17b65afe8187342d8eab2b28a95f7e50be9bddff538e7be9536f785bdb1489a8->leave($__internal_17b65afe8187342d8eab2b28a95f7e50be9bddff538e7be9536f785bdb1489a8_prof);

    }

    // line 34
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_f523f6089ca59421a84bccc1cbb9b6f5ec2908ef76407c4c97080e821291d594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f523f6089ca59421a84bccc1cbb9b6f5ec2908ef76407c4c97080e821291d594->enter($__internal_f523f6089ca59421a84bccc1cbb9b6f5ec2908ef76407c4c97080e821291d594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_14dd5e39ee9b14fc94df640677cd73930611eaf9c64386d0d14e41fbe59c5d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dd5e39ee9b14fc94df640677cd73930611eaf9c64386d0d14e41fbe59c5d34->enter($__internal_14dd5e39ee9b14fc94df640677cd73930611eaf9c64386d0d14e41fbe59c5d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_14dd5e39ee9b14fc94df640677cd73930611eaf9c64386d0d14e41fbe59c5d34->leave($__internal_14dd5e39ee9b14fc94df640677cd73930611eaf9c64386d0d14e41fbe59c5d34_prof);

        
        $__internal_f523f6089ca59421a84bccc1cbb9b6f5ec2908ef76407c4c97080e821291d594->leave($__internal_f523f6089ca59421a84bccc1cbb9b6f5ec2908ef76407c4c97080e821291d594_prof);

    }

    // line 45
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_ef4030a9116545a6de7f54cd29912a9ec44cb490f35b4347a76ebd24fd877787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4030a9116545a6de7f54cd29912a9ec44cb490f35b4347a76ebd24fd877787->enter($__internal_ef4030a9116545a6de7f54cd29912a9ec44cb490f35b4347a76ebd24fd877787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_cb9620b2724e7189d1e987c2969fb468efffe602481b321410ba0d313549f8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9620b2724e7189d1e987c2969fb468efffe602481b321410ba0d313549f8b1->enter($__internal_cb9620b2724e7189d1e987c2969fb468efffe602481b321410ba0d313549f8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

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
        
        $__internal_cb9620b2724e7189d1e987c2969fb468efffe602481b321410ba0d313549f8b1->leave($__internal_cb9620b2724e7189d1e987c2969fb468efffe602481b321410ba0d313549f8b1_prof);

        
        $__internal_ef4030a9116545a6de7f54cd29912a9ec44cb490f35b4347a76ebd24fd877787->leave($__internal_ef4030a9116545a6de7f54cd29912a9ec44cb490f35b4347a76ebd24fd877787_prof);

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
