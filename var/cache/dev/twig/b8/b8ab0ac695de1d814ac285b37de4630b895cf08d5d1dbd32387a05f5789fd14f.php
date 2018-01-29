<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b8dc309e0e4484674ba8aa56ded51a539d42e7999be94c718ffe3a366469cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6ac4bd6a56d9d1eec3c48f494b7d596d9491d2c91bfbdc0084a94ecc8340f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ac4bd6a56d9d1eec3c48f494b7d596d9491d2c91bfbdc0084a94ecc8340f5f->enter($__internal_c6ac4bd6a56d9d1eec3c48f494b7d596d9491d2c91bfbdc0084a94ecc8340f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_77622f55dc9560f5d746f8e7825bda00dc7084c2310dfaf2291dfd400432fe08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77622f55dc9560f5d746f8e7825bda00dc7084c2310dfaf2291dfd400432fe08->enter($__internal_77622f55dc9560f5d746f8e7825bda00dc7084c2310dfaf2291dfd400432fe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c6ac4bd6a56d9d1eec3c48f494b7d596d9491d2c91bfbdc0084a94ecc8340f5f->leave($__internal_c6ac4bd6a56d9d1eec3c48f494b7d596d9491d2c91bfbdc0084a94ecc8340f5f_prof);

        
        $__internal_77622f55dc9560f5d746f8e7825bda00dc7084c2310dfaf2291dfd400432fe08->leave($__internal_77622f55dc9560f5d746f8e7825bda00dc7084c2310dfaf2291dfd400432fe08_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc73109ad6db19f057ce1de4b757c5caa29b917a582f664dd6f140bab3ef1425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc73109ad6db19f057ce1de4b757c5caa29b917a582f664dd6f140bab3ef1425->enter($__internal_bc73109ad6db19f057ce1de4b757c5caa29b917a582f664dd6f140bab3ef1425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2452511d7f65e3e204dc2e0ba52bef4f15bb31e41276ef9264c56bdf79a1c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2452511d7f65e3e204dc2e0ba52bef4f15bb31e41276ef9264c56bdf79a1c51->enter($__internal_c2452511d7f65e3e204dc2e0ba52bef4f15bb31e41276ef9264c56bdf79a1c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c2452511d7f65e3e204dc2e0ba52bef4f15bb31e41276ef9264c56bdf79a1c51->leave($__internal_c2452511d7f65e3e204dc2e0ba52bef4f15bb31e41276ef9264c56bdf79a1c51_prof);

        
        $__internal_bc73109ad6db19f057ce1de4b757c5caa29b917a582f664dd6f140bab3ef1425->leave($__internal_bc73109ad6db19f057ce1de4b757c5caa29b917a582f664dd6f140bab3ef1425_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
