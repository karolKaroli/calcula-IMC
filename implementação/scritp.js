const form = document.getElementByid('form');
const campos = document.querySelectorAll('.required');

    function verificar() {
       if (campos[0].value < 0){
          console.log('NOTA DEVE SER DE 0 ATÉ 100');
    }
      else if (campos[0].value > 100) {
        console.log('NOTA DEVE SER DE 0 ATÉ 100');

  }
      else {
        console.log('VALIDADA NOTA');
    }