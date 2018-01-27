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
        $__internal_12400a4b04abe5ea7a3b3e8f3371ad331fad9172fa42144267a4418f278e58ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12400a4b04abe5ea7a3b3e8f3371ad331fad9172fa42144267a4418f278e58ed->enter($__internal_12400a4b04abe5ea7a3b3e8f3371ad331fad9172fa42144267a4418f278e58ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:new.html.twig"));

        $__internal_deb91c1d4bc3d62eaf2981ac34b471c996628c19df78a6fb3b2283a6dedad158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb91c1d4bc3d62eaf2981ac34b471c996628c19df78a6fb3b2283a6dedad158->enter($__internal_deb91c1d4bc3d62eaf2981ac34b471c996628c19df78a6fb3b2283a6dedad158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:new.html.twig"));

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
        
        $__internal_12400a4b04abe5ea7a3b3e8f3371ad331fad9172fa42144267a4418f278e58ed->leave($__internal_12400a4b04abe5ea7a3b3e8f3371ad331fad9172fa42144267a4418f278e58ed_prof);

        
        $__internal_deb91c1d4bc3d62eaf2981ac34b471c996628c19df78a6fb3b2283a6dedad158->leave($__internal_deb91c1d4bc3d62eaf2981ac34b471c996628c19df78a6fb3b2283a6dedad158_prof);

    }

    // line 14
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_9485fe0c33d4b69bf7092667f427e819995857a5aa8221b81db259671b22d4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9485fe0c33d4b69bf7092667f427e819995857a5aa8221b81db259671b22d4c3->enter($__internal_9485fe0c33d4b69bf7092667f427e819995857a5aa8221b81db259671b22d4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_d30ea926b3a97f0890961594ac1062a64c5e8759b88985623d7ea63ce1973d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30ea926b3a97f0890961594ac1062a64c5e8759b88985623d7ea63ce1973d86->enter($__internal_d30ea926b3a97f0890961594ac1062a64c5e8759b88985623d7ea63ce1973d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_d30ea926b3a97f0890961594ac1062a64c5e8759b88985623d7ea63ce1973d86->leave($__internal_d30ea926b3a97f0890961594ac1062a64c5e8759b88985623d7ea63ce1973d86_prof);

        
        $__internal_9485fe0c33d4b69bf7092667f427e819995857a5aa8221b81db259671b22d4c3->leave($__internal_9485fe0c33d4b69bf7092667f427e819995857a5aa8221b81db259671b22d4c3_prof);

    }

    // line 25
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_2a1618f31686241c1199de64e0b62140d77cbc2d4ae666c5305b78bb0b46a49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1618f31686241c1199de64e0b62140d77cbc2d4ae666c5305b78bb0b46a49b->enter($__internal_2a1618f31686241c1199de64e0b62140d77cbc2d4ae666c5305b78bb0b46a49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_e7b0954bb23ee71d643111c4dab0eb247610c21f61633656dbd03faf5fc9f339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b0954bb23ee71d643111c4dab0eb247610c21f61633656dbd03faf5fc9f339->enter($__internal_e7b0954bb23ee71d643111c4dab0eb247610c21f61633656dbd03faf5fc9f339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 26
        echo "            <input type=\"submit\" value=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
        ";
        
        $__internal_e7b0954bb23ee71d643111c4dab0eb247610c21f61633656dbd03faf5fc9f339->leave($__internal_e7b0954bb23ee71d643111c4dab0eb247610c21f61633656dbd03faf5fc9f339_prof);

        
        $__internal_2a1618f31686241c1199de64e0b62140d77cbc2d4ae666c5305b78bb0b46a49b->leave($__internal_2a1618f31686241c1199de64e0b62140d77cbc2d4ae666c5305b78bb0b46a49b_prof);

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
