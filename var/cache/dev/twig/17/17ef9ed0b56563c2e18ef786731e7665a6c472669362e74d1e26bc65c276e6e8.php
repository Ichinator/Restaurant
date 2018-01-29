<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_2fb647953543e2d65c8ddb9ee305c95eaf68f0289c7e6968bd90376cb386fd04 extends Twig_Template
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
        $__internal_a74542835e08c066b7307b7fef097d55dfc7fe426f6fcdb99a515b70961f3304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74542835e08c066b7307b7fef097d55dfc7fe426f6fcdb99a515b70961f3304->enter($__internal_a74542835e08c066b7307b7fef097d55dfc7fe426f6fcdb99a515b70961f3304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_429ca4defa2569d1063157056770fb507e389d2577aa2b05b82602701806c59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429ca4defa2569d1063157056770fb507e389d2577aa2b05b82602701806c59f->enter($__internal_429ca4defa2569d1063157056770fb507e389d2577aa2b05b82602701806c59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a74542835e08c066b7307b7fef097d55dfc7fe426f6fcdb99a515b70961f3304->leave($__internal_a74542835e08c066b7307b7fef097d55dfc7fe426f6fcdb99a515b70961f3304_prof);

        
        $__internal_429ca4defa2569d1063157056770fb507e389d2577aa2b05b82602701806c59f->leave($__internal_429ca4defa2569d1063157056770fb507e389d2577aa2b05b82602701806c59f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
