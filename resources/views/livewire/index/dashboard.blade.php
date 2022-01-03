@section('title', 'Dashboard')
{{-- Admin Dashboard Panel --}}
<main id="dashboard">
    <section id="topSideDashboard">
        <div class="statistics">
            <h6>تعداد کل کاربران</h6>
            <h6>99</h6>
            <a href="#">مشاهده بیشتر</a>
        </div>
        <div class="statistics">
            <h6>تعداد کل تسک ها</h6>
            <h6>99</h6>
            <a href="#">مشاهده بیشتر</a>
        </div>
        <div class="statistics">
            <h6>میزان کل زمان</h6>
            <h6>99</h6>
            <a href="#">مشاهده بیشتر</a>
        </div>
        <div class="statistics">
            <h6>جدید ترین ها</h6>
            <h6>99</h6>
            <a href="#">مشاهده بیشتر</a>
        </div>
        <div class="statistics">
            <h6>انجام شده ها</h6>
            <h6>99</h6>
            <a href="#">مشاهده بیشتر</a>
        </div>
    </section>
    <section id="bottomSideDashboard">
        <article id="details">
            <div class="detailStatistic">
                <h6>آمار کاربران</h6>
                <h6>99</h6>
                <a href="#">مشاهده بیشتر</a>
            </div>
            <div class="detailStatistic">
                <h6>آمار تسک ها</h6>
                <h6>99</h6>
                <a href="#">مشاهده بیشتر</a>
            </div>
        </article>
        <article id="total">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </article>
    </section>
</main>

<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "#0022ff",
                borderColor: "#47f",
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            scales: {
                yAxes: [{ticks: {min: 6, max:16}}],
            }
        }
    });
</script>
