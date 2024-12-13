function trocarFoto(id, imagemOriginal, novaImagem) {
    var imagem = document.getElementById(id);
    
    imagem.classList.add('rotate');
    
    if (imagem.src.includes(imagemOriginal)){
      imagem.src = novaImagem;
    } else {
      imagem.src = imagemOriginal;
    }
  
    setTimeout(function() {
      imagem.classList.remove('rotate');
    }, 600); // Tempo de animação de rotação (600ms)
  }
  