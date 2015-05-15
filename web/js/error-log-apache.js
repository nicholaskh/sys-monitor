var chart404;
var chart500;

Highcharts.setOptions({ global: { useUTC: false } });

function requestData404() {
    $.ajax({
        url: '/error-log/apache-ajax',
        data: {code: 404},
        success: function(point) {
            var series = chart404.series[0];
            var lastData = series.data[series.data.length-1];
            if (lastData.x == point[0]) {
                lastData.update(point[1]);
            } else {
                var shift = series.data.length > 20; // shift if the series is longer than 20
                // add the point
                series.addPoint(point, true, shift);
            }
            
            // call it again after one second
            setTimeout(requestData404, 10000);    
        },
        cache: false
    });
}

function requestData500() {
    $.ajax({
        url: '/error-log/apache-ajax',
        data: {code: 500},
        success: function(point) {
            var series = chart500.series[0];
            var lastData = series.data[series.data.length-1];
            if (lastData.x == point[0]) {
                lastData.update(point[1]);
            } else {
                var shift = series.data.length > 20; // shift if the series is longer than 20
                // add the point
                series.addPoint(point, true, shift);
            }
            
            // call it again after one second
            setTimeout(requestData500, 10000);    
        },
        cache: false
    });
}

$(document).ready(function() {
    chart404 = new Highcharts.Chart({
        chart: {
            renderTo: 'apache-404-container',
            defaultSeriesType: 'column',
            width: 1000,
            spacingLeft: 20,
            events: {
                load: requestData404
            }
        },
        title: {
            text: 'apache 404日志'
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
            data: data404
        }],
    });        

    chart500 = new Highcharts.Chart({
        chart: {
            renderTo: 'apache-500-container',
            defaultSeriesType: 'column',
            width: 1000,
            spacingLeft: 20,
            events: {
                load: requestData500
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
            data: data500
        }],
    });
});
