<?php

/* FOSCommentBundle:Thread:comment_remove.html.twig */
class __TwigTemplate_45ee277f3858a2dced7be22ce64d22dcbd0d2c4c6f002566b1956fd332e4a0d4 extends Twig_Template
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
        $__internal_eb0193a82ed6d69ec5fce550727e21eb28a4f5149d29473057ad409d904bb4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0193a82ed6d69ec5fce550727e21eb28a4f5149d29473057ad409d904bb4a9->enter($__internal_eb0193a82ed6d69ec5fce550727e21eb28a4f5149d29473057ad409d904bb4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_remove.html.twig"));

        $__internal_b83dd876ef793cc23ea533aa7592c4bc33bb46aaebe4b6d26de7e690d362bf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83dd876ef793cc23ea533aa7592c4bc33bb46aaebe4b6d26de7e690d362bf85->enter($__internal_b83dd876ef793cc23ea533aa7592c4bc33bb46aaebe4b6d26de7e690d362bf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_remove.html.twig"));

        // line 11
        echo "
<div class=\"fos_comment_delete_form_holder\">
    <form class=\"fos_comment_delete_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_patch_thread_comment_state", array("id" => ($context["id"] ?? $this->getContext($context, "id")), "commentId" => ($context["commentId"] ?? $this->getContext($context, "commentId")))), "html", null, true);
        echo "\" data-fos-comment-thread-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 20
        echo "
        <div class=\"fos_comment_submit\">
            ";
        // line 22
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 25
        echo "        </div>

    </form>
</div>
";
        
        $__internal_eb0193a82ed6d69ec5fce550727e21eb28a4f5149d29473057ad409d904bb4a9->leave($__internal_eb0193a82ed6d69ec5fce550727e21eb28a4f5149d29473057ad409d904bb4a9_prof);

        
        $__internal_b83dd876ef793cc23ea533aa7592c4bc33bb46aaebe4b6d26de7e690d362bf85->leave($__internal_b83dd876ef793cc23ea533aa7592c4bc33bb46aaebe4b6d26de7e690d362bf85_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_ac2cbec283c389e9f4db7737ddd6c50c8e4b8917c9593c3580ea899cf31089c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2cbec283c389e9f4db7737ddd6c50c8e4b8917c9593c3580ea899cf31089c2->enter($__internal_ac2cbec283c389e9f4db7737ddd6c50c8e4b8917c9593c3580ea899cf31089c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_3a8106ba6b56b237be855a2de224b3f44b66e97a177cb615f73c39a8e71da6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8106ba6b56b237be855a2de224b3f44b66e97a177cb615f73c39a8e71da6b2->enter($__internal_3a8106ba6b56b237be855a2de224b3f44b66e97a177cb615f73c39a8e71da6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        ";
        
        $__internal_3a8106ba6b56b237be855a2de224b3f44b66e97a177cb615f73c39a8e71da6b2->leave($__internal_3a8106ba6b56b237be855a2de224b3f44b66e97a177cb615f73c39a8e71da6b2_prof);

        
        $__internal_ac2cbec283c389e9f4db7737ddd6c50c8e4b8917c9593c3580ea899cf31089c2->leave($__internal_ac2cbec283c389e9f4db7737ddd6c50c8e4b8917c9593c3580ea899cf31089c2_prof);

    }

    // line 22
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_bb8c92da158f9dd0c1821bde0fa1b2feccaa032654498822b99bc2e8c3deeb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8c92da158f9dd0c1821bde0fa1b2feccaa032654498822b99bc2e8c3deeb97->enter($__internal_bb8c92da158f9dd0c1821bde0fa1b2feccaa032654498822b99bc2e8c3deeb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_0356827d229318c39d2f3cbbafbac08f25075a06b38163e7d81964dce1cd3b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0356827d229318c39d2f3cbbafbac08f25075a06b38163e7d81964dce1cd3b07->enter($__internal_0356827d229318c39d2f3cbbafbac08f25075a06b38163e7d81964dce1cd3b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 23
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fos_comment_comment_delete", array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
        
        $__internal_0356827d229318c39d2f3cbbafbac08f25075a06b38163e7d81964dce1cd3b07->leave($__internal_0356827d229318c39d2f3cbbafbac08f25075a06b38163e7d81964dce1cd3b07_prof);

        
        $__internal_bb8c92da158f9dd0c1821bde0fa1b2feccaa032654498822b99bc2e8c3deeb97->leave($__internal_bb8c92da158f9dd0c1821bde0fa1b2feccaa032654498822b99bc2e8c3deeb97_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_remove.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  87 => 22,  75 => 18,  69 => 16,  60 => 15,  46 => 25,  44 => 22,  40 => 20,  38 => 15,  31 => 13,  27 => 11,);
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

<div class=\"fos_comment_delete_form_holder\">
    <form class=\"fos_comment_delete_form\" action=\"{{ url('fos_comment_patch_thread_comment_state', {'id': id, 'commentId': commentId}) }}\" data-fos-comment-thread-id=\"{{ id }}\" method=\"POST\">

        {% block fos_comment_form_fields %}
            {{ form_errors(form) }}

            {{ form_rest(form) }}
        {% endblock %}

        <div class=\"fos_comment_submit\">
            {% block fos_comment_form_submit %}
                <input type=\"submit\" value=\"{{ 'fos_comment_comment_delete' | trans({}, 'FOSCommentBundle') }}\" />
            {% endblock %}
        </div>

    </form>
</div>
", "FOSCommentBundle:Thread:comment_remove.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_remove.html.twig");
    }
}
