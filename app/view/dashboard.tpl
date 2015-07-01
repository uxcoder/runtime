<div class="container">
    <div class="row">
        <div class="u-full-width">
            <h4>Dashboard</h4>
            {if $authorized}
                <p>
                    Hi, {$user.firstname} {$user.lastname}
                </p>
            {/if}
            <p>Here is your content.</p>
            {*<p>*}
                {*<h5>Registered users</h5>*}
                {*<ul>*}
                {*{foreach $users as $user}*}
                    {*<li>{$user.firstname} {$user.lastname}</li>*}
                {*{/foreach}*}
                {*</ul>*}
            {*<hr>*}
            {*</p>*}

            <h6 class="chart-title">Heart Rate</h6>
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>


<script src="public/js/Chart.min.js"></script>
<script>
    var heart_rate = {$userData|@json_encode};
    var d = [];
    heart_rate.forEach(function(item) {
        d.push(item.value);
    });
    var data = {
        labels: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
        datasets: [
            {
                label: "AA",
                fillColor: "rgba(150,180,200,0.2)",
                strokeColor: "rgba(150,180,200,1)",
                pointColor: "rgba(150,180,200,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(150,180,200,1)",
                data: d
            }
        ]
    };

    var ctx = document.getElementById("myChart").getContext("2d");
    var myNewChart = new Chart(ctx).Line(data);
    Chart.defaults.global.responsive = true;

</script>
