@extends('master')
@section('content')
 <!-- Main Content -->
<div class="hk-pg-wrapper">
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
   <ol class="breadcrumb breadcrumb-light bg-transparent">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Users</li>
   </ol>
</nav>
<!-- /Breadcrumb -->
<!-- Container -->
<div class="container">
   <!-- Title -->
   <div class="hk-pg-header">
      <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather=""></i></span></span>User</h4>
      <a  style="margin-left: 65%" type="button" onclick="roleAssignment()"  href="#" class="btn btn-primary pull-right">Role Assignment</a>
      <a type="button" href="{{url('user/create')}}" class="btn btn-primary pull-right">Add New User</a>
      
   </div>

   <!-- /Title -->
   {{-- modal --}}
   <div class="modal fade" id="roleAssignmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div class="input-group">
                   <select class="custom-select" required id="roles" name="roles">
                      <option value="" disabled selected>Select Role</option>
                   </select>
                </div>
             </div>
            
            <div class="form-group">
                <div class="input-group">
                   <select class="custom-select" required id="user" name="user">
                      <option value="" disabled selected>Select User</option>
                   </select>

                </div>

             </div>
             
   <div class="row">
      <div class="col-xl-12">
         <section class="hk-sec-wrapper">
            <div class="row">
               <div class="col-sm">
                  <div class="table-wrap">
                     <table id="roleAssignmentTable" class="table table-hover w-100 display pb-30">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>User Name</th>
                              <th>Role</th>
                              <!-- <th>Action</th> -->                                                            
                           </tr>
                        </thead>
                        <tbody>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
        </div>

        <div class="modal-footer">
          <button type="button"  class="btn btn-primary pull-right"  data-dismiss="modal">Close</button>
          <input type="button" onclick="insertOrUpdateRoleAssignment()" class="btn btn-primary pull-right" name="submit" id="submit" value="Save" >
        </div>
      </div>
    </div>
  </div>       
             
   <!-- Row -->
   <div class="row">
      <div class="col-xl-12">
         <section class="hk-sec-wrapper">
            <div class="row">
               <div class="col-sm">
                  <div class="table-wrap">
                     <table id="userTable" class="table table-hover w-100 display pb-30">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Role_id</th>
                           </tr>
                        </thead>
                        <tbody>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <!-- /Row -->
</div>

<script type="text/javascript"> 
                $(document).ready(function () {
                    // Fetch Categories
                    fetchUsers();
                    getRole();
                    getUser();
                    fetchRoleAssignment();
                  //   passingData();
                 
                });
                function fetchRoleAssignment(){
                    // var token =  '{{ Session::get('access_token') }}';
                    // console.log(token);
                    $("#roleAssignmentTable").DataTable().destroy();
                    $('#roleAssignmentTable').DataTable({
                        ajax: {
                            url: "{{ url('/api/role/assignment') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + localStorage.getItem('token')},
                            dataSrc: function (json) {
                                 return json.data;
                            }
                        },   
                        responsive: true,
                        autoWidth: false,
                        language: {
                            search: "",
                            searchPlaceholder: "Search"
                        },
                        'columnDefs': [
                            {
                                "targets": 0, 
                                "className": "text-center",
                            },
                            {
                                "targets": 1,
                                "className": "text-center",
                            },
                            {
                                "targets": 2,
                                "className": "text-center",
                            }
                              
                            ],
                        sLengthMenu: "_MENU_items",
                        columns: [
                            {"data": "id"},
                            {"data": "name"},
                            {"data": "user_role"},

                           //  {
                           //      "data": "null",
                           //      "render": function (data, type, full, meta) {
                           //         let id=full.id;

                           //      return `<div class="input-group ">
                           //            <div class="input-group-prepend btn-block">
                           //          <button class="btn btn-primary dropdown-toggle btn-sm btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                           //          <div class="dropdown-menu">
                           //          <a class="dropdown-item" href="{{url('roleAssignment/edit/${id}')}}">Edit</a>
                           //          <a class="dropdown-item" id="{{'${id}'}}" onclick="deleteme(this)">Delete</a>
                           //          </div>
                           //          </div>
                           //          </div>` 
                           //      }
                           //  }
                        ]

                    });
                }
              

                
         const insertOrUpdateRoleAssignment=()=>{
          

            let roleId = $('#roles').find(":selected").val();
            let userId = $('#user').find(":selected").val();

       $.ajax({
            type: 'POST',
            url: "{{ url('api/role/assignment') }}",
            data: {
               "roleId": roleId,
               "userId": userId,
            } ,
           
            dataType:'JSON',
            headers: {"Authorization": 'Bearer ' + localStorage.getItem('token')},
            beforeSend:function()
               {
                  $('#submit').attr('disabled', 'disabled');
                  $('#submit').val('Saving...');
               },
            success:function(response){
            
               // $('#roleAssignmentModal')[0].reset();
               // console.log(response['message']);
               // $('#roleAssignmentModal').parsley().reset();
               $('#submit').attr('disabled', false);
               $('#submit').val('save');
               Toaster(response['message'],'success');
               fetchRoleAssignment();
               // window.location = "{{ url('roles/show') }}";
               //toastr.info(response['message'],response['result']);
               // alert(response['message']);
            },
            error:function(response){
               Toaster('Something went wrong!','danger');
               // $('#roleAssignmentModal').parsley().reset();
               $('#submit').attr('disabled', false);
               $('#submit').val('save');
               // console.log("error",response);;
            }, 
         });
                 
}
       


//    $("#myFormID").passingData(function(e) {
//     e.preventDefault(); 
//     $.ajax({
     
//          type: "POST",
//          url: "{{ url('api/assignment') }}",
//          data:role:role_id,
//           user:user_id , 

//          success: function(data){
//              console.log(data);
//          }
//     });
// });
                
                function fetchUsers(){
                    // var token =  '{{ Session::get('access_token') }}';
                    // console.log(token);
                    $("#userTable").DataTable().destroy();
                    $('#userTable').DataTable({
                        ajax: {
                            url: "{{ url('/api/auth/user') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + localStorage.getItem('token')},
                            dataSrc: function (json) {
                                 return json.data;
                            }
                        },   
                        responsive: true,
                        autoWidth: false,
                        language: {
                            search: "",
                            searchPlaceholder: "Search"
                        },
                        'columnDefs': [
                            {
                                "targets": 0, 
                                "className": "text-center",
                            },
                            {
                                "targets": 1,
                                "className": "text-center",
                            },
                            {
                                "targets": 2, 
                                "className": "text-center",
                            },
                            {
                                "targets": 3, 
                                "className": "text-center",
                            },
                            {
                                "targets": 4, 
                                "className": "text-center",
                            },
                            {
                                "targets": 5, 
                                "className": "text-left",
                            }
                              
                            ],
                        sLengthMenu: "_MENU_items",
                        columns: [
                            {"data": "id"},
                            {"data": "name"},
                            {"data": "email"},
                            {"data": "phone"},
                            {"data": "user_role"},
                            {
                                "data": "null",
                                "render": function (data, type, full, meta) {
                                   let id=full.id;

                                return `<div class="input-group ">
                                      <div class="input-group-prepend btn-block">
                                    <button class="btn btn-primary dropdown-toggle btn-sm btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('user/edit/${id}')}} ">Edit</a>
                                    <a class="dropdown-item" id="{{'${id}'}}" onclick="deleteme(this)">Delete</a>
                                    </div>
                                    </div>
                                    </div>` 
                                }
                            }
                        ]
                    });
                }

                
    function deleteme(_this){
       // displays the pop-up box 
 swal({
                title: "Delete User!",
                text: "You cannot undo this process!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
            }).then(function(isConfirm) {
                if(isConfirm.value==true){
                    ConfirmedDeleteProduct(_this);
                }else{
                    console.log("cancelled");
                }
            });
    }
   
//This function deletes product at server
function ConfirmedDeleteProduct(_this)  {

        let id=$(_this).attr('id');
        console.log(_this);
        $(_this).closest('tr').remove();
        // console.log("reached here in deleteme and id=",$id);
        let urlv = '{{ url("/api/auth/user", "id") }}';
      urlv = urlv.replace('id', id);
        $.ajax({
                type:  'DELETE',
                url: urlv,
                headers: {"Authorization": 'Bearer ' + localStorage.getItem('token')},
                success:function(response){
                    console.log(response['message']);
                    if(response['message']=='success'){
                        $(_this).closest('tr').remove();

                    }
                      Toaster(response['message'],'success');
                    //   window.location = "{{ url('category/show') }}";
               },
               error:function(response){
              
                      console.log("error",response);
               }, 

    
        });
     }
      //This function is used to get roles
     const getRole=()=>{
      $.ajax({
         type: 'GET',
         url: "{{ url('/api/roles') }}",
         processData: false,
         contentType: false,
         dataType:'JSON',
         headers: {"Authorization": 'Bearer ' + localStorage.getItem('token')},
         beforeSend:function()
         {
                  $("#roles").attr('disabled', 'disabled');
         },
         success:function(response){
            
            let roles=response.data;
            let html="";
               if(response.result=="success"){
               for(let i=0;i<roles.length;i++){
                     html+="<option value="+roles[i].id+">"+roles[i].user_role+"</option>";
                  }
                  $("#roles").append(html);
                  $("#roles").attr('disabled', false);
               } 
         },
         error:function(response){
                     $("#roles").attr('disabled', 'disabled');
            }, 
      });
   }
 
   const getUser=()=>{
      $.ajax({
         type: 'GET',
         url: "{{ url('/api/auth/user') }}",
         processData: false,
         contentType: false,
         dataType:'JSON',
         headers: {"Authorization": 'Bearer ' + localStorage.getItem('token')},
         beforeSend:function()
         {
                  $("#user").attr('disabled', 'disabled');
         },
         success:function(response){
            let user=response.data;
            let html="";
               if(response.result=="success"){
               for(let i=0;i<user.length;i++){
                     html+="<option value="+user[i].id+">"+user[i].name+"</option>";
                  }
                  $("#user").append(html);
                  $("#user").attr('disabled', false);
               } 
         },
         error:function(response){
                     $("#user").attr('disabled', 'disabled');
            }, 
      });
   }
     const roleAssignment =()=>{
        $('#roleAssignmentModal').modal('toggle');
      
     } 
 
</script>
@endsection