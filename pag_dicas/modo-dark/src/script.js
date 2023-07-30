$('body').toggleClass(localStorage.toggled);
$('.toggleWrapper .dn').click(function(){
  if(localStorage.toggled != 'darkmode'){
     $('body').toggleClass('darkmode', true)
    localStorage.toggled = 'darkmode';
     }else{
    $('body').toggleClass('darkmode', false)
       localStorage.toggled =''
  }
})
           