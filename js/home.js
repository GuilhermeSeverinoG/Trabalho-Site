fetch("./php/home.php")
.then(resposta => resposta.json())
.then(json => carregaElementosNaPagina(json)); 

function carregaElementosNaPagina(json) {
    console.log(json)
    const resultado = document.querySelector('main #resultado');

    for (let produto of json) {
        let card = document.createElement('div');
        card.setAttribute("class", "card");

        let img = document.createElement('img');
        img.src = 'imgs/'+produto.imagem_produto;
        card.appendChild(img);

        let p1 = document.createElement('p');
        p1.innerHTML = produto.descricao_produto;
        card.appendChild(p1);

        let p2 = document.createElement('p');
        p2.innerHTML = 'Estoque: '+produto.qtd_produto;
        card.appendChild(p2);

        let p3 = document.createElement('p');
        p3.innerHTML = 'R$ '+produto.preco_produto;
        card.appendChild(p3);

        console.log(card);
        resultado.appendChild(card);
    } 
}