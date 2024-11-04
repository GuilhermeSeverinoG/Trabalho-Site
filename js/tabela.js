fetch("./php/tabelaEstoque.php")
.then(resposta => resposta.json())
.then(json => carregaElementosNaPagina(json)); 

function carregaElementosNaPagina(json) {
    console.log(json)
    let table = document.createElement('table');

    let th1 = document.createElement('th');
    th1.innerHTML = "C.I.P"
    table.appendChild(th1)

    let th2 = document.createElement('th');
    th2.innerHTML = "Descrição"
    table.appendChild(th2)

    let th3 = document.createElement('th');
    th3.innerHTML = "Tamanho"
    table.appendChild(th3)

    let th4 = document.createElement('th');
    th4.innerHTML = "Quantidade"
    table.appendChild(th4)

    let th5 = document.createElement('th');
    th5.innerHTML = "Ações"
    table.appendChild(th5)
    let th6 = document.createElement('th');
    th6.innerHTML = ""
    table.appendChild(th6)

    for (let produto of json) {
        let tr = document.createElement('tr');

        let td1 = document.createElement('td');
        td1.innerHTML = produto.id_produto;
        tr.appendChild(td1);

        let td2 = document.createElement('td');
        td2.innerHTML = produto.descricao_produto;
        tr.appendChild(td2);

        let td3 = document.createElement('td');
        td3.innerHTML = produto.tamanho_produto;
        tr.appendChild(td3);

        let td4 = document.createElement('td');
        td4.innerHTML = produto.qtd_produto;
        tr.appendChild(td4);

        let td5 = document.createElement('td');
        td5.innerHTML = `<button id="update" 
onclick="redirectProduto('${produto.id_produto}','${produto.descricao_produto}','${produto.tamanho_produto}','${produto.qtd_produto}','${produto.preco_produto}','${produto.imagem_produto}')">Atualizar</button>`;
        tr.appendChild(td5);

        let td6 = document.createElement('td');
        td6.innerHTML = `<button id="delete" 
onclick="redirectExcluirProduto(${produto.id_produto})">Excluir</button>`;
        tr.appendChild(td6);
        
        table.appendChild(tr);
    }
    let resultado = document.querySelector('#resultado');
    
    resultado.appendChild(table);
}

function redirectProduto(id_produto, descricao_produto, tamanho_produto, qtd_produto, preco_produto, imagem_produto) {
    window.location.href = "./atualizarProduto.php?id_produto=" + id_produto + "&descricao_produto=" + descricao_produto + "&tamanho_produto=" + tamanho_produto + "&qtd_produto=" + qtd_produto + "&preco_produto=" + preco_produto + "&imagem_produto=" + imagem_produto;
    localStorage.setItem('id_produto', id_produto);
    localStorage.setItem('descricao_produto', descricao_produto);
    localStorage.setItem('tamanho_produto', tamanho_produto);
    localStorage.setItem('qtd_produto', qtd_produto);
    localStorage.setItem('preco_produto', preco_produto);
    localStorage.setItem('imagem_produto', imagem_produto);
}

function loadFieldsUpdateProduto() {
    const urlParams = new URLSearchParams(window.location.search);
    document.getElementById("id_produto").value = urlParams.get("id_produto");
    document.getElementById("descricao_produto").value = urlParams.get("descricao_produto");
    document.getElementById("tamanho_produto").value = urlParams.get("tamanho_produto");
    document.getElementById("qtd_produto").value = urlParams.get("qtd_produto");
    document.getElementById("preco_produto").value = urlParams.get("preco_produto");
    document.getElementById("imagem_produto").value = urlParams.get("imagem_produto");
}
function redirectExcluirProduto(id_produto) {
    localStorage.setItem('id_produto', id_produto)
    var resposta = confirm("Deseja remover esse registro?");
    if (resposta == true) {
        window.location.href = "./php/excluirProduto.php?id_produto=" + id_produto;
    }
}