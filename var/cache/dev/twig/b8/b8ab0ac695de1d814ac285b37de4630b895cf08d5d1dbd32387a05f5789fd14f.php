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
        $__internal_fe6db5a8b13e422cc12a01e2321fcbc44c8fe9eab7ce3fc0cd8ef030e26ada5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6db5a8b13e422cc12a01e2321fcbc44c8fe9eab7ce3fc0cd8ef030e26ada5c->enter($__internal_fe6db5a8b13e422cc12a01e2321fcbc44c8fe9eab7ce3fc0cd8ef030e26ada5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e4320d98a7d435f3139f81decd48ac899bc90b7bde386200389bf3fe4eda4dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4320d98a7d435f3139f81decd48ac899bc90b7bde386200389bf3fe4eda4dd3->enter($__internal_e4320d98a7d435f3139f81decd48ac899bc90b7bde386200389bf3fe4eda4dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fe6db5a8b13e422cc12a01e2321fcbc44c8fe9eab7ce3fc0cd8ef030e26ada5c->leave($__internal_fe6db5a8b13e422cc12a01e2321fcbc44c8fe9eab7ce3fc0cd8ef030e26ada5c_prof);

        
        $__internal_e4320d98a7d435f3139f81decd48ac899bc90b7bde386200389bf3fe4eda4dd3->leave($__internal_e4320d98a7d435f3139f81decd48ac899bc90b7bde386200389bf3fe4eda4dd3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb5a3faac1efe7bf6b06dee434d933a4685fab1db0cfe2a3e014991b15713d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5a3faac1efe7bf6b06dee434d933a4685fab1db0cfe2a3e014991b15713d53->enter($__internal_fb5a3faac1efe7bf6b06dee434d933a4685fab1db0cfe2a3e014991b15713d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54e674303dddad4e748a77d873940b56fc1782005eba705e9176d7648a771b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e674303dddad4e748a77d873940b56fc1782005eba705e9176d7648a771b5b->enter($__internal_54e674303dddad4e748a77d873940b56fc1782005eba705e9176d7648a771b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_54e674303dddad4e748a77d873940b56fc1782005eba705e9176d7648a771b5b->leave($__internal_54e674303dddad4e748a77d873940b56fc1782005eba705e9176d7648a771b5b_prof);

        
        $__internal_fb5a3faac1efe7bf6b06dee434d933a4685fab1db0cfe2a3e014991b15713d53->leave($__internal_fb5a3faac1efe7bf6b06dee434d933a4685fab1db0cfe2a3e014991b15713d53_prof);

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
