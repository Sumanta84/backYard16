<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function addworkdetails(){
        let targetelem = $('#workadddiv');
        let tagetlastchildelem=$(targetelem).children().last();
        let html ='';
        if(tagetlastchildelem.length > 0){
            let lastchildid=tagetlastchildelem.attr('id');
            lastchildid=Number(lastchildid)+1;
            html+='<div class="row" id="'+lastchildid+'">';
            html+='<div class="col-sm-6">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Work type:</label>';
            html+='<input type="text" class="form-control" id="workdetails['+lastchildid+'][worktype]" name="workdetails['+lastchildid+'][worktype]">';
            html+='</div>';
            html+='</div>';

            html+='<div class="col-sm-6">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Work description:</label>';
            html+='<input type="text" class="form-control" id="workdetails['+lastchildid+'][workdescription]" name="workdetails['+lastchildid+'][workdescription]">';
            html+='</div>';
            html+='</div>';

            html+='<div class="col-sm-4">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Rate:</label>';
            html+='<input type="text" class="form-control" id="workdetails['+lastchildid+'][rate]" name="workdetails['+lastchildid+'][rate]">';
            html+='</div>';
            html+='</div>';

            html+='<div class="col-sm-4">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Quantity:</label>';
            html+='<input type="text" class="form-control" id="workdetails['+lastchildid+'][quantity]" name="workdetails['+lastchildid+'][quantity]">';
            html+='</div>';
            html+='</div>';

            html+='<div class="col-sm-4">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Price:</label>';
            html+='<input type="text" class="form-control" id="workdetails['+lastchildid+'][price]" name="workdetails['+lastchildid+'][price]">';
            html+='</div>';
            html+='</div>';
            html+='<div class="col-sm-12" style="text-align:right">';
            html+='<a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="removediv(\''+lastchildid+'\')"><i class="fa-solid fa-xmark"></i></a>';
            html+='</div>';
            html+='</div>';
            $('#workadddiv').append(html);   
        }else{
            html+='<div class="row" id="0">';
            html+='<div class="col-sm-6">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Work type:</label>';
            html+='<input type="text" class="form-control" id="workdetails[0][worktype]" name="workdetails[0][worktype]">';
            html+='</div>';
            html+='</div>';

            html+='<div class="col-sm-6">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Work description:</label>';
            html+='<input type="text" class="form-control" id="workdetails[0][workdescription]" name="workdetails[0][workdescription]">';
            html+='</div>';
            html+='</div>';

            html+='<div class="col-sm-4">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Rate:</label>';
            html+='<input type="text" class="form-control" id="workdetails[0][rate]" name="workdetails[0][rate]">';
            html+='</div>';
            html+='</div>';

            html+='<div class="col-sm-4">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Quantity:</label>';
            html+='<input type="text" class="form-control" id="workdetails[0][quantity]" name="workdetails[0][quantity]">';
            html+='</div>';
            html+='</div>';

            html+='<div class="col-sm-4">';
            html+='<div class="mb-3 mt-3">';
            html+='<label for="" class="form-label">Price:</label>';
            html+='<input type="text" class="form-control" id="workdetails[0][price]" name="workdetails[0][price]">';
            html+='</div>';
            html+='</div>';
            html+='<div class="col-sm-12" style="text-align:right">';
            html+='<a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="removediv(\''+0+'\')"><i class="fa-solid fa-xmark"></i></a>';
            html+='</div>';
            html+='</div>';
            $('#workadddiv').html(html);            
        }       
        $("html, body").animate({ scrollTop: $(document).height() });
        checkingforsaveoption();

    }
    function removediv(id){
        let targetremoveelem = $('#'+id);
        $(targetremoveelem).remove();   
        checkingforsaveoption();    
    }
    function checkingforsaveoption(){        
        let targetelem = $('#workadddiv').children().last();        
        if(targetelem.length>0){
            if($('#savebutton').hasClass('hideclientinfo')){
                $('#savebutton').removeClass('hideclientinfo');
                $('#savebutton').addClass('showclientinfo');
            }
        }else{
            $('#savebutton').removeClass('showclientinfo');
            $('#savebutton').addClass('hideclientinfo');
        }
    }

    function getclientdetails(elem){
        let elemval = $(elem).val();
        // console.log(elemval);
        
        fetchingclient(elemval);
        if($('#selectedclientdetails').hasClass('hideclientinfo')){
            $('#selectedclientdetails').removeClass('hideclientinfo');
            $('#selectedclientdetails').addClass('showclientinfo');
        }
    }
    function fetchingclient(client){
        let token = $('[name="_token"]').val();        
        $.ajax({
            url:'{{route('getclient')}}',
            type:'post',
            dataType:'json',
            data:{'id':client,'_token':token},
            success:function(data){
                if(data.client != null){
                    $('form #name').val(data.client.name);
                    $('form #email').val(data.client.email);
                    $('form #contactno').val(data.client.phone);
                    $('form #address').val(data.client.address);
                }
            }
        })
    }
</script>
</body>
</html>