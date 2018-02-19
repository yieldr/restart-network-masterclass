<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5952505e7385fb8575bd61292adb2bf74b5ddff0da9d94a35f16dcc83f8f145f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bf4441984ddbbdf2e77f3e7bbaf0d3be3980ad9fcc70975bb6c9c152bfa9bd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4441984ddbbdf2e77f3e7bbaf0d3be3980ad9fcc70975bb6c9c152bfa9bd6d->enter($__internal_bf4441984ddbbdf2e77f3e7bbaf0d3be3980ad9fcc70975bb6c9c152bfa9bd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_973c13f04e2bb10862a8f505b2638b3aac66dc709ed6cc28a6fd2e804e7cc17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973c13f04e2bb10862a8f505b2638b3aac66dc709ed6cc28a6fd2e804e7cc17b->enter($__internal_973c13f04e2bb10862a8f505b2638b3aac66dc709ed6cc28a6fd2e804e7cc17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf4441984ddbbdf2e77f3e7bbaf0d3be3980ad9fcc70975bb6c9c152bfa9bd6d->leave($__internal_bf4441984ddbbdf2e77f3e7bbaf0d3be3980ad9fcc70975bb6c9c152bfa9bd6d_prof);

        
        $__internal_973c13f04e2bb10862a8f505b2638b3aac66dc709ed6cc28a6fd2e804e7cc17b->leave($__internal_973c13f04e2bb10862a8f505b2638b3aac66dc709ed6cc28a6fd2e804e7cc17b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed0576402768d2fcc27db8b2b11fd1a6ac889757b9559845f7a004a486d3cc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0576402768d2fcc27db8b2b11fd1a6ac889757b9559845f7a004a486d3cc91->enter($__internal_ed0576402768d2fcc27db8b2b11fd1a6ac889757b9559845f7a004a486d3cc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eeb2dd544cf1cf29cf3b07aead9715c45c644dea80f80db440f87a6ff7a04a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb2dd544cf1cf29cf3b07aead9715c45c644dea80f80db440f87a6ff7a04a66->enter($__internal_eeb2dd544cf1cf29cf3b07aead9715c45c644dea80f80db440f87a6ff7a04a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eeb2dd544cf1cf29cf3b07aead9715c45c644dea80f80db440f87a6ff7a04a66->leave($__internal_eeb2dd544cf1cf29cf3b07aead9715c45c644dea80f80db440f87a6ff7a04a66_prof);

        
        $__internal_ed0576402768d2fcc27db8b2b11fd1a6ac889757b9559845f7a004a486d3cc91->leave($__internal_ed0576402768d2fcc27db8b2b11fd1a6ac889757b9559845f7a004a486d3cc91_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54571641a613b693976052ce0492b22bf2783c2958259bc6c0beca27e111a79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54571641a613b693976052ce0492b22bf2783c2958259bc6c0beca27e111a79a->enter($__internal_54571641a613b693976052ce0492b22bf2783c2958259bc6c0beca27e111a79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d0ff4a6d25020a3000843ef1220cfbd80863f776dc085038d5b45a8e38cf826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0ff4a6d25020a3000843ef1220cfbd80863f776dc085038d5b45a8e38cf826->enter($__internal_5d0ff4a6d25020a3000843ef1220cfbd80863f776dc085038d5b45a8e38cf826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d0ff4a6d25020a3000843ef1220cfbd80863f776dc085038d5b45a8e38cf826->leave($__internal_5d0ff4a6d25020a3000843ef1220cfbd80863f776dc085038d5b45a8e38cf826_prof);

        
        $__internal_54571641a613b693976052ce0492b22bf2783c2958259bc6c0beca27e111a79a->leave($__internal_54571641a613b693976052ce0492b22bf2783c2958259bc6c0beca27e111a79a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69cbafe33d59cc7dd12dd870325aa8571de947a09eebcbe22527b0ac40cf6b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cbafe33d59cc7dd12dd870325aa8571de947a09eebcbe22527b0ac40cf6b31->enter($__internal_69cbafe33d59cc7dd12dd870325aa8571de947a09eebcbe22527b0ac40cf6b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3acea3d293e4f2032a8fd02d421d78494ec52fc3bbd8623e569b39bb74f1ce29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acea3d293e4f2032a8fd02d421d78494ec52fc3bbd8623e569b39bb74f1ce29->enter($__internal_3acea3d293e4f2032a8fd02d421d78494ec52fc3bbd8623e569b39bb74f1ce29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3acea3d293e4f2032a8fd02d421d78494ec52fc3bbd8623e569b39bb74f1ce29->leave($__internal_3acea3d293e4f2032a8fd02d421d78494ec52fc3bbd8623e569b39bb74f1ce29_prof);

        
        $__internal_69cbafe33d59cc7dd12dd870325aa8571de947a09eebcbe22527b0ac40cf6b31->leave($__internal_69cbafe33d59cc7dd12dd870325aa8571de947a09eebcbe22527b0ac40cf6b31_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/vagrant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
