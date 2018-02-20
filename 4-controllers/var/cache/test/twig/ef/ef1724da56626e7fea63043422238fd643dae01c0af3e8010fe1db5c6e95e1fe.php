<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4ec9626983570f6e0871a4170922ec85d8ca3981cf1d3cae77286f45f733c116 extends Twig_Template
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
        $__internal_dcc4aeb4dfcbba7a023772174a7837c30b2c0b3c7d3bf5a0c463212ee072ee64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc4aeb4dfcbba7a023772174a7837c30b2c0b3c7d3bf5a0c463212ee072ee64->enter($__internal_dcc4aeb4dfcbba7a023772174a7837c30b2c0b3c7d3bf5a0c463212ee072ee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_394a5e84b458fba4506404a90627a05c245b9f1184d983e8dfece866c72874ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394a5e84b458fba4506404a90627a05c245b9f1184d983e8dfece866c72874ab->enter($__internal_394a5e84b458fba4506404a90627a05c245b9f1184d983e8dfece866c72874ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc4aeb4dfcbba7a023772174a7837c30b2c0b3c7d3bf5a0c463212ee072ee64->leave($__internal_dcc4aeb4dfcbba7a023772174a7837c30b2c0b3c7d3bf5a0c463212ee072ee64_prof);

        
        $__internal_394a5e84b458fba4506404a90627a05c245b9f1184d983e8dfece866c72874ab->leave($__internal_394a5e84b458fba4506404a90627a05c245b9f1184d983e8dfece866c72874ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c4678976c66a3d5b3971db1b3cf50e02cd73e57024906e95f8d254e76c185c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4678976c66a3d5b3971db1b3cf50e02cd73e57024906e95f8d254e76c185c3->enter($__internal_5c4678976c66a3d5b3971db1b3cf50e02cd73e57024906e95f8d254e76c185c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b35eefa939448d6a672e82babd45b2d6082699d663d63b9a89bd998d674c4b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35eefa939448d6a672e82babd45b2d6082699d663d63b9a89bd998d674c4b1c->enter($__internal_b35eefa939448d6a672e82babd45b2d6082699d663d63b9a89bd998d674c4b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b35eefa939448d6a672e82babd45b2d6082699d663d63b9a89bd998d674c4b1c->leave($__internal_b35eefa939448d6a672e82babd45b2d6082699d663d63b9a89bd998d674c4b1c_prof);

        
        $__internal_5c4678976c66a3d5b3971db1b3cf50e02cd73e57024906e95f8d254e76c185c3->leave($__internal_5c4678976c66a3d5b3971db1b3cf50e02cd73e57024906e95f8d254e76c185c3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_721f0ee1d94886944eb1431a092f1ebc23fda3c74d5ac764a9a88678f7cb8e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721f0ee1d94886944eb1431a092f1ebc23fda3c74d5ac764a9a88678f7cb8e3e->enter($__internal_721f0ee1d94886944eb1431a092f1ebc23fda3c74d5ac764a9a88678f7cb8e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5664373fe4b22c8dc846105b2a9814142e9024746ca28de17c29c7eba659adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5664373fe4b22c8dc846105b2a9814142e9024746ca28de17c29c7eba659adb->enter($__internal_b5664373fe4b22c8dc846105b2a9814142e9024746ca28de17c29c7eba659adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b5664373fe4b22c8dc846105b2a9814142e9024746ca28de17c29c7eba659adb->leave($__internal_b5664373fe4b22c8dc846105b2a9814142e9024746ca28de17c29c7eba659adb_prof);

        
        $__internal_721f0ee1d94886944eb1431a092f1ebc23fda3c74d5ac764a9a88678f7cb8e3e->leave($__internal_721f0ee1d94886944eb1431a092f1ebc23fda3c74d5ac764a9a88678f7cb8e3e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3dcc3ae409f713b3888ecd568cd6ce52088541f1326e36e6333fc868b9ba337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3dcc3ae409f713b3888ecd568cd6ce52088541f1326e36e6333fc868b9ba337->enter($__internal_f3dcc3ae409f713b3888ecd568cd6ce52088541f1326e36e6333fc868b9ba337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48bab358330c36477ce1989dd6b03a6c29f5c1d6b22edd8fdf5537c5c09a1534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bab358330c36477ce1989dd6b03a6c29f5c1d6b22edd8fdf5537c5c09a1534->enter($__internal_48bab358330c36477ce1989dd6b03a6c29f5c1d6b22edd8fdf5537c5c09a1534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_48bab358330c36477ce1989dd6b03a6c29f5c1d6b22edd8fdf5537c5c09a1534->leave($__internal_48bab358330c36477ce1989dd6b03a6c29f5c1d6b22edd8fdf5537c5c09a1534_prof);

        
        $__internal_f3dcc3ae409f713b3888ecd568cd6ce52088541f1326e36e6333fc868b9ba337->leave($__internal_f3dcc3ae409f713b3888ecd568cd6ce52088541f1326e36e6333fc868b9ba337_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/dariopenassabin/Projects/restart-network-masterclass/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
