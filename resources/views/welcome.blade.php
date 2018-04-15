<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>NR-Challenge</title>

        <!-- <link href="{{ asset('css/app.css') }}" rel=stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>Licitações da <?php echo $institution; ?></h1>
                </div>
                <div>
                @foreach ($biddings as $bid)
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Numero</th>
                            <th>Objeto</th>
                            <th>Abertura</th>
                            <th>Atualização</th>
                            <th>Informações</th>
                        </tr>
                        <tr>
                            <td>{{$bid['number']}}</td>
                            <td>{{$bid['object']}}</td>
                            <td>{{$bid['opening_date']}}</td>
                            <td>{{$bid['last_update']}}</td>
                            <td><a href="{{$bid['auction_notice']}}">Edital</a></br>
                                <a href="{{$bid['proposal_model']}}">Modelo de Proposta</a>
                            </td>
                        </tr>
                    </table>
                    <div>
                    @endforeach
                <div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ URL::asset('js/app.js')}}">
        </script>
-->
    </body>
</html>
