$(function () {
    $('#hschart1').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Austin Metro Area Population Projections'
        },
        subtitle: {
            text: 'The Hispanic population in the Austin metro area is expected to eclipse the historic White majority in year 2038, according to moderate growth projections by the Texas State Data Center. That change would come even sooner in Travis County.'
        },
        xAxis: {
            categories: ['2010','2015','2020','2025','2030','2035','2040','2045','2050']
        },
        yAxis: {
            title: {
                text: 'Percent share'
            },
            labels: {
                formatter: function () {
                    return this.value + '%';
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'Hispanic',
            marker: {
                enabled: false
            },
            data: [31.4,33.0,34.7,36.7,38.8,41.0,43.2,45.2,47.3]

        }, {
            name: 'White',
            marker: {
                enabled: false
            },
            data: [54.7,52.8,51.0,48.9,46.5,44.1,41.8,39.6,37.5]
        }]
    });
});