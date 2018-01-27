<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2f98d0a930abf348077582a86430d672e9be34c083cfd5c0771dbbe3e46f4dc4 extends Twig_Template
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
        $__internal_f154f31bffaf40d11b26ccf193863b987d0e0c39d2488d1ffd17ccef6ce1c9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f154f31bffaf40d11b26ccf193863b987d0e0c39d2488d1ffd17ccef6ce1c9c3->enter($__internal_f154f31bffaf40d11b26ccf193863b987d0e0c39d2488d1ffd17ccef6ce1c9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2dab7688ac3a63b58415e2c1dba4ccb334d085aa3bde0b41e04fb81dea5d050a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dab7688ac3a63b58415e2c1dba4ccb334d085aa3bde0b41e04fb81dea5d050a->enter($__internal_2dab7688ac3a63b58415e2c1dba4ccb334d085aa3bde0b41e04fb81dea5d050a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f154f31bffaf40d11b26ccf193863b987d0e0c39d2488d1ffd17ccef6ce1c9c3->leave($__internal_f154f31bffaf40d11b26ccf193863b987d0e0c39d2488d1ffd17ccef6ce1c9c3_prof);

        
        $__internal_2dab7688ac3a63b58415e2c1dba4ccb334d085aa3bde0b41e04fb81dea5d050a->leave($__internal_2dab7688ac3a63b58415e2c1dba4ccb334d085aa3bde0b41e04fb81dea5d050a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
