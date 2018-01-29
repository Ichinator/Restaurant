<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_da974131f3ad8d76aca05a2fab82ada17879005910d186eb1943ab81867ce5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_item' => array($this, 'block_menu_item'),
            'menu_subitem' => array($this, 'block_menu_subitem'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc884e3fa855033aa5402a486538a51e4ac0cdacf06c3a910c42db9b10b3e5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc884e3fa855033aa5402a486538a51e4ac0cdacf06c3a910c42db9b10b3e5d0->enter($__internal_bc884e3fa855033aa5402a486538a51e4ac0cdacf06c3a910c42db9b10b3e5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_d9bfa6a8f5da76c6b796ed4e971a0ea5abc9371672017398a9560ab24659bcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bfa6a8f5da76c6b796ed4e971a0ea5abc9371672017398a9560ab24659bcb3->enter($__internal_d9bfa6a8f5da76c6b796ed4e971a0ea5abc9371672017398a9560ab24659bcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $context["_menu_items"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu");
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('main_menu', $context, $blocks);
        // line 57
        echo "</ul>

";
        // line 59
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_bc884e3fa855033aa5402a486538a51e4ac0cdacf06c3a910c42db9b10b3e5d0->leave($__internal_bc884e3fa855033aa5402a486538a51e4ac0cdacf06c3a910c42db9b10b3e5d0_prof);

        
        $__internal_d9bfa6a8f5da76c6b796ed4e971a0ea5abc9371672017398a9560ab24659bcb3->leave($__internal_d9bfa6a8f5da76c6b796ed4e971a0ea5abc9371672017398a9560ab24659bcb3_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_98dc8ec076bbb6d99637b5c4a01a7cf567f1a49f2743e9ee45904ef3ed557742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dc8ec076bbb6d99637b5c4a01a7cf567f1a49f2743e9ee45904ef3ed557742->enter($__internal_98dc8ec076bbb6d99637b5c4a01a7cf567f1a49f2743e9ee45904ef3ed557742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_5e40fb033ef18676817e3f04383099c0abe24f7f91978e5d57285bcd0566b84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e40fb033ef18676817e3f04383099c0abe24f7f91978e5d57285bcd0566b84e->enter($__internal_5e40fb033ef18676817e3f04383099c0abe24f7f91978e5d57285bcd0566b84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_5e40fb033ef18676817e3f04383099c0abe24f7f91978e5d57285bcd0566b84e->leave($__internal_5e40fb033ef18676817e3f04383099c0abe24f7f91978e5d57285bcd0566b84e_prof);

        
        $__internal_98dc8ec076bbb6d99637b5c4a01a7cf567f1a49f2743e9ee45904ef3ed557742->leave($__internal_98dc8ec076bbb6d99637b5c4a01a7cf567f1a49f2743e9ee45904ef3ed557742_prof);

    }

    // line 36
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_bb6cb518694131282c6fc2b9846686e476d045df979b06984d3ceee809229375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6cb518694131282c6fc2b9846686e476d045df979b06984d3ceee809229375->enter($__internal_bb6cb518694131282c6fc2b9846686e476d045df979b06984d3ceee809229375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_50f422f7522901897a0f6ee5be9ac821b152d7eac5d55f0cc8de229324b9879a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f422f7522901897a0f6ee5be9ac821b152d7eac5d55f0cc8de229324b9879a->enter($__internal_50f422f7522901897a0f6ee5be9ac821b152d7eac5d55f0cc8de229324b9879a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_menu_items"] ?? $this->getContext($context, "_menu_items")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 55
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        
        $__internal_50f422f7522901897a0f6ee5be9ac821b152d7eac5d55f0cc8de229324b9879a->leave($__internal_50f422f7522901897a0f6ee5be9ac821b152d7eac5d55f0cc8de229324b9879a_prof);

        
        $__internal_bb6cb518694131282c6fc2b9846686e476d045df979b06984d3ceee809229375->leave($__internal_bb6cb518694131282c6fc2b9846686e476d045df979b06984d3ceee809229375_prof);

    }

    // line 38
    public function block_menu_item($context, array $blocks = array())
    {
        $__internal_dc3fe96419f51f3c868e7d63a0ccac744836ed474ca87af580d885ace640854a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3fe96419f51f3c868e7d63a0ccac744836ed474ca87af580d885ace640854a->enter($__internal_dc3fe96419f51f3c868e7d63a0ccac744836ed474ca87af580d885ace640854a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_9914c3d4a813982003359d56e8154ed5c97ee0b4ad2039c58eb91e5fda84817e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9914c3d4a813982003359d56e8154ed5c97ee0b4ad2039c58eb91e5fda84817e->enter($__internal_9914c3d4a813982003359d56e8154ed5c97ee0b4ad2039c58eb91e5fda84817e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        // line 39
        echo "                <li class=\"";
        echo ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()))) ? ("treeview") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index0", array()))) ? ("active") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 40
        echo $context["helper"]->getrender_menu_item(($context["item"] ?? $this->getContext($context, "item")), (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "

                    ";
        // line 42
        if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", array()), array())) : (array())))) {
            // line 43
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 45
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 50
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    ";
        }
        // line 53
        echo "                </li>
            ";
        
        $__internal_9914c3d4a813982003359d56e8154ed5c97ee0b4ad2039c58eb91e5fda84817e->leave($__internal_9914c3d4a813982003359d56e8154ed5c97ee0b4ad2039c58eb91e5fda84817e_prof);

        
        $__internal_dc3fe96419f51f3c868e7d63a0ccac744836ed474ca87af580d885ace640854a->leave($__internal_dc3fe96419f51f3c868e7d63a0ccac744836ed474ca87af580d885ace640854a_prof);

    }

    // line 45
    public function block_menu_subitem($context, array $blocks = array())
    {
        $__internal_b9e3dff0ef9365be695656cec8256d0d8835813e8a44778437ca4a7158bf7dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e3dff0ef9365be695656cec8256d0d8835813e8a44778437ca4a7158bf7dbd->enter($__internal_b9e3dff0ef9365be695656cec8256d0d8835813e8a44778437ca4a7158bf7dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_bb66f8c42038dc65bacf836a90951344e6465c8bdae78fb682e7463ffccca40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb66f8c42038dc65bacf836a90951344e6465c8bdae78fb682e7463ffccca40c->enter($__internal_bb66f8c42038dc65bacf836a90951344e6465c8bdae78fb682e7463ffccca40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 46
        echo "                                    <li class=\"";
        echo ((($this->getAttribute(($context["subitem"] ?? $this->getContext($context, "subitem")), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index0", array())))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 47
        echo $context["helper"]->getrender_menu_item(($context["subitem"] ?? $this->getContext($context, "subitem")), (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "
                                    </li>
                                ";
        
        $__internal_bb66f8c42038dc65bacf836a90951344e6465c8bdae78fb682e7463ffccca40c->leave($__internal_bb66f8c42038dc65bacf836a90951344e6465c8bdae78fb682e7463ffccca40c_prof);

        
        $__internal_b9e3dff0ef9365be695656cec8256d0d8835813e8a44778437ca4a7158bf7dbd->leave($__internal_b9e3dff0ef9365be695656cec8256d0d8835813e8a44778437ca4a7158bf7dbd_prof);

    }

    // line 59
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_692dfc982ac2d0f88f3e9fea6591928bc8229d9e16a3061e1c00b5e43e69932c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692dfc982ac2d0f88f3e9fea6591928bc8229d9e16a3061e1c00b5e43e69932c->enter($__internal_692dfc982ac2d0f88f3e9fea6591928bc8229d9e16a3061e1c00b5e43e69932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_8dc94a12fd44dbfa43fd12fa066c435ef8f63293df44d79122ef45fe5ba2c3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc94a12fd44dbfa43fd12fa066c435ef8f63293df44d79122ef45fe5ba2c3ec->enter($__internal_8dc94a12fd44dbfa43fd12fa066c435ef8f63293df44d79122ef45fe5ba2c3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_8dc94a12fd44dbfa43fd12fa066c435ef8f63293df44d79122ef45fe5ba2c3ec->leave($__internal_8dc94a12fd44dbfa43fd12fa066c435ef8f63293df44d79122ef45fe5ba2c3ec_prof);

        
        $__internal_692dfc982ac2d0f88f3e9fea6591928bc8229d9e16a3061e1c00b5e43e69932c->leave($__internal_692dfc982ac2d0f88f3e9fea6591928bc8229d9e16a3061e1c00b5e43e69932c_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ed9695a7097f397ea71034f8ae697fa41fb8bcca25b793147f1d8beaed2ba5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ed9695a7097f397ea71034f8ae697fa41fb8bcca25b793147f1d8beaed2ba5a9->enter($__internal_ed9695a7097f397ea71034f8ae697fa41fb8bcca25b793147f1d8beaed2ba5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_3f4fdf9a1328371a53cf4b189312c014a9154f76a6b8cb1783356078324c9571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3f4fdf9a1328371a53cf4b189312c014a9154f76a6b8cb1783356078324c9571->enter($__internal_3f4fdf9a1328371a53cf4b189312c014a9154f76a6b8cb1783356078324c9571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "entity", array()), "action" => "list"), ($context["menu_params"] ?? $this->getContext($context, "menu_params"))), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_c224d7652da2fa68c73affc5177d650842b6677c6fad29ca90c48339735fbb04 = ($context["path"] ?? $this->getContext($context, "path"))) && is_string($__internal_1786eda5eff7051122567e15f8c3f6bc19f30a62db60c3f40d91a7383bae778f = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_1786eda5eff7051122567e15f8c3f6bc19f30a62db60c3f40d91a7383bae778f || 0 === strpos($__internal_c224d7652da2fa68c73affc5177d650842b6677c6fad29ca90c48339735fbb04, $__internal_1786eda5eff7051122567e15f8c3f6bc19f30a62db60c3f40d91a7383bae778f))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), twig_array_merge(($context["menu_params"] ?? $this->getContext($context, "menu_params")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute(($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_3f4fdf9a1328371a53cf4b189312c014a9154f76a6b8cb1783356078324c9571->leave($__internal_3f4fdf9a1328371a53cf4b189312c014a9154f76a6b8cb1783356078324c9571_prof);

            
            $__internal_ed9695a7097f397ea71034f8ae697fa41fb8bcca25b793147f1d8beaed2ba5a9->leave($__internal_ed9695a7097f397ea71034f8ae697fa41fb8bcca25b793147f1d8beaed2ba5a9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 25,  335 => 24,  330 => 23,  324 => 22,  314 => 21,  311 => 20,  308 => 19,  305 => 18,  302 => 17,  299 => 12,  297 => 10,  296 => 9,  295 => 8,  294 => 7,  292 => 6,  289 => 5,  283 => 3,  280 => 2,  261 => 1,  244 => 59,  231 => 47,  224 => 46,  215 => 45,  204 => 53,  200 => 51,  186 => 50,  183 => 45,  166 => 44,  163 => 43,  161 => 42,  156 => 40,  145 => 39,  136 => 38,  126 => 56,  112 => 55,  109 => 38,  91 => 37,  82 => 36,  65 => 31,  55 => 59,  51 => 57,  49 => 36,  46 => 35,  44 => 34,  40 => 32,  38 => 31,  35 => 30,  33 => 29,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% set _menu_items = easyadmin_config('design.menu') %}

    {% block main_menu %}
        {% for item in _menu_items %}
            {% block menu_item %}
                <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                    {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                    {% if item.children|default([]) is not empty %}
                        <ul class=\"treeview-menu\">
                            {% for subitem in item.children %}
                                {% block menu_subitem %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                                    </li>
                                {% endblock menu_subitem %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endblock menu_item %}
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
