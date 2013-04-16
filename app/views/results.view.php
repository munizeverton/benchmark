<script src="/bench/web/js/highcharts.js"></script>
<script src="/bench/web/js/exporting.js"></script>
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
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
                    {{ mongo1|number_format }}, 
                    {{ mongo2|number_format }}, 
                    {{ mongo3|number_format }}, 
                    {{ mongo4|number_format }}],
                }, {
                name: 'MySql',
                data: [
                    {{ mysql1|number_format }}, 
                    {{ mysql2|number_format }}, 
                    {{ mysql3|number_format }}, 
                    {{ mysql4|number_format }}],
            }]
        });
    });
    
});
</script>

<!-- <div class="row-fluid results">

  <div class="span6">
    <h4>MongoDB</h4>
    <p>10 inserções: {{mongo1|number_format}} segundos</p>
    <p>100 inserções: {{mongo2|number_format}} segundos</p>
    <p>1000 inserções: {{mongo3|number_format}} segundos</p>
    <p>10000 inserções: {{mongo4|number_format}} segundos</p>
  </div>

  <div class="span6">
    <h4>MySql</h4>
    <p>10 inserções: {{mysql1|number_format}} segundos</p>
    <p>100 inserções: {{mysql2|number_format}} segundos</p>
    <p>1000 inserções: {{mysql3|number_format}} segundos</p>
    <p>10000 inserções: {{mysql4|number_format}} segundos</p>
  </div>

</div> -->
