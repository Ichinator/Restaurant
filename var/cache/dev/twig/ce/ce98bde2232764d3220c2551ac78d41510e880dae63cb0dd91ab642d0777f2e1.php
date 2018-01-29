<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6e9eaaff776d13b42f09542a95d630baa6ce2a7b69a8e6d51061941699774694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9785bb1eeb0feaf8946378475ec694935732a19ce7ebcd1707a28642374a7d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9785bb1eeb0feaf8946378475ec694935732a19ce7ebcd1707a28642374a7d02->enter($__internal_9785bb1eeb0feaf8946378475ec694935732a19ce7ebcd1707a28642374a7d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c4314513834938b86cdb92b40702b22e8fbce4c41a472f998594ed2bd8a9fcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4314513834938b86cdb92b40702b22e8fbce4c41a472f998594ed2bd8a9fcfb->enter($__internal_c4314513834938b86cdb92b40702b22e8fbce4c41a472f998594ed2bd8a9fcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_9785bb1eeb0feaf8946378475ec694935732a19ce7ebcd1707a28642374a7d02->leave($__internal_9785bb1eeb0feaf8946378475ec694935732a19ce7ebcd1707a28642374a7d02_prof);

        
        $__internal_c4314513834938b86cdb92b40702b22e8fbce4c41a472f998594ed2bd8a9fcfb->leave($__internal_c4314513834938b86cdb92b40702b22e8fbce4c41a472f998594ed2bd8a9fcfb_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b0fd12a2df6b5ffdf27ff47dc2f7627ce06f997e03d4f23e7a3b06ea01c2aca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fd12a2df6b5ffdf27ff47dc2f7627ce06f997e03d4f23e7a3b06ea01c2aca1->enter($__internal_b0fd12a2df6b5ffdf27ff47dc2f7627ce06f997e03d4f23e7a3b06ea01c2aca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_59597fe3d04eda17cc04c49bb560a3bb0cfa7abde02ac02782f2a100f86c3335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59597fe3d04eda17cc04c49bb560a3bb0cfa7abde02ac02782f2a100f86c3335->enter($__internal_59597fe3d04eda17cc04c49bb560a3bb0cfa7abde02ac02782f2a100f86c3335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_59597fe3d04eda17cc04c49bb560a3bb0cfa7abde02ac02782f2a100f86c3335->leave($__internal_59597fe3d04eda17cc04c49bb560a3bb0cfa7abde02ac02782f2a100f86c3335_prof);

        
        $__internal_b0fd12a2df6b5ffdf27ff47dc2f7627ce06f997e03d4f23e7a3b06ea01c2aca1->leave($__internal_b0fd12a2df6b5ffdf27ff47dc2f7627ce06f997e03d4f23e7a3b06ea01c2aca1_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_adfe5981429f1fe21fe2453813ee44f37688ac9f7823611466b21118169614d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfe5981429f1fe21fe2453813ee44f37688ac9f7823611466b21118169614d5->enter($__internal_adfe5981429f1fe21fe2453813ee44f37688ac9f7823611466b21118169614d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ecd1acbebb29cc1d2a4f72dcf692bb825e55e6001f5aabfe76d2ba3b7c406aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd1acbebb29cc1d2a4f72dcf692bb825e55e6001f5aabfe76d2ba3b7c406aaf->enter($__internal_ecd1acbebb29cc1d2a4f72dcf692bb825e55e6001f5aabfe76d2ba3b7c406aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ecd1acbebb29cc1d2a4f72dcf692bb825e55e6001f5aabfe76d2ba3b7c406aaf->leave($__internal_ecd1acbebb29cc1d2a4f72dcf692bb825e55e6001f5aabfe76d2ba3b7c406aaf_prof);

        
        $__internal_adfe5981429f1fe21fe2453813ee44f37688ac9f7823611466b21118169614d5->leave($__internal_adfe5981429f1fe21fe2453813ee44f37688ac9f7823611466b21118169614d5_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f3184a8430e6983a1c7e162195c9ecb9d459584f994d6c16f5c13d2fa3b1f430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3184a8430e6983a1c7e162195c9ecb9d459584f994d6c16f5c13d2fa3b1f430->enter($__internal_f3184a8430e6983a1c7e162195c9ecb9d459584f994d6c16f5c13d2fa3b1f430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_81a866356f8346bb3c5bcfa1d1852380e81cfd11e0520afccd15b0ef6399465e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a866356f8346bb3c5bcfa1d1852380e81cfd11e0520afccd15b0ef6399465e->enter($__internal_81a866356f8346bb3c5bcfa1d1852380e81cfd11e0520afccd15b0ef6399465e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_81a866356f8346bb3c5bcfa1d1852380e81cfd11e0520afccd15b0ef6399465e->leave($__internal_81a866356f8346bb3c5bcfa1d1852380e81cfd11e0520afccd15b0ef6399465e_prof);

        
        $__internal_f3184a8430e6983a1c7e162195c9ecb9d459584f994d6c16f5c13d2fa3b1f430->leave($__internal_f3184a8430e6983a1c7e162195c9ecb9d459584f994d6c16f5c13d2fa3b1f430_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4da4773b8389113e4a39e97f1bf850eabedc06f03d4d10f684e2b074dd830d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da4773b8389113e4a39e97f1bf850eabedc06f03d4d10f684e2b074dd830d8c->enter($__internal_4da4773b8389113e4a39e97f1bf850eabedc06f03d4d10f684e2b074dd830d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_5f70c1bf21c2dc60140c8403aab9b2d8b6bc60a069aecde1dda4ccb9b4e5da2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f70c1bf21c2dc60140c8403aab9b2d8b6bc60a069aecde1dda4ccb9b4e5da2d->enter($__internal_5f70c1bf21c2dc60140c8403aab9b2d8b6bc60a069aecde1dda4ccb9b4e5da2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_8094d16473c71445777b1aa1218d9dc9b97ab43f147918c25b815255ac1bb52d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d735e48ca1739a04defa800d86a93d7dcc517f81c36b6a61c08fec9d3b4b3a9f = "{{") && ('' === $__internal_d735e48ca1739a04defa800d86a93d7dcc517f81c36b6a61c08fec9d3b4b3a9f || 0 === strpos($__internal_8094d16473c71445777b1aa1218d9dc9b97ab43f147918c25b815255ac1bb52d, $__internal_d735e48ca1739a04defa800d86a93d7dcc517f81c36b6a61c08fec9d3b4b3a9f)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_632bb4e5fac10c371defa4abec47455f6ac9d70c84beeb8637c86249b1443989 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_5dc7c2e0aaa641abb0a7e5a8c96426e2e3955f9c4e33dc9463b03029ba990e18 = "}}") && ('' === $__internal_5dc7c2e0aaa641abb0a7e5a8c96426e2e3955f9c4e33dc9463b03029ba990e18 || $__internal_5dc7c2e0aaa641abb0a7e5a8c96426e2e3955f9c4e33dc9463b03029ba990e18 === substr($__internal_632bb4e5fac10c371defa4abec47455f6ac9d70c84beeb8637c86249b1443989, -strlen($__internal_5dc7c2e0aaa641abb0a7e5a8c96426e2e3955f9c4e33dc9463b03029ba990e18))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_5f70c1bf21c2dc60140c8403aab9b2d8b6bc60a069aecde1dda4ccb9b4e5da2d->leave($__internal_5f70c1bf21c2dc60140c8403aab9b2d8b6bc60a069aecde1dda4ccb9b4e5da2d_prof);

        
        $__internal_4da4773b8389113e4a39e97f1bf850eabedc06f03d4d10f684e2b074dd830d8c->leave($__internal_4da4773b8389113e4a39e97f1bf850eabedc06f03d4d10f684e2b074dd830d8c_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_dfbc4974944842edb07c8ac115f0934923b63fc4519c71104d6a7ab8597d31fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbc4974944842edb07c8ac115f0934923b63fc4519c71104d6a7ab8597d31fe->enter($__internal_dfbc4974944842edb07c8ac115f0934923b63fc4519c71104d6a7ab8597d31fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7133ceed742b49eed5a0e8e16102900ec0ba1d414ed21f3975d641cb53d7afe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7133ceed742b49eed5a0e8e16102900ec0ba1d414ed21f3975d641cb53d7afe0->enter($__internal_7133ceed742b49eed5a0e8e16102900ec0ba1d414ed21f3975d641cb53d7afe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7133ceed742b49eed5a0e8e16102900ec0ba1d414ed21f3975d641cb53d7afe0->leave($__internal_7133ceed742b49eed5a0e8e16102900ec0ba1d414ed21f3975d641cb53d7afe0_prof);

        
        $__internal_dfbc4974944842edb07c8ac115f0934923b63fc4519c71104d6a7ab8597d31fe->leave($__internal_dfbc4974944842edb07c8ac115f0934923b63fc4519c71104d6a7ab8597d31fe_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_70184a3a8e7c17f2485b160b75feaec24120cde2681dc18b940ae152538ee87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70184a3a8e7c17f2485b160b75feaec24120cde2681dc18b940ae152538ee87b->enter($__internal_70184a3a8e7c17f2485b160b75feaec24120cde2681dc18b940ae152538ee87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_bc1b41b2fd4584176eea80673ebf81e2577f394e52a86606720f678dd866a314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1b41b2fd4584176eea80673ebf81e2577f394e52a86606720f678dd866a314->enter($__internal_bc1b41b2fd4584176eea80673ebf81e2577f394e52a86606720f678dd866a314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_bc1b41b2fd4584176eea80673ebf81e2577f394e52a86606720f678dd866a314->leave($__internal_bc1b41b2fd4584176eea80673ebf81e2577f394e52a86606720f678dd866a314_prof);

        
        $__internal_70184a3a8e7c17f2485b160b75feaec24120cde2681dc18b940ae152538ee87b->leave($__internal_70184a3a8e7c17f2485b160b75feaec24120cde2681dc18b940ae152538ee87b_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ea82f318e9360d9d506f0b00c1164082c1367769a725a48ce61478e65ac534c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea82f318e9360d9d506f0b00c1164082c1367769a725a48ce61478e65ac534c7->enter($__internal_ea82f318e9360d9d506f0b00c1164082c1367769a725a48ce61478e65ac534c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_bbcd7c3680323a0b0deb99df2cb39862a1660a077e2b9503d1203c09b85c9f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcd7c3680323a0b0deb99df2cb39862a1660a077e2b9503d1203c09b85c9f4d->enter($__internal_bbcd7c3680323a0b0deb99df2cb39862a1660a077e2b9503d1203c09b85c9f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_bbcd7c3680323a0b0deb99df2cb39862a1660a077e2b9503d1203c09b85c9f4d->leave($__internal_bbcd7c3680323a0b0deb99df2cb39862a1660a077e2b9503d1203c09b85c9f4d_prof);

        
        $__internal_ea82f318e9360d9d506f0b00c1164082c1367769a725a48ce61478e65ac534c7->leave($__internal_ea82f318e9360d9d506f0b00c1164082c1367769a725a48ce61478e65ac534c7_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_44479d97e1baa041709545387c6bba1e235c8c78c3ce712fde7286d0114d858d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44479d97e1baa041709545387c6bba1e235c8c78c3ce712fde7286d0114d858d->enter($__internal_44479d97e1baa041709545387c6bba1e235c8c78c3ce712fde7286d0114d858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_aed162439a63cda6946570e89d477a2255fe1e34eb18f1e6d481c061873eef5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed162439a63cda6946570e89d477a2255fe1e34eb18f1e6d481c061873eef5a->enter($__internal_aed162439a63cda6946570e89d477a2255fe1e34eb18f1e6d481c061873eef5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_aed162439a63cda6946570e89d477a2255fe1e34eb18f1e6d481c061873eef5a->leave($__internal_aed162439a63cda6946570e89d477a2255fe1e34eb18f1e6d481c061873eef5a_prof);

        
        $__internal_44479d97e1baa041709545387c6bba1e235c8c78c3ce712fde7286d0114d858d->leave($__internal_44479d97e1baa041709545387c6bba1e235c8c78c3ce712fde7286d0114d858d_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d3aed0ec45c9379fcd358aac84431b13c3fa975f93c30ba51f7e5f99fdd30d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3aed0ec45c9379fcd358aac84431b13c3fa975f93c30ba51f7e5f99fdd30d3d->enter($__internal_d3aed0ec45c9379fcd358aac84431b13c3fa975f93c30ba51f7e5f99fdd30d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_418bc0171fa515c355d7b532157843b5be2562886160989df71ee968f4cccf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418bc0171fa515c355d7b532157843b5be2562886160989df71ee968f4cccf0b->enter($__internal_418bc0171fa515c355d7b532157843b5be2562886160989df71ee968f4cccf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_418bc0171fa515c355d7b532157843b5be2562886160989df71ee968f4cccf0b->leave($__internal_418bc0171fa515c355d7b532157843b5be2562886160989df71ee968f4cccf0b_prof);

        
        $__internal_d3aed0ec45c9379fcd358aac84431b13c3fa975f93c30ba51f7e5f99fdd30d3d->leave($__internal_d3aed0ec45c9379fcd358aac84431b13c3fa975f93c30ba51f7e5f99fdd30d3d_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1a005ec43ddb783f4945069cfb4c336feaddcc674ea121ce9bb6dad171ee6699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a005ec43ddb783f4945069cfb4c336feaddcc674ea121ce9bb6dad171ee6699->enter($__internal_1a005ec43ddb783f4945069cfb4c336feaddcc674ea121ce9bb6dad171ee6699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_56979625fd1b978265befe2cfc15dd700cf041a1fbbc18c749e7d2e17efcda53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56979625fd1b978265befe2cfc15dd700cf041a1fbbc18c749e7d2e17efcda53->enter($__internal_56979625fd1b978265befe2cfc15dd700cf041a1fbbc18c749e7d2e17efcda53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_56979625fd1b978265befe2cfc15dd700cf041a1fbbc18c749e7d2e17efcda53->leave($__internal_56979625fd1b978265befe2cfc15dd700cf041a1fbbc18c749e7d2e17efcda53_prof);

        
        $__internal_1a005ec43ddb783f4945069cfb4c336feaddcc674ea121ce9bb6dad171ee6699->leave($__internal_1a005ec43ddb783f4945069cfb4c336feaddcc674ea121ce9bb6dad171ee6699_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_793b5f1167b04d149ab5afcc810e5fc46aceec22abe219cb7ed45f7b30b4fa5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793b5f1167b04d149ab5afcc810e5fc46aceec22abe219cb7ed45f7b30b4fa5a->enter($__internal_793b5f1167b04d149ab5afcc810e5fc46aceec22abe219cb7ed45f7b30b4fa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b192f1107067fb5dcd40c0a37d05cc5459d48069451ceab68bd40d84dea37ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b192f1107067fb5dcd40c0a37d05cc5459d48069451ceab68bd40d84dea37ff4->enter($__internal_b192f1107067fb5dcd40c0a37d05cc5459d48069451ceab68bd40d84dea37ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_b192f1107067fb5dcd40c0a37d05cc5459d48069451ceab68bd40d84dea37ff4->leave($__internal_b192f1107067fb5dcd40c0a37d05cc5459d48069451ceab68bd40d84dea37ff4_prof);

        
        $__internal_793b5f1167b04d149ab5afcc810e5fc46aceec22abe219cb7ed45f7b30b4fa5a->leave($__internal_793b5f1167b04d149ab5afcc810e5fc46aceec22abe219cb7ed45f7b30b4fa5a_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d89794bc4759b9514bac8d57ca87ec3355e6f88bbba6cc202ff306fa470ef8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89794bc4759b9514bac8d57ca87ec3355e6f88bbba6cc202ff306fa470ef8d8->enter($__internal_d89794bc4759b9514bac8d57ca87ec3355e6f88bbba6cc202ff306fa470ef8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6240fd974fa35bf29239cdf07319fc4139c22a655db1173c3e0135d933555652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6240fd974fa35bf29239cdf07319fc4139c22a655db1173c3e0135d933555652->enter($__internal_6240fd974fa35bf29239cdf07319fc4139c22a655db1173c3e0135d933555652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_6240fd974fa35bf29239cdf07319fc4139c22a655db1173c3e0135d933555652->leave($__internal_6240fd974fa35bf29239cdf07319fc4139c22a655db1173c3e0135d933555652_prof);

        
        $__internal_d89794bc4759b9514bac8d57ca87ec3355e6f88bbba6cc202ff306fa470ef8d8->leave($__internal_d89794bc4759b9514bac8d57ca87ec3355e6f88bbba6cc202ff306fa470ef8d8_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5887881282aa9f766e00a657841102300c25186554466fe862e31d083e9b8f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5887881282aa9f766e00a657841102300c25186554466fe862e31d083e9b8f03->enter($__internal_5887881282aa9f766e00a657841102300c25186554466fe862e31d083e9b8f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6da8d1c4c1adc1a60fd80f6e87162c3334b26750e0b545463dec2ee7b0084618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da8d1c4c1adc1a60fd80f6e87162c3334b26750e0b545463dec2ee7b0084618->enter($__internal_6da8d1c4c1adc1a60fd80f6e87162c3334b26750e0b545463dec2ee7b0084618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_6da8d1c4c1adc1a60fd80f6e87162c3334b26750e0b545463dec2ee7b0084618->leave($__internal_6da8d1c4c1adc1a60fd80f6e87162c3334b26750e0b545463dec2ee7b0084618_prof);

        
        $__internal_5887881282aa9f766e00a657841102300c25186554466fe862e31d083e9b8f03->leave($__internal_5887881282aa9f766e00a657841102300c25186554466fe862e31d083e9b8f03_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d4b82e7c502430ad5ff3c6829fbb08192e9bc3b3d63f2cb2b2b34a47889bbe39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b82e7c502430ad5ff3c6829fbb08192e9bc3b3d63f2cb2b2b34a47889bbe39->enter($__internal_d4b82e7c502430ad5ff3c6829fbb08192e9bc3b3d63f2cb2b2b34a47889bbe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_57bb481daf07bde386b4dabc01704e52a68a2cc9159259b841b6cf2e515ef8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bb481daf07bde386b4dabc01704e52a68a2cc9159259b841b6cf2e515ef8b1->enter($__internal_57bb481daf07bde386b4dabc01704e52a68a2cc9159259b841b6cf2e515ef8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_57bb481daf07bde386b4dabc01704e52a68a2cc9159259b841b6cf2e515ef8b1->leave($__internal_57bb481daf07bde386b4dabc01704e52a68a2cc9159259b841b6cf2e515ef8b1_prof);

        
        $__internal_d4b82e7c502430ad5ff3c6829fbb08192e9bc3b3d63f2cb2b2b34a47889bbe39->leave($__internal_d4b82e7c502430ad5ff3c6829fbb08192e9bc3b3d63f2cb2b2b34a47889bbe39_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5a5fbc1852a4da5d933b654401daae6e76ea4c2f5f7e74aa937bb5bbcbe36ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5fbc1852a4da5d933b654401daae6e76ea4c2f5f7e74aa937bb5bbcbe36ce0->enter($__internal_5a5fbc1852a4da5d933b654401daae6e76ea4c2f5f7e74aa937bb5bbcbe36ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4a4b515c63f260f56c5657ba22891785c4e2534864032cf704ccd51780311f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4b515c63f260f56c5657ba22891785c4e2534864032cf704ccd51780311f17->enter($__internal_4a4b515c63f260f56c5657ba22891785c4e2534864032cf704ccd51780311f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4a4b515c63f260f56c5657ba22891785c4e2534864032cf704ccd51780311f17->leave($__internal_4a4b515c63f260f56c5657ba22891785c4e2534864032cf704ccd51780311f17_prof);

        
        $__internal_5a5fbc1852a4da5d933b654401daae6e76ea4c2f5f7e74aa937bb5bbcbe36ce0->leave($__internal_5a5fbc1852a4da5d933b654401daae6e76ea4c2f5f7e74aa937bb5bbcbe36ce0_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_01a159667d572490b80fe5cc8a042839530984fa84d1d5f8bda3ac8739bb1f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a159667d572490b80fe5cc8a042839530984fa84d1d5f8bda3ac8739bb1f59->enter($__internal_01a159667d572490b80fe5cc8a042839530984fa84d1d5f8bda3ac8739bb1f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_030ed15837a7ad537c34f05bacf31fff48def5b57867af7b3c83f82e6599d686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030ed15837a7ad537c34f05bacf31fff48def5b57867af7b3c83f82e6599d686->enter($__internal_030ed15837a7ad537c34f05bacf31fff48def5b57867af7b3c83f82e6599d686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_030ed15837a7ad537c34f05bacf31fff48def5b57867af7b3c83f82e6599d686->leave($__internal_030ed15837a7ad537c34f05bacf31fff48def5b57867af7b3c83f82e6599d686_prof);

        
        $__internal_01a159667d572490b80fe5cc8a042839530984fa84d1d5f8bda3ac8739bb1f59->leave($__internal_01a159667d572490b80fe5cc8a042839530984fa84d1d5f8bda3ac8739bb1f59_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b67da9de0a23a268a22fd5780c2f12209e7b1321d100a0d197a07f19f72d16f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67da9de0a23a268a22fd5780c2f12209e7b1321d100a0d197a07f19f72d16f8->enter($__internal_b67da9de0a23a268a22fd5780c2f12209e7b1321d100a0d197a07f19f72d16f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c5d3723722bd14a024b963e381cd08817533bbf82d630339ca8cc3268f002eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d3723722bd14a024b963e381cd08817533bbf82d630339ca8cc3268f002eec->enter($__internal_c5d3723722bd14a024b963e381cd08817533bbf82d630339ca8cc3268f002eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c5d3723722bd14a024b963e381cd08817533bbf82d630339ca8cc3268f002eec->leave($__internal_c5d3723722bd14a024b963e381cd08817533bbf82d630339ca8cc3268f002eec_prof);

        
        $__internal_b67da9de0a23a268a22fd5780c2f12209e7b1321d100a0d197a07f19f72d16f8->leave($__internal_b67da9de0a23a268a22fd5780c2f12209e7b1321d100a0d197a07f19f72d16f8_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_aca7b936380857ca843fae5626947a0db0ae52607aeac5092c456172adc25927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca7b936380857ca843fae5626947a0db0ae52607aeac5092c456172adc25927->enter($__internal_aca7b936380857ca843fae5626947a0db0ae52607aeac5092c456172adc25927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c9963f72eaaa70b692bb53c5f844e1aa5d0b2d042686054552bab9ea34ed1f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9963f72eaaa70b692bb53c5f844e1aa5d0b2d042686054552bab9ea34ed1f63->enter($__internal_c9963f72eaaa70b692bb53c5f844e1aa5d0b2d042686054552bab9ea34ed1f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_c9963f72eaaa70b692bb53c5f844e1aa5d0b2d042686054552bab9ea34ed1f63->leave($__internal_c9963f72eaaa70b692bb53c5f844e1aa5d0b2d042686054552bab9ea34ed1f63_prof);

        
        $__internal_aca7b936380857ca843fae5626947a0db0ae52607aeac5092c456172adc25927->leave($__internal_aca7b936380857ca843fae5626947a0db0ae52607aeac5092c456172adc25927_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_498a431435e25207ab9c933746c51094045c4a718c5390ad1528de5bc0faf42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498a431435e25207ab9c933746c51094045c4a718c5390ad1528de5bc0faf42b->enter($__internal_498a431435e25207ab9c933746c51094045c4a718c5390ad1528de5bc0faf42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bda473d9a0f0572a74184407851c7c5990d4cba327d3340011076501dba4ef59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda473d9a0f0572a74184407851c7c5990d4cba327d3340011076501dba4ef59->enter($__internal_bda473d9a0f0572a74184407851c7c5990d4cba327d3340011076501dba4ef59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_bda473d9a0f0572a74184407851c7c5990d4cba327d3340011076501dba4ef59->leave($__internal_bda473d9a0f0572a74184407851c7c5990d4cba327d3340011076501dba4ef59_prof);

        
        $__internal_498a431435e25207ab9c933746c51094045c4a718c5390ad1528de5bc0faf42b->leave($__internal_498a431435e25207ab9c933746c51094045c4a718c5390ad1528de5bc0faf42b_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a18adb037be9cd7ae9115cf4b514dc00708c3e9f068abb65af411bd6d2fa65dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18adb037be9cd7ae9115cf4b514dc00708c3e9f068abb65af411bd6d2fa65dc->enter($__internal_a18adb037be9cd7ae9115cf4b514dc00708c3e9f068abb65af411bd6d2fa65dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_585cafc43b7f7b21bf2dc312dd020f50b0c8dda2734f8de088eac81a16ccb1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585cafc43b7f7b21bf2dc312dd020f50b0c8dda2734f8de088eac81a16ccb1da->enter($__internal_585cafc43b7f7b21bf2dc312dd020f50b0c8dda2734f8de088eac81a16ccb1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_585cafc43b7f7b21bf2dc312dd020f50b0c8dda2734f8de088eac81a16ccb1da->leave($__internal_585cafc43b7f7b21bf2dc312dd020f50b0c8dda2734f8de088eac81a16ccb1da_prof);

        
        $__internal_a18adb037be9cd7ae9115cf4b514dc00708c3e9f068abb65af411bd6d2fa65dc->leave($__internal_a18adb037be9cd7ae9115cf4b514dc00708c3e9f068abb65af411bd6d2fa65dc_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4ae9771749af1e0477eef5001a8b337c9319342c5312a971003fd7a9dfccdf06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae9771749af1e0477eef5001a8b337c9319342c5312a971003fd7a9dfccdf06->enter($__internal_4ae9771749af1e0477eef5001a8b337c9319342c5312a971003fd7a9dfccdf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ff2cf550d219cdec86d71fb8ff45afb4ab07a6adcf9626c38cc17857d1c545e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2cf550d219cdec86d71fb8ff45afb4ab07a6adcf9626c38cc17857d1c545e3->enter($__internal_ff2cf550d219cdec86d71fb8ff45afb4ab07a6adcf9626c38cc17857d1c545e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ff2cf550d219cdec86d71fb8ff45afb4ab07a6adcf9626c38cc17857d1c545e3->leave($__internal_ff2cf550d219cdec86d71fb8ff45afb4ab07a6adcf9626c38cc17857d1c545e3_prof);

        
        $__internal_4ae9771749af1e0477eef5001a8b337c9319342c5312a971003fd7a9dfccdf06->leave($__internal_4ae9771749af1e0477eef5001a8b337c9319342c5312a971003fd7a9dfccdf06_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_64295ad4ae94224b69bc8b902d51fd324e98926626563438325a653886c5e875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64295ad4ae94224b69bc8b902d51fd324e98926626563438325a653886c5e875->enter($__internal_64295ad4ae94224b69bc8b902d51fd324e98926626563438325a653886c5e875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_3a8943d698ac5b361daaf1f7c2a6b083de7add79379b24d3d7de08e67c8b9bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8943d698ac5b361daaf1f7c2a6b083de7add79379b24d3d7de08e67c8b9bd7->enter($__internal_3a8943d698ac5b361daaf1f7c2a6b083de7add79379b24d3d7de08e67c8b9bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3a8943d698ac5b361daaf1f7c2a6b083de7add79379b24d3d7de08e67c8b9bd7->leave($__internal_3a8943d698ac5b361daaf1f7c2a6b083de7add79379b24d3d7de08e67c8b9bd7_prof);

        
        $__internal_64295ad4ae94224b69bc8b902d51fd324e98926626563438325a653886c5e875->leave($__internal_64295ad4ae94224b69bc8b902d51fd324e98926626563438325a653886c5e875_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cb033cd2efec42d8c51aadf5f72b1c466f1ba078b82e780de9726a0cc8ad4dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb033cd2efec42d8c51aadf5f72b1c466f1ba078b82e780de9726a0cc8ad4dc8->enter($__internal_cb033cd2efec42d8c51aadf5f72b1c466f1ba078b82e780de9726a0cc8ad4dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_99c3afe0cd3d2031a57f6d8b2b1b42a73d34c9504b36d7753c58b544b19741ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c3afe0cd3d2031a57f6d8b2b1b42a73d34c9504b36d7753c58b544b19741ef->enter($__internal_99c3afe0cd3d2031a57f6d8b2b1b42a73d34c9504b36d7753c58b544b19741ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_99c3afe0cd3d2031a57f6d8b2b1b42a73d34c9504b36d7753c58b544b19741ef->leave($__internal_99c3afe0cd3d2031a57f6d8b2b1b42a73d34c9504b36d7753c58b544b19741ef_prof);

        
        $__internal_cb033cd2efec42d8c51aadf5f72b1c466f1ba078b82e780de9726a0cc8ad4dc8->leave($__internal_cb033cd2efec42d8c51aadf5f72b1c466f1ba078b82e780de9726a0cc8ad4dc8_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_804d30a0be6e610156bf089ed6d9231e535735c864aa1160399eb7f6e8e5f099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804d30a0be6e610156bf089ed6d9231e535735c864aa1160399eb7f6e8e5f099->enter($__internal_804d30a0be6e610156bf089ed6d9231e535735c864aa1160399eb7f6e8e5f099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_968d28e4067a8496a83b36e4f99c24444208a057e8d7df1d39224e71d808c578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968d28e4067a8496a83b36e4f99c24444208a057e8d7df1d39224e71d808c578->enter($__internal_968d28e4067a8496a83b36e4f99c24444208a057e8d7df1d39224e71d808c578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_968d28e4067a8496a83b36e4f99c24444208a057e8d7df1d39224e71d808c578->leave($__internal_968d28e4067a8496a83b36e4f99c24444208a057e8d7df1d39224e71d808c578_prof);

        
        $__internal_804d30a0be6e610156bf089ed6d9231e535735c864aa1160399eb7f6e8e5f099->leave($__internal_804d30a0be6e610156bf089ed6d9231e535735c864aa1160399eb7f6e8e5f099_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_861d1ba97f07f221065bcc231b492c2c4acf1ec7db5f1778517a31562699bbad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861d1ba97f07f221065bcc231b492c2c4acf1ec7db5f1778517a31562699bbad->enter($__internal_861d1ba97f07f221065bcc231b492c2c4acf1ec7db5f1778517a31562699bbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a0b37063bc9a01dfef5bdad573404a79bab191f6c752c5251e753071a3e75f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b37063bc9a01dfef5bdad573404a79bab191f6c752c5251e753071a3e75f9b->enter($__internal_a0b37063bc9a01dfef5bdad573404a79bab191f6c752c5251e753071a3e75f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_a0b37063bc9a01dfef5bdad573404a79bab191f6c752c5251e753071a3e75f9b->leave($__internal_a0b37063bc9a01dfef5bdad573404a79bab191f6c752c5251e753071a3e75f9b_prof);

        
        $__internal_861d1ba97f07f221065bcc231b492c2c4acf1ec7db5f1778517a31562699bbad->leave($__internal_861d1ba97f07f221065bcc231b492c2c4acf1ec7db5f1778517a31562699bbad_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ac807ef16bc047f71d33768a1c48661a27663e4dcd546fe114fe0c02254efade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac807ef16bc047f71d33768a1c48661a27663e4dcd546fe114fe0c02254efade->enter($__internal_ac807ef16bc047f71d33768a1c48661a27663e4dcd546fe114fe0c02254efade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_53d5a95a5532da0d78c719bcdac2a5ffc57000b8c10b2b6aead29b7ae2b77cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d5a95a5532da0d78c719bcdac2a5ffc57000b8c10b2b6aead29b7ae2b77cc1->enter($__internal_53d5a95a5532da0d78c719bcdac2a5ffc57000b8c10b2b6aead29b7ae2b77cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_53d5a95a5532da0d78c719bcdac2a5ffc57000b8c10b2b6aead29b7ae2b77cc1->leave($__internal_53d5a95a5532da0d78c719bcdac2a5ffc57000b8c10b2b6aead29b7ae2b77cc1_prof);

        
        $__internal_ac807ef16bc047f71d33768a1c48661a27663e4dcd546fe114fe0c02254efade->leave($__internal_ac807ef16bc047f71d33768a1c48661a27663e4dcd546fe114fe0c02254efade_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8fdd69f734ad0cbc48c26b4a8781a1a6df5f179f6e738ae58f9428c3043306ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdd69f734ad0cbc48c26b4a8781a1a6df5f179f6e738ae58f9428c3043306ec->enter($__internal_8fdd69f734ad0cbc48c26b4a8781a1a6df5f179f6e738ae58f9428c3043306ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c69d525ecb5353a232b7f3ba14484732a7cfc51b1f361b44d7178b69ad96a7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69d525ecb5353a232b7f3ba14484732a7cfc51b1f361b44d7178b69ad96a7f5->enter($__internal_c69d525ecb5353a232b7f3ba14484732a7cfc51b1f361b44d7178b69ad96a7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c69d525ecb5353a232b7f3ba14484732a7cfc51b1f361b44d7178b69ad96a7f5->leave($__internal_c69d525ecb5353a232b7f3ba14484732a7cfc51b1f361b44d7178b69ad96a7f5_prof);

        
        $__internal_8fdd69f734ad0cbc48c26b4a8781a1a6df5f179f6e738ae58f9428c3043306ec->leave($__internal_8fdd69f734ad0cbc48c26b4a8781a1a6df5f179f6e738ae58f9428c3043306ec_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
