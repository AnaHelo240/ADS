<form action="{{url('cadastro')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br><input type="text" name="capitulo" placeholder="Capítulo:" class="form-control">
    <br><input type="text" name="titulo" placeholder="Título:" class="form-control">
    <br><input type="text" name="sinopse" placeholder="Sinopse:" class="form-control">
    <br><input type="file" name="arquivo[]" class="form-control" multiple="multiple">
    <div class="danger"></div>
    <br><button type="submit" class="btn btn-primary">Enviar</button>
<form>