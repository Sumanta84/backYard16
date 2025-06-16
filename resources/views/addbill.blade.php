@include('layout.header')
    <div class="container">
        <div class="row">

            @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul>
                        <li>Sorry your requset can not be completed as all the input fields needs to be fiil up . Please check the form and fill properly ..</li>
                     
                    </ul>
                </div>
            @endif

            <div class="col-sm-12 mt-4">
                <form action="{{route('addbilldetails')}}" method="post">
                    @csrf
                    <label for="">Select client</label>
                    <select class="form-select" id="selectclient" name="selectclient" onchange="getclientdetails(this)">
                        <option value="" selected disabled>select any one..</option>
                        @foreach($data as $key => $value)
                            <option value="{{$value->id}}" @if(old('selectclient') == $value->id) selected @endif>{{$value->name}}</option>
                        @endforeach
                    </select>
                   
                    <div id="selectedclientdetails" @if(old('selectclient')==null) class="hideclientinfo" @else class="showclientinfo" @endif>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3 mt-3">
                                    <label for="" class="form-label">Client name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" readonly>
                                  </div>
                                
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3 mt-3">
                                  <label for="" class="form-label">Client Email:</label>
                                  <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" readonly>
                                </div>
                          
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3 mt-3">
                                  <label for="" class="form-label">Client Contact-no:</label>
                                  <input type="text" class="form-control" id="contactno" name="contactno" value="{{old('contactno')}}" readonly>
                                </div>
                            
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3 mt-3">
                                  <label class="form-label">Client Address:</label>
                                  <textarea name="address" class="form-control" id="address" cols="120" rows="3" readonly>{{old('address')}}</textarea>
                                </div>
                             
                            </div>
                        </div>
                    </div>

                    <div class="form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="gst" name="gst" value="1" @if(old('gst')!=null) checked @endif>
                        <label class="form-check-label" for="">GST</label>
                    </div> 
                    <div class="mb-3 mt-3">
                        <label for="" class="form-label">Project title:</label>
                        <input type="text" class="form-control" id="projecttitle" name="projecttitle" value="{{old('projecttitle')}}">
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <a href="javascript:void(0)" class="btn btn-xs btn-primary" onclick="addworkdetails()">Add Work Details &nbsp<i class="fa-solid fa-plus" id="faplus"></i></a>
                        </div>
                       
                        <div class="col-sm-12">
                            @if(old('workdetails')!=null)
                                <div id="workadddiv">
                                    @foreach(old('workdetails') as $key => $value)
                                    <div class="row" id="{{$key}}">
                                        <div class="col-sm-6">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Work type:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$key}}][worktype]" name="workdetails[{{$key}}][worktype]" value="{{$value['worktype']}}">
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-6">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Work description:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$key}}][workdescription]" name="workdetails[{{$key}}][workdescription]" value="{{$value['workdescription']}}">
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-4">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Rate:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$key}}][rate]" name="workdetails[{{$key}}][rate]" value="{{$value['rate']}}">
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-4">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Quantity:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$key}}][quantity]" name="workdetails[{{$key}}][quantity]" value="{{$value['quantity']}}">
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-4">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Price:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$key}}][price]" name="workdetails[{{$key}}][price]" value="{{$value['price']}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="text-align:right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="removediv('{{$key}}')"><i class="fa-solid fa-xmark"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" id="savebutton" class="btn btn-xs btn-success showclientinfo">Save detials</button>
                        </div>

                        @else
                            <div id="workadddiv">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" id="savebutton" class="btn btn-xs btn-success hideclientinfo">Save detials</button>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('layout.footer') 