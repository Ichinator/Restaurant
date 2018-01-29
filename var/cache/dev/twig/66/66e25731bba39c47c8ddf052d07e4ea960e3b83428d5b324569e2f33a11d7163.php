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
        $__internal_95d2d88c69f199388ecadc17620931d3df6b90d195e873c6a2a05a46398fb357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d2d88c69f199388ecadc17620931d3df6b90d195e873c6a2a05a46398fb357->enter($__internal_95d2d88c69f199388ecadc17620931d3df6b90d195e873c6a2a05a46398fb357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e7dab04db913092c29232e32f6111ae6ed7945d1fcafa358a5f38a9f78450b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dab04db913092c29232e32f6111ae6ed7945d1fcafa358a5f38a9f78450b70->enter($__internal_e7dab04db913092c29232e32f6111ae6ed7945d1fcafa358a5f38a9f78450b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_95d2d88c69f199388ecadc17620931d3df6b90d195e873c6a2a05a46398fb357->leave($__internal_95d2d88c69f199388ecadc17620931d3df6b90d195e873c6a2a05a46398fb357_prof);

        
        $__internal_e7dab04db913092c29232e32f6111ae6ed7945d1fcafa358a5f38a9f78450b70->leave($__internal_e7dab04db913092c29232e32f6111ae6ed7945d1fcafa358a5f38a9f78450b70_prof);

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
