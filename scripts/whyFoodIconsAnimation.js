const cardParent = document.querySelectorAll('.why-card');
const cardIcon = document.querySelectorAll('.why-card-icon');
const animationType = "animate-spin";
console.log(cardParent);
cardParent.forEach((parent,index)=>{
    parent.addEventListener('mouseenter',()=>{
        cardIcon[index].classList.add(animationType,'transition-all');
        console.log(index);  
    })
})
cardParent.forEach((parent,index)=>{
    parent.addEventListener('mouseleave',()=>{
        cardIcon[index].classList.remove(animationType);
        console.log(index);  
    })
})