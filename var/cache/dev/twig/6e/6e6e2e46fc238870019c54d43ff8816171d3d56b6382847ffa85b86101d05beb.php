<?php

/* FOSCommentBundle:Thread:comment_new.html.twig */
class __TwigTemplate_d437685158db6ac024fdc01e3d6bb544014a6741cb2988f46fb5727effdad88f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd9bcf83fe03b4a6b43b1ef569869e6188d8fd76024bb0bcde9bfdeba99e8e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9bcf83fe03b4a6b43b1ef569869e6188d8fd76024bb0bcde9bfdeba99e8e03->enter($__internal_bd9bcf83fe03b4a6b43b1ef569869e6188d8fd76024bb0bcde9bfdeba99e8e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new.html.twig"));

        $__internal_5ba683b03f33551c5c3cd88ff128aae2d211eb71e123558d8ac040ab73f59be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba683b03f33551c5c3cd88ff128aae2d211eb71e123558d8ac040ab73f59be1->enter($__internal_5ba683b03f33551c5c3cd88ff128aae2d211eb71e123558d8ac040ab73f59be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("FOSCommentBundle:Thread:comment_new_content.html.twig", "FOSCommentBundle:Thread:comment_new.html.twig", 12)->display($context);
        
        $__internal_bd9bcf83fe03b4a6b43b1ef569869e6188d8fd76024bb0bcde9bfdeba99e8e03->leave($__internal_bd9bcf83fe03b4a6b43b1ef569869e6188d8fd76024bb0bcde9bfdeba99e8e03_prof);

        
        $__internal_5ba683b03f33551c5c3cd88ff128aae2d211eb71e123558d8ac040ab73f59be1->leave($__internal_5ba683b03f33551c5c3cd88ff128aae2d211eb71e123558d8ac040ab73f59be1_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

{% include \"FOSCommentBundle:Thread:comment_new_content.html.twig\" %}
", "FOSCommentBundle:Thread:comment_new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_new.html.twig");
    }
}
