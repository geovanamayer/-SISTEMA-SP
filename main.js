const KEY_BD = '@usuariosestudo'


var listaRegistros = {
    ultimoIdGerado:0,
    usuarios:[]
}


var FILTRO = ''


function gravarBD(){
    localStorage.setItem(KEY_BD, JSON.stringify(listaRegistros) )
}

function lerBD(){
    const data = localStorage.getItem(KEY_BD)
    if(data){
        listaRegistros = JSON.parse(data)
    }
    desenhar()
}


function pesquisar(value){
    FILTRO = value;
    desenhar()
}


function desenhar(){
    const tbody = document.getElementById('listaRegistrosBody')
    if(tbody){
        var data = listaRegistros.usuarios;
        if(FILTRO.trim()){
            const expReg = eval(`/${FILTRO.trim().replace(/[^\d\w]+/g,'.*')}/i`)
            data = data.filter( usuario => {
                return expReg.test( usuario.nome ) || expReg.test( usuario.email)|| expReg.test( usuario.setor)|| expReg.test( usuario.senha)|| expReg.test( usuario.unidade)|| expReg.test( usuario.login)
                
            } )
        }
        data = data
            .sort( (a, b) => {
                return a.nome < b.nome ? -1 : 1
            })
            .map( usuario => {
                return `<tr>
                        <td>${usuario.id}</td>
                        <td>${usuario.login}</td>
                        <td>${usuario.nome}</td>
                        <td>${usuario.senha}</td>
                        <td>${usuario.setor}</td>
                        <td>${usuario.email}</td>
                        <td>${usuario.unidade}</td>
                        <td>
                            <button onclick='vizualizar("cadastro",false,${usuario.id})'>Editar</button>
                            <button class='vermelho' onclick='perguntarSeDeleta(${usuario.id})'>Deletar</button>
                        </td>
                    </tr>`
            } )
        tbody.innerHTML = data.join('')
    }
}

function insertUsuario(nome, senha, setor, email,unidade,login){
    const id = listaRegistros.ultimoIdGerado + 1;
    listaRegistros.ultimoIdGerado = id;
    listaRegistros.usuarios.push({
        id, nome, senha, setor, email, unidade,login
    })
    gravarBD()
    desenhar()
    vizualizar('lista')
}

function editUsuario(id, nome, senha, setor,email,unidade,login){
    var usuario = listaRegistros.usuarios.find( usuario => usuario.id == id )
    usuario.login = login;
    usuario.nome = nome;
    usuario.senha = senha;
    usuario.setor = setor;
    usuario.email = email;
    usuario.unidade = unidade;
    gravarBD()
    desenhar()
    vizualizar('lista')
}

function deleteUsuario(id){
    listaRegistros.usuarios = listaRegistros.usuarios.filter( usuario => {
        return usuario.id != id
    } )
    gravarBD()
    desenhar()
}

function perguntarSeDeleta(id){
    if(confirm('Quer deletar o registro de id '+id)){
        deleteUsuario(id)
    }
}


function limparEdicao(){
    document.getElementById('login').value = ''
    document.getElementById('nome').value = ''
    document.getElementById('senha').value = ''
    document.getElementById('setor').value = ''
    document.getElementById('email').value = ''
    document.getElementById('unidade').value = ''

}

function vizualizar(pagina, novo=false, id=null){
    document.body.setAttribute('page',pagina)
    if(pagina === 'cadastro'){
        if(novo) limparEdicao()
        if(id){
            const usuario = listaRegistros.usuarios.find( usuario => usuario.id == id )
            if(usuario){
                document.getElementById('id').value = usuario.id
                document.getElementById('login').value = usuario.login
                document.getElementById('nome').value = usuario.nome
                document.getElementById('senha').value = usuario.senha
                document.getElementById('setor').value = usuario.setor
                document.getElementById('email').value = usuario.email
                document.getElementById('unidade').value = usuario.unidade
            }
        }
        document.getElementById('login').focus()
        document.getElementById('nome').focus()
        document.getElementById('email').focus()
        document.getElementById('setor').focus()
        document.getElementById('senha').focus()
        document.getElementById('unidade').focus()
       
    }
}



function submeter(e){
    e.preventDefault()
    const data = {
        id: document.getElementById('id').value,
        login: document.getElementById('login').value,
        nome: document.getElementById('nome').value,
        senha: document.getElementById('senha').value,
        setor: document.getElementById('setor').value,
        email: document.getElementById('email').value,
        unidade: document.getElementById('unidade').value,
    }
    if(data.id){
        editUsuario(data.id, data.nome, data.senha, data.setor, data.email, data.unidade, data.login) 
    }else{
        insertUsuario( data.nome, data.senha, data.setor, data.email, data.unidade, data.login )
    }
}


window.addEventListener('load', () => {
    lerBD()
    document.getElementById('cadastroRegistro').addEventListener('submit', submeter)
    document.getElementById('inputPesquisa').addEventListener('keyup', e => {
        pesquisar(e.target.value)
    })

})