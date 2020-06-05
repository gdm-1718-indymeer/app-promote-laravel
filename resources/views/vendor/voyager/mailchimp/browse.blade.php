 @extends('voyager::master')
 @section('page_header')
 <div class="container-fluid">
     <h1 class="page-title">
         <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }} Subscribers
     </h1>
    
     @include('voyager::multilingual.language-selector')
 </div>
@stop

@section('content')
@inject('provider', 'App\Http\Controllers\MailchimpController')

    <form style="margin-bottom: 200px;">
        
        <div class="form-group mx-sm-3 mb-2">
            <label for="staticEmail" class="col-md-2 col-form-label text-center"><b>API</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" placeholder="{{ config('newsletter.apiKey') }} ">
            </div>

        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword" class="col-md-2 col-form-label text-center"><b>LIST ID</b></label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="{{ config('newsletter.lists.subscribers.id') }} ">
            </div>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        {{ csrf_field() }}
    </form>

    <table class="table table-striped " >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">List Id</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($provider::showMembers() as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item['email_address'] }}</td>
                    <td>{{ $item['status'] }}</td>
                    <td>{{ $item['list_id'] }}</td>
                </tr>
             @endforeach    
        </tbody>
      </table>
@endsection
