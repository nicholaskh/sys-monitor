var chart;

Highcharts.setOptions({ global: { useUTC: false } });

function requestData() {
    $.ajax({
        url: '/stats/elapsed-ajax',
        success: function(json) {
            var series = chart.series[0];
            var point = json;
            var lastData = series.data[series.data.length-1];
            if (lastData && lastData.x == point[0]) {
                lastData.update(point[1]);
                chart.redraw();
            } else {
                var shift = series.data.length > 20; // shift if the series is longer than 20
                series.addPoint(point, true, shift);
                chart.redraw();
            }
            
            setTimeout(requestData, 10000);
        },
        cache: false
    });
}

$(document).ready(function() {
    drawChart('line');  
});
function drawChart(type) {
    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'elapsed-container',
            defaultSeriesType: type,
            width: 1000,
            spacingLeft: 20,
            events: {
                // TODO
                //load: requestData
            },
            zoomType: 'xy'
        },
        title: {
            text: 'PHP执行时间统计'
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
                text: '平均执行时间',
                margin: 30
            }
        },
        series: series,
    });
}
