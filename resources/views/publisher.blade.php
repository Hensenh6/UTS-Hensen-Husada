<?php
    $connect = mysqli_connect("localhost", "root", "", "giantbook");
     if(mysqli_connect_errno()){
         throw new exception("MySQL failed to connect").mysqli_connect_error();
     }
    $query = $connect->query("SELECT * FROM publishers");
?>
@extends("template")
@section('title','Publisher')
@section('content')
<br>
<
<h3 style="text-align: center">Publishers List</h3>
<br>
<div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 75px; padding-top: 0;">
    <?php
        while($row = mysqli_fetch_assoc($query)){
    ?>
    <div class="col">
        <div class="card" style="height: 510px">
            <img src="<?php  echo $row['image']?>" class="card-img-top" >
            <div class="card-body">
            <h5 class="card-title"><b><?php echo $row['name']?></b></h5>
            <h6>by</h6>
            <h6 class="byauthor"><?php echo $row['address']?></h6>
            <br>
            <a href="/detailpublisher/{{$row['publisher_id']}}"><button type="button" class="btn btn-primary"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;position: absolute;bottom: 10px;">Detail</button></a>
            </div>
        </div>
        <br>
    </div>
    <?php
    }
    ?>
</div>
@endsection
