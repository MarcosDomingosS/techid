const button1 = document.querySelector("#login1")
const modal1 = document.querySelector("#modal1")
const buttonClose1 = document.querySelector("#ok1")
const button2 = document.querySelector("#login2")
const modal2 = document.querySelector("#modal2")
const buttonClose2 = document.querySelector("#ok2")


button1.onclick = function(){
    modal1.showModal()
}
buttonClose1.onclick = function(){
    modal1.close()
}
button2.onclick = function(){
    modal2.showModal()
}
buttonClose2.onclick = function(){
    modal2.close()
}