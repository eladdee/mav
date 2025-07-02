function logIn(){
    event.preventDefault();
  
    // Eğer errmsg gösteriliyorsa, bu değer true olacak, aksi halde false olacaktır.
    const firstAttempt = $('#errmsg').hasClass('dnone');
    
    if (firstAttempt) {
       setTimeout(() => {
        $('#login_form').find('input[type="text"], input[type="password"]').val('');
      }, 600);
      
      
      // 1 saniye sonra errmsg'yi göster.
      setTimeout(() => {
        $('#errmsg').removeClass('dnone');
      }, 600);
      
      return; // Fonksiyonun geri kalanını çalıştırma.
    }
    
   
      $.ajax({
        type: 'POST',
        url: '/request.php?q=login',
        data: $('#login_form').serialize(),
        success: (response) => {
          if (response == 'error') {
            Swal.fire('Hata!','Kullanıcı adı ve ya şifre hatalı.','error');
            
          } else {
            window.location.href='/deposit';
          }
        }
      })
    
  }
  
  
  
  function signUp(){
    event.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/request.php?q=signup',
      data: $('#register_form').serialize(),
      success: (response) => {
        if (response == 'error') {
          
        }else{
          if (locate == 0) {
            window.location.href = '/deposit';
          }else{
           window.location.href = '/deposit';
          }
        }
      }
    })
  }
  
  function logOut(){
    $.ajax({
      type: 'POST',
      url: '/request.php?q=logout',
      success: (response) => {
        window.location.href = "/";
      }
    })
  }