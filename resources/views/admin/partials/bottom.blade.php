<script src="{{asset("admin/docs/js/jquery-3.7.0.min.js")}}"></script>
<script src="{{asset("admin/docs/js/bootstrap.min.js")}}"></script>
<script src="{{asset("admin/docs/js/main.js")}}"></script>
<!-- Page specific javascripts-->
 <script type="text/javascript">
    const salesData = {
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value',
            axisLabel: {
                formatter: '${value}'
            }
        },
        series: [
            {
                data: [150, 230, 224, 218, 135, 147, 260],
                type: 'line',
                smooth: true
            }
        ],
        tooltip: {
            trigger: 'axis',
            formatter: "<b>{b0}:</b> ${c0}"
        }
    }

    const supportRequests = {
        tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            left: 'left'
        },
        series: [
            {
                name: 'Support Requests',
                type: 'pie',
                radius: '50%',
                data: [
                    { value: 300, name: 'In Progress' },
                    { value: 50, name: 'Delayed' },
                    { value: 100, name: 'Complete' }
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };

    const salesChartElement = document.getElementById('salesChart');
    const salesChart = echarts.init(salesChartElement, null, { renderer: 'svg' });
    salesChart.setOption(salesData);
    new ResizeObserver(() => salesChart.resize()).observe(salesChartElement);

    const supportChartElement = document.getElementById("supportRequestChart")
    const supportChart = echarts.init(supportChartElement, null, { renderer: 'svg' });
    supportChart.setOption(supportRequests);
    new ResizeObserver(() => supportChart.resize()).observe(supportChartElement);
</script>
<!-- Google analytics script-->
<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toggleButton = document.querySelector('.toggle-menu');
        var navbar = document.querySelector('.navbar');

        toggleButton.addEventListener('click', function () {
            navbar.classList.toggle('active');
        });
    });
</script>
