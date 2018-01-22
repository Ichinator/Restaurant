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
        $__internal_ee9e262ac1ae31ee79e2f35745ee55ca74f1bd17a6c8f1067d2544f47aae0e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9e262ac1ae31ee79e2f35745ee55ca74f1bd17a6c8f1067d2544f47aae0e98->enter($__internal_ee9e262ac1ae31ee79e2f35745ee55ca74f1bd17a6c8f1067d2544f47aae0e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:new.html.twig"));

        $__internal_c432eb886ef14387ad8cc266a2cb11f21175483abbf82f0c0d1b1f9c291f4ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c432eb886ef14387ad8cc266a2cb11f21175483abbf82f0c0d1b1f9c291f4ecb->enter($__internal_c432eb886ef14387ad8cc266a2cb11f21175483abbf82f0c0d1b1f9c291f4ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:new.html.twig"));

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
        
        $__internal_ee9e262ac1ae31ee79e2f35745ee55ca74f1bd17a6c8f1067d2544f47aae0e98->leave($__internal_ee9e262ac1ae31ee79e2f35745ee55ca74f1bd17a6c8f1067d2544f47aae0e98_prof);

        
        $__internal_c432eb886ef14387ad8cc266a2cb11f21175483abbf82f0c0d1b1f9c291f4ecb->leave($__internal_c432eb886ef14387ad8cc266a2cb11f21175483abbf82f0c0d1b1f9c291f4ecb_prof);

    }

    // line 14
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_5e7be6e07ee7eed0e8d91153668a31c9e9b9cf29a1be8471109c54e7ceafc3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7be6e07ee7eed0e8d91153668a31c9e9b9cf29a1be8471109c54e7ceafc3a7->enter($__internal_5e7be6e07ee7eed0e8d91153668a31c9e9b9cf29a1be8471109c54e7ceafc3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_4d5e9762faae2ecb4bf2ed5a4441f44f591a395f42f24ade12ba1bec27a2c3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5e9762faae2ecb4bf2ed5a4441f44f591a395f42f24ade12ba1bec27a2c3eb->enter($__internal_4d5e9762faae2ecb4bf2ed5a4441f44f591a395f42f24ade12ba1bec27a2c3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

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
        
        $__internal_4d5e9762faae2ecb4bf2ed5a4441f44f591a395f42f24ade12ba1bec27a2c3eb->leave($__internal_4d5e9762faae2ecb4bf2ed5a4441f44f591a395f42f24ade12ba1bec27a2c3eb_prof);

        
        $__internal_5e7be6e07ee7eed0e8d91153668a31c9e9b9cf29a1be8471109c54e7ceafc3a7->leave($__internal_5e7be6e07ee7eed0e8d91153668a31c9e9b9cf29a1be8471109c54e7ceafc3a7_prof);

    }

    // line 25
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_e87c2d1da58a02e77a68c7868bd9f650da334842cc0101549d5e49f6a43aae38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e87c2d1da58a02e77a68c7868bd9f650da334842cc0101549d5e49f6a43aae38->enter($__internal_e87c2d1da58a02e77a68c7868bd9f650da334842cc0101549d5e49f6a43aae38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_75c1132ee90d1241bca2770bf8c96103f268a6693108ab5f41804c8578cd070b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c1132ee90d1241bca2770bf8c96103f268a6693108ab5f41804c8578cd070b->enter($__internal_75c1132ee90d1241bca2770bf8c96103f268a6693108ab5f41804c8578cd070b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 26
        echo "            <input type=\"submit\" value=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
        ";
        
        $__internal_75c1132ee90d1241bca2770bf8c96103f268a6693108ab5f41804c8578cd070b->leave($__internal_75c1132ee90d1241bca2770bf8c96103f268a6693108ab5f41804c8578cd070b_prof);

        
        $__internal_e87c2d1da58a02e77a68c7868bd9f650da334842cc0101549d5e49f6a43aae38->leave($__internal_e87c2d1da58a02e77a68c7868bd9f650da334842cc0101549d5e49f6a43aae38_prof);

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
