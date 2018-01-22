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
        $__internal_11b6dc07629fc68b3c19fad1f31402916b51bb23a12cc78e3747bd51a07f7efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b6dc07629fc68b3c19fad1f31402916b51bb23a12cc78e3747bd51a07f7efa->enter($__internal_11b6dc07629fc68b3c19fad1f31402916b51bb23a12cc78e3747bd51a07f7efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new_content.html.twig"));

        $__internal_10248b2531f4d90b695d39c783ebd9cce464c4d02c86cd0d248152c0cbc1d57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10248b2531f4d90b695d39c783ebd9cce464c4d02c86cd0d248152c0cbc1d57f->enter($__internal_10248b2531f4d90b695d39c783ebd9cce464c4d02c86cd0d248152c0cbc1d57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new_content.html.twig"));

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
        
        $__internal_11b6dc07629fc68b3c19fad1f31402916b51bb23a12cc78e3747bd51a07f7efa->leave($__internal_11b6dc07629fc68b3c19fad1f31402916b51bb23a12cc78e3747bd51a07f7efa_prof);

        
        $__internal_10248b2531f4d90b695d39c783ebd9cce464c4d02c86cd0d248152c0cbc1d57f->leave($__internal_10248b2531f4d90b695d39c783ebd9cce464c4d02c86cd0d248152c0cbc1d57f_prof);

    }

    public function block_fos_comment_comment_form_holder($context, array $blocks = array())
    {
        $__internal_24d89ceb205731031c1dd3a9acad665015f6525e0e14aee02405a215b202bd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d89ceb205731031c1dd3a9acad665015f6525e0e14aee02405a215b202bd02->enter($__internal_24d89ceb205731031c1dd3a9acad665015f6525e0e14aee02405a215b202bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

        $__internal_ee4bc5010d3d05422ea0c269fc87123f1f4312e0c72a59b63f581f1e779dd8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4bc5010d3d05422ea0c269fc87123f1f4312e0c72a59b63f581f1e779dd8b4->enter($__internal_ee4bc5010d3d05422ea0c269fc87123f1f4312e0c72a59b63f581f1e779dd8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

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
        
        $__internal_ee4bc5010d3d05422ea0c269fc87123f1f4312e0c72a59b63f581f1e779dd8b4->leave($__internal_ee4bc5010d3d05422ea0c269fc87123f1f4312e0c72a59b63f581f1e779dd8b4_prof);

        
        $__internal_24d89ceb205731031c1dd3a9acad665015f6525e0e14aee02405a215b202bd02->leave($__internal_24d89ceb205731031c1dd3a9acad665015f6525e0e14aee02405a215b202bd02_prof);

    }

    // line 21
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        $__internal_1ee21f7cb76074843eef3d6110dc1498b9f0ee12a7eb43b6c95be29e051bae8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee21f7cb76074843eef3d6110dc1498b9f0ee12a7eb43b6c95be29e051bae8e->enter($__internal_1ee21f7cb76074843eef3d6110dc1498b9f0ee12a7eb43b6c95be29e051bae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

        $__internal_2db98716f5dd47eef0fb2c1faf43ba213396e85b7472c37fa0e3d002b7bfadbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db98716f5dd47eef0fb2c1faf43ba213396e85b7472c37fa0e3d002b7bfadbd->enter($__internal_2db98716f5dd47eef0fb2c1faf43ba213396e85b7472c37fa0e3d002b7bfadbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

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
        
        $__internal_2db98716f5dd47eef0fb2c1faf43ba213396e85b7472c37fa0e3d002b7bfadbd->leave($__internal_2db98716f5dd47eef0fb2c1faf43ba213396e85b7472c37fa0e3d002b7bfadbd_prof);

        
        $__internal_1ee21f7cb76074843eef3d6110dc1498b9f0ee12a7eb43b6c95be29e051bae8e->leave($__internal_1ee21f7cb76074843eef3d6110dc1498b9f0ee12a7eb43b6c95be29e051bae8e_prof);

    }

    // line 31
    public function block_fos_comment_comment_new_form($context, array $blocks = array())
    {
        $__internal_442bc7b33e77e7228988099a28636602256311eb9aa3ba69f29dbb5845dbcbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442bc7b33e77e7228988099a28636602256311eb9aa3ba69f29dbb5845dbcbf6->enter($__internal_442bc7b33e77e7228988099a28636602256311eb9aa3ba69f29dbb5845dbcbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

        $__internal_0fb93cd2bf90f87ec85d3ddb631c748f125ffda85913a2d10fd7a42cb231e892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb93cd2bf90f87ec85d3ddb631c748f125ffda85913a2d10fd7a42cb231e892->enter($__internal_0fb93cd2bf90f87ec85d3ddb631c748f125ffda85913a2d10fd7a42cb231e892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

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
        
        $__internal_0fb93cd2bf90f87ec85d3ddb631c748f125ffda85913a2d10fd7a42cb231e892->leave($__internal_0fb93cd2bf90f87ec85d3ddb631c748f125ffda85913a2d10fd7a42cb231e892_prof);

        
        $__internal_442bc7b33e77e7228988099a28636602256311eb9aa3ba69f29dbb5845dbcbf6->leave($__internal_442bc7b33e77e7228988099a28636602256311eb9aa3ba69f29dbb5845dbcbf6_prof);

    }

    // line 34
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_8b240f1a73af97a904caae361f57997eecdddf4a520e0c34a4d22b2f2386a978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b240f1a73af97a904caae361f57997eecdddf4a520e0c34a4d22b2f2386a978->enter($__internal_8b240f1a73af97a904caae361f57997eecdddf4a520e0c34a4d22b2f2386a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_886ab3e92768fe14df299acac63152cbfde80277e81e2d9b33b936ece75ab5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886ab3e92768fe14df299acac63152cbfde80277e81e2d9b33b936ece75ab5e9->enter($__internal_886ab3e92768fe14df299acac63152cbfde80277e81e2d9b33b936ece75ab5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_886ab3e92768fe14df299acac63152cbfde80277e81e2d9b33b936ece75ab5e9->leave($__internal_886ab3e92768fe14df299acac63152cbfde80277e81e2d9b33b936ece75ab5e9_prof);

        
        $__internal_8b240f1a73af97a904caae361f57997eecdddf4a520e0c34a4d22b2f2386a978->leave($__internal_8b240f1a73af97a904caae361f57997eecdddf4a520e0c34a4d22b2f2386a978_prof);

    }

    // line 45
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_33fe00ee1acae25682cc3a148419117e732033b314b640ca3728b9c8d3ffa155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fe00ee1acae25682cc3a148419117e732033b314b640ca3728b9c8d3ffa155->enter($__internal_33fe00ee1acae25682cc3a148419117e732033b314b640ca3728b9c8d3ffa155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_892e40575acc38783439aa313046a7704df282222ba78de8582c71a0254ffab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892e40575acc38783439aa313046a7704df282222ba78de8582c71a0254ffab4->enter($__internal_892e40575acc38783439aa313046a7704df282222ba78de8582c71a0254ffab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

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
        
        $__internal_892e40575acc38783439aa313046a7704df282222ba78de8582c71a0254ffab4->leave($__internal_892e40575acc38783439aa313046a7704df282222ba78de8582c71a0254ffab4_prof);

        
        $__internal_33fe00ee1acae25682cc3a148419117e732033b314b640ca3728b9c8d3ffa155->leave($__internal_33fe00ee1acae25682cc3a148419117e732033b314b640ca3728b9c8d3ffa155_prof);

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
