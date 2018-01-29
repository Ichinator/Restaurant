<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2f65fe92879cebf5dc63d8ed8ae66bb12c2e999d2f6e89b2352d40dcca3276a0 extends Twig_Template
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
        $__internal_c3f63f449421d8b17c1a247cb8d7918b87423308c88af4428d6d2bc0c7e13522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f63f449421d8b17c1a247cb8d7918b87423308c88af4428d6d2bc0c7e13522->enter($__internal_c3f63f449421d8b17c1a247cb8d7918b87423308c88af4428d6d2bc0c7e13522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_da037f8b90cf495241a7e3ed8ec29284f1e5a5b0d9415bb9fd5266e72e395c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da037f8b90cf495241a7e3ed8ec29284f1e5a5b0d9415bb9fd5266e72e395c4d->enter($__internal_da037f8b90cf495241a7e3ed8ec29284f1e5a5b0d9415bb9fd5266e72e395c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c3f63f449421d8b17c1a247cb8d7918b87423308c88af4428d6d2bc0c7e13522->leave($__internal_c3f63f449421d8b17c1a247cb8d7918b87423308c88af4428d6d2bc0c7e13522_prof);

        
        $__internal_da037f8b90cf495241a7e3ed8ec29284f1e5a5b0d9415bb9fd5266e72e395c4d->leave($__internal_da037f8b90cf495241a7e3ed8ec29284f1e5a5b0d9415bb9fd5266e72e395c4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
