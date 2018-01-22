<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_df750097a754b979aacee1dbff2dbae577c4a40046ee836fae1771412d891ed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d03a8d1b0ed1ec28d9c169d8d96983a5fa37873de824a10348eaca68b4701e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03a8d1b0ed1ec28d9c169d8d96983a5fa37873de824a10348eaca68b4701e79->enter($__internal_d03a8d1b0ed1ec28d9c169d8d96983a5fa37873de824a10348eaca68b4701e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_a43a54d6601ba2b968c963e080c9bbec1a851b8f90a219f2e26ec6ea42bd4430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43a54d6601ba2b968c963e080c9bbec1a851b8f90a219f2e26ec6ea42bd4430->enter($__internal_a43a54d6601ba2b968c963e080c9bbec1a851b8f90a219f2e26ec6ea42bd4430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504"] ?? $this->getContext($context, "__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504"] ?? $this->getContext($context, "__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03a8d1b0ed1ec28d9c169d8d96983a5fa37873de824a10348eaca68b4701e79->leave($__internal_d03a8d1b0ed1ec28d9c169d8d96983a5fa37873de824a10348eaca68b4701e79_prof);

        
        $__internal_a43a54d6601ba2b968c963e080c9bbec1a851b8f90a219f2e26ec6ea42bd4430->leave($__internal_a43a54d6601ba2b968c963e080c9bbec1a851b8f90a219f2e26ec6ea42bd4430_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cd51727e7de1c3e29f7072b9af5360449d342d675884eb0bc60d1d1272d2b9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd51727e7de1c3e29f7072b9af5360449d342d675884eb0bc60d1d1272d2b9a6->enter($__internal_cd51727e7de1c3e29f7072b9af5360449d342d675884eb0bc60d1d1272d2b9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_62085d7a9d916fb3098009a68e9099ced878094b8c76dd112750a89920cd5fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62085d7a9d916fb3098009a68e9099ced878094b8c76dd112750a89920cd5fc3->enter($__internal_62085d7a9d916fb3098009a68e9099ced878094b8c76dd112750a89920cd5fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_62085d7a9d916fb3098009a68e9099ced878094b8c76dd112750a89920cd5fc3->leave($__internal_62085d7a9d916fb3098009a68e9099ced878094b8c76dd112750a89920cd5fc3_prof);

        
        $__internal_cd51727e7de1c3e29f7072b9af5360449d342d675884eb0bc60d1d1272d2b9a6->leave($__internal_cd51727e7de1c3e29f7072b9af5360449d342d675884eb0bc60d1d1272d2b9a6_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_cd1398f256a842386d6542c525ed454a586859eed5c4301ea6cbebf57f64e366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1398f256a842386d6542c525ed454a586859eed5c4301ea6cbebf57f64e366->enter($__internal_cd1398f256a842386d6542c525ed454a586859eed5c4301ea6cbebf57f64e366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_c01fbc667421cd48629cb4f9a8830a2ca389d1c22f6e880a8a8388b8a6c02e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01fbc667421cd48629cb4f9a8830a2ca389d1c22f6e880a8a8388b8a6c02e31->enter($__internal_c01fbc667421cd48629cb4f9a8830a2ca389d1c22f6e880a8a8388b8a6c02e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_c01fbc667421cd48629cb4f9a8830a2ca389d1c22f6e880a8a8388b8a6c02e31->leave($__internal_c01fbc667421cd48629cb4f9a8830a2ca389d1c22f6e880a8a8388b8a6c02e31_prof);

        
        $__internal_cd1398f256a842386d6542c525ed454a586859eed5c4301ea6cbebf57f64e366->leave($__internal_cd1398f256a842386d6542c525ed454a586859eed5c4301ea6cbebf57f64e366_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f8c49a6a89c1d772d0e8ed4bc699b490abe5388ea3bce8f5fc9ce4d5ea8117b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c49a6a89c1d772d0e8ed4bc699b490abe5388ea3bce8f5fc9ce4d5ea8117b0->enter($__internal_f8c49a6a89c1d772d0e8ed4bc699b490abe5388ea3bce8f5fc9ce4d5ea8117b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_3990898d5535e5d57b586d66247858ce233b7126ffd77fb951a85bdbfd6a1de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3990898d5535e5d57b586d66247858ce233b7126ffd77fb951a85bdbfd6a1de2->enter($__internal_3990898d5535e5d57b586d66247858ce233b7126ffd77fb951a85bdbfd6a1de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504"] ?? $this->getContext($context, "__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3990898d5535e5d57b586d66247858ce233b7126ffd77fb951a85bdbfd6a1de2->leave($__internal_3990898d5535e5d57b586d66247858ce233b7126ffd77fb951a85bdbfd6a1de2_prof);

        
        $__internal_f8c49a6a89c1d772d0e8ed4bc699b490abe5388ea3bce8f5fc9ce4d5ea8117b0->leave($__internal_f8c49a6a89c1d772d0e8ed4bc699b490abe5388ea3bce8f5fc9ce4d5ea8117b0_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_e08eef112e514a3cbf29c867ad2331002b0ac53a3ef0267c27b002b6a9660258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08eef112e514a3cbf29c867ad2331002b0ac53a3ef0267c27b002b6a9660258->enter($__internal_e08eef112e514a3cbf29c867ad2331002b0ac53a3ef0267c27b002b6a9660258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_760133ed80e2a5f9da2322d443c11c5b8d19364027d9f1743ee0d16cf88a1ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760133ed80e2a5f9da2322d443c11c5b8d19364027d9f1743ee0d16cf88a1ef0->enter($__internal_760133ed80e2a5f9da2322d443c11c5b8d19364027d9f1743ee0d16cf88a1ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_760133ed80e2a5f9da2322d443c11c5b8d19364027d9f1743ee0d16cf88a1ef0->leave($__internal_760133ed80e2a5f9da2322d443c11c5b8d19364027d9f1743ee0d16cf88a1ef0_prof);

        
        $__internal_e08eef112e514a3cbf29c867ad2331002b0ac53a3ef0267c27b002b6a9660258->leave($__internal_e08eef112e514a3cbf29c867ad2331002b0ac53a3ef0267c27b002b6a9660258_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_9494bd9703d5fa3091916569f7d37c86ddf96a48c09b8846249cdfe1cb06b30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9494bd9703d5fa3091916569f7d37c86ddf96a48c09b8846249cdfe1cb06b30e->enter($__internal_9494bd9703d5fa3091916569f7d37c86ddf96a48c09b8846249cdfe1cb06b30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_35c4182f656027374f8fe8c4e4227138d91f474745d9df73beac444bdd64ce8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c4182f656027374f8fe8c4e4227138d91f474745d9df73beac444bdd64ce8d->enter($__internal_35c4182f656027374f8fe8c4e4227138d91f474745d9df73beac444bdd64ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_35c4182f656027374f8fe8c4e4227138d91f474745d9df73beac444bdd64ce8d->leave($__internal_35c4182f656027374f8fe8c4e4227138d91f474745d9df73beac444bdd64ce8d_prof);

        
        $__internal_9494bd9703d5fa3091916569f7d37c86ddf96a48c09b8846249cdfe1cb06b30e->leave($__internal_9494bd9703d5fa3091916569f7d37c86ddf96a48c09b8846249cdfe1cb06b30e_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_16b3343d7180ba6072a813d6446c78b11b57e5f3e18b66f476d2f960431e7f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b3343d7180ba6072a813d6446c78b11b57e5f3e18b66f476d2f960431e7f02->enter($__internal_16b3343d7180ba6072a813d6446c78b11b57e5f3e18b66f476d2f960431e7f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_b05c5d456fa91cd0063d7b520b9a1db04829082ee36b1da66178293589c93a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05c5d456fa91cd0063d7b520b9a1db04829082ee36b1da66178293589c93a3a->enter($__internal_b05c5d456fa91cd0063d7b520b9a1db04829082ee36b1da66178293589c93a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) ? ($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["field"] ?? $this->getContext($context, "field"))))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504"] ?? $this->getContext($context, "__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504")));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), ($context["metadata"] ?? $this->getContext($context, "metadata")));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute(($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "help", array()), array(),             // line 4
($context["__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504"] ?? $this->getContext($context, "__internal_66c20e70d82393caed904bc1c5eac901b828b047d616d90831330fa03457c504")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_b05c5d456fa91cd0063d7b520b9a1db04829082ee36b1da66178293589c93a3a->leave($__internal_b05c5d456fa91cd0063d7b520b9a1db04829082ee36b1da66178293589c93a3a_prof);

        
        $__internal_16b3343d7180ba6072a813d6446c78b11b57e5f3e18b66f476d2f960431e7f02->leave($__internal_16b3343d7180ba6072a813d6446c78b11b57e5f3e18b66f476d2f960431e7f02_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_8f4cb644ed1c626cc89510d6797b23f8bd9ae2e43a99d1527b0abd4307f37e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4cb644ed1c626cc89510d6797b23f8bd9ae2e43a99d1527b0abd4307f37e82->enter($__internal_8f4cb644ed1c626cc89510d6797b23f8bd9ae2e43a99d1527b0abd4307f37e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_4063afb16608e2ad25850272c1172a351d07734fbeab128fb4469e8e557512d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4063afb16608e2ad25850272c1172a351d07734fbeab128fb4469e8e557512d5->enter($__internal_4063afb16608e2ad25850272c1172a351d07734fbeab128fb4469e8e557512d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 50
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 51
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 52
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 53
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 54
        echo "
            ";
        
        $__internal_4063afb16608e2ad25850272c1172a351d07734fbeab128fb4469e8e557512d5->leave($__internal_4063afb16608e2ad25850272c1172a351d07734fbeab128fb4469e8e557512d5_prof);

        
        $__internal_8f4cb644ed1c626cc89510d6797b23f8bd9ae2e43a99d1527b0abd4307f37e82->leave($__internal_8f4cb644ed1c626cc89510d6797b23f8bd9ae2e43a99d1527b0abd4307f37e82_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_ad270fbd86bb19b9e5cb87b3facaacfbc68a21cc83c679a409384e3f936660b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad270fbd86bb19b9e5cb87b3facaacfbc68a21cc83c679a409384e3f936660b6->enter($__internal_ad270fbd86bb19b9e5cb87b3facaacfbc68a21cc83c679a409384e3f936660b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_ed0b6c4dcb379ef297ef0fe263dedc44420d0ddf7a436ff3ef8d2b8b0a85ff74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0b6c4dcb379ef297ef0fe263dedc44420d0ddf7a436ff3ef8d2b8b0a85ff74->enter($__internal_ed0b6c4dcb379ef297ef0fe263dedc44420d0ddf7a436ff3ef8d2b8b0a85ff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 65
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 66
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 67
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 68
        echo "
    ";
        
        $__internal_ed0b6c4dcb379ef297ef0fe263dedc44420d0ddf7a436ff3ef8d2b8b0a85ff74->leave($__internal_ed0b6c4dcb379ef297ef0fe263dedc44420d0ddf7a436ff3ef8d2b8b0a85ff74_prof);

        
        $__internal_ad270fbd86bb19b9e5cb87b3facaacfbc68a21cc83c679a409384e3f936660b6->leave($__internal_ad270fbd86bb19b9e5cb87b3facaacfbc68a21cc83c679a409384e3f936660b6_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8be3ac9c140f87a3fd0de155248d52bcf52e4cc16a8b6b1179ac7feb24490473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be3ac9c140f87a3fd0de155248d52bcf52e4cc16a8b6b1179ac7feb24490473->enter($__internal_8be3ac9c140f87a3fd0de155248d52bcf52e4cc16a8b6b1179ac7feb24490473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_87902c2264b27810376963348e6ef92eaaa9bba0f52fddd1a49ae020ec1b4a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87902c2264b27810376963348e6ef92eaaa9bba0f52fddd1a49ae020ec1b4a7f->enter($__internal_87902c2264b27810376963348e6ef92eaaa9bba0f52fddd1a49ae020ec1b4a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_87902c2264b27810376963348e6ef92eaaa9bba0f52fddd1a49ae020ec1b4a7f->leave($__internal_87902c2264b27810376963348e6ef92eaaa9bba0f52fddd1a49ae020ec1b4a7f_prof);

        
        $__internal_8be3ac9c140f87a3fd0de155248d52bcf52e4cc16a8b6b1179ac7feb24490473->leave($__internal_8be3ac9c140f87a3fd0de155248d52bcf52e4cc16a8b6b1179ac7feb24490473_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 73,  335 => 72,  324 => 68,  322 => 67,  321 => 66,  320 => 65,  319 => 64,  318 => 63,  316 => 61,  307 => 60,  296 => 54,  294 => 53,  293 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  271 => 44,  259 => 36,  255 => 34,  253 => 4,  251 => 34,  249 => 33,  243 => 30,  237 => 26,  235 => 4,  234 => 26,  226 => 24,  217 => 23,  207 => 40,  193 => 39,  190 => 23,  172 => 22,  163 => 21,  153 => 60,  147 => 56,  145 => 44,  140 => 41,  138 => 21,  135 => 20,  126 => 19,  113 => 15,  112 => 4,  110 => 15,  107 => 14,  105 => 13,  96 => 12,  78 => 10,  60 => 9,  50 => 7,  48 => 5,  47 => 4,  46 => 5,  45 => 4,  44 => 5,  42 => 4,  40 => 3,  38 => 1,  26 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
