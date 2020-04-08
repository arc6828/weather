@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">Ocr</div>
                    <div class="card-body">
                    
                        <a href="{{ url('/ocr/create') }}" class="btn btn-success btn-sm" title="Add New Ocr">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New 
                        </a>
                    

                        <form method="GET" action="{{ url('/ocr') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                        <div class="table-responsive" >
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Owner</th>
                                        <th>Level</th>
                                        <th>Extract Data</th>
                                        
                                        <th>Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ocr as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div>Msg.ID : {{ $item->msgocrid }}</div><div><img src="{{ url('storage') }}/{{ $item->photo }}" width=100 /> </div><div>สร้างเมื่อ : {{ $item->created_at }}</div>
                                        </td>
                                        <td>
                                            <div> รหัสสถานที่ : {{ $item->locationid }}</div><div> รหัสมาตรวัด : {{ $item->staffgaugeid }}</div>
                                        </td>
                                        <td><div>ระดับน้ำ : {{ $item->title }}</div></td>
                                        <td style="max-width:200px;">{{ $item->content }}</td>
                                        
                                            
                                            <td>  
                                                <a href="{{ url('/ocr/' . $item->id) }}" title="View Ocr"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/ocr/' . $item->id . '/edit') }}" title="Edit Ocr"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/ocr' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Ocr" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                            
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $ocr->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>

               
                
            </div>
        </div>
    </div>
@endsection
