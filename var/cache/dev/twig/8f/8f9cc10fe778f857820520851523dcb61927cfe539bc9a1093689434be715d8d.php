<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3b9ebbe81d943af34792fe60adcd7e0297b72c7949803fb710b388ffa55172a4 extends Twig_Template
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
        $__internal_b65407856c60d925c7310d5260a4f753a474155187408354af864a0395427093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65407856c60d925c7310d5260a4f753a474155187408354af864a0395427093->enter($__internal_b65407856c60d925c7310d5260a4f753a474155187408354af864a0395427093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_de91f5b7bc14d6989def5533b2d1150247524d43e1c47be2de4ce6d35cf66250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de91f5b7bc14d6989def5533b2d1150247524d43e1c47be2de4ce6d35cf66250->enter($__internal_de91f5b7bc14d6989def5533b2d1150247524d43e1c47be2de4ce6d35cf66250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b65407856c60d925c7310d5260a4f753a474155187408354af864a0395427093->leave($__internal_b65407856c60d925c7310d5260a4f753a474155187408354af864a0395427093_prof);

        
        $__internal_de91f5b7bc14d6989def5533b2d1150247524d43e1c47be2de4ce6d35cf66250->leave($__internal_de91f5b7bc14d6989def5533b2d1150247524d43e1c47be2de4ce6d35cf66250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
