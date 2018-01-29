<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_3677234e27cbd28dd4575c43fcb2f4a1bce31ae2fd4774a233d6425eb2064943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
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
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94530b67dcc532e9dcb12199e59257817e1383b92393527f57659d3d9e7db8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94530b67dcc532e9dcb12199e59257817e1383b92393527f57659d3d9e7db8a5->enter($__internal_94530b67dcc532e9dcb12199e59257817e1383b92393527f57659d3d9e7db8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_8f7dba408011004e610ec68edd82e3a4fd0d234a7ad022e844b32dd3d4c2562c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7dba408011004e610ec68edd82e3a4fd0d234a7ad022e844b32dd3d4c2562c->enter($__internal_8f7dba408011004e610ec68edd82e3a4fd0d234a7ad022e844b32dd3d4c2562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 530
        echo "
";
        // line 532
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 542
        echo "
";
        // line 543
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 547
        echo "
";
        // line 549
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 554
        echo "
";
        // line 556
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_94530b67dcc532e9dcb12199e59257817e1383b92393527f57659d3d9e7db8a5->leave($__internal_94530b67dcc532e9dcb12199e59257817e1383b92393527f57659d3d9e7db8a5_prof);

        
        $__internal_8f7dba408011004e610ec68edd82e3a4fd0d234a7ad022e844b32dd3d4c2562c->leave($__internal_8f7dba408011004e610ec68edd82e3a4fd0d234a7ad022e844b32dd3d4c2562c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_98226b7a5e5d256e8f47d0685091987ab786fed34ec3d3b56ee07a622a557109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98226b7a5e5d256e8f47d0685091987ab786fed34ec3d3b56ee07a622a557109->enter($__internal_98226b7a5e5d256e8f47d0685091987ab786fed34ec3d3b56ee07a622a557109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ea38c9f98eb33095610339765c4ab98eb8674ae0140817540a79dff26cb3ea96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea38c9f98eb33095610339765c4ab98eb8674ae0140817540a79dff26cb3ea96->enter($__internal_ea38c9f98eb33095610339765c4ab98eb8674ae0140817540a79dff26cb3ea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_ea38c9f98eb33095610339765c4ab98eb8674ae0140817540a79dff26cb3ea96->leave($__internal_ea38c9f98eb33095610339765c4ab98eb8674ae0140817540a79dff26cb3ea96_prof);

        
        $__internal_98226b7a5e5d256e8f47d0685091987ab786fed34ec3d3b56ee07a622a557109->leave($__internal_98226b7a5e5d256e8f47d0685091987ab786fed34ec3d3b56ee07a622a557109_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_6b5edb3a518e778dd28ec3a5a108cfff994b04452dcd7c8c787d399db0864bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5edb3a518e778dd28ec3a5a108cfff994b04452dcd7c8c787d399db0864bbd->enter($__internal_6b5edb3a518e778dd28ec3a5a108cfff994b04452dcd7c8c787d399db0864bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_94ea9b26e9dc1a2631476f54d1d0e6835608ced33b8ed6a0815e56b814e6be60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ea9b26e9dc1a2631476f54d1d0e6835608ced33b8ed6a0815e56b814e6be60->enter($__internal_94ea9b26e9dc1a2631476f54d1d0e6835608ced33b8ed6a0815e56b814e6be60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_94ea9b26e9dc1a2631476f54d1d0e6835608ced33b8ed6a0815e56b814e6be60->leave($__internal_94ea9b26e9dc1a2631476f54d1d0e6835608ced33b8ed6a0815e56b814e6be60_prof);

        
        $__internal_6b5edb3a518e778dd28ec3a5a108cfff994b04452dcd7c8c787d399db0864bbd->leave($__internal_6b5edb3a518e778dd28ec3a5a108cfff994b04452dcd7c8c787d399db0864bbd_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c34975ba83a69d4948c3b6f4c5c1faaa2d475a94f9331a54d2be818f826ed1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34975ba83a69d4948c3b6f4c5c1faaa2d475a94f9331a54d2be818f826ed1c8->enter($__internal_c34975ba83a69d4948c3b6f4c5c1faaa2d475a94f9331a54d2be818f826ed1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d38c59054d94abf7201fbe7c34c87a73fcb90063182b5cdbf0f1e137bbfe929a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38c59054d94abf7201fbe7c34c87a73fcb90063182b5cdbf0f1e137bbfe929a->enter($__internal_d38c59054d94abf7201fbe7c34c87a73fcb90063182b5cdbf0f1e137bbfe929a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d38c59054d94abf7201fbe7c34c87a73fcb90063182b5cdbf0f1e137bbfe929a->leave($__internal_d38c59054d94abf7201fbe7c34c87a73fcb90063182b5cdbf0f1e137bbfe929a_prof);

        
        $__internal_c34975ba83a69d4948c3b6f4c5c1faaa2d475a94f9331a54d2be818f826ed1c8->leave($__internal_c34975ba83a69d4948c3b6f4c5c1faaa2d475a94f9331a54d2be818f826ed1c8_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2d771848dcadbe99edb7f730a4b8ba0660154ba9b01a03b2a766c3381391ffa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d771848dcadbe99edb7f730a4b8ba0660154ba9b01a03b2a766c3381391ffa2->enter($__internal_2d771848dcadbe99edb7f730a4b8ba0660154ba9b01a03b2a766c3381391ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_43a12c5e5c11395dbbae79da024d21a73c10e879c8852fb2deca788a0aae5792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a12c5e5c11395dbbae79da024d21a73c10e879c8852fb2deca788a0aae5792->enter($__internal_43a12c5e5c11395dbbae79da024d21a73c10e879c8852fb2deca788a0aae5792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_43a12c5e5c11395dbbae79da024d21a73c10e879c8852fb2deca788a0aae5792->leave($__internal_43a12c5e5c11395dbbae79da024d21a73c10e879c8852fb2deca788a0aae5792_prof);

        
        $__internal_2d771848dcadbe99edb7f730a4b8ba0660154ba9b01a03b2a766c3381391ffa2->leave($__internal_2d771848dcadbe99edb7f730a4b8ba0660154ba9b01a03b2a766c3381391ffa2_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7c376bd59aa32c85532d6416aa4e2498eb574aec859a2080af45505a244f33a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c376bd59aa32c85532d6416aa4e2498eb574aec859a2080af45505a244f33a2->enter($__internal_7c376bd59aa32c85532d6416aa4e2498eb574aec859a2080af45505a244f33a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a5bff8ff54a494d04476d3120c2378d9131f562de6b36a5ef0344cd15c3f3b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bff8ff54a494d04476d3120c2378d9131f562de6b36a5ef0344cd15c3f3b71->enter($__internal_a5bff8ff54a494d04476d3120c2378d9131f562de6b36a5ef0344cd15c3f3b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a5bff8ff54a494d04476d3120c2378d9131f562de6b36a5ef0344cd15c3f3b71->leave($__internal_a5bff8ff54a494d04476d3120c2378d9131f562de6b36a5ef0344cd15c3f3b71_prof);

        
        $__internal_7c376bd59aa32c85532d6416aa4e2498eb574aec859a2080af45505a244f33a2->leave($__internal_7c376bd59aa32c85532d6416aa4e2498eb574aec859a2080af45505a244f33a2_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e5d3707686e5c22c0ba9896adfa421ea05fa8e769a075dbc8c015fe9c8bfa107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d3707686e5c22c0ba9896adfa421ea05fa8e769a075dbc8c015fe9c8bfa107->enter($__internal_e5d3707686e5c22c0ba9896adfa421ea05fa8e769a075dbc8c015fe9c8bfa107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_548239a8634158d18b25944de022eddb1169544f31c94eb947053dc54f56b74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548239a8634158d18b25944de022eddb1169544f31c94eb947053dc54f56b74b->enter($__internal_548239a8634158d18b25944de022eddb1169544f31c94eb947053dc54f56b74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 76
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
        
        $__internal_548239a8634158d18b25944de022eddb1169544f31c94eb947053dc54f56b74b->leave($__internal_548239a8634158d18b25944de022eddb1169544f31c94eb947053dc54f56b74b_prof);

        
        $__internal_e5d3707686e5c22c0ba9896adfa421ea05fa8e769a075dbc8c015fe9c8bfa107->leave($__internal_e5d3707686e5c22c0ba9896adfa421ea05fa8e769a075dbc8c015fe9c8bfa107_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_aa579cd0e6e8d38a587e98ae46780b61fa88506cb95f6bedb276401d1684822f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa579cd0e6e8d38a587e98ae46780b61fa88506cb95f6bedb276401d1684822f->enter($__internal_aa579cd0e6e8d38a587e98ae46780b61fa88506cb95f6bedb276401d1684822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a1f5b1424522251a129fa6a2a31d42e4035209543822c09df0965cee133d9922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f5b1424522251a129fa6a2a31d42e4035209543822c09df0965cee133d9922->enter($__internal_a1f5b1424522251a129fa6a2a31d42e4035209543822c09df0965cee133d9922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a1f5b1424522251a129fa6a2a31d42e4035209543822c09df0965cee133d9922->leave($__internal_a1f5b1424522251a129fa6a2a31d42e4035209543822c09df0965cee133d9922_prof);

        
        $__internal_aa579cd0e6e8d38a587e98ae46780b61fa88506cb95f6bedb276401d1684822f->leave($__internal_aa579cd0e6e8d38a587e98ae46780b61fa88506cb95f6bedb276401d1684822f_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_90296e978a00d4015191877f0472adc4d8cddd1fa9fd797001080f44c428e45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90296e978a00d4015191877f0472adc4d8cddd1fa9fd797001080f44c428e45b->enter($__internal_90296e978a00d4015191877f0472adc4d8cddd1fa9fd797001080f44c428e45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1d4bc5705d0f4bb49d6cc648f931e1bfa1f44db55abae84aa154756052b0bd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4bc5705d0f4bb49d6cc648f931e1bfa1f44db55abae84aa154756052b0bd6c->enter($__internal_1d4bc5705d0f4bb49d6cc648f931e1bfa1f44db55abae84aa154756052b0bd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
        
        $__internal_1d4bc5705d0f4bb49d6cc648f931e1bfa1f44db55abae84aa154756052b0bd6c->leave($__internal_1d4bc5705d0f4bb49d6cc648f931e1bfa1f44db55abae84aa154756052b0bd6c_prof);

        
        $__internal_90296e978a00d4015191877f0472adc4d8cddd1fa9fd797001080f44c428e45b->leave($__internal_90296e978a00d4015191877f0472adc4d8cddd1fa9fd797001080f44c428e45b_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fb6d778358482d33d8006f466aa836483d0c8f53eec08fdef9e7aa10d0926ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6d778358482d33d8006f466aa836483d0c8f53eec08fdef9e7aa10d0926ec7->enter($__internal_fb6d778358482d33d8006f466aa836483d0c8f53eec08fdef9e7aa10d0926ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_13a5c3383a29d4ca99a701ca8deb7ee12d6baf0a355d3fb337ff732d2353f80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a5c3383a29d4ca99a701ca8deb7ee12d6baf0a355d3fb337ff732d2353f80b->enter($__internal_13a5c3383a29d4ca99a701ca8deb7ee12d6baf0a355d3fb337ff732d2353f80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 108
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 120
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_13a5c3383a29d4ca99a701ca8deb7ee12d6baf0a355d3fb337ff732d2353f80b->leave($__internal_13a5c3383a29d4ca99a701ca8deb7ee12d6baf0a355d3fb337ff732d2353f80b_prof);

        
        $__internal_fb6d778358482d33d8006f466aa836483d0c8f53eec08fdef9e7aa10d0926ec7->leave($__internal_fb6d778358482d33d8006f466aa836483d0c8f53eec08fdef9e7aa10d0926ec7_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_746c6e666e62c71e1debd9d4b0a1c3dfc831227e7cbd13ca184c31ab92537e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746c6e666e62c71e1debd9d4b0a1c3dfc831227e7cbd13ca184c31ab92537e41->enter($__internal_746c6e666e62c71e1debd9d4b0a1c3dfc831227e7cbd13ca184c31ab92537e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_97c9ff076483e93b64a5d411bd59381665941af8ec3e6974eda31b95b7312ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c9ff076483e93b64a5d411bd59381665941af8ec3e6974eda31b95b7312ef3->enter($__internal_97c9ff076483e93b64a5d411bd59381665941af8ec3e6974eda31b95b7312ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 127
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 136
                echo "</div>";
            }
        }
        
        $__internal_97c9ff076483e93b64a5d411bd59381665941af8ec3e6974eda31b95b7312ef3->leave($__internal_97c9ff076483e93b64a5d411bd59381665941af8ec3e6974eda31b95b7312ef3_prof);

        
        $__internal_746c6e666e62c71e1debd9d4b0a1c3dfc831227e7cbd13ca184c31ab92537e41->leave($__internal_746c6e666e62c71e1debd9d4b0a1c3dfc831227e7cbd13ca184c31ab92537e41_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1ac279999e2b2fb099ac8394dce1e0479636230e153d095aa4572f8d502ffccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac279999e2b2fb099ac8394dce1e0479636230e153d095aa4572f8d502ffccb->enter($__internal_1ac279999e2b2fb099ac8394dce1e0479636230e153d095aa4572f8d502ffccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6d38a99d83538adf09c826ee488e9ac13e901e639c5fbde18e5c691c719451a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d38a99d83538adf09c826ee488e9ac13e901e639c5fbde18e5c691c719451a2->enter($__internal_6d38a99d83538adf09c826ee488e9ac13e901e639c5fbde18e5c691c719451a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 142
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_6d38a99d83538adf09c826ee488e9ac13e901e639c5fbde18e5c691c719451a2->leave($__internal_6d38a99d83538adf09c826ee488e9ac13e901e639c5fbde18e5c691c719451a2_prof);

        
        $__internal_1ac279999e2b2fb099ac8394dce1e0479636230e153d095aa4572f8d502ffccb->leave($__internal_1ac279999e2b2fb099ac8394dce1e0479636230e153d095aa4572f8d502ffccb_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_93633a05bf21750a974d902e249752517f331d5691f7d83a6a289481218d5074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93633a05bf21750a974d902e249752517f331d5691f7d83a6a289481218d5074->enter($__internal_93633a05bf21750a974d902e249752517f331d5691f7d83a6a289481218d5074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bf6a72ef1d1325169de5a55365c488b06eb1b9904fae48a55ae5dfb4cf77552f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6a72ef1d1325169de5a55365c488b06eb1b9904fae48a55ae5dfb4cf77552f->enter($__internal_bf6a72ef1d1325169de5a55365c488b06eb1b9904fae48a55ae5dfb4cf77552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 170
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 174
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 183
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
        
        $__internal_bf6a72ef1d1325169de5a55365c488b06eb1b9904fae48a55ae5dfb4cf77552f->leave($__internal_bf6a72ef1d1325169de5a55365c488b06eb1b9904fae48a55ae5dfb4cf77552f_prof);

        
        $__internal_93633a05bf21750a974d902e249752517f331d5691f7d83a6a289481218d5074->leave($__internal_93633a05bf21750a974d902e249752517f331d5691f7d83a6a289481218d5074_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_22042b7191d34f2cb90d65270e20685b7f98d1bd0f5a45b7ba727b882ac3c7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22042b7191d34f2cb90d65270e20685b7f98d1bd0f5a45b7ba727b882ac3c7ac->enter($__internal_22042b7191d34f2cb90d65270e20685b7f98d1bd0f5a45b7ba727b882ac3c7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d528a39bb0bbbeaadf96906da10aed5b809e0eff81621173d6b737aa98b3e2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d528a39bb0bbbeaadf96906da10aed5b809e0eff81621173d6b737aa98b3e2db->enter($__internal_d528a39bb0bbbeaadf96906da10aed5b809e0eff81621173d6b737aa98b3e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 194
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
        
        $__internal_d528a39bb0bbbeaadf96906da10aed5b809e0eff81621173d6b737aa98b3e2db->leave($__internal_d528a39bb0bbbeaadf96906da10aed5b809e0eff81621173d6b737aa98b3e2db_prof);

        
        $__internal_22042b7191d34f2cb90d65270e20685b7f98d1bd0f5a45b7ba727b882ac3c7ac->leave($__internal_22042b7191d34f2cb90d65270e20685b7f98d1bd0f5a45b7ba727b882ac3c7ac_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_44559e9fb575da3d67344a69548d787bfad404ac72efccee76c2ccf5aa403729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44559e9fb575da3d67344a69548d787bfad404ac72efccee76c2ccf5aa403729->enter($__internal_44559e9fb575da3d67344a69548d787bfad404ac72efccee76c2ccf5aa403729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d00c220792a666cf40ba9ad4f5a00c695cea991df0d3d4507b2487ebb3def25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00c220792a666cf40ba9ad4f5a00c695cea991df0d3d4507b2487ebb3def25c->enter($__internal_d00c220792a666cf40ba9ad4f5a00c695cea991df0d3d4507b2487ebb3def25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 203
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 205
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
        
        $__internal_d00c220792a666cf40ba9ad4f5a00c695cea991df0d3d4507b2487ebb3def25c->leave($__internal_d00c220792a666cf40ba9ad4f5a00c695cea991df0d3d4507b2487ebb3def25c_prof);

        
        $__internal_44559e9fb575da3d67344a69548d787bfad404ac72efccee76c2ccf5aa403729->leave($__internal_44559e9fb575da3d67344a69548d787bfad404ac72efccee76c2ccf5aa403729_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7a8f842642e84f2895baec89ec48e068fbb092f3c166fc50f3c34651650ff04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8f842642e84f2895baec89ec48e068fbb092f3c166fc50f3c34651650ff04a->enter($__internal_7a8f842642e84f2895baec89ec48e068fbb092f3c166fc50f3c34651650ff04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e22299111b80f97c21dc8b893b6955b59e16755ad3e12672e17a1c803778daad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22299111b80f97c21dc8b893b6955b59e16755ad3e12672e17a1c803778daad->enter($__internal_e22299111b80f97c21dc8b893b6955b59e16755ad3e12672e17a1c803778daad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e22299111b80f97c21dc8b893b6955b59e16755ad3e12672e17a1c803778daad->leave($__internal_e22299111b80f97c21dc8b893b6955b59e16755ad3e12672e17a1c803778daad_prof);

        
        $__internal_7a8f842642e84f2895baec89ec48e068fbb092f3c166fc50f3c34651650ff04a->leave($__internal_7a8f842642e84f2895baec89ec48e068fbb092f3c166fc50f3c34651650ff04a_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2ae80d9c1285551c7876f804ed641c65a75eda052aef5aede8cef561fc5642a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae80d9c1285551c7876f804ed641c65a75eda052aef5aede8cef561fc5642a3->enter($__internal_2ae80d9c1285551c7876f804ed641c65a75eda052aef5aede8cef561fc5642a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_beeee38430191141c81fdbfe21db762eca4a5280ee9eac4e61269c67ff1736e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beeee38430191141c81fdbfe21db762eca4a5280ee9eac4e61269c67ff1736e8->enter($__internal_beeee38430191141c81fdbfe21db762eca4a5280ee9eac4e61269c67ff1736e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_beeee38430191141c81fdbfe21db762eca4a5280ee9eac4e61269c67ff1736e8->leave($__internal_beeee38430191141c81fdbfe21db762eca4a5280ee9eac4e61269c67ff1736e8_prof);

        
        $__internal_2ae80d9c1285551c7876f804ed641c65a75eda052aef5aede8cef561fc5642a3->leave($__internal_2ae80d9c1285551c7876f804ed641c65a75eda052aef5aede8cef561fc5642a3_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_404a1a218fac2dc264f22da9c939698b3812b9d6c80efaa48d0bec4285e6143a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404a1a218fac2dc264f22da9c939698b3812b9d6c80efaa48d0bec4285e6143a->enter($__internal_404a1a218fac2dc264f22da9c939698b3812b9d6c80efaa48d0bec4285e6143a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5cac935e2bc8a1be692987bc8cc613c8adf918f5720868a5cbf28f1182c1ebeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cac935e2bc8a1be692987bc8cc613c8adf918f5720868a5cbf28f1182c1ebeb->enter($__internal_5cac935e2bc8a1be692987bc8cc613c8adf918f5720868a5cbf28f1182c1ebeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5cac935e2bc8a1be692987bc8cc613c8adf918f5720868a5cbf28f1182c1ebeb->leave($__internal_5cac935e2bc8a1be692987bc8cc613c8adf918f5720868a5cbf28f1182c1ebeb_prof);

        
        $__internal_404a1a218fac2dc264f22da9c939698b3812b9d6c80efaa48d0bec4285e6143a->leave($__internal_404a1a218fac2dc264f22da9c939698b3812b9d6c80efaa48d0bec4285e6143a_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c21d8e5cc66a1eeb4410729d9c74a59eed0df11a72a1f8055f3245a6cf700a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21d8e5cc66a1eeb4410729d9c74a59eed0df11a72a1f8055f3245a6cf700a02->enter($__internal_c21d8e5cc66a1eeb4410729d9c74a59eed0df11a72a1f8055f3245a6cf700a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ffe8dc6109e6286dac020d29851c231413b1ca8d28bd229385f603394de5c46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe8dc6109e6286dac020d29851c231413b1ca8d28bd229385f603394de5c46c->enter($__internal_ffe8dc6109e6286dac020d29851c231413b1ca8d28bd229385f603394de5c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ffe8dc6109e6286dac020d29851c231413b1ca8d28bd229385f603394de5c46c->leave($__internal_ffe8dc6109e6286dac020d29851c231413b1ca8d28bd229385f603394de5c46c_prof);

        
        $__internal_c21d8e5cc66a1eeb4410729d9c74a59eed0df11a72a1f8055f3245a6cf700a02->leave($__internal_c21d8e5cc66a1eeb4410729d9c74a59eed0df11a72a1f8055f3245a6cf700a02_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e935b230b5e1aacba94b49bf39eda06c7bd86103309317b07841e056740ab3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e935b230b5e1aacba94b49bf39eda06c7bd86103309317b07841e056740ab3c1->enter($__internal_e935b230b5e1aacba94b49bf39eda06c7bd86103309317b07841e056740ab3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_49f7598e4badbadc04ffb421998373e6f1e4b3c011186a717f531f74b8ba8dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f7598e4badbadc04ffb421998373e6f1e4b3c011186a717f531f74b8ba8dfc->enter($__internal_49f7598e4badbadc04ffb421998373e6f1e4b3c011186a717f531f74b8ba8dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 237
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 245
                echo "        ";
            }
            // line 246
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
            // line 247
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 248
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ((($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))) ? (($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))) : ($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
        
        $__internal_49f7598e4badbadc04ffb421998373e6f1e4b3c011186a717f531f74b8ba8dfc->leave($__internal_49f7598e4badbadc04ffb421998373e6f1e4b3c011186a717f531f74b8ba8dfc_prof);

        
        $__internal_e935b230b5e1aacba94b49bf39eda06c7bd86103309317b07841e056740ab3c1->leave($__internal_e935b230b5e1aacba94b49bf39eda06c7bd86103309317b07841e056740ab3c1_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_13323cffbd0da71422daf361e7a5744f5b260a83fd684c281943d38fd948861b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13323cffbd0da71422daf361e7a5744f5b260a83fd684c281943d38fd948861b->enter($__internal_13323cffbd0da71422daf361e7a5744f5b260a83fd684c281943d38fd948861b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bbe92732b13c960d5b1dfaaa82fed4ef5fbe958a74b942a202d64f94c5df4061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe92732b13c960d5b1dfaaa82fed4ef5fbe958a74b942a202d64f94c5df4061->enter($__internal_bbe92732b13c960d5b1dfaaa82fed4ef5fbe958a74b942a202d64f94c5df4061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 256
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 261
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
        
        $__internal_bbe92732b13c960d5b1dfaaa82fed4ef5fbe958a74b942a202d64f94c5df4061->leave($__internal_bbe92732b13c960d5b1dfaaa82fed4ef5fbe958a74b942a202d64f94c5df4061_prof);

        
        $__internal_13323cffbd0da71422daf361e7a5744f5b260a83fd684c281943d38fd948861b->leave($__internal_13323cffbd0da71422daf361e7a5744f5b260a83fd684c281943d38fd948861b_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_10b340495563314989c0c7f84106000bebf6fd42124d2fa6fa1be483d5ed52c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b340495563314989c0c7f84106000bebf6fd42124d2fa6fa1be483d5ed52c0->enter($__internal_10b340495563314989c0c7f84106000bebf6fd42124d2fa6fa1be483d5ed52c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_12d464e0933b5fc5eec700acb8c2ca177d1c2f575708db8d4efbe5f0ce1afacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d464e0933b5fc5eec700acb8c2ca177d1c2f575708db8d4efbe5f0ce1afacc->enter($__internal_12d464e0933b5fc5eec700acb8c2ca177d1c2f575708db8d4efbe5f0ce1afacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo ($context["js_add_item"] ?? $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_12d464e0933b5fc5eec700acb8c2ca177d1c2f575708db8d4efbe5f0ce1afacc->leave($__internal_12d464e0933b5fc5eec700acb8c2ca177d1c2f575708db8d4efbe5f0ce1afacc_prof);

        
        $__internal_10b340495563314989c0c7f84106000bebf6fd42124d2fa6fa1be483d5ed52c0->leave($__internal_10b340495563314989c0c7f84106000bebf6fd42124d2fa6fa1be483d5ed52c0_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_87d0dd40dc136a56f71aaf557e37327affaea6ba77d120c3e70b59d9a2202aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d0dd40dc136a56f71aaf557e37327affaea6ba77d120c3e70b59d9a2202aa5->enter($__internal_87d0dd40dc136a56f71aaf557e37327affaea6ba77d120c3e70b59d9a2202aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e9a1180a7833d1ffbad86a7a14afd61758f9b0fb2faaecab64ff9470492e8af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a1180a7833d1ffbad86a7a14afd61758f9b0fb2faaecab64ff9470492e8af1->enter($__internal_e9a1180a7833d1ffbad86a7a14afd61758f9b0fb2faaecab64ff9470492e8af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 317
        echo "</div>";
        
        $__internal_e9a1180a7833d1ffbad86a7a14afd61758f9b0fb2faaecab64ff9470492e8af1->leave($__internal_e9a1180a7833d1ffbad86a7a14afd61758f9b0fb2faaecab64ff9470492e8af1_prof);

        
        $__internal_87d0dd40dc136a56f71aaf557e37327affaea6ba77d120c3e70b59d9a2202aa5->leave($__internal_87d0dd40dc136a56f71aaf557e37327affaea6ba77d120c3e70b59d9a2202aa5_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f8f117a2216b9da0d94b9b1f9dd44add7d6b1db61e73ed2c3faec817efd5d7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f117a2216b9da0d94b9b1f9dd44add7d6b1db61e73ed2c3faec817efd5d7c8->enter($__internal_f8f117a2216b9da0d94b9b1f9dd44add7d6b1db61e73ed2c3faec817efd5d7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ab77462fd4d3c53abd1bba30bdd52be5bb03d9400d007f44305798cb6fce45ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab77462fd4d3c53abd1bba30bdd52be5bb03d9400d007f44305798cb6fce45ca->enter($__internal_ab77462fd4d3c53abd1bba30bdd52be5bb03d9400d007f44305798cb6fce45ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ab77462fd4d3c53abd1bba30bdd52be5bb03d9400d007f44305798cb6fce45ca->leave($__internal_ab77462fd4d3c53abd1bba30bdd52be5bb03d9400d007f44305798cb6fce45ca_prof);

        
        $__internal_f8f117a2216b9da0d94b9b1f9dd44add7d6b1db61e73ed2c3faec817efd5d7c8->leave($__internal_f8f117a2216b9da0d94b9b1f9dd44add7d6b1db61e73ed2c3faec817efd5d7c8_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e2b6d50416718408a4612c5e674e47ef4ebc68bbf317f6e01486cca6d491e796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b6d50416718408a4612c5e674e47ef4ebc68bbf317f6e01486cca6d491e796->enter($__internal_e2b6d50416718408a4612c5e674e47ef4ebc68bbf317f6e01486cca6d491e796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_333302591c7faffae34f0258be49e565949418bd215245e7ce6013d4f90ae009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333302591c7faffae34f0258be49e565949418bd215245e7ce6013d4f90ae009->enter($__internal_333302591c7faffae34f0258be49e565949418bd215245e7ce6013d4f90ae009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_333302591c7faffae34f0258be49e565949418bd215245e7ce6013d4f90ae009->leave($__internal_333302591c7faffae34f0258be49e565949418bd215245e7ce6013d4f90ae009_prof);

        
        $__internal_e2b6d50416718408a4612c5e674e47ef4ebc68bbf317f6e01486cca6d491e796->leave($__internal_e2b6d50416718408a4612c5e674e47ef4ebc68bbf317f6e01486cca6d491e796_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_17b67e9fed2dbf9655094474e4030ee8303ffbaaa9a7639e6d24213797826f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b67e9fed2dbf9655094474e4030ee8303ffbaaa9a7639e6d24213797826f86->enter($__internal_17b67e9fed2dbf9655094474e4030ee8303ffbaaa9a7639e6d24213797826f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2dae00ca2d8405509c56d8756d92ff0ac8b56255201316b114d818a5df7063ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dae00ca2d8405509c56d8756d92ff0ac8b56255201316b114d818a5df7063ed->enter($__internal_2dae00ca2d8405509c56d8756d92ff0ac8b56255201316b114d818a5df7063ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2dae00ca2d8405509c56d8756d92ff0ac8b56255201316b114d818a5df7063ed->leave($__internal_2dae00ca2d8405509c56d8756d92ff0ac8b56255201316b114d818a5df7063ed_prof);

        
        $__internal_17b67e9fed2dbf9655094474e4030ee8303ffbaaa9a7639e6d24213797826f86->leave($__internal_17b67e9fed2dbf9655094474e4030ee8303ffbaaa9a7639e6d24213797826f86_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_fd3b49f8212886febd699d3ba49e64d018e5d138714cd6ddf5626a964f8d22ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3b49f8212886febd699d3ba49e64d018e5d138714cd6ddf5626a964f8d22ba->enter($__internal_fd3b49f8212886febd699d3ba49e64d018e5d138714cd6ddf5626a964f8d22ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b22414a8a4e04811f5614e7f04a57059ba2ffb3876e52d21a7a3a6582771991a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22414a8a4e04811f5614e7f04a57059ba2ffb3876e52d21a7a3a6582771991a->enter($__internal_b22414a8a4e04811f5614e7f04a57059ba2ffb3876e52d21a7a3a6582771991a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b22414a8a4e04811f5614e7f04a57059ba2ffb3876e52d21a7a3a6582771991a->leave($__internal_b22414a8a4e04811f5614e7f04a57059ba2ffb3876e52d21a7a3a6582771991a_prof);

        
        $__internal_fd3b49f8212886febd699d3ba49e64d018e5d138714cd6ddf5626a964f8d22ba->leave($__internal_fd3b49f8212886febd699d3ba49e64d018e5d138714cd6ddf5626a964f8d22ba_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f1fa7c828861c2a077ed9bebac3a9658e6d042392c7187d19c5dcb9783a80ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fa7c828861c2a077ed9bebac3a9658e6d042392c7187d19c5dcb9783a80ede->enter($__internal_f1fa7c828861c2a077ed9bebac3a9658e6d042392c7187d19c5dcb9783a80ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ed0d497b9addad87efe62b20c026a65722299a13884eed853e23589682cbc228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0d497b9addad87efe62b20c026a65722299a13884eed853e23589682cbc228->enter($__internal_ed0d497b9addad87efe62b20c026a65722299a13884eed853e23589682cbc228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_ed0d497b9addad87efe62b20c026a65722299a13884eed853e23589682cbc228->leave($__internal_ed0d497b9addad87efe62b20c026a65722299a13884eed853e23589682cbc228_prof);

        
        $__internal_f1fa7c828861c2a077ed9bebac3a9658e6d042392c7187d19c5dcb9783a80ede->leave($__internal_f1fa7c828861c2a077ed9bebac3a9658e6d042392c7187d19c5dcb9783a80ede_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_55d70aa46006d9652bbdd686aeafcfad936a258058e911b304b9ca8456bdc644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d70aa46006d9652bbdd686aeafcfad936a258058e911b304b9ca8456bdc644->enter($__internal_55d70aa46006d9652bbdd686aeafcfad936a258058e911b304b9ca8456bdc644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d3fa70adaad57475a2d71525d216c9728f79c82dc438040e240cb432c2fb2901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fa70adaad57475a2d71525d216c9728f79c82dc438040e240cb432c2fb2901->enter($__internal_d3fa70adaad57475a2d71525d216c9728f79c82dc438040e240cb432c2fb2901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 348
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 351
        echo "</div>";
        
        $__internal_d3fa70adaad57475a2d71525d216c9728f79c82dc438040e240cb432c2fb2901->leave($__internal_d3fa70adaad57475a2d71525d216c9728f79c82dc438040e240cb432c2fb2901_prof);

        
        $__internal_55d70aa46006d9652bbdd686aeafcfad936a258058e911b304b9ca8456bdc644->leave($__internal_55d70aa46006d9652bbdd686aeafcfad936a258058e911b304b9ca8456bdc644_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fc7292fc2e466dc0ff7b3c7ad0afaeaa2c113260b5aa09a9484ba49dddd5cda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7292fc2e466dc0ff7b3c7ad0afaeaa2c113260b5aa09a9484ba49dddd5cda0->enter($__internal_fc7292fc2e466dc0ff7b3c7ad0afaeaa2c113260b5aa09a9484ba49dddd5cda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_11ea0501e9f63d2eb1f33a71a186750a37a36ea1020e56fe39f4a9d8b7df2187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ea0501e9f63d2eb1f33a71a186750a37a36ea1020e56fe39f4a9d8b7df2187->enter($__internal_11ea0501e9f63d2eb1f33a71a186750a37a36ea1020e56fe39f4a9d8b7df2187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors")));
        // line 357
        echo "    ";
        if ((($context["error_count"] ?? $this->getContext($context, "error_count")) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", ($context["error_count"] ?? $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if ((($context["error_count"] ?? $this->getContext($context, "error_count")) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
        
        $__internal_11ea0501e9f63d2eb1f33a71a186750a37a36ea1020e56fe39f4a9d8b7df2187->leave($__internal_11ea0501e9f63d2eb1f33a71a186750a37a36ea1020e56fe39f4a9d8b7df2187_prof);

        
        $__internal_fc7292fc2e466dc0ff7b3c7ad0afaeaa2c113260b5aa09a9484ba49dddd5cda0->leave($__internal_fc7292fc2e466dc0ff7b3c7ad0afaeaa2c113260b5aa09a9484ba49dddd5cda0_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_787b60749ec0c6649b3938f492da6be375789f6c7601d0a5d5880838c8b3c38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787b60749ec0c6649b3938f492da6be375789f6c7601d0a5d5880838c8b3c38d->enter($__internal_787b60749ec0c6649b3938f492da6be375789f6c7601d0a5d5880838c8b3c38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_19a2a311aace8e03d59b1af441ccaec4259f1d82f90f0a372ad6f3c35e6abac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a2a311aace8e03d59b1af441ccaec4259f1d82f90f0a372ad6f3c35e6abac7->enter($__internal_19a2a311aace8e03d59b1af441ccaec4259f1d82f90f0a372ad6f3c35e6abac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 376
        echo "    ";
        if ((twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_19a2a311aace8e03d59b1af441ccaec4259f1d82f90f0a372ad6f3c35e6abac7->leave($__internal_19a2a311aace8e03d59b1af441ccaec4259f1d82f90f0a372ad6f3c35e6abac7_prof);

        
        $__internal_787b60749ec0c6649b3938f492da6be375789f6c7601d0a5d5880838c8b3c38d->leave($__internal_787b60749ec0c6649b3938f492da6be375789f6c7601d0a5d5880838c8b3c38d_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_372b60fdc49d0d47f4ff06eb9658db554b30aad9ec6ed961dc9b0b37d5bdd321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372b60fdc49d0d47f4ff06eb9658db554b30aad9ec6ed961dc9b0b37d5bdd321->enter($__internal_372b60fdc49d0d47f4ff06eb9658db554b30aad9ec6ed961dc9b0b37d5bdd321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_4fc982fb9b3580dbad53adc7570c1a149949775e5de61f46a8b534b79c0430b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc982fb9b3580dbad53adc7570c1a149949775e5de61f46a8b534b79c0430b6->enter($__internal_4fc982fb9b3580dbad53adc7570c1a149949775e5de61f46a8b534b79c0430b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_4fc982fb9b3580dbad53adc7570c1a149949775e5de61f46a8b534b79c0430b6->leave($__internal_4fc982fb9b3580dbad53adc7570c1a149949775e5de61f46a8b534b79c0430b6_prof);

        
        $__internal_372b60fdc49d0d47f4ff06eb9658db554b30aad9ec6ed961dc9b0b37d5bdd321->leave($__internal_372b60fdc49d0d47f4ff06eb9658db554b30aad9ec6ed961dc9b0b37d5bdd321_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_2f313a21b18b7166e3f3c15b31be85ffce91ab030a221b5dcba3b39440907ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f313a21b18b7166e3f3c15b31be85ffce91ab030a221b5dcba3b39440907ae3->enter($__internal_2f313a21b18b7166e3f3c15b31be85ffce91ab030a221b5dcba3b39440907ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_08e909d2309efc162f7d030da50c097561cfda1a9421045367b3114698ef5802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e909d2309efc162f7d030da50c097561cfda1a9421045367b3114698ef5802->enter($__internal_08e909d2309efc162f7d030da50c097561cfda1a9421045367b3114698ef5802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_08e909d2309efc162f7d030da50c097561cfda1a9421045367b3114698ef5802->leave($__internal_08e909d2309efc162f7d030da50c097561cfda1a9421045367b3114698ef5802_prof);

        
        $__internal_2f313a21b18b7166e3f3c15b31be85ffce91ab030a221b5dcba3b39440907ae3->leave($__internal_2f313a21b18b7166e3f3c15b31be85ffce91ab030a221b5dcba3b39440907ae3_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_a0bd4b78eb38f54f3a3c25fcd280bc08edaf9f14bff05d8cfd5cf132608fe1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bd4b78eb38f54f3a3c25fcd280bc08edaf9f14bff05d8cfd5cf132608fe1c4->enter($__internal_a0bd4b78eb38f54f3a3c25fcd280bc08edaf9f14bff05d8cfd5cf132608fe1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_77689013b9fd7ac8507e219c32b3d6acd53cf8f57ee931093a69053b7522217d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77689013b9fd7ac8507e219c32b3d6acd53cf8f57ee931093a69053b7522217d->enter($__internal_77689013b9fd7ac8507e219c32b3d6acd53cf8f57ee931093a69053b7522217d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo (($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_77689013b9fd7ac8507e219c32b3d6acd53cf8f57ee931093a69053b7522217d->leave($__internal_77689013b9fd7ac8507e219c32b3d6acd53cf8f57ee931093a69053b7522217d_prof);

        
        $__internal_a0bd4b78eb38f54f3a3c25fcd280bc08edaf9f14bff05d8cfd5cf132608fe1c4->leave($__internal_a0bd4b78eb38f54f3a3c25fcd280bc08edaf9f14bff05d8cfd5cf132608fe1c4_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_73e2b46d253eb035dc4bcb392bc15eeeb55501da89da49abab55a30b76174594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e2b46d253eb035dc4bcb392bc15eeeb55501da89da49abab55a30b76174594->enter($__internal_73e2b46d253eb035dc4bcb392bc15eeeb55501da89da49abab55a30b76174594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_b8d924fc06c949317432ac055e1a0080091a53e309259a3eb4a76eb6884718de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d924fc06c949317432ac055e1a0080091a53e309259a3eb4a76eb6884718de->enter($__internal_b8d924fc06c949317432ac055e1a0080091a53e309259a3eb4a76eb6884718de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_b8d924fc06c949317432ac055e1a0080091a53e309259a3eb4a76eb6884718de->leave($__internal_b8d924fc06c949317432ac055e1a0080091a53e309259a3eb4a76eb6884718de_prof);

        
        $__internal_73e2b46d253eb035dc4bcb392bc15eeeb55501da89da49abab55a30b76174594->leave($__internal_73e2b46d253eb035dc4bcb392bc15eeeb55501da89da49abab55a30b76174594_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_e3419a116faa6b3e345d28bb18e757dbfe38893d0a2a6e10d179ab0ccea94f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3419a116faa6b3e345d28bb18e757dbfe38893d0a2a6e10d179ab0ccea94f6c->enter($__internal_e3419a116faa6b3e345d28bb18e757dbfe38893d0a2a6e10d179ab0ccea94f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_9947aa0d924fbc15ab4e29c5fa1a27d60d5aa037236a1cb28c42c319677943bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9947aa0d924fbc15ab4e29c5fa1a27d60d5aa037236a1cb28c42c319677943bc->enter($__internal_9947aa0d924fbc15ab4e29c5fa1a27d60d5aa037236a1cb28c42c319677943bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? $this->getContext($context, "id")));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9947aa0d924fbc15ab4e29c5fa1a27d60d5aa037236a1cb28c42c319677943bc->leave($__internal_9947aa0d924fbc15ab4e29c5fa1a27d60d5aa037236a1cb28c42c319677943bc_prof);

        
        $__internal_e3419a116faa6b3e345d28bb18e757dbfe38893d0a2a6e10d179ab0ccea94f6c->leave($__internal_e3419a116faa6b3e345d28bb18e757dbfe38893d0a2a6e10d179ab0ccea94f6c_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_26203fd45905729c6ca5e2beb7cd047ed008cf74db34c5e8b3743977b650de1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26203fd45905729c6ca5e2beb7cd047ed008cf74db34c5e8b3743977b650de1b->enter($__internal_26203fd45905729c6ca5e2beb7cd047ed008cf74db34c5e8b3743977b650de1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_3e99e262c6b8455b21b03c666e1fa0a4905a7ff79027c4a141b89a0f61cb81a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e99e262c6b8455b21b03c666e1fa0a4905a7ff79027c4a141b89a0f61cb81a8->enter($__internal_3e99e262c6b8455b21b03c666e1fa0a4905a7ff79027c4a141b89a0f61cb81a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 448
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_3e99e262c6b8455b21b03c666e1fa0a4905a7ff79027c4a141b89a0f61cb81a8->leave($__internal_3e99e262c6b8455b21b03c666e1fa0a4905a7ff79027c4a141b89a0f61cb81a8_prof);

        
        $__internal_26203fd45905729c6ca5e2beb7cd047ed008cf74db34c5e8b3743977b650de1b->leave($__internal_26203fd45905729c6ca5e2beb7cd047ed008cf74db34c5e8b3743977b650de1b_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_c6791d8a0409c68866772984ee6a7def21804eb796ae0b560304540a85974484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6791d8a0409c68866772984ee6a7def21804eb796ae0b560304540a85974484->enter($__internal_c6791d8a0409c68866772984ee6a7def21804eb796ae0b560304540a85974484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_be23d68ac7e9082c0b8e73ab0f1bbec525cc99f04f15b6641d766319baebb8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be23d68ac7e9082c0b8e73ab0f1bbec525cc99f04f15b6641d766319baebb8b7->enter($__internal_be23d68ac7e9082c0b8e73ab0f1bbec525cc99f04f15b6641d766319baebb8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 461
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 470
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 471
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 475
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
($context["_entity_actions"] ?? $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 481
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 482
($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 483
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 484
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 485
        echo "
";
        
        $__internal_be23d68ac7e9082c0b8e73ab0f1bbec525cc99f04f15b6641d766319baebb8b7->leave($__internal_be23d68ac7e9082c0b8e73ab0f1bbec525cc99f04f15b6641d766319baebb8b7_prof);

        
        $__internal_c6791d8a0409c68866772984ee6a7def21804eb796ae0b560304540a85974484->leave($__internal_c6791d8a0409c68866772984ee6a7def21804eb796ae0b560304540a85974484_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_f42749833e846bf151cdb1e74de9ae19fbf0b93e7495aeb6841ad4772fdfa95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42749833e846bf151cdb1e74de9ae19fbf0b93e7495aeb6841ad4772fdfa95e->enter($__internal_f42749833e846bf151cdb1e74de9ae19fbf0b93e7495aeb6841ad4772fdfa95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_d2f3ec44c99fe1295f7c091f9009131710231b8a2a56f3712d5a8880bba7d206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f3ec44c99fe1295f7c091f9009131710231b8a2a56f3712d5a8880bba7d206->enter($__internal_d2f3ec44c99fe1295f7c091f9009131710231b8a2a56f3712d5a8880bba7d206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 490
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 493
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 495
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 496
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 498
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 499
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 501
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 505
            echo "
                    <div class=\"box-body\">
                        ";
            // line 507
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 508
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 510
            echo "
                        <div class=\"row\">
                            ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 513
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 514
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 517
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 522
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 523
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 524
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 527
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 528
        echo "    </div>
";
        
        $__internal_d2f3ec44c99fe1295f7c091f9009131710231b8a2a56f3712d5a8880bba7d206->leave($__internal_d2f3ec44c99fe1295f7c091f9009131710231b8a2a56f3712d5a8880bba7d206_prof);

        
        $__internal_f42749833e846bf151cdb1e74de9ae19fbf0b93e7495aeb6841ad4772fdfa95e->leave($__internal_f42749833e846bf151cdb1e74de9ae19fbf0b93e7495aeb6841ad4772fdfa95e_prof);

    }

    // line 532
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_c4ea3598dbf04d5a605e8390edd368d22b0549bc2f0d48136ffe27c7b45a8bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ea3598dbf04d5a605e8390edd368d22b0549bc2f0d48136ffe27c7b45a8bcf->enter($__internal_c4ea3598dbf04d5a605e8390edd368d22b0549bc2f0d48136ffe27c7b45a8bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_076327b78285466a64e5a0532100e77fb35118c9af2b6ece6a6256b718e2e08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076327b78285466a64e5a0532100e77fb35118c9af2b6ece6a6256b718e2e08b->enter($__internal_076327b78285466a64e5a0532100e77fb35118c9af2b6ece6a6256b718e2e08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 533
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 534
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 537
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 540
        echo "
";
        
        $__internal_076327b78285466a64e5a0532100e77fb35118c9af2b6ece6a6256b718e2e08b->leave($__internal_076327b78285466a64e5a0532100e77fb35118c9af2b6ece6a6256b718e2e08b_prof);

        
        $__internal_c4ea3598dbf04d5a605e8390edd368d22b0549bc2f0d48136ffe27c7b45a8bcf->leave($__internal_c4ea3598dbf04d5a605e8390edd368d22b0549bc2f0d48136ffe27c7b45a8bcf_prof);

    }

    // line 543
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_0476865e90b10a896cbd898a6761bf469b7bcea59c40bab86523fe0e28648d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0476865e90b10a896cbd898a6761bf469b7bcea59c40bab86523fe0e28648d36->enter($__internal_0476865e90b10a896cbd898a6761bf469b7bcea59c40bab86523fe0e28648d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_1e7165185f62049561748d8e8e70a92afeeb600c3bb02775b80d8ccc7108ba82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7165185f62049561748d8e8e70a92afeeb600c3bb02775b80d8ccc7108ba82->enter($__internal_1e7165185f62049561748d8e8e70a92afeeb600c3bb02775b80d8ccc7108ba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 544
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 545
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1e7165185f62049561748d8e8e70a92afeeb600c3bb02775b80d8ccc7108ba82->leave($__internal_1e7165185f62049561748d8e8e70a92afeeb600c3bb02775b80d8ccc7108ba82_prof);

        
        $__internal_0476865e90b10a896cbd898a6761bf469b7bcea59c40bab86523fe0e28648d36->leave($__internal_0476865e90b10a896cbd898a6761bf469b7bcea59c40bab86523fe0e28648d36_prof);

    }

    // line 549
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_4fb0bbf851aa818068d53a3234139db47c3238c87daa2acc9e4d1ceee9643a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb0bbf851aa818068d53a3234139db47c3238c87daa2acc9e4d1ceee9643a9e->enter($__internal_4fb0bbf851aa818068d53a3234139db47c3238c87daa2acc9e4d1ceee9643a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_b0713bb307a502a78f1d07138837b06be3d2ffc5a37eca9d1b8500fec4eaa3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0713bb307a502a78f1d07138837b06be3d2ffc5a37eca9d1b8500fec4eaa3e3->enter($__internal_b0713bb307a502a78f1d07138837b06be3d2ffc5a37eca9d1b8500fec4eaa3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 550
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_b0713bb307a502a78f1d07138837b06be3d2ffc5a37eca9d1b8500fec4eaa3e3->leave($__internal_b0713bb307a502a78f1d07138837b06be3d2ffc5a37eca9d1b8500fec4eaa3e3_prof);

        
        $__internal_4fb0bbf851aa818068d53a3234139db47c3238c87daa2acc9e4d1ceee9643a9e->leave($__internal_4fb0bbf851aa818068d53a3234139db47c3238c87daa2acc9e4d1ceee9643a9e_prof);

    }

    // line 556
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_12177a7c7f29d48042a92e4e6f947e6ee19fe9abbeb1708790158e2cec5f6973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12177a7c7f29d48042a92e4e6f947e6ee19fe9abbeb1708790158e2cec5f6973->enter($__internal_12177a7c7f29d48042a92e4e6f947e6ee19fe9abbeb1708790158e2cec5f6973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_bff4b80a332c3ab1a34b06c18bd244ba277a599a11165264b21803bf608895c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff4b80a332c3ab1a34b06c18bd244ba277a599a11165264b21803bf608895c3->enter($__internal_bff4b80a332c3ab1a34b06c18bd244ba277a599a11165264b21803bf608895c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 557
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 558
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 559
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 560
            echo "            <h2>
                ";
            // line 561
            if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 562
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 565
        echo "
        ";
        // line 566
        if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 567
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 569
        echo "    </div>
";
        
        $__internal_bff4b80a332c3ab1a34b06c18bd244ba277a599a11165264b21803bf608895c3->leave($__internal_bff4b80a332c3ab1a34b06c18bd244ba277a599a11165264b21803bf608895c3_prof);

        
        $__internal_12177a7c7f29d48042a92e4e6f947e6ee19fe9abbeb1708790158e2cec5f6973->leave($__internal_12177a7c7f29d48042a92e4e6f947e6ee19fe9abbeb1708790158e2cec5f6973_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1960 => 569,  1954 => 567,  1952 => 566,  1949 => 565,  1942 => 562,  1936 => 561,  1933 => 560,  1931 => 559,  1926 => 558,  1923 => 557,  1914 => 556,  1901 => 550,  1892 => 549,  1882 => 545,  1879 => 544,  1870 => 543,  1859 => 540,  1857 => 537,  1856 => 534,  1854 => 533,  1845 => 532,  1834 => 528,  1828 => 527,  1818 => 524,  1813 => 523,  1807 => 522,  1798 => 517,  1788 => 514,  1783 => 513,  1778 => 512,  1774 => 510,  1768 => 508,  1766 => 507,  1762 => 505,  1754 => 501,  1748 => 499,  1746 => 498,  1742 => 496,  1740 => 495,  1734 => 493,  1729 => 492,  1726 => 491,  1723 => 490,  1714 => 489,  1703 => 485,  1701 => 484,  1700 => 483,  1699 => 482,  1698 => 481,  1697 => 480,  1696 => 479,  1693 => 478,  1691 => 477,  1688 => 476,  1686 => 475,  1685 => 473,  1682 => 472,  1680 => 471,  1679 => 470,  1678 => 469,  1672 => 466,  1669 => 465,  1666 => 463,  1663 => 462,  1660 => 461,  1651 => 460,  1637 => 454,  1635 => 453,  1630 => 449,  1628 => 448,  1619 => 447,  1607 => 443,  1601 => 440,  1597 => 439,  1591 => 436,  1587 => 435,  1584 => 434,  1581 => 433,  1579 => 432,  1576 => 431,  1570 => 429,  1568 => 428,  1564 => 427,  1561 => 426,  1559 => 425,  1550 => 424,  1537 => 421,  1534 => 420,  1525 => 419,  1509 => 412,  1504 => 411,  1498 => 408,  1495 => 407,  1493 => 406,  1489 => 404,  1481 => 402,  1478 => 401,  1476 => 400,  1473 => 399,  1471 => 398,  1462 => 397,  1449 => 394,  1446 => 393,  1437 => 392,  1424 => 388,  1421 => 387,  1412 => 386,  1402 => 383,  1399 => 382,  1396 => 381,  1393 => 380,  1390 => 379,  1384 => 377,  1381 => 376,  1372 => 373,  1360 => 369,  1356 => 367,  1347 => 365,  1343 => 364,  1340 => 363,  1334 => 361,  1332 => 360,  1328 => 359,  1325 => 358,  1322 => 357,  1319 => 356,  1310 => 355,  1300 => 351,  1298 => 350,  1296 => 349,  1288 => 348,  1279 => 347,  1269 => 344,  1267 => 343,  1265 => 342,  1257 => 341,  1248 => 340,  1238 => 337,  1236 => 336,  1227 => 335,  1217 => 332,  1215 => 331,  1206 => 330,  1196 => 327,  1194 => 326,  1185 => 325,  1175 => 322,  1173 => 321,  1164 => 320,  1154 => 317,  1152 => 316,  1146 => 315,  1137 => 314,  1122 => 308,  1117 => 306,  1113 => 304,  1099 => 295,  1093 => 294,  1082 => 286,  1077 => 283,  1074 => 282,  1072 => 281,  1066 => 279,  1057 => 278,  1047 => 275,  1041 => 273,  1039 => 272,  1037 => 270,  1030 => 265,  1024 => 264,  1020 => 262,  1018 => 261,  1016 => 259,  1014 => 258,  1006 => 257,  1004 => 256,  995 => 255,  983 => 249,  981 => 248,  979 => 247,  964 => 246,  961 => 245,  958 => 244,  955 => 243,  952 => 242,  949 => 241,  946 => 240,  943 => 239,  940 => 238,  937 => 237,  934 => 236,  932 => 235,  923 => 234,  913 => 231,  904 => 230,  894 => 227,  885 => 226,  875 => 223,  873 => 222,  864 => 220,  854 => 217,  852 => 216,  843 => 215,  832 => 209,  830 => 208,  828 => 207,  825 => 205,  823 => 204,  821 => 203,  812 => 202,  801 => 198,  799 => 197,  797 => 196,  794 => 194,  792 => 193,  790 => 192,  781 => 191,  770 => 187,  764 => 184,  763 => 183,  762 => 182,  758 => 181,  754 => 180,  751 => 178,  745 => 175,  744 => 174,  743 => 173,  739 => 172,  737 => 171,  735 => 170,  726 => 169,  711 => 163,  706 => 161,  702 => 159,  689 => 149,  684 => 146,  681 => 145,  679 => 144,  677 => 143,  675 => 142,  666 => 141,  654 => 136,  651 => 135,  643 => 134,  638 => 132,  636 => 131,  634 => 130,  631 => 128,  629 => 127,  620 => 126,  608 => 121,  606 => 120,  604 => 118,  603 => 117,  602 => 116,  601 => 115,  596 => 113,  594 => 112,  592 => 111,  589 => 109,  587 => 108,  578 => 107,  567 => 103,  565 => 102,  563 => 101,  561 => 100,  559 => 99,  555 => 98,  553 => 97,  550 => 95,  548 => 94,  539 => 93,  528 => 89,  526 => 88,  524 => 87,  515 => 86,  505 => 83,  499 => 81,  497 => 80,  495 => 79,  489 => 77,  486 => 76,  484 => 75,  481 => 74,  472 => 73,  462 => 70,  460 => 69,  451 => 68,  441 => 65,  439 => 64,  430 => 63,  420 => 60,  417 => 58,  415 => 57,  406 => 56,  391 => 50,  386 => 48,  382 => 46,  369 => 36,  364 => 33,  361 => 32,  359 => 31,  357 => 29,  348 => 28,  336 => 23,  334 => 21,  328 => 18,  326 => 17,  323 => 16,  320 => 15,  318 => 13,  317 => 12,  316 => 11,  315 => 9,  314 => 8,  313 => 7,  311 => 5,  309 => 4,  300 => 3,  290 => 556,  287 => 554,  285 => 549,  282 => 547,  280 => 543,  277 => 542,  275 => 532,  272 => 530,  270 => 489,  267 => 487,  265 => 460,  262 => 459,  260 => 447,  257 => 446,  255 => 424,  252 => 423,  250 => 419,  247 => 418,  245 => 397,  242 => 396,  240 => 392,  237 => 391,  235 => 386,  233 => 373,  231 => 355,  228 => 353,  226 => 347,  223 => 346,  221 => 340,  218 => 339,  216 => 335,  213 => 334,  211 => 330,  208 => 329,  206 => 325,  203 => 324,  201 => 320,  198 => 319,  196 => 314,  193 => 313,  191 => 278,  188 => 277,  186 => 255,  183 => 254,  180 => 252,  178 => 234,  175 => 233,  173 => 230,  170 => 229,  168 => 226,  165 => 225,  163 => 220,  160 => 219,  158 => 215,  155 => 214,  152 => 212,  150 => 202,  147 => 201,  145 => 191,  142 => 190,  140 => 169,  137 => 168,  135 => 141,  132 => 140,  130 => 126,  127 => 125,  125 => 107,  122 => 106,  120 => 93,  117 => 92,  115 => 86,  112 => 85,  110 => 73,  107 => 72,  105 => 68,  102 => 67,  100 => 63,  97 => 62,  95 => 56,  92 => 55,  90 => 28,  87 => 27,  84 => 25,  82 => 3,  79 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

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
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
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
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
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
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
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
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}
    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {{- block('item_actions') -}}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
