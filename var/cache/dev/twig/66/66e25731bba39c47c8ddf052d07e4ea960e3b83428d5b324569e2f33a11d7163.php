<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_954ec9ecc08058f5c2f8c3cb56fd4c15fbae7d84fd4e47758ffaa7be3b94b772 extends Twig_Template
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
        $__internal_43dbd06f57b43fe312a3dfb9788384088d220e134ce4f601ad8062d06a23d6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43dbd06f57b43fe312a3dfb9788384088d220e134ce4f601ad8062d06a23d6ef->enter($__internal_43dbd06f57b43fe312a3dfb9788384088d220e134ce4f601ad8062d06a23d6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d60f4a545c6e4cd1152bcc9633669356f87bb4671a6c33cfa08f2bdcd65b8ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60f4a545c6e4cd1152bcc9633669356f87bb4671a6c33cfa08f2bdcd65b8ead->enter($__internal_d60f4a545c6e4cd1152bcc9633669356f87bb4671a6c33cfa08f2bdcd65b8ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_43dbd06f57b43fe312a3dfb9788384088d220e134ce4f601ad8062d06a23d6ef->leave($__internal_43dbd06f57b43fe312a3dfb9788384088d220e134ce4f601ad8062d06a23d6ef_prof);

        
        $__internal_d60f4a545c6e4cd1152bcc9633669356f87bb4671a6c33cfa08f2bdcd65b8ead->leave($__internal_d60f4a545c6e4cd1152bcc9633669356f87bb4671a6c33cfa08f2bdcd65b8ead_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}