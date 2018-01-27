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
        $__internal_4be6bc44d527e778ebfe24afdf39f860c1490f65af26587fb675be5d8a28e973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be6bc44d527e778ebfe24afdf39f860c1490f65af26587fb675be5d8a28e973->enter($__internal_4be6bc44d527e778ebfe24afdf39f860c1490f65af26587fb675be5d8a28e973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_8cad0eaa54628bb21eac7f8bda3868a49758d9e6e2c6030c40a7a0fa57dfb522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cad0eaa54628bb21eac7f8bda3868a49758d9e6e2c6030c40a7a0fa57dfb522->enter($__internal_8cad0eaa54628bb21eac7f8bda3868a49758d9e6e2c6030c40a7a0fa57dfb522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4be6bc44d527e778ebfe24afdf39f860c1490f65af26587fb675be5d8a28e973->leave($__internal_4be6bc44d527e778ebfe24afdf39f860c1490f65af26587fb675be5d8a28e973_prof);

        
        $__internal_8cad0eaa54628bb21eac7f8bda3868a49758d9e6e2c6030c40a7a0fa57dfb522->leave($__internal_8cad0eaa54628bb21eac7f8bda3868a49758d9e6e2c6030c40a7a0fa57dfb522_prof);

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
