<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9aab1a8b441073c399903168e90058d3624e296127f90ad7fd50cd6709f33467 extends Twig_Template
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
        $__internal_68ba627b0c86bb4e783586ee7913c84e658542bd4a71647faa816dea406c4839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ba627b0c86bb4e783586ee7913c84e658542bd4a71647faa816dea406c4839->enter($__internal_68ba627b0c86bb4e783586ee7913c84e658542bd4a71647faa816dea406c4839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f7a403be776cd03fe3278f7afec6b22e580e68b09d46a0bd74f0638606255665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a403be776cd03fe3278f7afec6b22e580e68b09d46a0bd74f0638606255665->enter($__internal_f7a403be776cd03fe3278f7afec6b22e580e68b09d46a0bd74f0638606255665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_68ba627b0c86bb4e783586ee7913c84e658542bd4a71647faa816dea406c4839->leave($__internal_68ba627b0c86bb4e783586ee7913c84e658542bd4a71647faa816dea406c4839_prof);

        
        $__internal_f7a403be776cd03fe3278f7afec6b22e580e68b09d46a0bd74f0638606255665->leave($__internal_f7a403be776cd03fe3278f7afec6b22e580e68b09d46a0bd74f0638606255665_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
