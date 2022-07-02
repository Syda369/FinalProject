//Drpdown
let avatar=document.querySelector(".avatar"),
notification=document.querySelector(".notification");
dropMenue(avatar);
dropMenue(notification);
function dropMenue(selector){
    selector.addEventListener("click",()=>{
      let dropMenu=selector.querySelector(".dropDwonmenu");
      dropMenu.classList.contains('active') ?  dropMenu.classList.remove('active') :
      dropMenu.classList.add('active');
    });
}










//sidebar menu
let sidebar=document.querySelector(".sidebar");
let bars=document.querySelector(".bars");
bars.addEventListener("click",()=>{
    sidebar.classList.contains("active") ? sidebar.classList.remove('active') :
    sidebar.classList.add("active");
});
//Toggle mode
let mode=document.querySelector(".mode");
mode.addEventListener("click",()=>{
  if(document.body.classList.contains("dark")){
    document.body.classList.remove("dark");
    mode.querySelector("i").classList.replace("fa-sun","fa-moon");

  }else{
    document.body.classList.add("dark");
    mode.querySelector("i").classList.replace("fa-moon","fa-sun");
  }
})


$(document).ready(function () {
  $('.table').DataTable({
    "paging": true,
    "pagingType": "simple",
    "lengthChange": false,
    "searching":false,
    
    
  });
  
  $('.dataTables_length').addClass('bs-select');
});
