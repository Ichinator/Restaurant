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
        $__internal_abab8a4225f5ac0cf8810419d9852c70f0d16186c1ecc3040b9d12ba21f64f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abab8a4225f5ac0cf8810419d9852c70f0d16186c1ecc3040b9d12ba21f64f75->enter($__internal_abab8a4225f5ac0cf8810419d9852c70f0d16186c1ecc3040b9d12ba21f64f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0400688b851a92fa609a143fa5bbe746086339feeef028721f570d6c9fa6b47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0400688b851a92fa609a143fa5bbe746086339feeef028721f570d6c9fa6b47d->enter($__internal_0400688b851a92fa609a143fa5bbe746086339feeef028721f570d6c9fa6b47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_abab8a4225f5ac0cf8810419d9852c70f0d16186c1ecc3040b9d12ba21f64f75->leave($__internal_abab8a4225f5ac0cf8810419d9852c70f0d16186c1ecc3040b9d12ba21f64f75_prof);

        
        $__internal_0400688b851a92fa609a143fa5bbe746086339feeef028721f570d6c9fa6b47d->leave($__internal_0400688b851a92fa609a143fa5bbe746086339feeef028721f570d6c9fa6b47d_prof);

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
