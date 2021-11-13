const tbody = document.querySelector("tbody");

const ListarUsuarios = async() =>{
    const dados = await fetch("./list.php");
     const respotsa = await dados.text();
     tbody.innerHTML = respotsa;
    };

ListarUsuarios();