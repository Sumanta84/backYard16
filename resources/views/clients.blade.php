
@include('layout.header')
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
           <b>All the clients list :</b>
        </div>
        <div class="col-sm-12 mt-4">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                  </tr>
                </thead>
                @if(!empty($data))
                    <?php $i=1; ?>
                    <tbody>
                        @foreach($data as $key=>$value)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->address}}</td>
                                <td>{{$value->phone}}</td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>
              </table>
                @else
                <tbody>
                    <tr>
                        <td>No clients avaiable yet ...</td>
                    </tr>
                </tbody>
            </table>
            @endif

        </div>
    </div>
</div>
@include('layout.footer') 

