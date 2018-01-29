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
        $__internal_8c264ee00a41990afc06d21d36b08805dac74f5f61129a9bd2c3fce5ff115265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c264ee00a41990afc06d21d36b08805dac74f5f61129a9bd2c3fce5ff115265->enter($__internal_8c264ee00a41990afc06d21d36b08805dac74f5f61129a9bd2c3fce5ff115265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_remove.html.twig"));

        $__internal_7103a1d799e9fdca7b6cbb2c1ba04770661c5921ccd4beb889a38589d2eeb16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7103a1d799e9fdca7b6cbb2c1ba04770661c5921ccd4beb889a38589d2eeb16e->enter($__internal_7103a1d799e9fdca7b6cbb2c1ba04770661c5921ccd4beb889a38589d2eeb16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_remove.html.twig"));

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
        
        $__internal_8c264ee00a41990afc06d21d36b08805dac74f5f61129a9bd2c3fce5ff115265->leave($__internal_8c264ee00a41990afc06d21d36b08805dac74f5f61129a9bd2c3fce5ff115265_prof);

        
        $__internal_7103a1d799e9fdca7b6cbb2c1ba04770661c5921ccd4beb889a38589d2eeb16e->leave($__internal_7103a1d799e9fdca7b6cbb2c1ba04770661c5921ccd4beb889a38589d2eeb16e_prof);

    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_eb6e727def2fd5ceb6d3d19aeca7e399efc1e1e4511251f2f5c941672b749b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6e727def2fd5ceb6d3d19aeca7e399efc1e1e4511251f2f5c941672b749b50->enter($__internal_eb6e727def2fd5ceb6d3d19aeca7e399efc1e1e4511251f2f5c941672b749b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_337b2b0766e3254465a93d120bae439ee3aef13cc090f751eeda9f6b77f69fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337b2b0766e3254465a93d120bae439ee3aef13cc090f751eeda9f6b77f69fe4->enter($__internal_337b2b0766e3254465a93d120bae439ee3aef13cc090f751eeda9f6b77f69fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        ";
        
        $__internal_337b2b0766e3254465a93d120bae439ee3aef13cc090f751eeda9f6b77f69fe4->leave($__internal_337b2b0766e3254465a93d120bae439ee3aef13cc090f751eeda9f6b77f69fe4_prof);

        
        $__internal_eb6e727def2fd5ceb6d3d19aeca7e399efc1e1e4511251f2f5c941672b749b50->leave($__internal_eb6e727def2fd5ceb6d3d19aeca7e399efc1e1e4511251f2f5c941672b749b50_prof);

    }

    // line 22
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_f1e2a5f0f0f068c4a37ff3701f3aee17e04c1360dedbbb545c5fb88dc22cef35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e2a5f0f0f068c4a37ff3701f3aee17e04c1360dedbbb545c5fb88dc22cef35->enter($__internal_f1e2a5f0f0f068c4a37ff3701f3aee17e04c1360dedbbb545c5fb88dc22cef35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_c0627aeb6123ad99dc196d88268468512f58c13b58c5b3df3bae67a11e93c075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0627aeb6123ad99dc196d88268468512f58c13b58c5b3df3bae67a11e93c075->enter($__internal_c0627aeb6123ad99dc196d88268468512f58c13b58c5b3df3bae67a11e93c075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 23
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fos_comment_comment_delete", array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
        
        $__internal_c0627aeb6123ad99dc196d88268468512f58c13b58c5b3df3bae67a11e93c075->leave($__internal_c0627aeb6123ad99dc196d88268468512f58c13b58c5b3df3bae67a11e93c075_prof);

        
        $__internal_f1e2a5f0f0f068c4a37ff3701f3aee17e04c1360dedbbb545c5fb88dc22cef35->leave($__internal_f1e2a5f0f0f068c4a37ff3701f3aee17e04c1360dedbbb545c5fb88dc22cef35_prof);

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
