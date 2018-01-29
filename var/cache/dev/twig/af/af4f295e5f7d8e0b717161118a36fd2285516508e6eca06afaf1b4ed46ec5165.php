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
        $__internal_9b7fd29cd5f4a7e90eb6a73a597d104e04f36a3ad669feb057fb543e14ca0001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7fd29cd5f4a7e90eb6a73a597d104e04f36a3ad669feb057fb543e14ca0001->enter($__internal_9b7fd29cd5f4a7e90eb6a73a597d104e04f36a3ad669feb057fb543e14ca0001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_2c519d75b7fb4607424e44203b3fcd67ae414a395565ad20269c42662460a890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c519d75b7fb4607424e44203b3fcd67ae414a395565ad20269c42662460a890->enter($__internal_2c519d75b7fb4607424e44203b3fcd67ae414a395565ad20269c42662460a890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_9b7fd29cd5f4a7e90eb6a73a597d104e04f36a3ad669feb057fb543e14ca0001->leave($__internal_9b7fd29cd5f4a7e90eb6a73a597d104e04f36a3ad669feb057fb543e14ca0001_prof);

        
        $__internal_2c519d75b7fb4607424e44203b3fcd67ae414a395565ad20269c42662460a890->leave($__internal_2c519d75b7fb4607424e44203b3fcd67ae414a395565ad20269c42662460a890_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_309fb3ea95b6dc39c427c2df43fa4e49a09e3589b6fe20239a3618604b33e262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309fb3ea95b6dc39c427c2df43fa4e49a09e3589b6fe20239a3618604b33e262->enter($__internal_309fb3ea95b6dc39c427c2df43fa4e49a09e3589b6fe20239a3618604b33e262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4c832e6ad2dbd77b2e290ea432e498701f0bce4a2fe9f250bcf9e60230078f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c832e6ad2dbd77b2e290ea432e498701f0bce4a2fe9f250bcf9e60230078f94->enter($__internal_4c832e6ad2dbd77b2e290ea432e498701f0bce4a2fe9f250bcf9e60230078f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4c832e6ad2dbd77b2e290ea432e498701f0bce4a2fe9f250bcf9e60230078f94->leave($__internal_4c832e6ad2dbd77b2e290ea432e498701f0bce4a2fe9f250bcf9e60230078f94_prof);

        
        $__internal_309fb3ea95b6dc39c427c2df43fa4e49a09e3589b6fe20239a3618604b33e262->leave($__internal_309fb3ea95b6dc39c427c2df43fa4e49a09e3589b6fe20239a3618604b33e262_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_491cc0d1040200bb0bd58ae4f314cd7651254044393c311dd49442ee0f4ec561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491cc0d1040200bb0bd58ae4f314cd7651254044393c311dd49442ee0f4ec561->enter($__internal_491cc0d1040200bb0bd58ae4f314cd7651254044393c311dd49442ee0f4ec561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_5f2005e9f974ba62d325dc19b363b82033a8d4b3996617366e9bb7ed64975936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2005e9f974ba62d325dc19b363b82033a8d4b3996617366e9bb7ed64975936->enter($__internal_5f2005e9f974ba62d325dc19b363b82033a8d4b3996617366e9bb7ed64975936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_5f2005e9f974ba62d325dc19b363b82033a8d4b3996617366e9bb7ed64975936->leave($__internal_5f2005e9f974ba62d325dc19b363b82033a8d4b3996617366e9bb7ed64975936_prof);

        
        $__internal_491cc0d1040200bb0bd58ae4f314cd7651254044393c311dd49442ee0f4ec561->leave($__internal_491cc0d1040200bb0bd58ae4f314cd7651254044393c311dd49442ee0f4ec561_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_97ae8caefa49661542b06818fa87f0e14e8d2a1c75c6fabffe6142a83624d743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ae8caefa49661542b06818fa87f0e14e8d2a1c75c6fabffe6142a83624d743->enter($__internal_97ae8caefa49661542b06818fa87f0e14e8d2a1c75c6fabffe6142a83624d743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4873443164d6ced0763c2f30eb44b5b3d39a06f0c9f7a77dcbed8fc161ddd85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4873443164d6ced0763c2f30eb44b5b3d39a06f0c9f7a77dcbed8fc161ddd85f->enter($__internal_4873443164d6ced0763c2f30eb44b5b3d39a06f0c9f7a77dcbed8fc161ddd85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_4873443164d6ced0763c2f30eb44b5b3d39a06f0c9f7a77dcbed8fc161ddd85f->leave($__internal_4873443164d6ced0763c2f30eb44b5b3d39a06f0c9f7a77dcbed8fc161ddd85f_prof);

        
        $__internal_97ae8caefa49661542b06818fa87f0e14e8d2a1c75c6fabffe6142a83624d743->leave($__internal_97ae8caefa49661542b06818fa87f0e14e8d2a1c75c6fabffe6142a83624d743_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b1939387d17268459a31eea0cf4ae13b9d561539aeb428402f2d7c8f4d965c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1939387d17268459a31eea0cf4ae13b9d561539aeb428402f2d7c8f4d965c69->enter($__internal_b1939387d17268459a31eea0cf4ae13b9d561539aeb428402f2d7c8f4d965c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_bfceff347bad1f757815313957be0c5a8f6085b680d376740fe18fc69f4fa40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfceff347bad1f757815313957be0c5a8f6085b680d376740fe18fc69f4fa40e->enter($__internal_bfceff347bad1f757815313957be0c5a8f6085b680d376740fe18fc69f4fa40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_bfceff347bad1f757815313957be0c5a8f6085b680d376740fe18fc69f4fa40e->leave($__internal_bfceff347bad1f757815313957be0c5a8f6085b680d376740fe18fc69f4fa40e_prof);

        
        $__internal_b1939387d17268459a31eea0cf4ae13b9d561539aeb428402f2d7c8f4d965c69->leave($__internal_b1939387d17268459a31eea0cf4ae13b9d561539aeb428402f2d7c8f4d965c69_prof);

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
