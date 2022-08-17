//loading the data in the table
loadData();

let btnAction = "insert";

$("#addNew").click(function(){
  $("#studentModal").modal("show");
})

//
$("#studentForm").submit(function(event){
  event.preventDefault();

  //gets the form data
  let formData = new FormData($("#studentForm") [0]);

  //adds the action to the form
  if(btnAction == "insert"){
    formData.append("action", "studentRegistration");
  }else{
    formData.append("action", "updateStudent");
  }

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: formData,
    processData: false,
    contentType: false,
    success:function(data){

      let status = data.status;
      let response = data.data;

      $("#studentForm")[0].reset();

      alert(response);
      btnAction = "insert";
      $("#studentModal").modal("hide");
      loadData();

    },
    error: function(data){
      console.log(data);
    }
  })

})

//
function loadData(){

  $("#studentTable tbody").html("");

  let sendingData = {
    
    "action" : "readAll"
  }
    $.ajax({

    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,
    success: function(data){

      let status = data.status;
      let response = data.data;
      let html = '';
      let tr = '';
      if(status){
    
        response.forEach(item =>{
          tr += "<tr>";
          for(let i in item){
            tr += `<td> ${item[i]} </td>`;
          }
          tr += `<td><a class="btn btn-info m-2 updateInfo" update_id=${item['stdId']}><i class="fas fa-edit" ></i></a><a class="btn btn-danger deleteInfo" delete_id=${item['stdId']}><i class="fas fa-trash"></i></a></td>`;
          tr += "</tr>";
        }) 
        $("#studentTable tbody").append(tr);
      }

    },
    error: function(data){

    }

    })

  }

//
function fetchStudentInfo(stdId){

  let sendingData = {
    
    "action" : "readStudentsInfo",
    "stdId" : stdId
  }
    $.ajax({

    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,
    success: function(data){

      let status = data.status;
      let response = data.data;
      let html = '';
      let tr = '';
      if(status){
        
        $("#stdId").val(response[0].stdId);
        $("#stdName").val(response[0].stdName);
        $("#stdClass").val(response[0].stdClass);

        $("#studentModal").modal("show");
        btnAction = "Update";

      }
    },
    error: function(data){
    }
    })
  }


function deleteStudentInfo(stdId){

  let sendingData = {
    
    "action" : "deleteStudentsInfo",
    "stdId" : stdId
  }
    $.ajax({

    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,
    success: function(data){

      let status = data.status;
      let response = data.data;
      let html = '';
      let tr = '';
      if(status){
        
        alert(response);
        loadData();

      }
    },
    error: function(data){
    }
    })
  }

$("#studentTable").on("click","a.updateInfo", function(){
  
  let id = $(this).attr("update_id");

  fetchStudentInfo(id);

})

$("#studentTable").on("click","a.deleteInfo", function(){
  
  let id = $(this).attr("delete_id");

  if(confirm("Are You Sure To Delete")){
    deleteStudentInfo(id);
  }

})