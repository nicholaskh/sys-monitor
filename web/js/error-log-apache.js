var chart;

Highcharts.setOptions({ global: { useUTC: false } });

function requestDataApache() {
    $.ajax({
        url: '/error-log/apache-ajax',
        success: function(json) {
            for (var i in json) {
                var series = chart.series[i];
                var point = json[i];
                var lastData = series.data[series.data.length-1];
                if (lastData && lastData.x == point[0]) {
                    lastData.update(point[1]);
                    chart.redraw();
                } else {
                    var shift = series.data.length > 20; // shift if the series is longer than 20
                    series.addPoint(point, true, shift);
                    chart.redraw();
                }
            }
            
            setTimeout(requestDataApache, 10000);    
        },
        cache: false
    });
}

$(document).ready(function() {
    drawChart('spline');  
});
function drawChart(type) {
    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'apache-404-container',
            defaultSeriesType: type,
            width: 1000,
            spacingLeft: 20,
            events: {
                load: requestDataApache
            }
        },
        title: {
            text: 'apache错误日志'
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150,
            maxZoom: 20 * 1000,
            title: {
                text: '时间',
                margin: 20
            }
        },
        yAxis: {
            minPadding: 0.2,
            maxPadding: 0.2,
            title: {
                text: '数量',
                margin: 30
            }
        },
        series: [{
                allowPointSelect: true,
                name: '404日志数',
                data: data[0]
            },
            {
                allowPointSelect: true,
                name: '500日志数',
                data: data[1]
            }
        ],
    });
}
$(document).on('click', '.spline', function(e){
    chart.destroy();
    drawChart('spline');
});
$(document).on('click', '.colu', function(e){
    chart.destroy();
    drawChart('column');
});
