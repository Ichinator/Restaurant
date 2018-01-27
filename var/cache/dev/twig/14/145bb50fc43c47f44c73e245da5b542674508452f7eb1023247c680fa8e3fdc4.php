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
        $__internal_fd20eed94260061f6135963c11988bda19a25df53bc46920627847865d9bd398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd20eed94260061f6135963c11988bda19a25df53bc46920627847865d9bd398->enter($__internal_fd20eed94260061f6135963c11988bda19a25df53bc46920627847865d9bd398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_541d692b3ec8ddedf763ab854654e2a6c7602b32995f59e4b9f01e8e04d545b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541d692b3ec8ddedf763ab854654e2a6c7602b32995f59e4b9f01e8e04d545b5->enter($__internal_541d692b3ec8ddedf763ab854654e2a6c7602b32995f59e4b9f01e8e04d545b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fd20eed94260061f6135963c11988bda19a25df53bc46920627847865d9bd398->leave($__internal_fd20eed94260061f6135963c11988bda19a25df53bc46920627847865d9bd398_prof);

        
        $__internal_541d692b3ec8ddedf763ab854654e2a6c7602b32995f59e4b9f01e8e04d545b5->leave($__internal_541d692b3ec8ddedf763ab854654e2a6c7602b32995f59e4b9f01e8e04d545b5_prof);

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
