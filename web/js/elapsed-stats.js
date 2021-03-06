var elapsedChart;
var reqCountChart;

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
            } else {
                var shift = series.data.length > 20; // shift if the series is longer than 20
                series.addPoint(point, true, shift);
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
    elapsedChart = new Highcharts.Chart({
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
        series: elapsedSeries,
        tooltip: {
            valueDecimals: 5
        }
    });

    reqCountChart = new Highcharts.Chart({
        chart: {
            renderTo: 'req-count-container',
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
            text: 'PHP请求次数统计'
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
                text: '时间区间请求次数',
                margin: 30
            }
        },
        series: reqCountSeries,
        tooltip: {
            valueDecimals: 0
        }
    });
}
