<div class="row text-center">
    <div id="sparkline-bar"></div>
</div>
<script>
    $(function () {
        $("#sparkline-bar").sparkline([6,4,8, 9, 10, 5, 13, 18, 21, 7, 9], {
            type: 'bar',
            width: '100%',
            height: 150,
            barSpacing: 3,
            barWidth: 20,
            barColor: "#f39c12"
        });
    });
</script>
