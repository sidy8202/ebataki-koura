<!-- @extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif -->
   <!-- affichage du message d'erreur -->
   <!-- @if(count($errors) > 0)
      <div class=" alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>    
              @endforeach
          </ul>
      </div>
    @endif
    @if (session('success'))
      <div class="alert alert-success">
          <p>{{ session('success') }}</p>
      </div> 
    @endif -->
    <!-- fin  -->

    <!-- les liens js et data table --> 
<!-- JavaScript Bundle with Popper -->
 
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 <script>
    $(document).ready( function () 
    {
        $('#datatable').DataTable();
    } );
</script>

{{-- Hide content of table --}}

<script>
    $(document).ready( function () {
        $('.masque').hide();
    } );
</script>

{{-- End of hide --}}
@endsection

@section("scripts") -->

<!-- Js modification -


@endsection -->