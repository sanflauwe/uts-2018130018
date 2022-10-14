let listServices = document.getElementsByTagName("ol");
listServices[0].addEventListener("click.tampilkan");

function tampilkan(event){
    alert("Cek Service yang kami tawarkan"+event.target.innerHTML);
}
