<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_911943eb8ebcfd1474d732e1624d3cde65464dab24706c787bef6c7baf0886b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911943eb8ebcfd1474d732e1624d3cde65464dab24706c787bef6c7baf0886b5->enter($__internal_911943eb8ebcfd1474d732e1624d3cde65464dab24706c787bef6c7baf0886b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_488622abcb030c7f10e4b99b514e487ea295d7a87d9b9833df52ba8f56251c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488622abcb030c7f10e4b99b514e487ea295d7a87d9b9833df52ba8f56251c1e->enter($__internal_488622abcb030c7f10e4b99b514e487ea295d7a87d9b9833df52ba8f56251c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_911943eb8ebcfd1474d732e1624d3cde65464dab24706c787bef6c7baf0886b5->leave($__internal_911943eb8ebcfd1474d732e1624d3cde65464dab24706c787bef6c7baf0886b5_prof);

        
        $__internal_488622abcb030c7f10e4b99b514e487ea295d7a87d9b9833df52ba8f56251c1e->leave($__internal_488622abcb030c7f10e4b99b514e487ea295d7a87d9b9833df52ba8f56251c1e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25bd38a99c82255dbe22eab2cfe286d5f38575a478424a355c03d692949d3a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bd38a99c82255dbe22eab2cfe286d5f38575a478424a355c03d692949d3a3b->enter($__internal_25bd38a99c82255dbe22eab2cfe286d5f38575a478424a355c03d692949d3a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a6130aa79069cc37b879ca84c8b49ef1130644c8b7590ec8bbfe1a54120a0c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6130aa79069cc37b879ca84c8b49ef1130644c8b7590ec8bbfe1a54120a0c68->enter($__internal_a6130aa79069cc37b879ca84c8b49ef1130644c8b7590ec8bbfe1a54120a0c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a6130aa79069cc37b879ca84c8b49ef1130644c8b7590ec8bbfe1a54120a0c68->leave($__internal_a6130aa79069cc37b879ca84c8b49ef1130644c8b7590ec8bbfe1a54120a0c68_prof);

        
        $__internal_25bd38a99c82255dbe22eab2cfe286d5f38575a478424a355c03d692949d3a3b->leave($__internal_25bd38a99c82255dbe22eab2cfe286d5f38575a478424a355c03d692949d3a3b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dd611fc5e7d8a0486d70a9d99af6e6db44ea6d5945e512639addcc94555d6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd611fc5e7d8a0486d70a9d99af6e6db44ea6d5945e512639addcc94555d6e2->enter($__internal_5dd611fc5e7d8a0486d70a9d99af6e6db44ea6d5945e512639addcc94555d6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d7141cfebf686b11a4f02b719aeb162f2d102d117eabdc7849c17b96aa695a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7141cfebf686b11a4f02b719aeb162f2d102d117eabdc7849c17b96aa695a8->enter($__internal_7d7141cfebf686b11a4f02b719aeb162f2d102d117eabdc7849c17b96aa695a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d7141cfebf686b11a4f02b719aeb162f2d102d117eabdc7849c17b96aa695a8->leave($__internal_7d7141cfebf686b11a4f02b719aeb162f2d102d117eabdc7849c17b96aa695a8_prof);

        
        $__internal_5dd611fc5e7d8a0486d70a9d99af6e6db44ea6d5945e512639addcc94555d6e2->leave($__internal_5dd611fc5e7d8a0486d70a9d99af6e6db44ea6d5945e512639addcc94555d6e2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_897058b85e31e9c83228fd15bbb832da1a3a740e21588616c49e8cf57ea9230b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897058b85e31e9c83228fd15bbb832da1a3a740e21588616c49e8cf57ea9230b->enter($__internal_897058b85e31e9c83228fd15bbb832da1a3a740e21588616c49e8cf57ea9230b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_147713ce124a7c07140ffc9bd3b70ca66db552c3830a2b850d94ed610508980f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147713ce124a7c07140ffc9bd3b70ca66db552c3830a2b850d94ed610508980f->enter($__internal_147713ce124a7c07140ffc9bd3b70ca66db552c3830a2b850d94ed610508980f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_147713ce124a7c07140ffc9bd3b70ca66db552c3830a2b850d94ed610508980f->leave($__internal_147713ce124a7c07140ffc9bd3b70ca66db552c3830a2b850d94ed610508980f_prof);

        
        $__internal_897058b85e31e9c83228fd15bbb832da1a3a740e21588616c49e8cf57ea9230b->leave($__internal_897058b85e31e9c83228fd15bbb832da1a3a740e21588616c49e8cf57ea9230b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
