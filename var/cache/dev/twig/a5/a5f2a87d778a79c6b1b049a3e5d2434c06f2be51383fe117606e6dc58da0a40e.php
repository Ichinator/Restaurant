<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_445373201d6c8c715f6ea5897694c6d7a2bc4a231e7a648021398187eb056736 extends Twig_Template
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
        $__internal_a2827903194071461f310c192ca93604eab5d20775e7fe30b4e63cb6847b43a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2827903194071461f310c192ca93604eab5d20775e7fe30b4e63cb6847b43a5->enter($__internal_a2827903194071461f310c192ca93604eab5d20775e7fe30b4e63cb6847b43a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f68ad3d38118f3f82e7b3c2287912b2ae7931596c1a9096c336b8c83fd9648cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68ad3d38118f3f82e7b3c2287912b2ae7931596c1a9096c336b8c83fd9648cc->enter($__internal_f68ad3d38118f3f82e7b3c2287912b2ae7931596c1a9096c336b8c83fd9648cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a2827903194071461f310c192ca93604eab5d20775e7fe30b4e63cb6847b43a5->leave($__internal_a2827903194071461f310c192ca93604eab5d20775e7fe30b4e63cb6847b43a5_prof);

        
        $__internal_f68ad3d38118f3f82e7b3c2287912b2ae7931596c1a9096c336b8c83fd9648cc->leave($__internal_f68ad3d38118f3f82e7b3c2287912b2ae7931596c1a9096c336b8c83fd9648cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
