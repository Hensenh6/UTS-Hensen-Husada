@extends("template")
@section('title','Category')
@section('content')
<h3 style="text-align: center;padding-top: 15px">{{$row[0]->name}}</h2>
<div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 75px; padding-top: 30px;">
   <?php
        foreach ($row as $key=>$val) {


    ?>
    <div class="col">
        <div class="card">
            <img src="<?php echo $val->image?>" class="card-img-top" style="height: 400px">
            <div class="card-body" style="height: 250px">
            <h5 class="card-title"><b><?php echo $val->title?></b></h5>
            <h6>by</h6>
            <h6 style="flex: 1" class="byauthor"><?php echo $val->author?></h6>
            <br>
            <a href="/detailbooks/{{$val->book_id}}"><button type="button" class="btn btn-primary"
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

