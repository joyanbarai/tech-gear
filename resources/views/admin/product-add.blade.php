@extends('layouts.admin-main')

@section('title')
    <title>Add New Product</title>
@endsection

@section('middle')
  <div class="container">
    <div class="row mt-4">
      <div class="col-12 pt-1">
        <h4 class="text-center text-danger mb-3">Add New Product To <?php echo ucfirst($table);?><a href="/admin/product-control/add-product" class=" float-right btn btn-danger btn-sm"><i class="fas fa-backward"> Back</i></a></h4>
      </div>          
    </div>
		
		@if ($errors->any())
    	<div class="alert alert-danger">
        	<ul>
            	@foreach ($errors->all() as $error)
                	<li>{{ $error }}</li>
            	@endforeach
        	</ul>
    	</div>
		@endif

    <form method="POST" enctype="multipart/form-data">
        <?php 
          $rowStart = 2;
          $rowEnd = 1;
          $temp = "";
          $oldData = session()->get('oldData');
          
          foreach($columns as $c)
          {
            $temp = $c->Column_Name;
            $type = $c->Column_Type;
            $t = str_replace('_',' ',$temp);
        
            if(($rowStart)%2 == 0)
            {
        ?>
              <div class='row'>
      <?php } ?>
                <div class='form-group col-6'>
                <?php if($c->Required == null)
                      {
                ?>
                        <label class='text-primary'>{{$t}}</label>
                <?php }
                      else
                      {
                ?>
                        <label class='text-primary'>{{$t}}<i class='h5 text-danger'> ****</i></label>
                <?php }

                      
                      if($temp =="Quantity" || $temp=="Price")
                      {
                ?>
                        <input type='{{$c->Column_Type}}' min='0' max='{{$c->Max_Length}}' class='form-control' name='{{$temp}}' value="<?php if($oldData){ echo array_pop($oldData);} ?>" {{$c->Required}}>
                <?php }
                      else
                      {
                ?>
                        <input type='{{$c->Column_Type}}' maxlength='{{$c->Max_Length}}' class='form-control' name='{{$temp}}' value="<?php if($oldData){ echo array_pop($oldData);} ?>" {{$c->Required}}>
                <?php } ?>
                      
                      <small class='form-text text-danger'> Suggestion: {{$c->Dummy_Data}}</small>
                </div>
          <?php  if(($rowEnd)%2 == 0)
            {
              echo"</div>";
            }
            $rowStart++;
            $rowEnd++;
          }

          if(($rowEnd)%2 == 0)
          {
            echo"</div>";
          }
        ?>

        <div class="row">
          <div class="col-3">
            <label class='text-primary'>Picture-1<i class='h5 text-danger'> ****</i></label>
            <input type="file" class="form-control-file" name="Picture_1" accept="image/png,image/jpeg" required>          
            <small class='form-text text-danger'> Note: This will be Considered as main picture</small>
          </div>
          <div class="col-3">
            <label class='text-primary'>Picture-2</label>
            <input type="file" class="form-control-file" name="Picture_2" accept="image/png,image/jpeg">
            <small class='form-text text-danger'> Note: Picture-2 is optional</small>
          </div>
          <div class="col-3">
            <label class='text-primary'>Picture-3</label>
            <input type="file" class="form-control-file" name="Picture_3" accept="image/png,image/jpeg">
            <small class='form-text text-danger'> Note: Picture-3 is optional</small>
          </div>
          <div class="col-3">
            <label class='text-primary'>Picture-4</label>
            <input type="file" class="form-control-file" name="Picture_4" accept="image/png,image/jpeg">
            <small class='form-text text-danger'> Note: Picture-4 is optional</small>
          </div>
        </div>
        </br>
        <div class="row">
          <div class="col-3">
            <label class='text-primary'>Picture-5</label>
            <input type="file" class="form-control-file" name="Picture_5" accept="image/png,image/jpeg">
            <small class='form-text text-danger'> Note: Picture-5 is optional</small>
          </div>
          <div class="col-3">
            <label class='text-primary'>Picture-6</label>
            <input type="file" class="form-control-file" name="Picture_6" accept="image/png,image/jpeg">
            <small class='form-text text-danger'> Note: Picture-6 is optional</small>
          </div>
        </div>
        </br>
        <button type="submit" class="btn btn-block btn-lg btn-success">Submit</button>  			
		</form>
	</div>
@endsection