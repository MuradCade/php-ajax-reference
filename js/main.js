loadData();
let btnAction = "insert";
$('#Formdata').submit(function(event){
    event.preventDefault();
// gets the form data
let formData = new FormData($("#Formdata") [0]);
// adds the action to the form value
formData.append("action", "addstudent");

// if(btnAction == "insert"){
//     formData.append("action", "addstudent");
// }else{
//     formData.append("action", "readAll");
// }
// method
// dataType
// url
// data  = data been send

$.ajax({
    method:"POST",
    dataType:"JSON",
    url:"api.php",
    data:formData,
    processData:false,
    contentType:false,
    success: function(data){
        let status = data.status;
        let response = data.msg;
        alert(response);
        $('#Formdata')[0].reset();
        
    },
    error:function(data){
        console.log(data);

    }

})
})

function loadData(){

    $("#tabledata tbody").html("");
  
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
            tr += `<td><a class="btn btn-info m-2 updateInfo" update_id=${item['id']}>Update</a><a class="btn btn-danger deleteInfo" delete_id=${item['id']}>Delete</a></td>`;
            tr += "</tr>";
          }) 
          $("#tabledata tbody").append(tr);
          
          
        }
      
  
      },
      error: function(data){
            console.log(data.status);
      }
  
      })
  
    }


$("#cancel").click(function(){
    $("#model").modal("hide");
})
