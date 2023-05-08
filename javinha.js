function mostrarSenha() {
    var senha = document.getElementById("senha");
    if (senha.type === "password") {
      senha.type = "text";
    } else {
      senha.type = "password";
    }
  }

  function sair() {
    window.history.pushState(null, null, '../index.html');
    window.location.href = 'index.html';
  }