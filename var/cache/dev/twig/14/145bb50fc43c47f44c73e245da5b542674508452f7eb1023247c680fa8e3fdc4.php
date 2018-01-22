<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5f647481829e9d83edb6df57387b90a82c6dbd081df1352d86924887b48176c7 extends Twig_Template
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
        $__internal_3be86ab1da116b5b8888d437238d176ac6086f30b4076b30a724cdc2913e7064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be86ab1da116b5b8888d437238d176ac6086f30b4076b30a724cdc2913e7064->enter($__internal_3be86ab1da116b5b8888d437238d176ac6086f30b4076b30a724cdc2913e7064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d22a1ac808c33b0ce4d8ab5f1d88b3c07522ba1c442fb141e3d5f3ec85d2133a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22a1ac808c33b0ce4d8ab5f1d88b3c07522ba1c442fb141e3d5f3ec85d2133a->enter($__internal_d22a1ac808c33b0ce4d8ab5f1d88b3c07522ba1c442fb141e3d5f3ec85d2133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3be86ab1da116b5b8888d437238d176ac6086f30b4076b30a724cdc2913e7064->leave($__internal_3be86ab1da116b5b8888d437238d176ac6086f30b4076b30a724cdc2913e7064_prof);

        
        $__internal_d22a1ac808c33b0ce4d8ab5f1d88b3c07522ba1c442fb141e3d5f3ec85d2133a->leave($__internal_d22a1ac808c33b0ce4d8ab5f1d88b3c07522ba1c442fb141e3d5f3ec85d2133a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
