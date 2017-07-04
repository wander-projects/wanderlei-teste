<?php

/* ::base.html.twig */
class __TwigTemplate_866fa3ea46f8fafbe62cf3a411b0c1b18a673c21d0d03f2689fd2d758dbde628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1709e5f92c049667d90390c99224054997d083f3b9a6207ec5476e1c8c46138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1709e5f92c049667d90390c99224054997d083f3b9a6207ec5476e1c8c46138->enter($__internal_e1709e5f92c049667d90390c99224054997d083f3b9a6207ec5476e1c8c46138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c48e37b11c6b0d2091cf2fb0d6734e441912c200cc19469d23bf4ead8159f5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48e37b11c6b0d2091cf2fb0d6734e441912c200cc19469d23bf4ead8159f5d8->enter($__internal_c48e37b11c6b0d2091cf2fb0d6734e441912c200cc19469d23bf4ead8159f5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 10
        echo "    
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </head>
    <body>
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_e1709e5f92c049667d90390c99224054997d083f3b9a6207ec5476e1c8c46138->leave($__internal_e1709e5f92c049667d90390c99224054997d083f3b9a6207ec5476e1c8c46138_prof);

        
        $__internal_c48e37b11c6b0d2091cf2fb0d6734e441912c200cc19469d23bf4ead8159f5d8->leave($__internal_c48e37b11c6b0d2091cf2fb0d6734e441912c200cc19469d23bf4ead8159f5d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84c512bfeaf9932500c146bedb58cb582efbeb952e11735e443a9ede0ab788ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c512bfeaf9932500c146bedb58cb582efbeb952e11735e443a9ede0ab788ef->enter($__internal_84c512bfeaf9932500c146bedb58cb582efbeb952e11735e443a9ede0ab788ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cddbe9153696f0bc5c8d5ea63b7344bdde0202d8792a7565b67c7a1a3c9ca8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddbe9153696f0bc5c8d5ea63b7344bdde0202d8792a7565b67c7a1a3c9ca8f2->enter($__internal_cddbe9153696f0bc5c8d5ea63b7344bdde0202d8792a7565b67c7a1a3c9ca8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Wanderlei-teste";
        
        $__internal_cddbe9153696f0bc5c8d5ea63b7344bdde0202d8792a7565b67c7a1a3c9ca8f2->leave($__internal_cddbe9153696f0bc5c8d5ea63b7344bdde0202d8792a7565b67c7a1a3c9ca8f2_prof);

        
        $__internal_84c512bfeaf9932500c146bedb58cb582efbeb952e11735e443a9ede0ab788ef->leave($__internal_84c512bfeaf9932500c146bedb58cb582efbeb952e11735e443a9ede0ab788ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3c613b945b6d7687751982b8577b4faea6822d07baed775e75378ea9e4489e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c613b945b6d7687751982b8577b4faea6822d07baed775e75378ea9e4489e7->enter($__internal_f3c613b945b6d7687751982b8577b4faea6822d07baed775e75378ea9e4489e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7489206e90ca2ccda0de06a78fd7f4bf744dfd40099170981c7ed615d44152ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7489206e90ca2ccda0de06a78fd7f4bf744dfd40099170981c7ed615d44152ba->enter($__internal_7489206e90ca2ccda0de06a78fd7f4bf744dfd40099170981c7ed615d44152ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
        ";
        
        $__internal_7489206e90ca2ccda0de06a78fd7f4bf744dfd40099170981c7ed615d44152ba->leave($__internal_7489206e90ca2ccda0de06a78fd7f4bf744dfd40099170981c7ed615d44152ba_prof);

        
        $__internal_f3c613b945b6d7687751982b8577b4faea6822d07baed775e75378ea9e4489e7->leave($__internal_f3c613b945b6d7687751982b8577b4faea6822d07baed775e75378ea9e4489e7_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a93c369795326df465d63fd16be38e20045d5c2fdfb90b2e1260bac132086521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93c369795326df465d63fd16be38e20045d5c2fdfb90b2e1260bac132086521->enter($__internal_a93c369795326df465d63fd16be38e20045d5c2fdfb90b2e1260bac132086521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a7ef5c608b6ea733e12443127fdeff540a5da49ab7f3a721b9dc75b2492e1a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ef5c608b6ea733e12443127fdeff540a5da49ab7f3a721b9dc75b2492e1a0d->enter($__internal_a7ef5c608b6ea733e12443127fdeff540a5da49ab7f3a721b9dc75b2492e1a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js\"></script>
            <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\">
            <script src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\">
            <script>
                \$(document).ready(function() {
                    \$('#example').DataTable();
                
                    \$('.datepickerStart').datepicker({
                        format: 'yyyy-mm-dd',
                        startDate: '-3d'
                    });
                    \$('.datepickerEnd').datepicker({
                        format: 'yyyy-mm-dd',
                        startDate: '-3d'
                    });
            
                    \$('#activity_status').change(function() {
                        selected = \$(this).val(); 
                        switch(selected) { 
                            case '1':
                                \$('#endDate').show();
                                break;
                            case '2':
                                \$('#endDate').show();
                                break;
                            case '3':
                                \$('#endDate').show();
                                break;
                            default:
                                \$('#endDate').hide();
                                break;
                        }
                    });

                });
            </script>
        ";
        
        $__internal_a7ef5c608b6ea733e12443127fdeff540a5da49ab7f3a721b9dc75b2492e1a0d->leave($__internal_a7ef5c608b6ea733e12443127fdeff540a5da49ab7f3a721b9dc75b2492e1a0d_prof);

        
        $__internal_a93c369795326df465d63fd16be38e20045d5c2fdfb90b2e1260bac132086521->leave($__internal_a93c369795326df465d63fd16be38e20045d5c2fdfb90b2e1260bac132086521_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_253cb81576b9391d70e5d2c95e646bad752cbc4bdf2f0a85a5e64e28ac837e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253cb81576b9391d70e5d2c95e646bad752cbc4bdf2f0a85a5e64e28ac837e5f->enter($__internal_253cb81576b9391d70e5d2c95e646bad752cbc4bdf2f0a85a5e64e28ac837e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb1741f54ff541dd0f008b11f7b3f739354099a6a22212decfd16abad4d71350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1741f54ff541dd0f008b11f7b3f739354099a6a22212decfd16abad4d71350->enter($__internal_cb1741f54ff541dd0f008b11f7b3f739354099a6a22212decfd16abad4d71350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb1741f54ff541dd0f008b11f7b3f739354099a6a22212decfd16abad4d71350->leave($__internal_cb1741f54ff541dd0f008b11f7b3f739354099a6a22212decfd16abad4d71350_prof);

        
        $__internal_253cb81576b9391d70e5d2c95e646bad752cbc4bdf2f0a85a5e64e28ac837e5f->leave($__internal_253cb81576b9391d70e5d2c95e646bad752cbc4bdf2f0a85a5e64e28ac837e5f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  117 => 13,  108 => 12,  95 => 7,  86 => 6,  68 => 5,  56 => 55,  54 => 54,  50 => 52,  48 => 12,  44 => 11,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Wanderlei-teste{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
        {% endblock %}    
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js\"></script>
            <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\">
            <script src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\">
            <script>
                \$(document).ready(function() {
                    \$('#example').DataTable();
                
                    \$('.datepickerStart').datepicker({
                        format: 'yyyy-mm-dd',
                        startDate: '-3d'
                    });
                    \$('.datepickerEnd').datepicker({
                        format: 'yyyy-mm-dd',
                        startDate: '-3d'
                    });
            
                    \$('#activity_status').change(function() {
                        selected = \$(this).val(); 
                        switch(selected) { 
                            case '1':
                                \$('#endDate').show();
                                break;
                            case '2':
                                \$('#endDate').show();
                                break;
                            case '3':
                                \$('#endDate').show();
                                break;
                            default:
                                \$('#endDate').hide();
                                break;
                        }
                    });

                });
            </script>
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/wanderlei-teste/app/Resources/views/base.html.twig");
    }
}
