/**
* Capturar itens do banco de dados
*/
function carregarItens(){
	//variáveis
	var itens = "", url = "dados/dados.php";

    //Capturar Dados Usando Método AJAX do jQuery
    $.ajax({
	    url: url,
	    cache: false,
	    dataType: "json",
	    beforeSend: function() {
		    $("h2").html("Carregando..."); //Carregando
	    },
	    error: function() {
		    $("h2").html("Há algum problema com a fonte de dados");
	    },
	    success: function(retorno) {
		    if(retorno[0].erro){
			    $("h2").html(retorno[0].erro);
		    }
		    else{
			    //Laço para criar linhas da tabela
			    for(var i = 0; i<retorno.length; i++){
				    itens += "<tr>";
				    itens += "<td>" + retorno[i].login + "</td>";
				    itens += "<td>" + retorno[i].nome + "</td>";
				    itens += "<td>" + retorno[i].senha + "</td>";
				    itens += "<td>" + retorno[i].setor + "</td>";
                    itens += "<td>" + retorno[i].email + "</td>";
                    itens += "<td>" + retorno[i].unidade + "</td>";
				    itens += "</tr>";
			    }
			    //Preencher a Tabela
			    $("#minhaTabela tbody").html(itens);
			    
			    //Limpar Status de Carregando
			    $("h2").html("Carregado");
		    }
	    }
    });
}