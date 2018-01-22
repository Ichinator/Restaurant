<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0fa7905a73d75ebda45fc57b5d8b917c384271751e71b96c65427385bb73bd56 extends Twig_Template
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
        $__internal_157d7fdb183b5366d91bff41b05cb547121f191f56739f0079299078b99770a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157d7fdb183b5366d91bff41b05cb547121f191f56739f0079299078b99770a5->enter($__internal_157d7fdb183b5366d91bff41b05cb547121f191f56739f0079299078b99770a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ca1b73fb52d722578f2113a24f72e7c7d4b928fb73842a62968e43ef409377d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1b73fb52d722578f2113a24f72e7c7d4b928fb73842a62968e43ef409377d2->enter($__internal_ca1b73fb52d722578f2113a24f72e7c7d4b928fb73842a62968e43ef409377d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_157d7fdb183b5366d91bff41b05cb547121f191f56739f0079299078b99770a5->leave($__internal_157d7fdb183b5366d91bff41b05cb547121f191f56739f0079299078b99770a5_prof);

        
        $__internal_ca1b73fb52d722578f2113a24f72e7c7d4b928fb73842a62968e43ef409377d2->leave($__internal_ca1b73fb52d722578f2113a24f72e7c7d4b928fb73842a62968e43ef409377d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
