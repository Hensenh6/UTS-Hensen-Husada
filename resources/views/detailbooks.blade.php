@extends("template")
@section('title','Detail Book')
@section('content')
<div style="height: 79vh">
<div style="display: flex;padding: 100px;gap: 50px;align-items: center;height: 100%;" >
    <img src="<?php echo $row->image?>" class="card-img-top" style="width: 20%" >
    <div class="card-body" style="padding: 90px">
       <b> Judul Buku = <?php echo $row->title?><br>
        Author = <?php echo $row->author?>
        <br>
        Tahun Terbit = <?php echo $row->year?></b>
        <br><br>

        <div class="card text-bg-light mb-3"style="max-width: 45rem;">
            <div class="card-body" style="">
              <h5 class="card-title">Sinopsis</h5>
              <p class="card-text"><?php echo $row->synopsis?></p></p>
            </div>

      </div>
</div>
</div>
</div>



@endsection

