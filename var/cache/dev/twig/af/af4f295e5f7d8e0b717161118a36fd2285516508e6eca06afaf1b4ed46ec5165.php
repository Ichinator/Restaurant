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
        $__internal_737dcfff65a871678774f0c15dfe3d9dba0c3ac1f2060b84919165343c9c9823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737dcfff65a871678774f0c15dfe3d9dba0c3ac1f2060b84919165343c9c9823->enter($__internal_737dcfff65a871678774f0c15dfe3d9dba0c3ac1f2060b84919165343c9c9823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_041d0b1e29d7470185dee03a18189a916330d194c3916dc31315bc4dd41572ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041d0b1e29d7470185dee03a18189a916330d194c3916dc31315bc4dd41572ac->enter($__internal_041d0b1e29d7470185dee03a18189a916330d194c3916dc31315bc4dd41572ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_737dcfff65a871678774f0c15dfe3d9dba0c3ac1f2060b84919165343c9c9823->leave($__internal_737dcfff65a871678774f0c15dfe3d9dba0c3ac1f2060b84919165343c9c9823_prof);

        
        $__internal_041d0b1e29d7470185dee03a18189a916330d194c3916dc31315bc4dd41572ac->leave($__internal_041d0b1e29d7470185dee03a18189a916330d194c3916dc31315bc4dd41572ac_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dcee175cdc56e6aff2679d6973a7fb4c53b2f0b2cddffe031fa7beb93f25a3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcee175cdc56e6aff2679d6973a7fb4c53b2f0b2cddffe031fa7beb93f25a3ba->enter($__internal_dcee175cdc56e6aff2679d6973a7fb4c53b2f0b2cddffe031fa7beb93f25a3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_16af6142ae89d069012864956a8c6538a4e64e8b2acbb280afb3687c8b7d45c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16af6142ae89d069012864956a8c6538a4e64e8b2acbb280afb3687c8b7d45c8->enter($__internal_16af6142ae89d069012864956a8c6538a4e64e8b2acbb280afb3687c8b7d45c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_16af6142ae89d069012864956a8c6538a4e64e8b2acbb280afb3687c8b7d45c8->leave($__internal_16af6142ae89d069012864956a8c6538a4e64e8b2acbb280afb3687c8b7d45c8_prof);

        
        $__internal_dcee175cdc56e6aff2679d6973a7fb4c53b2f0b2cddffe031fa7beb93f25a3ba->leave($__internal_dcee175cdc56e6aff2679d6973a7fb4c53b2f0b2cddffe031fa7beb93f25a3ba_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_dc3646273161edee53928c7583bb4f1ac07cc84981210e3fcb98ac242fe699e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3646273161edee53928c7583bb4f1ac07cc84981210e3fcb98ac242fe699e5->enter($__internal_dc3646273161edee53928c7583bb4f1ac07cc84981210e3fcb98ac242fe699e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_40a1def1c847b07c07d9dd1df571396bd7e21b855ae832431573dd95e374b214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a1def1c847b07c07d9dd1df571396bd7e21b855ae832431573dd95e374b214->enter($__internal_40a1def1c847b07c07d9dd1df571396bd7e21b855ae832431573dd95e374b214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_40a1def1c847b07c07d9dd1df571396bd7e21b855ae832431573dd95e374b214->leave($__internal_40a1def1c847b07c07d9dd1df571396bd7e21b855ae832431573dd95e374b214_prof);

        
        $__internal_dc3646273161edee53928c7583bb4f1ac07cc84981210e3fcb98ac242fe699e5->leave($__internal_dc3646273161edee53928c7583bb4f1ac07cc84981210e3fcb98ac242fe699e5_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_75c8b57697ab4af21e2cf27719de439d9d84781672fe39ca7805961e512e99f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c8b57697ab4af21e2cf27719de439d9d84781672fe39ca7805961e512e99f7->enter($__internal_75c8b57697ab4af21e2cf27719de439d9d84781672fe39ca7805961e512e99f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_d6e755d96c3c8a038293b5af48a9e79e579402aaf14fa8ba4e24abe40991774c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e755d96c3c8a038293b5af48a9e79e579402aaf14fa8ba4e24abe40991774c->enter($__internal_d6e755d96c3c8a038293b5af48a9e79e579402aaf14fa8ba4e24abe40991774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_d6e755d96c3c8a038293b5af48a9e79e579402aaf14fa8ba4e24abe40991774c->leave($__internal_d6e755d96c3c8a038293b5af48a9e79e579402aaf14fa8ba4e24abe40991774c_prof);

        
        $__internal_75c8b57697ab4af21e2cf27719de439d9d84781672fe39ca7805961e512e99f7->leave($__internal_75c8b57697ab4af21e2cf27719de439d9d84781672fe39ca7805961e512e99f7_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_232fa943057d7e5bfbea3e2801477f16caab278adfe1984fcfbc9b510203a18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232fa943057d7e5bfbea3e2801477f16caab278adfe1984fcfbc9b510203a18e->enter($__internal_232fa943057d7e5bfbea3e2801477f16caab278adfe1984fcfbc9b510203a18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_f45f94bd4ee7153bf227596b7b2925252579d17e6e7a320d8e46db52d29bda67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45f94bd4ee7153bf227596b7b2925252579d17e6e7a320d8e46db52d29bda67->enter($__internal_f45f94bd4ee7153bf227596b7b2925252579d17e6e7a320d8e46db52d29bda67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_f45f94bd4ee7153bf227596b7b2925252579d17e6e7a320d8e46db52d29bda67->leave($__internal_f45f94bd4ee7153bf227596b7b2925252579d17e6e7a320d8e46db52d29bda67_prof);

        
        $__internal_232fa943057d7e5bfbea3e2801477f16caab278adfe1984fcfbc9b510203a18e->leave($__internal_232fa943057d7e5bfbea3e2801477f16caab278adfe1984fcfbc9b510203a18e_prof);

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
