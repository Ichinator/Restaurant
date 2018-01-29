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
        $__internal_934c24d1a86b9a91be1b980ac1a3574f32009bcde6c8e11d8b3f6226c6c43b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934c24d1a86b9a91be1b980ac1a3574f32009bcde6c8e11d8b3f6226c6c43b04->enter($__internal_934c24d1a86b9a91be1b980ac1a3574f32009bcde6c8e11d8b3f6226c6c43b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_19aa1f697093198590ecc1872a11c7ef523907d82abc674ec93ec65e9054250b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19aa1f697093198590ecc1872a11c7ef523907d82abc674ec93ec65e9054250b->enter($__internal_19aa1f697093198590ecc1872a11c7ef523907d82abc674ec93ec65e9054250b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_934c24d1a86b9a91be1b980ac1a3574f32009bcde6c8e11d8b3f6226c6c43b04->leave($__internal_934c24d1a86b9a91be1b980ac1a3574f32009bcde6c8e11d8b3f6226c6c43b04_prof);

        
        $__internal_19aa1f697093198590ecc1872a11c7ef523907d82abc674ec93ec65e9054250b->leave($__internal_19aa1f697093198590ecc1872a11c7ef523907d82abc674ec93ec65e9054250b_prof);

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
