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

<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Current Mailchimp API</h5>
          <p class="card-text">{{ setting('mailchimp.mailchimpApi') }}</p>
          <a href="{{ url('admin/settings') }}" class="btn btn-primary">Edit in settings</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Current Mailchimp List ID</h5>
          <p class="card-text">{{ setting('mailchimp.mailchimpList') }}</p>
          <a href="{{ url('admin/settings') }}" class="btn btn-primary">Edit in settings</a>
        </div>
      </div>
    </div>
  </div>

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
