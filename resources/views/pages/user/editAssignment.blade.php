@extends('master')
@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
   <ol class="breadcrumb breadcrumb-light bg-transparent">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item " aria-current="page">Role Assignment</li>
      
   </ol>
</nav>
<!-- /Breadcrumb -->
<!-- Container -->
<div class="container">
   <!-- Title -->
   <div class="hk-pg-header">
      <h4 class="hk-pg-title offset-md-2"><span class="pg-title-icon"><span class="feather-icon"><i data-feather=""></i></span></span>Edit Role Assignment</h4>
   </div>
   <!-- /Title -->
</div>
<form id="roleAssignmentForm" enctype="multipart/form-data">
   <div class="row ">
      <div class="col-sm-8 offset-md-2">
         <div class="form-group">
            <div class="input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text"  id="inputGroup-sizing-default">Role Assignment</span>
               </div>
               <input type="text" id="roleAssignment" class="form-control" required name="name" aria-label="no default" aria-describedby="inputGroup-sizing-default">
            </div>
         </div>
        
         <input  onclick="updateRole()"  class="btn btn-primary pull-right" name="submit" id="submit" value="update" >
      </div>
   </div>
</form>



<script type="text/javascript"> 
   $(document).ready(function () {
      
      var id = "{!! $id !!}";
      let urlv = '{{ url("/api/role/assignment", "id") }}';
      urlv = urlv.replace('id', id);
                            $.ajax({
                              url: urlv,
                              type:  'GET',
                              dataType: 'JSON',
                              headers: {"Authorization": 'Bearer ' + localStorage.getItem('token')},
                              dataSrc: function (json) {
                                     return json.data;
                                 },
                              success:function(response){
                                 let temp=response.data;
                                    
                                    //$("name").val(temp.name);
                                    //  $("banner").val(temp.banner);
                                    //$("icon").val(temp.icon);
                                    //console.log( $("banner").val);
                                     // console.log(document.getElementById("banner"));
                                      document.getElementById("roleAssignment").value=temp.role_id;
                                 //   document.getElementById("banner").value= temp.banner;
                                 //   document.getElementById("icon").value= temp.icon;
                                  },
                             error:function(response){
              
                               console.log(" the error here is:",response);
                              }, 
             });
      
   // }

   });
function updateRole()
{
   event.preventDefault();
   $('#roleAssignmentForm').parsley();
  
   console.log("reached in update role");
      var id = "{!! $id !!}";
      let urlv = '{{ url("/api/roles", "id") }}';
      urlv = urlv.replace('id', id);
      if($('#roleAssignmentForm').parsley().isValid())
    {
      console.log("reached in parsley is valid");  
         let nameVal=$('#roleAssignment').val();
         var fdd = new FormData();
         let roleAssignment=$('#roleAssignment').val();
         
        
   $.ajax({
                type:  'POST',
                url: urlv,
                dataType:'JSON',
                 data: {
                "roleAssignment":roleAssignment,
                "id":id
                 } ,
                 headers: {"Authorization": 'Bearer ' + localStorage.getItem('token')},
             
               beforeSend:function()
                {
                    $('#submit').attr('disabled', 'disabled');
                    $('#submit').val('updating...');
                },
               success:function(response){
                      $('#roleAssignmentForm')[0].reset();
                     
                      console.log(response['message']);
                      $('#roleAssignmentForm').parsley().reset();
                      $('#submit').attr('disabled', false);
                      $('#submit').val('update');
                     //  $("#banner").val(" ");
                      Toaster(response['message'],'success');
                      window.location = "{{ url('roles/show') }}";
               },
               error:function(response){
                  Toaster('Something went wrong!','danger');
                  $('#roleAssignmentForm').parsley().reset();
                      $('#submit').attr('disabled', false);
                      $('#submit').val('update');
                      console.log("error",response);
               }, 
             });
}
}
    
</script>
@endsection
