const salvarRegistro = document.getElementById('salvarRegistro');
const pesquisar = document.getElementById('pesquisa');
const excluirRegistro = document.getElementById('excluirRegistro');

async function DeleteUsuario(id) {
    document.getElementById('id_usuario').value = id;
    $('#excluirRegistroUsuario').modal('show');
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
    const response = await fetch('controllerusuario.php', option);
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
    const response = await fetch('controllerpesquisausuario.php', option);
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
            <td>
                <button onclick="AlterarUsuario(${element.id});" type="button" class="btn btn-primary btn-sm btn-warning">
                    <i class="fa-solid fa-pen"></i>
                    Editar
                </button>
                <button onclick="DeleteUsuario(${element.id});" type="button" class="btn btn-danger btn-sm btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    Excluir
                </button>
            </td>
        </tr>
        `;

    });
    document.getElementById('listausuario').innerHTML = html;
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
    const response = await fetch('controllerdeleteusuario.php', option);
    const json = await response.json();
    if (!json.status) {
        alert(json.msg);
        return;
    }
    $('#excluirRegistroUsuario').modal('hide');
    document.getElementById('tr' + document.getElementById('id_usuario').value).remove();
}
async function AlterarUsuario(id) {
    try {
        document.getElementById('id_usuario').value = id;
        document.getElementById('acao').value = 'editar';
        const form = document.getElementById('form');
        const formData = new FormData(form);
        const option = {
            method: 'POST',
            body: formData,
            mode: 'cors',
            cache: 'default'
        };
        const response = await fetch('controllerselecionarusuario.php', option);
        const json = await response.json();
        document.getElementById('nome').value = json.nome;
        document.getElementById('sobrenome').value = json.sobrenome;
        document.getElementById('cpf').value = json.cpf;
        document.getElementById('rg').value = json.rg;
        $('#cadastroUsuario').modal('show');

    } catch (error) {
        throw new Error("Erro ao buscar dados do usuario: " + error.message);
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
    const response = await fetch('controllerupdateusuario.php', option);
    return await response.json();
}
    
salvarRegistro.addEventListener('click', async () => {
    if (document.getElementById('acao').value === 'editar') {
        const response = await Update();
        await pesquisa();
        $('#cadastroUsuario').modal('hide');
        alert(response.msg);
        return;
    }
    const response = await Insert();
    if (!response.status) {
        alert(response.msg);
        return;
    }
    await pesquisa();
    $('#cadastroUsuario').modal('hide');
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


