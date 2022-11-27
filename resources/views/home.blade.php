<?php
    $connect = mysqli_connect("localhost", "root", "", "giantbook");
     if(mysqli_connect_errno()){
         throw new exception("MySQL failed to connect").mysqli_connect_error();
     }
    $query = $connect->query("SELECT book_id, title, author, image FROM books");
?>
@extends("template")
@section('title','Home')
@section('content')

<div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 75px; padding-top: 0;">
    <?php
        while($row = mysqli_fetch_assoc($query)){
    ?>
    <div class="col">
        <div class="card">
            <img src="<?php echo $row['image']?>" class="card-img-top" style="height: 400px">
            <div class="card-body" style="height: 250px">
            <h5 class="card-title"><b><?php echo $row['title']?></b></h5>
            <h6>by</h6>
            <h6 style="flex: 1" class="byauthor"><?php echo $row['author']?></h6>
            <br>
            <a href="/detailbooks/{{$row['book_id']}}"><button type="button" class="btn btn-primary"
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
