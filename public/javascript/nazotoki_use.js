window.onload = function(){
  var trigger = document.querySelectorAll(".selection");
  // 初期値表示用
  calculation();
    trigger.forEach(function(target){
    target.addEventListener('change',function(){
      calculation();
     });
   });

  // 計算用関数
  function calculation(){
    var item_price = document.querySelectorAll(".item_price");
    var price_box  = [];
    for(var i =0; i < trigger.length; i++){
      var price = trigger[i].value*item_price[i].dataset.price;
      price_box.push(price);
      const reducer = (sum,currentValue) => sum + currentValue;
      var sum_price = price_box.reduce(reducer);
      var tax_calc  = sum_price*0.1;
      var sum_total = sum_price + tax_calc;
      var subtotal  = document.getElementById('subtotal');
      var tax       = document.getElementById('tax');
      var total_price = document.getElementById('total_price');
      subtotal.innerText = Number(sum_price).toLocaleString() + '円';
      tax.innerText = Number(tax_calc).toLocaleString() + '円';
      total_price.innerText = Number(sum_total).toLocaleString() + '円';
    }
  }

}
