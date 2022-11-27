@extends("template")
@section('title','Detail Publisher')
@section('content')
<div style="height: 79vh">
<div style="display: flex;padding: 100px;gap: 50px;align-items: center;height: 100%;" >
    <img src="<?php echo $row->image?>" class="card-img-top" style="width: 20%" >
    <div class="card-body" style="padding: 90px">
        <div class="card text-bg-warning mb-3"style="max-width: 45rem;">
       <b> Nama Penerbit = <?php echo $row->name?><br>
        Alamat Penerbit = <?php echo $row->address?>
        <br>
        Nomor Telepon = <?php echo $row->phone?><br>
        Email = <?php echo $row->email?>
        </b>
      </div>
    </div>
</div>
</div>
</div>



@endsection

