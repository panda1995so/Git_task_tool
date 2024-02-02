window.onload = function(){
  var trigger = document.querySelectorAll(".selection");
   trigger.forEach(function(target){
     target.addEventListener('change',function(){
       var quantity = target.value;
console.log(quantity);
        quantity = quantity*500;
console.log(quantity);

     });
   });
}
