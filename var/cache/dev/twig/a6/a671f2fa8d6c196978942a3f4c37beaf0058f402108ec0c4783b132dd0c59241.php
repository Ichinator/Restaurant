<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_60131d403d405208edd4e18076b02adf391341e64787b2e2f93a53484b043d77 extends Twig_Template
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
        $__internal_baa86dc2c7443718d3956840e5931279252e2ee0c9e19b0446c5e06f30ea93b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa86dc2c7443718d3956840e5931279252e2ee0c9e19b0446c5e06f30ea93b3->enter($__internal_baa86dc2c7443718d3956840e5931279252e2ee0c9e19b0446c5e06f30ea93b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2dbe362a1fbb4d54103a9365e5c1dd189526af4f4de059e64813616c87def38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbe362a1fbb4d54103a9365e5c1dd189526af4f4de059e64813616c87def38c->enter($__internal_2dbe362a1fbb4d54103a9365e5c1dd189526af4f4de059e64813616c87def38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_baa86dc2c7443718d3956840e5931279252e2ee0c9e19b0446c5e06f30ea93b3->leave($__internal_baa86dc2c7443718d3956840e5931279252e2ee0c9e19b0446c5e06f30ea93b3_prof);

        
        $__internal_2dbe362a1fbb4d54103a9365e5c1dd189526af4f4de059e64813616c87def38c->leave($__internal_2dbe362a1fbb4d54103a9365e5c1dd189526af4f4de059e64813616c87def38c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
