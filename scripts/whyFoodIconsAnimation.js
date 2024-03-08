const cardParent = document.querySelectorAll('.why-card');
const cardIcon = document.querySelectorAll('.why-card-icon');
const animationType = "animate-spin";
const translatex = "translate-x-28";
console.log(cardParent);
cardParent.forEach((parent,index)=>{
    parent.addEventListener('mouseenter',()=>{
        cardIcon[index].classList.add(translatex,'transition-all',"duration-500");
        console.log(index);  
    })
})
cardParent.forEach((parent,index)=>{
    parent.addEventListener('mouseleave',()=>{
        cardIcon[index].classList.remove(translatex);
        console.log(index);  
    })
})