<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3241ed8c2b58e6d15d274700ba8c646cc972a8e45709ce263774ecc6f3a78416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15874ba6efdfc29d8d7e9273e1b48c438191529aec656a1168488307fb635d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15874ba6efdfc29d8d7e9273e1b48c438191529aec656a1168488307fb635d63->enter($__internal_15874ba6efdfc29d8d7e9273e1b48c438191529aec656a1168488307fb635d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_63687fe482930f75e25722b8544813a2ccd8c06d13dbc02bcf01fce3985b80ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63687fe482930f75e25722b8544813a2ccd8c06d13dbc02bcf01fce3985b80ce->enter($__internal_63687fe482930f75e25722b8544813a2ccd8c06d13dbc02bcf01fce3985b80ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15874ba6efdfc29d8d7e9273e1b48c438191529aec656a1168488307fb635d63->leave($__internal_15874ba6efdfc29d8d7e9273e1b48c438191529aec656a1168488307fb635d63_prof);

        
        $__internal_63687fe482930f75e25722b8544813a2ccd8c06d13dbc02bcf01fce3985b80ce->leave($__internal_63687fe482930f75e25722b8544813a2ccd8c06d13dbc02bcf01fce3985b80ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4151d3e8c2cab88dc12d5042bd836071f66faa2faa4baa1b7467aca60d32273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4151d3e8c2cab88dc12d5042bd836071f66faa2faa4baa1b7467aca60d32273->enter($__internal_f4151d3e8c2cab88dc12d5042bd836071f66faa2faa4baa1b7467aca60d32273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_729a8f8b851cb825e34cca00967580ba865438cf6eb8c54699491b5770fbf3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729a8f8b851cb825e34cca00967580ba865438cf6eb8c54699491b5770fbf3f3->enter($__internal_729a8f8b851cb825e34cca00967580ba865438cf6eb8c54699491b5770fbf3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_729a8f8b851cb825e34cca00967580ba865438cf6eb8c54699491b5770fbf3f3->leave($__internal_729a8f8b851cb825e34cca00967580ba865438cf6eb8c54699491b5770fbf3f3_prof);

        
        $__internal_f4151d3e8c2cab88dc12d5042bd836071f66faa2faa4baa1b7467aca60d32273->leave($__internal_f4151d3e8c2cab88dc12d5042bd836071f66faa2faa4baa1b7467aca60d32273_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e10bfaa8c8f8386bc3ca3d5fad326b0a0571c0746710999294b37d768c6875e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10bfaa8c8f8386bc3ca3d5fad326b0a0571c0746710999294b37d768c6875e5->enter($__internal_e10bfaa8c8f8386bc3ca3d5fad326b0a0571c0746710999294b37d768c6875e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ef1959012547fc0765ef3ac6fc1829ab91db63a2312faea4ddf811b02fb6ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef1959012547fc0765ef3ac6fc1829ab91db63a2312faea4ddf811b02fb6ff6->enter($__internal_8ef1959012547fc0765ef3ac6fc1829ab91db63a2312faea4ddf811b02fb6ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8ef1959012547fc0765ef3ac6fc1829ab91db63a2312faea4ddf811b02fb6ff6->leave($__internal_8ef1959012547fc0765ef3ac6fc1829ab91db63a2312faea4ddf811b02fb6ff6_prof);

        
        $__internal_e10bfaa8c8f8386bc3ca3d5fad326b0a0571c0746710999294b37d768c6875e5->leave($__internal_e10bfaa8c8f8386bc3ca3d5fad326b0a0571c0746710999294b37d768c6875e5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ff31fa5d62f4b5b237ae906817d36a247c4fedc945949582492df70b206f525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff31fa5d62f4b5b237ae906817d36a247c4fedc945949582492df70b206f525->enter($__internal_9ff31fa5d62f4b5b237ae906817d36a247c4fedc945949582492df70b206f525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bec304093cd94d528fccee7f09c750f0d874771214d457f17cf00e2f9d28e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bec304093cd94d528fccee7f09c750f0d874771214d457f17cf00e2f9d28e9e->enter($__internal_2bec304093cd94d528fccee7f09c750f0d874771214d457f17cf00e2f9d28e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_2bec304093cd94d528fccee7f09c750f0d874771214d457f17cf00e2f9d28e9e->leave($__internal_2bec304093cd94d528fccee7f09c750f0d874771214d457f17cf00e2f9d28e9e_prof);

        
        $__internal_9ff31fa5d62f4b5b237ae906817d36a247c4fedc945949582492df70b206f525->leave($__internal_9ff31fa5d62f4b5b237ae906817d36a247c4fedc945949582492df70b206f525_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/vagrant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
