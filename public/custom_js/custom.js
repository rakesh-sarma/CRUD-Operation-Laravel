function Addstudent(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var dept = document.getElementById('dept').value;
    var url = "/insert";
    var data ={

        name:name,
        email:email,
        dept:dept,
    }


    axios.post(url,data)
  .then(function (response) {
    onshow()
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
}

window.addEventListener('load',()=>{
    var url="/OnSelect";

    axios.get(url)
  .then(function (response) {
    document.getElementById('output').innerHTML=response.data;
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
})

function onshow(){
    var url="/OnSelect";

    axios.get(url)
  .then(function (response) {
    document.getElementById('output').innerHTML=response.data;
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })

}
function deletedata(id){
    var url = "/delete/"+id;

    axios.get(url)
  .then(function (response) {
    onshow();
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
}
// for edit
function editdata(id){

  var hiddenID = $("#hiddenID").val(id)
        
  $("#editModal").modal('show');

  var url = "/edit/"+id;

    axios.get(url)
  .then(function (response) {
   var mydata =response.data;
   $('#name1').val(mydata.name);
   $('#email2').val(mydata.email);
   $('#dept3').val(mydata.dept);
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })

}
function update(){
  var hiddenID = $("#hiddenID").val()

  var name = document.getElementById('name1').value;
    var email = document.getElementById('email2').value;
    var dept = document.getElementById('dept3').value;
    var url = "/update/"+hiddenID;
    var data ={

        name:name,
        email:email,
        dept:dept,
    }


    axios.post(url,data)
  .then(function (response) {
    onshow()
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })

}