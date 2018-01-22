<?php

/* FOSCommentBundle:Thread:comment_content.html.twig */
class __TwigTemplate_b077f3b5d88a93a887b397197075c107eb98f621848054dfd7d2b11349491474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment' => array($this, 'block_fos_comment_comment'),
            'fos_comment_comment_metas' => array($this, 'block_fos_comment_comment_metas'),
            'fos_comment_comment_metas_authorline' => array($this, 'block_fos_comment_comment_metas_authorline'),
            'fos_comment_comment_metas_edit' => array($this, 'block_fos_comment_comment_metas_edit'),
            'fos_comment_comment_metas_delete' => array($this, 'block_fos_comment_comment_metas_delete'),
            'fos_comment_comment_metas_voting' => array($this, 'block_fos_comment_comment_metas_voting'),
            'fos_comment_comment_body' => array($this, 'block_fos_comment_comment_body'),
            'fos_comment_comment_children' => array($this, 'block_fos_comment_comment_children'),
            'fos_comment_comment_reply' => array($this, 'block_fos_comment_comment_reply'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62d8ea7dc3b6f32d9bd2a9c931fd8f6276a983b1483388843182dbc45d67882b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d8ea7dc3b6f32d9bd2a9c931fd8f6276a983b1483388843182dbc45d67882b->enter($__internal_62d8ea7dc3b6f32d9bd2a9c931fd8f6276a983b1483388843182dbc45d67882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_content.html.twig"));

        $__internal_2e640eb3705239e29130e5f52143d2cfb71bc491a610da74a2610c77a0a66080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e640eb3705239e29130e5f52143d2cfb71bc491a610da74a2610c77a0a66080->enter($__internal_2e640eb3705239e29130e5f52143d2cfb71bc491a610da74a2610c77a0a66080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_content.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('fos_comment_comment', $context, $blocks);
        
        $__internal_62d8ea7dc3b6f32d9bd2a9c931fd8f6276a983b1483388843182dbc45d67882b->leave($__internal_62d8ea7dc3b6f32d9bd2a9c931fd8f6276a983b1483388843182dbc45d67882b_prof);

        
        $__internal_2e640eb3705239e29130e5f52143d2cfb71bc491a610da74a2610c77a0a66080->leave($__internal_2e640eb3705239e29130e5f52143d2cfb71bc491a610da74a2610c77a0a66080_prof);

    }

    public function block_fos_comment_comment($context, array $blocks = array())
    {
        $__internal_ef94430dc0904f2eca95f26fecfce754e71d7895bd72f80fecf82c8b56b44b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef94430dc0904f2eca95f26fecfce754e71d7895bd72f80fecf82c8b56b44b62->enter($__internal_ef94430dc0904f2eca95f26fecfce754e71d7895bd72f80fecf82c8b56b44b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment"));

        $__internal_38de75629b05201e4e8a8e1a7db8831aa033c3675e46260335a144768630b48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38de75629b05201e4e8a8e1a7db8831aa033c3675e46260335a144768630b48d->enter($__internal_38de75629b05201e4e8a8e1a7db8831aa033c3675e46260335a144768630b48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment"));

        // line 13
        echo "<div id=\"fos_comment_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_show fos_comment_comment_depth_";
        echo twig_escape_filter($this->env, ($context["depth"] ?? $this->getContext($context, "depth")), "html", null, true);
        echo "\" ";
        if ((array_key_exists("parent", $context) &&  !(null === ($context["parent"] ?? $this->getContext($context, "parent"))))) {
            echo "data-parent=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">

    <div class=\"fos_comment_comment_metas\">
        ";
        // line 16
        $this->displayBlock('fos_comment_comment_metas', $context, $blocks);
        // line 56
        echo "    </div>

    <div id=\"fos_comment_comment_body_";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_body\">
        ";
        // line 59
        $this->displayBlock('fos_comment_comment_body', $context, $blocks);
        // line 70
        echo "    </div>

    ";
        // line 72
        $this->displayBlock('fos_comment_comment_children', $context, $blocks);
        // line 93
        echo "
</div>
";
        
        $__internal_38de75629b05201e4e8a8e1a7db8831aa033c3675e46260335a144768630b48d->leave($__internal_38de75629b05201e4e8a8e1a7db8831aa033c3675e46260335a144768630b48d_prof);

        
        $__internal_ef94430dc0904f2eca95f26fecfce754e71d7895bd72f80fecf82c8b56b44b62->leave($__internal_ef94430dc0904f2eca95f26fecfce754e71d7895bd72f80fecf82c8b56b44b62_prof);

    }

    // line 16
    public function block_fos_comment_comment_metas($context, array $blocks = array())
    {
        $__internal_6195bf70a09d3d71779c9fbfddb3c2dc939de2cf5ebc8d612ac8ac1ae5320499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6195bf70a09d3d71779c9fbfddb3c2dc939de2cf5ebc8d612ac8ac1ae5320499->enter($__internal_6195bf70a09d3d71779c9fbfddb3c2dc939de2cf5ebc8d612ac8ac1ae5320499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas"));

        $__internal_1f2ae8191f57d80ea662af6c2372568b855a3c1e6514ed5fc27dc3be019341a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2ae8191f57d80ea662af6c2372568b855a3c1e6514ed5fc27dc3be019341a3->enter($__internal_1f2ae8191f57d80ea662af6c2372568b855a3c1e6514ed5fc27dc3be019341a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas"));

        // line 17
        echo "            ";
        $this->displayBlock('fos_comment_comment_metas_authorline', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('fos_comment_comment_metas_edit', $context, $blocks);
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('fos_comment_comment_metas_delete', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('fos_comment_comment_metas_voting', $context, $blocks);
        // line 55
        echo "        ";
        
        $__internal_1f2ae8191f57d80ea662af6c2372568b855a3c1e6514ed5fc27dc3be019341a3->leave($__internal_1f2ae8191f57d80ea662af6c2372568b855a3c1e6514ed5fc27dc3be019341a3_prof);

        
        $__internal_6195bf70a09d3d71779c9fbfddb3c2dc939de2cf5ebc8d612ac8ac1ae5320499->leave($__internal_6195bf70a09d3d71779c9fbfddb3c2dc939de2cf5ebc8d612ac8ac1ae5320499_prof);

    }

    // line 17
    public function block_fos_comment_comment_metas_authorline($context, array $blocks = array())
    {
        $__internal_e01d81d6cf52b0de3a47dbcae7ddeee66f96eeb1fb4e96c88946cdb4e70e71d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01d81d6cf52b0de3a47dbcae7ddeee66f96eeb1fb4e96c88946cdb4e70e71d8->enter($__internal_e01d81d6cf52b0de3a47dbcae7ddeee66f96eeb1fb4e96c88946cdb4e70e71d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_authorline"));

        $__internal_6231dd808ef18ba6cfac2ca0dae5c10c3310748d75074c9832b1ab70b382a7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6231dd808ef18ba6cfac2ca0dae5c10c3310748d75074c9832b1ab70b382a7d1->enter($__internal_6231dd808ef18ba6cfac2ca0dae5c10c3310748d75074c9832b1ab70b382a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_authorline"));

        // line 18
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_by", array(), "FOSCommentBundle");
        // line 19
        echo "                <span class=\"fos_comment_comment_authorname\">
                    ";
        // line 20
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 21
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 22
            echo "                    ";
        } else {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
            echo "
                    ";
        }
        // line 25
        echo "                </span> - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "createdAt", array())), "html", null, true);
        echo "
            ";
        
        $__internal_6231dd808ef18ba6cfac2ca0dae5c10c3310748d75074c9832b1ab70b382a7d1->leave($__internal_6231dd808ef18ba6cfac2ca0dae5c10c3310748d75074c9832b1ab70b382a7d1_prof);

        
        $__internal_e01d81d6cf52b0de3a47dbcae7ddeee66f96eeb1fb4e96c88946cdb4e70e71d8->leave($__internal_e01d81d6cf52b0de3a47dbcae7ddeee66f96eeb1fb4e96c88946cdb4e70e71d8_prof);

    }

    // line 28
    public function block_fos_comment_comment_metas_edit($context, array $blocks = array())
    {
        $__internal_5acf48cc0011ac9854ec412fd36eec8532954ad28ffdc81fc49a018749173d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5acf48cc0011ac9854ec412fd36eec8532954ad28ffdc81fc49a018749173d63->enter($__internal_5acf48cc0011ac9854ec412fd36eec8532954ad28ffdc81fc49a018749173d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_edit"));

        $__internal_4f09f8972d49b509b14ff8e6a9b07ecc76284653cdd2c39bc24b9f41908301fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f09f8972d49b509b14ff8e6a9b07ecc76284653cdd2c39bc24b9f41908301fe->enter($__internal_4f09f8972d49b509b14ff8e6a9b07ecc76284653cdd2c39bc24b9f41908301fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_edit"));

        // line 29
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canEditComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 30
            echo "                <button data-container=\"#fos_comment_comment_body_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_edit_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()))), "html", null, true);
            echo "\" class=\"fos_comment_comment_edit_show_form\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_edit", array(), "FOSCommentBundle");
            echo "</button>
                ";
        }
        // line 32
        echo "            ";
        
        $__internal_4f09f8972d49b509b14ff8e6a9b07ecc76284653cdd2c39bc24b9f41908301fe->leave($__internal_4f09f8972d49b509b14ff8e6a9b07ecc76284653cdd2c39bc24b9f41908301fe_prof);

        
        $__internal_5acf48cc0011ac9854ec412fd36eec8532954ad28ffdc81fc49a018749173d63->leave($__internal_5acf48cc0011ac9854ec412fd36eec8532954ad28ffdc81fc49a018749173d63_prof);

    }

    // line 34
    public function block_fos_comment_comment_metas_delete($context, array $blocks = array())
    {
        $__internal_9bd5e5ccc4a9f068f149d63028ee1e0f7d338ebac284eb0396e405ca73424cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd5e5ccc4a9f068f149d63028ee1e0f7d338ebac284eb0396e405ca73424cb9->enter($__internal_9bd5e5ccc4a9f068f149d63028ee1e0f7d338ebac284eb0396e405ca73424cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_delete"));

        $__internal_0f3680946abadc16d2d1a9ca8c8c87271dbc6016195a8ce83afe61f9b7cf1bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3680946abadc16d2d1a9ca8c8c87271dbc6016195a8ce83afe61f9b7cf1bfa->enter($__internal_0f3680946abadc16d2d1a9ca8c8c87271dbc6016195a8ce83afe61f9b7cf1bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_delete"));

        // line 35
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canDeleteComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 36
            echo "                    ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
                // line 37
                echo "                        ";
                // line 38
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_VISIBLE"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_undelete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            } else {
                // line 40
                echo "                        ";
                // line 41
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_delete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            }
            // line 43
            echo "                ";
        }
        // line 44
        echo "            ";
        
        $__internal_0f3680946abadc16d2d1a9ca8c8c87271dbc6016195a8ce83afe61f9b7cf1bfa->leave($__internal_0f3680946abadc16d2d1a9ca8c8c87271dbc6016195a8ce83afe61f9b7cf1bfa_prof);

        
        $__internal_9bd5e5ccc4a9f068f149d63028ee1e0f7d338ebac284eb0396e405ca73424cb9->leave($__internal_9bd5e5ccc4a9f068f149d63028ee1e0f7d338ebac284eb0396e405ca73424cb9_prof);

    }

    // line 46
    public function block_fos_comment_comment_metas_voting($context, array $blocks = array())
    {
        $__internal_d3eb0db7ab29931335735b82a00c7146a580895573a0c9c549ca4517a872c76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3eb0db7ab29931335735b82a00c7146a580895573a0c9c549ca4517a872c76f->enter($__internal_d3eb0db7ab29931335735b82a00c7146a580895573a0c9c549ca4517a872c76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_voting"));

        $__internal_bcb18923a600553eea66f94771409b35d3c6b3cce07f6becd99c27265970f91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb18923a600553eea66f94771409b35d3c6b3cce07f6becd99c27265970f91b->enter($__internal_bcb18923a600553eea66f94771409b35d3c6b3cce07f6becd99c27265970f91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_voting"));

        // line 47
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canVote(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 48
            echo "                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => 1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_voteup", array(), "FOSCommentBundle");
            echo "</button>
                        <button data-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" =>  -1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_votedown", array(), "FOSCommentBundle");
            echo "</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\">";
            $this->loadTemplate("FOSCommentBundle:Thread:comment_votes.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 51)->display(array_merge($context, array("commentScore" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "score", array()))));
            echo "</div>
                    </div>
                ";
        }
        // line 54
        echo "            ";
        
        $__internal_bcb18923a600553eea66f94771409b35d3c6b3cce07f6becd99c27265970f91b->leave($__internal_bcb18923a600553eea66f94771409b35d3c6b3cce07f6becd99c27265970f91b_prof);

        
        $__internal_d3eb0db7ab29931335735b82a00c7146a580895573a0c9c549ca4517a872c76f->leave($__internal_d3eb0db7ab29931335735b82a00c7146a580895573a0c9c549ca4517a872c76f_prof);

    }

    // line 59
    public function block_fos_comment_comment_body($context, array $blocks = array())
    {
        $__internal_94a8ab1bf7fae47816214c6683235f687e4259344ade19d8a217c57b88120417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a8ab1bf7fae47816214c6683235f687e4259344ade19d8a217c57b88120417->enter($__internal_94a8ab1bf7fae47816214c6683235f687e4259344ade19d8a217c57b88120417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_body"));

        $__internal_8deb348a5775e45d500fe1f8e2eef7ecd2c4c3ec1e2139d54c3eafdee72b5cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8deb348a5775e45d500fe1f8e2eef7ecd2c4c3ec1e2139d54c3eafdee72b5cdc->enter($__internal_8deb348a5775e45d500fe1f8e2eef7ecd2c4c3ec1e2139d54c3eafdee72b5cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_body"));

        // line 60
        echo "            ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 61
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 62
            echo "            ";
        } else {
            // line 63
            echo "                ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isRawComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
                // line 64
                echo "                    ";
                echo $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "rawBody", array());
                echo "
                ";
            } else {
                // line 66
                echo "                    ";
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "body", array()), "html", null, true));
                echo "
                ";
            }
            // line 68
            echo "            ";
        }
        // line 69
        echo "        ";
        
        $__internal_8deb348a5775e45d500fe1f8e2eef7ecd2c4c3ec1e2139d54c3eafdee72b5cdc->leave($__internal_8deb348a5775e45d500fe1f8e2eef7ecd2c4c3ec1e2139d54c3eafdee72b5cdc_prof);

        
        $__internal_94a8ab1bf7fae47816214c6683235f687e4259344ade19d8a217c57b88120417->leave($__internal_94a8ab1bf7fae47816214c6683235f687e4259344ade19d8a217c57b88120417_prof);

    }

    // line 72
    public function block_fos_comment_comment_children($context, array $blocks = array())
    {
        $__internal_577623cfd1bec7bc311ce097ba26365902b7d0f09d9b43c632fdd123667e7e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577623cfd1bec7bc311ce097ba26365902b7d0f09d9b43c632fdd123667e7e98->enter($__internal_577623cfd1bec7bc311ce097ba26365902b7d0f09d9b43c632fdd123667e7e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_children"));

        $__internal_d9ff522d04ff83a4115d9f4eb53ba808484d9efbd0706b9a49d708eb29c6e5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ff522d04ff83a4115d9f4eb53ba808484d9efbd0706b9a49d708eb29c6e5bd->enter($__internal_d9ff522d04ff83a4115d9f4eb53ba808484d9efbd0706b9a49d708eb29c6e5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_children"));

        // line 73
        echo "        ";
        if ( !(($context["view"] ?? $this->getContext($context, "view")) === "flat")) {
            // line 74
            echo "            ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
                // line 75
                echo "                <div class=\"fos_comment_comment_reply\">
                    ";
                // line 76
                $this->displayBlock('fos_comment_comment_reply', $context, $blocks);
                // line 79
                echo "                </div>
            ";
            }
            // line 81
            echo "
            <div class=\"fos_comment_comment_replies\">

                ";
            // line 84
            if (array_key_exists("children", $context)) {
                // line 85
                echo "                    ";
                $this->loadTemplate("FOSCommentBundle:Thread:comments.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 85)->display(array_merge($context, array("comments" => ($context["children"] ?? $this->getContext($context, "children")), "depth" => (($context["depth"] ?? $this->getContext($context, "depth")) + 1), "parent" => ($context["comment"] ?? $this->getContext($context, "comment")), "view" => ($context["view"] ?? $this->getContext($context, "view")))));
                // line 86
                echo "                ";
            }
            // line 87
            echo "
            </div>
        ";
        } elseif (((        // line 89
($context["view"] ?? $this->getContext($context, "view")) === "flat") && array_key_exists("children", $context))) {
            // line 90
            echo "            ";
            $this->loadTemplate("FOSCommentBundle:Thread:comments.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 90)->display(array_merge($context, array("comments" => ($context["children"] ?? $this->getContext($context, "children")), "depth" => (($context["depth"] ?? $this->getContext($context, "depth")) + 1), "parent" => ($context["comment"] ?? $this->getContext($context, "comment")), "view" => ($context["view"] ?? $this->getContext($context, "view")))));
            // line 91
            echo "        ";
        }
        // line 92
        echo "    ";
        
        $__internal_d9ff522d04ff83a4115d9f4eb53ba808484d9efbd0706b9a49d708eb29c6e5bd->leave($__internal_d9ff522d04ff83a4115d9f4eb53ba808484d9efbd0706b9a49d708eb29c6e5bd_prof);

        
        $__internal_577623cfd1bec7bc311ce097ba26365902b7d0f09d9b43c632fdd123667e7e98->leave($__internal_577623cfd1bec7bc311ce097ba26365902b7d0f09d9b43c632fdd123667e7e98_prof);

    }

    // line 76
    public function block_fos_comment_comment_reply($context, array $blocks = array())
    {
        $__internal_4a2af5df7e408d3659010483badf88d36c9599a19b9071ebf925efc1c00682cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2af5df7e408d3659010483badf88d36c9599a19b9071ebf925efc1c00682cb->enter($__internal_4a2af5df7e408d3659010483badf88d36c9599a19b9071ebf925efc1c00682cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_reply"));

        $__internal_39925b3274c9d992610f644b5fc27c9b50bb813f272663ae6cc12f38a25570cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39925b3274c9d992610f644b5fc27c9b50bb813f272663ae6cc12f38a25570cd->enter($__internal_39925b3274c9d992610f644b5fc27c9b50bb813f272663ae6cc12f38a25570cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_reply"));

        // line 77
        echo "                        <button data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()))), "html", null, true);
        echo "\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_reply_show_form\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_reply", array(), "FOSCommentBundle");
        echo "</button>
                    ";
        
        $__internal_39925b3274c9d992610f644b5fc27c9b50bb813f272663ae6cc12f38a25570cd->leave($__internal_39925b3274c9d992610f644b5fc27c9b50bb813f272663ae6cc12f38a25570cd_prof);

        
        $__internal_4a2af5df7e408d3659010483badf88d36c9599a19b9071ebf925efc1c00682cb->leave($__internal_4a2af5df7e408d3659010483badf88d36c9599a19b9071ebf925efc1c00682cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  418 => 77,  409 => 76,  399 => 92,  396 => 91,  393 => 90,  391 => 89,  387 => 87,  384 => 86,  381 => 85,  379 => 84,  374 => 81,  370 => 79,  368 => 76,  365 => 75,  362 => 74,  359 => 73,  350 => 72,  340 => 69,  337 => 68,  331 => 66,  325 => 64,  322 => 63,  319 => 62,  316 => 61,  313 => 60,  304 => 59,  294 => 54,  286 => 51,  280 => 50,  274 => 49,  271 => 48,  268 => 47,  259 => 46,  249 => 44,  246 => 43,  238 => 41,  236 => 40,  228 => 38,  226 => 37,  223 => 36,  220 => 35,  211 => 34,  201 => 32,  191 => 30,  188 => 29,  179 => 28,  166 => 25,  160 => 23,  157 => 22,  154 => 21,  152 => 20,  149 => 19,  146 => 18,  137 => 17,  127 => 55,  125 => 46,  122 => 45,  120 => 34,  117 => 33,  115 => 28,  112 => 27,  109 => 17,  100 => 16,  88 => 93,  86 => 72,  82 => 70,  80 => 59,  76 => 58,  72 => 56,  70 => 16,  55 => 13,  37 => 12,  34 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

{% block fos_comment_comment %}
<div id=\"fos_comment_{{ comment.id }}\" class=\"fos_comment_comment_show fos_comment_comment_depth_{{ depth }}\" {% if parent is defined and parent is not null %}data-parent=\"{{ parent.id }}\"{% endif %}>

    <div class=\"fos_comment_comment_metas\">
        {% block fos_comment_comment_metas %}
            {% block fos_comment_comment_metas_authorline %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_show_by{% endtrans %}
                <span class=\"fos_comment_comment_authorname\">
                    {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}
                    {% else %}
                        {{ comment.authorName }}
                    {% endif %}
                </span> - {{ comment.createdAt|date }}
            {% endblock fos_comment_comment_metas_authorline %}

            {% block fos_comment_comment_metas_edit %}
                {% if fos_comment_can_edit_comment(comment) %}
                <button data-container=\"#fos_comment_comment_body_{{ comment.id }}\" data-url=\"{{ url(\"fos_comment_edit_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id}) }}\" class=\"fos_comment_comment_edit_show_form\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit{% endtrans %}</button>
                {% endif %}
            {% endblock fos_comment_comment_metas_edit %}

            {% block fos_comment_comment_metas_delete %}
                {% if fos_comment_can_delete_comment(comment) %}
                    {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                        {# undelete #}
                        <button data-url=\"{{ url(\"fos_comment_remove_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_VISIBLE') }) }}\" class=\"fos_comment_comment_remove\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_undelete{% endtrans %}</button>
                    {% else %}
                        {# delete #}
                        <button data-url=\"{{ url(\"fos_comment_remove_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\":  constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')}) }}\" class=\"fos_comment_comment_remove\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_delete{% endtrans %}</button>
                    {% endif %}
                {% endif %}
            {% endblock fos_comment_comment_metas_delete %}

            {% block fos_comment_comment_metas_voting %}
                {% if fos_comment_can_vote(comment) %}
                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"{{ url(\"fos_comment_new_thread_comment_votes\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": 1}) }}\" class=\"fos_comment_comment_vote\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_voteup{% endtrans %}</button>
                        <button data-url=\"{{ url(\"fos_comment_new_thread_comment_votes\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": -1}) }}\" class=\"fos_comment_comment_vote\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_votedown{% endtrans %}</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_{{ comment.id }}\">{% include \"FOSCommentBundle:Thread:comment_votes.html.twig\" with { 'commentScore': comment.score } %}</div>
                    </div>
                {% endif %}
            {% endblock fos_comment_comment_metas_voting %}
        {% endblock fos_comment_comment_metas %}
    </div>

    <div id=\"fos_comment_comment_body_{{ comment.id }}\" class=\"fos_comment_comment_body\">
        {% block fos_comment_comment_body %}
            {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}
            {% else %}
                {% if comment is fos_comment_raw %}
                    {{ comment.rawBody | raw }}
                {% else %}
                    {{ comment.body | nl2br }}
                {% endif %}
            {% endif %}
        {% endblock fos_comment_comment_body %}
    </div>

    {% block fos_comment_comment_children %}
        {% if view is not same as('flat') %}
            {% if fos_comment_can_comment(comment) %}
                <div class=\"fos_comment_comment_reply\">
                    {% block fos_comment_comment_reply %}
                        <button data-url=\"{{ url('fos_comment_new_thread_comments', {\"id\": comment.thread.id}) }}\" data-name=\"{{ comment.authorName }}\" data-parent-id=\"{{ comment.id }}\" class=\"fos_comment_comment_reply_show_form\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_reply{% endtrans %}</button>
                    {% endblock fos_comment_comment_reply %}
                </div>
            {% endif %}

            <div class=\"fos_comment_comment_replies\">

                {% if children is defined %}
                    {% include \"FOSCommentBundle:Thread:comments.html.twig\" with { \"comments\": children, \"depth\": depth + 1, \"parent\": comment, \"view\": view } %}
                {% endif %}

            </div>
        {% elseif view is same as('flat') and children is defined %}
            {% include \"FOSCommentBundle:Thread:comments.html.twig\" with { \"comments\": children, \"depth\": depth + 1, \"parent\": comment, \"view\": view } %}
        {% endif %}
    {% endblock fos_comment_comment_children %}

</div>
{% endblock fos_comment_comment %}
", "FOSCommentBundle:Thread:comment_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_content.html.twig");
    }
}
