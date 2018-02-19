<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_96a31830c0abeb266fc6e60d655468a764abc1540f27e12e651d1836392171dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23b336ea914e3eb447abc312ce3b1cc7283908e467d1cbedf5fa86b8b75dfad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b336ea914e3eb447abc312ce3b1cc7283908e467d1cbedf5fa86b8b75dfad1->enter($__internal_23b336ea914e3eb447abc312ce3b1cc7283908e467d1cbedf5fa86b8b75dfad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bd2d58649444a69dda0cecc3695eba9d694fdf1bacdd64ae3fbcdf4a1e455390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2d58649444a69dda0cecc3695eba9d694fdf1bacdd64ae3fbcdf4a1e455390->enter($__internal_bd2d58649444a69dda0cecc3695eba9d694fdf1bacdd64ae3fbcdf4a1e455390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b336ea914e3eb447abc312ce3b1cc7283908e467d1cbedf5fa86b8b75dfad1->leave($__internal_23b336ea914e3eb447abc312ce3b1cc7283908e467d1cbedf5fa86b8b75dfad1_prof);

        
        $__internal_bd2d58649444a69dda0cecc3695eba9d694fdf1bacdd64ae3fbcdf4a1e455390->leave($__internal_bd2d58649444a69dda0cecc3695eba9d694fdf1bacdd64ae3fbcdf4a1e455390_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29559e2a43288242ea43bfef27388979ff7cfbdb969625c722c983a6788523ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29559e2a43288242ea43bfef27388979ff7cfbdb969625c722c983a6788523ab->enter($__internal_29559e2a43288242ea43bfef27388979ff7cfbdb969625c722c983a6788523ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f27b38a23d797e8e3e688bb9d0c8958f53f8a83fdf797dd4efefae9cfce7c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f27b38a23d797e8e3e688bb9d0c8958f53f8a83fdf797dd4efefae9cfce7c80->enter($__internal_3f27b38a23d797e8e3e688bb9d0c8958f53f8a83fdf797dd4efefae9cfce7c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3f27b38a23d797e8e3e688bb9d0c8958f53f8a83fdf797dd4efefae9cfce7c80->leave($__internal_3f27b38a23d797e8e3e688bb9d0c8958f53f8a83fdf797dd4efefae9cfce7c80_prof);

        
        $__internal_29559e2a43288242ea43bfef27388979ff7cfbdb969625c722c983a6788523ab->leave($__internal_29559e2a43288242ea43bfef27388979ff7cfbdb969625c722c983a6788523ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/vagrant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
