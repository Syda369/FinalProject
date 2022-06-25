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
// window.matchMedia("(max-width:768px)").matches ? sidebar.ClassList.remove("active")
// :sidebar.ClassList.add("active");
// Basic example

$(document).ready(function () {
  $('.table').DataTable({
    "paging": false // false to disable pagination (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
});
// Basic example
$(document).ready(function () {
  $('.table').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});