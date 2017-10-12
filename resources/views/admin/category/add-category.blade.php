@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                @if($message = Session::get('message'))
                <h2 class="text-center text-success">{{ $message }}</h2>
                @endif
                <form class="form-horizontal" action="{{ url('/category/new-category') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">Category Name</label>
                        <div class="col-sm-12">
                            <input type="text" name="category_name" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Category Description</label>
                        <div class="col-sm-12">
                            <textarea type="text" name="category_description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Publiction Status</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="publication_status">
                                <option value="1">Published</option>
                                <option value="0">unpublished</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-12">
                            <input type="submit" name="btn" value="Save Category Info"  class=" form-control btn btn-success btn-block" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection