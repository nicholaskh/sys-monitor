var chart;

Highcharts.setOptions({ global: { useUTC: false } });

function requestData() {
    $.ajax({
        url: '/error-log/apache-ajax',
        success: function(point) {
            var series = chart.series[0];
            var lastData = series.data[series.data.length-1];
            console.log(lastData.x - point[0]);
            if (lastData.x == point[0]) {
                lastData.update(point[1]);
                console.log(series.data.length);
            } else {
                var shift = series.data.length > 20; // shift if the series is longer than 20
                // add the point
                series.addPoint(point, true, shift);
            }
            
            // call it again after one second
            setTimeout(requestData, 10000);    
        },
        cache: false
    });
}

$(document).ready(function() {
    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
            defaultSeriesType: 'column',
            width: 1000,
            spacingLeft: 20,
            events: {
                load: requestData
            }
        },
        title: {
            text: 'apache 500日志'
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
            name: '日志数',
            data: data
        }],
    });        
});
