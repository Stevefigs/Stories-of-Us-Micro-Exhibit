const btn = document.querySelector('.burger');
const overlay = document.querySelector('.overlay');
const content = document.querySelector('main');
const bars = document.querySelector('svg');
const pic = document.querySelector('.single .site-main img');




btn.addEventListener('click',function(){
  overlay.classList.remove('hide');
  setTimeout(function(){overlay.classList.remove('fade')},100);
  content.classList.add('hide');
})

overlay.addEventListener('click',function(){
  overlay.classList.add('fade');
  setTimeout(function(){overlay.classList.add('hide')},200);
  content.classList.remove('hide');
})


 // bars.addEventListener('mousedown',function(){
 //    bars.classList.add('click');
 //    })

 // bars.addEventListener('mouseup',function(){
 //     bars.classList.remove('click');
 //    })

let count = 0;

  bars.addEventListener('mouseenter',function(e){
    bars.classList.add('twist');
    count++;
    if(count  % 2 == 0){
      bars.classList.remove('twist');
    }
    if(count  % 3 == 0){
      bars.classList.add('grow');
    }
    console.log('it works');
    })


  pic.addEventListener('mouseenter',function(e){
    pic.classList.add('grow');
    count++;
    if(count  % 2 == 0){
      pic.classList.remove('grow');
    }
    console.log('it works');
    })