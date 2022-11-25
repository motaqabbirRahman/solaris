@extends('admin.admin_master')

@section('dashboard')
  <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->



    <div class="row-fluid-sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/categories/'.$category->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Category Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" value="{{$category->name}}">
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3" required>{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input class="btn-inp" type="file" name="image">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button class="btn" type="submit">Update Category</button>
                        </div>
                    </fieldset>
                    <p class="alert-success">
                        <?php
                            $message = Session::get('message');
                            if($message)
                            {
                                echo $message;
                                Session::put('message',null);
                            }
                            ?>
                        </p>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->
@endsection