@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ข้อมูลย้อนหลัง</div>
                        <div class="card-body">
                        <a href="{{ url('/weather/create') }}" class="btn btn-success btn-sm" title="Add New Weather">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล</a>
                        <form method="GET" action="{{ url('/weather') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Report</th>
                                        <th>Outfalls</th>
                                        <th>Kmls</th>
                                        <th>Profiles</th>
                                        <th class="d-none">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($weather as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        
                                        <td>
                                            <a class="" href= "{{ url('/weather/' . $item->id) }}" title="View Weather ">                                            
                                                {{ $item->report_generate }}
                                            </a>                                            
                                        </td>
                                        <td>{{ $item->weather_bangkok }}</td>
                                        <td> <a class="btn btn-dark btn-sm" href=" {{ asset('/storage') }}/{{ $item->Outfalls }}" target="_blank"><img src="{{ asset('/storage') }}/{{ $item->Outfalls }}" width="50" /></a></td>
                                        <td> <a class="btn btn-secondary btn-sm" href=" {{ asset('/storage') }}/{{ $item->kmls }}"><i class="icon-file"></i> KMZ File</a></td>
                                        <td> 
                                            <a class="btn btn-dark btn-sm" href=" {{ asset('/storage') }}/{{ $item->profiles }}" target="_blank"><img src="{{ asset('/storage') }}/{{ $item->profiles }}"  width="50"/></a>
                                         
                                            <a class="btn btn-dark btn-sm" href=" {{ asset('/storage') }}/{{ $item->profiles2 }}" target="_blank"><img src="{{ asset('/storage') }}/{{ $item->profiles2 }}"  width="50"/></a>
                                          
                                            <a class="btn btn-dark btn-sm" href=" {{ asset('/storage') }}/{{ $item->profiles3 }}" target="_blank"><img src="{{ asset('/storage') }}/{{ $item->profiles3 }}"  width="50"/></a>
                                         
                                            <a class="btn btn-dark btn-sm" href=" {{ asset('/storage') }}/{{ $item->profiles4 }}" target="_blank"><img src="{{ asset('/storage') }}/{{ $item->profiles4 }}"  width="50"/></a>
                                         
                                            <a class="btn btn-dark btn-sm" href=" {{ asset('/storage') }}/{{ $item->profiles5 }}" target="_blank"><img src="{{ asset('/storage') }}/{{ $item->profiles5 }}"  width="50"/></a>
                                        </td>
                                        <td class="d-none">
                                            <a class="" href= "{{ url('/weather/' . $item->id) }}" title="View Weather "><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a class="d-none" href="{{ url('/weather/' . $item->id . '/edit') }}" title="Edit Weather"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form class="d-none" method="POST" action="{{ url('/weather' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm"class="d-none" title="Delete Weather" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $weather->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
