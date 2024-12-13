function trocarFoto(id, imagemOriginal, novaImagem) {
    var imagem = document.getElementById(id);
    
    // Adiciona a animação de rotação
    imagem.classList.add('rotate');
    
    // Verifica o estado atual da imagem
    if (imagem.src.includes(imagemOriginal)) {
      // Se estiver na imagem original, troca para a nova imagem
      imagem.src = novaImagem;
    } else {
      // Se estiver na nova imagem, volta à imagem original
      imagem.src = imagemOriginal;
    }
  
    // Remove a animação após o término
    setTimeout(function() {
      imagem.classList.remove('rotate');
    }, 600); // Tempo de animação de rotação (600ms)
  }
  