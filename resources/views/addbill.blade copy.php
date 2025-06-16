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
                    @error('selectclient')
                    <span>{{$message}}</span>
                    @enderror
                    <div id="selectedclientdetails" @if(old('selectclient')==null) class="hideclientinfo" @else class="showclientinfo" @endif>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3 mt-3">
                                    <label for="" class="form-label">Client name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" readonly>
                                  </div>
                                  @error('name')
                                  <span>{{$message}}</span>
                                  @enderror
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3 mt-3">
                                  <label for="" class="form-label">Client Email:</label>
                                  <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" readonly>
                                </div>
                                @error('email')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3 mt-3">
                                  <label for="" class="form-label">Client Contact-no:</label>
                                  <input type="text" class="form-control" id="contactno" name="contactno" value="{{old('contactno')}}" readonly>
                                </div>
                                @error('contactno')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3 mt-3">
                                  <label class="form-label">Client Address:</label>
                                  <textarea name="address" class="form-control" id="address" cols="120" rows="3" readonly>{{old('address')}}</textarea>
                                </div>
                                @error('address')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="gst" name="gst" value="1" @if(old(gst)!=null) checked @endif>
                        <label class="form-check-label" for="">GST</label>
                    </div> 
                    @error('gst')
                    <span>{{$message}}</span>
                    @enderror

                    <div class="mb-3 mt-3">
                        <label for="" class="form-label">Project title:</label>
                        <input type="text" class="form-control" id="projecttitle" name="projecttitle">
                        @error('projecttitle')
                        <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <a href="javascript:void(0)" class="btn btn-xs btn-primary" onclick="addworkdetails()">Add Work Details &nbsp<i class="fa-solid fa-plus" id="faplus"></i></a>
                        </div>
                        <div class="col-sm-12">
                            @if(session('workdetailscount')!=null)
                                <div id="workadddiv">
                                    @for ($i =0 ; $i < session('workdetailscount'); $i++)
                                    <div class="row" id="{{$i}}">
                                        <div class="col-sm-6">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Work type:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$i}}][worktype]" name="workdetails[{{$i}}][worktype]">
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-6">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Work description:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$i}}][workdescription]" name="workdetails[{{$i}}][workdescription]">
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-4">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Rate:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$i}}][rate]" name="workdetails[{{$i}}][rate]">
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-4">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Quantity:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$i}}][quantity]" name="workdetails[{{$i}}][quantity]">
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-4">
                                            <div class="mb-3 mt-3">
                                            <label for="" class="form-label">Price:</label>
                                            <input type="text" class="form-control" id="workdetails[{{$i}}][price]" name="workdetails[{{$i}}][price]">
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="text-align:right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="removediv('{{$i}}')"><i class="fa-solid fa-xmark"></i></a>
                                        </div>
                                    </div>
                                    @endfor
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