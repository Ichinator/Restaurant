<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fe49548416b13cf7f755e859dccd58e716633e3171985397f7b1e26999afe0c8 extends Twig_Template
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
        $__internal_1d0c015ecc2a50bdaf83cdc2f6238854af8a42e0c9c891c046be83085a1ae9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0c015ecc2a50bdaf83cdc2f6238854af8a42e0c9c891c046be83085a1ae9cf->enter($__internal_1d0c015ecc2a50bdaf83cdc2f6238854af8a42e0c9c891c046be83085a1ae9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_566f2033b9d1bb8d8f95d1ccd44e42a452b51b1e6a4e21af560d0e27825afa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566f2033b9d1bb8d8f95d1ccd44e42a452b51b1e6a4e21af560d0e27825afa11->enter($__internal_566f2033b9d1bb8d8f95d1ccd44e42a452b51b1e6a4e21af560d0e27825afa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1d0c015ecc2a50bdaf83cdc2f6238854af8a42e0c9c891c046be83085a1ae9cf->leave($__internal_1d0c015ecc2a50bdaf83cdc2f6238854af8a42e0c9c891c046be83085a1ae9cf_prof);

        
        $__internal_566f2033b9d1bb8d8f95d1ccd44e42a452b51b1e6a4e21af560d0e27825afa11->leave($__internal_566f2033b9d1bb8d8f95d1ccd44e42a452b51b1e6a4e21af560d0e27825afa11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
