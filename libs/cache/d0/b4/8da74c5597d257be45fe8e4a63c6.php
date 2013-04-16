<?php

/* results.view.php */
class __TwigTemplate_d0b48da74c5597d257be45fe8e4a63c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"/bench/web/js/highcharts.js\"></script>
<script src=\"/bench/web/js/exporting.js\"></script>
<script type=\"text/javascript\">
\$(function () {
    var chart;
    \$(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'results-body',
                type: 'column'
            },
            title: {
                text: 'Resultados'
            },
            //subtitle: {
              //  text: 'Source: WorldClimate.com'
            //},
            xAxis: {
                categories: [
                    '10', '100', '1000', '10000'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Tempo em segundos'
                }
            },
            legend: {
                layout: 'vertical',
                backgroundColor: '#FFFFFF',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                shadow: true
            },
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': '+ this.y + ' segundos';
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
                series: [{
                name: 'MongoDB',
                data: [
                    ";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mongo1"]) ? $context["mongo1"] : null)), "html", null, true);
        echo ", 
                    ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mongo2"]) ? $context["mongo2"] : null)), "html", null, true);
        echo ", 
                    ";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mongo3"]) ? $context["mongo3"] : null)), "html", null, true);
        echo ", 
                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mongo4"]) ? $context["mongo4"] : null)), "html", null, true);
        echo "],
                }, {
                name: 'MySql',
                data: [
                    ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mysql1"]) ? $context["mysql1"] : null)), "html", null, true);
        echo ", 
                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mysql2"]) ? $context["mysql2"] : null)), "html", null, true);
        echo ", 
                    ";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mysql3"]) ? $context["mysql3"] : null)), "html", null, true);
        echo ", 
                    ";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mysql4"]) ? $context["mysql4"] : null)), "html", null, true);
        echo "],
            }]
        });
    });
    
});
</script>

<!-- <div class=\"row-fluid results\">

  <div class=\"span6\">
    <h4>MongoDB</h4>
    <p>10 inserções: ";
        // line 76
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mongo1"]) ? $context["mongo1"] : null)), "html", null, true);
        echo " segundos</p>
    <p>100 inserções: ";
        // line 77
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mongo2"]) ? $context["mongo2"] : null)), "html", null, true);
        echo " segundos</p>
    <p>1000 inserções: ";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mongo3"]) ? $context["mongo3"] : null)), "html", null, true);
        echo " segundos</p>
    <p>10000 inserções: ";
        // line 79
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mongo4"]) ? $context["mongo4"] : null)), "html", null, true);
        echo " segundos</p>
  </div>

  <div class=\"span6\">
    <h4>MySql</h4>
    <p>10 inserções: ";
        // line 84
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mysql1"]) ? $context["mysql1"] : null)), "html", null, true);
        echo " segundos</p>
    <p>100 inserções: ";
        // line 85
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mysql2"]) ? $context["mysql2"] : null)), "html", null, true);
        echo " segundos</p>
    <p>1000 inserções: ";
        // line 86
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mysql3"]) ? $context["mysql3"] : null)), "html", null, true);
        echo " segundos</p>
    <p>10000 inserções: ";
        // line 87
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mysql4"]) ? $context["mysql4"] : null)), "html", null, true);
        echo " segundos</p>
  </div>

</div> -->
";
    }

    public function getTemplateName()
    {
        return "results.view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 87,  148 => 86,  144 => 85,  140 => 84,  132 => 79,  128 => 78,  124 => 77,  120 => 76,  105 => 64,  101 => 63,  97 => 62,  93 => 61,  86 => 57,  82 => 56,  78 => 55,  74 => 54,  19 => 1,);
    }
}
