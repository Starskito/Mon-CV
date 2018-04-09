<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_9b4687affe556c5047a3a85fe0e0ae319da1c220880659013db00e5f56bfe115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4687affe556c5047a3a85fe0e0ae319da1c220880659013db00e5f56bfe115->enter($__internal_9b4687affe556c5047a3a85fe0e0ae319da1c220880659013db00e5f56bfe115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f3e3e91a1a10203aabf9ba06125bcbef5e64a58fb965d52fac9b172aeacc454a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e3e91a1a10203aabf9ba06125bcbef5e64a58fb965d52fac9b172aeacc454a->enter($__internal_f3e3e91a1a10203aabf9ba06125bcbef5e64a58fb965d52fac9b172aeacc454a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9b4687affe556c5047a3a85fe0e0ae319da1c220880659013db00e5f56bfe115->leave($__internal_9b4687affe556c5047a3a85fe0e0ae319da1c220880659013db00e5f56bfe115_prof);

        
        $__internal_f3e3e91a1a10203aabf9ba06125bcbef5e64a58fb965d52fac9b172aeacc454a->leave($__internal_f3e3e91a1a10203aabf9ba06125bcbef5e64a58fb965d52fac9b172aeacc454a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbaf3be59946a05f84ea201a35e14b9b91e69ca4c3a0b7a3a0e8bcfd8f7414e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbaf3be59946a05f84ea201a35e14b9b91e69ca4c3a0b7a3a0e8bcfd8f7414e1->enter($__internal_cbaf3be59946a05f84ea201a35e14b9b91e69ca4c3a0b7a3a0e8bcfd8f7414e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6cff098683c9bd96ec7faa8ef8627365195e69ad07189612ed76fbd4da91b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cff098683c9bd96ec7faa8ef8627365195e69ad07189612ed76fbd4da91b02->enter($__internal_e6cff098683c9bd96ec7faa8ef8627365195e69ad07189612ed76fbd4da91b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e6cff098683c9bd96ec7faa8ef8627365195e69ad07189612ed76fbd4da91b02->leave($__internal_e6cff098683c9bd96ec7faa8ef8627365195e69ad07189612ed76fbd4da91b02_prof);

        
        $__internal_cbaf3be59946a05f84ea201a35e14b9b91e69ca4c3a0b7a3a0e8bcfd8f7414e1->leave($__internal_cbaf3be59946a05f84ea201a35e14b9b91e69ca4c3a0b7a3a0e8bcfd8f7414e1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_be18ea8149c2b8a9dfa747abea4fe4232aeac69f4b2963279dd04ef232a94708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be18ea8149c2b8a9dfa747abea4fe4232aeac69f4b2963279dd04ef232a94708->enter($__internal_be18ea8149c2b8a9dfa747abea4fe4232aeac69f4b2963279dd04ef232a94708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6bd958ef5c1006de3a48f8b03abc4f87128dbd2b84b9dc40b4e420ebb5b1fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bd958ef5c1006de3a48f8b03abc4f87128dbd2b84b9dc40b4e420ebb5b1fc9->enter($__internal_d6bd958ef5c1006de3a48f8b03abc4f87128dbd2b84b9dc40b4e420ebb5b1fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d6bd958ef5c1006de3a48f8b03abc4f87128dbd2b84b9dc40b4e420ebb5b1fc9->leave($__internal_d6bd958ef5c1006de3a48f8b03abc4f87128dbd2b84b9dc40b4e420ebb5b1fc9_prof);

        
        $__internal_be18ea8149c2b8a9dfa747abea4fe4232aeac69f4b2963279dd04ef232a94708->leave($__internal_be18ea8149c2b8a9dfa747abea4fe4232aeac69f4b2963279dd04ef232a94708_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e93ee8a6889a4c1bf1166d56e27d61517901c10ffff0cb64c4df2bc3f509919d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93ee8a6889a4c1bf1166d56e27d61517901c10ffff0cb64c4df2bc3f509919d->enter($__internal_e93ee8a6889a4c1bf1166d56e27d61517901c10ffff0cb64c4df2bc3f509919d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e12196da52d8661ee01a7e86d3f5d3840b2f9be0a7dbfc6e7261cc058df40073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12196da52d8661ee01a7e86d3f5d3840b2f9be0a7dbfc6e7261cc058df40073->enter($__internal_e12196da52d8661ee01a7e86d3f5d3840b2f9be0a7dbfc6e7261cc058df40073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e12196da52d8661ee01a7e86d3f5d3840b2f9be0a7dbfc6e7261cc058df40073->leave($__internal_e12196da52d8661ee01a7e86d3f5d3840b2f9be0a7dbfc6e7261cc058df40073_prof);

        
        $__internal_e93ee8a6889a4c1bf1166d56e27d61517901c10ffff0cb64c4df2bc3f509919d->leave($__internal_e93ee8a6889a4c1bf1166d56e27d61517901c10ffff0cb64c4df2bc3f509919d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/layout.html.twig", "/home/ubuntu/workspace/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
