<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_26d6d1e44324f7a1f9f7ffa6216e7aff467b39e03c191ef64e4588f16f7147c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e17e75f4d96f95c11c7d098c5b229f499ef29df22a0dcd415524fae1792b10a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17e75f4d96f95c11c7d098c5b229f499ef29df22a0dcd415524fae1792b10a7->enter($__internal_e17e75f4d96f95c11c7d098c5b229f499ef29df22a0dcd415524fae1792b10a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_e5005f78dff68089c09bf44d7deabb5565af6d8d750d2a81b7b83977651bd9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5005f78dff68089c09bf44d7deabb5565af6d8d750d2a81b7b83977651bd9ff->enter($__internal_e5005f78dff68089c09bf44d7deabb5565af6d8d750d2a81b7b83977651bd9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_e17e75f4d96f95c11c7d098c5b229f499ef29df22a0dcd415524fae1792b10a7->leave($__internal_e17e75f4d96f95c11c7d098c5b229f499ef29df22a0dcd415524fae1792b10a7_prof);

        
        $__internal_e5005f78dff68089c09bf44d7deabb5565af6d8d750d2a81b7b83977651bd9ff->leave($__internal_e5005f78dff68089c09bf44d7deabb5565af6d8d750d2a81b7b83977651bd9ff_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_68fd52406f1ccca6a18aab4acd5d79490c553d1a7eb0540fe72cec987637a65e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fd52406f1ccca6a18aab4acd5d79490c553d1a7eb0540fe72cec987637a65e->enter($__internal_68fd52406f1ccca6a18aab4acd5d79490c553d1a7eb0540fe72cec987637a65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_007179115e72683575f8e7ec3987c5fea3f8716756e2acabbccd54277b2acf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007179115e72683575f8e7ec3987c5fea3f8716756e2acabbccd54277b2acf97->enter($__internal_007179115e72683575f8e7ec3987c5fea3f8716756e2acabbccd54277b2acf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_007179115e72683575f8e7ec3987c5fea3f8716756e2acabbccd54277b2acf97->leave($__internal_007179115e72683575f8e7ec3987c5fea3f8716756e2acabbccd54277b2acf97_prof);

        
        $__internal_68fd52406f1ccca6a18aab4acd5d79490c553d1a7eb0540fe72cec987637a65e->leave($__internal_68fd52406f1ccca6a18aab4acd5d79490c553d1a7eb0540fe72cec987637a65e_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_024dbfaf5872c265da8fbdf4e2b6f42d03556a6d92630e4396818e9bd1bf4793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024dbfaf5872c265da8fbdf4e2b6f42d03556a6d92630e4396818e9bd1bf4793->enter($__internal_024dbfaf5872c265da8fbdf4e2b6f42d03556a6d92630e4396818e9bd1bf4793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_7db77e49c73ca6e6e6ec4e6464f6f7917c636106fcffd3f8fc57fcaf9090437b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db77e49c73ca6e6e6ec4e6464f6f7917c636106fcffd3f8fc57fcaf9090437b->enter($__internal_7db77e49c73ca6e6e6ec4e6464f6f7917c636106fcffd3f8fc57fcaf9090437b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_7db77e49c73ca6e6e6ec4e6464f6f7917c636106fcffd3f8fc57fcaf9090437b->leave($__internal_7db77e49c73ca6e6e6ec4e6464f6f7917c636106fcffd3f8fc57fcaf9090437b_prof);

        
        $__internal_024dbfaf5872c265da8fbdf4e2b6f42d03556a6d92630e4396818e9bd1bf4793->leave($__internal_024dbfaf5872c265da8fbdf4e2b6f42d03556a6d92630e4396818e9bd1bf4793_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_31af2c810316ffeb001a8b3ab89161ea66a8a9c4b9189619c1b7f2b0e71f4cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31af2c810316ffeb001a8b3ab89161ea66a8a9c4b9189619c1b7f2b0e71f4cda->enter($__internal_31af2c810316ffeb001a8b3ab89161ea66a8a9c4b9189619c1b7f2b0e71f4cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_8ae978cc650cf618d84679fda451da73f44993adfca51b2068eec9731b149b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae978cc650cf618d84679fda451da73f44993adfca51b2068eec9731b149b81->enter($__internal_8ae978cc650cf618d84679fda451da73f44993adfca51b2068eec9731b149b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_8ae978cc650cf618d84679fda451da73f44993adfca51b2068eec9731b149b81->leave($__internal_8ae978cc650cf618d84679fda451da73f44993adfca51b2068eec9731b149b81_prof);

        
        $__internal_31af2c810316ffeb001a8b3ab89161ea66a8a9c4b9189619c1b7f2b0e71f4cda->leave($__internal_31af2c810316ffeb001a8b3ab89161ea66a8a9c4b9189619c1b7f2b0e71f4cda_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_997fb85378cac0f58ead870e15fe17d9ee592d4908678d8fe705320339bbd012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997fb85378cac0f58ead870e15fe17d9ee592d4908678d8fe705320339bbd012->enter($__internal_997fb85378cac0f58ead870e15fe17d9ee592d4908678d8fe705320339bbd012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_1e871d578879e59167629cc502700da29ea7e8637ba31f85adbce6dce38348b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e871d578879e59167629cc502700da29ea7e8637ba31f85adbce6dce38348b9->enter($__internal_1e871d578879e59167629cc502700da29ea7e8637ba31f85adbce6dce38348b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1e871d578879e59167629cc502700da29ea7e8637ba31f85adbce6dce38348b9->leave($__internal_1e871d578879e59167629cc502700da29ea7e8637ba31f85adbce6dce38348b9_prof);

        
        $__internal_997fb85378cac0f58ead870e15fe17d9ee592d4908678d8fe705320339bbd012->leave($__internal_997fb85378cac0f58ead870e15fe17d9ee592d4908678d8fe705320339bbd012_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_833c12525d923db6a35cceaed315ac2e05965ef833214c0897b4976e4743efb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833c12525d923db6a35cceaed315ac2e05965ef833214c0897b4976e4743efb4->enter($__internal_833c12525d923db6a35cceaed315ac2e05965ef833214c0897b4976e4743efb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_8bcb2ac11330cc94846c58798ecbd1362ba97494a8fe34bc5204c62731f4f076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcb2ac11330cc94846c58798ecbd1362ba97494a8fe34bc5204c62731f4f076->enter($__internal_8bcb2ac11330cc94846c58798ecbd1362ba97494a8fe34bc5204c62731f4f076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_8bcb2ac11330cc94846c58798ecbd1362ba97494a8fe34bc5204c62731f4f076->leave($__internal_8bcb2ac11330cc94846c58798ecbd1362ba97494a8fe34bc5204c62731f4f076_prof);

        
        $__internal_833c12525d923db6a35cceaed315ac2e05965ef833214c0897b4976e4743efb4->leave($__internal_833c12525d923db6a35cceaed315ac2e05965ef833214c0897b4976e4743efb4_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5346b47f61fffbfc1ba1e268a3ddba3f29d2e2d3cc0abf8b869c29bc4495111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5346b47f61fffbfc1ba1e268a3ddba3f29d2e2d3cc0abf8b869c29bc4495111->enter($__internal_a5346b47f61fffbfc1ba1e268a3ddba3f29d2e2d3cc0abf8b869c29bc4495111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1f120cdf4e98b91e74a979ccee3ebac287a885223350e736ed4092561354be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f120cdf4e98b91e74a979ccee3ebac287a885223350e736ed4092561354be0->enter($__internal_e1f120cdf4e98b91e74a979ccee3ebac287a885223350e736ed4092561354be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_e1f120cdf4e98b91e74a979ccee3ebac287a885223350e736ed4092561354be0->leave($__internal_e1f120cdf4e98b91e74a979ccee3ebac287a885223350e736ed4092561354be0_prof);

        
        $__internal_a5346b47f61fffbfc1ba1e268a3ddba3f29d2e2d3cc0abf8b869c29bc4495111->leave($__internal_a5346b47f61fffbfc1ba1e268a3ddba3f29d2e2d3cc0abf8b869c29bc4495111_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3ca022f7e8a0039b556ed96e7062af7f5c84787444c50364d7d564527281db32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca022f7e8a0039b556ed96e7062af7f5c84787444c50364d7d564527281db32->enter($__internal_3ca022f7e8a0039b556ed96e7062af7f5c84787444c50364d7d564527281db32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_28c850f4e3afa45fdc76ea4b56eddbefab7d915c52ebcd0a7800531aa7a1c901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c850f4e3afa45fdc76ea4b56eddbefab7d915c52ebcd0a7800531aa7a1c901->enter($__internal_28c850f4e3afa45fdc76ea4b56eddbefab7d915c52ebcd0a7800531aa7a1c901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_28c850f4e3afa45fdc76ea4b56eddbefab7d915c52ebcd0a7800531aa7a1c901->leave($__internal_28c850f4e3afa45fdc76ea4b56eddbefab7d915c52ebcd0a7800531aa7a1c901_prof);

        
        $__internal_3ca022f7e8a0039b556ed96e7062af7f5c84787444c50364d7d564527281db32->leave($__internal_3ca022f7e8a0039b556ed96e7062af7f5c84787444c50364d7d564527281db32_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b4d0a6648ca10e631a17b8330b8db12b509bd67383ef1846d005b78e48048658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d0a6648ca10e631a17b8330b8db12b509bd67383ef1846d005b78e48048658->enter($__internal_b4d0a6648ca10e631a17b8330b8db12b509bd67383ef1846d005b78e48048658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6afa8f6fae0cbcdcfc061290bb4ee5c7f89078388e22dfe8032f9707f0f4c13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afa8f6fae0cbcdcfc061290bb4ee5c7f89078388e22dfe8032f9707f0f4c13a->enter($__internal_6afa8f6fae0cbcdcfc061290bb4ee5c7f89078388e22dfe8032f9707f0f4c13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6afa8f6fae0cbcdcfc061290bb4ee5c7f89078388e22dfe8032f9707f0f4c13a->leave($__internal_6afa8f6fae0cbcdcfc061290bb4ee5c7f89078388e22dfe8032f9707f0f4c13a_prof);

        
        $__internal_b4d0a6648ca10e631a17b8330b8db12b509bd67383ef1846d005b78e48048658->leave($__internal_b4d0a6648ca10e631a17b8330b8db12b509bd67383ef1846d005b78e48048658_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_e72c3f335ca17f66e6cdd39c4ed0b61eeab39881e60d72667c30d6f5e4474830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72c3f335ca17f66e6cdd39c4ed0b61eeab39881e60d72667c30d6f5e4474830->enter($__internal_e72c3f335ca17f66e6cdd39c4ed0b61eeab39881e60d72667c30d6f5e4474830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_81e321ba357993c29d5b650200bf95335f898b50579cb1a4028322754c85c4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e321ba357993c29d5b650200bf95335f898b50579cb1a4028322754c85c4ad->enter($__internal_81e321ba357993c29d5b650200bf95335f898b50579cb1a4028322754c85c4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_81e321ba357993c29d5b650200bf95335f898b50579cb1a4028322754c85c4ad->leave($__internal_81e321ba357993c29d5b650200bf95335f898b50579cb1a4028322754c85c4ad_prof);

        
        $__internal_e72c3f335ca17f66e6cdd39c4ed0b61eeab39881e60d72667c30d6f5e4474830->leave($__internal_e72c3f335ca17f66e6cdd39c4ed0b61eeab39881e60d72667c30d6f5e4474830_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_96ea84c231e80f99286dadfd9ee8450a6124caf02a73517613ef1ba855340146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ea84c231e80f99286dadfd9ee8450a6124caf02a73517613ef1ba855340146->enter($__internal_96ea84c231e80f99286dadfd9ee8450a6124caf02a73517613ef1ba855340146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b4ce6c8809e9a6284e409b3c632a6b574c3440ae3b8fdc24d1511fe75b12d8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ce6c8809e9a6284e409b3c632a6b574c3440ae3b8fdc24d1511fe75b12d8f6->enter($__internal_b4ce6c8809e9a6284e409b3c632a6b574c3440ae3b8fdc24d1511fe75b12d8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_b4ce6c8809e9a6284e409b3c632a6b574c3440ae3b8fdc24d1511fe75b12d8f6->leave($__internal_b4ce6c8809e9a6284e409b3c632a6b574c3440ae3b8fdc24d1511fe75b12d8f6_prof);

        
        $__internal_96ea84c231e80f99286dadfd9ee8450a6124caf02a73517613ef1ba855340146->leave($__internal_96ea84c231e80f99286dadfd9ee8450a6124caf02a73517613ef1ba855340146_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_248ed4d6f073675208dbd7400bddce70eb27e9ec79334b993b7227d14ef9d3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248ed4d6f073675208dbd7400bddce70eb27e9ec79334b993b7227d14ef9d3c1->enter($__internal_248ed4d6f073675208dbd7400bddce70eb27e9ec79334b993b7227d14ef9d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_2d27b22a061013c5961cf0f63aeda296546d0fd15584007147a72330d800be5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d27b22a061013c5961cf0f63aeda296546d0fd15584007147a72330d800be5a->enter($__internal_2d27b22a061013c5961cf0f63aeda296546d0fd15584007147a72330d800be5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_2d27b22a061013c5961cf0f63aeda296546d0fd15584007147a72330d800be5a->leave($__internal_2d27b22a061013c5961cf0f63aeda296546d0fd15584007147a72330d800be5a_prof);

        
        $__internal_248ed4d6f073675208dbd7400bddce70eb27e9ec79334b993b7227d14ef9d3c1->leave($__internal_248ed4d6f073675208dbd7400bddce70eb27e9ec79334b993b7227d14ef9d3c1_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_4f6b6af87ac91fa6d60eb2460416be83e104a52edb4f65a0f91ef5629409e090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6b6af87ac91fa6d60eb2460416be83e104a52edb4f65a0f91ef5629409e090->enter($__internal_4f6b6af87ac91fa6d60eb2460416be83e104a52edb4f65a0f91ef5629409e090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_a721f0184bff725bd74df48bc91ccd16395f9e3c85cdb596e41f14c43feaa554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a721f0184bff725bd74df48bc91ccd16395f9e3c85cdb596e41f14c43feaa554->enter($__internal_a721f0184bff725bd74df48bc91ccd16395f9e3c85cdb596e41f14c43feaa554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_a721f0184bff725bd74df48bc91ccd16395f9e3c85cdb596e41f14c43feaa554->leave($__internal_a721f0184bff725bd74df48bc91ccd16395f9e3c85cdb596e41f14c43feaa554_prof);

        
        $__internal_4f6b6af87ac91fa6d60eb2460416be83e104a52edb4f65a0f91ef5629409e090->leave($__internal_4f6b6af87ac91fa6d60eb2460416be83e104a52edb4f65a0f91ef5629409e090_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_cf74bb7d295025be76f3311891216b77fa8cc22f0d4461d231be86cebbb05412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf74bb7d295025be76f3311891216b77fa8cc22f0d4461d231be86cebbb05412->enter($__internal_cf74bb7d295025be76f3311891216b77fa8cc22f0d4461d231be86cebbb05412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_f600cdd02d8ab801423d0782df120bc89e88f4efc5539211c20554fc2ebfa234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f600cdd02d8ab801423d0782df120bc89e88f4efc5539211c20554fc2ebfa234->enter($__internal_f600cdd02d8ab801423d0782df120bc89e88f4efc5539211c20554fc2ebfa234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_f600cdd02d8ab801423d0782df120bc89e88f4efc5539211c20554fc2ebfa234->leave($__internal_f600cdd02d8ab801423d0782df120bc89e88f4efc5539211c20554fc2ebfa234_prof);

        
        $__internal_cf74bb7d295025be76f3311891216b77fa8cc22f0d4461d231be86cebbb05412->leave($__internal_cf74bb7d295025be76f3311891216b77fa8cc22f0d4461d231be86cebbb05412_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_1db1c61e5211370a19c77582bcc525a4d380ea6a3347ac9b3ff2f505a2a1b0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db1c61e5211370a19c77582bcc525a4d380ea6a3347ac9b3ff2f505a2a1b0ec->enter($__internal_1db1c61e5211370a19c77582bcc525a4d380ea6a3347ac9b3ff2f505a2a1b0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_e881860b440370527ac50e6f4b961e410f4150a7ffc84d221ccc84d7533aba3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e881860b440370527ac50e6f4b961e410f4150a7ffc84d221ccc84d7533aba3b->enter($__internal_e881860b440370527ac50e6f4b961e410f4150a7ffc84d221ccc84d7533aba3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_e881860b440370527ac50e6f4b961e410f4150a7ffc84d221ccc84d7533aba3b->leave($__internal_e881860b440370527ac50e6f4b961e410f4150a7ffc84d221ccc84d7533aba3b_prof);

        
        $__internal_1db1c61e5211370a19c77582bcc525a4d380ea6a3347ac9b3ff2f505a2a1b0ec->leave($__internal_1db1c61e5211370a19c77582bcc525a4d380ea6a3347ac9b3ff2f505a2a1b0ec_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ffa0c58d13b9f7f217afdf16b5df446c30666a6c20248cea0f8c6736dffca00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa0c58d13b9f7f217afdf16b5df446c30666a6c20248cea0f8c6736dffca00d->enter($__internal_ffa0c58d13b9f7f217afdf16b5df446c30666a6c20248cea0f8c6736dffca00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_4abd521f3b028648794f7cba4a53f87478bf54d71b6d8a9c1509448af46bc9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abd521f3b028648794f7cba4a53f87478bf54d71b6d8a9c1509448af46bc9f5->enter($__internal_4abd521f3b028648794f7cba4a53f87478bf54d71b6d8a9c1509448af46bc9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_4abd521f3b028648794f7cba4a53f87478bf54d71b6d8a9c1509448af46bc9f5->leave($__internal_4abd521f3b028648794f7cba4a53f87478bf54d71b6d8a9c1509448af46bc9f5_prof);

        
        $__internal_ffa0c58d13b9f7f217afdf16b5df446c30666a6c20248cea0f8c6736dffca00d->leave($__internal_ffa0c58d13b9f7f217afdf16b5df446c30666a6c20248cea0f8c6736dffca00d_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_a3036679996da9f043d7e3ab89ff654ebb3aee8a0cc3c1b94ea6c31bbb12fef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3036679996da9f043d7e3ab89ff654ebb3aee8a0cc3c1b94ea6c31bbb12fef3->enter($__internal_a3036679996da9f043d7e3ab89ff654ebb3aee8a0cc3c1b94ea6c31bbb12fef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_1eb6299474b564599b71ad948c390410d3f0abef5626894b72c1689281828e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb6299474b564599b71ad948c390410d3f0abef5626894b72c1689281828e75->enter($__internal_1eb6299474b564599b71ad948c390410d3f0abef5626894b72c1689281828e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_1eb6299474b564599b71ad948c390410d3f0abef5626894b72c1689281828e75->leave($__internal_1eb6299474b564599b71ad948c390410d3f0abef5626894b72c1689281828e75_prof);

        
        $__internal_a3036679996da9f043d7e3ab89ff654ebb3aee8a0cc3c1b94ea6c31bbb12fef3->leave($__internal_a3036679996da9f043d7e3ab89ff654ebb3aee8a0cc3c1b94ea6c31bbb12fef3_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_06a899044eb1151fe384f2ed86457bcf9707ba4ee3ae8ee220da21e931784216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a899044eb1151fe384f2ed86457bcf9707ba4ee3ae8ee220da21e931784216->enter($__internal_06a899044eb1151fe384f2ed86457bcf9707ba4ee3ae8ee220da21e931784216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_203ef2fb5b7a6db8a9799b06cd431e23401558afc85a992fb97bfecc15ae8d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203ef2fb5b7a6db8a9799b06cd431e23401558afc85a992fb97bfecc15ae8d8f->enter($__internal_203ef2fb5b7a6db8a9799b06cd431e23401558afc85a992fb97bfecc15ae8d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_203ef2fb5b7a6db8a9799b06cd431e23401558afc85a992fb97bfecc15ae8d8f->leave($__internal_203ef2fb5b7a6db8a9799b06cd431e23401558afc85a992fb97bfecc15ae8d8f_prof);

        
        $__internal_06a899044eb1151fe384f2ed86457bcf9707ba4ee3ae8ee220da21e931784216->leave($__internal_06a899044eb1151fe384f2ed86457bcf9707ba4ee3ae8ee220da21e931784216_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_0443eadc673744687e2a995c1b31b56aaacb7cbaa10160b27a14e9a4d20deca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0443eadc673744687e2a995c1b31b56aaacb7cbaa10160b27a14e9a4d20deca9->enter($__internal_0443eadc673744687e2a995c1b31b56aaacb7cbaa10160b27a14e9a4d20deca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_6588e3c429ec2102c710fc02e89b5cb57ca153d9523e03535f025e06f7772420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6588e3c429ec2102c710fc02e89b5cb57ca153d9523e03535f025e06f7772420->enter($__internal_6588e3c429ec2102c710fc02e89b5cb57ca153d9523e03535f025e06f7772420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_6588e3c429ec2102c710fc02e89b5cb57ca153d9523e03535f025e06f7772420->leave($__internal_6588e3c429ec2102c710fc02e89b5cb57ca153d9523e03535f025e06f7772420_prof);

        
        $__internal_0443eadc673744687e2a995c1b31b56aaacb7cbaa10160b27a14e9a4d20deca9->leave($__internal_0443eadc673744687e2a995c1b31b56aaacb7cbaa10160b27a14e9a4d20deca9_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_5d17edec140ef0faff057baaafe4d7c1e672fa5611aa93b21599f7e1abb30afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d17edec140ef0faff057baaafe4d7c1e672fa5611aa93b21599f7e1abb30afb->enter($__internal_5d17edec140ef0faff057baaafe4d7c1e672fa5611aa93b21599f7e1abb30afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_66427dde8cb4b77611deb1bbf825969727abeab093d877302582dc99db33d9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66427dde8cb4b77611deb1bbf825969727abeab093d877302582dc99db33d9c9->enter($__internal_66427dde8cb4b77611deb1bbf825969727abeab093d877302582dc99db33d9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_66427dde8cb4b77611deb1bbf825969727abeab093d877302582dc99db33d9c9->leave($__internal_66427dde8cb4b77611deb1bbf825969727abeab093d877302582dc99db33d9c9_prof);

        
        $__internal_5d17edec140ef0faff057baaafe4d7c1e672fa5611aa93b21599f7e1abb30afb->leave($__internal_5d17edec140ef0faff057baaafe4d7c1e672fa5611aa93b21599f7e1abb30afb_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_b4a0f88d2cc36d71b43778e909ebb368a5fc49bbdf3ccd9fa473f2814c9914e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a0f88d2cc36d71b43778e909ebb368a5fc49bbdf3ccd9fa473f2814c9914e7->enter($__internal_b4a0f88d2cc36d71b43778e909ebb368a5fc49bbdf3ccd9fa473f2814c9914e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_9c62b01fce77337d81da5e7c454dde82d14155aad84ec40d30a39db72834bf03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c62b01fce77337d81da5e7c454dde82d14155aad84ec40d30a39db72834bf03->enter($__internal_9c62b01fce77337d81da5e7c454dde82d14155aad84ec40d30a39db72834bf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_9c62b01fce77337d81da5e7c454dde82d14155aad84ec40d30a39db72834bf03->leave($__internal_9c62b01fce77337d81da5e7c454dde82d14155aad84ec40d30a39db72834bf03_prof);

        
        $__internal_b4a0f88d2cc36d71b43778e909ebb368a5fc49bbdf3ccd9fa473f2814c9914e7->leave($__internal_b4a0f88d2cc36d71b43778e909ebb368a5fc49bbdf3ccd9fa473f2814c9914e7_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_7397eec9ab608034c4be16f0bf331f7184523a098aad2e512f82aebe388ac8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7397eec9ab608034c4be16f0bf331f7184523a098aad2e512f82aebe388ac8fe->enter($__internal_7397eec9ab608034c4be16f0bf331f7184523a098aad2e512f82aebe388ac8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_6180c592d70bf115388307a72b035ae443a736ee6457c456fdda0dc7421b5f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6180c592d70bf115388307a72b035ae443a736ee6457c456fdda0dc7421b5f81->enter($__internal_6180c592d70bf115388307a72b035ae443a736ee6457c456fdda0dc7421b5f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_6180c592d70bf115388307a72b035ae443a736ee6457c456fdda0dc7421b5f81->leave($__internal_6180c592d70bf115388307a72b035ae443a736ee6457c456fdda0dc7421b5f81_prof);

        
        $__internal_7397eec9ab608034c4be16f0bf331f7184523a098aad2e512f82aebe388ac8fe->leave($__internal_7397eec9ab608034c4be16f0bf331f7184523a098aad2e512f82aebe388ac8fe_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_928edde3915f32e5034612c519b557d6b05bf7052c032942c67b40edd79ebd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928edde3915f32e5034612c519b557d6b05bf7052c032942c67b40edd79ebd13->enter($__internal_928edde3915f32e5034612c519b557d6b05bf7052c032942c67b40edd79ebd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4b426594db0f0462134ebc88850f8123ba20ce53ebe6765b3ab976558b56090e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b426594db0f0462134ebc88850f8123ba20ce53ebe6765b3ab976558b56090e->enter($__internal_4b426594db0f0462134ebc88850f8123ba20ce53ebe6765b3ab976558b56090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_4b426594db0f0462134ebc88850f8123ba20ce53ebe6765b3ab976558b56090e->leave($__internal_4b426594db0f0462134ebc88850f8123ba20ce53ebe6765b3ab976558b56090e_prof);

        
        $__internal_928edde3915f32e5034612c519b557d6b05bf7052c032942c67b40edd79ebd13->leave($__internal_928edde3915f32e5034612c519b557d6b05bf7052c032942c67b40edd79ebd13_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8e75965fe063489b2c0e88c480d8d17873c4e947aac22a0b9095e74f170e209c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e75965fe063489b2c0e88c480d8d17873c4e947aac22a0b9095e74f170e209c->enter($__internal_8e75965fe063489b2c0e88c480d8d17873c4e947aac22a0b9095e74f170e209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_0dd52c80892f227e0bdbe90803607bedc43eea3917cd98442da50a2a67423c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd52c80892f227e0bdbe90803607bedc43eea3917cd98442da50a2a67423c38->enter($__internal_0dd52c80892f227e0bdbe90803607bedc43eea3917cd98442da50a2a67423c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_0dd52c80892f227e0bdbe90803607bedc43eea3917cd98442da50a2a67423c38->leave($__internal_0dd52c80892f227e0bdbe90803607bedc43eea3917cd98442da50a2a67423c38_prof);

        
        $__internal_8e75965fe063489b2c0e88c480d8d17873c4e947aac22a0b9095e74f170e209c->leave($__internal_8e75965fe063489b2c0e88c480d8d17873c4e947aac22a0b9095e74f170e209c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
