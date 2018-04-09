<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_3b3ca825ebd264b5225925168f24be289c14e3514068e62d887d72f47e399481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3ca825ebd264b5225925168f24be289c14e3514068e62d887d72f47e399481->enter($__internal_3b3ca825ebd264b5225925168f24be289c14e3514068e62d887d72f47e399481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6be0149140f0198e909992868b08d86a77703baf34e7b8082ceeeab5876ac63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be0149140f0198e909992868b08d86a77703baf34e7b8082ceeeab5876ac63d->enter($__internal_6be0149140f0198e909992868b08d86a77703baf34e7b8082ceeeab5876ac63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3ca825ebd264b5225925168f24be289c14e3514068e62d887d72f47e399481->leave($__internal_3b3ca825ebd264b5225925168f24be289c14e3514068e62d887d72f47e399481_prof);

        
        $__internal_6be0149140f0198e909992868b08d86a77703baf34e7b8082ceeeab5876ac63d->leave($__internal_6be0149140f0198e909992868b08d86a77703baf34e7b8082ceeeab5876ac63d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8ded7eb9b0377a75725eb028ec23250b9f2d99ad4b1144f7903e098e3ccb200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ded7eb9b0377a75725eb028ec23250b9f2d99ad4b1144f7903e098e3ccb200->enter($__internal_a8ded7eb9b0377a75725eb028ec23250b9f2d99ad4b1144f7903e098e3ccb200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_18c335621424c731a6023681b61f1364917ffc8b373b5ec2cce4d7f413c4d89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c335621424c731a6023681b61f1364917ffc8b373b5ec2cce4d7f413c4d89c->enter($__internal_18c335621424c731a6023681b61f1364917ffc8b373b5ec2cce4d7f413c4d89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18c335621424c731a6023681b61f1364917ffc8b373b5ec2cce4d7f413c4d89c->leave($__internal_18c335621424c731a6023681b61f1364917ffc8b373b5ec2cce4d7f413c4d89c_prof);

        
        $__internal_a8ded7eb9b0377a75725eb028ec23250b9f2d99ad4b1144f7903e098e3ccb200->leave($__internal_a8ded7eb9b0377a75725eb028ec23250b9f2d99ad4b1144f7903e098e3ccb200_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b00c0f9e8e5b77cab80f2de7ba3ed756bf4e6217f1c228f29931570f30aefdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b00c0f9e8e5b77cab80f2de7ba3ed756bf4e6217f1c228f29931570f30aefdb->enter($__internal_7b00c0f9e8e5b77cab80f2de7ba3ed756bf4e6217f1c228f29931570f30aefdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0dd9bbd554a050fdaf42aaed74363af030ac8fb0b0b76df0eb200cb9a4ba20b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd9bbd554a050fdaf42aaed74363af030ac8fb0b0b76df0eb200cb9a4ba20b9->enter($__internal_0dd9bbd554a050fdaf42aaed74363af030ac8fb0b0b76df0eb200cb9a4ba20b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0dd9bbd554a050fdaf42aaed74363af030ac8fb0b0b76df0eb200cb9a4ba20b9->leave($__internal_0dd9bbd554a050fdaf42aaed74363af030ac8fb0b0b76df0eb200cb9a4ba20b9_prof);

        
        $__internal_7b00c0f9e8e5b77cab80f2de7ba3ed756bf4e6217f1c228f29931570f30aefdb->leave($__internal_7b00c0f9e8e5b77cab80f2de7ba3ed756bf4e6217f1c228f29931570f30aefdb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e8932114faf7e1809e0e6bb2e4acfb955a267e686718862439f1135d4c6c35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8932114faf7e1809e0e6bb2e4acfb955a267e686718862439f1135d4c6c35a->enter($__internal_8e8932114faf7e1809e0e6bb2e4acfb955a267e686718862439f1135d4c6c35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a41b27aaa99c604e51d36060c57b790be6004552abc84fb4dfdb5df5c4ab46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a41b27aaa99c604e51d36060c57b790be6004552abc84fb4dfdb5df5c4ab46b->enter($__internal_2a41b27aaa99c604e51d36060c57b790be6004552abc84fb4dfdb5df5c4ab46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a41b27aaa99c604e51d36060c57b790be6004552abc84fb4dfdb5df5c4ab46b->leave($__internal_2a41b27aaa99c604e51d36060c57b790be6004552abc84fb4dfdb5df5c4ab46b_prof);

        
        $__internal_8e8932114faf7e1809e0e6bb2e4acfb955a267e686718862439f1135d4c6c35a->leave($__internal_8e8932114faf7e1809e0e6bb2e4acfb955a267e686718862439f1135d4c6c35a_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
