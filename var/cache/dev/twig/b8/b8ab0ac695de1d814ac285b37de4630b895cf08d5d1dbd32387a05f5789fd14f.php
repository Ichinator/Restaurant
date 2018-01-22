<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b8dc309e0e4484674ba8aa56ded51a539d42e7999be94c718ffe3a366469cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8fab4eb67ec69086c24decf2bb9c0dfe60293c0f7f85c903110db3dd1eaf712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fab4eb67ec69086c24decf2bb9c0dfe60293c0f7f85c903110db3dd1eaf712->enter($__internal_b8fab4eb67ec69086c24decf2bb9c0dfe60293c0f7f85c903110db3dd1eaf712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3cf901530674f422927ed55bbf1059108f96c15447abe1db54628aabbcd5f720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf901530674f422927ed55bbf1059108f96c15447abe1db54628aabbcd5f720->enter($__internal_3cf901530674f422927ed55bbf1059108f96c15447abe1db54628aabbcd5f720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8fab4eb67ec69086c24decf2bb9c0dfe60293c0f7f85c903110db3dd1eaf712->leave($__internal_b8fab4eb67ec69086c24decf2bb9c0dfe60293c0f7f85c903110db3dd1eaf712_prof);

        
        $__internal_3cf901530674f422927ed55bbf1059108f96c15447abe1db54628aabbcd5f720->leave($__internal_3cf901530674f422927ed55bbf1059108f96c15447abe1db54628aabbcd5f720_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_94f262eb30e49a8e81cecc411e126e1efe45abdf2a92b2ca7d92917140e0a3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f262eb30e49a8e81cecc411e126e1efe45abdf2a92b2ca7d92917140e0a3ca->enter($__internal_94f262eb30e49a8e81cecc411e126e1efe45abdf2a92b2ca7d92917140e0a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_949e6fc132739dee9555a0af6d3759b07369fb450357ec94d49b06f1c1770b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949e6fc132739dee9555a0af6d3759b07369fb450357ec94d49b06f1c1770b8b->enter($__internal_949e6fc132739dee9555a0af6d3759b07369fb450357ec94d49b06f1c1770b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_949e6fc132739dee9555a0af6d3759b07369fb450357ec94d49b06f1c1770b8b->leave($__internal_949e6fc132739dee9555a0af6d3759b07369fb450357ec94d49b06f1c1770b8b_prof);

        
        $__internal_94f262eb30e49a8e81cecc411e126e1efe45abdf2a92b2ca7d92917140e0a3ca->leave($__internal_94f262eb30e49a8e81cecc411e126e1efe45abdf2a92b2ca7d92917140e0a3ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
