var maChart;
var macChart;
var mcChart;

Highcharts.setOptions({ global: { useUTC: true } });

function requestData() {
    /*
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
    */
}

$(document).ready(function() {
    drawChart('line');  
});
function drawChart(type) {
    maChart = new Highcharts.Chart({
        chart: {
            renderTo: 'ma-container',
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
            text: 'member activity统计'
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
                text: '统计次数',
                margin: 30
            }
        },
        series: maSeries,
        tooltip: {
            valueDecimals: 0
        }
    });

    macChart = new Highcharts.Chart({
        chart: {
            renderTo: 'mac-container',
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
            text: 'member activity coupon统计'
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
                text: '统计次数',
                margin: 30
            }
        },
        series: macSeries,
        tooltip: {
            valueDecimals: 0
        }
    });

    mcChart = new Highcharts.Chart({
        chart: {
            renderTo: 'mc-container',
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
            text: 'member coupon统计'
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
                text: '统计次数',
                margin: 30
            }
        },
        series: mcSeries,
        tooltip: {
            valueDecimals: 0
        }
    });
}
