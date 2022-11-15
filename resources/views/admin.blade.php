@extends('adminlte::page')

@section('title', 'Aplikasi Peminjaman Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                    <h4 class="header-title" align="center">Statistik User</h4>
                    <canvas id="mataChart" class="chartjs" width="300px" height="100px"></canvas>
                    <h4 class="header-title mt-5" align="center">Statistik Transaksi Yang Belom Kembalikan Buku</h4>
                    <canvas id="mataChart2" class="chartjs" width="300px" height="100px"></canvas>
                    <h4 class="header-title mt-5" align="center">Statistik Transaksi Yang Sudah Kembalikan Buku</h4>
                    <canvas id="mataChart3" class="chartjs" width="300px" height="100px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById("mataChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Statistik User',
        backgroundColor: '#ADD8E6',
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_user); ?>
        }],
        options: {
    animation: {
        onProgress: function(animation) {
            progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
        }
      }
    }
   },
 });

 var ctx = document.getElementById("mataChart2").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Statistik Transaksi',
        backgroundColor: '#ADD8E6',
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_transaksi_belom_kembalikan_buku); ?>
        }],
        options: {
    animation: {
        onProgress: function(animation) {
            progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
        }
      }
    }
   },
 });

 var ctx = document.getElementById("mataChart3").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Statistik User',
        backgroundColor: '#ADD8E6',
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_transaksi_sudah_kembalikan_buku); ?>
        }],
        options: {
    animation: {
        onProgress: function(animation) {
            progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
        }
      }
    }
   },
 });
</script>
@endpush