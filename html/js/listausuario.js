const salvarRegistro = document.getElementById('salvarRegistro');
const pesquisar = document.getElementById('pesquisa');
const excluirRegistro = document.getElementById('excluirRegistro');

async function Insert() {
    const form = document.getElementById('form');
    if (!form) {
        alert('Formulário com os dados não encontrado!');
        
    }
    const formData = new FormData(form);
    const option = {
        method: 'POST',
        body: formData,
        mode: 'cors',
        cache: 'default'
    };
    const response = await fetch('controllerusuario.php', option);
    return await response.json();
}

async function DeleteUsuario(id) {}

async function pesquisa() {
    const form = document.getElementById('form');
    if (!form) {
        alert('Formulário com os dados não encontrado!');
        return;
    }
    const formData = new FormData(form);
    const option = {
        method: 'POST',
        body: formData,
        mode: 'cors',
        cache: 'default'
    };
    const response = await fetch('controllerpesquisauser.php', option);
    const query = await response.json();
    let html = '';
    query.data.forEach(element => {
        html += `
        <tr>    
            <td>${element.id}</td>
            <td>${element.nome_completo}</td>
            <td>${element.cpf}</td>
            <td>${element.email}</td>
            <td>
                  <button class="btn btn-primary btn-sm btn-warning"><i
                      class="fa-solid fa-pen"></i>Editar</button>
                  <button class="btn btn-danger btn-sm btn-danger"><i
                      class="fa-solid fa-trash"></i>Excluir</button>
            </td>
        </tr>
        `;

    });
    document.getElementById('listacliente').innerHTML = html;
}
salvarRegistro.addEventListener('click', async () => {
    const response = await Insert();
    if (!response.status) {
        alert(response.msg);
        return;
    }
    alert(response.msg);

});

document.addEventListener('DOMContentLoaded', async () => {
    await pesquisa();
});

pesquisar.addEventListener('keypress', async () => {
    try {
        await pesquisa();
    } catch (error) {
        console.log(error);
    }
});

excluirRegistro.addEventListener('click', async () => {
});