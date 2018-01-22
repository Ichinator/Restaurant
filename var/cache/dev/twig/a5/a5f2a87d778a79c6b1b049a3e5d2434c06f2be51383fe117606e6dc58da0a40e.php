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
        $__internal_fedccb13a8c04eb715e1ecd877303dffb26f60186a8ae5b5ad0d4ac1d5baccf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedccb13a8c04eb715e1ecd877303dffb26f60186a8ae5b5ad0d4ac1d5baccf1->enter($__internal_fedccb13a8c04eb715e1ecd877303dffb26f60186a8ae5b5ad0d4ac1d5baccf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_285271c3dd9aa4a44456c060b473a81d8bd7c9e7fb1790a7f4e275d6d49afc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285271c3dd9aa4a44456c060b473a81d8bd7c9e7fb1790a7f4e275d6d49afc39->enter($__internal_285271c3dd9aa4a44456c060b473a81d8bd7c9e7fb1790a7f4e275d6d49afc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fedccb13a8c04eb715e1ecd877303dffb26f60186a8ae5b5ad0d4ac1d5baccf1->leave($__internal_fedccb13a8c04eb715e1ecd877303dffb26f60186a8ae5b5ad0d4ac1d5baccf1_prof);

        
        $__internal_285271c3dd9aa4a44456c060b473a81d8bd7c9e7fb1790a7f4e275d6d49afc39->leave($__internal_285271c3dd9aa4a44456c060b473a81d8bd7c9e7fb1790a7f4e275d6d49afc39_prof);

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
