<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0b78b0693ea1faf736786164a5063dd7b560f59a06b01b08edba885a6f316f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_331d66ea93a33666eedac71ebb76c1feb41d6d13ecd12451e39e5f12d2572b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331d66ea93a33666eedac71ebb76c1feb41d6d13ecd12451e39e5f12d2572b2e->enter($__internal_331d66ea93a33666eedac71ebb76c1feb41d6d13ecd12451e39e5f12d2572b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9ac398765b07a3d4145894c2823f3cad86b7585d1ded6f475bd1b63734e123e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac398765b07a3d4145894c2823f3cad86b7585d1ded6f475bd1b63734e123e8->enter($__internal_9ac398765b07a3d4145894c2823f3cad86b7585d1ded6f475bd1b63734e123e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_331d66ea93a33666eedac71ebb76c1feb41d6d13ecd12451e39e5f12d2572b2e->leave($__internal_331d66ea93a33666eedac71ebb76c1feb41d6d13ecd12451e39e5f12d2572b2e_prof);

        
        $__internal_9ac398765b07a3d4145894c2823f3cad86b7585d1ded6f475bd1b63734e123e8->leave($__internal_9ac398765b07a3d4145894c2823f3cad86b7585d1ded6f475bd1b63734e123e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_121fda4f190c5d89b1084fb4a0f59134e0873a4b2ea86d4863fd0afa43ffe796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121fda4f190c5d89b1084fb4a0f59134e0873a4b2ea86d4863fd0afa43ffe796->enter($__internal_121fda4f190c5d89b1084fb4a0f59134e0873a4b2ea86d4863fd0afa43ffe796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_652571004a817e92556d2b6d0380eea498f748953f8fe1d4f5abcaad95e3d6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652571004a817e92556d2b6d0380eea498f748953f8fe1d4f5abcaad95e3d6f5->enter($__internal_652571004a817e92556d2b6d0380eea498f748953f8fe1d4f5abcaad95e3d6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_652571004a817e92556d2b6d0380eea498f748953f8fe1d4f5abcaad95e3d6f5->leave($__internal_652571004a817e92556d2b6d0380eea498f748953f8fe1d4f5abcaad95e3d6f5_prof);

        
        $__internal_121fda4f190c5d89b1084fb4a0f59134e0873a4b2ea86d4863fd0afa43ffe796->leave($__internal_121fda4f190c5d89b1084fb4a0f59134e0873a4b2ea86d4863fd0afa43ffe796_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0646f51d98174ad46bae3707403cfc997b845930e3c0eb3f6b833827de8c8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0646f51d98174ad46bae3707403cfc997b845930e3c0eb3f6b833827de8c8af->enter($__internal_f0646f51d98174ad46bae3707403cfc997b845930e3c0eb3f6b833827de8c8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f64332eb65f67a8497c0b54517c8dd3751a93caad8c31331da26aba6c58aedfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64332eb65f67a8497c0b54517c8dd3751a93caad8c31331da26aba6c58aedfc->enter($__internal_f64332eb65f67a8497c0b54517c8dd3751a93caad8c31331da26aba6c58aedfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f64332eb65f67a8497c0b54517c8dd3751a93caad8c31331da26aba6c58aedfc->leave($__internal_f64332eb65f67a8497c0b54517c8dd3751a93caad8c31331da26aba6c58aedfc_prof);

        
        $__internal_f0646f51d98174ad46bae3707403cfc997b845930e3c0eb3f6b833827de8c8af->leave($__internal_f0646f51d98174ad46bae3707403cfc997b845930e3c0eb3f6b833827de8c8af_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f88ff2eedd6840cd456a116f7cfac52b6fce5333c010b46f369f54552b072ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f88ff2eedd6840cd456a116f7cfac52b6fce5333c010b46f369f54552b072ef->enter($__internal_3f88ff2eedd6840cd456a116f7cfac52b6fce5333c010b46f369f54552b072ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d067a8916fc31bc1ade65e6105cfadc2abd9d6bac34241e7239cea702b1ad8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d067a8916fc31bc1ade65e6105cfadc2abd9d6bac34241e7239cea702b1ad8d->enter($__internal_7d067a8916fc31bc1ade65e6105cfadc2abd9d6bac34241e7239cea702b1ad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d067a8916fc31bc1ade65e6105cfadc2abd9d6bac34241e7239cea702b1ad8d->leave($__internal_7d067a8916fc31bc1ade65e6105cfadc2abd9d6bac34241e7239cea702b1ad8d_prof);

        
        $__internal_3f88ff2eedd6840cd456a116f7cfac52b6fce5333c010b46f369f54552b072ef->leave($__internal_3f88ff2eedd6840cd456a116f7cfac52b6fce5333c010b46f369f54552b072ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/dariopenassabin/Projects/restart-network-masterclass/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
