const salvarRegistro = document.getElementById('salvarRegistro');
const pesquisar = document.getElementById('pesquisa');
const excluirRegistro = document.getElementById('excluirRegistro');
const modalCadastroCliente = document.getElementById('cadastroCliente');


async function DeleteCliente(id) {
    document.getElementById('id_cliente').value = id;
    $('#excluirRegistroFornecdor').modal('show');
}

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
    const response = await fetch('controllercliente.php', option);
    return await response.json();
}

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
    const response = await fetch('controllerpesquisaFornecedor.php', option);
    const query = await response.json();
    let html = '';
    query.data.forEach(element => {
        html += `
        <tr   id="tr${element.id}">    
        <td>${element.id}</td>
            <td>${element.nome}</td>
            <td>${element.sobrenome}</td>
            <td>${element.cpf}</td>
            <td>${element.rg}</td>
            <td>${element.ativo ? '<i class="fa-solid fa-user-check"></i> Ativo' : '<i class="fa-solid fa-user-xmark"></i> Inativo'}</td>
            <td>
            <button onclick="AlterarCliente(${element.id});" type="button" class="btn btn-primary btn-sm btn-warning">
            <i class="fa-solid fa-pen"></i>
            Editar
            </button>
            <button onclick="DeleteCliente(${element.id});" type="button" class="btn btn-danger btn-sm btn-danger">
            <i class="fa-solid fa-trash"></i>
            Excluir
            </button>
            </td>
            </tr>
            `;

    });
    document.getElementById('listacliente').innerHTML = html;
}

async function excluir() {
    const form = document.getElementById('form');
    const formData = new FormData(form);
    const option = {
        method: 'POST',
        body: formData,
        mode: 'cors',
        cache: 'default'
    };
    const response = await fetch('/controllerdeleteFornecedor.php', option);
    const json = await response.json();
    if (!json.status) {
        alert(json.msg);
        return;
    }
    $('#excluirRegistroFornecedor').modal('hide');
    document.getElementById('tr' + document.getElementById('id_cliente').value).remove();
}
async function AlterarCliente(id) {
    try {
        document.getElementById('id_cliente').value = id;
        document.getElementById('acao').value = 'editar';
        const form = document.getElementById('form');
        const formData = new FormData(form);
        const option = {
            method: 'POST',
            body: formData,
            mode: 'cors',
            cache: 'default'
        };
        const response = await fetch('controllerselecionarfornecedor.php', option);
        const json = await response.json();
        document.getElementById('nome').value = json.nome;
        document.getElementById('razao_social').value = json.razao_social;
        document.getElementById('cnpj').value = json.cnpj;
        document.getElementById('ie').value = json.ie;

        $('#cadastroFornecedor').modal('show');

    } catch (error) {
        throw new Error("Erro ao buscar dados do cliente: " + error.message);
    }

}
async function Update() {
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
    const response = await fetch('controllerupdateFornecedor.php', option);
    return await response.json();
}

salvarRegistro.addEventListener('click', async () => {
    if (document.getElementById('acao').value === 'editar') {
        const response = await Update();
        await pesquisa();
        $('#cadastroFornecedor').modal('hide');
        alert(response.msg);
        return;
    }
    const response = await Insert();
    if (!response.status) {
        alert(response.msg);
        return;
    }
    await pesquisa();
    $('#cadastroFornecedor').modal('hide');
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
    await excluir();
});
modalCadastroCliente.addEventListener('hidden.bs.modal', async () => {
    document.getElementById('acao').value = '';
});
modalCadastroCliente.addEventListener('show.bs.modal', async () => {
    document.getElementById('campo_status').className = 'col-6 mt-3 d-none';
    if (document.getElementById('acao').value === 'editar') {
        document.getElementById('campo_status').classList.remove('d-none');
    }
});


