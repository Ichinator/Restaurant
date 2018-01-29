<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fefa49f26de8b0d68c7446c1e5650cdefaa095c3263a3ded071fdcd2066336e2 extends Twig_Template
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
        $__internal_7bf42e9ee943b99578ba389c7635d931df105a9f00cf0f7f0ef6b06d6f29359e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf42e9ee943b99578ba389c7635d931df105a9f00cf0f7f0ef6b06d6f29359e->enter($__internal_7bf42e9ee943b99578ba389c7635d931df105a9f00cf0f7f0ef6b06d6f29359e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ab7647f7d459eca160127e020705d6837befa65efa5a4427261ab7d21f52271b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7647f7d459eca160127e020705d6837befa65efa5a4427261ab7d21f52271b->enter($__internal_ab7647f7d459eca160127e020705d6837befa65efa5a4427261ab7d21f52271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7bf42e9ee943b99578ba389c7635d931df105a9f00cf0f7f0ef6b06d6f29359e->leave($__internal_7bf42e9ee943b99578ba389c7635d931df105a9f00cf0f7f0ef6b06d6f29359e_prof);

        
        $__internal_ab7647f7d459eca160127e020705d6837befa65efa5a4427261ab7d21f52271b->leave($__internal_ab7647f7d459eca160127e020705d6837befa65efa5a4427261ab7d21f52271b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
