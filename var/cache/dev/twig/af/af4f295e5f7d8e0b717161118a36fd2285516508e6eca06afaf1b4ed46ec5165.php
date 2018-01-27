<?php

/* form_table_layout.html.twig */
class __TwigTemplate_b22070e7133a646de5e954f272621762a0425b8eee5f463eef7144612711b005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bec1884090931f8e30a1fe9a95893f43399067dd48dc8b2d9b3005e08ecbdc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec1884090931f8e30a1fe9a95893f43399067dd48dc8b2d9b3005e08ecbdc53->enter($__internal_bec1884090931f8e30a1fe9a95893f43399067dd48dc8b2d9b3005e08ecbdc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d155f1b207562d5ca5fa52340551cf833fba214d48b8ca49ae40a209bf0c4266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d155f1b207562d5ca5fa52340551cf833fba214d48b8ca49ae40a209bf0c4266->enter($__internal_d155f1b207562d5ca5fa52340551cf833fba214d48b8ca49ae40a209bf0c4266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_bec1884090931f8e30a1fe9a95893f43399067dd48dc8b2d9b3005e08ecbdc53->leave($__internal_bec1884090931f8e30a1fe9a95893f43399067dd48dc8b2d9b3005e08ecbdc53_prof);

        
        $__internal_d155f1b207562d5ca5fa52340551cf833fba214d48b8ca49ae40a209bf0c4266->leave($__internal_d155f1b207562d5ca5fa52340551cf833fba214d48b8ca49ae40a209bf0c4266_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6d27c2670ec95de18cf15cfe3dd9556b63639b904c0f06e14e54dd7d0f58e80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d27c2670ec95de18cf15cfe3dd9556b63639b904c0f06e14e54dd7d0f58e80b->enter($__internal_6d27c2670ec95de18cf15cfe3dd9556b63639b904c0f06e14e54dd7d0f58e80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c88df76ee2fdd94380a7e4002b65512e11675a6189bfcdc29a5bb7c93c1b5c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88df76ee2fdd94380a7e4002b65512e11675a6189bfcdc29a5bb7c93c1b5c04->enter($__internal_c88df76ee2fdd94380a7e4002b65512e11675a6189bfcdc29a5bb7c93c1b5c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_c88df76ee2fdd94380a7e4002b65512e11675a6189bfcdc29a5bb7c93c1b5c04->leave($__internal_c88df76ee2fdd94380a7e4002b65512e11675a6189bfcdc29a5bb7c93c1b5c04_prof);

        
        $__internal_6d27c2670ec95de18cf15cfe3dd9556b63639b904c0f06e14e54dd7d0f58e80b->leave($__internal_6d27c2670ec95de18cf15cfe3dd9556b63639b904c0f06e14e54dd7d0f58e80b_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1a90087bbfcb8c3f89594215d26c8d60c127e83ac653f95cbf03b8fc17c0d21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a90087bbfcb8c3f89594215d26c8d60c127e83ac653f95cbf03b8fc17c0d21f->enter($__internal_1a90087bbfcb8c3f89594215d26c8d60c127e83ac653f95cbf03b8fc17c0d21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_10155059f63f12af339a7942b09424df906c79f73e2a96548c6202310c528a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10155059f63f12af339a7942b09424df906c79f73e2a96548c6202310c528a53->enter($__internal_10155059f63f12af339a7942b09424df906c79f73e2a96548c6202310c528a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_10155059f63f12af339a7942b09424df906c79f73e2a96548c6202310c528a53->leave($__internal_10155059f63f12af339a7942b09424df906c79f73e2a96548c6202310c528a53_prof);

        
        $__internal_1a90087bbfcb8c3f89594215d26c8d60c127e83ac653f95cbf03b8fc17c0d21f->leave($__internal_1a90087bbfcb8c3f89594215d26c8d60c127e83ac653f95cbf03b8fc17c0d21f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_e969ddb0198035ac4ccd66607d8b4fbbeb7d937e04b231879cc1e4ea2abdce97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e969ddb0198035ac4ccd66607d8b4fbbeb7d937e04b231879cc1e4ea2abdce97->enter($__internal_e969ddb0198035ac4ccd66607d8b4fbbeb7d937e04b231879cc1e4ea2abdce97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ffe2d9f10ac685db665c95e0244d4a7c7b64092dbe6a7ecd4123417ba31394da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe2d9f10ac685db665c95e0244d4a7c7b64092dbe6a7ecd4123417ba31394da->enter($__internal_ffe2d9f10ac685db665c95e0244d4a7c7b64092dbe6a7ecd4123417ba31394da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ffe2d9f10ac685db665c95e0244d4a7c7b64092dbe6a7ecd4123417ba31394da->leave($__internal_ffe2d9f10ac685db665c95e0244d4a7c7b64092dbe6a7ecd4123417ba31394da_prof);

        
        $__internal_e969ddb0198035ac4ccd66607d8b4fbbeb7d937e04b231879cc1e4ea2abdce97->leave($__internal_e969ddb0198035ac4ccd66607d8b4fbbeb7d937e04b231879cc1e4ea2abdce97_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5e3e550ab2e5694cbbb9ee81487fd8b59ec67da6108691a54ad96e31db5f721e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3e550ab2e5694cbbb9ee81487fd8b59ec67da6108691a54ad96e31db5f721e->enter($__internal_5e3e550ab2e5694cbbb9ee81487fd8b59ec67da6108691a54ad96e31db5f721e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ef9ad9e98e0004b7f4058a3d8f7da0cec4e1cd66e71d569a448da6df6dd53df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9ad9e98e0004b7f4058a3d8f7da0cec4e1cd66e71d569a448da6df6dd53df7->enter($__internal_ef9ad9e98e0004b7f4058a3d8f7da0cec4e1cd66e71d569a448da6df6dd53df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_ef9ad9e98e0004b7f4058a3d8f7da0cec4e1cd66e71d569a448da6df6dd53df7->leave($__internal_ef9ad9e98e0004b7f4058a3d8f7da0cec4e1cd66e71d569a448da6df6dd53df7_prof);

        
        $__internal_5e3e550ab2e5694cbbb9ee81487fd8b59ec67da6108691a54ad96e31db5f721e->leave($__internal_5e3e550ab2e5694cbbb9ee81487fd8b59ec67da6108691a54ad96e31db5f721e_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
