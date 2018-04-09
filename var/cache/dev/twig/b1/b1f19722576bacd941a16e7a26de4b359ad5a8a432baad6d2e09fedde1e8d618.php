<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_138bd54cf97e5eb6cc06b732c743ca08e05d4ce4a7c1e8d477af4530941df638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138bd54cf97e5eb6cc06b732c743ca08e05d4ce4a7c1e8d477af4530941df638->enter($__internal_138bd54cf97e5eb6cc06b732c743ca08e05d4ce4a7c1e8d477af4530941df638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_af12089816e570fa090590fbbe5a0db01be11486518901d66a3123fe3b507643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af12089816e570fa090590fbbe5a0db01be11486518901d66a3123fe3b507643->enter($__internal_af12089816e570fa090590fbbe5a0db01be11486518901d66a3123fe3b507643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body id=\"top\">
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_138bd54cf97e5eb6cc06b732c743ca08e05d4ce4a7c1e8d477af4530941df638->leave($__internal_138bd54cf97e5eb6cc06b732c743ca08e05d4ce4a7c1e8d477af4530941df638_prof);

        
        $__internal_af12089816e570fa090590fbbe5a0db01be11486518901d66a3123fe3b507643->leave($__internal_af12089816e570fa090590fbbe5a0db01be11486518901d66a3123fe3b507643_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_102bcb8ef33e9e34677e674bf316088675dec8137ad97a130055ad23cc17a934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102bcb8ef33e9e34677e674bf316088675dec8137ad97a130055ad23cc17a934->enter($__internal_102bcb8ef33e9e34677e674bf316088675dec8137ad97a130055ad23cc17a934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd033b1ee30027e673a64d724832665b57a0b8a739b6caa91686b485d43781ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd033b1ee30027e673a64d724832665b57a0b8a739b6caa91686b485d43781ac->enter($__internal_dd033b1ee30027e673a64d724832665b57a0b8a739b6caa91686b485d43781ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd033b1ee30027e673a64d724832665b57a0b8a739b6caa91686b485d43781ac->leave($__internal_dd033b1ee30027e673a64d724832665b57a0b8a739b6caa91686b485d43781ac_prof);

        
        $__internal_102bcb8ef33e9e34677e674bf316088675dec8137ad97a130055ad23cc17a934->leave($__internal_102bcb8ef33e9e34677e674bf316088675dec8137ad97a130055ad23cc17a934_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cd54ae9286c70c4d1e5ddfef5dd127ac6af148df3b8fcb35f7c89a343a06844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd54ae9286c70c4d1e5ddfef5dd127ac6af148df3b8fcb35f7c89a343a06844->enter($__internal_2cd54ae9286c70c4d1e5ddfef5dd127ac6af148df3b8fcb35f7c89a343a06844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_10e4aa5973ed56d4a6f670f3cf78f3e0c65423fa2c634faf5a305a2163e1069e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e4aa5973ed56d4a6f670f3cf78f3e0c65423fa2c634faf5a305a2163e1069e->enter($__internal_10e4aa5973ed56d4a6f670f3cf78f3e0c65423fa2c634faf5a305a2163e1069e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "         <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/base.css"), "html", null, true);
        echo "\">  
   <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/main.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/vendor.css"), "html", null, true);
        echo "\">     
        ";
        
        $__internal_10e4aa5973ed56d4a6f670f3cf78f3e0c65423fa2c634faf5a305a2163e1069e->leave($__internal_10e4aa5973ed56d4a6f670f3cf78f3e0c65423fa2c634faf5a305a2163e1069e_prof);

        
        $__internal_2cd54ae9286c70c4d1e5ddfef5dd127ac6af148df3b8fcb35f7c89a343a06844->leave($__internal_2cd54ae9286c70c4d1e5ddfef5dd127ac6af148df3b8fcb35f7c89a343a06844_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2774ab98e8e44c442a0df74f34909f3b53815495de7fb561cf6c9e27cb4f162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2774ab98e8e44c442a0df74f34909f3b53815495de7fb561cf6c9e27cb4f162->enter($__internal_b2774ab98e8e44c442a0df74f34909f3b53815495de7fb561cf6c9e27cb4f162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03527bcc8271592a485734dc70e98bc2acab2d977e7ffe1e555d567c2c24cd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03527bcc8271592a485734dc70e98bc2acab2d977e7ffe1e555d567c2c24cd69->enter($__internal_03527bcc8271592a485734dc70e98bc2acab2d977e7ffe1e555d567c2c24cd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_03527bcc8271592a485734dc70e98bc2acab2d977e7ffe1e555d567c2c24cd69->leave($__internal_03527bcc8271592a485734dc70e98bc2acab2d977e7ffe1e555d567c2c24cd69_prof);

        
        $__internal_b2774ab98e8e44c442a0df74f34909f3b53815495de7fb561cf6c9e27cb4f162->leave($__internal_b2774ab98e8e44c442a0df74f34909f3b53815495de7fb561cf6c9e27cb4f162_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b33909e3b108eeb8112eff8caff37c68348aa7668b3b86ddfdda2889a9e54645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33909e3b108eeb8112eff8caff37c68348aa7668b3b86ddfdda2889a9e54645->enter($__internal_b33909e3b108eeb8112eff8caff37c68348aa7668b3b86ddfdda2889a9e54645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f3f74c54980140f06dbc6f0adec7be1aad6d86e43ce76597f71fcdd0978f7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3f74c54980140f06dbc6f0adec7be1aad6d86e43ce76597f71fcdd0978f7b4->enter($__internal_6f3f74c54980140f06dbc6f0adec7be1aad6d86e43ce76597f71fcdd0978f7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/modernizr.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/pace.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/main.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_6f3f74c54980140f06dbc6f0adec7be1aad6d86e43ce76597f71fcdd0978f7b4->leave($__internal_6f3f74c54980140f06dbc6f0adec7be1aad6d86e43ce76597f71fcdd0978f7b4_prof);

        
        $__internal_b33909e3b108eeb8112eff8caff37c68348aa7668b3b86ddfdda2889a9e54645->leave($__internal_b33909e3b108eeb8112eff8caff37c68348aa7668b3b86ddfdda2889a9e54645_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 21,  153 => 20,  149 => 19,  144 => 17,  139 => 16,  130 => 15,  113 => 14,  101 => 9,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 23,  50 => 15,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
         <link rel=\"stylesheet\" href=\"{{ asset('Template/css/base.css') }}\">  
   <link rel=\"stylesheet\" href=\"{{ asset ('Template/css/main.css') }}\">
   <link rel=\"stylesheet\" href=\"{{ asset('Template/css/vendor.css') }}\">     
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body id=\"top\">
        {% block body %}{% endblock %}
        {% block javascripts %}
        \t<script src=\"{{ asset ('Template/js/modernizr.js') }}\"></script>
\t<script src=\"{{ asset ('Template/js/pace.min.js') }}\"></script>

        <script src=\"{{ asset ('Template/js/jquery-2.1.3.min.js') }}\"></script>
   <script src=\"{{ asset ('Template/js/plugins.js') }}\"></script>
   <script src=\"{{ asset('Template/js/main.js') }}\"></script>
   {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/symfony/app/Resources/views/base.html.twig");
    }
}
