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
        $__internal_1ef53f4e67153f74cfab7c7fea3a07fd9e39dd28a401dfbd6b1eb65440c7cb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef53f4e67153f74cfab7c7fea3a07fd9e39dd28a401dfbd6b1eb65440c7cb7e->enter($__internal_1ef53f4e67153f74cfab7c7fea3a07fd9e39dd28a401dfbd6b1eb65440c7cb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_cebe032cd3a07533c397c35711031fefd48872ab931feb5023f7ba458481ece5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebe032cd3a07533c397c35711031fefd48872ab931feb5023f7ba458481ece5->enter($__internal_cebe032cd3a07533c397c35711031fefd48872ab931feb5023f7ba458481ece5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1ef53f4e67153f74cfab7c7fea3a07fd9e39dd28a401dfbd6b1eb65440c7cb7e->leave($__internal_1ef53f4e67153f74cfab7c7fea3a07fd9e39dd28a401dfbd6b1eb65440c7cb7e_prof);

        
        $__internal_cebe032cd3a07533c397c35711031fefd48872ab931feb5023f7ba458481ece5->leave($__internal_cebe032cd3a07533c397c35711031fefd48872ab931feb5023f7ba458481ece5_prof);

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
