const tbody = document.getElementById("corpo");

const listarUsuarios = async() => {
    const dados = await fetch("./list.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
    console.log(resposta);
}

listarUsuarios();