@extends('layouts.app')

@section('title', 'Statistics')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    var analytics = <?php echo $category; ?>;

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable(analytics);

        var options = {
            width: 600,
            height: 500
        };

        var chart = new google.visualization.PieChart(document.getElementById('category'));

        chart.draw(data, options);
    }
</script>

@section('content')
    <a href="/"><i title="Regresar" class="small material-icons left">arrow_back</i></a>
    <div class="col s12">
        <h2 class="header center-align">Estadísticas</h2>
        <div class="card horizontal">
            <div class="card-image">
                <div id="category"></div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p>{{$countC}} categorías</p>
                    <p>{{$countB}} libros</p>
                    <p>{{$countA}} autores</p>
                </div>
            </div>
        </div>
    </div>
@endsection
