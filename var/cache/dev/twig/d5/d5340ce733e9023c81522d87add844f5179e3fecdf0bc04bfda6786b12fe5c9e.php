<?php

/* user/index.html.twig */
class __TwigTemplate_eed7d14b2669e81176e3d9e6285c6f4b1fd4fad22581322eb267254b0dc399d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e1f47070bf5fcda8fab59693c27e7f99713f3a02ab5598b7bab195049521bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1f47070bf5fcda8fab59693c27e7f99713f3a02ab5598b7bab195049521bfb->enter($__internal_8e1f47070bf5fcda8fab59693c27e7f99713f3a02ab5598b7bab195049521bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_1eaec1cfdae1f22d47771e7c59e20e3dd56c3d7c8fae4b7c6ab5361939f29dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eaec1cfdae1f22d47771e7c59e20e3dd56c3d7c8fae4b7c6ab5361939f29dc4->enter($__internal_1eaec1cfdae1f22d47771e7c59e20e3dd56c3d7c8fae4b7c6ab5361939f29dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e1f47070bf5fcda8fab59693c27e7f99713f3a02ab5598b7bab195049521bfb->leave($__internal_8e1f47070bf5fcda8fab59693c27e7f99713f3a02ab5598b7bab195049521bfb_prof);

        
        $__internal_1eaec1cfdae1f22d47771e7c59e20e3dd56c3d7c8fae4b7c6ab5361939f29dc4->leave($__internal_1eaec1cfdae1f22d47771e7c59e20e3dd56c3d7c8fae4b7c6ab5361939f29dc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71373c16d37ecff3f7333631b20f27c23612d3b97671cc07cd263c4ceb56e0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71373c16d37ecff3f7333631b20f27c23612d3b97671cc07cd263c4ceb56e0de->enter($__internal_71373c16d37ecff3f7333631b20f27c23612d3b97671cc07cd263c4ceb56e0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f77beb0daa5df18e56bd2c64a4ad634106377f3b19dcec8a5936008fe7e63ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77beb0daa5df18e56bd2c64a4ad634106377f3b19dcec8a5936008fe7e63ddf->enter($__internal_f77beb0daa5df18e56bd2c64a4ad634106377f3b19dcec8a5936008fe7e63ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:User:index";
        
        $__internal_f77beb0daa5df18e56bd2c64a4ad634106377f3b19dcec8a5936008fe7e63ddf->leave($__internal_f77beb0daa5df18e56bd2c64a4ad634106377f3b19dcec8a5936008fe7e63ddf_prof);

        
        $__internal_71373c16d37ecff3f7333631b20f27c23612d3b97671cc07cd263c4ceb56e0de->leave($__internal_71373c16d37ecff3f7333631b20f27c23612d3b97671cc07cd263c4ceb56e0de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_882067a9b84a560cbc1c7841ea2a17abf0db6f9cd427aa40d63cbd421c630e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882067a9b84a560cbc1c7841ea2a17abf0db6f9cd427aa40d63cbd421c630e2d->enter($__internal_882067a9b84a560cbc1c7841ea2a17abf0db6f9cd427aa40d63cbd421c630e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbd40c1f465907269dd05da36459d2ca7ea4e089965de30f2acc67fdf408e3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd40c1f465907269dd05da36459d2ca7ea4e089965de30f2acc67fdf408e3d8->enter($__internal_bbd40c1f465907269dd05da36459d2ca7ea4e089965de30f2acc67fdf408e3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:index page</h1>
";
        
        $__internal_bbd40c1f465907269dd05da36459d2ca7ea4e089965de30f2acc67fdf408e3d8->leave($__internal_bbd40c1f465907269dd05da36459d2ca7ea4e089965de30f2acc67fdf408e3d8_prof);

        
        $__internal_882067a9b84a560cbc1c7841ea2a17abf0db6f9cd427aa40d63cbd421c630e2d->leave($__internal_882067a9b84a560cbc1c7841ea2a17abf0db6f9cd427aa40d63cbd421c630e2d_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:User:index{% endblock %}

{% block body %}
<h1>Welcome to the User:index page</h1>
{% endblock %}
", "user/index.html.twig", "/var/www/wanderlei-teste/app/Resources/views/user/index.html.twig");
    }
}
