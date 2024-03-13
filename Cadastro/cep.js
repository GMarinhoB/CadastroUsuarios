
function buscaCep()
{
    let cep = document.getElementById('cep').value;
    if(cep !== "")
    {
        let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        req.onload = function ()
        {
            if(req.status === 200)
            {
                let endereco = JSON.parse(req.response);
                document.getElementById("rua").value = endereco.street;
                document.getElementById("cidade").value = endereco.city;
                document.getElementById("uf").value = endereco.state;
                document.getElementById("bairro").value = endereco.neighborhood;
            }
            else if(req.status = 404)
            {
                alert("CEP INVÁLIDO");
            }
            else
            {
                alert("ERRO NO CEP");
            }
        }
    }
}


window.onload = function() 
{
    let CEP = document.getElementById("cep");
    CEP.addEventListener("blur", buscaCep);
}