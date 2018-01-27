<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9daf8c3af69260cca8b25ca5c7eed403bd92746e54291a6a59ab5901d6e1e530 extends Twig_Template
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
        $__internal_416522a3f17890764a7791414841a3e839e3d7a9a55a2dffbf46d3823b4d2a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416522a3f17890764a7791414841a3e839e3d7a9a55a2dffbf46d3823b4d2a4b->enter($__internal_416522a3f17890764a7791414841a3e839e3d7a9a55a2dffbf46d3823b4d2a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bc6c0abe524c86620cd5c0e5b3efebe97d0fd1058ad21626447fd876639de777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6c0abe524c86620cd5c0e5b3efebe97d0fd1058ad21626447fd876639de777->enter($__internal_bc6c0abe524c86620cd5c0e5b3efebe97d0fd1058ad21626447fd876639de777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_416522a3f17890764a7791414841a3e839e3d7a9a55a2dffbf46d3823b4d2a4b->leave($__internal_416522a3f17890764a7791414841a3e839e3d7a9a55a2dffbf46d3823b4d2a4b_prof);

        
        $__internal_bc6c0abe524c86620cd5c0e5b3efebe97d0fd1058ad21626447fd876639de777->leave($__internal_bc6c0abe524c86620cd5c0e5b3efebe97d0fd1058ad21626447fd876639de777_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
