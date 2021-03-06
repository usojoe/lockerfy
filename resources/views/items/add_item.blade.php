@extends('layouts.master')
@section('title', 'Add Item')
@section('content')

<div class="maincontainer">
  <div class="col-md-2 leftbar">
    @include('layouts.menu')
  </div>

  <div class="col-md-10 rightBar">
    <form class="form-horizontal" method="post" action="{{url('/saveitem')}}" enctype="multipart/form-data">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Add Locker</h3>
        </div>
        <div class="panel-body">
          <table>
            <tr>
              <td>Locker Number:</td>
              <td>
                <input type="text" name="title" value="{{ old('title') }}" >
                {!! $errors->first('title', '<span class="help-block text-danger">:message</span>') !!}
              </td>
            </tr>

            <tr>
              <td>Description: </td>
              <td>
                <textarea name="item_description">{{ old('item_description') }}</textarea>
                {!! $errors->first('item_description', '<span class="help-block text-danger">:message</span>') !!}
              </td>
            </tr>

            <tr><td colspan="2">&nbsp;</td></tr>

            <tr>
              <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
              <td>
                <input type="submit" name="add_user" value="Add Item" class="btn btn-default" />
                <a href="{{ URL::to('itemlist') }}" class="btn btn-default">Back</a>
              </td>
            </tr>
          </table>
        </div>
      </div>



    </form>
  </div>

  <div style="clear: both;"></div>
</div>

@endsection
